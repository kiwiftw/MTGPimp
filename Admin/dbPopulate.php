<?php
$functionsFile = $_SERVER['DOCUMENT_ROOT'] . "/Admin/functions.php";
include($functionsFile);
$time_pre = microtime(true);
$conn = getConnection();

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


$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo "Execution in Seconds: " . $exec_time . "<br/>";
?>