<?php
require '../header.inc.php';
$type=$_POST['type'];
$bowler=$_POST['bowler'];
$matchid=$_SESSION['matchid'];

$othertype="s_";

switch($type){
    case 'Wd': $othertype=$othertype."wides";
     break;   
 case 'D': $othertype=$othertype."dead";
     break;   
 case 'NB': $othertype=$othertype."no_balls";
     break;   
    
}
 $query="update bowling_scorecard set $othertype=$othertype+1 where s_player_id=$bowler and s_match_id=$matchid";
    echo $query;

    if( mysqli_query($GLOBALS["___mysqli_ston"], $query))
            echo "success";
    $query="update bowling_scorecard set s_runs=s_runs+1 where s_player_id=$bowler and s_match_id=$matchid";
     if( mysqli_query($GLOBALS["___mysqli_ston"], $query))
            echo "success";
    /* 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

