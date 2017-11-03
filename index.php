<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/bootstrap/html/header.html");
?>
	<br />
	<br />
  	<form method="POST" action="searchResults.php">
		<textarea name="Decklist" style="display: block;margin:0 auto; width:400px; height: 500px;" maxlength="300" placeholder=

"Paste your decklist here to find all the versions available!

Use English card names for searching, foreign versions will be shown.

Format:
noble hierarch
rafiq of the many
fire // ice
inferno titan
aether vial
"></textarea><br /><br />
		<input class="btn btn-primary" style="display: block;margin:0 auto; cursor:pointer;" type="submit" value="View Cards">
 	</form>

<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/bootstrap/html/footer.html");
?>