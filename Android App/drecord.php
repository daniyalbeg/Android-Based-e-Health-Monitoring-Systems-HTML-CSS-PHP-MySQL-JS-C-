<html>
	<head>
	
	<style type='text/css'>

body 
{
    background-image: url("images/ee.jpg");
	
	border:3px solid #2657a0;
    padding:15px;

    margin:33px auto 200px auto;
    width:500px;
	height:455px;
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
		<title>Doctor's Record</title>
	</head>
<body>
<form method='post' action='drecord.php'>
	<table width = '400' border'5' align='center'>
	<tbody>
	<tr>
		<center><td colspan='5'><center><img src="images/patient.png" style="width:150px;height:150px"><h1>Doctor's Record</h1></td></center>
	</tr>
	<tr>
		<td>Doctor's ID:</td>
		<td><input type='text' name='id' placeholder="ID" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Doctor's Name:</td>
		<td><input type='text' name='name' placeholder="name" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type='password' name='pass' placeholder="pass" maxlength="50" size="30"/></td>
	</tr>
	
	<tr>
		<td>Email:</td>
		<td><input type='text' name='email' placeholder="email ID" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Age:</td>
		<td><input type='text' name='age' placeholder="age" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Cell#:</td>
		<td><input type='text' name='cell' placeholder="cellnumber" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Specialization:</td>
		<td><input type='text' name='special' placeholder="specialization" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td><input type='submit' name='submit' value='Send Us'/></td>
	</tr>
	</table>
	</tbody>
</form>
</body>	
</html>
<?php
@mysql_connect("localhost:3306","danyal","danyal123");
@mysql_select_db("doctors_record");
	if(isset($_POST['submit']))
{
	$doctor_id = $_POST['id'];
	$doctor_name = $_POST['name'];
	$doctor_pass = $_POST['pass'];
	$doctor_age = $_POST['age'];
	$doctor_email = $_POST['email'];
	$doctor_cell = $_POST['cell'];
	$doctor_specialization = $_POST['special'];
	
	$check_Id = "select * from doctor where doctor_id='$doctor_id'";
	$run = @mysql_query($check_Id);
	if(@mysql_num_rows($run)>0){
	echo "<script>alert('ID: $doctor_id is already exist!')</script>";
	exit();
	}
	
	$query = "insert into doctor (doctor_id,doctor_name,doctor_pass,doctor_age,doctor_email,doctor_cell,doctor_specialization) values ('$doctor_id','$doctor_name','$doctor_pass','$doctor_age','$doctor_email','$doctor_cell','$doctor_specialization')";
	if(@mysql_query($query)){
	
	
	echo "<script>window.open('index.php','_self')</script>";
	}
}	
?>
	