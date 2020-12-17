<?php


$conn = @mysql_connect("localhost:3306","danyal","danyal123");
$selectB = @mysql_select_db("doctors_record", $conn);

$return = array();

$sql = @mysql_query("select * from prescription");

if(@mysql_num_rows($sql) > 0){
	$counter = 0;
	while($row = @mysql_fetch_assoc($sql)){
		$return[$counter]['PatientID']      	= $row['patient_id'];                    
		$return[$counter]['DoctorID']    		= $row['doctor_id'];            
		$return[$counter]['Diagnose']   		= $row['patient_diagnose'];        
		$return[$counter]['Age']     			= $row['patient_age'];                
		$return[$counter]['Medicine1']     		= $row['med1'];                
		$return[$counter]['Medicine2']   	 = $row['med2'];            
		$return[$counter]['Medicine3']    	 = $row['med3'];                
		$return[$counter]['Syrup1'] 			= $row['syrup1'];
		$return[$counter]['Syrup2']    			= $row['syrup2'];            
		$return[$counter]['Syrup3']      		= $row['syrup3'];                    
		$return[$counter]['Date']   			 = $row['date'];            
		$return[$counter]['Month']  		 	= $row['month'];        
		$return[$counter]['Year']    			= $row['year']; 
		$return[$counter]['Dosage']      			= $row['dosage'];  
		$return[$counter]['Quantity']      		= $row['quantity'];
		$return[$counter]['Comments']    		= $row['comments'];            
		$return[$counter]['UsagePeriod']   	= $row['usage_period'];        
		$return[$counter]['Test']    			= $row['test']; 		
		$counter++;
	}
}


echo json_encode($return);