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
                        <a class="navbar-brand" href="#">
                            <img src="images/logo1.png" width="200"  />
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse">
                        <ul class="nav navbar-nav float-right">
                            <li><a style="padding-left:0px;padding-right:0px;" href="../index.html"><span class="fa fa-home"></span></a></li>
                            <li class="active"><a href="../index.html">Home <span class="sr-only">(current)</span></a></li>
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
                       
                        <div class="col-sm-7">
                        <div class="box1">
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$fullname = stripslashes($_REQUEST['fullname']);
		$fullname = mysqli_real_escape_string($con,$fullname);
        $query = "INSERT into `users` (username, password, email, fullname) VALUES ('$username', '".md5($password)."', '$email', '$fullname')";
        $result = mysqli_query($con,$query);
        if($result){
			//echo '<script type="javascript">alert("Successfully Registered")</script>';
           header("Location: ../B_COURSE/1_HTML,CSS,PHP for web-development.html");
        }
    }else{ 
	//echo '<script>alert("Registration fail")</script>';
    header("Location: 3_SIGN UP.html");
	}
?>
</div>
				</div>
                
               
                       
				</div>
			</section>

            <!--<div id="push"></div>-->
        </div>
		<!--a href="../../../FINAL YEAR/B_COURSE/1_HTML,CSS,PHP for web-development.html"-->
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