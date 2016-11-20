<?php 
require "../config.php";
$matchid=$_POST['matchid'];
$query="Select * from fixtures where f_match_id=".$matchid;
$query=mysqli_query($GLOBALS["___mysqli_ston"], $query);
if(mysqli_num_rows($query)){
    $row=array();
    $result=mysqli_fetch_assoc($query);
    $t1=$result['f_team1_id'];
    $t2=$result['f_team2_id'];
    $toss=$result['f_toss'];
    $opted=$result['f_opted'];
    $winner=$result['f_winner_id'];
    $venueid=$result['f_venue'];
    if($t1==$toss && $opted=="bat"){
        $team1=$t1;
        $team2=$t2;
    }
    else if($t2==$toss && $opted=="bowl"){
        $team1=$t1;
        $team2=$t2;
    }
    else{
        $team1=$t2;
        $team2=$t1;
    }
    $query="Select * from teams where t_id=".$team1.";";
    $query=mysqli_query($GLOBALS["___mysqli_ston"], $query);
    if(mysqli_num_rows($query)){    
        $result=mysqli_fetch_assoc($query);
        $tname1=$result['t_name'];
    }
    $query="Select * from teams where t_id=".$team2.";";
    $query=mysqli_query($GLOBALS["___mysqli_ston"], $query);
    if(mysqli_num_rows($query)){    
        $result=mysqli_fetch_assoc($query);
        $tname2=$result['t_name'];
    }
    $query="Select l.l_overs as overs from fixtures f,leagues l where f.f_match_id=".$matchid." and f.f_league_id=l.l_id;";
    //echo $query;
    $query=mysqli_query($GLOBALS["___mysqli_ston"], $query);
    if(mysqli_num_rows($query)){    
        $result=mysqli_fetch_assoc($query);
        $overs=$result['overs'];
    }
    $query="Select * from grounds where g_id=".$venueid.";";
    //echo $query;
    $query=mysqli_query($GLOBALS["___mysqli_ston"], $query);
    if(mysqli_num_rows($query)){    
        $result=mysqli_fetch_assoc($query);
        $venue=$result['g_name'];
    }
    $umpire1="N.A.";
    $umpire2="N.A.";
    $query="Select u_name from umpfix uf,umpires u where uf.fixture_id=".$matchid." and uf.umpire_id=u.u_id;";
    //echo $query;
    $query=mysqli_query($GLOBALS["___mysqli_ston"], $query);
    if(mysqli_num_rows($query)){    
        $result=mysqli_fetch_assoc($query);
        $umpire1=$result['u_name'];
        $result=mysqli_fetch_assoc($query);
        $umpire2=$result['u_name'];
        
    }
    
    require 'checkInning.php';
    $innning=$GLOBALS['inning'];
    $row[0]=array($team1,$tname1);
    $row[1]=array($team2,$tname2);
    $row[2]=$winner;
    $row[3]=$inning;
    $row[4]=$overs;
    $row[5]=$venue;
    $row[6]=$umpire1;
    $row[7]=$umpire2;
    echo json_encode($row);
    
}


?>