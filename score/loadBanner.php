<?php
require "../config.php";
$matchid=$_POST['matchid'];
$inning=$_POST['inning'];
$query="select sum(result_of_ball) as res from commentary where fixture_id=".$matchid." and innings_id=".$inning.";";
//echo $query;
$runs=0;
$wickets=0;
$result=mysqli_query($GLOBALS["___mysqli_ston"], $query);
if(mysqli_num_rows($result)){
    $res=  mysqli_fetch_assoc($result);
    $runs=$res['res'];
    $query="select count(result_of_ball) as res from commentary where fixture_id=".$matchid." and innings_id=".$inning." and result_of_ball in ('Wd','NB');";
    //echo $query;
    $result=mysqli_query($GLOBALS["___mysqli_ston"], $query);
    if(mysqli_num_rows($result)){
        $res=  mysqli_fetch_assoc($result);
        $runs+=$res['res'];
    }
}
$query="select count(result_of_ball) as res from commentary where fixture_id=".$matchid." and innings_id=".$inning." and result_of_ball in ('ro','catch','lbw','B','St.');";
//echo $query;
$result=mysqli_query($GLOBALS["___mysqli_ston"], $query);
if(mysqli_num_rows($result)){
    $res=  mysqli_fetch_assoc($result);
    $wickets=$res['res'];
}
$query="select max(ball_number) as overs from commentary where fixture_id=".$matchid." and innings_id=".$inning.";";
//echo $query;
$result=mysqli_query($GLOBALS["___mysqli_ston"], $query);
if(mysqli_num_rows($result)){
    $res=  mysqli_fetch_assoc($result);
    $overs=$res['overs'];
}

$runrate=0;

if($overs!=0){
	$balls=((($overs*10)%10)+(floor($overs)*6));
    $runrate=($runs/$balls);
	$runrate=$runrate*6;
}

$row=array();
$row[0]=$runs;
$row[1]=$wickets;
$row[2]=$overs;
$row[3]=$runrate;
echo json_encode($row);
?>