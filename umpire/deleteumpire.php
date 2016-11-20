<?php
require '../header.inc.php';
  $umpires_id=$_POST['list'];
  foreach($umpires_id as $umpire){
      $query="delete from umpires where u_id=".$umpire.";";
      mysqli_query($GLOBALS["___mysqli_ston"], $query);
      $query="delete from league_umpires where u_id=".$umpire." and l_id=".$_SESSION['leagueid'].";";
      mysqli_query($GLOBALS["___mysqli_ston"], $query);
  }
