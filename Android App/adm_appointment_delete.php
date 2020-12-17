<?php

@mysql_connect("localhost:3306","danyal","danyal123");
@mysql_select_db("patient_record");
$delete_id = $_GET['del'];

$query = "delete from appointments where patient_Id='$delete_id'";

if(mysql_query($query))
{
echo 
"<script>window.open('adm_appointment_fetch.php?deleted=user deleted','_self')</script>";
}
?>