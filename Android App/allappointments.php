<?php


$conn = @mysql_connect("localhost:3306","danyal","danyal123");
$selectB = @mysql_select_db("patient_record", $conn);

$return = array();

$sql = @mysql_query("select * from appointments");

if(@mysql_num_rows($sql) > 0){
	$counter = 0;
	while($row = @mysql_fetch_assoc($sql)){
		$return[$counter]['PatientName']      = $row['patient_name'];                    
		$return[$counter]['PatientID']         = $row['patient_id'];            
		$return[$counter]['Cell']             = $row['patient_cell'];        
		$return[$counter]['Age']             = $row['patient_age'];                
		$return[$counter]['ConsultantID']             = $row['consultant_id'];                
		$return[$counter]['ConsultantName']           = $row['consultant_name'];            
	           
		$counter++;
	}
}


echo json_encode($return);