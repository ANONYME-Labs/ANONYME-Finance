<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#from_token_pop">
  Launch demo modal
</button> -->

<!-- Modal 3 -->

<?php include('config.php'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">

<div class="modal fade" id="coin_option3" tabindex="-1" aria-labelledby="coin_option3Label" aria-hidden="true">

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
        <h5 class="modal-title" id="supplyWithdrawLabel">Ether</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="max-value">
          <div class="input-group mb-3">
              <input style="font-size: 59px;text-align: center;padding: 30px;border: none;" id="TokensToSupply" type="text" class="form-control" placeholder="0" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="max_button_addon">MAX</button>
            </div>
        </div>
        <div class="tabs-form">
          
          <nav>
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <img src="images/logo-d.png" style="width: 16px; margin-right: 5px;"><span>Supply APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span class="supply_percentage" >0.01%</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <img src="images/logo-d.png" style="width: 16px; margin-right: 5px;"><span>Distribution APY</span>
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
                  <span  >0.01%</span><i class="fa fa-arrow-right ml-1" aria-hidden="true"></i><span class="borrow_limit" >$0</span>
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
                  <button class="btn btn-secondary btn-block" id="supplying" >NO FUNDS AVAILABLE</button>
                </div>
              </div>
              <div class="row ">
                <div class="col-sm-12">
                  <span>Wallet Balance</span>
                  <span style="float: right;" class="walletbalance" >0 ETH</span>
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <img src="images/logo-d.png" style="width: 16px; margin-right: 5px;"><span>Supply APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>0.01%</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <img src="images/logo-d.png" style="width: 16px; margin-right: 5px;"><span>Distribution APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>0.07%</span>
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
                  <span>0.01%</span><i class="fa fa-arrow-right ml-1" aria-hidden="true"></i><span>$547.21k</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>Borrow Limit Used</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>0%</span>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <button class="btn btn-secondary btn-block" id="supplying" >NO BALANCE TO WITHDRAW</button>
                </div>
              </div>
              <div class="row ">
                <div class="col-sm-12">
                  <span>Currenctly Supplying</span>
                  <span style="float: right;">0ETH</span>
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

        console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
    }
	
	var userWallet=getCookie('userWallet');
  	//alert(userWallet);

  	if(userWallet!=""){
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

				var asset='<?=$_COOKIE['currency']?>';
				
				var bal = await web3.eth.getBalance(myAccountAddress);
				var accbal = ( bal / 1000000000000000000 );
				
				
				

				var userWallet=getCookie('userWallet');
				if(userWallet!=""){
					var vWallet=userWallet.substring(0, 6) + '...' + userWallet.substring(userWallet.length - 6, userWallet.length);
					$(".btnwalletaddress").html(vWallet);
				}
				
				
				
				
				//main contract
				var arrayABI = <?=$mainContractABI; ?>;
				var mainContractAddress = "<?=$mainContractAddress; ?>";
				var myContract = new web3.eth.Contract(arrayABI, mainContractAddress, {
					from: myAccountAddress, // default from address
				});
				console.log(mainContractAddress);
				
				//comptroller contract
				var comptrollerAbi =<?=$comptrollerABI; ?>;
				var comptrollerAddress = "<?=$comptrollerAddress; ?>";
				

				//market contract
				var marketAbi =<?=$marketABI; ?>;
				var marketAddress = "<?=$marketAddress; ?>";
				
				//Assets contract
				if(asset!="" && asset!='ETH' && asset!='cETH'){ 
				var underlyingContractAddress ='<?=$assetsContractAddress; ?>';
				var erc20AbiJson = <?=$assetsContractABI; ?>;
				}
				

				//price contract
				const priceFeedAddress = '';
				const priceFeedAbi = '';
				//const priceFeed = new web3.eth.Contract(priceFeedAbi, priceFeedAddress);

// checkMembership for allowed user assets to enter compound market
var marketcontract = new web3.eth.Contract(marketAbi, comptrollerAddress,{
					from: myAccountAddress, // default from address
				});
console.log(marketcontract);
var checkMembership = await marketcontract.methods.checkMembership(myAccountAddress,mainContractAddress).call({from: myAccountAddress});
console.log(checkMembership); 
 $('#ether-basic-switch').attr('checked', checkMembership);
  
 









var totalSupply = await myContract.methods.totalSupply().call({from: myAccountAddress});
console.log(totalSupply/1000000000000000000);
console.log('totalSupply');




const ethMantissa = 1e18;
const blocksPerDay = 4 * 60 * 24;
const daysPerYear = 365;

const cToken = new web3.eth.Contract(arrayABI, mainContractAddress);
const supplyRatePerBlock = await myContract.methods.supplyRatePerBlock().call();
const borrowRatePerBlock = await myContract.methods.borrowRatePerBlock().call();
const supplyApy = (Math.pow( 1 + (5760 * supplyRatePerBlock) / ethMantissa ,daysPerYear) - 1)*100;
const borrowApy = (Math.pow( 1 + (5760 * borrowRatePerBlock) / ethMantissa ,daysPerYear) - 1)*100;

const compounding_formula = Math.pow( 1 + (5760 * supplyRatePerBlock) / ethMantissa ,daysPerYear) - 1;
  let exchangeRateCurrent = await myContract.methods.exchangeRateCurrent().call();
  
  exchangeRateCurrent = exchangeRateCurrent / Math.pow(10, 18 + 18 - 8);
  console.log("Current exchange rate from cETH to ETH:", exchangeRateCurrent, '\n');

  

 
const underlyingDecimals = <?=$underlaying_desimal; ?>; // Number of decimals defined in this ERC20 token's contract
            const mantissa = 18 + parseInt(underlyingDecimals) - 8;
		
            let oneCTokenInUnderlying = exchangeRateCurrent / Math.pow(10, mantissa);
            const totalSupplyScaled = (totalSupply) / Math.pow(10, 8) ;
	 oneCTokenInUnderlying = exchangeRateCurrent / (1 * 10 ^ (18 + underlyingDecimals - 8));
   console.log('totalSupplyScaled'+totalSupplyScaled);
   console.log('oneCTokenInUnderlying'+oneCTokenInUnderlying);
console.log('compounding_formula'+compounding_formula);
console.log('supplyRatePerBlock'+supplyRatePerBlock);
console.log('borrowRatePerBlock'+borrowRatePerBlock);
console.log('totalSupplyScaled'+totalSupplyScaled);
console.log('new'+5760 * supplyRatePerBlock / 1e18);


$('.supply_percentage').html(supplyApy.toFixed(2)+' %');
$('.supply_percentage_mo').html(supplyApy.toFixed(2)+' %');

$('.borrow_percentage').html(borrowApy.toFixed(2)+' %');
$('.borrow_percentage_mo').html(borrowApy.toFixed(2)+' %');



	/* Assets loop
var arrayABI=$('#arrayABI').val();
if(arrayABI!=""){
arrayABI=arrayABI.split(',');
var totassets=arrayABI.length;

for (var i=0;i<totassets;i++){
	
					var contractABI=$('#contractABI'+arrayABI[i]).val();
					var ContractAddress=$('#ContractAddress'+arrayABI[i]).val();
					const abi = JSON.parse(contractABI);
					
					

					

					
					
					const Token= new web3.eth.Contract(abi, ContractAddress, {
						from: myAccountAddress, // default from address
					});

					var approveamount = 1/1e18;
                    var checkMembership = await Token.methods.approve(myAccountAddress,approveamount).send();
					
					var Assetsbal = await Token.methods.balanceOf(myAccountAddress).call()/ 1e18;
					console.log('Assetsbal'+Assetsbal);
					
					$('#CurrentAssetsBAL'+arrayABI[i]).html(Assetsbal+' '+arrayABI[i]);
					/*const supplyRatePerBlockBAT = await Token.methods.supplyRatePerBlock().call();
					const borrowRatePerBlockBAT = await Token.methods.borrowRatePerBlock().call();
					const supplyApyBAT = (((Math.pow((supplyRatePerBlockBAT / ethMantissa * blocksPerDay) + 1, daysPerYear - 1))) - 1) * 100;
					const borrowApyBAT = (((Math.pow((borrowRatePerBlockBAT / ethMantissa * blocksPerDay) + 1, daysPerYear - 1))) - 1) * 100; 
					
					$('.supply_percentage'+arrayABI[i]).html(supplyApyBAT.toFixed(2)+' %');

					$('.borrow_percentage'+arrayABI[i]).html(borrowApyBAT.toFixed(2)+' %');
					
					$('.supply_percentage'+arrayABI[i]).html('13 %');

					$('.borrow_percentage'+arrayABI[i]).html('12.00 %');
			

					
}
}

 
*/
 
//Assets instance 
if(asset!="" && asset!='ETH' && asset!='cETH'){ 
console.log('erc20AbiJson '+erc20AbiJson);
console.log('underlyingContractAddress '+underlyingContractAddress);
var underlying = new web3.eth.Contract(erc20AbiJson, underlyingContractAddress);  
console.log('underlying '+underlying); 
var daibalance = await underlying.methods.balanceOf(myAccountAddress).call() ;
							console.log('Dai '+daibalance);
}
 


const logBalances = () => {
  return new Promise(async (resolve, reject) => {
    let myWalletEthBalance = web3.utils.fromWei(await web3.eth.getBalance(myAccountAddress));
    let myWalletCEthBalance = await myContract.methods.balanceOf(myAccountAddress).call() / 1e8;
	if(asset!="" && asset!='ETH' && asset!='cETH'){ 
		let myWalletUnderlyingBalance = await underlying.methods.balanceOf(myAccountAddress).call() / Math.pow(10, underlyingDecimals); // if you supply in compound otherwise it show you 0.
		console.log("My Wallet's  ${"+asset+"} Balance:", myWalletUnderlyingBalance);
		$('.walletbalance').html(myWalletUnderlyingBalance.toFixed(3)+''+asset);

		 if(myWalletUnderlyingBalance > 0.00 )
				$('#supplying').html('Supply');
		$('.borrow_blalnce').html(myWalletUnderlyingBalance.toFixed(3)+' '+asset);
	}else{
		let myWalletUnderlyingBalance = await myContract.methods.balanceOf(myAccountAddress).call() / Math.pow(10, 8); // if you supply in compound otherwise it show you 0.
		console.log("My Wallet's  ${"+asset+"} Balance:", myWalletUnderlyingBalance);
		$('.walletbalance').html(myWalletEthBalance+''+asset);
		 if(myWalletUnderlyingBalance > 0.00 )
				$('#supplying').html('Supply');
		 $("#supplying").attr("disabled", "disabled"); 
		$('.borrow_blalnce').html(myWalletUnderlyingBalance.toFixed(3)+' '+asset);
	}
	 $("#supplying").attr("disabled", "disabled"); 
    console.log("My Wallet's  ETH Balance:", myWalletEthBalance);
    console.log("My Wallet's cETH Balance:", myWalletCEthBalance);
    

    resolve();
  });
};  
 
 $('#max_button_addon').click( async function(){
	 let myWalletUnderlyingBalance = await underlying.methods.balanceOf(myAccountAddress).call() / Math.pow(10, underlyingDecimals);
	 $('#TokensToSupply').val(myWalletUnderlyingBalance);
	 let TokensToSupply=$('#TokensToSupply').val();
	 var TokenSupply=parseFloat(TokensToSupply-myWalletUnderlyingBalance);
	 
	 if(TokensToSupply > myWalletUnderlyingBalance){
		 
	 }
	
 });
 
 $('#TokensToSupply').keyup( async function(){
	 
	 let TokensToSupply=$('#TokensToSupply').val();
	 let myWalletUnderlyingBalance = await underlying.methods.balanceOf(myAccountAddress).call() / Math.pow(10, underlyingDecimals);
	 var TokensSupply=parseFloat(myWalletUnderlyingBalance-TokensToSupply);
	    if(TokensToSupply > myWalletUnderlyingBalance){
		 $('#supplying').html('NO FUNDS AVAILABLE');
	     $("#supplying").attr("disabled", "disabled"); 
        }
        else {
            $("#supplying").removeAttr("disabled"); 
            $('#supplying').html('Supply');
        }
		
	  if(TokensToSupply <= 0){
		
		 $("#supplying").attr("disabled", "disabled"); 
	  }else {
            $("#supplying").removeAttr("disabled"); 
      }
		
	   
		
        alert(TokensToSupply);
		
 });
 
 
  //var checkallowance = await myContract.methods.allowance(myAccountAddress,batContractAddress).call();
  //console.log('checkallowance'+checkallowance);
 
 await logBalances();
 

 
 const ethDecimals = 18;
 console.log(marketcontract);
 var arrayMrk=[myAccountAddress];
 const balanceOfUnderlying = web3.utils.toBN(await myContract.methods
    .balanceOfUnderlying(myAccountAddress).call()) / Math.pow(10, ethDecimals);
	
	console.log('balanceOfUnderlying'+balanceOfUnderlying);
	
 if(asset!="" && asset!='ETH' && asset!='cETH'){ 


  console.log("ETH supplied to the Compound Protocol:", balanceOfUnderlying, '\n');
  $('.supply_blalnce').html( balanceOfUnderlying+' <?php echo $_COOKIE['currency'];?>');
 }else{
  var balance = await myContract.methods.balanceOf(myAccountAddress).call({from: myAccountAddress}) /1000000000;
  $('.supply_blalnce').html( balance+' <?php echo $_COOKIE['currency'];?>');
 } 
  
  var usd_value = <?=$usd_value;?>
  
  if(balanceOfUnderlying > 0.00){	
  
	  $('.Supply_collateral').show();
	  $('.borrow_collateral').show();
	  $('#eth_supply_market').hide();
	  $('#eth_borrow_market').hide();
	  console.log("(2 *(("+balanceOfUnderlying+" * "+supplyApy+")/100))* "+usd_value);
	  const supplybalanceUSD= (2 *((balanceOfUnderlying * supplyApy)/100))* usd_value;
	  const borrow_limit=(supplybalanceUSD*80)/100;
     
	  $('#supplybalanceUSD').html('$ '+supplybalanceUSD.toFixed(5));
	  $('.borrow_limit').html('$ '+borrow_limit.toFixed(2));
	  
	  $('#totsupply').html(balanceOfUnderlying.toFixed(4));
	  
  }else{
	   $('.Supply_collateral').hide();
	   $('.borrow_collateral').hide();
	   $('#eth_supply_market').show();
	   $('#eth_borrow_market').show();
  }
  const borrowBalanceStored= await myContract.methods.borrowBalanceStored(myAccountAddress).call({from: myAccountAddress});
  const borrowBalance=borrowBalanceStored/1e18;
  if(borrowBalance > 0.00){	
  
  
  
	  $('.borrow_percentage').html(borrowApy.toFixed(2)+' %');
	  
	  const supplybalanceUSD= (2 *((balanceOfUnderlying * supplyApy)/100))* usd_value;
	  const borrow_limit=(supplybalanceUSD*80)/100;
	  const borrowbalanceUSD= (2 *((borrowBalance * borrowApy)/100))* usd_value;
	  const borrow_limit_used=(borrowbalanceUSD*100)/ borrow_limit;

	    $('#borrow_wrapper').html('<h3 class="text-center text-info">Your balance is <span id="borrowbalanceUSD"> $ '+borrowbalanceUSD.toFixed(2)+'</span></h3><p class="text-center">Your balance is <span id="totborrow">'+accbal.toFixed(3)+' <?php echo $_COOKIE['currency'];?></span>.</p><div class="go-back text-center my-3"><button class="btn btn-info" id="Borrowing" >Borrow</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-info" id="go-back" >Go Back</button></div>');
	  $('#borrowbalanceUSD').html('$ '+borrowbalanceUSD.toFixed(2));
	  $('.borrow_limit_used').html(borrow_limit_used.toFixed(2)+' %');
	  $('#totborrow').html(borrowBalance.toFixed(4));
  }
  

  
 var Liquidity=await marketcontract.methods.getAccountLiquidity(myAccountAddress).call({from: myAccountAddress});
 console.log('Liquidity');
  console.log(Liquidity);
  // market enter or exit
 
 $('#ether-basic-switch').click( async function(){
	
if($(this).prop('checked')==true){
		 
var markets = await marketcontract.methods.enterMarkets(arrayMrk).send({from: myAccountAddress});
console.log(myAccountAddress);
console.log(markets);  

  




 }else{
	 
	 var markets = await marketcontract.methods.exitMarket(myAccountAddress).send({from: myAccountAddress});
console.log(myAccountAddress);
console.log(markets); 


	 
 }

 });
 
 
 




 
 $('#supplying').click( async function(){
	 



 // Mint cTokens by supplying underlying tokens to the Compound Protocol
  const TokensToSupply=$('#TokensToSupply').val();
  
  console.log('\nSupplying ETH to the protocol as collateral (you will get cETH in return)...\n');
   const underlyingTokensToSupply = 10 * Math.pow(10, underlyingDecimals);
   
      var ethToSupplyAsCollateral = TokensToSupply * Math.pow(10, underlyingDecimals);
   console.log(''+ethToSupplyAsCollateral+' contract "supply" operation successful.');
   // Web3 transaction information, we'll use this for every transaction we'll send
const fromMyWallet = {
  from: myAccountAddress,
  gasLimit: web3.utils.toHex(500000),
  gasPrice: web3.utils.toHex(20000000000) // use ethgasstation.info (mainnet only)
};
  
 if(asset!="" && asset!='ETH' && asset!='cETH' && balanceOfUnderlying==0.00){ 
  

  // Tell the contract to allow 10 tokens to be taken by the cToken contract
  await underlying.methods.approve(myAccountAddress, underlyingTokensToSupply).send(fromMyWallet);

  console.log('${'+asset+'} contract "Approve" operation successful.');
  console.log('Supplying ${'+asset+'} to the Compound Protocol...');
 }

 
  

  console.log('\nSupplying ETH to the protocol as collateral (you will get cETH in return)...\n');
  let mint = await myContract.methods.mint(web3.utils.toBN(ethToSupplyAsCollateral.toString())).send(fromMyWallet);
  console.log("c${"+asset+"} 'Mint' operation successful.", '\n');

  
 

  let cTokenBalance = await myContract.methods.
    balanceOf(myAccountAddress).call() / 1e8;
  console.log('My wallet\'s c${asset} Token Balance:', cTokenBalance);

  let underlyingBalance = await underlying.methods.balanceOf(myAccountAddress).call();
  underlyingBalance = underlyingBalance / Math.pow(10, underlyingDecimals);
  console.log("My wallet's ${asset} Token Balance:", underlyingBalance, '\n');

  let erCurrent = await myContract.methods.exchangeRateCurrent().call();
  let exchangeRate = erCurrent / Math.pow(10, 18 + underlyingDecimals - 8);
  console.log("Current exchange rate from c${"+asset+"} to ${"+asset+"}:", exchangeRate, '\n');

  console.log("Redeeming the c${"+asset+"} for ${"+asset+"}...");

  // redeem (based on cTokens)
  console.log("Exchanging all c${"+asset+"} based on cToken amount...", '\n');
  await myContract.methods.redeem(cTokenBalance * 1e8).send(fromMyWallet);

  // redeem (based on underlying)
  // console.log(`Exchanging all c${asset} based on underlying ${asset} amount...`);
  // let underlyingAmount = balanceOfUnderlying * Math.pow(10, underlyingDecimals);
  // await myContract.methods.redeemUnderlying(underlyingAmount).send(fromMyWallet);

  cTokenBalance = await myContract.methods.balanceOf(myAccountAddress).call();
  cTokenBalance = cTokenBalance / 1e8;
  console.log("My wallet's c${asset} Token Balance:", cTokenBalance);

  underlyingBalance = await underlying.methods.balanceOf(myAccountAddress).call();
  underlyingBalance = underlyingBalance / Math.pow(10, underlyingDecimals);
  console.log("My wallet's ${asset} Token Balance:", underlyingBalance, '\n');


 

 

 });
 
  $('#Borrowing').click( async function(){
	 

  console.log('Calculating your liquid assets in the protocol...');
  let { 1:liquidity } = await marketcontract.methods.getAccountLiquidity(myAccountAddress).call();
  liquidity = liquidity / 1e18;

  console.log('Fetching cETH collateral factor...');
  let { 1:collateralFactor } = await marketcontract.methods.markets(myAccountAddress).call();
  collateralFactor = (collateralFactor / 1e18) * 100; // Convert to percent

  console.log('Fetching ${asset} price from the price feed...');
 // let underlyingPriceInUsd = await priceFeed.methods.price(asset).call();
 // underlyingPriceInUsd = underlyingPriceInUsd / 1e6; // Price feed provides price in USD with 6 decimal places

  console.log('Fetching borrow rate per block for ${asset} borrowing...');
  let borrowRate = await myContract.methods.borrowRatePerBlock().call();
  borrowRate = borrowRate / Math.pow(10, underlyingDecimals);

  console.log('\nYou have ${'+liquidity+'} of LIQUID assets (worth of USD) pooled in the protocol.');
  console.log('You can borrow up to ${'+collateralFactor+'}% of your TOTAL collateral supplied to the protocol as ${'+asset+'}.');
 // console.log('1 ${'+asset+'} == ${'+underlyingPriceInUsd.toFixed(6)+'} USD');
//  console.log('You can borrow up to ${'+liquidity+' / '+underlyingPriceInUsd+'} ${'+asset+'} from the protocol.');
  console.log('NEVER borrow near the maximum amount because your account will be instantly liquidated.');
  console.log('\nYour borrowed amount INCREASES (${'+borrowRate+'} * borrowed amount) ${'+asset+'} per block.\nThis is based on the current borrow rate.\n');

  const underlyingToBorrow = 50;
  console.log('Now attempting to borrow ${'+underlyingToBorrow+'} ${'+asset+'}...');
  const scaledUpBorrowAmount = (underlyingToBorrow * Math.pow(10, underlyingDecimals)).toString();
  const trx = await myContract.methods.borrow(scaledUpBorrowAmount).send({from: myAccountAddress});
   console.log('Borrow Transaction', trx);

  await logBalances();

  console.log('\nFetching ${'+asset+'} borrow balance from c${'+asset+'} contract...');
  let balance = await myContract.methods.borrowBalanceCurrent(myAccountAddress).call();
  balance = balance / Math.pow(10, underlyingDecimals);
  console.log('Borrow balance is ${'+balance+'} ${'+asset+'}');

  console.log('\nThis part is when you do something with those borrowed assets!\n');

  console.log('Now repaying the borrow...');
  console.log('Approving ${asset} to be transferred from your wallet to the c${'+asset+'} contract...');
//  const underlyingToRepay = (underlyingToBorrow * Math.pow(10, underlyingDecimals)).toString();
 /// await underlying.methods.approve(cTokenAddress, underlyingToRepay).send(fromMyWallet);

  const repayBorrow = await myContract.methods.repayBorrow(underlyingToRepay).send(fromMyWallet);

  if (repayBorrow.events && repayBorrow.events.Failure) {
    const errorCode = repayBorrow.events.Failure.returnValues.error;
    console.error('repayBorrow error, code ${'+errorCode+'}');
    process.exit(1);
  }

  console.log('\nBorrow repaid.\n');
  await logBalances();
  alert('cETH "borrow" operation successful.', '\n');
 });
 
 
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
</script>

</body></html>
