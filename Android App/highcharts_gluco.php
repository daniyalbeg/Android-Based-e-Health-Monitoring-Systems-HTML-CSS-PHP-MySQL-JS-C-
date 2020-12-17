<!--
Created By Daniyal Beg and Sheema Saleem
-->

<html>
	<head>
		<title>Diabetes</title>
		
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />

		 
	</head>
	<body>
	
	<div class="main-header">
						<div class="wrap">
							<div class="logo">
								<a href="index.php"><img src="images/logos.gif" title="logo"  width= "340px" height = "130px"/></a>
							</div>
	
	

  <center>
  <link href="sitee.css" rel="stylesheet" type="text/css"  media="all" />
<table width='800' align='center' border='5'>
<tr bgcolor='yellow'>
	<th>Patient's_ID</th>
	<th>Doctor's_ID</th>
		<th>Glucose (mmol/L)</th>
	<th>Mean Blood (mg/dL)</th>

		<th>Fasting</th>
			<th>Just Ate</th>
			<th>3 hrs after eating</th>
			<center>
			</table>
 
	
	</tr>
	<tr>	
<?php
@mysql_connect("localhost","root","");
@mysql_select_db("patient_record");

	$query = "select * from glucose";
	
	$run = mysql_query($query);
	
while ($row=@mysql_fetch_array($run))
{

$patient_id = $row[1];
$doctor_id = $row[2];
$glu= $row[3];
$mean = $row[4];
$just = $row[5];
$hrs = $row[6];
	
	
?>	
	<td><?php echo $patient_id; ?></td>
	<td><?php echo $doctor_id; ?></td>
	<td><?php echo $glu; ?></td>
	<td><?php echo $mean; ?></td>
	<td><?php echo $just; ?></td>
	<td><?php echo $hrs; ?></td>
	
	
	</tr>
<?php 
}
?>
</table>

	<h1 align='right'><a href='pat_record.php'>Back</a></h1>		
	

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
