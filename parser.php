<html><body><table cellpadding="10">
<?php
include("./functions.php");
error_reporting(E_ALL ^ E_NOTICE);
## card parser

$cardArray = [];
$artCardArray = [];
$newArray = [];
$value = $_POST['decklist'];
if($value == ''){
	echo 'Decklist is empty, please enter some cards!';
} else {
	$cardList = explode("\n", $value);
	$count = count($cardList);
	for($i=0;$i<$count;$i++){
		# 'Sanitize' the card name for searching on json
		$cardName = $cardList[$i];
		$cardName = ucwords($cardName);
		$artCardName = str_replace(' ', '', $cardName);
		$artCardName = str_replace(':', '', $artCardName);
		$artCardName = str_replace("'", '', $artCardName);
		$artCardName = str_replace('-','', $artCardName);
		$artCardName = str_replace(',','', $artCardName);
		$artCardName = str_replace('!','', $artCardName);
		array_push($artCardArray, trim($artCardName));
		array_push($cardArray, trim($cardName));
	}
}
##Array is set with 'sanitized' card names. Time to do some perusal of json!

##Call the 3 different functions to return foil editions, foreign editions, and then the rest
for($i=0;$i<count($cardArray);$i++){
	## Returns ALL editions a card was printed in including supplimental sets
	#print($cardArray[$i]);
	$editions = getEditions($cardArray[$i]);
	print($cardArray[$i]);
	print("<br />");
	print_r($editions);
	print("<br />");
	## Of those sets, return which sets were printed in a foreign language 
	#getLanguages($cardArray[$i]);

	## Of those sets, return which sets has foils
	#getFoils($cardArray[$i]);

}
/*
### Echo out the information about the sets
?>

<tr><td><b><?=$cardName?></b></td></tr><tr>
<?php
foreach($json as $key => $value){
	#echo $cardName;
	##loop through the different sets
	$set = $key;
	##Skip online sets
	#onlineOnly:true
	if(!($set == "CED" || $set == "VMA" || $set == "CEI")){
	$x=0;
	do {
		$name = $json[$key]['cards'][$x]['name'];
		$edition = $json[$key]['name'];
		#echo $cardName . ' ' . $name . '<br />';
		if(trim(strtolower($name)) === trim(strtolower($cardName))){
			#echo $name;
			$y = 0;
			if($json[$key]['translations'] == ''){
				if($foil == true){
					$cardURL = "../MTGImages/" . $set . "/foil/EN/" . $artCardName . ".jpg"; 
				} elseif($foil == false){
					$cardURL = "../MTGImages//" . $set . "/nonfoil/EN/" . $artCardName . ".jpg"; 
				} else { echo 'Error setting foil setting!';}
				echo '<td align="center"><b>' . $edition . '</b><br /><img src="' . $cardURL . '" height="222.5px" width="156px"/></td>';
			} else {
				foreach($json[$key]['translations'] as $key => $value){
					
					if($y==0){
						$language = 'EN';
					} else { $language = strtoupper($key); }
					if($foil == true){
						$cardURL = "../MTGImages/" . $set . "/foil/" . $language . "/" . $artCardName . ".jpg"; 
					} elseif($foil == false){
						$cardURL = "../MTGImages/" . $set . "/nonfoil/" . $language . "/" . $artCardName . ".jpg"; 
					} else { echo 'Error setting foil setting!';}
				$y++;
				echo '<td align="center"><b>' . $edition . ' ' . $language . '</b><br /><img src="' . $cardURL . '" height="222.5px" width="156px"/></td>';
				}
			}	
		}
		$x++;
	} while ($name != '');
	}else {
	}
}
?></tr><?php
}
}
?>*/?> </table></body></html>
