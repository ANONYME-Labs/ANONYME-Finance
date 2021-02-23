<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#from_token_pop">
  Launch demo modal
</button> -->

<!-- Modal 3 -->

<?php include('config.php'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">

<div class="modal fade" id="coin_option3" tabindex="-1" aria-labelledby="coin_option3Label" aria-hidden="false">

  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="coin_option3Label">Select Token<i class="fa fa-question-circle ml-2" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-sm-12 mb-3">
          <input class="form-control form-control-lg" type="text" placeholder="Search">
        </div>
        <div class="col-sm-12 mb-3">
          <h5>Common bases</h5>
        </div>
        <div class="col-sm-12 mb-3">
          <button type="button" class="btn btn-light"><img src="images/eth.png" style="width: 20px; margin-right: 5px;">ETH</button>
          <button type="button" class="btn btn-light ml-2"><img src="images/eth.png" style="width: 20px; margin-right: 5px;">BTC</button>
          <button type="button" class="btn btn-light ml-2"><img src="images/eth.png" style="width: 20px; margin-right: 5px;">WETH</button>
          <button type="button" class="btn btn-light ml-2"><img src="images/eth.png" style="width: 20px; margin-right: 5px;">BCH</button>
          <button type="button" class="btn btn-light ml-2"><img src="images/eth.png" style="width: 20px; margin-right: 5px;">TRX</button>
        </div>
        <div class="col-sm-12">
          <div class="row py-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <span>Token Name</span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
              <i class="fa fa-arrow-down" aria-hidden="true"></i>
            </div>
          </div>
          <div id="displayTokenCoin3" class="row py-2 hover-select-token">
             
          </div>
          
        </div>
      </div>
      <div class="modal-footer border-top-0">
        <div class="row" style="width: 100%;">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <span>Uniswap Default List</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-right">
          <a href="#">Change</a>
        </div>
    </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Connect_wallet" tabindex="-1" aria-labelledby="Connect_walletLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="Connect_walletLabel">Select Token<i class="fa fa-question-circle ml-2" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-sm-12 mb-3">
          <input class="form-control form-control-lg" type="text" placeholder="Search" style="border-radius: 20px;">
        </div>
        <div class="col-sm-12">
          <div class="row py-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <span>Token Name</span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
              <i class="fa fa-arrow-down" aria-hidden="true"></i>
            </div>
          </div>
          <div class="row py-2 hover-select-token">
            <div class="col-sm-12">
              <div style="cursor: pointer;"><img src="images/eth.png" style="width: 20px;"> <span class="ml-2">ETH</span></div>
            </div>
          </div>
          <div class="row py-2 hover-select-token">
            <div class="col-sm-12">
              <div style="cursor: pointer;"><img src="images/eth.png" style="width: 20px;"> <span class="ml-2">ETH</span></div>
            </div>
          </div>
          <div class="row py-2 hover-select-token">
            <div class="col-sm-12">
              <div style="cursor: pointer;"><img src="images/eth.png" style="width: 20px;"> <span class="ml-2">ETH</span></div>
            </div>
          </div>
          <div class="row py-2 hover-select-token">
            <div class="col-sm-12">
              <div style="cursor: pointer;"><img src="images/eth.png" style="width: 20px;"> <span class="ml-2">ETH</span></div>
            </div>
          </div>
          <div class="row py-2 hover-select-token">
            <div class="col-sm-12">
              <div style="cursor: pointer;"><img src="images/eth.png" style="width: 20px;"> <span class="ml-2">ETH</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer border-top-0">
        <div class="row" style="width: 100%;">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <span>Uniswap Default List</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-right">
          <a href="#">Change</a>
        </div>
    </div>
      </div>
    </div>
  </div>
</div>


 <footer class="main-footer">
    <strong>Copyright © 2020</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>
<div id="sidebar-overlay"></div></div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<script src="dist/js/jquery.twbs-toggle-buttons.min.js?v=121"></script>

<script>
$(".btn-group-toggle").twbsToggleButtons();
</script>
<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);




  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
 
  
// web3  
  window.addEventListener('load', async () => {
  $(document).ready(async function(){
	
	$("#Loading").addClass('show');
	$("#Loading").show();
	
	 if (window.ethereum) {
        window.web3 = new Web3(ethereum);
        try {
            // Request account access if needed
            await ethereum.enable();
            // Acccounts now exposed
            web3.eth.getAccounts(function(error, result) {
          if(!error && typeof(result[0]) !== 'undefined')
              {
              var metaMaskAddress=""+result[0];
			  console.log(metaMaskAddress);
			 
			    $('.asset-list').show();
				
				
				
              var now = new Date();
              now.setTime(now.getTime() + 1 * 3600 * 1000);
              document.cookie = "userWallet="+metaMaskAddress+"; expires=" + now.toUTCString() + "; path=/";
              
             // location.reload();
            }
          });
        } catch (error) {
            // User denied account access...
        }
    }
    // Legacy dapp browsers...
    else if (window.web3) {
        window.web3 = new Web3(web3.currentProvider);
        // Acccounts always exposed
        web3.eth.getAccounts(function(error, result) {
          if(!error && typeof(result[0]) !== 'undefined')
          {
          var metaMaskAddress=""+result[0];
          var now = new Date();
          now.setTime(now.getTime() + 1 * 3600 * 1000);
          document.cookie = "userWallet="+metaMaskAddress+"; expires=" + now.toUTCString() + "; path=/";
          
         // location.reload();
        }
      });
        
    }
    // Non-dapp browsers...
    else {
			
		$('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="borrowRepayLabel">Please Wait...</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Non-Ethereum browser detected. You should consider trying MetaMask!</span>');	
       
    }
	
	var userWallet=getCookie('userWallet');
  	//alert(userWallet);

  	if(userWallet!=""){
		
	   $("#Loading").removeClass('show');
	   $("#Loading").hide();
		
       var vWallet=userWallet.substring(0, 6) + '...' + userWallet.substring(userWallet.length - 6, userWallet.length);
       $(".btnwalletaddress").html(vWallet);
  	}

	
	


});
});

//------------------------------- connecting with smart contract ---------------------------------------------------


window.addEventListener('load', async () => {
$(document).ready(async function(){




// Modern dapp browsers...
    if (window.ethereum) {

        window.web3 = new Web3(ethereum);
        try {
            // Request account access if needed
           // await ethereum.enable();
            // Acccounts now exposed
            web3.eth.getAccounts(async function(error, result) {
          if(!error && typeof(result[0]) !== 'undefined')
              {
				var myAccountAddress=""+result[0];
				var bal = await web3.eth.getBalance(myAccountAddress);
				var accbal = ( bal / 1000000000000000000 );
				
				
				
				// userWallet
				var userWallet=getCookie('userWallet');
				if(userWallet!=""){
					var vWallet=userWallet.substring(0, 6) + '...' + userWallet.substring(userWallet.length - 6, userWallet.length);
					$(".btnwalletaddress").html(vWallet);
				}
				
				
				// Assets Name
				var asset='<?php if(isset($_COOKIE['currency'])) { echo ltrim($_COOKIE['currency'], 'c'); }else echo 'ETH';?>';
				
				//main contract
				var mainContractABI = <?php echo $mainContractABI; ?>;
				<?php if($mainContractABI!="") { ?>
					var mainContractABI = <?php echo $mainContractABI; ?>;
				<?php } else { ?>
					var mainContractABI = "";
				<?php } ?>
				var mainContractAddress = "<?php echo $mainContractAddress; ?>";

				
				console.log(mainContractAddress);
				
				//comptroller contract
				var comptrollerAbi =<?php echo $comptrollerABI; ?>;
				var comptrollerAddress = "<?php echo $comptrollerAddress; ?>";
				const comptroller = new web3.eth.Contract(comptrollerAbi, comptrollerAddress);

				//market contract
				var marketAbi =<?php echo $marketABI; ?>;
				var marketAddress = "<?php echo $marketAddress; ?>";
				
				//Assets contract
				if(asset!="" && asset!='ETH' && asset!='cETH'){ 
				var underlyingContractAddress ='<?php echo $assetsContractAddress; ?>';
				var erc20AbiJson = <?php echo $assetsContractABI; ?>;
				}
				

				/*price contract
				const priceFeedAbi = <?=$priceABI; ?>;
				const priceFeedAddress = '<?=$priceAddress; ?>';				
				const priceFeed = new web3.eth.Contract(priceFeedAbi, priceFeedAddress);
				console.log('Fetching ${'+asset+'} price from the price feed...');
				let underlyingPriceInUsd = await priceFeed.methods.price(asset).call();
				underlyingPriceInUsd = underlyingPriceInUsd / 1e6; // Price feed provides price in USD with 6 decimal places
				console.log(underlyingPriceInUsd);*/
				
				var usd_value = <?php echo $usd_value;?>				
				// desimals
				var ctokendesimal = 8;
				const underlyingDecimals = <?php echo $underlaying_desimal; ?>; // Number of decimals defined in this ERC20 token's contract				
				const mantissa = 18 + parseInt(underlyingDecimals) - 8;
				const ethMantissa =1e18;
				const blocksPerDay = 4 * 60 * 24;
				const daysPerYear = 365;				
				var arrayMrk=[mainContractAddress];
				
				const fromMyWallet = {
				  from: myAccountAddress,
				  gasLimit: web3.utils.toHex(500000),
				  gasPrice: web3.utils.toHex(1000000000) // use ethgasstation.info (mainnet only)
			  };
				
				
				
				  
				// main instance 
				var myContract = new web3.eth.Contract(mainContractABI, mainContractAddress, {
					from: myAccountAddress, // default from address
				});
				console.log(myContract)
				
				// market instance 
				var marketcontract = new web3.eth.Contract(marketAbi, comptrollerAddress,{
					from: myAccountAddress, // default from address
				});
				console.log(marketcontract);
				
				//Assets instance 
				if(asset!="" && asset!='ETH' && asset!='cETH'){ 
				var underlying = new web3.eth.Contract(erc20AbiJson, underlyingContractAddress);  
				console.log('underlying '+underlying); 
				}
				
				//liquidity
				let {1:liquidity} = await marketcontract.methods.getAccountLiquidity(myAccountAddress).call();
                liquidity = web3.utils.fromWei(liquidity).toString();
				console.log('Account liquidity '+liquidity); 
				
				
				//balanceOfUnderlying
				const balanceOfUnderlying = web3.utils.toBN(await myContract.methods.balanceOfUnderlying(myAccountAddress).call()) / Math.pow(10, underlyingDecimals);
				console.log('balanceOfUnderlying'+balanceOfUnderlying);	
				$('.supply_blalnce').html( balanceOfUnderlying.toFixed(3)+' '+asset);
				if(balanceOfUnderlying>0)
					  $("#withdrawing").html('Withdraw');
				  
				 if($('#TokensTowithdraw').val()=="")
					$("#withdrawing").attr("disabled", "disabled");
					
					
				
				 /*if(asset!="" && asset!='ETH' && asset!='cETH'){ 
				  console.log("ETH supplied to the Compound Protocol:", balanceOfUnderlying.toFixed(3), '\n');
				  $('.supply_blalnce').html( balanceOfUnderlying.toFixed(3)+' <?php echo $_COOKIE['currency'];?>');
				 }else{
				  var balance = await myContract.methods.balanceOf(myAccountAddress).call({from: myAccountAddress}) /Math.pow(10, ctokendesimal);
				  $('.supply_blalnce').html( balance.toFixed(3)+' <?php echo $_COOKIE['currency'];?>');
				 } 
				*/ 
				 
				// checkMembership for allowed user assets to enter compound market
				var checkMembership = await marketcontract.methods.checkMembership(myAccountAddress,mainContractAddress).call({from: myAccountAddress});
				console.log(checkMembership); 
				$('#ether-basic-switch').prop('checked', checkMembership);
				$('.testcollateral').html(checkMembership);
				
				//allowance	
				if(asset!="" && asset!='ETH' && asset!='cETH'){ 
				var checkallowance = await underlying.methods.allowance(myAccountAddress,underlyingContractAddress).call();
		        console.log('checkallowance'+checkallowance);
				if(checkallowance==0){
					$('#approve').show();
					$('#checkMembership').hide();
					$('.faucet-link').hide();
				}else {
					$('#checkMembership').show();
					$('#approve').hide();
					 if(asset!="" && asset!='ETH' && asset!='cETH'){ 
						$('.faucet-link').show();
					 }
				}

				}
				// APY
				const supplyRatePerBlock = await myContract.methods.supplyRatePerBlock().call();
				const borrowRatePerBlock = await myContract.methods.borrowRatePerBlock().call();
				const supplyApy = (Math.pow( 1 + (5760 * supplyRatePerBlock) / ethMantissa ,daysPerYear) - 1)*100;
				const borrowApy = (Math.pow( 1 + (5760 * borrowRatePerBlock) / ethMantissa ,daysPerYear) - 1)*100;
				let exchangeRateCurrent = await myContract.methods.exchangeRateCurrent().call();
				exchangeRateCurrent = exchangeRateCurrent / Math.pow(10, 18 + 18 - 8);
				console.log("Current exchange rate from cETH to ETH:", exchangeRateCurrent, '\n');
				$('.supply_percentage').html(supplyApy.toFixed(2)+' %');
				$('.supply_percentage_mo').html(supplyApy.toFixed(2)+' %');
				$('.borrow_percentage').html(borrowApy.toFixed(2)+' %');
				$('.borrow_percentage_mo').html(borrowApy.toFixed(2)+' %');
				  

				 

				var totalSupply = await myContract.methods.totalSupply().call({from: myAccountAddress});
				console.log('totalSupply'+totalSupply/1000000000000000000);	
				let oneCTokenInUnderlying = exchangeRateCurrent / Math.pow(10, mantissa);
				const totalSupplyScaled = (totalSupply) / Math.pow(10, 8) ;
				oneCTokenInUnderlying = exchangeRateCurrent / (1 * 10 ^ (18 + underlyingDecimals - 8));
				console.log('totalSupplyScaled'+totalSupplyScaled);
				console.log('oneCTokenInUnderlying'+oneCTokenInUnderlying);
				console.log('supplyRatePerBlock'+supplyRatePerBlock);
				console.log('borrowRatePerBlock'+borrowRatePerBlock);
				console.log('totalSupplyScaled'+totalSupplyScaled);
				//console.log('new'+5760 * supplyRatePerBlock / Math.pow(10, underlyingDecimals));
				
				
				//market Info
				var totB = await myContract.methods.totalBorrows().call()/1e18;
				var totBorrUsd=totB*usd_value;
				console.log("totBorrows "+totB+" "+asset);
				var totR = await myContract.methods.totalReserves().call()/1e18;
				var totResUsd=totR*usd_value;
				
				console.log("Market Size $"+totResUsd);
				
				if(totResUsd!=0)
					var UtilizationRate=(totBorrUsd/totResUsd)*100;
				else
					var UtilizationRate=0;
				
				var totC = await myContract.methods.getCash().call()/1e18;
				var availableLiqUSD=totC*usd_value;
				console.log("Market Liquidity "+totC+" "+asset);
				$("#UtilizationRate").html(UtilizationRate+'%');  
				$("#availableLiq").html(totC.toFixed(2)+' '+asset);  
				$("#availableLiqUSD").html('$'+availableLiqUSD.toFixed(2));  
				$("#assetPrice").html("$ "+usd_value.toFixed(2));  
				$("#totResUsd").html("$ "+totResUsd.toFixed(2));  
				$("#totBorrUsd").html("$ "+totBorrUsd.toFixed(2));  
				$("#totB").html(totB.toFixed(2));  
				  
				const logBalances = () => {
				  return new Promise(async (resolve, reject) => {
					let myWalletEthBalance = web3.utils.fromWei(await web3.eth.getBalance(myAccountAddress));
					let myWalletCEthBalance = await myContract.methods.balanceOf(myAccountAddress).call() /  Math.pow(10, ctokendesimal);
					if(asset!="" && asset!='ETH' && asset!='cETH'){ 
						var myWalletUnderlyingBalance = await underlying.methods.balanceOf(myAccountAddress).call() / Math.pow(10, underlyingDecimals); // if you supply in compound otherwise it show you 0.
						console.log("My Wallet's  ${"+asset+"} Balance:", myWalletUnderlyingBalance);
						$('.walletbalance').html(myWalletUnderlyingBalance.toFixed(4)+''+asset);
						myWalletUnderlyingBalance=(myWalletUnderlyingBalance*97)/100;
						$('.walletbalancepop').html(myWalletUnderlyingBalance.toFixed(4)+''+asset);

						 if(myWalletUnderlyingBalance > 0 )
								$('#supplying').html('Supply');
						$('.borrow_blalnce').html(myWalletUnderlyingBalance.toFixed(4)+' '+asset);
					}else{
						let myWalletUnderlyingBalance = await myContract.methods.balanceOf(myAccountAddress).call() / Math.pow(10, ctokendesimal); // if you supply in compound otherwise it show you 0.
						console.log("My Wallet's  ${"+asset+"} Balance:", myWalletUnderlyingBalance);
						$('.walletbalance').html(parseFloat(myWalletEthBalance).toFixed(4)+' '+asset);
						myWalletEthBalance=(myWalletEthBalance*97)/100;
						$('.walletbalancepop').html(parseFloat(myWalletEthBalance).toFixed(4)+' '+asset);
						 if(myWalletUnderlyingBalance > 0 )
								$('#supplying').html('Supply');
						       // $("#supplying").attr("disabled", "disabled"); 
						$('.borrow_blalnce').html(myWalletUnderlyingBalance.toFixed(4)+' '+asset);
					}
					 $("#supplying").attr("disabled", "disabled"); 
					console.log("My Wallet's  ETH Balance:", myWalletEthBalance);
					console.log("My Wallet's cETH Balance:", myWalletCEthBalance);
					

					resolve();
				  });
				};
 
			   await logBalances();
			  
			  //supply balance data
			  if(balanceOfUnderlying > 0){	
			  
				  console.log("(2 *(("+balanceOfUnderlying+" * "+supplyApy+")/100))* "+usd_value);
				  
				  const supplybalanceUSD= (2 *((balanceOfUnderlying * supplyApy)/100))* usd_value;
				  const borrow_limit=(supplybalanceUSD*80)/100;
				 
				  $('#supplybalanceUSD').html('$ '+supplybalanceUSD.toFixed(5));
				  $('.borrow_limit').html('$ '+borrow_limit.toFixed(2));
				  
				  $('#totsupply').html(balanceOfUnderlying.toFixed(4));
				  
				  
				  
			  }
			  
			  console.log('Fetching cETH collateral factor...');
              let { 1:collateralFactor } = await marketcontract.methods.markets(mainContractAddress).call();
              collateralFactor = (collateralFactor / 1e18) * 100; // Convert to percent
              console.log("collateralFactor % "+collateralFactor); // Convert to percent
              $("#collateralFactor").html(collateralFactor+"%"); // Convert to percent
			  
			  // borrow balance  Data
			  const borrowBalanceStored= await myContract.methods.borrowBalanceStored(myAccountAddress).call({from: myAccountAddress});
			  const borrowBalance=borrowBalanceStored/Math.pow(10, underlyingDecimals);
			 
				  
			   if($('#TokensTorepay').val()=="")
					$("#repaying").attr("disabled", "disabled");
				else
					 $("#repaying").html('Repay');
				 
			   if(liquidity > 0){	
				  
					$('#borrow_wrapper').html('<h3 class="text-center text-info">Your borrow balance is <span id="borrowbalanceUSD"> $0</span></h3><p class="text-center">Your borrow balance is <span id="totborrow"> 0 '+asset+'</span>.</p><div class="go-back text-center my-3"><button class="btn btn-info"  data-toggle="modal" data-target="#borrowRepay" >Borrow</button>&nbsp;&nbsp;&nbsp;<div class="text-center"><a href="home.php">Go back</a></div></div>');
					
					if($('#TokensToborrow').val()=="")
					  $("#Borrowing").attr("disabled", "disabled");
				   
				
			  }	 
			   if(liquidity == 0 && checkMembership==false){	
				  
					$('#borrow_wrapper').html('<h3 class="text-center text-info">Your borrow balance is <span id="borrowbalanceUSD"> $0</span></h3><p class="text-center">You need to collateral first to unlock your borrowing power</span>.</p><div class="go-back text-center my-3"><div class="text-center btn btn-info"><a href="deposit.php">Collateral</a></div></div>');
					
					
				$("#Borrowing").attr("disabled", "disabled");
				  
				$("#BorrowDes").attr("disabled", "disabled");
				   
				
			  }	 
			  if(liquidity > 0 && borrowBalance > 0 && balanceOfUnderlying > 0 && checkMembership==true){	
				  $('.borrow_percentage').html(borrowApy.toFixed(2)+' %');
				  $("#repaying").html('Repay');
				  const supplybalanceUSD= (2 *((balanceOfUnderlying * supplyApy)/100))* usd_value;
				  const borrow_limit=(supplybalanceUSD*80)/100;
				  const borrowbalanceUSD= (2 *((borrowBalance * borrowApy)/100))* usd_value;
				  const borrow_limit_used=(borrowbalanceUSD*100)/ borrow_limit;

					$('#borrow_wrapper').html('<h3 class="text-center text-info">Your balance is <span id="borrowbalanceUSD"> $ '+borrowbalanceUSD.toFixed(2)+'</span></h3><p class="text-center">Your balance is <span id="totborrow">'+borrowBalance.toFixed(3)+' '+asset+'</span>.</p><div class="go-back text-center my-3"><button class="btn btn-info"  data-toggle="modal" data-target="#borrowRepay" >Borrow</button>&nbsp;&nbsp;&nbsp;<a href="home.php">Go back</a></div>');
				  $('#borrowbalanceUSD').html('$ '+borrowbalanceUSD.toFixed(2));
				  $('.borrow_limit_used').html(borrow_limit_used.toFixed(2)+' %');
				  $('#totborrow').html(borrowBalance.toFixed(4));
				  $('#currenct_totborrow').html(borrowBalance.toFixed(4)+' '+asset);
				  $('#Borrowing').html('Borrow');
				  if($('#TokensToborrow').val()=="")
					$("#Borrowing").attr("disabled", "disabled");
				}
  

  
				// check Collateral
				 $('#ether-basic-switch').click( async function(){
					
				
				
				if($(this).prop('checked')==true){
						 
				$("#Loading").addClass('show');
	            $("#Loading").show();		 
						 
				var markets = await marketcontract.methods.enterMarkets(arrayMrk).send({from: myAccountAddress});
				console.log(myAccountAddress);
				console.log(markets);
				
				$("#Loading").removeClass('show');
	            $("#Loading").hide();
				
				 }else{
					 
				$("#Loading").addClass('show');
	            $("#Loading").show();	 
					 
				var markets = await marketcontract.methods.exitMarket(mainContractAddress).send({from: myAccountAddress});
				console.log(myAccountAddress);
				console.log(markets);
				$("#Loading").removeClass('show');
	            $("#Loading").hide();				
				 }

				 });
 
				//Tabs
				$('#nav-profile-tab').click(async function(){
				$('#withdrawinputs').show();
				$('#supplyinputs').hide();
				});
				$('#nav-home-tab').click(async function(){
				$('#withdrawinputs').hide();
				$('#supplyinputs').show();
				});
				
				
				$('#borrow-tab').click(async function(){
				$('#repayinputs').hide();
				$('#borrowinputs').show();
				});
				$('#repay-tab').click(async function(){
				$('#repayinputs').show();
				$('#borrowinputs').hide();
				});
				
				
				//popup supply Max
				$('#max_button_addon_supply').click( async function(){
					 if(asset!="" && asset!='ETH' && asset!='cETH'){
						var myWalletUnderlyingBalance = await underlying.methods.balanceOf(myAccountAddress).call() / Math.pow(10, underlyingDecimals);
				 }else{
						var myWalletUnderlyingBalance = web3.utils.fromWei(await web3.eth.getBalance(myAccountAddress));
				 }
					 var newbalance=parseFloat(myWalletUnderlyingBalance).toFixed(4);
					 newbalance=newbalance*97/100;
					 $('#TokensToSupply').val(parseFloat(newbalance).toFixed(4));
					 if(TokensToSupply > myWalletUnderlyingBalance){
					   $('#supplying').html('Supply');
					   $("#supplying").removeAttr("disabled"); 
					}
					
				 });
				 
			//popup withdraw Max
				$('#max_button_addon_withdraw').click( async function(){
					
					 var newbalance=parseFloat(balanceOfUnderlying).toFixed(3);
					 $('#TokensTowithdraw').val(newbalance);
					
				 });
			
			 //popup borrow Max
				$('#max_button_addon_borrow').click( async function(){
					
					const borrowlimit=(liquidity*collateralFactor)/100;
					 var maxborrow=borrowlimit*usd_value;
					 var newbalance=parseFloat(maxborrow).toFixed(4);
					 $('#TokensToborrow').val(maxborrow);
					 
					 if (newbalance>0){
						$("#Borrowing").removeAttr("disabled"); 
						$('#Borrowing').html('Borrow');
				    }
					
					
				 });
				
			//popup repay Max
				$('#max_button_addon_repay').click( async function(){
					 var newbalance=parseFloat(borrowBalance).toFixed(4);
					 $('#TokensTorepay').val(newbalance);
					
				 });
			//popup input validation 
			 $('#TokensToSupply').keyup( async function(){
				 
				 let TokensToSupply=$('#TokensToSupply').val();
				  if(asset!="" && asset!='ETH' && asset!='cETH'){
					  
					var myWalletUnderlyingBalance = await underlying.methods.balanceOf(myAccountAddress).call() / Math.pow(10, underlyingDecimals);
					
				  }else{
					  
					var myWalletUnderlyingBalance = web3.utils.fromWei(await web3.eth.getBalance(myAccountAddress));
				  }
				  
				    var TokensSupply=parseFloat(myWalletUnderlyingBalance-TokensToSupply);
				    var str = TokensToSupply.toString();
					if(TokensToSupply > myWalletUnderlyingBalance){
					 $('#supplying').html('NO FUNDS AVAILABLE');
					 $("#supplying").attr("disabled", "disabled"); 
					}
					else if(TokensToSupply <= 0 || TokensToSupply==""){
					
					 $("#supplying").attr("disabled", "disabled"); 
				  }else if(!str.match(/^[0-9]*([.,][0-9]+)?$/)) {
					  
						$("#supplying").attr("disabled", "disabled"); 
					}
				  else if(Number.isInteger(TokensToSupply)) {
						$("#supplying").removeAttr("disabled");
						$('#supplying').html('Supply');
				  }else {
						$("#supplying").removeAttr("disabled");
						$('#supplying').html('Supply');
				  }
					
				
					
					
				
					
			 });	 
				 
			//popup input validation for withdraw
			
			 $('#TokensTowithdraw').keyup( async function(){
				 
				 let TokensTowithdraw=$('#TokensTowithdraw').val();
				 var str = TokensTowithdraw.toString();
				  
				 var Tokenswithdraw=parseFloat(balanceOfUnderlying-TokensTowithdraw);
					if(TokensTowithdraw > balanceOfUnderlying){
						$('#withdrawing').html('NO FUNDS AVAILABLE');
						$("#withdrawing").attr("disabled", "disabled"); 
					}
					else if(TokensTowithdraw <= 0 || checkMembership==false){
					 $("#withdrawing").attr("disabled", "disabled"); 
				  }else if(!str.match(/^[0-9]*([.,][0-9]+)?$/)) {
					  
						$("#withdrawing").attr("disabled", "disabled"); 
					}else {
						$("#withdrawing").removeAttr("disabled"); 
						$('#withdrawing').html('Withdraw');
				  }
					
				
					
			 });
			 
			 
			 //popup input validation for repay
			
			 $('#TokensTorepay').keyup( async function(){
				 
				 let TokensTorepay=$('#TokensTorepay').val();
				 var str = TokensTorepay.toString();
				// console.log(TokensTorepay+" > "+borrowBalance);
				// console.log(TokensTorepay+" <= "+borrowBalance+" && "+checkMembership+" == false");
				  
				 var Tokensrepay=parseFloat(borrowBalance-TokensTorepay);
					if(TokensTorepay > borrowBalance){
						$('#repaying').html('NO FUNDS AVAILABLE');
						$("#repaying").attr("disabled", "disabled"); 
						
					}else if(TokensTorepay <= 0 || checkMembership==false){
					 $("#repaying").attr("disabled", "disabled"); 
					
				    }else if(!str.match(/^[0-9]*([.,][0-9]+)?$/)) {
					  
						$("#repaying").attr("disabled", "disabled"); 
					}else {
						$("#repaying").removeAttr("disabled"); 
						$('#repaying').html('Repay');
						
				  }
					
				
					
			 });
 	 
			//popup input validation for borrow
			
			 $('#TokensToborrow').keyup( async function(){
				
				 let TokensToborrow=$('#TokensToborrow').val();
				  var str = TokensToborrow.toString();
				  
				 var Tokensborrow=parseFloat(liquidity-TokensToborrow);
				 console.log('Tokensborrow'+Tokensborrow);
				  console.log('borrowbalancepop'+liquidity);
					if(TokensToborrow > liquidity){
						$('#Borrowing').html('NO FUNDS AVAILABLE');
						$("#Borrowing").attr("disabled", "disabled"); 
					}else if(TokensToborrow <= 0 || checkMembership==false){
						$('#Borrowing').html('NO FUNDS AVAILABLE');
					 $("#Borrowing").attr("disabled", "disabled"); 
				    }else if(balanceOfUnderlying <= 0){
						
					 $("#Borrowing").attr("disabled", "disabled"); 
				    }
					else if(!str.match(/^[0-9]*([.,][0-9]+)?$/)) {					  
						$("#Borrowing").attr("disabled", "disabled"); 
					}else {
						$("#Borrowing").removeAttr("disabled"); 
						$('#Borrowing').html('Borrow');
				    }
					
				
					
			 });
 
 
		



 
 
  // approve
 $('#approve').click( async function(){
			
			const underlyingTokensToSupply = 10 * Math.pow(10, underlyingDecimals);
			await underlying.methods.approve(mainContractAddress, underlyingTokensToSupply).send(fromMyWallet);
			$('#checkMembership').show();
			$('#approve').hide();
 });
 
 //faucet-link


 $('.faucet-link').click( async function(){
			
			const underlyingTokensToSupply = 10 * Math.pow(10, underlyingDecimals);
			await underlying.methods.allocateTo(myAccountAddress, underlyingTokensToSupply).send(fromMyWallet);
			
 });
 
 // supply
 $('#supplying').click( async function(){
	 const TokensToSupply=$('#TokensToSupply').val();
  $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="supplyWithdrawLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center"><img src="images/ripple-loader.gif" alt="loading" style="width: 20%;" /></span>');
 // Mint cTokens by supplying underlying tokens to the Compound Protocol
  
  
  console.log('\nSupplying ETH to the protocol as collateral (you will get cETH in return)...\n');
   const underlyingTokensToSupply = 10 * Math.pow(10, underlyingDecimals);
   
   var ethToSupplyAsCollateral = TokensToSupply * Math.pow(10, underlyingDecimals);
   console.log(''+ethToSupplyAsCollateral+' contract "supply" operation successful.');
   // Web3 transaction information, we'll use this for every transaction we'll send
  
	  
  if(asset!="" && asset!='ETH' && asset!='cETH' ){ 
	  
		if(checkallowance==0)
			await underlying.methods.approve(mainContractAddress, underlyingTokensToSupply).send(fromMyWallet);

		console.log('${'+asset+'} contract "Approve" operation successful.');
		console.log('Supplying ${'+asset+'} to the Compound Protocol...');
		console.log('\nSupplying ETH to the protocol as collateral (you will get cETH in return)...\n');
		await myContract.methods.mint(web3.utils.toBN(ethToSupplyAsCollateral.toString()) ).send(fromMyWallet).on("transactionHash", function (hash) {
       $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="supplyWithdrawLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Thank you for supplying! You can check the status at <a href="<?php echo $etherscanTx;?>'+hash+'" target="_blank" style="text-decoration:underline;" >etherscan.io</a></span>');
    })
    .on("receipt", function () {
        console.log("Receipt");
    })
    .on("confirmation", function (hash) {
        
    })
    .on("error", async function (hash) {
        $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="supplyWithdrawLabel">Transaction Error</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Transection fail! </span>');
    });
	  
	  
  }else{
	  await myContract.methods.mint().send({
    from: myAccountAddress,
    gasLimit: web3.utils.toHex(150000),
    gasPrice: web3.utils.toHex(20000000000), // use ethgasstation.info (mainnet only)
    value: web3.utils.toHex(web3.utils.toWei(TokensToSupply.toString(), 'ether'))
  }).on("transactionHash", function (hash) {
       $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="supplyWithdrawLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Thank you for supplying! You can check the status at <a href="<?php echo $etherscanTx;?>'+hash+'" target="_blank" style="text-decoration:underline;" >etherscan.io</a></span>');
    })
    .on("receipt", function () {
        console.log("Receipt");
    })
    .on("confirmation", function (hash) {
        console.log("Confirmed");
		
    })
    .on("error", async function (hash) {
        console.log("Error");
		$('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="supplyWithdrawLabel"> Transaction Error</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center"> Transection fail! </span>');
    });
  }

  

  let cTokenBalance = await myContract.methods.
    balanceOf(myAccountAddress).call() / Math.pow(10, ctokendesimal);
  console.log('My wallet\'s c${asset} Token Balance:', cTokenBalance);

  if(asset!="" && asset!='ETH' && asset!='cETH'){ 
  let underlyingBalance = await underlying.methods.balanceOf(myAccountAddress).call();
  underlyingBalance = underlyingBalance / Math.pow(10, underlyingDecimals);
  console.log("My wallet's ${asset} Token Balance:", underlyingBalance, '\n');
  }
  let erCurrent = await myContract.methods.exchangeRateCurrent().call();
  let exchangeRate = erCurrent / Math.pow(10, 18 + underlyingDecimals - 8);
  console.log("Current exchange rate from c${"+asset+"} to ${"+asset+"}:", exchangeRate, '\n');

 const balanceOfUnderlying = web3.utils.toBN(await myContract.methods.balanceOfUnderlying(myAccountAddress).call()) / Math.pow(10, underlyingDecimals);
 console.log('balanceOfUnderlying'+balanceOfUnderlying);	
 $('.supply_blalnce').html( balanceOfUnderlying.toFixed(3)+' '+asset);

  if(balanceOfUnderlying > 0){	
			  
  console.log("(2 *(("+balanceOfUnderlying+" * "+supplyApy+")/100))* "+usd_value);
  const supplybalanceUSD= (2 *((balanceOfUnderlying * supplyApy)/100))* usd_value;
  const borrow_limit=(supplybalanceUSD*80)/100;
 
  $('#supplybalanceUSD').html('$ '+supplybalanceUSD.toFixed(5));
  let myWalletEthBalance = web3.utils.fromWei(await web3.eth.getBalance(myAccountAddress));
  let myWalletCEthBalance = await myContract.methods.balanceOf(myAccountAddress).call() /  Math.pow(10, ctokendesimal);
  if(asset!="" && asset!='ETH' && asset!='cETH'){ 
	var myWalletUnderlyingBalance = await underlying.methods.balanceOf(myAccountAddress).call() / Math.pow(10, underlyingDecimals); // if you supply in compound otherwise it show you 0.
	console.log("My Wallet's  ${"+asset+"} Balance:", myWalletUnderlyingBalance);
	$('.walletbalance').html(myWalletUnderlyingBalance.toFixed(3)+''+asset);
	myWalletUnderlyingBalance=(myWalletUnderlyingBalance*97)/100;
	$('.walletbalancepop').html(myWalletUnderlyingBalance.toFixed(3)+''+asset);

	 if(myWalletUnderlyingBalance > 0 )
			$('#supplying').html('Supply');
	$('.borrow_blalnce').html(myWalletUnderlyingBalance.toFixed(3)+' '+asset);
}else{
	let myWalletUnderlyingBalance = await myContract.methods.balanceOf(myAccountAddress).call() / Math.pow(10, ctokendesimal); // if you supply in compound otherwise it show you 0.
	console.log("My Wallet's  ${"+asset+"} Balance:", myWalletUnderlyingBalance);
	$('.walletbalance').html(parseFloat(myWalletEthBalance).toFixed(3)+' '+asset);
	myWalletEthBalance=(myWalletEthBalance*97)/100;
	$('.walletbalancepop').html(parseFloat(myWalletEthBalance).toFixed(3)+' '+asset);
	 if(myWalletUnderlyingBalance > 0 )
			$('#supplying').html('Supply');
		   // $("#supplying").attr("disabled", "disabled"); 
	$('.borrow_blalnce').html(myWalletUnderlyingBalance.toFixed(3)+' '+asset);
}
  
  }
  
  
 });
 
 
 
 // Borrow
  $('#Borrowing').click( async function(){
  const ethToBorrow = $('#TokensToborrow').val();	 
  $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="borrowRepayLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center"><img src="images/ripple-loader.gif" alt="loading" style="width: 20%;" /></span>');	 

  let underlyingAsCollateral = 15;

  // Convert the token amount to a scaled up number, then a string.
  underlyingAsCollateral = underlyingAsCollateral * Math.pow(10, underlyingDecimals);
  underlyingAsCollateral = underlyingAsCollateral.toString();

  
  if(checkMembership!=false && liquidity > 0){
  
  console.log('\nNow attempting to borrow ${ethToBorrow} ETH...');
  await myContract.methods.borrow(web3.utils.toWei(ethToBorrow.toString(), 'ether')).send(fromMyWallet).on("transactionHash", function (hash) {
        $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="borrowRepayLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Thank you for borrowing! You can check the status at <a href="<?php echo $etherscanTx;?>'+hash+'" target="_blank" style="text-decoration:underline;" >etherscan.io</a></span>');
    })
    .on("receipt", function () {
        console.log("Receipt");
    })
    .on("confirmation", function (hash) {
       
    })
    .on("error", async function (hash) {
         $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="borrowRepayLabel"> Transaction Error</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Transection fail! </span>');
    });
	
  console.log('\nNow attempting to borrow ${ethToBorrow} ETH...successful');	
  
  }
  
 });
 
  // withdraw

  $('#withdrawing').click( async function(){

  const ethTowithdrow = $('#TokensTowithdraw').val();
  
  $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="supplyWithdrawLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center"><img src="images/ripple-loader.gif" style="width: 20%;" alt="loading" /></span>');	 
  if(checkMembership!=false && balanceOfUnderlying > 0){
	  
  
  console.log('\nNow attempting to borrow ${'+ethTowithdrow+'} ETH...');
  if(asset!="" && asset!='ETH' && asset!='cETH'){
	var withdrowResult = await myContract.methods.redeem(web3.utils.toWei(ethTowithdrow.toString(), 'ether')).send(fromMyWallet).on("transactionHash", function (hash) {
       $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="supplyWithdrawLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Thank you for withdrawing! You can check the status at <a href="<?php echo $etherscanTx;?>'+hash+'" target="_blank" style="text-decoration:underline;" >etherscan.io</a></span>');
    })
    .on("receipt", function () {
        console.log("Receipt");
    })
    .on("confirmation", function (hash) {
         
    })
    .on("error", async function (hash) {
        $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="borrowRepayLabel"> Transaction Error</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Transection fail!</span>');
    });
  }else{
	var withdrowResult = await myContract.methods.redeemUnderlying(web3.utils.toWei(ethTowithdrow.toString(), 'ether')).send(fromMyWallet).on("transactionHash", function (hash) {
        $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="supplyWithdrawLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Thank you for withdrawing! You can check the status at <a href="<?php echo $etherscanTx;?>'+hash+'" target="_blank" style="text-decoration:underline;" >etherscan.io</a></span>');
    })
    .on("receipt", function () {
        console.log("Receipt");
    })
    .on("confirmation", function (hash) {
      console.log("confirmation");
    })
    .on("error", async function (hash) {
        $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="borrowRepayLabel"> Transaction Error</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Transection fail! </span>');
    }); 
  }
  
  }
  
 });
 
 
  // repay

  $('#repaying').click( async function(){
   
   const ethTorepay = $('#TokensTorepay').val();
   $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="borrowRepayLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center"><img src="images/ripple-loader.gif" style="width: 20%;" alt="loading" /></span>');	
  
  if(checkMembership!=false && borrowBalance > 0){
	  
  
  console.log('\nNow attempting to repay ${'+ethTorepay+'} ETH...');
  if(asset!="" && asset!='ETH' && asset!='cETH'){
	var repayResult = await myContract.methods.repayBorrow(web3.utils.toWei(ethTorepay.toString(), 'ether')).send(fromMyWallet).on("transactionHash", function (hash) {
		 $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="borrowRepayLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Thank you for repaying! You can check the status at <a href="<?php echo $etherscanTx;?>'+hash+'" target="_blank" style="text-decoration:underline;" >etherscan.io</a></span>');
      
    })
    .on("receipt", function () {
        console.log("Receipt");
    })
    .on("confirmation", function (hash) {
        console.log("confirmation");
    })
    .on("error", async function (hash) {
         $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="borrowRepayLabel"> Transaction Error</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Transection fail!</span>');
    });
  }else{
	var repayResult = await myContract.methods.repayBorrow().send({
    from: myAccountAddress,
    gasLimit: web3.utils.toHex(500000),
	gasPrice: web3.utils.toHex(1000000000), // use ethgasstation.info (mainnet only)
    value: web3.utils.toWei(ethTorepay.toString(), 'ether')
    }).on("transactionHash", function (hash) {
       $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="borrowRepayLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Thank you for repaying! You can check the status at <a href="<?php echo $etherscanTx;?>'+hash+'" target="_blank" style="text-decoration:underline;" >etherscan.io</a></span>');
    })
    .on("receipt", function () {
        console.log("Receipt");
    })
    .on("confirmation", function (hash) {
        
    })
    .on("error", async function (hash) {
         $('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="borrowRepayLabel"> Transaction Error</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Transection fail! </span>');
    }); 
  }
 
  }
  
 });

$('.close').click( async function(){ $('#supplyWithdraw').hide();   $('#borrowRepay').hide();});

// Assets loop
var ContractTotalReserves=0;
var arrayABI=$('#arrayABI').val();
var ABI=$('#ABI').val();
var assetsborrow=false;
$.cookie('assetsborrow', 'false');
if(arrayABI){
arrayABI=arrayABI.split(',');
var totassets=arrayABI.length;

if(ABI){
	ABI=ABI.split(',');

}

for (var i=0;i<totassets;i++){
	
					var contractABI=$('#contractABI'+arrayABI[i]).val();
					var ContractAddress=$('#ContractAddress'+arrayABI[i]).val();
					var ContractUSD=$('#ContractUSD'+arrayABI[i]).val();
					const abi = JSON.parse(contractABI);
					const Token= new web3.eth.Contract(abi, ContractAddress, {
						from: myAccountAddress, // default from address
					});

					const supplyRatePerBlockBAT = await Token.methods.supplyRatePerBlock().call();
					const borrowRatePerBlockBAT = await Token.methods.borrowRatePerBlock().call();
					const supplyApyBAT = (((Math.pow((supplyRatePerBlockBAT / ethMantissa * blocksPerDay) + 1, daysPerYear - 1))) - 1) * 100;
					const borrowApyBAT = (((Math.pow((borrowRatePerBlockBAT / ethMantissa * blocksPerDay) + 1, daysPerYear - 1))) - 1) * 100; 
					
					
					
					const borrowBalanceStoredBAT= await Token.methods.borrowBalanceStored(myAccountAddress).call({from: myAccountAddress});
			        const borrowBalanceBAT=borrowBalanceStoredBAT/Math.pow(10, underlyingDecimals);
					const borrowbalanceUSDBAT= (2 *((borrowBalanceBAT * borrowApyBAT)/100))* ContractUSD;
					
					const totalContractBlance=await Token.methods.getCash().call();
					console.log("totalContractBlance/8"+totalContractBlance/1000000000000000000);
					console.log(arrayABI[i]);
					console.log(ABI[i]);
					var underlyingContractAddress =$('#assetContractAddress'+ABI[i]).val();
				    var erc20AbiJson = $('#assetcontractABI'+ABI[i]).val();
					
					console.log(underlyingContractAddress);
					console.log(erc20AbiJson);
					
					var TokentotR = await Token.methods.totalReserves().call()/1e18;
					var TokentotResUsd=TokentotR*ContractUSD;
					console.log("Market "+arrayABI[i]+" Size $"+TokentotResUsd);
					$('.marketsize'+arrayABI[i]).html(TokentotResUsd+' USD');
					
					ContractTotalReserves=ContractTotalReserves+TokentotResUsd;
					$('.ContractTotalReserves').html(ContractTotalReserves+" USD");
					const assetabi = JSON.parse(erc20AbiJson);
					const underlying = new web3.eth.Contract(assetabi, underlyingContractAddress);  
					if(arrayABI[i]!="" && arrayABI[i]!='ETH' && arrayABI[i]!='cETH'){ 
						var myWalletUnderlyingBalance = await underlying.methods.balanceOf(myAccountAddress).call() / Math.pow(10, underlyingDecimals); // if you supply in 
						$('.supply_balance'+arrayABI[i]).html(myWalletUnderlyingBalance.toFixed(3)+' '+arrayABI[i]);

					}else{
						let myWalletUnderlyingBalance = await Token.methods.balanceOf(myAccountAddress).call() / Math.pow(10, ctokendesimal); // if you supply in compound 
						$('.supply_balance'+arrayABI[i]).html(parseFloat(myWalletUnderlyingBalance).toFixed(3)+' '+arrayABI[i]);
						
					}
					
					const balanceOfUnderlying = web3.utils.toBN(await Token.methods.balanceOfUnderlying(myAccountAddress).call()) / Math.pow(10, underlyingDecimals);
				    console.log('balanceOfUnderlying'+balanceOfUnderlying);	
				    $('.supply_balance_Anonyme'+arrayABI[i]).html( balanceOfUnderlying.toFixed(3)+' '+arrayABI[i]);
					
					
					$('.totalborrow'+arrayABI[i]).html(borrowbalanceUSDBAT.toFixed(2)+' USD');
					$('.supply_percentage'+arrayABI[i]).html(supplyApyBAT.toFixed(2)+' %');

					$('.borrow_percentage'+arrayABI[i]).html(borrowApyBAT.toFixed(2)+' %');
					
					if(arrayABI[i]!='cETH'){
						if(borrowBalanceStoredBAT > 0){
							//document.cookie = "assetsborrow=true; expires=''; path=/";
							$.cookie('assetsborrow', 'true');
						}
					}
					assetsborrow=$.cookie("assetsborrow");
					if(arrayABI[i]=='cETH' || balanceOfUnderlying > 0){
						if(assetsborrow==true || borrowBalanceStoredBAT==0){
							if(liquidity>0)
								$("."+arrayABI[i]).hide();
						
					   }
					}
					const supplybalanceUSD= (2 *((balanceOfUnderlying * supplyApyBAT)/100))* ContractUSD;
				    const borrow_limit=(supplybalanceUSD*80)/100;
					console.log("(2 *(("+balanceOfUnderlying+" * "+supplyApyBAT+")/100))* "+ContractUSD);
					$('.borrow_limit'+arrayABI[i]).html(' $'+borrow_limit.toFixed(4));
				
					console.log(arrayABI[i]+" "+balanceOfUnderlying+" "+assetsborrow+" "+borrowBalanceStoredBAT);

					
}


}

// home page pie chart
 var chart = new CanvasJS.Chart("chartContainer", {
	theme: "dark2",
	exportFileName: "Doughnut Chart",
	exportEnabled: false,
	animationEnabled: true,
	title:{
		text: ""
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "doughnut",
		innerRadius: 30,
		showInLegend: true,
		toolTipContent: "<b>{name}</b>: ${y} (#percent%)",
		indexLabel: false,
		dataPoints: [
			{ y: totC, name: "Available Liquidity" },
			{ y: totB, name: "Total Borrowed"}
			
		]
	}]
});
chart.render();

function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();
}


            }
          });
        } catch (error) {
            // User denied account access...
        }
    }
   
// Legacy dapp browsers...
    else if (window.web3) {
    alert('legacy');
    }
    // Non-dapp browsers...
    else {

        alert("System is not connecting to the user wallet. Please try again later!");
    }

window.ethereum.on('accountsChanged', function (accounts) {
  location.reload();
})

window.ethereum.on('networkChanged', function (networkId) {
  location.reload();
})





  });
  });
  function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
		$('#go-back').click(function(){
	     
	      location.href='home.php';
       });
	   
	   $('.depositnow').click(function(){
	     
	      location.href='deposit.php';
       });
	   
	function deposit(currency){
	      document.cookie = "currency="+currency+"; expires=''; path=/";
	      location.href='deposit.php';
       }
	   
	   function borrow(currency){
	      document.cookie = "currency="+currency+"; expires=''; path=/";
	      location.href='borrow.php';
       }   
	   
window.onload = function () {

}
</script>

<!-- modal -->

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#supplyWithdraw">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="supplyWithdraw" tabindex="-1" aria-labelledby="supplyWithdrawLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="supplyWithdrawLabel"><?=$currency_full_name;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="max-value" >
          <div class="input-group mb-3" class="active" id="supplyinputs" >
              <input style="font-size: 60px;text-align: center;padding: 30px;border: none;height: calc(2.25rem + 24px);" id="TokensToSupply" type="text" class="form-control" placeholder="0" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="max_button_addon_supply" style="border-radius: 4px;height: 36px; margin: auto 0;">MAX</button>
          </div>
		  <div class="input-group mb-3" id="withdrawinputs" style="display:none" >
              <input style="font-size: 59px;text-align: center;padding: 30px;border: none;" id="TokensTowithdraw" type="text" class="form-control" placeholder="0" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="max_button_addon_withdraw">MAX</button>
          </div>
        </div>
        <div class="tabs-form">
          
          <nav class="mb-3">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Supply</a>
              <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Withdraw</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="row">
                <div class="col-sm-12">
                  <a href="">Supply rates<i class="fa fa-external-link ml-1" aria-hidden="true"></i></a>
                </div>
              </div>  
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <img src="images/logo-d.png" style="width: 16px; margin-right: 5px;"><span>Supply APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span class="supply_percentage" >0.01%</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <img src="images/logo-d.png" style="width: 16px; margin-right: 5px;"><span>Distribution APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span>-</span>
                </div>
              </div>
			  
			  <div id="checkMembership" >
              <div class="row">
                <div class="col-sm-12">
                  <a href="">Borrow Limit</a>
                </div>
              </div>  
              <div class="row border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span>Borrow Limit</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span  ></span><i class="fa fa-arrow-right mr-1" aria-hidden="true"></i><span class="borrow_limit" >$0</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span>Borrow Limit Used</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span class="borrow_limit_used" >0%</span>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <button class="btn btn-secondary btn-block" id="supplying" >NO FUNDS AVAILABLE</button>
				  
                </div>
              </div>
			 </div>
			  
			 <div id="approve" style="display:none" >	  
			  <div class="row mb-3">
                <div class="col-sm-12">
                  <button class="btn btn-secondary btn-block" id="approve" >Enable</button>

                </div>
               </div>
			  </div>
			 
               <div class="row ">
                <div class="col-sm-12">
                  <span>Wallet Balance</span>
                  <span style="float: right;" class="walletbalancepop" >0 ETH</span>
				  <a class="faucet-link" style="display: none;" >Faucet</a>
                </div>
              </div>  
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="row">
                <div class="col-sm-12">
                  <a href="">Supply rates<i class="fa fa-external-link ml-1" aria-hidden="true"></i></a>
                </div>
              </div>  
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <img src="images/logo-d.png" style="width: 16px; margin-right: 5px;"><span>Supply APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span class="supply_percentage">0.01%</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <img src="images/logo-d.png" style="width: 16px; margin-right: 5px;"><span>Distribution APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span>-</span>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <a href="">Borrow Limit</a>
                </div>
              </div>  
              <div class="row border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span>Borrow Balance</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span></span><i class="fa fa-arrow-right mr-1" aria-hidden="true"></i><span class="borrow_limit">$0</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span>Borrow Limit Used</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <span class="borrow_limit_used" >0%</span>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <button class="btn btn-secondary btn-block"  id="withdrawing" >NO BALANCE TO WITHDRAW</button>
				  
                </div>
              </div>
              <div class="row ">
                <div class="col-sm-12">
                  <span>Currenctly Supplying</span>
                  <span style="float: right;" class="supply_blalnce" >0 ETH</span>
				  <a class="faucet-link" style="display: none;">Faucet</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!-- modal -->
<!-- borrow modal -->

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#supplyWithdraw">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="borrowRepay" tabindex="-1" aria-labelledby="borrowRepayLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="supplyWithdrawLabel"><?=$currency_full_name;?></h5>
        <button type="button" class="btn-close" class="close" data-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="max-value">
          <div class="input-group mb-3"  id="borrowinputs">
              <input style="font-size: 59px;text-align: center;padding: 30px;border: none;" id="TokensToborrow" type="text" class="form-control" placeholder="0" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="max_button_addon_borrow">MAX</button>
            </div>
        </div>
		<div class="input-group mb-3"  id="repayinputs" style="display:none" >
              <input style="font-size: 59px;text-align: center;padding: 30px;border: none;" id="TokensTorepay" type="text" class="form-control" placeholder="0" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="max_button_addon_repay">MAX</button>
            </div>
      
        <div class="tabs-form">
          
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-link active" id="borrow-tab" data-toggle="tab" href="#borrow" role="tab" aria-controls="borrow" aria-selected="true">Borrow</a>
              <a class="nav-link" id="repay-tab" data-toggle="tab" href="#repay" role="tab" aria-controls="repay" aria-selected="false">Repay</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
        
            <div class="tab-pane fade  show active" id="borrow" role="tabpanel" aria-labelledby="borrow-tab">
              <div class="row">
                <div class="col-sm-12">
                  <a href="">Borrow rates<i class="fa fa-external-link ml-1" aria-hidden="true"></i></a>
                </div>
              </div>  
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <img src="images/logo-d.png" style="width: 16px; margin-left: 5px;"><span>Borrow APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span class="borrow_percentage" >0%</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <img src="images/logo-d.png" style="width: 16px; margin-left: 5px;"><span>Distribution APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>-</span>
                </div>
              </div>
              <div class="row mb-3 ">
                <div class="col-sm-12">
                  <a href="">Borrow Limit</a>
                </div>
              </div>  
              <div class="row border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>Borrow Limit</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span></span><i class="fa fa-arrow-right mr-1" aria-hidden="true"></i><span class="borrow_limit" >$0</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>Borrow Limit Used</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span class="borrow_limit_used" >0%</span>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <button class="btn btn-secondary btn-block" id="Borrowing"  >NO BALANCE TO BORROW</button>
                </div>
              </div>
              <div class="row ">
                <div class="col-sm-12">
                  <span>Currenctly Borrowing</span>
                  <span style="float: right;" id="currenct_totborrow" >0 ETH</span>
                </div>
              </div>
            </div>
			<div class="tab-pane fade" id="repay" role="tabpanel" aria-labelledby="repay-tab">
              <div class="row">
                <div class="col-sm-12">
                  <a href="">Repay rates<i class="fa fa-external-link ml-1" aria-hidden="true"></i></a>
                </div>
              </div>  
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <img src="images/logo-d.png" style="width: 16px; margin-left: 5px;"><span>Borrow APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span class="borrow_percentage" >0.01%</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <img src="images/logo-d.png" style="width: 16px; margin-left: 5px;"><span>Distribution APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>-</span>
                </div>
              </div>
              <div class="row mb-3 ">
                <div class="col-sm-12">
                  <a href="">Borrow Limit</a>
                </div>
              </div>  
              <div class="row border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>Borrow Limit</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span  ></span><i class="fa fa-arrow-right mr-1" aria-hidden="true"></i><span class="borrow_limit" >$0</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>Borrow Limit Used</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span class="borrow_limit_used" >0%</span>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <button class="btn btn-secondary btn-block" id="repaying" >NO FUNDS AVAILABLE</button>
                </div>
              </div>
              <div class="row ">
                <div class="col-sm-12">
                  <span>Wallet Balance</span>
                  <span style="float: right;" class="walletbalancepop" >0 ETH</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="Loading" tabindex="-1" aria-labelledby="LoadingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header"><h5 class="modal-title" id="supplyWithdrawLabel">Please Wait...</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center"><img src="images/ripple-loader.gif" style="width: 20%;" alt="loading" /></span>
    </div>
  </div>
</div>

<!-- modal -->


<div class="modal fade show" id="open_settings_dialog_pop" tabindex="-1" aria-labelledby="to_token_popLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md modal-dialog-top">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="to_token_popLabel">Transaction Settings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12 tr_tlrnce">
                        <span>Slippage tolerance</span> &nbsp; <a href="javascript:;" title="Your transaction will revert if the price changes unfavorably by more than this percentage."><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></a>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-primary w-100 transactionPercent active trx_perc_0_1" onclick="transactionPercent(this, 0.1);">0.1%</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary w-100 transactionPercent trx_perc_0_5" onclick="transactionPercent(this, 0.5);">0.5%</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary w-100 transactionPercent trx_perc_1" onclick="transactionPercent(this, 1);">1%</button>
                            </div>
                            <div class="col-md-3 slip_tlrance_main">
                                <span id="slip_warning" aria-label="warning">⚠️</span>
                                <input type="text" class="form-control" name="slip_tlrance_txt" id="slip_tlrance_txt" value="<?php echo $slip_tlrance_txt; ?>" placeholder="0.10"><span>%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-12 y_tr_mfail">
                        <?php if ($slip_tlrance_txt <= 0.1) { ?>
                            <span>Your transaction may fail</span>
                        <?php } else if ($slip_tlrance_txt > 5) { ?>
                            <span>Your transaction may frontrun</span>
                        <?php } else { ?>
                            <span></span>
                        <?php } ?>
                    </div>

                    <div class="col-md-12 mt-2 tr_ddline">
                        <span>Transaction deadline</span> &nbsp; <a href="javascript:;" title="Your transaction will revert if the price changes unfavorably by more than this percentage."><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-2">
                        <div class="txn_ddline_main">
                            <input type="text" class="form-control" name="txn_ddline_txt" id="txn_ddline_txt" value="20" placeholder="50"><span>minutes</span>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-12 inter_stng">
                        <div class="mt-2"><strong>Interface Settings</strong></div>
                    </div>
                </div>
                <div class="row mt-2 to_ex_md_main">
                    <div class="col-md-6 to_ex_md_left">
                        <span>Toggle Expert Mode</span> &nbsp; <a href="javascript:;" title="Bypasses confirmation modals and allows high slippage trades. Use at your own risk."><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></a>
                    </div>
                    <div class="col-md-6 to_ex_md_right text-right pull-right">
                        <label class="switch">
                            <input type="checkbox" id="to_ex_md_chk" <?php
                            if ($toggle_expert_mode != '') {
                                echo 'checked';
                            }
                            ?> >
                            <div class="slider"></div>
                        </label>
                    </div>
                </div>
                <div class="row mt-2 dis_mult_main">
                    <div class="col-md-6 dis_mult_left">
                        <span>Disable Multihops</span> &nbsp; <a href="javascript:;" title="Bypasses confirmation modals and allows high slippage trades. Use at your own risk."><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></a>
                    </div>
                    <div class="col-md-6 dis_mult_right text-right pull-right">
                        <label class="switch">
                            <input type="checkbox" id="dis_mult_chk" <?php
                            if ($disable_multihops != '') {
                                echo 'checked';
                            }
                            ?>>
                            <div class="slider"></div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/canvasjs.min.js"></script>
<script type="text/javascript"
 src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
 <style>
 .faucet-link {
    text-align: center;
    max-width: 100%;
    display: block;
    color: #00c3ff;
	cursor: pointer;
}
 </style>
</body></html>
