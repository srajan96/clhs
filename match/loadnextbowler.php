<?php
require '../header.inc.php';
$bowler=$_POST['bowler'];
$matchid=$_SESSION['matchid'];

$query="insert into bowling_scorecard(s_player_id,s_match_id) values ($bowler,$matchid);";
//echo $query;
mysqli_query($GLOBALS["___mysqli_ston"], $query);

$query="select s_runs,s_wickets from bowling_scorecard where s_player_id=$bowler and s_match_id=$matchid";
//echo $query;
$query=  mysqli_query($GLOBALS["___mysqli_ston"], $query);
$result=  mysqli_fetch_assoc($query);
$runs=$result['s_runs'];
$wickets=$result['s_wickets'];
echo "Runs-$runs-Wickets-$wickets";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

