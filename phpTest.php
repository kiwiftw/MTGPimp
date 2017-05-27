<?php
$servername = "localhost";
$username = "pcort";
$password = "password";
$dbname = "MTGPimp";

$jsonData = file_get_contents('./LEA.json', true);
$json = json_decode($jsonData, true);

## Update the db with card data.  Hold the set, border, card name, 

$set = $json["name"];
$border = $json["border"];

## 

$cards = $json["cards"];

	foreach($cards as $key => $value){
		$cardName = $value["name"];
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO MTGPimp (CardName, Border, SetName, Frame, Foil, Language)
		VALUES ('$cardName', 'Black', '$set', 'Original', 'No', 'English')";

		if ($conn->query($sql) === TRUE) {
		    echo "$cardName added successfully";
		} else {
		    echo "Error adding data: " . $conn->error;
		}

		$conn->close();
	}


?>