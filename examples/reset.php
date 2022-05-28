<?php
session_start();
  ?>
<!DOCTYPE html>
<html>
  <head>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

    <title>E-Notice Board</title>
</head>
	  <nav class="navbar navbar-expand-lg" color-on-scroll="300">
            <div class="container">
                    <div class="navbar-translate">

              <a class="navbar-brand"><h5><b>Notices</b></h5></a>
             <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
            </div>
              <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                   <li class="nav-item">
                    <a class="nav-link" rel="tooltip" href="index.php"><h5><i class="nc-icon nc-shop" aria-hidden="true"></i><b>&nbspHome</b></h5></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" rel="tooltip" href="login.php"><h5><i class="nc-icon nc-compass-05" aria-hidden="true"></i><b>&nbspRegister</b></h5></a>
                  </li>
                  <li class="nav-item">
                    <a href="mailto:sjain251298@gmail.com"><button class="btn btn-outline-success btn-round">Send e-Message</button></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
<body style="background-color:#FFFAFA;background-image: url('https://www.transparenttextures.com/patterns/skulls.png');">


<?php
if(isset($_SESSION['user_id'])){
$con=new mysqli('sql12.freesqldatabase.com:3306','sql12313072','1vt5zsZILB','sql12313072');
$newpass=$_POST['npass'];
$confirmpass=$_POST['c_npass'];
$i=$_SESSION['user_id'];
$fetchpass=$con->query("SELECT * FROM `login` WHERE L_ID='$i'");
if($count=$fetchpass->num_rows){
$rows = $fetchpass->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
	$oldpass=$row['PASSWORD'];
}
}
if($newpass==$confirmpass && $newpass!=$oldpass){
$con->query("UPDATE `login` SET `PASSWORD`='$newpass' WHERE L_ID='$i'");
}
if($newpass==$confirmpass && $newpass!=$oldpass){
	header('location:index.php');
}
else{
	
	 echo "<div id=\"notifications\">
      <div class=\"alert alert-danger\">
      
          <span>Password Reset Failed ! Either there was a server error or your passwords didn't match or maybe you rentered your old password... </span>
        
      </div>
      </div><br><br>";

      echo "<center><button class=\"btn btn-primary btn-round \" onclick=\"window.location.href='passreset.php'\">Back to Password Reset Page</button></center>";
}
}
?>

<footer class="footer  bg-dark" style="top:27.4vw;box-shadow:10px 10px 10px 10px rgba(0,0,0,0.7);">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a class="nav-link" rel="tooltip" title="Invite me on linkedin" data-placement="bottom" href="https://www.linkedin.com/in/shubham-jain-640476189" target="_blank">
              <i class="fa fa-linkedin"></i>
              </a>
            </li>
            <li>
              <a class="nav-link" rel="tooltip" title="Add me on Facebook" data-placement="bottom" href="https://www.facebook.com/shubhu.2512" target="_blank">
              <i class="fa fa-facebook-square"></i>
              </a>
            </a>
            </li>
            <li>
               <a class="nav-link" rel="tooltip" title="Follow me on Instagram" data-placement="bottom" href="https://www.instagram.com/shubham.jain25/" target="_blank">
              <i class="fa fa-instagram"></i>
            </a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Shubham Jain
          </span>
        </div>
      </div>
    </div>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  </body>
</html>