
<?php
$con=new mysqli('sql12.freesqldatabase.com:3306','sql12313072','1vt5zsZILB','sql12313072');
$submit=$_POST['submit'];
$id=mt_rand(0,99999999);
$email=$_POST['email'];
$roll=$_POST['roll'];
$uname=$_POST['uname'];
$password=$_POST['password'];
if($email && $roll && $uname && $password){
	$res=$con->query("INSERT INTO `login`(`L_ID`, `ROLL`, `NAME`, `EMAIL`, `PASSWORD`) VALUES ('$id','$roll','$uname','$email','$password')");
}

if($res){
header("location:index.php");
}
else{
header("location:login.php");
}
?>
