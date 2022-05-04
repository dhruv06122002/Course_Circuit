<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/Style.css" rel="stylesheet" />
		<style>
.button1 {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #00afef;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #00A9E8}

.button:active {
  background-color: #00afef;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>
    <div id="wrapper">
        <div class="main">
            <header class="container-fluid topHeader">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-inline">
                                    <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> courcecircuit@gmail.com</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-phone"></span>+91 000000000</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="../index.html">
                            <img src="images/logo1.png"  width="200" />
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse">
                           <ul class="nav navbar-nav float-right">
                            <li><a href="../index.html">Home</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <section class="jumbotron">
                <div class="container"><center>
					<img src="images/Feedback.png" height="150" width="150">
                    <h1 class="display-4">Feedback</h1>
                    <hr class="my-4">
					<p>We would like your feedback to improve our website. </p></center>
                    <p class="lead">
                       
                    </p>
                </div>
            </section>
			<section class="container">
                <div class="row">
							<div class="col-sm-3">
                        <div class="box2"></div></div>
							 <div class="col-sm-6">
                        <div class="box4">
<?php
$course=$_POST["course"];
$compiler=$_POST["compiler"];
$templates=$_POST["templates"];
$games=$_POST["games"];
$exp=$_POST["exp"];
$message=$_POST["message"];
$cn=mysqli_connect ("localhost","root");
mysqli_select_db ($cn,"final_year");

if ($course!="" && $compiler!="" && $templates!="" && $games!="" && $exp!="" && $message!="")
{
	echo "&nbsp;";
	?>
	<center><img src="images/thank-you.png" height="100" width="100"></center>
		 <?php
	echo "<center><h1>We value your feedback</h1></center>";
	echo "<center><h3>Thank you for your feedback.</h3></center>";
	echo "<center><h3>We'll surely try to make this website more better.</h3></center>";
	echo "&nbsp;";
$ins=mysqli_query ($cn,"INSERT INTO feedback VALUES (' ".$course." ',' ".$compiler." ',' ".$templates." ',' ".$games." ','  ".$exp." ',' ".$message." ' )" );
	?>
	<center><a href="../index.html"><button class="button1">HOME</button></a></center>
		 <?php
}
else
{
echo "&nbsp;";
echo "<center><h1>Fail to receive Feedback <br>PLease try again after some time...</h1></center>";
echo "&nbsp;";
}
?>
							<h5>&nbsp;</h5>
</div></div>
	 </div>
	 </section>
			
			
        </div>
        <div>
        <footer class="container-fluid" style="background:#002739;padding:70px 0px 0px 0px;">
            <div class="row">
                <div class="container" style="padding-bottom:40px;">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <a href="file:///C:/Users/My%20PC/Desktop/WEBSITE/A_STUDENT/SELECT%201%20BOARD.html">
                                <img src="images/logo-2.png"   width="200"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
	</div>
</body>
</html>							