<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../connection.php';

$lastBlock = 0;

$contract = strtolower("0xD5EB8B90A4862B1361B14EB02134f0fBef1B6cAA");
$eveny_topic0 = "0x4c209b5fc8ad50758f13e2e1088ba56a560dff690a1c6fef26394f4c03821c4f"; 
$apikey = '24U6ZEZAQ53TFNK6UP2Y862TBPAEB2CF28';

//echo $url ="https://rinkeby.etherscan.io/api?module=logs&action=getLogs&fromBlock=".($lastBlock + 0.01)."&toBlock=latest&address=".$contract . "&apikey=24U6ZEZAQ53TFNK6UP2Y862TBPAEB2CF28"; //."&topic0=".$topic0

$pairs_qry = "SELECT getPairAddress FROM getpairdata";
$pairs_res = mysqli_query($conn, $pairs_qry);
$pairs_count = mysqli_num_rows($pairs_res);

if($pairs_count > 0){

    while ($pairs_row = mysqli_fetch_assoc($pairs_res)) {
        
        $pair_contract_address = $pairs_row['getPairAddress'];

        echo $url = "https://api-rinkeby.etherscan.io/api?module=logs&action=getLogs&fromBlock=379224&toBlock=latest&address=".$pair_contract_address . "&topic0=".$eveny_topic0."&apikey=".$apikey;

        echo '<br/><br/>';

        $ch = curl_init();
            
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $output = curl_exec($ch);
        $output = json_decode($output);
        curl_close ($ch);

        if($output->status == '1') {

            $blockNumber = end($output->result)->blockNumber;
            $blockNumber = hexdec($blockNumber);

            if ($blockNumber > $lastBlock) {
            
                $result = $output->result;

                foreach ($result as $key => $value) {

                    if($value->topics[0] == $eveny_topic0){
                        
                        $topic0 = $value->topics[0];

                        $topic1 = $value->topics[1];
                        $topic1 = '0x'.substr($topic1, 26);

                        $blockNumber = hexdec($value->blockNumber);
                        $gasPrice = hexdec($value->gasPrice);
                        $gasUsed = hexdec($value->gasUsed);
                        $transactionHash = $value->transactionHash;
                        $timeStamp = hexdec($value->timeStamp);

                        $poolpairs_qry = "SELECT id FROM events_poolpairs WHERE topic0 = '".$topic0."' AND topic1 = '".$topic1."' AND blockNumber = '".$blockNumber."' AND gasPrice = '".$gasPrice."' AND gasUsed = '".$gasUsed."' AND transactionHash = '".$transactionHash."' AND timeStamp = '".$timeStamp."'";
                        $poolpairs_res = mysqli_query($conn, $poolpairs_qry);
                        $poolpairs_count = mysqli_num_rows($poolpairs_res);
                        
                        if($poolpairs_count == 0){

                            $ins_query = "INSERT INTO `events_poolpairs` (topic0, topic1, blockNumber, gasPrice, gasUsed, transactionHash, timeStamp)";
                            $ins_query .= " VALUES ('".$topic0."','".$topic1."', '".$blockNumber."', '".$gasPrice."', '".$gasUsed."', '".$transactionHash."', '".$timeStamp."');";
                            
                            echo 'events_poolpairs<br/>';
                            print $ins_query."<br/>";
                            mysqli_query($conn, $ins_query);

                        }
                    }
                }
            }
        }
    }
}

die;

