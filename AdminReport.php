<?php
session_start(); 
$con = mysql_connect("localhost","root","");
$exe = mysql_select_db('womensgroup',$con);
$uri = $_SERVER["QUERY_STRING"];
//echo $uri;
if(isset($_REQUEST['Submit']))
{
	
	$$URL="TeamReport.php";
}	

if(isset($_REQUEST['Submit2']))
{
	
	$$URL="EmployeeReport.php";
}

if(isset($_REQUEST['Submit3']))
{
	
	$$URL="MemberReport.php";
}
if(isset($_REQUEST['Submit4']))
{
	
	$$URL="MeetingReport.php";
}
if(isset($_REQUEST['Submit5']))
{
	
	$$URL="PaymentReport.php";
}
if(isset($_REQUEST['Submit6']))
{
	
	$$URL="RegisterReport.php";
}
if(isset($_REQUEST['Submit7']))
{
	
	$$URL="FeedbackReport.php";
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
-->
  </style>
  </head>

  <body>

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
                <a class="nav-link" href="AdminHome.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AddGroup.php">New Group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AddEmployee.php">Employee</a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="AdminReport.php">Report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Login.php">Logout</a>
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
            <div class="img-fill"></div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill"></div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill"></div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-20">
          <h2 align="left">Welcome:Admin</h2>
          <table width="1428" border="1">
            <tr>
              <td><div align="center"><a href="teamreport.php">
                <input type="submit" name="Submit" value="Team Report">
              </a></div></td>
              <td><div align="center"><a href="EmployeeReport.php">
                <input type="submit" name="Submit2" value="Employee Report">
              </a></div></td>
              <td><div align="center"><a href="MemberReport.php">
                <input type="submit" name="Submit3" value="Member Report">
              </a></div></td>
              <td><div align="center"><a href="MeetingReport.php">
                <input type="submit" name="Submit4" value="Meeting Report">
              </a></div></td>
              <td><div align="center"><a href="PaymentReport.php">
                <input type="submit" name="Submit5" value="Payment Report">
              </a></div></td>
              <td><div align="center"><a href="RegisterReport.php">
                <input type="submit" name="Submit6" value="Register Report">
              </a></div></td>
              <td><div align="center"><a href="FeedbackReport.php">
                <input type="submit" name="Submit7" value="Feedback Report">
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <p align="justify">&nbsp;</p>
          <h2 align="left"><em></em></h2>
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
        <div class="row">
          
        </div>
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

  </body>
</html>