<?php
require '../header.inc.php';
$innings=$_POST['innings'];
$ball_number=$_POST['ballno'];
$comment=$_POST['comment'];
$result=$_POST['runs'];
$batsman=$_POST['batsman'];
$bowler=$_POST['bowler'];
$matchid=$_SESSION['matchid'];
$ballid=$_POST['ballid'];

echo "db ball is ".$ball_number."\n";
$query="insert into commentary values($innings,$ballid,'$ball_number','$comment','$result',$matchid,$batsman,$bowler);";
echo $query;
mysqli_query($GLOBALS["___mysqli_ston"], $query);


?>



