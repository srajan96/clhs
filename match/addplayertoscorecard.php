<?php
require '../header.inc.php';
$batsmen=$_POST['batlist'];
$bowler=$_POST['bowler'];
$matchid=$_SESSION['matchid'];
$leagueid=$_SESSION['leagueid'];


foreach($batsmen as $batsman){
   
    $query="insert into batting_scorecard(s_player_id,s_match_id) values ($batsman,$matchid);";
    echo $query;
    if( mysqli_query($GLOBALS["___mysqli_ston"], $query))
            echo "bats man success-";
}
$query="insert into bowling_scorecard(s_player_id,s_match_id) values ($bowler,$matchid);";
echo $query;

if( mysqli_query($GLOBALS["___mysqli_ston"], $query))
            echo "bowler  success-";


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

