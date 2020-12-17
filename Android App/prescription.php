<html>
	<head>
	
	<style type='text/css'>

body 
{
    background-image: url("images/ee.jpg");
	
	border:3px solid #2657a0;
    padding:15px;

    margin:50px auto 200px auto;
    width:700px;
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
		<title>Prescription</title>
	</head>
<body>
<form method='post' action='prescription.php'>
	<table width = '400' border'5' align='center'>
	<tbody>
	<tr>
		<center><td colspan='5'><center><img src="images/ss.png" style="width:150px;height:150px"><h1>Prescription</h1></td></center>
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
		<td>Patient Diagnose:</td>
		<td><input type='text' name='diagnose' placeholder="ID" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Medicine1:</td>
		<td><input type='text' name='med1' placeholder="name" maxlength="50" size="30"/></td>
		<td>Syrup1:</td>
		<td><input type='text' name='syrup1' placeholder="name" maxlength="50" size="30"/></td>
	</tr>
	
	<tr>
		<td>Medicine2:</td>
		<td><input type='text' name='med2' placeholder="email ID" maxlength="50" size="30"/></td>
		<td>Syrup2:</td>
		<td><input type='text' name='syrup2' placeholder="name" maxlength="50" size="30"/></td>
	</tr>
	<tr>
		<td>Medicine3:</td>
		<td><input type='text' name='med3' placeholder="address" maxlength="50" size="30"/></td>
		<td>Syrup3:</td>
		<td><input type='text' name='syrup3' placeholder="name" maxlength="50" size="30"/></td>
	</tr>
	<tr>
	<tr>

	<td><label for="d-select">Date Of Birth </label></td>
    <td>
    <div class="input-container">
    <select name="date" id="date">
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
    <select name="month" id="month">
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
		
	 </div>
    </select>
	<tr>
		<td>Age:</td>
		<td><input type='text' name='age' maxlength="50" size="3"/></td>
		
		</tr>
		
	<td><label for="do-select">Dosage:</label></td>
    <td>
    <div class="input-container">
    <select name="dosage" id="dosage">
    <option value="1+1+1">1+1+1</option>
    <option value="1+0+1">1+0+1</option>
	      <option value="1+1+0">1+1+0</option>
		    <option value="1+0+0">1+0+0</option>
		      <option value="1+0+1">1+0+1</option>
			     <option value="0+0+1">0+0+1</option>
				    <option value="0+1+1">0+1+1</option>
		
		  
		   
    </select>
	
		<td>Usage Period:</td>
	
		<td><input type="checkbox" name="use"  value="Week" maxlength="50" size="10"checked>Week 

		<input type="checkbox" name="use"  value="10 days" maxlength="50" size="10">10 days
		
		<input type="checkbox" name="use"  value="15 days" maxlength="50" size="10">15 days
	<tr>
		<td>Quantity:</td>
		<td><input type='text' name='quantity' placeholder="ID" maxlength="50" size="20"/></td>
	
		<td>Test:</td>
		<td><input type='text' name='test' placeholder="ID" maxlength="50" size="30"/></td>
		</tr>
	</tr>
 
  <td><label for="comments">Comments:</label>
  <td><textarea  name="comments" maxlength="1000"  rows="7" cols="24"></textarea>


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
	$patient_diagnose = $_POST['diagnose'];
	$med1 = $_POST['med1'];
	$med2 = $_POST['med2'];
	$med3 = $_POST['med3'];
	$patient_id = $_POST['id'];
	$doctor_id = $_POST['did'];
	$syrup1 = $_POST['syrup1'];
	$syrup2 = $_POST['syrup2'];
	$syrup3 = $_POST['syrup3'];
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$dosage = $_POST['dosage'];
	$usage_period = $_POST['use'];
	$comments = $_POST['comments'];
	$test = $_POST['test'];
	$patient_age = $_POST['age'];

	$check_Id = "select * from prescription where patient_id='$patient_id'";
	$run = mysql_query($check_Id);
	if(@mysql_num_rows($run)>0){
	echo "<script>alert('ID: $patient_id is already exist!')</script>";
	exit();
	}
	
	
	$query = "insert into prescription (doctor_id,patient_id,patient_diagnose,med1,med2,med3,syrup1,syrup2,syrup3,date,month,year,usage_period,dosage,comments) values ('$doctor_id,'$patient_id','$patient_diagnose','$med1','$med2','$med3','$syrup1','$syrup2','$syrup3','$date','$month','$year','$usage_period','$dosage','$comments','$test','$patient_age')";
	if(mysql_query($query)){
	
	
	echo "<script>window.open('about.php','_self')</script>";
	}
}	
?>
	
	
	
	