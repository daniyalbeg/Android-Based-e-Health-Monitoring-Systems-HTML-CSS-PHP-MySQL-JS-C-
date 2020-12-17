<html>
	<head>
	<style type='text/css'>
body 
{
    background-image: url("images/ee.jpg");
		border:3px solid #2657a0;
    padding:15px;

    margin:80px auto 359px auto;
    width:400px;
	height:330px;
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
#name, #password
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
</style>
		<title>admin_page</title>
	</head>

<body>
<form method='post' action='admin_login.php'>
	<table width = '400' border'5' align='center'>
	<tr>
		<td colspan='5'align='center'><center><img src="images/adm.png" style="width:150px;height:150px"</center><h1>Admin's Login</h1></td>
	</tr>
	
	<tr>
		<td>Name:</td>
		<td><input type='text' placeholder="Name" name='admin_name'/></td>
	</tr>
	
	<tr>
		<td>Password:</td>
		<td><input type='password' placeholder="***************" name='admin_password'/></td>
	</tr>
	
	<tr>
		<td><input type='submit' name='admin_login' placeholder="abcd@yahoo.com" value='Login'/></td>
	</tr>
	</table>
</form>
</font>
</center>
</body>	
</html>
<?php
@mysql_connect("localhost:3306","danyal","danyal123");
@mysql_select_db("users_dbs");

if(isset($_POST['admin_login']))
{
$admin_name = $_POST['admin_name'];
$admin_password = $_POST['admin_password'];

$query = "select * from admin where admin_name='$admin_name' AND admin_password='$admin_password'";

$run = mysql_query($query);

if(@mysql_num_rows($run)>0)
 {
echo "<script>window.open('cnews.php','_self')</script>";
}
else
{
echo "<script>alert('Admin details are incorrect!')</script>";
}
}
?>