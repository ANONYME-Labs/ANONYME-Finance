<?php 



//getting admin setting data
$query = "SELECT * FROM adminsetting  ";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);

if($row != NULL){
    
    $mainContractABI1 = $row['mainContractABI'];
    $gasPriceAverage = $row['gasPriceAverage'];
    $gasPriceFast = $row['gasPriceFast'];
    $siteName=$row['siteName'];
    $siteURL=$row['siteURL'];   
    $siteLogo=$row['siteLogo'];   
    $siteFavicon=$row['siteFavicon'];   
    $etherscanAddressMain = $row['etherscanAddressMain'];
    $etherscanAddressTestnet = $row['etherscanAddressTestnet'];
    $etherscanTxMain  = $row['etherscanTxMain'];
    $etherscanTxTestnet  = $row['etherscanTxTestnet'];
    $infuraAPIMainnet  = $row['infuraAPIMainnet'];
    $infuraAPITestnet  = $row['infuraAPITestnet'];
    $network=$row['network'];

}

// 0 = rinkeby testnet and 1 = mainnet
if($network==0){

    $mainContractAddress1 = $row['testnetContractAddress'];  

    $etherscanAddress = $row['etherscanAddressTestnet'];
   
    $etherscanTx  = $row['etherscanTxTestnet'];
    
    $infuraAPI  = $row['infuraAPITestnet'];

    $etherscanAPIurl = $row['etherscanAPIurlTestnet'];
    
   
   
    
}else {
        
    $mainContractAddress1 = $row['mainContractAddress'];

    $etherscanAddress = $row['etherscanAddressMain'];
    
    $etherscanTx  = $row['etherscanTxMain'];
    
    $infuraAPI  = $row['infuraAPIMainnet'];

   $etherscanAPIurl = $row['etherscanAPIurlMainnet'];
    
    
}

if(isset($_COOKIE['currency'])){
    $query2 = "SELECT * FROM currency where name='".$_COOKIE['currency']."'  ";
    $result2 = mysqli_query($conn,$query2);
    $row = mysqli_fetch_array($result2);
    if($row != NULL){
    	
    	 $mainContractAddress = $row['contractAddress'];
    	 $mainContractABI = $row['contractABI'];
    }else {
		 $mainContractAddress = $mainContractAddress1;
    	 $mainContractABI = $mainContractABI1;
	}
}else{
	
    	
    	 $mainContractAddress = $mainContractAddress1;
    	 $mainContractABI = $mainContractABI1;

}

 

