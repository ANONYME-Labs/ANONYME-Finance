<?php 



//getting admin setting data
$query = "SELECT * FROM adminsetting  ";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);

if($row != NULL){
	
    $comptrollerAddress = $row['comptrollerAddress'];
    $marketAddress = $row['marketAddress'];
    $mainContractABI1 = $row['mainContractABI'];
    $comptrollerABI = $row['comptrollerABI'];
    $marketABI = $row['marketABI'];
   
   
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
    $query2 = "SELECT * FROM currency where name='c".$_COOKIE['currency']."'  ";
    $result2 = mysqli_query($conn,$query2);
    $row = mysqli_fetch_array($result2);
    if($row != NULL){
    	
    	 $mainContractAddress = $row['contractAddress'];
    	 $mainContractABI = $row['contractABI'];
		 if($_COOKIE['currency']!='ETH'){
		 $query3 = "SELECT * FROM currency where name='".$_COOKIE['currency']."'";
		 
							$result3 = mysqli_query($conn,$query3);							
							
							if($result3){
								while($row = mysqli_fetch_array($result3)){
									
									$assetsContractAddress=$row['contractAddress'];
									$assetsContractABI=$row['contractABI'];
									
								}
							}else{
								$assetsContractAddress='';
									$assetsContractABI='';
							}
		 }else{
								$assetsContractAddress='';
								$assetsContractABI='';
		}
    }else {
		 $mainContractAddress = $mainContractAddress1;
    	 $mainContractABI = $mainContractABI1;
		 $assetsContractAddress='';
		 $assetsContractABI='';
	}
}else{
	
    	
    	 $mainContractAddress = $mainContractAddress1;
    	 $mainContractABI = $mainContractABI1;
		 $assetsContractAddress='';
		 $assetsContractABI='';
}

 

