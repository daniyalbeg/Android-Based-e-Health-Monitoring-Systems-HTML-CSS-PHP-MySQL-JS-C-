<html>
	<head>
	<link href="css/style2.css" rel="stylesheet" type="text/css"  media="all" />
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/highcharts-more.js"></script>
<script src="js/exporting.js"></script>
	<style type='text/css'>

body 
{
    background-image: url("images/ee.jpg");
	
	border:3px solid #2657a0;
    padding:15px;

    margin:50px auto 200px auto;
    width:500px;
}
table
{
    margin:0px auto;
    width:100%;
    height:40px;
    background-color:#afcfdd;
    float:right;
    padding:0.5px;
    border:2px solid green;
}
input[type=submit] 
{
    width:auto;
    margin:5px 0 0 3px;
    padding:3px 3px ;
    color:white;
    background-color:#589d39;
    outline:none;
    border:1px solid #006655;
    font-weight:bold;
}
 #name, #password, #email
 {
    width: 200px;
    margin-bottom: 10px;
    background: none repeat scroll 0% 0% #FFFFFF;
    border: 1px solid #91B57C;
    height: 20px;
    color: #000000;
    border-radius: 5px;
    box-shadow:  2px 3px 4px ;
}
h1
{
color: navy blue;
width:480px; 
opacity: 0.6;
filter: alpha(opacity=40);
background:url(images/form_input.png) center left no-repeat; 
margin-left:8px;
border:2px;
height:42px;
float:left;
}
</style>
		<title>Health</title>
	</head>
<body>
<form method='post' action='health_data.php'>
	<table width = '400' border'5' align='center'>
	<tbody>
	<tr>
		<center><td colspan='5'><center><img src="images/patient.png" style="width:150px;height:150px"><h1>Health Test Data</h1></td></center>
	</tr>
	<tr>
		<td>Patient's ID:</td>
		<td><input type='text' name='id' placeholder="ID" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Doctor's ID:</td>
		<td><input type='text' name='did' placeholder="ID" maxlength="50" size="30"/></td>
	</tr>
<tr>
		<td>ECG:</td>
		<td><input type='text' name='ecg' placeholder="ecg" maxlength="50" size="30"/></td>
	</tr>
<tr>
		<td>Respiration:</td>
		<td><input type='text' name='res' placeholder="respiration" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Diabetes:</td>
		<td><input type='text' name='diabetes' placeholder="diabetes" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Temperature:</td>
		<td><input type='text' name='temp' placeholder="temperature" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>BloodPressure:</td>
		<td><input type='text' name='bp' placeholder="bloodpressure" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>SPO2:</td>
		<td><input type='text' name='spo' placeholder="spo2" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>EMG:</td>
		<td><input type='text' name='emg' placeholder="emg" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>GalvanicSkin:</td>
		<td><input type='text' name='gs' placeholder="galvanic skin" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td><input type='submit' name='submit' value='Send to Test'/></td>
	</tr>
	</table>
	</tbody>
</form>
</body>	
</html>
<?php
@mysql_connect("localhost","root","");
@mysql_select_db("patient_record");
	if(isset($_POST['submit']))
{
	$patient_id = $_POST['id'];
	$doctor_id = $_POST['did'];
	$ECG = $_POST['ecg'];
	$Respiration = $_POST['res'];
	$Temperature = $_POST['temp'];
	$Diabetes = $_POST['diabetes'];
		
	$SPO2 = $_POST['spo'];
	$BloodPressure = $_POST['bp'];
	$EMG = $_POST['emg'];
	$GalvanicSkin = $_POST['gs'];
	

	
	$check_Id = "select * from health_data where patient_id='$patient_id'";
	$run = mysql_query($check_Id);
	if(@mysql_num_rows($run)>0){
	echo "<script>alert('ID: $patient_id is already exist!')</script>";
	exit();
	}
	
	$query = "insert into health_data (patient_id,doctor_id,ECG,Respiration,Diabetes,Temperature,EMG,BloodPressure,SPO2,GalvanicSkin) values ('$patient_id','$doctor_id','$ECG','$Respiration','$Diabetes','$Temperature','$EMG','$BloodPressure','$SPO2','$GalvanicSkin')";
	if(mysql_query($query)){
	
	
	echo "<script>window.open('about.php','_self')</script>";
	}
}	
?>
