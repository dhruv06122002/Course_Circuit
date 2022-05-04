<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/Style.css" rel="stylesheet" />
	<style>
	table.roundedCorners {
  border: 1px solid #00afef;
  border-radius: 13px;
  border-spacing: 0;
  }
table.roundedCorners td,
table.roundedCorners th {
  border-bottom: 1px solid #00afef;
  padding: 10px;
  }
table.roundedCorners tr:last-child > td {
  border-bottom: none;
}

/*  table style 1 */

table.roundedCorners1 {
  border: 1px solid transparent;
  border-radius: 13px;
  border-spacing: 0;
  }
table.roundedCorners1 td,
table.roundedCorners1 th {
  border-bottom: 1px solid transparent;
  padding: 10px;
  }
table.roundedCorners1 tr:last-child > td {
  border-bottom: none;
}

/*  table style 2 */

table.roundedCorners2 {
  border: 1px solid #00afef;
  border-radius: 13px;
  border-spacing: 10;
  }
table.roundedCorners2 td,
table.roundedCorners2 th {
  border-bottom: 1px solid #00afef;
  padding: 30px;
  }
table.roundedCorners2 tr:last-child > td {
  border-bottom: none;
}
		
	/*  table style 3 */

table.roundedCorners3 {
  border: 1px solid transparent;
  border-radius: 13px;
  border-spacing: 10;
  }
table.roundedCorners3 td,
table.roundedCorners3 th {
  border-bottom: 1px solid transparent;
  padding: 30px;
  }
table.roundedCorners3 tr:last-child > td {
  border-bottom: none;
}

.button1 {
  padding: 15px 25px;
  font-size: 20px;
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
                            <img src="images/logo1.png" width="200"  />
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse">
                       <ul class="nav navbar-nav float-right">
                            <li><a style="padding-left:0px;padding-right:0px;" href="../index.html"><span class="fa fa-home"></span></a></li>
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="1_COURSE.html">Join Course</a></li>
                            <li><a href="6_TEMPLATES.html">Templates</a></li>
                            <li><a href="5_COMPILER.html">Compiler</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
			<section class="jumbotron">
                <div class="container" align="center">
					<img src="images/profile.png" height="150" width="150">
                    <h1 class="display-4">DASHBOARD</h1>
                </div>
            </section>
            <section class="container">
                <div class="row">
                       <?php
					require('db.php');
$result=mysqli_query ($con,"select * from users");
if (mysqli_num_rows ($result)>0)
{
while ($row=mysqli_fetch_array ($result))
{
	?>
                        <div class="col-sm-4">
                        <div class="box4">
							<center><img src="images/Picture.png" height="250" width="250">
								<h5>&nbsp;</h5>
									<h3><?php echo $row["fullname"] ?></h3>
									<h6>&nbsp;</h6>
							</center>
							</div></div>
					<div class="col-sm-8">
                        <div class="box4">
							<table class="roundedCorners2 rounded" align="center">
							<tr>
							<td>ID</td>	
							<td><?php echo $row["id"] ?></td>	
							</tr>
							<tr>
							<td>Username:</td>	
							<td><?php echo $row["username"] ?></td>	
							</tr>
							<td>Email id</td>	
							<td><?php echo $row["email"] ?></td>	
							</tr>
							<td>Change Password:</td>	
							<td><!-- change password system--><?php echo $row["password"] ?></td>	
							</tr>
							</table>
					<h6>&nbsp;</h6>
					</div></div>
			
					<div class="col-sm-12">
                        <div class="box6">
							<div class="col-sm-4">
								<div class="box2">
							<img src="PHASES/HTML.png" height="100" width="100"><h3>Phase 1 : HTML</h3>
							</div></div>
							<div class="col-sm-6">
								<div class="box2">
									<h3>&nbsp;</h3>
									<progress style="color:#00afef; height: 30px; width: 450px;"  value = "65" max = "100"/>
							</div></div><h3>&nbsp;</h3>
							<div class="col-sm-2">
								<div class="box2">
									<a href="../B_COURSE/B_PHASE_1/PAGE_0.html"><button type="submit" name="generate" class="button1">OPEN</button></a>
							</div></div>
						</div></div>
			
						<div class="col-sm-12">
                        <div class="box6">
							<div class="col-sm-4">
								<div class="box2">
							<img src="PHASES/CSS.png" height="100" width="100"><h3>Phase 2 : CSS</h3>
							</div></div>
							<div class="col-sm-6">
								<div class="box2">
									<h3>&nbsp;</h3>
									<progress style="color:#00afef; height: 30px; width: 450px;"  value = "65" max = "100"/>
							</div></div><h3>&nbsp;</h3>
							<div class="col-sm-2">
								<div class="box2">
									<a href="../B_COURSE/B_PHASE_2/PAGE_0.html"><button type="submit" name="generate" class="button1">OPEN</button></a>
							</div></div>
						</div></div>
			
			<div class="col-sm-12">
                        <div class="box6">
							<div class="col-sm-4">
								<div class="box2">
							<img src="PHASES/Advance CSS.png" height="100" width="100"><h3>Phase 3 : Advanve CSS</h3>
							</div></div>
							<div class="col-sm-6">
								<div class="box2">
									<h3>&nbsp;</h3>
									<progress style="color:#00afef; height: 30px; width: 450px;"  value = "65" max = "100"/>
							</div></div><h3>&nbsp;</h3>
							<div class="col-sm-2">
								<div class="box2">
									<a href="../B_COURSE/B_PHASE_3/PAGE_0.html"><button type="submit" name="generate" class="button1">OPEN</button></a>
							</div></div>
						</div></div>
			
			<div class="col-sm-12">
                        <div class="box6">
							<div class="col-sm-4">
								<div class="box2">
							<img src="PHASES/PHP1.png" height="100" width="100"><h3>Phase 4 : PHP</h3>
							</div></div>
							<div class="col-sm-6">
								<div class="box2">
									<h3>&nbsp;</h3>
									<progress style="color:#00afef; height: 30px; width: 450px;"  value = "65" max = "100"/>
							</div></div><h3>&nbsp;</h3>
							<div class="col-sm-2">
								<div class="box2">
									<a href="../B_COURSE/B_PHASE_4/PAGE_0.html"><button type="submit" name="generate" class="button1">OPEN</button></a>
							</div></div>
						</div></div>
			
			<div class="col-sm-12">
                        <div class="box6">
							<div class="col-sm-4">
								<div class="box2">
							<img src="PHASES/Database.png" height="100" width="100"><h3>Phase 5 : MySQL</h3>
							</div></div>
							<div class="col-sm-6">
								<div class="box2">
									<h3>&nbsp;</h3>
									<progress style="color:#00afef; height: 30px; width: 450px;"  value = "65" max = "100"/>
							</div></div><h3>&nbsp;</h3>
							<div class="col-sm-2">
								<div class="box2">
									<a href="../B_COURSE/B_PHASE_5/PAGE_0.html"><button type="submit" name="generate" class="button1">OPEN</button></a>
							</div></div>
						</div></div>
			
			<div class="col-sm-12">
                        <div class="box6">
							<div class="col-sm-4">
								<div class="box2">
							<img src="PHASES/hosting.png" height="100" width="100"><h3>Phase 6 : Hosting &amp; Domain</h3>
							</div></div>
							<div class="col-sm-6">
								<div class="box2">
									<h3>&nbsp;</h3>
									<progress style="color:#00afef; height: 30px; width: 450px;"  value = "65" max = "100"/>
							</div></div><h3>&nbsp;</h3>
							<div class="col-sm-2">
								<div class="box2">
									<a href="../B_COURSE/B_PHASE_6/PAGE_0.html"><button type="submit" name="generate" class="button1">OPEN</button></a>
							</div></div>
						</div></div>
			
			<?php
	}
}
	mysqli_close($con);
?>
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