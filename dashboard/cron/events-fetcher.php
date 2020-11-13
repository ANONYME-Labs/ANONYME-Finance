<?php
/*c1 = main Contract : TVpvLZcFRxGfsk7Rc7tzEZtiZkspUDdfJe
Events
1.buyLevelEv
2.doTransactionEv
3.payPlatformChargeEv
4.depositedToPoolEv
5.regUserEv
6.processPayOutEv
7.startMynetworkEv
*/
error_reporting(E_ALL);
ini_set("error_log", "dashboard/cron/php-error.log");


//echo dirname(__FILE__).'/vendor/autoload.php';
include dirname(__FILE__).'/../config.php';



$query = "select `last_block_number` from `adminsetting`  ORDER BY `last_block_number` DESC limit 0,1";
$q = mysqli_query( $conn, $query ) or die(mysqli_error($conn));
$x = mysqli_fetch_assoc($q);

$lastBlock = 0;
if($x['last_block_number'] != null){
    $lastBlock = $x['last_block_number'];
}

$contract = $mainContractAddress;
$AccrueInterest = "0x875352fb3fadeb8c0be7cbbe8ff761b308fa7033470cd0287f02f3436fd76cb9";
$Mint = "0x4c209b5fc8ad50758f13e2e1088ba56a560dff690a1c6fef26394f4c03821c4f";
$Redeem = "0xe5b754fb1abb7f01b499791d0b820ae3b6af3424ac1c59768edb53f4ec31a929";
$Borrow = "0x13ed6866d4e1ee6da46f845c46d7e54120883d75c5ea9a2dacc1c4ca8984ab80";
$RepayBorrow = $mainContractAddress;
$LiquidateBorrow = $mainContractAddress;
$NewPendingAdmin = $mainContractAddress;
$NewAdmin = $mainContractAddress;
$NewComptroller = $mainContractAddress;
$NewMarketInterestRateModel = $mainContractAddress;
$NewReserveFactor = $mainContractAddress;
$ReservesReduced = $mainContractAddress;
$Failure = "0x45b96fe442630264581b197e84bbada861235052c5a1aadfff9ea4e40a969aa0";
$Transfer = "0xddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef";
$Approval = $mainContractAddress;


        
 //this function will fetch and process data of ALL events
echo $url = $etherscanAPIurl."/api?module=logs&action=getLogs&fromBlock=".($lastBlock)."&address=".$contract."&apikey=24U6ZEZAQ53TFNK6UP2Y862TBPAEB2CF28";
    
    
   
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $output = curl_exec($ch);
    $output = json_decode($output);
    curl_close ($ch);
   
    
    $last = null;

echo "<pre>";
print_r($output);

if($output->status == '1'){


$blockNumber1 = end($output->result)->blockNumber;
$blockNumber1 = hexdec($blockNumber1);

echo '<br>'.$blockNumber1.'  >  '.$lastBlock.'<br><br>';
if ($blockNumber1 > $lastBlock)
{

echo $query = "UPDATE `adminsetting` SET `last_block_number` = '$blockNumber1' WHERE `adminsetting`.`id` = 1 ";
mysqli_query( $conn, $query );
    
$result = $output->result;

foreach ($result as $key => $value) {

$blockNumber = $value->blockNumber;
$blockNumber = hexdec($blockNumber);



    if($blockNumber>$lastBlock and $value->topics[0] == $Borrow){

        
        

        $data = $value->data;
		
		echo substr($data,26,40);
		echo '<br>';
		echo substr($data,66,64);
		echo '<br>';
		echo substr($data,128,66);
		echo '<br>';
		echo substr($data,194,66);
		echo '<br>';
		
        $borrower ='0x'.substr($data,26,40);
        $borrowAmount = hexdec('0x'.substr($data,66,64));
        $accountBorrows = hexdec('0x'.substr($data,128,66));
        $totalBorrows = hexdec('0x'.substr($data,194,66))/10000000000000000;

        $query = "INSERT INTO `borrow` (borrower, borrowAmount, accountBorrows, totalBorrows)";
        $query .= " VALUES ('".$borrower."','".$borrowAmount."','".$accountBorrows."','".$totalBorrows."');";
        print $query."<br/>";
        mysqli_query( $conn, $query );

    
	} else if($blockNumber>$lastBlock and $value->topics[0] == $Mint){

        
        

        $data = $value->data;
		
		echo substr($data,26,40);
		echo '<br>';
		echo substr($data,66,64);
		echo '<br>';
		echo substr($data,128,66);
		
		
        $minter ='0x'.substr($data,26,40);
        $mintAmount	 = hexdec('0x'.substr($data,66,64));
        $mintTokens = hexdec('0x'.substr($data,128,66));
      
        $query = "INSERT INTO `mint` (minter, mintAmount, mintTokens)";
        $query .= " VALUES ('".$minter."','".$mintAmount."','".$mintTokens."');";
        print $query."<br/>";
        mysqli_query( $conn, $query );

    
	} else if($blockNumber>$lastBlock and $value->topics[0] == $AccrueInterest){

        
        

        $data = $value->data;
		
		echo substr($data,26,40);
		echo '<br>';
		echo substr($data,66,64);
		echo '<br>';
		echo substr($data,128,66);
		
		
        $interestAccumulated = hexdec('0x'.substr($data,26,40));
        $borrowIndex	 = hexdec('0x'.substr($data,66,64));
        $totalBorrows = hexdec('0x'.substr($data,128,66));
      
        $query = "INSERT INTO `accrueinterest` (interestAccumulated, borrowIndex, totalBorrows)";
        $query .= " VALUES ('".$interestAccumulated."','".$borrowIndex."','".$totalBorrows."');";
        print $query."<br/>";
        mysqli_query( $conn, $query );

    
	}else if($blockNumber>$lastBlock and $value->topics[0] == $Failure){

        
        

        $data = $value->data;
		
		echo substr($data,26,40);
		echo '<br>';
		echo substr($data,66,64);
		echo '<br>';
		echo substr($data,128,66);
		
		
        $error = hexdec('0x'.substr($data,26,40));
        $info	 = hexdec('0x'.substr($data,66,64));
        $detail = hexdec('0x'.substr($data,128,66));
      
        $query = "INSERT INTO `Failure` (error, info, detail)";
        $query .= " VALUES ('".$error."','".$info."','".$detail."');";
        print $query."<br/>";
        mysqli_query( $conn, $query );

    
	}else if($blockNumber>$lastBlock and $value->topics[0] == $Failure){

        
        

        $data = $value->data;
		
		echo substr($data,26,40);
		echo '<br>';
		echo substr($data,66,64);
		echo '<br>';
		echo substr($data,128,66);
		
		
        $error = hexdec('0x'.substr($data,26,40));
        $info	 = hexdec('0x'.substr($data,66,64));
        $detail = hexdec('0x'.substr($data,128,66));
      
        $query = "INSERT INTO `Failure` (error, info, detail)";
        $query .= " VALUES ('".$error."','".$info."','".$detail."');";
        print $query."<br/>";
        mysqli_query( $conn, $query );

    
	} else if($blockNumber>$lastBlock and $value->topics[0] == $Redeem){

        
        

        $data = $value->data;
		
		echo substr($data,26,40);
		echo '<br>';
		echo substr($data,66,64);
		echo '<br>';
		echo substr($data,128,66);
		
		
        $redeemer ='0x'.substr($data,26,40);
        $redeemAmount	 = hexdec('0x'.substr($data,66,64));
        $redeemTokens = hexdec('0x'.substr($data,128,66));
      
        $query = "INSERT INTO `redeem` (redeemer, redeemAmount, redeemTokens)";
        $query .= " VALUES ('".$redeemer."','".$redeemAmount."','".$redeemTokens."');";
        print $query."<br/>";
        mysqli_query( $conn, $query );

    
	}else if($blockNumber>$lastBlock and $value->topics[0] == $Transfer){

        
        

        $data = $value->data;
		
		echo substr($value->topics[1],26,40);
		echo '<br>';
		echo substr($value->topics[2],26,40);
		echo '<br>';
		echo substr($data,128,66);
		
		
        $from = hexdec('0x'.substr($value->topics[1],26,40));
        $to	 =  hexdec('0x'.substr($value->topics[2],26,40));
        $amount = hexdec('0x'.substr($data,128,66));
      
        $query = "INSERT INTO `transfer` (from, to, amount)";
        $query .= " VALUES ('".$from."','".$to."','".$amount."')";
        print $query."<br/>";
        mysqli_query( $conn, $query );

    
	}
	
}	
}
}


function logEtoLongNumber($amountInLogE){
    
  $amountInLogE = (string)$amountInLogE;
  $noDecimalDigits = "";

  if(strrchr($amountInLogE, "E-")){
  
    $splitString = explode("E-",$amountInLogE); //split the string from 'e-'

    $noDecimalDigits = str_replace(".", "", $splitString[0]); //remove decimal point

    //how far decimals to move
     $zeroString = "";
    for($i=1; $i < $splitString[1]; $i++){
      $zeroString .= "0";
    }
    
    return  "0.".$zeroString.$noDecimalDigits;
    
  }
  else if(strrchr($amountInLogE, "E+")){

    $splitString = explode("E+", $amountInLogE); //split the string from 'e+'
    $ePower = (int)$splitString[1];

    $noDecimalDigits = str_replace(".","",$splitString[0]); //remove decimal point

    if($ePower >= count($noDecimalDigits)-1){
      $zerosToAdd = ($ePower ) - count($noDecimalDigits);

      for($i=0; $i <= $zerosToAdd; $i++){
        $noDecimalDigits .= "0";
      }

    }
    else{
      //this condition will run if the e+n is less than numbers
      $stringFirstHalf = array_slice($noDecimalDigits,0,$ePower+1);
      $stringSecondHalf = array_slice($noDecimalDigits,$ePower+1);
      
      return $stringFirstHalf.".".$stringSecondHalf;
    }
    
    return $noDecimalDigits;
  }
  
  return $amountInLogE;  //by default it returns stringify value of original number if its not logarithm number
}
?>
