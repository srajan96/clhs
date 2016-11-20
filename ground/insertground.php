<?php
 require '../header.inc.php';
 $modify=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['modify']) ;
 $ground_id=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['gid']) ;
 
    $name=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['name']) ;
    $city=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['city']) ;
    $country= mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['country']) ;
    
    if($modify=="1"){
        $query="delete from grounds where g_id='".$ground_id."';";
    //echo $query;
        mysqli_query($GLOBALS["___mysqli_ston"], $query);
        $query="delete from league_grounds where g_id='".$ground_id."' and l_id=".$_SESSION['leagueid'].";";
    //echo $query;
        mysqli_query($GLOBALS["___mysqli_ston"], $query);
        $query = "INSERT INTO grounds(g_id,g_name,g_city,g_country,g_user_id) VALUES (".$ground_id.",'".$name."','".$city."','".$country."',".$_SESSION['userid'].");";

    //print($query)
        mysqli_query($GLOBALS["___mysqli_ston"], $query);
        $query = "INSERT INTO league_grounds values(".$_SESSION['leagueid'].",".$ground_id.");";
    //print($query);
         mysqli_query($GLOBALS["___mysqli_ston"], $query);
    }
    else{
        
   
    $query = "INSERT INTO grounds(g_name,g_city,g_country,g_user_id) VALUES ('".$name."','".$city."','".$country."',".$_SESSION['userid'].");";
   // print($query);
    mysqli_query($GLOBALS["___mysqli_ston"], $query);
      $query="select max(g_id) from grounds where g_user_id=".$_SESSION['userid'].";";
    //echo "<Br>". $query;
    
    $groundid=  mysqli_fetch_assoc(mysqli_query($GLOBALS["___mysqli_ston"],$query))['max(g_id)'];
    $query = "INSERT INTO league_grounds values(".$_SESSION['leagueid'].",".$groundid.");";
    //print($query);
    mysqli_query($GLOBALS["___mysqli_ston"], $query);
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

