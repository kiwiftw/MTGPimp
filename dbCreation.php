<?php
/*  

DB Creation Script

DB Structure Diagram

MTGPimp DB

PK_ID 	|      CardName		|    Border 	|    SetName	|   		Frame 				|  Foil  | Languages |
------------------------------------------------------------------------------------------------------------------
  ID   	| 	Air Elemental 	|  Black/White 	|     Alpha 	|  Orig / 8th / 2015 / Special 	|   Y/N  | CSV list  |

*/

// Parse php.ini
$config = parse_ini_file("../private/config.ini");
$conn = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
## Create the cards table
$sql = "CREATE TABLE IF NOT EXISTS Cards(
pk_id VARCHAR(50) PRIMARY KEY,
CardName VARCHAR(30) NOT NULL,
Border VARCHAR(5) NOT NULL,
SetName VARCHAR(50) NOT NULL,
Frame VARCHAR(10) NOT NULL,
Foil VARCHAR(3) NOT NULL,
Language VARCHAR(125)
);";

if ($conn->query($sql) === TRUE) {
    echo "Cards table added successfully. <br/>";
} else {
    echo "Error adding table: " . $conn->error . "<br/>";
}
$conn->close();
?>