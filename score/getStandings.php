<?php
require '../config.php';
$leagueid=$_POST['leagueid'];
$query="Select t.t_name,l.played,l.points from league_teams l, teams t where l.l_id=".$leagueid." and l.t_id=t.t_id order by l.points desc ;";
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

?>