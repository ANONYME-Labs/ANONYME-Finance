<?php
  
  if(isset($_GET['ts']) && $_GET['ts']!=""){
  		$conn = mysqli_connect('localhost','root', '','ethermoney');
  		$mysqli = $conn;
  		$timestamp = $_GET['ts'];
  		$data = array();
  		//level buy
  		$buyQuery = "select a.level,a.buyer,b.userID,a.timestamp from `event_levelbuyev` a,event_reglevelev b where a.timestamp>".$timestamp." AND a.buyer=b.userWallet";
  		$buyResult = mysqli_query($mysqli, $buyQuery);
  		if(mysqli_num_rows($buyResult)>0){
        	while($buyRow = mysqli_fetch_array($buyResult)){        		
            	$arr = array('type'=>'buy','message'=>' ID : '.$buyRow['userID'].' just bought level '.$buyRow['level'],'timestamp'=>$buyRow['timestamp']);
				array_push($data,$arr);
            }
        }
  		//lostForLevelEv
  		$lostQuery = "select a.amount,a.buyer,b.userID,a.timestamp from `event_lostforlevelev` a,event_reglevelev b where a.timestamp>".$timestamp." AND a.buyer=b.userWallet";
  		$lostResult = mysqli_query($mysqli, $lostQuery);
  		if(mysqli_num_rows($lostResult)>0){
        	while($lostRow = mysqli_fetch_array($lostResult)){        
            $amount = $lostRow['amount']/1e18;
            	$arr = array('type'=>'lost','message'=>' ID : '.$lostRow['userID'].'  just missed a profit of '.$amount.' PAX','timestamp'=>$lostRow['timestamp']);
				array_push($data,$arr);
            }
        }
       //paidForLevelEv
       	$paidQuery = "select a.amount,a.buyer,b.userID,a.timestamp from `event_paidforlevelev` a,event_reglevelev b where a.timestamp>".$timestamp." AND a.buyer=b.userWallet";
  		$paidResult = mysqli_query($mysqli, $paidQuery);
  		if(mysqli_num_rows($paidResult)>0){
        	while($paidRow = mysqli_fetch_array($paidResult)){        
            	$amount = $paidRow['amount']/1e18;
            	$arr = array('type'=>'earn','message'=>' ID : '.$paidRow['userID'].' just received '.$amount.' PAX in their wallet.','timestamp'=>$paidRow['timestamp']);
				array_push($data,$arr);
            }
        }
  		//regLevelEv
  		$regQuery = "select userID,timestamp from `event_reglevelev` where timestamp>".$timestamp;
  		$regResult = mysqli_query($mysqli, $regQuery);
  		if(mysqli_num_rows($regResult)>0){
        	while($regdRow = mysqli_fetch_array($regResult)){        
            	$arr = array('type'=>'join','message'=>' ID : '.$regdRow['userID'].' just joined.','timestamp'=>$regdRow['timestamp']);
				array_push($data,$arr);
            }
        }
  		
  		$json_result['result']= true;
    	$json_result['data'] = $data;
    	http_response_code(200);
    	echo json_encode($json_result);
		mysqli_close($conn);
    	exit();         
  }else{
    	$json_result['result']= false;
    	$json_result['message'] = "invalid timestamp";
    	http_response_code(200);
    	echo json_encode($json_result);
		//mysqli_close($conn);
    	exit();         
  }

//   
// $q = mysqli_query( $mysqli, $query ) or die(mysqli_error($mysqli));
// $x = mysqli_fetch_row($q);
// $lastBlock = 0;
// if($x!=null){
//     $lastBlock = $x[0];
// }
// 
// 

?>