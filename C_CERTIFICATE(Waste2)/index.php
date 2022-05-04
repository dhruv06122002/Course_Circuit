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
                        <a class="navbar-brand" href="#">
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
                <div class="container"><center>
                <img src="images/graduated.png" height="100" width="100">
                    <h1 class="display-4">CONGRATULATIONS</h1>
                    <p class="lead">WISH YOU A GREAT FUTURE!!!    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#128522;</p>
                    <hr class="my-4">
                    <p> Congrulations , <br>Dear user for successfully completing course .</p>
                    </center>
                </div>
            </section>
            <section class="container">
                <div class="row">
                
                 <div class="col-sm-3">
                        <div class="box2">
                        
					 </div>
					</div>
                       
                        <div class="col-sm-12">
                        <div class="box1">
							
							<div class="col-sm-12">
                        <div class="box2" align="center">
   <?php 
					require('db.php');
$result=mysqli_query ($con,"select * from users");
if (mysqli_num_rows ($result)>0)
{
while ($row=mysqli_fetch_array ($result))
{
	?>
							
   <?php 
      //if (isset($_POST['generate'])) {
        //$name = strtoupper($_POST['name']);
        //$name_len = strlen($_POST['name']);
		$name = strtoupper($row["fullname"]);
		  $name_len = strlen($row["fullname"]);
        $occupation = date('d F, Y');
        if ($occupation) {
          $font_size_occupation = 10;
        }
          echo 
          "
		  <center>
          <div class='alert alert-success col-sm-12' role='alert'>
              Congratulations! $name on your excellent success.
          </div>
			  <h4>&nbsp;</h4>
		  </center>
          ";

          //designed certificate picture
          $image = "certi.png";

          $createimage = imagecreatefrompng($image);

          //this is going to be created once the generate button is clicked
          $output = "certificate.png";

          //then we make use of the imagecolorallocate inbuilt php function which i used to set color to the text we are displaying on the image in RGB format
          $white = imagecolorallocate($createimage, 205, 245, 255);
          $black = imagecolorallocate($createimage, 0, 0, 0);

          //Then we make use of the angle since we will also make use of it when calling the imagettftext function below
          $rotation = 0;

          //we then set the x and y axis to fix the position of our text name
          $origin_x = 300;
          $origin_y=220;

          //we then set the x and y axis to fix the position of our text occupation
          $origin1_x = 345;
          $origin1_y=115;

          //we then set the differnet size range based on the lenght of the text which we have declared when we called values from the form
          if($name_len<=7){
            $font_size = 25;
            $origin_x = 190;
          }
          elseif($name_len<=12){
            $font_size = 30;
          }
          elseif($name_len<=15){
            $font_size = 26;
          }
          elseif($name_len<=20){
             $font_size = 18;
          }
          elseif($name_len<=22){
            $font_size = 15;
          }
          elseif($name_len<=33){
            $font_size=11;
          }
          else {
            $font_size =10;
          }

          $certificate_text = $name;

          //font directory for name
          $drFont = dirname(__FILE__)."/developer.ttf";

          // font directory for occupation name
          $drFont1 = dirname(__FILE__)."/Gotham-black.otf";

          //function to display name on certificate picture
          $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black,$drFont, $certificate_text);

          //function to display occupation name on certificate picture
          $text2 = imagettftext($createimage, $font_size_occupation, $rotation, $origin1_x+2, $origin1_y, $black, $drFont1, $occupation);

          imagepng($createimage,$output,3);

 ?>
        <!-- this displays the image below -->
        <img src="<?php echo $output; ?>">
        <br> 
        <br>
							
        <!-- this provides a download button -->
        <a href="<?php echo $output; ?>" class="button1" download>Download Certificate</a>
        <br><br>
<?php 
        }
      //}

     ?>
							<?php
	//}
}
	mysqli_close($con);
?>

    </center>

      </div>
					</div>
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