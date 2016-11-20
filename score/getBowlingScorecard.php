<?php
require '../config.php';
$teamid=$_POST['teamid'];
$matchid=$_POST['matchid'];
$query="select p.p_name,bs.s_wickets from players p,plays_for pf,bowling_scorecard bs where p.p_id=pf.player_id and pf.team_id=".$teamid." and pf.player_id=bs.s_player_id and bs.s_match_id=".$matchid.";";
//echo $query;
$query=mysqli_query($GLOBALS["___mysqli_ston"], $query);
if(mysqli_num_rows($query)){
    $row=array();
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