<!doctype html>
<html lang="en">
  <head>
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
<br><br><br>

<body style="background-color: #343a40;background-image: url('https://www.transparenttextures.com/patterns/diagmonds.png');overflow-x: hidden !important;">
<div class="row" style="padding: 3vw;margin-top:0;">
  
<script>
function myAjax(x) {
      $.ajax({
           type: "POST",
           url: 'ajax.php',
           data:{action:x},
           /*success:function(html) {
             alert(html);
           }*/

      });
 }

 function myAjax2(t) {
      $.ajax({
           type: "POST",
           url: 'a_jax2.php',
           data:{action:t},
           /*success:function(html) {
             alert(html);
           }*/

      });
 }
</script>
<?php
$con=new mysqli('localhost','id11674333_sjain251298','sj251298','id11674333_shubhu');
$con->query("DELETE FROM `univ_news` WHERE TIMESTAMPDIFF(MONTH,`POSTED_ON`,CURRENT_TIMESTAMP) > 2
");
$result=$con->query("SELECT * FROM `univ_news`");
if($count=$result->num_rows){

$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
  echo"
      <div id=\"",$row['N_ID']-1,"\" class=\"col-sm-6\" >
      <div id=\"",$row['N_ID'],"\" class=\"card\" style=\"padding: auto;opacity: 1;background-color:#FFFFFF;box-shadow: 0 20px 40px 0 rgba(0, 0, 0, 0.2), 0 30px 60px 0 rgba(10, 10, 10, 1);\">
      <div class=\"card-body\">";
         //echo "<p class=\"card-text\" style=\"float:right;color:grey;\"><font size=\"1\">",$row['POSTED_ON'],"</font>";
          if($row['SENSITIVITY']=='High'){
        echo "<button id=\"",$row['N_ID']+1,"\" type=\"button\" class=\"btn btn-outline-danger btn-sm btn-round\" style=\"float:right;\">",$row['POSTED_ON'],"</button>";
       }
       else if($row['SENSITIVITY']=='Medium'){
        echo "<button id=\"",$row['N_ID']+1,"\" type=\"button\" class=\"btn btn-outline-warning btn-sm btn-round\" style=\"float:right;\">",$row['POSTED_ON'],"</button>";
       }
       else if($row['SENSITIVITY']=='Low'){
        echo "<button id=\"",$row['N_ID']+1,"\" type=\"button\" class=\"btn btn-outline-success btn-sm btn-round\" style=\"float:right;\">",$row['POSTED_ON'],"</button>";
       }


         echo "</p>";
       echo" <p id=\"",$row['N_ID']+2,"\"class=\"card-title\" style=\"size:3vw;\"><b>",$row['N_TITLE'],"</b>";
       echo"</p>";
       echo"<p id=\"",$row['N_ID']+3,"\" class=\"card-title\" style=\"size:2.7vw;\"><b><i>",$row['DEPT_ID'],"</i></b></p>";
        echo" <p id=\"",$row['N_ID']+4,"\" class=\"card-text\" style=\"size:2.5vw;color:#080808;\"><i>by&nbsp",$row['POSTED_BY'],"</i></p>";
      echo " <p id=\"",$row['N_ID']+5,"\" class=\"card-text\" style=\"size:2.3vw;color:#080808;\">",$row['N_CONTENT'],"</p>";


echo " <p>
			<p style=>";

$c_id=$row['N_ID'];
$comment=$con->query("SELECT * FROM `comments` where NEWS_ID='$c_id'");
if($count=$comment->num_rows){

$x = $comment->fetch_all(MYSQLI_ASSOC);
foreach ($x as $y) {
	echo "<div class=\"card\" style=\"border:none;border-radius:3px;padding-left:9px;padding-right:5px;padding-top:4px;background-color:#ad6be3;
background-image: url('https://www.transparenttextures.com/patterns/skulls.png');color:white;\">";
	echo"<p id=\"",$y['C_ID'],"\"><i><b>",$y['C_CONTENT'],"</b></i><br><FONT STYLE=\"float:left;font-size:15px;\"><b>~</b>",$y['COMMENTED_BY'],"</font><button class=\"btn btn-sm btn-link btn-warning\" style=\"float:right;\" onclick=\"myAjax2(",$y['C_ID'],");document.location.reload(true);\">DELETE</button></p><br></div>";
}
}


echo"<br></p>
          <form action=\"ajax2.php\" method=\"POST\">
          <div class=\"row\">
            <input type=\"text\" style=\"border:none;width:60%;background-color:#e5e5e5;margin-left:15px;\" placeholder=\"Comment\" class=\"form-control\" name=\"comm\">
            <button type=\"submit\" class=\"btn btn-sm btn-round btn-info btn-link\" name=\"submit\" value=\"",$row['N_ID'],"\" onclick=\"document.location.reload(true);\" style=\"border: none;border-radius: 1.5vw;padding-left:10px;padding-right:10px;\">Comment</button><br><br>
            </div>
          </form>
</p>";









      echo "<button id=\"",$row['N_ID']+6,"\" class=\"btn btn-danger\" onclick=\"myAjax(",$row['N_ID'],");";

echo ";document.getElementById('",$row['N_ID']-1,"').style.transition='1.5s ease';document.getElementById('",$row['N_ID']-1,"').style.opacity='0';document.getElementById('",$row['N_ID']-1,"').style.padding='0px';document.location.reload(true);";
    /*  for ($i=0; $i <7 ; $i++) { 
      echo"document.getElementById('",$row['N_ID']+$i,"').style.transition='1.5s ease';document.getElementById('",$row['N_ID']+$i,"').style.width='0px';document.getElementById('",$row['N_ID']+$i,"').style.height='0px';document.getElementById('",$row['N_ID']+$i,"').style.padding='0px';";
      }*/

     echo "\" ";
      echo " >DELETE</a>";
     // value=\"",$row['N_ID'],"\"
      echo"</div></div></div>";
}
}


?>
</div>

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