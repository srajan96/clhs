<?php
require "../config.php";
$leagueid=$_POST['leagueid'];
$query="select p_name,sum(s_runs) as runs from batting_scorecard b,players p,league_players lp where b.s_player_id = p.p_id and b.s_player_id=lp.p_id and lp.l_id=".$leagueid."  group by s_player_id order by runs desc limit 3;";
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