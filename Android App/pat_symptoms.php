<html>
	<head>
	
	<style type='text/css'>

body 
{
    background-image: url("images/ee.jpg");
	
	border:3px solid #2657a0;
    padding:15px;

    margin:50px auto 200px auto;
    width:500px;
	height:430px;
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
		<title>Symptoms</title>
	</head>
<body>
<form method='post' action='pat_symptoms.php'>
	<table width = '400' border'5' align='center'>
	<tbody>
	<tr>
		<center><td colspan='5'><center><img src="images/patient.png" style="width:150px;height:150px"><h1>Symptoms</h1></td></center>
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
		<td>Symptom1:</td>
		<td><input type='text' name='sym1' placeholder="symptom1" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Symptom2:</td>
		<td><input type='text' name='sym2' placeholder="symptom2" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Symptom3:</td>
		<td><input type='text' name='sym3' placeholder="symptom3" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Symptom4:</td>
		<td><input type='text' name='sym4' placeholder="symptom4" maxlength="50" size="30"/></td>
	</tr>
</tr>
		<tr>
		<td><input type='submit' name='submit' value='send symptoms'/></td>
	</tr>
	</table>
	</tbody>
</form>
</body>	
</html>
<?php
@mysql_connect("localhost:3306","danyal","danyal123");
@mysql_select_db("patient_record");
	if(isset($_POST['submit']))
{
	$patient_id = $_POST['id'];
	$doctor_id = $_POST['did'];
	$symptom1 = $_POST['sym1'];
	$symptom2 = $_POST['sym2'];
	$symptom3 = $_POST['sym3'];
	$symptom4 = $_POST['sym4'];
	
	$check_Id = "select * from symptoms where patient_id='$patient_id'";
	$run = mysql_query($check_Id);
	if(@mysql_num_rows($run)>0){
	echo "<script>alert('ID: $patient_id is already exist!')</script>";
	exit();
	}
	
	$query = "insert into symptoms (patient_id,doctor_id,symptom1,symptom2,symptom3,symptom4) values ('$patient_id','$doctor_id','$symptom1','$symptom2','$symptom3','$symptom4')";
	if(mysql_query($query)){
	
	
	echo "<script>window.open('about.php','_self')</script>";
	}
}	
?>