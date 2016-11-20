<?php
	require '../header.inc.php';
  $fixtures_id=$_POST['list'];
  foreach($fixtures_id as $fixture){
      $query="delete from fixtures where f_match_id=".$fixture.";";
      mysqli_query($GLOBALS["___mysqli_ston"], $query);
    }

?>    
  