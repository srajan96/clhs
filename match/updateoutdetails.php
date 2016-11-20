<?php
require '../header.inc.php';
$batsman=$_POST['batsman'];
$bowler=$_POST['bowler'];
$caughtby=$_POST['caughtby'];
$nextbat=$_POST['nextbat'];
$type=$_POST['type'];
$matchid=$_SESSION['matchid'];

//echo "Batsman".$batsman."bowler $bowler caughtby $caughtby next nat $nextbat";

//echo $caughtby." is tha caught by1";
if($caughtby!=""){
    //echo $caughtby." is tha caught by2";
$query="update batting_scorecard set s_caught_by=". $caughtby."  where s_player_id=$batsman and s_match_id=$matchid;";
//echo $query;
if(!mysqli_query($GLOBALS["___mysqli_ston"], $query)) echo mysqli_error($GLOBALS["___mysqli_ston"]);
}
$query="update batting_scorecard set s_bowled_by=$bowler  where s_player_id=$batsman and s_match_id=$matchid;";
//echo $query;
if(!mysqli_query($GLOBALS["___mysqli_ston"], $query)) echo mysqli_error($GLOBALS["___mysqli_ston"]);


if($type=="0"){
$query="update bowling_scorecard set s_wickets=s_wickets+1 where s_player_id=$bowler and s_match_id=$matchid";
//echo $query;
if(!mysqli_query($GLOBALS["___mysqli_ston"], $query)) echo mysqli_error($GLOBALS["___mysqli_ston"]);
}
$query="update bowling_scorecard set s_overs=case when (s_overs*10)%10<5 then s_overs+0.1 else ceiling(s_overs) end where s_player_id=$bowler;";
mysqli_query($GLOBALS["___mysqli_ston"], $query);

$query="insert into batting_scorecard(s_player_id,s_match_id) values ($nextbat,$matchid);";
//echo $query;
if(!mysqli_query($GLOBALS["___mysqli_ston"], $query)) echo mysqli_error($GLOBALS["___mysqli_ston"]);

$query="update leagues set l_wickets=l_wickets+1 where l_id=".$_SESSION['leagueid'].";";
//echo $query;
if(!mysqli_query($GLOBALS["___mysqli_ston"], $query)) echo mysqli_error($GLOBALS["___mysqli_ston"]);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

