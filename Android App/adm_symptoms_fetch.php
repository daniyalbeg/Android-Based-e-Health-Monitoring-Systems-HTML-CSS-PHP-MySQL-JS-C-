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
								<li><a href="services.php">Doctor's Data</a></li>
								<li><a href="news.php">Patient's Data</a></li>
								
								<li><a href="contact.php">Contact US</a></li>
								<li><a href="others.php">Others</a></li>
								<div class="clear"> </div>
							</ul>
						</div>
					</div>
			</div>
			
	  <link href="sitee.css" rel="stylesheet">


  <center><h3>Patient's Symptoms</h3></center>
  <center>
<table width='800' align='center' border='5'>
<tr bgcolor='yellow'>
	<th>Patient's_ID</th>
	<th>Doctor's_ID</th>
	<th>Symptom1</th>
	<th>Symptom2</th>
		<th>Symptom3</th>
			<th>Symptom4</th>
     <th>Delete</th>
   </center>
	
	</tr>
	<tr>
<?php
@mysql_connect("localhost:3306","danyal","danyal123");
@mysql_select_db("patient_record");

	$query = "select * from symptoms";
	
	$run = mysql_query($query);
	
while ($row=@mysql_fetch_array($run))
{

$patient_id = $row[1];
$doctor_id = $row[2];
$symptom1= $row[4];
$symptom2 = $row[3];
$symptom3 = $row[4];
$symptom4 = $row[5];




	
	
?>	
	<td><?php echo $patient_id; ?></td>
	<td><?php echo $doctor_id; ?></td>
	<td><?php echo $symptom1; ?></td>
	<td><?php echo $symptom2; ?></td>
	<td><?php echo $symptom3; ?></td>
	<td><?php echo $symptom4; ?></td>
	

		<td><a href='adm_symptoms_delete.php?del=<?php echo $patient_id;?>'> Delete</a></td>
	
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

