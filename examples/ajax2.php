<?php
session_start();
if(isset($_SESSION['user_id'])){
$con=new mysqli('sql12.freesqldatabase.com:3306','sql12313072','1vt5zsZILB','sql12313072');

$rand=mt_rand(0,50);
$i=$_SESSION['user_id'];
$content=$_POST['comm'];
$comment=$_POST['submit'];

$result=$con->query("SELECT * FROM `login` where `L_ID`='$i'");
if($count=$result->num_rows){
$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
	$commentedby=$row['NAME'];
}
}
  //$delete=$row['N_ID'];
$con->query("INSERT INTO `comments`(`C_ID`, `C_CONTENT`, `COMMENTED_BY`, `NEWS_ID`,`U_ID`) VALUES ('$rand','$content','$commentedby','$comment','$i')");
}
header('Location:frame.php');
?>
