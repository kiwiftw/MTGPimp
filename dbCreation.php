<?php
/*  

DB Creation Script

DB Structure Diagram

MTGPimp DB

PK_ID 	|      CardName		|    Border 	|    SetName	|   		Frame 				|  Foil  | Language |
-------------------------------------------------------------------------------------------------------------
RNG   	| 	Air Elemental 	|  Black/White 	|     Alpha 	|  Orig / 8th / 2015 / Special 	|   Y/N  | Language |
		|

Language Table

PK_ID	|  Language  	|
-------------------------
1		| 	English		|
2		| 	Chinese Simplified
3		| 	Chinese Traditional
4		| 	French
5 		| 	German
6		| 	Italian
7 		| 	Japanese
8 		| 	Korean
9		| 	Portuguese
10		| 	Russian
11		| 	Spanish


*/
#$ini_path = php_ini_loaded_file();

// Parse php.ini
$config = parse_ini_file("../private/config.ini");
$conn = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error) . "<br/>";
} 

$sql = "CREATE TABLE IF NOT EXISTS Cards(
id INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
CardName VARCHAR(30) NOT NULL,
Border VARCHAR(5) NOT NULL,
SetName VARCHAR(30) NOT NULL,
Frame VARCHAR(10) NOT NULL,
Foil BOOLEAN NOT NULL,
Language VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Cards table added successfully. <br/>";
} else {
    echo "Error adding table: " . $conn->error . "<br/>";
}

$sql = "CREATE TABLE IF NOT EXISTS Languages(
pk_id INT(12) UNSIGNED PRIMARY KEY,
Language VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Languages table added successfully. <br/>";
    $sql = "INSERT INTO Languages (pk_id, Language)
	VALUES ('1', 'English');";
	$sql .= "INSERT INTO Languages (pk_id, Language)
	VALUES ('2', 'Chinese Simplified');";
	$sql .= "INSERT INTO Languages (pk_id, Language)
	VALUES ('3', 'Chinese Traditional');";
	$sql .= "INSERT INTO Languages (pk_id, Language)
	VALUES ('4', 'French');";
	$sql .= "INSERT INTO Languages (pk_id, Language)
	VALUES ('5', 'German');";
	$sql .= "INSERT INTO Languages (pk_id, Language)
	VALUES ('6', 'Italian');";
	$sql .= "INSERT INTO Languages (pk_id, Language)
	VALUES ('7', 'Japanese');";
	$sql .= "INSERT INTO Languages (pk_id, Language)
	VALUES ('8', 'Korean');";
	$sql .= "INSERT INTO Languages (pk_id, Language)
	VALUES ('9', 'Portuguese');";
	$sql .= "INSERT INTO Languages (pk_id, Language)
	VALUES ('10', 'Russian');";
	$sql .= "INSERT INTO Languages (pk_id, Language)
	VALUES ('11', 'Spanish');";
	if ($conn->multi_query($sql) === TRUE) {
	    echo "New records created successfully. <br/>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
	}
} else {
    echo "Error adding table: " . $conn->error . "<br/>";
}



$conn->close();
?>