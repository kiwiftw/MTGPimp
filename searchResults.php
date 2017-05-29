<?php
## SQL to pull results from the DB

## Declare Variables
$setArray = [];
$lastCardName = "";
$config = parse_ini_file('../private/config.ini'); 
$conn = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	$value = $_POST['Decklist'];
	if($value == ''){
		echo 'Decklist is empty, please enter some cards!';
	} else {
		$cardList = explode("\n", $value);
		## Deck list was provided and broken up into an array. 
		## Traverse the array and construct the sql query 
		## The sql query is constructed as follows
			## Count the card array, and create the query with the first value like so: 
			## SELECT CardName, SetName FROM `cards` WHERE CardName = $cardName[0]
			## For each other card name, add the card name in the sql query: $sqlExtension = 'OR CardName = $cardName[i]'
			## Close the query with this final set $closer = 'Order By CardName Desc';
		## Close the DB connection and output the array into a nice html table. 
		$safeCard = mysqli_real_escape_string($conn, preg_replace( "/\r|\n/", "", $cardList[0]));
		$sql = "SELECT `CardName`, `SetName`, `Border`, `Foil`, `Language` FROM `Cards` WHERE `CardName` = '$safeCard'";

		$cardCount = count($cardList);
		for($i=1;$i<$cardCount;$i++){
			$safeCard = mysqli_real_escape_string($conn, preg_replace( "/\r|\n/", "", $cardList[$i]));
			$sql .= "OR `CardName` = '$safeCard'";
		}
		$sql .= "Order By CardName Desc;";

		$cardArray = $conn->query($sql);

		## End data needs to have Card Name => Set Name, PictureID, Language, Border, Foil
		#$lastCardName = ucwords($cardList[0]);
		#array_push($setArray, $lastCardName);
		#echo $lastCardName;
		while($data = mysqli_fetch_array($cardArray)){
			## Create First Card Array
			## If name is new then create a new array
			if($lastCardName != $data["CardName"]){
				$name = $data["CardName"];
				$setName = $data["SetName"];
				$setArray[$name][$setName]["Border"] = $data["Border"]; 
				$setArray[$name][$setName]["Foil"] = $data["Foil"];
				$setArray[$name][$setName]["Language"] = $data["Language"];
				$lastCardName = $data["CardName"];
			} else {
				## else push data into arraye
				$setName = $data["SetName"];
				$setArray[$name][$setName]["Border"] = $data["Border"]; 
				$setArray[$name][$setName]["Foil"] = $data["Foil"];
				$setArray[$name][$setName]["Language"] = $data["Language"];
			}
		}
	}
}
$conn->close();
foreach($setArray as $card => $allData){
	echo $card . "<br/>";
	foreach($allData as $set => $setData){
		if($setData["Foil"] == 0){
			$foil = "No";
		} else { 
			$foil = "Yes";
		}
		echo $set . " " . $setData["Border"]  . " " . $foil . " " . $setData["Language"] . "<br/>";
	}
}
?>