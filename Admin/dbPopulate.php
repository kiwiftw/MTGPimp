<?php
include("./functions.php");
$time_pre = microtime(true);
$conn = getConnection();
   
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	$functionToCall = $_POST["Action"];

	switch ($functionToCall) {
		case "RefreshAll":
			refreshAll($conn);
			break;
		case "RefreshSpecific":
			$set = $_POST["SetToRefresh"];
			refreshSpecific($set, $conn);
			break;
	}
}

$conn->close();
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo "Execution in Seconds: " . $exec_time . "<br/>";
?>