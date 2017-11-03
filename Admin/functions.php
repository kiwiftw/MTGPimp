<?php

#This section is for generic functions used across all pages
function processSQL($sql, $conn){
	if ($conn->query($sql) === TRUE) {
		# Worked, not putting any user output here.   
	} else {
	    echo mysqli_error($conn);
	}
}
function getConnection(){
	# Parse ini file that holds all configuration data and create connection. 
	$ini = $_SERVER['DOCUMENT_ROOT'] . "/private/config.ini";
	$config = parse_ini_file($ini); 
	$servername = base64_decode($config['servername']);
	$username = base64_decode($config['username']);
	$password = base64_decode($config['password']);
	$dbname = base64_decode($config['dbname']);
	$dbport = base64_decode($config['dbport']);

	$conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);
	return $conn;
}

# This section is for functions related to the admin page 
function isFoil($setShort, $name){
	# Quick and dirty way to establish the non-foil sets.  There are some exceptions where in sets some foil cards were printed (ie commanders in commander product)
	# There will be a second section for 'outliers' that don't follow the bulk rules. 

	$nonFoilArray = array("LEA", "LEB", "2ED", "3ED", "4ED", "5ED", "6ED", "ARN", "ATQ", "LEG", "DRK", "FEM", "HML", "ICE", "ALL", "CSP", "MIR", "VIS", "WTH", "TMP", "STH", "EXO", "USG", "CHR", "ATH", "POR", "PO2", "PTK", "CEI", "VAN", "ITP", "MGB", "pCEL", "pARL", "RQS", "pLGM", "pMEI", "CED", "pDRC", "pPRE", "pJGP", "UGL", "pALP", "ULG", "UDS", "S99", "pGRU", "pWOR", "pWOS", "MMQ", "BRB", "pSUS", "pFNM", "pELP", "NMS", "S00", "PCY", "BTD", "pMPR", "APC", "DKM", "pGTW", "pHHO", "pGPX", "pMGD", "MED", "pLPA", "pSUM", "ME2", "pWPN", "DD2", "DDC", "DDD", "DDE", "DDF", "DDG", "DDH", "DDI", "DDJ", "DDK", "DDL", "DDM", "DDN", "DD3", "DDO", "DDP", "ME3", "HO9", "PD2", "PD3", "HOP", "PC2", "CMD", "CM1", "C13", "C14", "C15", "ME4", "VMA", "TPR", "pPOD", "pCMP", "CST", "TSB", "EVG", "DPA", "ARC", "DD3_DVD", "DD3_EVG", "DD3_GVL", "DD3_JVC", "FRF_UGIN");
	if (in_array($setShort, $nonFoilArray)) {
		return "No";
	} else {
		return "Yes";
	} 
}

function addSet($setData, $conn, $safeSet, $setShort){
	# Adds a set to the database.  
	# Update all them datas if there's a duplicate. (Run into issues creating multiples)
	# This function parses the setData json for the specific set information and then adds to Sets table.
	# Languages are an array so parsing that separately so I can also populate the JoinLanguages table at the same time

	$setShort = $setData["ShortName"];
	$frame = $conn->escape_string($setData["Frame"]);
	$border = mysqli_real_escape_string($conn,$setData["Border"]);
	$sql = "INSERT INTO Sets (PK_SetName, Border, Frame, ShortName)
		VALUES ('$safeSet', '$border', '$frame', '$setShort')
		ON DUPLICATE KEY
		UPDATE 	PK_SetName='$safeSet',
				Border='$border',
				Frame='$frame',
				ShortName='$setShort';";
	processSQL($sql, $conn);

	# Moving onto the languages section.  
	# Verify that all languages are up to date
	addLanguages($conn);

	# Shrek the existing join languages table for the set data since we can't run an update because it's all FK's. 
	$sql = "DELETE FROM JoinLanguages WHERE FK_SetName = '$safeSet';";
	processSQL($sql, $conn);

	# Look at the language and poll the db for the pk_id of the languages table to add to the setname and languagesid to the JoinLanguages table
	$language = $setData["Languages"];
	$langCount = count($language);
	for($x=0;$x<$langCount;$x++){
		$val = $language[$x];
		$val = trim($val);
		$sql = "SELECT PK_LanguageID FROM Languages WHERE LanguageName = '$val'";
		if ($result = $conn->query($sql)) {
			$row = mysqli_fetch_assoc($result);
			$id = $row['PK_LanguageID'];
			# Update the JoinLanguages table
			$sql = "INSERT INTO JoinLanguages (FK_SetName, FK_LanguageID)
					VALUES ('$safeSet', '$id');";
			processSQL($sql, $conn);
		} else { echo mysqli_error($conn); }
	}
}

function addCards($conn, $set, $setShort){
	# Adds all the card data to the Cards table. 
	# Parse the AllSets json 

	$cardData = file_get_contents('./AllSets.json', true);
	#$cardData =  file_get_contents('../LEA.json', true);  # Use this line for testing purposes.
	$cardJson = json_decode($cardData, true);

	foreach($cardJson as $key => $value){
		if($setShort == $key){
			$count = count($value['cards']);
			for($x=0;$x<$count;$x++){
				$artist = mysqli_real_escape_string($conn, $value['cards'][$x]['artist']); //because someone decided it would be fun to have the last name o'connor
				$cardName = mysqli_real_escape_string($conn, $value['cards'][$x]['name']);
				$id = $value['cards'][$x]['id'];
				$foil = isFoil($setShort, $cardName);
				$safeSet = mysqli_real_escape_string($conn, $set);
				$sql = "INSERT INTO Cards (PK_CardID, CardName, FK_SetName, Artist, Foil)
						VALUES ('$id','$cardName', '$safeSet', '$artist', '$foil')
						ON DUPLICATE KEY 
						UPDATE 	PK_CardID='$id',
								CardName='$cardName',
								FK_SetName='$safeSet',
								Artist='$artist',
								Foil='$foil';";
				processSQL($sql, $conn);
			}
		}
	}
}

function refreshAll($conn){
	$cardData = file_get_contents('./AllSets.json', true);
	#$cardData =  file_get_contents('../LEA.json', true);  # Use this line for testing purposes.
	$cardJson = json_decode($cardData, true);

	$setData = file_get_contents('./SetData.json', true);
	$setJson = json_decode($setData, true);

	$count = count($setJson);
	for($x=0;$x<$count;$x++){
		$setData = $setJson[$x];
		$set = $setJson[$x]['SetName'];
		$safeSet = mysqli_real_escape_string($conn, $set);
		$setShort = $setJson[$x]['ShortName'];
		addSet($setData, $conn, $safeSet, $setShort);
		addCards($conn, $set, $setShort);
	}
}

function refreshSpecific($set, $conn){
	$setData = file_get_contents('./SetData.json', true);
	$setJson = json_decode($setData, true);
	$safeSet = mysqli_real_escape_string($conn, $set);
	
	# Drop the join tables in case things were updated due to inaccurate info originally
#	$sql = "DELETE FROM JoinLanguages WHERE FK_SetName = '$safeSet';";
#	processSQL($sql, $conn);

	# Get the json data about the set and pass it into the 'add set' function
	$count = count($setJson);
	for($x=0;$x<$count;$x++){
		if($setJson[$x]['SetName'] == $set){
			$setData = $setJson[$x];
			$setShort = $setJson[$x]['ShortName'];
			break;
		}
	}

	addSet($setData, $conn, $safeSet, $setShort);

	addCards($conn, $set, $setShort);
}

function loadJson(){
	$file = './AllCards-x.json';
	$jsonData = file_get_contents($file, true);
	$json = json_decode($jsonData, true);
	return $json;
}

function addLanguages($conn){
	# These shouldn't be updated regularly so I'm adding them as static data here. Easier to update from their own special function if need for update arises
	$sql = "INSERT IGNORE INTO Languages (PK_LanguageID, LanguageName)
	VALUES ('1', 'English'), ('2', 'Chinese Simplified'), ('3', 'Chinese Traditional'), ('4', 'French'), ('5', 'German'), ('6', 'Italian'), ('7', 'Japanese'), ('8', 'Portuguese'), ('9', 'Russian'), ('10', 'Spanish'), ('11', 'Korean');";  
  	processSQL($sql, $conn);
}


# This section is for functions related to returning the cards to the user. 

function getEditions($cardName){
	#print($cardName);
	$json = loadJson();
	$edition = [];
	foreach($json[$cardName]["printings"] as $set){
		array_push($edition, $set);
	}
	return $edition;
}

function getFoils($set, $language, $cardName){
	## grab stuff from 
	$cardURL = "../MTGImages/" . $set . "/foil/" . $language . "/" . $artCardName . ".jpg"; 
}

function getForeign($name) {
	
}

function getCard($conn, $name) {
	## Should return an array of cards. CardName, SetName, Artist, Foil, Border, Frame, Languages
	$returnCardArray = array();
	$safeCard = mysqli_real_escape_string($conn, preg_replace( "/\r|\n/", "", $name));
	$sql = "SELECT `CardName`, `PK_SetName`, `Artist`, `Foil`, `Border`, `Frame`, `ShortName`
			FROM Cards 
			INNER JOIN Sets 
				on Sets.PK_SetName = Cards.FK_SetName 
			WHERE CardName = '$safeCard';";

	if ($result = $conn->query($sql)) {
		while ($row = $result->fetch_assoc()) {
        	$setArray = array('CardName' => $row['CardName'],  'SetName' => $row['PK_SetName'], 'Artist' => $row['Artist'], 'Foil' => $row['Foil'], 'Border' => $row['Border'], 'Frame' => $row['Frame'], 'ShortName' => $row['ShortName']);
        	$safeSet = mysqli_real_escape_string($conn, $row["PK_SetName"]);

        	$sql = "SELECT `LanguageName` 
			FROM JoinLanguages
			INNER JOIN Sets
				on Sets.PK_SetName = JoinLanguages.FK_SetName
			INNER JOIN Languages
				on Languages.PK_LanguageID = JoinLanguages.FK_LanguageID
			WHERE Sets.PK_SetName = '$safeSet';";
			if ($langResult = $conn->query($sql)) {
				$langArray = array();
				while ($langRow = $langResult->fetch_assoc()) {
					array_push($langArray, $langRow['LanguageName']);
				}
				#array_push($setArray, $langArray);
				$setArray['Languages'] = $langArray;
			} else { echo mysqli_error($conn); }
			array_push($returnCardArray, $setArray);
    	}
	} else { echo mysqli_error($conn); }
	return $returnCardArray;
}

function getImage($name, $set, $language) {

}

function outputCards($cardArray){
	$langCount = count($cardArray['Languages']);
	for($x=0;$x<$langCount;$x++){
		if($cardArray['Foil'] == 'Yes'){
			$foilDir = "Foil";
		} else { $foilDir = "Nonfoil"; }
		$cardName = preg_replace('/\s/', '', $cardArray['CardName']);
		$imgDir = "/img/" . $cardArray['ShortName'] . "/" . $cardArray['Languages'][$x] . "/" . $foilDir . "/" . $cardName . ".jpg";
		
	?>
		<div class="col-sm-2">
			<div class="container">
				<div class="card">
					<center><img class="card-img-top" src="/img/AbbotofKeralKeep.jpg" alt="<?php echo $imgDir?>">
					<div class="card-body">
		        		<div class="overlay">
			        	<h4 class="card-title"><?php echo "<br/>". $cardArray['SetName'] . "<br/>"?></h4>
			        	<p class="card-text"><?php echo "Artist: " . $cardArray['Artist'] . "<br />" .
			        								"Border: " . $cardArray['Border'] . "<br />" .
			        								"Foil: "   . $cardArray['Foil'] . "<br />" .
			        								"Frame: " . $cardArray['Frame'] . "<br />" . 
			        								"Language: " . $cardArray['Languages'][$x]?></p>
			    		</div>
			    	</div></center>	
		  		</div>
	  		</div>
		</div>
	<?php
	}
}

?>