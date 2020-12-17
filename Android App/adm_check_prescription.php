<!--
Created By Daniyal Beg and Sheema Saleem
-->

<html>
	<head>
	  <title>Patient's Record</title>
	
  <link href="css1/site.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!---start-wrap---->
		
			<!---start-header---->
			<div class="header">
					<div class="top-header">
						<div class="wrap">
						<div class="top-header-left">
							<p>Daniyal Beg (#0343-3014-305)</p>
							<p>Sheema Saleem (#0323-3333-787)</p>
							<p>Sir Hasan Adil (#0323-2555-787)</p>
						</div>
						<div class="right-left">
							<ul>
							
								<li class="sign"><a href="drecord.php">Doctor's Sign up</a></li>
							
								<li class="sign"><a href="precord.php">Patient's Sign up </a></li>&nbsp;&nbsp;&nbsp;
								<li class=""><img src="images/iqra.png" width="150px" height="30px">&nbsp;&nbsp;&nbsp;<img src="images/ict.gif" width="50px" height="30px" ></li>
							</ul>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
					<div class="main-header">
						<div class="wrap">
							<div class="logo">
								<a href="index.php"><img src="images/logos.gif" title="logo"  width= "340px" height = "130px"/></a>
							</div>
							<div class="social-links">
								<ul>
									<li><a href="https://www.facebook.com/"><img src="images/facebook.png" title="facebook" /></a></li>
									<li><a href="http://www.skype.com/en/"><img src="images/sk.png" title="skype"  width= "60px" height = "50px"/></a></li>
									<li><a href="http://www.viber.com/en/"><img src="images/c.png" title="Rss"  width= "60px" height = "50px"/></a></li>
									<div class="clear"> </div>
								</ul>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
					<div class="clear"> </div>
					<div class="top-nav">
						<div class="wrap">
						<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="login.php">Doctor's Area</a></li>
								<li><a href="plogin.php">Patient's Area</a></li>
									<li><a href="admin_login.php">Admin Area</a></li>
								<li><a href="contact.php">Contact US</a></li>
								<li><a href="others.php">Others</a></li>
								<div class="clear"> </div>
							</ul>
						</div>
					</div>
			</div>
			
	  <link href="sitee.css" rel="stylesheet">


  <center><h3>Patient's Prescription</h3></center>
<center>
<table width='800' align='center' border='5'>
<tr bgcolor='yellow'>
	<th>Patient_ID</th>
	<th>Doctor_ID</th>
	<th>Diagnose</th>
	<th>Age</th>
	<th>Medicine1</th>
	<th>Medicine2</th>
	<th>Medicine3</th>
		<th>Syrup1</th>
		<th>Syrup2</th>
		<th>Syrup3</th>
		<th>Dosage</th>
	<th>Period</th>

	<th>Day</th>
		<th>Month</th>
		<th>Year</th>
		<th>Quantity</th>
		<th>Test</th>
			<th>Comments</th>
      <th>Delete</th>
	<center>
	</tr>
	<tr>
<?php
@mysql_connect("localhost:3306","danyal","danyal123");
@mysql_select_db("doctors_record");

	$query = "select * from prescription";
	
	$run = mysql_query($query);
	
while ($row=@mysql_fetch_array($run))
{

$patient_id = $row[1];
$doctor_id = $row[2];
$patient_diagnose = $row[0];
$patient_age = $row[3];
$med1 = $row[4];
$med2 = $row[5];
$med3 = $row[6];
$syrup1 = $row[7];
$syrup2 = $row[8];
$syrup3 = $row[9];
$dosage= $row[13];
$usage_period = $row[14];
$quantity = $row[15];
$date = $row[10];
$month = $row[11];
$year = $row[12];
$test= $row[16];
$comments = $row[17];



	
	
?>	
	<td><?php echo $patient_id; ?></td>
	<td><?php echo $doctor_id; ?></td>
	<td><?php echo $patient_diagnose; ?></td>
		<td><?php echo $patient_age; ?></td>
	<td><?php echo $med1; ?></td>
	<td><?php echo $med2; ?></td>
	<td><?php echo $med3; ?></td>
	<td><?php echo $syrup1; ?></td>
	<td><?php echo $syrup2; ?></td>
	<td><?php echo $syrup3; ?></td>
	<td><?php echo $dosage; ?></td>
	<td><?php echo $usage_period; ?></td>

	<td><?php echo $date; ?></td>
<td><?php echo $month; ?></td>
<td><?php echo $year; ?></td>
<td><?php echo $quantity; ?></td>

<td><?php echo $test; ?></td>
<td><?php echo $comments; ?></td>
	<td><a href='adm_check_prescription_delete.php?del=<?php echo $patient_id;?>'> Delete</a></td>
	</tr>
<?php 
}
?>
</table>

	<h1 align='right'><a href='pat_record.php'>Back</a></h1>						
				<!---start-footer---->
		
				<!---start-copy-right----->
				<div class="copy-tight">
				 <img src="images/footer.png" width="132" height="34" align="left"/>
				 		 <img src="images/iqra.png" width="132" height="34" align="right"/>
					<p>&copy; 2015 www.eHealth.com All Rights Reserved &nbsp;&nbsp;&nbsp;&nbsp; Powered by Iqra University,Karachi<p>
				</div>
				<!---End-copy-right----->
			</div>
		</div>
		<!---End-footer---->
	</body>
</html>

