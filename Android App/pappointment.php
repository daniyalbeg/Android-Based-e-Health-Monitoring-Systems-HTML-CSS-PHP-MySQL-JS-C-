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
		<title>Make an Appointment</title>
	</head>
<body>
<form method='post' action='pappointment.php'>
	<table width = '400' border'5' align='center'>
	<tbody>
	<tr>
		<center><td colspan='5'><center><img src="images/patient.png" style="width:150px;height:150px"><h1>Make an Appointment</h1></td></center>
	</tr>
	<tr>
		<td>Patient's ID:</td>
		<td><input type='text' name='id' placeholder="ID" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Patient's Name:</td>
		<td><input type='text' name='name' placeholder="name" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Paient's Age:</td>
		<td><input type='text' name='age' placeholder="age" maxlength="50" size="30"/></td>
	</tr>
	
	
	<tr>
		<td>Patient's Cell:</td>
		<td><input type='text' name='cell' placeholder="cellnumber" maxlength="50" size="30"/></td>
	</tr>
	
	
	<tr>

    <td><label for="doctor_name">Doctor's Name:</label></td>
    <td>
    <div class="input-container">
    <select name="dname" id="dname">
    <option value="0">Select Doctor:</option>
    <option value="Dr.Sheema Saleem (Cardiologist)">Dr.Sheema Saleem (Cardiologist)</option>
    <option value="Dr.Daniyal Beg (Dermatologist)">Dr.Daniyal Beg (Dermatologist)</option>
	  <option value="Dr.Sidra Kanwal (Endocrynologist)">Dr.Sidra Kanwal (Endocrynologist)</option>
	    <option value="Dr.Hamza Masood (Psycologist)">Dr.Hamza Masood (Psycologist)</option>
		  <option value="Dr.Khairunnisa (Neurologist)">Dr.Khairunnisa (Neurologist)</option>
		    <option value="Dr.Ayan Hanif (Haematologist)">Dr.Ayan Hanif (Haematologist)</option>
    </select>

    </div>
    </td>
</tr>
	
	
	<tr>
		<td>Doctor's ID:</td>
		<td><input type='text' name='cid' placeholder="ID" maxlength="50" size="30"/></td>
	</tr>
		<tr>
		<td><input type='submit' name='submit' value='make appointment'/></td>
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
	$patient_name = $_POST['name'];
	$patient_age = $_POST['age'];
	$patient_cell = $_POST['cell'];
	$consultant_name = $_POST['dname'];
	$consultant_id = $_POST['cid'];
	
	$check_Id = "select * from appointments where patient_id='$patient_id'";
	$run = mysql_query($check_Id);
	if(@mysql_num_rows($run)>0){
	echo "<script>alert('ID: $patient_id is already exist!')</script>";
	exit();
	}
	
	$query = "insert into appointments (patient_id,patient_name,patient_cell,patient_age,consultant_name,consultant_id) values ('$patient_id','$patient_name','$patient_cell','$patient_age','$consultant_name','$consultant_id')";
	if(mysql_query($query)){
	
	
	echo "<script>window.open('news.php','_self')</script>";
	}
}	
?>