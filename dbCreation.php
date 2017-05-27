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
$servername = "localhost";
$username = "pcort";
$password = "Ski23hike$";
$dbname = "MTGPimp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error) . "<br/>";
} 

$sql = "CREATE TABLE Cards(
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

$sql = "CREATE TABLE Languages(
id INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Language VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Languages table added successfully. <br/>";
} else {
    echo "Error adding table: " . $conn->error . "<br/>";
}

$sql = "INSERT INTO Languages (Language)
VALUES ('English');";
$sql .= "INSERT INTO Languages (Language)
VALUES ('Chinese Simplified');";
$sql .= "INSERT INTO Languages (Language)
VALUES ('Chinese Traditional');";
$sql .= "INSERT INTO Languages (Language)
VALUES ('French');";
$sql .= "INSERT INTO Languages (Language)
VALUES ('German');";
$sql .= "INSERT INTO Languages (Language)
VALUES ('Italian');";
$sql .= "INSERT INTO Languages (Language)
VALUES ('Japanese');";
$sql .= "INSERT INTO Languages (Language)
VALUES ('Korean');";
$sql .= "INSERT INTO Languages (Language)
VALUES ('Portuguese');";
$sql .= "INSERT INTO Languages (Language)
VALUES ('Russian');";
$sql .= "INSERT INTO Languages (Language)
VALUES ('Spanish');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully. <br/>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br/>";
}

$conn->close();
?>