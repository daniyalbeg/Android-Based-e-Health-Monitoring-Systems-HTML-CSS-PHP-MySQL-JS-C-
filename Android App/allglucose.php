<?php


$conn = @mysql_connect("localhost:3306","danyal","danyal123");
$selectB = @mysql_select_db("patient_record", $conn);

$return = array();

$sql = @mysql_query("select * from glucose");

if(@mysql_num_rows($sql) > 0){
	$counter = 0;
	while($row = @mysql_fetch_assoc($sql)){
		$return[$counter]['Patient ID']      = $row['patient_id'];                    
		$return[$counter]['Doctor ID']         = $row['doctor_id'];            
		$return[$counter]['Glucose']             = $row['glu'];        
		$return[$counter]['Mean Blood']             = $row['mean'];                
		$return[$counter]['Fasting']             = $row['just'];                
		$return[$counter]['Random']           = $row['hrs'];            
	           
		$counter++;
	}
}


echo json_encode($return);