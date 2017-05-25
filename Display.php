<html><body><table cellpadding="10">
<?php
## card parser
$jsonData = file_get_contents('./AllSets.json', true);
$json = json_decode($jsonData, true);

foreach($json as $key => $value){
	$set = $key;
	echo $set . ' ' . $json[$key]['name'];;
	echo '<br />';

}

?> </table></body></html>