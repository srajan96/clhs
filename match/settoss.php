<?php
require '../header.inc.php';
  $toss_win=$_POST['toss'];
  $toss_choose=$_POST['opted'];
  $_SESSION['innings']=1;
  $_SESSION['batting']="";
  $_SESSION['bownling']="";
  //echo "Team 1 is ".$_SESSION['team1']." and team2 is ".$_SESSION['team2']." and toss win is ".$toss_win." toss choose is ".$toss_choose;
  if($toss_choose=="bat"){
  $_SESSION['batting']=($toss_win==$_SESSION['team1'])?$_SESSION['team1']:$_SESSION['team2'];
  $_SESSION['bowling']=($_SESSION['batting']==$_SESSION['team1'])?$_SESSION['team2']:$_SESSION['team1'];
  }
  else if($toss_choose=="bowl"){
   $_SESSION['bowling']=($toss_win==$_SESSION['team1'])?$_SESSION['team1']:$_SESSION['team2'];
   $_SESSION['batting']=($_SESSION['bowling']==$_SESSION['team1'])?$_SESSION['team2']:$_SESSION['team1'];
      
  }
 //echo "Batting team ".$_SESSION['batting'];
// echo "Bowling team ".$_SESSION['bowling'];
// 
$_SESSION['battingteam']=mysqli_fetch_assoc(getteamdetails($_SESSION['batting']))['t_name'];
$_SESSION['bowlingteam']=mysqli_fetch_assoc(getteamdetails($_SESSION['bowling']))['t_name'];


      $query1="update fixtures set f_toss=$toss_win where f_match_id=".$_SESSION['matchid'].";";
      //echo $query1;
      $query2="update fixtures set f_opted='$toss_choose' where f_match_id=".$_SESSION['matchid'].";";
      //echo $query2;
      if(mysqli_query($GLOBALS["___mysqli_ston"], $query1)&&mysqli_query($GLOBALS["___mysqli_ston"], $query2))
              echo "success-".$_SESSION['battingteam']."-".$_SESSION['bowlingteam']."-".$_SESSION['batting']."-".$_SESSION['bowling'];
      else
          echo mysqli_error($GLOBALS["___mysqli_ston"]);
      
