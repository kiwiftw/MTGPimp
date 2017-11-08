<?php
include($_SERVER['DOCUMENT_ROOT'] . "/bootstrap/html/header.html");
## SQL to pull results from the DB

## Declare Variables
$functionsFile = $_SERVER['DOCUMENT_ROOT'] . "/Admin/functions.php";
include($functionsFile);
$setArray = array();
$lastCardName = "";
$conn = getConnection();

$decklist = $_POST['Decklist'];
if($decklist == ''){
	echo 'Decklist is empty, please enter some cards!';
} else {
	$cardList = explode("\n", $decklist);
	# Deck list was provided through HTML form and broken up into an array. 
	# Traverse the array and construct the sql query for each card
	# Pass card name to the function getCard which will run a sql query (no stored proc, yet!) to return all card data

	# For science, going to try and poll each card name, and return the output before going to the next card in the list.
	# Could be that it's better to grab all the data at once and then output it once it's all been polled.  
	# Something to look into and figure out if parallel would be something useful (not much knowledge about parallelism in php)

	$decklist = explode("\n",$decklist);
	foreach($decklist as $value){
		$returnedArray = getCard($conn, $value);
		# Array will generally hold multiple cards in it, so grab the length of the array and poll through it.  
		# This logic will change if I change to poll the entire input list at once to split different card names by line. 
		# Should just need to implement one more loop at a higher level than this to check card names and new line if different
		$cardName = $returnedArray[0]['CardName'];
		?> <center><h2><span class="badge badge-pill badge-light"> <?php echo $cardName . "<br />"; ?> </span></h2></center> <?php
		$cardCount = count($returnedArray);
		# Injecting some html formatting. God I hate this :(
		?><div class="row"><?php
		for($x=0;$x<$cardCount;$x++){
			outputCards($returnedArray[$x]);
		}
		?></div><?php
		echo "<br /><br /><br />";
	}
}
include($_SERVER['DOCUMENT_ROOT'] . "/bootstrap/html/footer.html");
?>