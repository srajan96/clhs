<?php
   require '../header.inc.php';
  $players_id=$_POST['list'];
  foreach($players_id as $player){
      $query="delete from players where p_id=".$player.";";
      mysqli_query($GLOBALS["___mysqli_ston"], $query);
      $query="delete from league_players where p_id=".$player." and l_id=".$_SESSION['leagueid'].";";
      mysqli_query($GLOBALS["___mysqli_ston"], $query);
  }

    
  