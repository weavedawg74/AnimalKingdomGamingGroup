<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
    $username = $_POST['username'];
    $platform = $_POST['platform'];
    $games = $_POST['games'];
    $gamedate = $_POST['gamedate'];
	$sql = "INSERT INTO gamers (username,platform,games,gamedate)
	 VALUES ('$username', '$platform', '$games', '$gamedate');";
	 if (mysqli_query($conn, $sql)) {
		header("Location: success.php");
	 } else {
		header("Location: failure.php");
	 }
	 mysqli_close($conn);
}
?>