<?php
@mysql_connect("localhost:3306","danyal","danyal123");
@mysql_select_db("doctors_record");
$delete_id = $_GET['del'];

$query = "delete from doctor where doctor_id='$delete_id'";

if(mysql_query($query))
{
echo 
"<script>window.open('docnews.php?deleted=user deleted','_self')</script>";
}
?>