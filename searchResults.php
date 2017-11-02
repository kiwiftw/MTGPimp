<?php
## SQL to pull results from the DB

## Declare Variables
include("./Admin/functions.php");
$setArray = [];
$lastCardName = "";
$conn = getConnection();

 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	$decklist = $_POST['Decklist'];
	if($decklist == ''){
		echo 'Decklist is empty, please enter some cards!';
	} else {
		$cardList = explode("\n", $value);
		## Deck list was provided and broken up into an array. 
		## Traverse the array and construct the sql query 
		## The sql query is constructed as follows
		## Count the card array, and create the query with the first value like so: 
		## SELECT CardName, SetName FROM `cards` WHERE CardName = $cardName[0]
		## For each other card name, add the card name in the sql query: $sqlExtension = 'OR CardName = $cardName[i]'
		## Close the query with this final set $closer = 'Order By CardName Desc';
		## Close the DB connection and output the array into a nice html table. 

		# For science, going to try and poll each card name, and return the output before going to the next card in the list.
		# Could be that it's better to grab all the data at once and then output it once it's all been polled.  
		# Something to look into and figure out if parallel would be something useful (not much knowledge about parallelism in php)

		$decklist = explode(",",$decklist);
		foreach($decklist as $value){
			$returnedArray = getCard($conn, $value);
			# Array will generally hold multiple cards in it, so grab the length of the array and poll through it.  
			# This logic will change if I change to poll the entire input list at once to split different card names by line. 
			# Should just need to implement one more loop at a higher level than this to check card names and new line if different
			$cardName = $returnedArray[0]['CardName'];
			echo $cardName . "<br />";
			$cardCount = count($returnedArray);
			for($x=0;$x<$cardCount;$x++){
				outputCards($returnedArray[$x]);
			}
		}
	}
}
?>