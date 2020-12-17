<?php


$conn = @mysql_connect("localhost:3306","danyal","danyal123");
$selectB = @mysql_select_db("patient_record", $conn);

$return = array();

$sql = @mysql_query("select * from patient");

if(@mysql_num_rows($sql) > 0){
	$counter = 0;
	while($row = @mysql_fetch_assoc($sql)){
		$return[$counter]['Patient ID']      = $row['patient_Id'];                    
		$return[$counter]['Patient Name']    = $row['patient_name'];            
		               
	           
		$counter++;
	}
}


echo json_encode($return);