<?php

$url='https://raw.githubusercontent.com/compound-finance/token-list/master/compound.tokenlist.json';
//  Initiate curl

$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
  foreach($arr['tokens'] as $tok)
  {
    if($tok['chainId']==1){
    	if (isset($tok['logoURI']))
    	{
    		$cURL =$tok['logoURI'];
    	}
    	else
    	{
    		$cURL ='';
    	}

  	$arrToken[] = array("cCode" => $tok['symbol'],
                       "cURL" => $cURL,
                       "tokenaddress" => $tok['address']
                    );
      }
  	//$cURL = "https://raw.githubusercontent.com/trustwallet/assets/master/blockchains/ethereum/assets/".$tok['address']. "/logo.png";

  	//$i++;
  }

//echo "<br> length before ". count($arrToken );
//echo "<br><br>";
//print_r($arrToken);
$uniqueTokensArray = array_map("unserialize",  array_unique(array_map("serialize", $arrToken)));
sort($uniqueTokensArray);

//echo "<br> length after ". count($uniqueTokensArray );
//echo "<br><br>";
//print_r($uniqueTokensArray);

echo  json_encode($uniqueTokensArray);



?>
