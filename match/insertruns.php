<?php
require '../header.inc.php';
$batsman=$_POST['batsman'];
$runs=$_POST['runs'];
$bowler=$_POST['bowler'];
$matchid=$_SESSION['matchid'];
$leagueid=$_SESSION['leagueid'];

echo "bowler is "+$bowler;
$query="update batting_scorecard set s_runs=s_runs+$runs where s_player_id=$batsman and s_match_id=$matchid";
mysqli_query($GLOBALS["___mysqli_ston"], $query);

$query="update batting_scorecard set s_balls_faced=s_balls_faced+1 where s_player_id=$batsman and s_match_id=$matchid ";
mysqli_query($GLOBALS["___mysqli_ston"], $query);

$query="update bowling_scorecard set s_runs=s_runs+$runs where s_player_id=$bowler and s_match_id=$matchid";
echo $query;
if(!mysqli_query($GLOBALS["___mysqli_ston"], $query)) echo mysqli_error($GLOBALS["___mysqli_ston"]);

$query="update bowling_scorecard set s_overs=case when (s_overs*10)%10<5 then s_overs+0.1 else ceiling(s_overs) end where s_player_id=$bowler;";
mysqli_query($GLOBALS["___mysqli_ston"], $query);

if($runs==4){
$query="update batting_scorecard set s_fours=s_fours+1 where s_player_id=$batsman and s_match_id=$matchid ";
mysqli_query($GLOBALS["___mysqli_ston"], $query); 
$query="update leagues set l_fours=l_fours+1 where l_id=$leagueid";
mysqli_query($GLOBALS["___mysqli_ston"], $query); 
}
if($runs==6){
$query="update batting_scorecard set s_sixes=s_sixes+1 where s_player_id=$batsman and s_match_id=$matchid ";
mysqli_query($GLOBALS["___mysqli_ston"], $query); 
$query="update leagues set l_sixes=l_sixes+1 where l_id=$leagueid";
mysqli_query($GLOBALS["___mysqli_ston"], $query); 
}
?>



