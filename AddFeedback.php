<?php
session_start(); 
		$servername = "localhost";
		$Username = "root";
		$password = "";
		$dbname = "womensgroup";
		$nameErr="";
		// Create connection
		$conn = new mysqli($servername, $Username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$hostname="localhost";
$username="root";
$password=""; 
$db = "womensgroup";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

foreach($dbh->query('SELECT MAX(feedbackid) FROM addfeedback') as $row)
		{
			$a1=$row['MAX(feedbackid)']+1;
		}
		
	$date=date('d-m-Y');	

if(isset($_REQUEST['Submit']))
{

		
   $sql="INSERT INTO addfeedback VALUES ('$_POST[textfield]','$_POST[textfield2]','$_POST[memberid]','$_POST[textfield3]','$_POST[textfield4]','$_POST[textfield5]')"; 
echo $sql;
	
	if ($conn->query($sql) === TRUE)
			{
			
			  
		//	echo "success"; 
echo '<script>alert("Feedback Details Saved Successfully!");</script>';
//$$URL="Register.php";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
}
else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
}

if(isset($_REQUEST['Submit2']))
{
$_POST['username']="";
$_POST['password']="";
}

if(isset($_REQUEST['Submit3']))
{
require_once("mysql.php");
$sel ="select * from addmember where memberid='".$_POST['memberid']."' "; 
$result = mysql_query($sel);	
$row = mysql_fetch_array($result);
	$num=mysql_num_rows($result);
	$i=0; 
	while($i < $num) 
	{
		$a2=mysql_result($result,$i,"memberid");
	if(	$a2==$_POST['memberid'])
		{
	
		
		$a3=mysql_result($result,$i,"membername");
		$a4=mysql_result($result,$i,"teamname");
		
		
			
		}
		$i++;
	}
	
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
.style15 {font-family: "Times New Roman", Times, serif; font-size: 18px; font-weight: bold; color: #0000FF; }
.style16 {font-family: "Times New Roman", Times, serif}
.style2 {font-family: "Times New Roman", Times, serif;
	font-size: 18px;
}
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
                <a class="nav-link" href="UserHome.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ViewMeeting.php">View Meeting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ViewPayment.php">View Payment</a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="AddFeedback.php">Feedback</a>
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
                  <h6>we are here to support you</h6>
                   <h4>Self Help Groups<br>&amp; Activities</h4>
                  <p>The members of the group agree to use this common fund and such other funds that they may receive as a group through a common management. Please contact The group formation will keep in view the following broad guidelines.</p>
                  <a href="Services.php" class="filled-button">our services</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>we have a solid background</h6>
               <h4>Self Help Groups<br>&amp; Activities</h4>
                  <p>Generally a self-help group may consist of 10 to 20 persons. However, in difficult areas like deserts, hills and areas with scattered and sparse population and in case of minor irrigation and disabled persons, this number may be from 5-20.</p>
                  <a href="about.html" class="filled-button">learn more</a>
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
          <div class="col-md-20">
          <h2 align="left">Welcome:<?php echo $_SESSION['username'];?></h2>
          <table width="829" height="141" border="1">
            <tr>
              <td colspan="2" class="style15"><div align="center">Add Meeting Details </div></td>
              <td width="388" rowspan="9"><img src="assets/images/1.jpg" alt="admin" width="290" height="174"></td>
            </tr>
            <tr>
              <td width="221" class="style15">Feedback ID </td>
              <td width="198"><input name="textfield" type="text" id="textfield" value=" <?php echo $a1; ?>"></td>
            </tr>
            <tr>
              <td class="style15">Feedback Date </td>
              <td><input name="textfield2" type="text" id="textfield2"value=" <?php echo $date; ?>"></td>
            </tr>
            <tr>
              <td class="style15">Member ID </td>
              <td><div align="left">
                  <?php 
			mysql_connect('localhost', 'root', '');
			mysql_select_db('womensgroup');
			$sql = "SELECT memberid FROM addmember";
			$result = mysql_query($sql);
			echo "<select name='memberid'>";
			while ($row = mysql_fetch_array($result))
			{
				//echo "<option> </option>";
				echo "<option value='" . $row['memberid'] . "'>" . $row['memberid'] . "</option>";
			}
			echo "</select>";
		?>
                  <input type="submit" name="Submit3" value="View">
              </div></td>
            </tr>
            <tr>
              <td class="style15">Member Name </td>
              <td><input name="textfield3" type="text" id="textfield3" value=" <?php echo $a3; ?>"></td>
            </tr>
            <tr>
              <td class="style15">Team Name </td>
              <td><input name="textfield4" type="text" id="textfield4" value=" <?php echo $a4; ?>"></td>
            </tr>
            <tr>
              <td class="style15">Feedback Description </td>
              <td><textarea name="textfield5" id="textfield5"></textarea></td>
            </tr>
         
            <tr>
              <td><div align="center">
                  <input type="submit" name="Submit" value="Add Feedback">
              </div></td>
              <td><div align="center">
                  <input type="submit" name="Submit2" value="Cancel">
              </div></td>
            
            </tr>
          </table>
          <p align="left">&nbsp;</p>
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