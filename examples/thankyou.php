<?php 
    $from = "sql12.freesqldatabase.com"; // this is your Email address
    $to = $_POST['email']; // this is the sender's Email address
$con=new mysqli('sql12.freesqldatabase.com:3306','sql12313072','1vt5zsZILB','sql12313072');
    $res=$con->query("SELECT * FROM `login` where `EMAIL`='$to'");
    if($count=$res->num_rows){
    $rows = $res->fetch_all(MYSQLI_ASSOC);
    foreach ($rows as $row) {
    $pass=$row['PASSWORD'];
    }}
    $subject = "Forgot Password ! So Here it is....";
    $message = "Your Password for E-Board App is: ". $pass;

    $headers = "From:" . $from;
  if(mail($to,$subject,$message,$headers)) {
    header('Location: signin.php');
    }
else{
     header('Location: forgot.php');
 }
?>
