<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../connection.php';

$url='https://raw.githubusercontent.com/compound-finance/token-list/master/compound.tokenlist.json';
//  Initiate curl

$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
 $arr = json_decode($result, true);
// print_r($arr['tokens']);
$arrToken = array();

$i=1;
if(count($arr) > 0){
  foreach($arr['tokens'] as $tok) {

    if($tok['chainId']==4){

    	if (isset($tok['logoURI'])){
    		$cURL =$tok['logoURI'];
    	} else {
    		$cURL ='';
    	}

      $arrToken[] = array("cCode" => $tok['symbol'],
                       "cURL" => $cURL,
                       "tokenaddress" => $tok['address']
                    );


    $sql="SELECT * FROM `currency` where name='".$tok['symbol']."'";
    if($result=mysqli_query($conn,$sql)){
      $rowcount=mysqli_num_rows($result);
    }

    if($rowcount == 0){
      mysqli_query($conn,'INSERT INTO `currency` (`name` ,`image_url`, `contractAddress`,`desimals`) VALUES ( "'.$tok['symbol'].'","'.$cURL.'","'.$tok['address'].'","'.$tok['decimals'].'")');
    }
    else {
      // code...
      mysqli_query($conn,'Update `currency` set  `contractAddress`="'.$tok['address'].'",desimals="'.$tok['decimals'].'" where name="'.$tok['symbol'].'"');
    }
  }
  }

  $uniqueTokensArray = array_map("unserialize",  array_unique(array_map("serialize", $arrToken)));
  sort($uniqueTokensArray);

  echo  json_encode($uniqueTokensArray);
} else {
  echo '';
}

?>
