<?php
$functionsFile = $_SERVER['DOCUMENT_ROOT'] . "/Admin/functions.php";
include($functionsFile);
$conn = getConnection();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else { 

    # Create Sets Table
    
    $sql = "CREATE TABLE IF NOT EXISTS Sets(
    PK_SetName VARCHAR(50) PRIMARY KEY,
    Border VARCHAR(5) NOT NULL,
    Frame VARCHAR(10) NOT NULL,
    ShortName VARCHAR(7) NOT NULL
    );";
    processSQL($sql,$conn);

    # Create the Languages Table
    
    $sql = "CREATE TABLE IF NOT EXISTS Languages(
    PK_LanguageID INTEGER PRIMARY KEY,
    LanguageName VARCHAR(50) NOT NULL
    );";
    processSQL($sql,$conn);

    # Create the Cards table pk_id, CardName, FK_SetName, Artist, Foil)

    $sql = "CREATE TABLE IF NOT EXISTS Cards(
    PK_CardID VARCHAR(100) PRIMARY KEY,
    CardName VARCHAR(30) NOT NULL,
    FK_SetName VARCHAR(50) NOT NULL REFERENCES Sets(PK_SetName),
    Artist VARCHAR(85) NOT NULL,
    Foil VARCHAR(3) NOT NULL
    );";
    processSQL($sql,$conn);

    # Create JoinLanguages

    $sql = "CREATE TABLE IF NOT EXISTS JoinLanguages(
    FK_SetName VARCHAR(50) REFERENCES Sets(PK_SetName),
    FK_LanguageID INTEGER REFERENCES Cards(PK_LanguageID)
    );";
    processSQL($sql,$conn);
}
?>