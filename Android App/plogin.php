<?php
session_start();

?>

<html>
	<head>
		<title>Users Login</title>
	</head>
<style type='text/css'>
body 
{
    background-image: url("images/ee.jpg");
	border:3px solid #2657a0;
    padding:15px;

   margin:60px auto 400px auto;
    width:400px;
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
h1
{
color: navy blue;
width:380px; 
opacity: 0.6;
filter: alpha(opacity=40);
background:url(images/form_input.png) center left no-repeat; 
margin-left:8px;
border:2px;
height:42px;
float:left;
}
</style>
<body>

<form method='post' action='plogin.php'>
	<table width = '400' border'5' align='center'>
	<tr>
		<td colspan='5'align='center'><center><img src="images/patient.png" style="width:150px;height:150px"><h1>Patient's Login</h1></td>
	</tr>
	
	<tr>
		<td>Username:</td>
		<td><input type='text' name='name' placeholder="Daniyal" maxlength="50" size="30"/></td>
	</tr>
	
	<tr>
		<td>Password:</td>
		<td><input type='password' name='pass'  placeholder="***************" maxlength="50" size="30"/></td>
	</tr>
	
	<tr>
		<td>Email:</td>
		<td><input type='text' name='email' placeholder="abcd@yahoo.com" maxlength="50" size="30"/></td>
	</tr>
	
	<tr>
		<td><input type='submit' name='login' value='Login'/></td>
	</tr>
	</table>
</form>
<center>
<font color='white' size='3.5' align 'center'><br>You are not registered yet! 
</font> <a href='precord.php'><br><br>Sign Up </br></br></a></font>
</center>
</body>	
</html>
<?php
@mysql_connect("localhost:3306","danyal","danyal123");
@mysql_select_db("patient_record");

if(isset($_POST['login']))
{
	$password = $_POST['pass'];
	$email = $_POST['email'];
	
	$check_user = "select * from patient where patient_pass='$password' AND patient_email='$email'";
	
	$run = mysql_query($check_user);
	
	if(@mysql_num_rows($run)>0){
	
	$_SESSION['email']=$email;
	
	echo 
	"<script>window.open('news.php','_self')</script>";
	}
	else{
	echo "<script>alert('Your Email and  password is incorrect!')</script>";
	}
}

?>