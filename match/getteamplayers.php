<?php
require '../header.inc.php';
$team_id=$_POST['team_id'];

$query="select p_name,p_id from players p,plays_for pf where pf.player_id=p.p_id and league_id=".$_SESSION['leagueid']." and team_id=$team_id;";
//echo $query;
$query=  mysqli_query($GLOBALS["___mysqli_ston"],$query );
$output=array();

while($result=  mysqli_fetch_assoc($query)){
    $name=$result['p_name'];
    $id=$result['p_id'];
    $output[]=array('id'=>$id,'name'=>$name);
}
echo json_encode($output);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

