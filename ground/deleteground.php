<?php
require '../header.inc.php';
  $grounds_id=$_POST['list'];
  foreach($grounds_id as $ground){
      $query="delete from grounds where g_id=".$ground.";";
      mysqli_query($GLOBALS["___mysqli_ston"], $query);
      $query="delete from league_grounds where g_id=".$ground." and l_id=".$_SESSION['leagueid'].";";
      mysqli_query($GLOBALS["___mysqli_ston"], $query);
  }
