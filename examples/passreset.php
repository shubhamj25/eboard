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
       <nav class="navbar navbar-expand-lg navbar-transparent " color-on-scroll="300">
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


                  
         
                </ul>
              </div>
            </div>
          </nav>
  <body style="background-color: #8b2de3;
background-image: url('https://www.transparenttextures.com/patterns/skulls.png');">
    <center><div style="margin-top:-10px;margin-bottom:3vw;width:25vw;min-width:300px;background-color: #343a40;background-image: url('https://www.transparenttextures.com/patterns/diagmonds.png');border: none;border-radius: 1.2vw;padding: 20px 20px 40px 20px;box-shadow: 10px 20px 20px 10px rgba(0,0,0,0.6);">
    <div class="spinner-grow text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div><br><br><img src="../assets/img/placeholder.jpg" style="border-radius: 80px;width: 80px;height: 80px;"><h3 id="title" style="text-align: center;color: #ffffff;"><b>Reset Password</b></h3>
   
    <form action="reset.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1" style="color: #ffffff;">New Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Password" name="npass" style="background-color: #444444;color:#ffffff;border:none;" required>
    <small id="emailHelp" class="form-text text-muted"><font style="color: #ffffff;font-size: 15px;">Enter a different password from the old one else it won't be reset. </font></small>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1" style="color: #ffffff;">Confirm New Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Re-Enter New Password" name="c_npass" style="background-color: #444444;color:#ffffff;border:none;" required>
    </div>
  
  
  <button type="submit" name="submit" value="Submit" class="btn btn-block btn-round btn-success">Reset Password</button>

</form>
<br>
 <button type="link" onclick="window.location.href='index.php'" class="btn btn-block btn-round btn-info btn-link">Back to Home</button>

</div>
<br><br>

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