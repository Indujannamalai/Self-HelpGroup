<?php
session_start(); 
$con = mysql_connect("localhost","root","");
$exe = mysql_select_db('womensgroup',$con);
$uri = $_SERVER["QUERY_STRING"];
//echo $uri;
if(isset($_REQUEST['Submit']))
{
	$a1=$_POST['username'];
	$a2=$_POST['password'];
	echo $a1;
	if (($_POST['textfield']=="Admin") and  ($_POST['textfield2']=="Admin")) 
	{
	    @$_SESSION['username'] = $_REQUEST['username'];
		
		echo '<script>alert("Admin Login successful");</script>';
		$URL="AdminHome.php";
		echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
		echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";	
	}
	
	else if($_POST['select']=="User")
	{
		$sel ="select * from register where username = '".$_POST['textfield']."' and  password = '".$_POST['textfield2']."' "; 
		$run = mysql_query($sel);
		$getNo = mysql_num_rows($run);
		if($getNo!='')
		{
			@$_SESSION['username'] = $_REQUEST['textfield'];
			
			$getRecords = mysql_fetch_array($run);
			echo '<script>alert("User Login successful");</script>';
			$URL="UserHome.php";
			echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
			echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
		}
		else
		{
		echo '<script>alert("Invalid   username and Password!");</script>';
		}
	}	
	
	else if($_POST['select']=="Employee")
	{
		$sel ="select * from addemployee where username = '".$_POST['textfield']."' and  password = '".$_POST['textfield2']."' "; 
		$run = mysql_query($sel);
		$getNo = mysql_num_rows($run);
		if($getNo!='')
		{
			@$_SESSION['username'] = $_REQUEST['textfield'];
			
			$getRecords = mysql_fetch_array($run);
			echo '<script>alert("Employee Login successful");</script>';
			$URL="EmployeeHome.php";
			echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
			echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
		}
		else
		{
		echo '<script>alert("Invalid   username and Password!");</script>';
		}
	}	
	
	
}	
if(isset($_REQUEST['Submit2']))
{
$_POST['username']="";
$_POST['password']="";
}
	?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Womens Self Help Group Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  <style type="text/css">
<!--
.style8 {
	font-family: "Times New Roman", Times, serif;
	color: #0000FF;
	font-weight: bold;
}
.style14 {font-family: "Times New Roman", Times, serif; font-size: 24px; font-weight: bold; color: #0000FF; }
.style15 {color: #FFFFFF}
.style17 {font-family: "Times New Roman", Times, serif; font-size: 18px; font-weight: bold; color: #0000FF; }
-->
  </style>
  </head>

  <body>
 <form id="form1" name="form1" method="post" action="">
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="Homepage.php"><h2>Womens Group Portal</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="Homepage.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Services.php">Our Services</a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="Contactus.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">

                <div class="text-content">
                
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
          <h2 align="left">&nbsp;</h2>
              <table width="829" height="141" border="1">
                <tr>
                  <td colspan="2"><div align="center"><span class="style17">Login Details </span></div></td>
                  <td width="388" rowspan="4"><img src="assets/images/1.jpg" width="290" height="89"></td>
                </tr>
                <tr>
                  <td width="221"><div align="left" class="style14">User Name </div></td>
                  <td width="198"><div align="left">
                    <input type="text" name="textfield">
                  </div></td>
                </tr>
                <tr>
                  <td><div align="left" class="style14">Password </div></td>
                  <td><div align="left">
                    <input type="password" name="textfield2">
                  </div></td>
                </tr>
                <tr>
                  <td><div align="left" class="style14">User Role </div></td>
                  <td><div align="left">
                    <select name="select">
                      <option value="Select">Select</option>
                      <option value="Admin">Admin</option>
                      <option value="Employee">Employee</option>
                      <option value="User">User</option>
                    </select>
                  </div></td>
                </tr>
                <tr>
                  <td><div align="center">
                    <input type="submit" name="Submit" value="Login">
                  </div></td>
                  <td><div align="center">
                    <input type="submit" name="Submit2" value="Cancel">
                  </div></td>
                  <td><span class="style8">New User Register Here</span><a href="Register.php">Signup now</a></td>
                </tr>
              </table>
              <p align="left">&nbsp;</p>
          </div>
          <div class="col-md-4">
           
          </div>
        </div>
      </div>
    </div>

   

    <!-- Footer Starts Here -->
<footer>
      <div class="container">
        <div class="row"></div>
      </div>
        </div>
      </div>
  </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row style15">CopyRights Reserved @ 2023 </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
</form>
  </body>
</html>