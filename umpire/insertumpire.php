<?php
require '../header.inc.php';
    $modify=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['modify']) ;
    $umpire_id=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['uid']) ;
    
    $name=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['name']) ;
    $experience=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['experience']) ;
   
    if($modify=="1"){
        $query="delete from umpires where u_id='".$umpire_id."';";
        //echo $query;
        mysqli_query($GLOBALS["___mysqli_ston"], $query);
        $query="delete from league_umpires where u_id='".$umpire_id."' and l_id=".$_SESSION['leagueid'].";";
    //echo $query;
        mysqli_query($GLOBALS["___mysqli_ston"], $query);
        $query = "INSERT INTO umpires(u_id,u_name,u_experience,u_user_id) VALUES (".$umpire_id.",'".$name."','".$experience."',".$_SESSION['userid'].");";
    //print($query)
    mysqli_query($GLOBALS["___mysqli_ston"], $query);
    $query = "INSERT INTO league_umpires values(".$_SESSION['leagueid'].",".$umpire_id.");";
    //print($query);
         mysqli_query($GLOBALS["___mysqli_ston"], $query);
    }else{
         $query = "INSERT INTO umpires(u_name,u_experience,u_user_id) VALUES ('".$name."','".$experience."',".$_SESSION['userid'].");";
   // print($query);
    mysqli_query($GLOBALS["___mysqli_ston"], $query);
    $query="select max(u_id) from umpires where u_user_id=".$_SESSION['userid'].";";
    $umpireid=  mysqli_fetch_assoc(mysqli_query($GLOBALS["___mysqli_ston"],$query))['max(u_id)'];
     $query = "INSERT INTO league_umpires values(".$_SESSION['leagueid'].",".$umpireid.");";
    //print($query);
         mysqli_query($GLOBALS["___mysqli_ston"], $query);
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

