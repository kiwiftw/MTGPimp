<?php
include($_SERVER['DOCUMENT_ROOT'] . "/bootstrap/html/header.html");
$functionsFile = $_SERVER['DOCUMENT_ROOT'] . "/Admin/functions.php";
?>

<br>

<h3>Refresh cards, sets, and languages</h3>
<form action="dbPopulate.php" method="post">
	<!-- This will trigger a delete on all values and an insert -->
	<input type="radio" name="Action" value="RefreshAll" checked> Refresh All<br> 
	<!-- This will trigger a delete on a specific set match and an insert of that set --> 
	<input type="radio" name="Action" value="RefreshSpecific"> Refresh Specific <input type="text" name="SetToRefresh"> 
<input type="submit">
</form>

<br><br>

<form action="dbCreation.php" method="post">
	<h3>Run initial DB Creation Script</h3>
<input type="submit">
</form>

<br><br>

<form action="ImageScraper.php" method="post">
	<h3>Scrape Images</h3>
	<label>Set: </label><input type="text" name="set">
	<h5>Languages:</h5>
	<input type="checkbox" name="language[]" value="English"><label>English</label><br>
	<input type="checkbox" name="language[]" value="Spanish"><label>Spanish</label><br>
	<input type="checkbox" name="language[]" value="Chinese Simplified"><label>Chinese Simplified</label><br>
	<input type="checkbox" name="language[]" value="Chinese Traditional"><label>Chinese Traditional</label><br>
	<input type="checkbox" name="language[]" value="French"><label>French</label><br>
	<input type="checkbox" name="language[]" value="German"><label>German</label><br>
	<input type="checkbox" name="language[]" value="Italian"><label>Italian</label><br>
	<input type="checkbox" name="language[]" value="Japanese"><label>Japanese</label><br>
	<input type="checkbox" name="language[]" value="Portuguese"><label>Portuguese</label><br>
	<input type="checkbox" name="language[]" value="Russian"><label>Russian</label><br>
	<input type="checkbox" name="language[]" value="Korean"><label>Korean</label><br>
	<input type="submit" name="formSubmit" value="Submit">
</form>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/bootstrap/html/footer.html");
?>