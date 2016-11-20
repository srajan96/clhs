<?php
require "../config.php";
$leagueid=$_POST['leagueid'];
$query="select l_wickets as wickets,l_sixes as sixes,l_fours as fours from leagues where l_id=".$leagueid.";";
//echo $query;
$query=mysqli_query($GLOBALS["___mysqli_ston"], $query);
if(mysqli_num_rows($query)){

   $result=mysqli_fetch_assoc($query);
    echo json_encode($result);
    
}
?>