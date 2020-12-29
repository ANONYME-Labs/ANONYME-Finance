<?php
		
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
		
//system default localhost server
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','compound');



$conn = mysqli_connect(DB_HOST,DB_USER, DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
							
							$query3 = "SELECT * FROM currency where (name!='".$_COOKIE['currency']."' and contractABI!='') ";
							$result3 = mysqli_query($conn,$query3);							
							
							if($result3){
								while($row = mysqli_fetch_array($result3)){
								
									
									$name = $row['name'];
									$ContractAddress = $row['contractAddress'];
									$ContractABI= $row['contractABI'];
									
									$assetArray[]=$row['name'];
								}
	
	}
	sort($assetArray);
	echo  json_encode($assetArray);
?>