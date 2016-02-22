<html><body><table cellpadding="10">
<?php
## card parser
$jsonData = file_get_contents('./AllSets.json', true);
$json = json_decode($jsonData, true);

$value = $_POST['decklist'];
if($value == ''){
	echo 'Decklist is empty, please enter some cards!';
} else {
$cardList = explode("\n", $value);
$count = count($cardList);
for($i=0;$i<$count;$i++){
$cardName = $cardList[$i];
##if $cardName contains foil but does not equal foil or if it equals foil foil 
/*if(strpos($cardName,'[foil]') == true){
	$foil = true;
	#remove foil from the name
} */
#capitalize the first letter in each word and lowercase the rest
$cardName = ucwords($cardName);
$artCardName = str_replace(' ', '', $cardName);
$artCardName = str_replace(':', '', $artCardName);
$artCardName = str_replace("'", '', $artCardName);
$artCardName = str_replace('-','', $artCardName);
$artCardName = str_replace(',','', $artCardName);
$artCardName = str_replace('!','', $artCardName);
#echo '<pre>';
#print_r($json);
$foil = false;
### Echo out the information about the sets
#echo '<b>' . $cardName . '</b>:';
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
?> </table></body></html>