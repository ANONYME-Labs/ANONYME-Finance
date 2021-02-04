<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../connection.php';

$lastBlock = 8014100;

$contract = '0xD5EB8B90A4862B1361B14EB02134f0fBef1B6cAA';

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

        echo '<pre>';print_r($result);

        die;

        /*foreach ($result as $key => $value) {

            
        }*/
    }
}

die;

