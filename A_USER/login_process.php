<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
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
                        <a class="navbar-brand" href="../index.html">
                            <img src="images/logo1.png" width="200"  />
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse">
                       <ul class="nav navbar-nav float-right">
                            <li><a style="padding-left:0px;padding-right:0px;" href="../index.html"><span class="fa fa-home"></span></a></li>
                            <li><a href="../index.html">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="1_COURSE.html">Join Course</a></li>
                            <li><a href="6_TEMPLATES.html">Templates</a></li>
                            <li><a href="5_COMPILER.html">Compiler</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <section class="jumbotron">
                <div class="container">
                    <h1 class="display-4">Welcome</h1>
                    <p class="lead">A Better future starts from here...    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :)</p>
                    <hr class="my-4">
                    <p> A website that teaches you how to develope your own website ,
			 free learning , certified cource , mock tests , and many more ,<br> So join now... </p>
                    <p class="lead">
                       
                    </p>
                </div>
            </section>
            <section class="container">
                <div class="row">
                
                 <div class="col-sm-3">
                        <div class="box2">
                        
					 </div>
					</div>
                       
                        <div class="col-sm-12">
                        <div class="box4">
                        
                        <div class="col-sm-12">
                        <div class="box2">
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: ../B_COURSE/1_HTML,CSS,PHP for web-development.html"); // Redirect user to index.php
            }else{
			?>
				<center><div class='form'><img src="images/error.png" height="50" width="50"><h3>Username/password is incorrect.</h3><br/><a href='2_LOGIN.html'>TRY AGAIN!</a></div></center>
							&nbsp;
							<?php
				}
    }else{ 
	}
?>
			</div>
				</div>
                </div>
                        </div>
                
                <div class="col-sm-3">
                        <div class="box2">
                        
					 </div>
					</div>
                       
				</div>
			</section>
			
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