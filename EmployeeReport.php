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
	else if($_POST['select']=="Employee")
	{
		$sel ="select * from employee where username = '".$_POST['textfield']."' and  password = '".$_POST['textfield2']."' "; 
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
	
	else if($_POST['select']=="User")
	{
		$sel ="select * from login where username = '".$_POST['textfield']."' and  password = '".$_POST['textfield2']."' "; 
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
.style16 {font-family: "Times New Roman", Times, serif}
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
              <td><div align="center">View Employee Report </div></td>
            </tr>
            <tr>
              <td><table width="1417" height="67" border="1">
                <tr>
                  <td><span class="style16">Employee ID </span></td>
                  <td><span class="style16">Employee Name </span></td>
                  <td><span class="style16">Gender </span></td>
                  <td><span class="style16">Contact Number </span></td>
                  <td><span class="style16">Email ID </span></td>
                  <td><span class="style16">Address </span></td>
                  <td><span class="style16">Team Name </span></td>
                  <td><span class="style16">Team Location </span></td>
                </tr>
                <tr>
                  <?php
					$rowsPerPage =7;
		    		require_once("mysql.php");
		$sql = "SELECT * FROM addemployee  ";
					
					$result = mysql_query($sql);	
					$row = mysql_fetch_array($result);
					$num=mysql_num_rows($result);
					$i=0; 
					while($i < $num) 
					{
								$a1=mysql_result($result,$i,"employeeid");
								$a2=mysql_result($result,$i,"employeename");
								$a3=mysql_result($result,$i,"gender");
								$a4=mysql_result($result,$i,"contactnumber");	
								$a5=mysql_result($result,$i,"emailid");
								$a6=mysql_result($result,$i,"address");
							    $a7=mysql_result($result,$i,"teamname");
								$a8=mysql_result($result,$i,"teamlocation");
								
								
								
								
								
									
								
			?>
                  <td><?php echo $a1; ?></td>
                  <td><?php echo $a2; ?></td>
                  <td><?php echo $a3; ?></td>
                  <td><?php echo $a4; ?></td>
                  <td><?php echo $a5; ?></td>
                  <td><?php echo $a6; ?></td>
                  <td><?php echo $a7; ?></td>
                  <td><?php echo $a8; ?></td>
                </tr>
                <?php
				$i++;} 
			?>
              </table></td>
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