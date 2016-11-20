<?php
require '../config.php';
$leagueid=$_POST['leagueid'];
$teamid=$_POST['teamid'];
$query="Select p.p_name as pname from plays_for pf,players p where pf.player_id=p.p_id and pf.league_id=".$leagueid." and pf.team_id=".$teamid." ;";
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