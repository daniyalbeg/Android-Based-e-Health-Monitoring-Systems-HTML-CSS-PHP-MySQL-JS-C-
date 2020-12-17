<?php

                        
$conn = @mysql_connect("localhost:3306","danyal","danyal123");
$selectB = @mysql_select_db("patient_record", $conn);

$return = array();

$sql = @mysql_query("select * from patient");

if(@mysql_num_rows($sql) > 0){
	$counter = 0;
	while($row = @mysql_fetch_assoc($sql)){
		$return[$counter]['ID']      = $row['patient_Id'];                    
		$return[$counter]['name']    = $row['patient_name'];            
		$return[$counter]['email']   = $row['patient_email'];        
		$return[$counter]['add']     = $row['patient_add'];                
		$return[$counter]['sex']     = $row['patient_sex'];                
		$return[$counter]['cell']    = $row['patient_cell'];            
		$return[$counter]['age']     = $row['patient_age'];                
		$return[$counter]['country'] = $row['patient_country'];
		$return[$counter]['city']    = $row['patient_city'];            
		$return[$counter]['bg']      = $row['patient_bg'];                    
		$return[$counter]['date']    = $row['patient_date'];            
		$return[$counter]['month']   = $row['patient_month'];        
		$return[$counter]['year']    = $row['patient_year'];            
		$counter++;
	}
}


echo json_encode($return);