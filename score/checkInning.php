<?php
require '../config.php';
    $query="Select max(innings_id)as inning from commentary where fixture_id=".$matchid.";";
    //echo $query;
    $query=mysqli_query($GLOBALS["___mysqli_ston"], $query);
    if(mysqli_num_rows($query)){    
        $result=mysqli_fetch_assoc($query);
        $inning=$result['inning'];
    }
    else
        $inning=0;
    
    $GLOBALS['inning']=$inning;
?>    

