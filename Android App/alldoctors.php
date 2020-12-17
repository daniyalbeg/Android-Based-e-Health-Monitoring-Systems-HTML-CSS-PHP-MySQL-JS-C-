<?php

                        
$conn = @mysql_connect("localhost:3306","danyal","danyal123");
$selectB = @mysql_select_db("doctors_record", $conn);

$return = array();

$sql = @mysql_query("select * from doctor");

if(@mysql_num_rows($sql) > 0){
	$counter = 0;
	while($row = @mysql_fetch_assoc($sql)){
		$return[$counter]['ID']      = $row['doctor_id'];                    
		$return[$counter]['name']    = $row['doctor_name'];            
		$return[$counter]['email']   = $row['doctor_email'];        
		$return[$counter]['specialization']     = $row['doctor_specialization'];                
               
		$return[$counter]['cell']    = $row['doctor_cell'];            
		$return[$counter]['age']     = $row['doctor_age'];                
	            
		$counter++;
	}
}


echo json_encode($return);
