<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
//include("../config.php");
include dirname(__FILE__).'/../config.php';

$query = "select siteNetworkId, ethbull_forsage_last_sync from `adminsetting` ORDER BY `ethbull_forsage_last_sync` DESC limit 1";
$q = mysqli_query( $conn, $query ) or die(mysqli_error($conn));
$x = mysqli_fetch_assoc($q);

$lastBlock = 0;
if($x['ethbull_forsage_last_sync'] != null){
    $lastBlock = $x['ethbull_forsage_last_sync'];
}

$siteNetworkId = $x['siteNetworkId'];
*/

$mainContractAddress = '0x7f6238bd5846d5e113509d9c1e7ebfeea1abbdf6';

$lastBlock = 0;
$contract = $mainContractAddress; // 23062020 // Main Contract Address

echo $url ="https://rinkeby.etherscan.io/api?module=logs&action=getLogs&fromBlock=".($lastBlock + 0.01)."&toBlock=latest&address=".$contract;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($ch);
$output = json_decode($output);
curl_close ($ch);

if($output->status == '1') {

    $blockNumber = end($output->result)->blockNumber;
    $blockNumber = hexdec($blockNumber);

    if ($blockNumber > $lastBlock) {

        $result = $output->result;

        foreach ($result as $key => $value) {

            $blockNumber = $value->blockNumber;
            $blockNumber = hexdec($blockNumber);

            $query = "UPDATE adminsetting SET ethbull_forsage_last_sync='".$blockNumber."'";
            mysqli_query($conn, $query);

            /* 1) Event */
            if($value->topics[0] == $Registration){

                //$userWallet = $value->topics[0];
                //$userWallet = '0x'.substr($userWallet,26);

                $data = $value->data;

                $user = $value->topics[1];
                $user = '0x'.substr($user,26);

                $referrer = $value->topics[2];
                $referrer = '0x'.substr($referrer,26);

                $userId = hexdec($value->topics[3]);

                $referrerId = hexdec('0x'.substr($data,0,66));

                $query = "INSERT INTO `forsage_event_reglevel` (userID, userWallet, referrerID, referrerWallet, originalReferrer)";
                $query .= " VALUES ('".$userId."','".$user."', '".$referrerId."', '".$referrer."', '".$referrerId."');";

                $query = "INSERT INTO `forsage_event_reglevel` (userID, userWallet, referrerID, referrerWallet, originalReferrer)";
                $query .= " VALUES ('".$userId."','".$user."', '".$referrerId."', '".$referrer."', '".$referrerId."');";

                echo 'forsage_event_reglevel<br/>';
                print $query."<br/>";
                echo '<br/>===========================<br/>';

                mysqli_query($conn, $query);

            }

        }
    }
}

/*
//update ether's USD price
$handle = curl_init();
$url = "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum&vs_currencies=usd";
// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($handle);
$output = json_decode($output, true);
//var_dump($output);
curl_close($handle);
$ethPrice = $output['ethereum']['usd'];
//updating the admin setting table
$query = "UPDATE adminsetting SET ethPiceInUsd=".$ethPrice;
mysqli_query( $conn, $query );


//updating gas price from ethgasstation.info
$handle = curl_init();
$url = "https://ethgasstation.info/json/ethgasAPI.json";
// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($handle);
curl_close($handle);
$gasPriceAverage = json_decode($output)->average / 10;
$gasPriceFastest = json_decode($output)->fastest / 10;
//updating the admin setting table
$query = "UPDATE adminsetting SET gasPriceAverage=".$gasPriceAverage.", gasPriceFast=".$gasPriceFastest;
mysqli_query( $conn, $query ) or die(mysqli_error($conn));
*/


/*  CODE TO EXTRACT VARIOUS VARIOUS TYPES
//BLOCK NUMBER
$blockNumber = $value->blockNumber;
$blockNumber = hexdec($blockNumber);

//TIMESTAMP
$timeStamp = $value->timeStamp;
$timeStamp = hexdec($timeStamp);

//UINT256
$tokenId = $value->topics[2];
$tokenId = hexdec($tokenId);

//ADDRESS
$userWallet = $value->topics[1];
$userWallet = '0x'.substr($userWallet,26);

//DATA
$data = $value->data;
$level = hexdec('0x'.substr($data,0,66));
$amount = hexdec('0x'.substr($data,66,64));
$time = hexdec('0x'.substr($data,130,64));
*/
