<?php


$conn = @mysql_connect("localhost:3306","danyal","danyal123");
$selectB = @mysql_select_db("patient_record", $conn);

$return = array();

$sql = @mysql_query("select * from symptoms");

if(@mysql_num_rows($sql) > 0){
	$counter = 0;
	while($row = @mysql_fetch_assoc($sql)){
		$return[$counter]['PatientID']  = $row['patient_id'];                    
		$return[$counter]['DoctorID']  = $row['doctor_id'];            
		$return[$counter]['symptom1']   = $row['symptom1'];        
		$return[$counter]['symptom2']   = $row['symptom2'];                
		$return[$counter]['symptom3']   = $row['symptom3'];                
		$return[$counter]['symptom4']   = $row['symptom4'];                    
		$counter++;
	}
}


echo json_encode($return);