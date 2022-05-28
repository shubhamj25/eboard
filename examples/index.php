<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$con=new mysqli('sql12.freesqldatabase.com:3306','sql12313072','1vt5zsZILB','sql12313072');
$lemail=$_POST['login_email'];
$lpassword=$_POST['login_password'];
if($lemail && $lpassword){
  $res0=$con->query("SELECT * FROM `login` where `EMAIL`='$lemail' and `PASSWORD`='$lpassword'");
if($count=$res0->num_rows){
$rows = $res0->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
  $uid=$row['L_ID'];
}}
if($res0){
  $_SESSION['user_id']=$uid;
}
else{
  header('Location: signin.php');
}
}
?>

<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if(isset($_SESSION['user_id'])){

$con=new mysqli('sql12.freesqldatabase.com:3306','sql12313072','1vt5zsZILB','sql12313072');

$id=mt_rand(0,99999);
$title=$_POST['title'];
$content=$_POST['content'];
$postedon= date("Y-m-d h:i:s");
$priority=$_POST['priority'];
$dept=$_POST['department'];
$i=$_SESSION['user_id'];
$res=$con->query("SELECT * FROM `login` where `L_ID`='$i'");
if($count=$res->num_rows){
$rows = $res->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
  $postedby=$row['NAME'];
}}
if($res){
  if($title && $content && $dept){
  $con->query("INSERT INTO `univ_news`(`N_ID`, `N_TITLE`, `N_CONTENT`, `POSTED_BY`, `POSTED_ON`, `SENSITIVITY`, `DEPT_ID`, `U_ID`) VALUES ('$id','$title','$content','$postedby','$postedon','$priority','$dept','$i')");

header("location:index.php");
}
}

}

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
  <script type="text/javascript">
  	window.onload = function () {
    if (! localStorage.justOnce) {
        localStorage.setItem("justOnce", "true");
        window.location.reload();
    }
}
  </script>
  <body style="background-color: #343a40;background-image: url('https://www.transparenttextures.com/patterns/diagmonds.png');overflow-x: hidden !important">



       <nav class="navbar navbar-expand-lg navbar-transparent " color-on-scroll="300" style="border:none;padding: 0px;margin:0px;">
    <div class="container">
      <div class="navbar-translate">
              <a class="navbar-brand"><h5 style="color: #F5F5F5"><b>Notices</b></h5></a>
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


                  <?php 
                  	session_start();
                  	if(!isset($_SESSION['user_id'])){
                  		echo "<li class=\"nav-item\">
           						 <a href=\"signin.php\" class=\"nav-link\"><h5 ><i class=\"nc-icon nc-book-bookmark\"></i><b>&nbspLogin</b></h5></a>
         					 </li>";
                  	}
                  	else {
                  		echo "<li class=\"nav-item\">
            					<a href=\"logout.php\" class=\"nav-link\"><h5><i class=\"nc-icon nc-button-power\"></i><b>&nbspLogout</b></h5></a>
        					  </li>";

                    echo "<li class=\"nav-item\">
                      <a href=\"passreset.php\" class=\"nav-link\"><h5><i class=\"nc-icon nc-key-25\"></i><b>&nbspReset Password</b></h5></a>
                    </li>";
                  	}

                   ?>
         
             
                  <li class="nav-item">
                    <a href="mailto:sjain251298@gmail.com"><button class="btn btn-outline-success btn-round">Send e-Message</button></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
<div id="cards" class="row" style="padding-top: 5vw;padding-right: 5vw;padding-left: 5vw;">
<div class="col-sm-12" style="padding: 2vw;">
<div class="accordion" id="accordionExample" style="padding: 2vw;">
  <div class="card" style="box-shadow:0 30px 60px 0 rgba(0, 0, 0, 0.6);">
    <div class="card-header" id="headingOne" style="background-color: #007bff;">
        <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="border:none;color:white;background-color: #007bff;margin:0vw;">
          <h5>About E-notice Board</h5>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body" style="padding-left: 5vw;padding-right: 5vw;box-shadow:0 30px 60px 0 rgba(0, 0, 0, 0.6);">
        It is a usefull application for displaying the university notices.


      </div></div>
       <?php 
                  	session_start();
                  	if(!isset($_SESSION['user_id'])){
                  		echo "
      <div class=\"btn btn-block btn-danger\" style=\"border-radius:0px;\">
      
          <span>Login First Please! </span>
        </div>
      ";
                  	}
                  	else {
                  		echo "
      <div class=\"btn btn-block btn-success\" style=\"border-radius:0px;\">
        
          <span>You are Logged In :) </span>
        </div>
      ";
                  		
                  	}

                   ?>
    </div>
  <div class="card" style="box-shadow: 0 20px 40px 0 rgba(0, 0, 0, 0.2), 0 30px 60px 0 rgba(0, 0, 0, 0.19);">
    <div class="card-header" id="headingTwo" style="background-color: #007bff;" >
        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="border:none;color:white;background-color: #007bff;margin:0vw;">
         <h5>Create Notice</h5>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">



       <form action="frame.php" method="POST" style="width: 100%;margin: auto;padding: 5vw;background-color:#FFFAFA;background-image: url('https://www.transparenttextures.com/patterns/skulls.png');">

 
  <div class="form-group col-md-12">
    <label for="inputAddress"><h5>Title</h5></label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Title" name="title" style="border: none;">
  </div>
   <div class="form-group col-md-12">
      <label for="inputState"><h5>Department</h5></label>
      <select id="inputState" class="form-control" name="department" style="border: none;">
        <option selected disabled>Choose...</option>
        <option name=department value="University">University</option>
  <option name=department value="General">General</option>
  <option name=department value="Society">Society</option>
  <option name=department value="Computer Science">Computer Science</option>
  <option name=department value="Electronics">Electronics</option>
  <option name=department value="Mecnanical">Mechanical</option>
  <option name=department value="Electrical">Electrical</option>
      </select>
    </div>
  
     <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1"><h5>Content</h5></label>
    <textarea class="form-control" style="border: none;" id="exampleFormControlTextarea1" rows="5" name="content" required></textarea>
  </div>
 
    <div class="form-group col-md-6">
      <label for="inputState"><h5>Priority</h5></label>
      <select id="inputState" class="form-control" name="priority" style="border: none;">
        <option name="priority" value="High">High</option>
  <option name="priority" value="Medium">Medium</option>
  <option name="priority" value="Low">Low</option>
      </select>
    <br> 
    <button type="submit" formaction="index.php" class="btn btn-primary">Create Post</button>
  </div>
 
</form>

<!-- 
  <div class="form-group row">

    <label  class="col-sm-2 col-form-label"><font size="3">Title</font></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Title" name="title">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label"><font size="3">Department</font></label>
    <div class="col-sm-10">
<select class="custom-select" id="inlineFormCustomSelectPref" name="department">
    <option selected disabled>Choose...</option>
  <option name=department value="University">University</option>
  <option name=department value="General">General</option>
  <option name=department value="Society">Society</option>
  <option name=department value="Computer Science">Computer Science</option>
  <option name=department value="Electronics">Electronics</option>
  <option name=department value="Mecnanical">Mechanical</option>
  <option name=department value="Electrical">Electrical</option>
  </select> 
 </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label"><font size="3">User Id:</font></label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="Your Email" name="email">
    </div>
    <label  class="col-sm-2 col-form-label"><font size="3">Password:</font></label>
    <div class="col-sm-4">
      <input type="password" class="form-control" placeholder="Password" name="pass">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><font size="3">Content</font></label>
    <div class="col-sm-10">
    <textarea style="border-radius: 5px;border:0.5px light grey;width:100%;height:10vw;" id="validationTextarea" name="content" required></textarea>
    </div>
  </div>
   <div class="form-group row">
    <label  class="col-sm-2 col-form-label"><font size="3">Priority</font></label>
    <div class="col-sm-10">
<select class="custom-select" id="inlineFormCustomSelectPref" name="priority">
  <option name=department value="high">High</option>
  <option name=department value="medium">Medium</option>
  <option name=department value="low">Low</option>
  </select> 
 </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
  <button type="submit" formaction="index.php" class="btn btn-primary">Create Post</button>
    </div>
  </div>
</form> -->
    </div>
  </div>
</div>
</div>
</div>
</div>
<font style="color: white;"><center><h2>Recent Posts</h2></center></font>
      <iframe width="100%" height="1000px" style="border:none;padding: 0px;margin:0px;" src = "frame.php" ></iframe>


<footer class="footer  bg-dark">
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