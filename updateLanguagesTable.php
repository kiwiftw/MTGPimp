<?php
## Update the languages many : many table
## Get the ID's from the cards table
## Get the langauges of the cards

$config = parse_ini_file('../private/config.ini'); 
$conn = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
 
$sql = "SELECT DISTINCT SetName, Language FROM cards;";
$cardArray = $conn->query($sql);

print_r($cardArray);

## Extrapolate the languages from the sql results and then join the proper 






?>