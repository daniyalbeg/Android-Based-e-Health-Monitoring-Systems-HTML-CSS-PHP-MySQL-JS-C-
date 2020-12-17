<?php

@mysql_connect("localhost","root","");
@mysql_select_db("users_dbs");
$delete_id = $_GET['del'];

$query = "delete from users where id='$delete_id'";

if(mysql_query($query))
{
echo 
"<script>window.open('cnews.php?deleted=user deleted','_self')</script>";
}
?>