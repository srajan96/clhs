<?php
require "../config.php";
$matchid=$_POST['matchid'];
$inning=$_POST['inning'];
$bid=$_POST['bid'];
$query="select * from commentary where fixture_id=".$matchid." and innings_id=".$inning." and ball_number>".$bid." order by ball_id desc;";
//echo $query;
$row=array();
$query=mysqli_query($GLOBALS["___mysqli_ston"], $query);
if(mysqli_num_rows($query)){
    
    $i=0;
    while($result=mysqli_fetch_assoc($query)){
        $row[$i]=$result;
        $i++;
    }
    echo json_encode($row);
    
}
else
    echo "NULL";
?>

