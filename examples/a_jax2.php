<?php
session_start();
if(isset($_SESSION['user_id'])){
$con=new mysqli('sql12.freesqldatabase.com:3306','sql12313072','1vt5zsZILB','sql12313072');
//$result=$con->query("SELECT N_ID FROM univ_news");
//if($count=$result->num_rows){
$i=$_SESSION['user_id'];
$delete=$_POST['action'];
//$rows = $result->fetch_all(MYSQLI_ASSOC);
//foreach ($rows as $row) {

  //$delete=$row['N_ID'];
$con->query("DELETE FROM `comments` WHERE C_ID='$delete' AND U_ID='$i'");
}

?>
