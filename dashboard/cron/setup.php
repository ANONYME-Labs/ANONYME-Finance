<?php

include dirname(__FILE__).'/../config.php';

 $SQLEVENT="CREATE TABLE `events` (
     		`id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `event` varchar(255) NOT NULL,
            `result` varchar(255) NOT NULL,
            `time` int(155) NOT NULL)";
mysqli_query($conn, $SQLEVENT);

$contractABI=$mainContractABI;
$ABIarray=json_decode($contractABI); 
echo "<pre>";
print_r($ABIarray);
echo "</pre>";
$totalABIdata=count($ABIarray);
$events=$ABIarray;
                         

	foreach($events as $e){
    echo "<pre>";
		//print_r($e);
     if($e->type=='event'){
     $Query="CREATE TABLE `".$e->name."` (
     		`id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,";
    	
         $fields=$e->inputs;
         $totfields=count($fields);
         $i=0;
    		foreach($fields as $f){
            
            	$i++;
            	
            	$field_type=$f->type;
                $str=$f->name;
            
           
            	if($field_type=='address' and $i!=$totfields){
                	 $Query.="`".preg_replace('/[^A-Za-z0-9. -]/', '', $str)."` varchar(255) NOT NULL,";
                }else if($field_type=='address' and $i==$totfields){
                	 $Query.="`".preg_replace('/[^A-Za-z0-9. -]/', '', $str)."` varchar(255) NOT NULL";
                }
                
            
            	if($field_type=='uint256' and $i!=$totfields){
                	 $Query.="`".preg_replace('/[^A-Za-z0-9. -]/', '', $str)."` int(155) NOT NULL,";
                } else if($field_type=='uint256' and $i==$totfields){
                	 $Query.="`".preg_replace('/[^A-Za-z0-9. -]/', '', $str)."` int(155) NOT NULL";
                } 
            	
            	
            }
      $Query.=")";
     
      
    
     	mysqli_query($conn, $Query);
       
       echo $addEVENT="insert into `events` ( `event` ) values
     		('".$e->name."')";
       
       if(mysqli_query($conn, $addEVENT)){
   			 echo "Table created successfully.";
		} else{
    		echo "ERROR: Could not able to execute  $Query. " . mysqli_error($conn);
		}
     }
    	 
    
    }
?>