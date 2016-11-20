<?php
    require '../header.inc.php';
    $modify=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['modify']) ;
    $player_id=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['pid']) ;
    $name=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['name']) ;
    $dob=   mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['dob']) ;

    $battingstyle= mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['battingstyle']) ;
    $bowlingstyle= mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['bowlingstyle']) ;
    
    if($modify=="1"){
        $query="delete from players where p_id='".$player_id."';";
    //echo $query;
        mysqli_query($GLOBALS["___mysqli_ston"], $query);
        $query="delete from league_players where p_id='".$player_id."' and l_id=".$_SESSION['leagueid'].";";
    //echo $query;
        mysqli_query($GLOBALS["___mysqli_ston"], $query);
        $query = "INSERT INTO players (p_id,p_name,p_dob,p_batting_style,p_bowling_style,p_user_id) VALUES (".$player_id.",'".$name."','".$dob."','".$battingstyle."','".$bowlingstyle."',".$_SESSION['userid'].");";
    //print($query);
        mysqli_query($GLOBALS["___mysqli_ston"], $query);
        $query = "INSERT INTO league_players values(".$_SESSION['leagueid'].",".$player_id.");";
    //print($query);
         mysqli_query($GLOBALS["___mysqli_ston"], $query);
    }
    else{
    $query = "INSERT INTO players (p_name,p_dob,p_batting_style,p_bowling_style,p_user_id) VALUES ('".$name."','".$dob."','".$battingstyle."','".$bowlingstyle."',".$_SESSION['userid'].");";
    //print($query);
    mysqli_query($GLOBALS["___mysqli_ston"], $query);
    $query="select max(p_id) from players where p_user_id=".$_SESSION['userid'].";";
    //echo "<Br>". $query;
    
    $playerid=  mysqli_fetch_assoc(mysqli_query($GLOBALS["___mysqli_ston"],$query))['max(p_id)'];
    $query = "INSERT INTO league_players values(".$_SESSION['leagueid'].",".$playerid.");";
    //print($query);
    mysqli_query($GLOBALS["___mysqli_ston"], $query);
    }
?>