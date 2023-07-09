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
foreach($dbh->query('SELECT MAX(memberid) FROM addmember') as $row)
		{
			$a1=$row['MAX(memberid)']+1;
		}
		
		$proof=$_FILES['file']['name'];
		$username=$_SESSION['username'];
		
if(isset($_REQUEST['Submit']))
{

	
		
   $sql="INSERT INTO addmember VALUES ('$_POST[textfield]','$_POST[textfield2]','$_POST[select]','$_POST[textfield3]','$_POST[textfield4]','$_POST[textfield5]','$_POST[textfield6]','$_POST[textfield7]','$_POST[teamname]','$_POST[employeename]','$_POST[loanname]','$_POST[textfield8]','$_POST[textfield9]','$_POST[textfield10]','$_POST[textfield11]','$_POST[textfield12]','$proof')"; 
echo $sql;
	
	if ($conn->query($sql) === TRUE)
			{
			
			move_uploaded_file($_FILES['file']['tmp_name'],"proof/$proof");
			  
		//	echo "success"; 
echo '<script>alert("New Member Details Saved Successfully!");</script>';
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
.style15 {font-family: "Times New Roman", Times, serif; font-size: 18px; font-weight: bold; color: #0000FF; }
.style16 {font-family: "Times New Roman", Times, serif}
.style2 {font-family: "Times New Roman", Times, serif;
	font-size: 18px;
}
-->
  </style>
  </head>

  <body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
                <a class="nav-link" href="EmployeeHome.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AddTeam.php">New Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AddMeetings.php">Meetings</a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="AddPayment.php">Payment</a>
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
          <h2 align="left">Welcome:<?php echo $_SESSION['username'];?></h2>
          <table width="829" height="141" border="1">
            <tr>
              <td colspan="2" class="style15"><div align="center">Add New Member Details </div></td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td width="239" class="style15">Member ID </td>
              <td width="257"><input name="textfield" type="text" id="textfield" value=" <?php echo $a1; ?>"></td>
              <td width="194"><span class="style15">Team Name </span></td>
              <td width="399"><?php 
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
		?>              </td>
            </tr>
            <tr>
              <td class="style15">Member Name </td>
              <td><input name="textfield2" type="text" id="textfield2"></td>
              <td width="194"><span class="style15">Employee Name </span></td>
              <td width="399"><?php 
			mysql_connect('localhost', 'root', '');
			mysql_select_db('womensgroup');
			$sql = "SELECT employeename FROM addemployee";
			$result = mysql_query($sql);
			echo "<select name='employeename'>";
			while ($row = mysql_fetch_array($result))
			{
				//echo "<option> </option>";
				echo "<option value='" . $row['employeename'] . "'>" . $row['employeename'] . "</option>";
			}
			echo "</select>";
		?>              </td>
            </tr>
            <tr>
              <td class="style15">Gender </td>
              <td><div align="left">
                  <select name="select">
                    <option value="Select">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                  </select>
              </div></td>
              <td width="194"><span class="style15">Loan Amount  </span></td>
              <td width="399"><input type="text" name="textfield8"></td>
            </tr>
            <tr>
              <td class="style15">Contact Number </td>
              <td><input name="textfield3" type="text" id="textfield3"></td>
              <td width="194"><span class="style15">Total Months </span></td>
              <td width="399"><input type="text" name="textfield9"></td>
            </tr>
            <tr>
              <td class="style15">Email ID </td>
              <td><input name="textfield4" type="text" id="textfield4"></td>
              <td width="194"><span class="style15">Due Amount  </span></td>
              <td width="399"><input type="text" name="textfield10"></td>
            </tr>
            <tr>
              <td class="style15">Address</td>
              <td><textarea name="textfield5" id="textfield5"></textarea></td>
              <td width="194"><span class="style15">Due Date </span></td>
              <td width="399"><input type="text" name="textfield11"></td>
            </tr>
            <tr>
              <td class="style15">Aadhar Number </td>
              <td><input name="textfield6" type="text" id="textfield6"></td>
              <td width="194"><span class="style15">Proof Details </span></td>
              <td width="399"><textarea name="textfield12"></textarea></td>
            </tr>
            <tr>
              <td class="style15">Nominee Name </td>
              <td><input name="textfield7" type="text" id="textfield7" value=""></td>
              <td width="194"><span class="style15">Proof Image </span></td>
              <td width="399"><input type="file" name="file"></td>
            </tr>
            <tr>
              <td><div align="center">
                  <input type="submit" name="Submit" value="Add Member">
              </div></td>
              <td><div align="center">
                  <input type="submit" name="Submit2" value="Cancel">
              </div></td>
              <td><span class="style15">Loan Name </span></td>
              <td><?php 
			mysql_connect('localhost', 'root', '');
			mysql_select_db('womensgroup');
			$sql = "SELECT loanname FROM addteam";
			$result = mysql_query($sql);
			echo "<select name='loanname'>";
			while ($row = mysql_fetch_array($result))
			{
				//echo "<option> </option>";
				echo "<option value='" . $row['loanname'] . "'>" . $row['loanname'] . "</option>";
			}
			echo "</select>";
		?></td>
            </tr>
            <tr>
              <td colspan="4"><table width="1101" border="1">
                  <tr>
                    <td><div align="center"><span class="style2">View Team Details </span></div></td>
                  </tr>
                  <tr>
                    <td><table width="1098" height="67" border="1">
                        <tr>
                          <td><span class="style16">Member ID </span></td>
                          <td><span class="style16">Member Name </span></td>
                          <td><span class="style16">Aadhar Number  </span></td>
                          <td><span class="style16">Nominee Name </span></td>
                          <td><span class="style16">Team Name  </span></td>
                          <td><span class="style16">Loan Amount  </span></td>
                          <td><span class="style16">Due Amount </span></td>
                          <td><span class="style16">Due Date </span></td>
                        </tr>
                        <tr>
                          <?php
					$rowsPerPage =7;
		    		require_once("mysql.php");
		$sql = "SELECT * FROM addmember  ";
					
					$result = mysql_query($sql);	
					$row = mysql_fetch_array($result);
					$num=mysql_num_rows($result);
					$i=0; 
					while($i < $num) 
					{
								$a1=mysql_result($result,$i,"memberid");
								$a2=mysql_result($result,$i,"membername");
								$a3=mysql_result($result,$i,"aadharnumber");
								$a4=mysql_result($result,$i,"nomineename");	
								$a5=mysql_result($result,$i,"teamname");
								$a6=mysql_result($result,$i,"loanamount");
							    $a7=mysql_result($result,$i,"dueamount");
								$a8=mysql_result($result,$i,"duedate");
								
								
								
								
								
									
								
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