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
	height:570px;
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
		<title>Patient's Record</title>
	</head>
<body>
<form method='post' action='precord.php'>
	<table width = '400' border'5' align='center'>
	<tbody>
	<tr>
		<center><td colspan='5'><center><img src="images/patient.png" style="width:150px;height:150px"><h1>Patient's Record</h1></td></center>
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
		<td>Password:</td>
		<td><input type='password' name='pass' placeholder="pass" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type='text' name='email' placeholder="email ID" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Patient's Address:</td>
		<td><input type='text' name='add' placeholder="address" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Phone Number:</td>
		<td><input type='text' name='phone' placeholder="phonenumber" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Age:</td>
		<td><input type='text' name='age' placeholder="age" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Blood Group:</td>
		<td><input type='text' name='blood' placeholder="blood group" maxlength="50" size="30"/></td>
	</tr>	
	</tr>
		<tr>
		<td>City:</td>
		<td><input type='text' name='city' placeholder="city" maxlength="50" size="30"/></td>
	</tr>
		<tr>
		<td>Country:</td>
		<td><input type='text' name='country' placeholder="country" maxlength="50" size="30"/></td>
	</tr>
		<tr>

    <td><label for="sex-select">I am:</label></td>
    <td>
    <div class="input-container">
    <select name="sex" id="sex">
    <option value="0">Select Sex:</option>
    <option value="female">Female</option>
    <option value="male">Male</option>
    </select>

    </div>
    </td>
</tr>

	
	<tr>

	<td><label for="d-select">Date Of Birth </label></td>
    <td>
    <div class="input-container">
    <select name="date" id="d-select">
	  <option value="0">Day</option>
    <option value="1">1</option>
    <option value="1">2</option>
	      <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		   <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option> 
		  <option value="11">11</option>
		  <option value="12">12</option>
		  <option value="13">13</option>
		  <option value="14">14</option> 
		  <option value="15">15</option>
		  <option value="16">16</option>
		  <option value="17">17</option>
		  <option value="18">18</option> 
		  <option value="19">19</option>
		  <option value="20">20</option>
		  <option value="21">21</option>
		  <option value="22">22</option> 
		  <option value="23">23</option>
		  <option value="24">24</option>
		  <option value="25">25</option>
		  <option value="26">26</option> 
		  <option value="27">27</option>
		  <option value="28">28</option>
		  <option value="29">29</option>
		  <option value="30">30</option> 
		  <option value="31">31</option>  
		  
    </select>
		
	<label for="m-select"></label>
    <select name="month" id="m-select">
<option value="M">Month</option>
    <option value="Jan">Jan</option>
    <option value="Feb">Feb</option>
	      <option value="Mar">Mar</option>
		  <option value="Apr">Apr</option>
		  <option value="May">May</option>
		  <option value="Jun">Jun</option>
		   <option value="Jul">Jul</option>
		  <option value="Aug">Aug</option>
		  <option value="Sept">Sep</option>
		  <option value="Oct">Oct</option> 
		  <option value="Nov">Nov</option>
		   <option value="Dec">Dec</option>
		   
		
    </select>

		<label for="yr-select"></label>
    <select name="year" id="yr-select">
	  <option value="0">Year</option>
    <option value="2015">2015</option>
	      <option value="2014">2014</option>
		  <option value="2013">2013</option>
		  <option value="2012">2012</option>
		  <option value="2011">2011</option>
		  <option value="2010">2010</option>
		  <option value="2009">2009</option>
		    <option value="2007">2007</option>
		  <option value="1992">1992</option>
		  <option value="1991">1991</option>
		  
	 </div>
    </select>
	
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
@mysql_select_db("patient_record");
	if(isset($_POST['submit']))
{
	$patient_Id = $_POST['id'];
	$patient_name = $_POST['name'];
	$patient_pass = $_POST['pass'];
	$patient_email = $_POST['email'];
	$patient_cell = $_POST['phone'];
	$patient_add = $_POST['add'];
	$patient_bg = $_POST['blood'];
	$patient_age = $_POST['age'];
	$patient_city = $_POST['city'];
	$patient_country = $_POST['country'];
	$patient_date = $_POST['date'];
	$patient_month = $_POST['month'];
	$patient_year = $_POST['year'];
	$patient_sex = $_POST['sex'];
	
	$check_Id = "select * from patient where patient_Id='$patient_Id'";
	$run = mysql_query($check_Id);
	if(@mysql_num_rows($run)>0){
	echo "<script>alert('ID: $patient_Id is already exist!')</script>";
	exit();
	}
	
	$query = "insert into patient (patient_Id,patient_name,patient_pass,patient_email,patient_cell,patient_age,patient_bg,patient_add,patient_city,patient_country,patient_date,patient_month,patient_year,patient_sex) values ('$patient_Id','$patient_name','$patient_pass','$patient_email','$patient_cell','$patient_age','$patient_bg','$patient_add','$patient_city','$patient_country','$patient_date','$patient_month','$patient_year','$patient_sex')";
	if(mysql_query($query)){
	
	
	echo "<script>window.open('index.php','_self')</script>";
	}
}	
?>