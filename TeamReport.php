<?php
session_start(); 
$con = mysql_connect("localhost","root","");
$exe = mysql_select_db('womensgroup',$con);
$uri = $_SERVER["QUERY_STRING"];
//echo $uri;

	
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
.style18 {color: #0000FF; font-weight: bold; }
.style22 {font-family: "Times New Roman", Times, serif; color: #0000FF; font-weight: bold; }
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
          <a class="navbar-brand" href="Homepage.php"><h2>Womens Self-Help Group Portal</h2></a>
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
			   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Report</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="TeamReport.php">Team Report</a>
					    <a class="dropdown-item" href="EmployeeReport.php">Employee Report</a>
						  <a class="dropdown-item" href="MemberReport.php">Member Report</a>
						    <a class="dropdown-item" href="MeetingReport.php">Meeting Report</a>
							  <a class="dropdown-item" href="PaymentReport.php">Payment Report</a>
							    <a class="dropdown-item" href="RegisterReport.php">Register Report</a>
								  <a class="dropdown-item" href="FeedbackReport.php">Feedback Report</a>
                      </div>
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
         
          <!-- // Item -->
          <!-- Item -->
        
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
              <td><div align="center" class="style18">View Team Report </div></td>
            </tr>
            <tr>
              <td><div align="center" class="style18">Select Team Name
                  <?php 
			mysql_connect('localhost', 'root', '');
			mysql_select_db('womensgroup');
			$sql = "SELECT teamname FROM addteam";
			$result = mysql_query($sql);
			echo "<select name='teamname'>";
			while ($row = mysql_fetch_array($result))
			{
				//echo "<option> </option>";
				echo "<option value='" . $row['teamname'] . "'>" . $row['teamname'] . "</option>";
			}
			echo "</select>";
		?>              
                  <input type="submit" name="Submit" value="Submit">
              </div></td>
            </tr>
            <tr>
              <td><table width="1418" height="67" border="1">
                <tr>
                  <td class="style18"><span class="style22">Teaml ID </span></td>
                  <td class="style18"><span class="style22">Team Name </span></td>
                  <td class="style18"><span class="style22">Team Type </span></td>
                  <td class="style18"><span class="style22">Total Members </span></td>
                  <td class="style18"><span class="style22">Amount Limit </span></td>
                  <td class="style18"><span class="style22">Description </span></td>
                  <td class="style18"><span class="style22">Individual Limit </span></td>
                  <td class="style18"><span class="style22">Time Duration </span></td>
                </tr>
                <tr>
				 <?php
					$rowsPerPage =7;
		    		require_once("mysql.php");
					$sql = "SELECT * FROM addteam  where teamname='".$_POST['teamname']."'";
					
					$result = mysql_query($sql);	
					$row = mysql_fetch_array($result);
					$num=mysql_num_rows($result);
					$i=0; 
					while($i < $num) 
					{
								$a1=mysql_result($result,$i,"teamid");
								$a2=mysql_result($result,$i,"teamname");
								$a3=mysql_result($result,$i,"teamtype");
								$a4=mysql_result($result,$i,"totalmembers");	
								$a5=mysql_result($result,$i,"amountlimit");
								$a6=mysql_result($result,$i,"description");
							    $a7=mysql_result($result,$i,"indivuduallimit");
								$a8=mysql_result($result,$i,"timeduration");
					
								
								
								
								
												
			?>
                 
                  <td class="style18"><?php echo $a1; ?></td>
                  <td class="style18"><?php echo $a2; ?></td>
                  <td class="style18"><?php echo $a3; ?></td>
                  <td class="style18"><?php echo $a4; ?></td>
                  <td class="style18"><?php echo $a5; ?></td>
                  <td class="style18"><?php echo $a6; ?></td>
                  <td class="style18"><?php echo $a7; ?></td>
                  <td class="style18"><?php echo $a8; ?></td>
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
</form>
  </body>
</html>