<!DOCTYPE html>
<html>
<?php require 'dbconfig.php';
session_start(); ?>
<head>
    <meta charset="utf-8" />
    <title></title>
	<link href="css/bootstrap.min.css.map" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/Style.css" rel="stylesheet" />
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
                        <a class="navbar-brand" href="../../B_COURSE/1_HTML,CSS,PHP for web-development.html">
							<img src="images/logo1.png" width="200">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse">
                        <ul class="nav navbar-nav float-right">
                            <li><a href="../../B_COURSE/1_HTML,CSS,PHP for web-development.html">Home</a></li>
                             <li><a href="../../B_COURSE/B_PHASE_3/PAGE_0.html">Index</a></li>
                            <li><a href="../../B_COURSE/B_PHASE_1/PAGE_COLOR.html">Color Picker</a></li>
                            <li><a href="../../A_MAIN/3_COMPILER.html">Compiler</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <section class="jumbotron">
                <div class="container">
                    <p><center><img src="PHASES/ACSS.png" height="150" width="150"></center></p>
                    <p class="lead"><center><b><h3>Welcome to Phase 3 : Advance CSS</h3></b></center></p>
                </div>
            </section>
			
                            <section class="container">
                <div class="row">
                <div class="col-sm-2">
                    <div class="box7"></div></div>
					<div class="col-sm-8">
                    <div class="box6">
                <?php 															
																if (isset($_POST['click']) || isset($_GET['start'])) {
																@$_SESSION['clicks'] += 1 ;
																$c = $_SESSION['clicks'];
																if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
																
																$fetchqry2 = "UPDATE `p3q1` SET `userans`='$userselected' WHERE `id`=$c-1"; 
																$result2 = mysqli_query($con,$fetchqry2);
																}
		  
																	
 																} else {
																	$_SESSION['clicks'] = 0;
																}
																
																//echo($_SESSION['clicks']);
																?>
<form><?php if($_SESSION['clicks']==0){ ?> <center><button style="background-color:#00afef; " name="start" float="right"><span>START QUIZ</span></button></center> <?php } ?></form>
<form action="" method="post">  				
<table class="roundedCorners1" align="center"><?php if(isset($c)) {   $fetchqry = "SELECT * FROM `p3q1` where id='$c'"; 
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
		  ?>
<tr align="center"><td><h3><br><?php echo @$row['que'];?></h3></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 11){ ?>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 1'];?>">&nbsp;<?php echo $row['option 1']; ?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 2'];?>">&nbsp;<?php echo $row['option 2'];?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 3'];?>">&nbsp;<?php echo $row['option 3']; ?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 4'];?>">&nbsp;<?php echo $row['option 4']; ?><br></td></tr>
  <tr align="center"><td><button style="background-color:#00afef" name="click" >Next</button></td></tr> <?php }  
																	?></table>&nbsp;
  <form>
 <?php if($_SESSION['clicks']>10){ 
	$qry3 = "SELECT `ans`, `userans` FROM `p3q1`;";
	$result3 = mysqli_query($con,$qry3);
	$storeArray = Array();
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['ans']==$row3['userans']){
		 @$_SESSION['score'] += 1 ;
	 }
}
 ?>
 <span><h3><center>RESULT</center></h3></span>
<!--img src="images/result.png" height="200" width="400"--><br>
 <span><center>No. of Correct Answer:&nbsp;<?php $no = @$_SESSION['score'];;
 echo $no;
 session_unset(); ?></center></span><br>
 <span><center>Your Score:&nbsp<?php echo $no; 
 if($no<=5)
 {
	 echo "<br>";
	 echo '<center><img src="images/fail.png" height="100" width="100"></center>';
	 echo "<center><br><h3>FAIL!!</h3></center>";
	 echo "<h4>&nbsp;</h4>";
 }
 else
 {
	echo "<br>";
	 echo '<center><img src="images/passed.png" height="100" width="100"></center>';
	 echo "<center><br><h3>CONGRATULATION</h3></center>";
	 echo "<h4>&nbsp;</h4>";
 }
 ?> </center></span>
<?php } ?></span></center></form></form>
</div>
               
               </div>
                    </div></section>
            <!--<div id="push"></div>-->
        </div>
        <footer class="container-fluid" style="background:#002739;padding:70px 0px 0px 0px;">
            <div class="row">
                <div class="container" style="padding-bottom:40px;">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <a href="#">
                                <img src="images/logo-2.png"  width="200" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>