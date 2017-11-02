<?php
/*  

DB Creation Script

DB Structure Diagram

MTGPimp DB

Table Set

PK_SetName  |    Border 	|             Frame 		    |   Foil  |
-----------------------------------------------------------------------
  Alpha     |  Black/White 	| Alpha / 8th / 2015 / Special  |   Y/N   |

Table Languages

PK_LanguageID   |  LanguageName  |
--------------------------
  ID            |    Korean.     |


Table Cards

PK_CardID 	|      CardName		
------------------------------
  ID   	    | 	Air Elemental 	


Table JoinCards

FK_SetName  |   FK_CardID
---------------------------
   Alpha    |      ID


Table JoinLanguages

FK_SetName  |  FK_LanguageID
-----------------------------
   Alpha    |        ID



*/

$functionsFile = $_SERVER['DOCUMENT_ROOT'] . "/Admin/functions.php";
include("functionsFile");
$conn = getConnection();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

# Create Sets Table
$sql = "CREATE TABLE IF NOT EXISTS Sets(
PK_SetName VARCHAR(50) PRIMARY KEY,
Border VARCHAR(5) NOT NULL,
Frame VARCHAR(10) NOT NULL
);";

if ($conn->query($sql) === TRUE) {
    echo "Cards table added successfully. <br/>";
} else {
    echo "Error adding table: " . $conn->error . "<br/>";
}

# Create the Languages Table
$sql = "CREATE TABLE IF NOT EXISTS Languages(
PK_LanguageID INTEGER PRIMARY KEY,
LanguageName VARCHAR(50) NOT NULL
);";

if ($conn->query($sql) === TRUE) {
    echo "Cards table added successfully. <br/>";
} else {
    echo "Error adding table: " . $conn->error . "<br/>";
}

# Create the Cards table pk_id, CardName, FK_SetName, Artist, Foil)
$sql = "CREATE TABLE IF NOT EXISTS Cards(
	PK_CardID INTEGER PRIMARY KEY,
	CardName VARCHAR(30) NOT NULL,
	FK_SetName VARCHAR(50) NOT NULL REFERENCES Sets(PK_SetName),
	Artist VARCHAR(85) NOT NULL,
	Foil VARCHAR(3) NOT NULL
	);";

if ($conn->query($sql) === TRUE) {
    echo "Cards table added successfully. <br/>";
} else {
    echo "Error adding table: " . $conn->error . "<br/>";
}

# Create JoinCards

$sql = "CREATE TABLE IF NOT EXISTS JoinCards(
FK_SetName VARCHAR(50) REFERENCES Sets(PK_SetName),
FK_CardID INTEGER REFERENCES Cards(PK_CardID)
	);";

if ($conn->query($sql) === TRUE) {
    echo "Cards table added successfully. <br/>";
} else {
    echo "Error adding table: " . $conn->error . "<br/>";
}

# Create JoinLanguages

$sql = "CREATE TABLE IF NOT EXISTS JoinLanguages(
FK_SetName VARCHAR(50) REFERENCES Sets(PK_SetName),
FK_LanguageID INTEGER REFERENCES Cards(PK_LanguageID)
	);";

if ($conn->query($sql) === TRUE) {
    echo "Cards table added successfully. <br/>";
} else {
    echo "Error adding table: " . $conn->error . "<br/>";
}


# Run basic population of data
$sql = "INSERT IGNORE INTO Languages (PK_LanguageID, LanguageName)
VALUES ('1', 'English'), ('2', 'Chinese Simplified'), ('3', 'Chinese Traditional'), ('4', 'French'), ('5', 'German'), ('6', 'Italian'), ('7', 'Japanese'), ('8', 'Portuguese'), ('9', 'Russian'), ('10', 'Spanish'), ('11', 'Korean');";
if ($conn->query($sql) === TRUE) {
    echo "Languages data updated properly. <br/>";
} else {
    echo "Error adding table: " . $conn->error . "<br/>";
}

$conn->close();
?>