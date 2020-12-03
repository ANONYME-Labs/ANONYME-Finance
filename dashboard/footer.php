
  <footer class="dapp">

                    <div class="container-large">
                        <div class="row top">
                            <div class="col-xs-12 col-sm-2"><a href="/" class="brand"></a></div>
                            <div class="col-xs-12 col-sm-10 links">
                                <a target="_blank" rel="external" href="https://compound.finance/markets">Markets</a><a target="_blank" rel="external" href="https://compound.finance/governance">Governance</a>
                                <a target="_blank" rel="external" href="https://compound.finance/governance/comp">COMP</a><a href="/terms">Terms</a>
                                <a target="_blank" rel="external" href="https://medium.com/compound-finance/the-compound-guide-to-supplying-borrowing-crypto-assets-94821f2950a0">Support</a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="help">
                                <div class="mobile-hide">
                                    <span class="dot-indicator red"></span><label class="small">Latest Block: –</label><a target="_blank" rel="external" href="https://compound.finance/markets">Markets</a>
                                    <a target="_blank" rel="external" href="https://compound.finance/governance">Governance</a><a target="_blank" rel="external" href="https://compound.finance/governance/comp">COMP</a>
                                    <a target="_blank" rel="external" href="https://medium.com/compound-finance/the-compound-guide-to-supplying-borrowing-crypto-assets-94821f2950a0">Support</a><a href="/terms">Terms</a>
                                </div>
                            </div>
                            <div class="social">
                                <div class="dropdown dropdown--currency">
                                    <span class="dropdown__selected dropdown__selected--light-1"><label class="small" style="margin-left: 0px;">$ USD</label></span>
                                    <div class="dropdown__options dropdown__options--footer"></div>
                                </div>
                                <div class="dropdown dropdown--language">
                                    <span class="dropdown__selected dropdown__selected--language"><label class="small">Language</label><span class="icn english"></span></span>
                                    <div class="dropdown__options dropdown__options--footer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <span></span>
            </div>
        </div>
        <script src="js/jquery.js"></script>
		 <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.js"></script>
		 <script  src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
		 <script>
		 
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




//------------------------------- connecting with smart contract ---------------------------------------------------

window.addEventListener('load', async () => {
$(document).ready(function(){
	
	
	var userWallet=getCookie('userWallet');
	
	alert(userWallet);
	
	if(userWallet!=""){
		$('.actions').html('<div class="comp-balance">0.0000<img src="images/comp-icn.svg"></div><a id="account" class="mobile-hide"><span class=""></span>'+userWallet+'</a></div>');
		 $('.asset-list').show();
	}


  $("#connect-wallet").click(async function(){
      // Modern dapp browsers...
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
			   $('.actions').html('<div class="comp-balance">0.0000<img src="images/comp-icn.svg"></div><a id="account" class="mobile-hide"><span class=""></span>'+metaMaskAddress+'</a></div>');
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
	
	
  });

});
});

//------------------------------- connecting with smart contract ---------------------------------------------------


window.addEventListener('load', async () => {
$(document).ready(function(){




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
console.log('accbal '+accbal);
var arrayABI = <?=$mainContractABI; ?>;
var mainContractAddress = "<?=$mainContractAddress; ?>";
//var referrerID = document.getElementById("regReferralID").value;





var comptrollerAbi =[{"constant":true,"inputs":[],"name":"pendingAdmin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newPendingAdmin","type":"address"}],"name":"_setPendingAdmin","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"comptrollerImplementation","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"_acceptImplementation","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"pendingComptrollerImplementation","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newPendingImplementation","type":"address"}],"name":"_setPendingImplementation","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"_acceptAdmin","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"admin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"payable":true,"stateMutability":"payable","type":"fallback"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldPendingImplementation","type":"address"},{"indexed":false,"name":"newPendingImplementation","type":"address"}],"name":"NewPendingImplementation","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldImplementation","type":"address"},{"indexed":false,"name":"newImplementation","type":"address"}],"name":"NewImplementation","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldPendingAdmin","type":"address"},{"indexed":false,"name":"newPendingAdmin","type":"address"}],"name":"NewPendingAdmin","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldAdmin","type":"address"},{"indexed":false,"name":"newAdmin","type":"address"}],"name":"NewAdmin","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"error","type":"uint256"},{"indexed":false,"name":"info","type":"uint256"},{"indexed":false,"name":"detail","type":"uint256"}],"name":"Failure","type":"event"}];
var comptrollerAddress = "0x2EAa9D77AE4D8f9cdD9FAAcd44016E746485bddb";



var marketAbi =[{"constant":true,"inputs":[],"name":"isComptroller","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"unitroller","type":"address"}],"name":"_become","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"payer","type":"address"},{"name":"borrower","type":"address"},{"name":"repayAmount","type":"uint256"},{"name":"borrowerIndex","type":"uint256"}],"name":"repayBorrowVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"payer","type":"address"},{"name":"borrower","type":"address"},{"name":"repayAmount","type":"uint256"}],"name":"repayBorrowAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"pauseGuardian","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"pendingAdmin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"state","type":"bool"}],"name":"_setSeizePaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newCloseFactorMantissa","type":"uint256"}],"name":"_setCloseFactor","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"minter","type":"address"},{"name":"mintAmount","type":"uint256"},{"name":"mintTokens","type":"uint256"}],"name":"mintVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cTokenBorrowed","type":"address"},{"name":"cTokenCollateral","type":"address"},{"name":"liquidator","type":"address"},{"name":"borrower","type":"address"},{"name":"repayAmount","type":"uint256"},{"name":"seizeTokens","type":"uint256"}],"name":"liquidateBorrowVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"liquidationIncentiveMantissa","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"minter","type":"address"},{"name":"mintAmount","type":"uint256"}],"name":"mintAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newLiquidationIncentiveMantissa","type":"uint256"}],"name":"_setLiquidationIncentive","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"redeemer","type":"address"},{"name":"redeemAmount","type":"uint256"},{"name":"redeemTokens","type":"uint256"}],"name":"redeemVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newOracle","type":"address"}],"name":"_setPriceOracle","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"state","type":"bool"}],"name":"_setBorrowPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"borrower","type":"address"},{"name":"borrowAmount","type":"uint256"}],"name":"borrowVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"mintGuardianPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"getAccountLiquidity","outputs":[{"name":"","type":"uint256"},{"name":"","type":"uint256"},{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newPauseGuardian","type":"address"}],"name":"_setPauseGuardian","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cTokenBorrowed","type":"address"},{"name":"cTokenCollateral","type":"address"},{"name":"liquidator","type":"address"},{"name":"borrower","type":"address"},{"name":"repayAmount","type":"uint256"}],"name":"liquidateBorrowAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"src","type":"address"},{"name":"dst","type":"address"},{"name":"transferTokens","type":"uint256"}],"name":"transferVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cTokenCollateral","type":"address"},{"name":"cTokenBorrowed","type":"address"},{"name":"liquidator","type":"address"},{"name":"borrower","type":"address"},{"name":"seizeTokens","type":"uint256"}],"name":"seizeVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"oracle","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"transferGuardianPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"address"}],"name":"markets","outputs":[{"name":"isListed","type":"bool"},{"name":"collateralFactorMantissa","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"state","type":"bool"}],"name":"_setTransferPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"},{"name":"cToken","type":"address"}],"name":"checkMembership","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"maxAssets","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"borrowGuardianPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"state","type":"bool"}],"name":"_setMintPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"}],"name":"_supportMarket","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"getAssetsIn","outputs":[{"name":"","type":"address[]"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"seizeGuardianPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"comptrollerImplementation","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"src","type":"address"},{"name":"dst","type":"address"},{"name":"transferTokens","type":"uint256"}],"name":"transferAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cTokens","type":"address[]"}],"name":"enterMarkets","outputs":[{"name":"","type":"uint256[]"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"cTokenBorrowed","type":"address"},{"name":"cTokenCollateral","type":"address"},{"name":"repayAmount","type":"uint256"}],"name":"liquidateCalculateSeizeTokens","outputs":[{"name":"","type":"uint256"},{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"cTokenCollateral","type":"address"},{"name":"cTokenBorrowed","type":"address"},{"name":"liquidator","type":"address"},{"name":"borrower","type":"address"},{"name":"seizeTokens","type":"uint256"}],"name":"seizeAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newMaxAssets","type":"uint256"}],"name":"_setMaxAssets","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"borrower","type":"address"},{"name":"borrowAmount","type":"uint256"}],"name":"borrowAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"","type":"address"},{"name":"","type":"uint256"}],"name":"accountAssets","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"pendingComptrollerImplementation","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"newCollateralFactorMantissa","type":"uint256"}],"name":"_setCollateralFactor","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"closeFactorMantissa","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"redeemer","type":"address"},{"name":"redeemTokens","type":"uint256"}],"name":"redeemAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cTokenAddress","type":"address"}],"name":"exitMarket","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"admin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":false,"name":"cToken","type":"address"}],"name":"MarketListed","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"cToken","type":"address"},{"indexed":false,"name":"account","type":"address"}],"name":"MarketEntered","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"cToken","type":"address"},{"indexed":false,"name":"account","type":"address"}],"name":"MarketExited","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldCloseFactorMantissa","type":"uint256"},{"indexed":false,"name":"newCloseFactorMantissa","type":"uint256"}],"name":"NewCloseFactor","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"cToken","type":"address"},{"indexed":false,"name":"oldCollateralFactorMantissa","type":"uint256"},{"indexed":false,"name":"newCollateralFactorMantissa","type":"uint256"}],"name":"NewCollateralFactor","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldLiquidationIncentiveMantissa","type":"uint256"},{"indexed":false,"name":"newLiquidationIncentiveMantissa","type":"uint256"}],"name":"NewLiquidationIncentive","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldMaxAssets","type":"uint256"},{"indexed":false,"name":"newMaxAssets","type":"uint256"}],"name":"NewMaxAssets","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldPriceOracle","type":"address"},{"indexed":false,"name":"newPriceOracle","type":"address"}],"name":"NewPriceOracle","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldPauseGuardian","type":"address"},{"indexed":false,"name":"newPauseGuardian","type":"address"}],"name":"NewPauseGuardian","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"action","type":"string"},{"indexed":false,"name":"pauseState","type":"bool"}],"name":"ActionPaused","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"error","type":"uint256"},{"indexed":false,"name":"info","type":"uint256"},{"indexed":false,"name":"detail","type":"uint256"}],"name":"Failure","type":"event"}];
var marketAddress = "0xb1983eE0064Fdb2A581966715DC9bA4D8B289A6A";


/* Add your Ethereum wallet to the Web3 object
web3.eth.accounts.wallet.add('0x' + privateKey);
const myWalletAddress = web3.eth.accounts.wallet[0].address;

// Mainnet Contract for cETH (the collateral-supply process is different for cERC20 tokens)
const cEthAddress = '0x4ddc2d193948926d02f9b1fe9e1daa0718270ed5';
const cEth = new web3.eth.Contract(cEthAbi, cEthAddress);

// Mainnet Contract for the Compound Protocol's Comptroller
const comptrollerAddress = '0x3d9819210a31b4961b30ef54be2aed79b9c9cd3b';
const comptroller = new web3.eth.Contract(comptrollerAbi, comptrollerAddress);

// Mainnet Contract for the Open Price Feed
const priceFeedAddress = '0x922018674c12a7f0d394ebeef9b58f186cde13c1';
const priceFeed = new web3.eth.Contract(priceFeedAbi, priceFeedAddress);

// Mainnet address of underlying token (like DAI or USDC)
const underlyingAddress = '0x6B175474E89094C44Da98b954EedeAC495271d0F'; // Dai
const underlying = new web3.eth.Contract(erc20Abi, underlyingAddress);

// Mainnet address for a cToken (like cDai, https://compound.finance/docs#networks)
const cTokenAddress = '0x5d3a536e4d6dbd6114cc1ead35777bab948e3643'; // cDai
const cToken = new web3.eth.Contract(cErcAbi, cTokenAddress);
const assetName = 'DAI'; // for the log output lines
const underlyingDecimals = 18; // Number of decimals defined in this ERC20 token's contract

// Web3 transaction information, we'll use this for every transaction we'll send
const fromMyWallet = {
  from: myWalletAddress,
  gasLimit: web3.utils.toHex(500000),
  gasPrice: web3.utils.toHex(20000000000) // use ethgasstation.info (mainnet only)
};
*/
var marketcontract = new web3.eth.Contract(marketAbi, comptrollerAddress,{
  from: myAccountAddress, // default from address
 });
 
  
 var checkMembership = await marketcontract.methods.checkMembership(myAccountAddress,mainContractAddress).call({from: myAccountAddress})
console.log(checkMembership); 
//await web3.eth.sendTransaction({
    //from: myAccountAddress,
    //to: proxy.address
// });
 

 


var myContract = new web3.eth.Contract(arrayABI, mainContractAddress, {
  from: myAccountAddress, // default from address
  });
  
 
 console.log(myContract);


var balance = await myContract.methods.balanceOf(myAccountAddress).call({from: myAccountAddress});
console.log(balance);




var totalSupply = await myContract.methods.totalSupply().call({from: myAccountAddress});
console.log(totalSupply/1000000000000000000);
console.log('totalSupply');




const ethMantissa = 1e18;
const blocksPerDay = 4 * 60 * 24;
const daysPerYear = 365;

const cToken = new web3.eth.Contract(arrayABI, mainContractAddress);
const supplyRatePerBlock = await cToken.methods.supplyRatePerBlock().call();
const borrowRatePerBlock = await cToken.methods.borrowRatePerBlock().call();
const supplyApy = (((Math.pow((supplyRatePerBlock / ethMantissa * blocksPerDay) + 1, daysPerYear - 1))) - 1) * 100;
const borrowApy = (((Math.pow((borrowRatePerBlock / ethMantissa * blocksPerDay) + 1, daysPerYear - 1))) - 1) * 100;


$('.supply_percentage').html(supplyApy.toFixed(2)+' %');
$('.supply_percentage_mo').html(supplyApy.toFixed(2)+' %');

$('.borrow_percentage').html(borrowApy.toFixed(2)+' %');
$('.borrow_percentage_mo').html(borrowApy.toFixed(2)+' %');

$('.supply_blalnce').html(accbal.toFixed(3)+' ETH');
$('.borrow_blalnce').html(accbal.toFixed(3)+' ETH');
 
 console.log('accbal '+accbal);
 
 
 
 
 
 
 const ethDecimals = 18;
 console.log(marketcontract);
 var arrayMrk=[myAccountAddress];
 
const balanceOfUnderlying = web3.utils.toBN(await myContract.methods
    .balanceOfUnderlying(myAccountAddress).call()) / Math.pow(10, ethDecimals);

  console.log("ETH supplied to the Compound Protocol:", balanceOfUnderlying, '\n');
  
  if(balanceOfUnderlying > 0){	
  
	  $('.Supply_collateral').show();
	  $('.borrow_collateral').show();
	  $('#eth_supply_market').hide();
	  $('#eth_borrow_market').hide();
	  $('#totsupply').html(balanceOfUnderlying.toFixed(4));
	  
  }else{
	   $('.Supply_collateral').hide();
	   $('.borrow_collateral').hide();
	   $('#eth_supply_market').show();
	   $('#eth_borrow_market').show();
  }
  const borrowBalanceStored= await myContract.methods.borrowBalanceStored(myAccountAddress).call({from: myAccountAddress});
  const borrowBalance=borrowBalanceStored/1000000000000000000;
  if(borrowBalance > 0){	
  
	  $('.borrow_percentage').html(borrowApy.toFixed(2)+' %');
	  $('#totborrow').html(borrowBalance.toFixed(4));
  }

 
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
	 

await logBalances();

  const ethToSupplyAsCollateral = 1;

  console.log('\nSupplying ETH to the protocol as collateral (you will get cETH in return)...\n');
  let mint = await myContract.methods.mint().send({
    from: myAccountAddress,
    gasLimit: web3.utils.toHex(150000),
    gasPrice: web3.utils.toHex(20000000000), // use ethgasstation.info (mainnet only)
    value: web3.utils.toHex(ethToSupplyAsCollateral * 1e18)
  });

  await logBalances();

  /*console.log('\nEntering market (via Comptroller contract) for ETH (as collateral)...');
  let markets = [myAccountAddress]; // This is the cToken contract(s) for your collateral
  let enterMarkets = await marketcontract.methods.enterMarkets(markets).send(from: myAccountAddress});

  console.log('Calculating your liquid assets in the protocol...');
  let { 1:liquidity } = await marketcontract.methods.getAccountLiquidity(myAccountAddress).call();
  liquidity = liquidity / 1e18;

  console.log('Fetching cETH collateral factor...');
  let { 1:collateralFactor } = await marketcontract.methods.markets(myAccountAddress).call();
  collateralFactor = (collateralFactor / 1e18) * 100; // Convert to percent

  console.log(`Fetching ${assetName} price from the price feed...`);
  let underlyingPriceInUsd = await priceFeed.methods.price(assetName).call();
  underlyingPriceInUsd = underlyingPriceInUsd / 1e6; // Price feed provides price in USD with 6 decimal places

  console.log(`Fetching borrow rate per block for ${assetName} borrowing...`);
  let borrowRate = await cToken.methods.borrowRatePerBlock().call();
  borrowRate = borrowRate / Math.pow(10, underlyingDecimals);

  console.log(`\nYou have ${liquidity} of LIQUID assets (worth of USD) pooled in the protocol.`);
  console.log(`You can borrow up to ${collateralFactor}% of your TOTAL collateral supplied to the protocol as ${assetName}.`);
  console.log(`1 ${assetName} == ${underlyingPriceInUsd.toFixed(6)} USD`);
  console.log(`You can borrow up to ${liquidity/underlyingPriceInUsd} ${assetName} from the protocol.`);
  console.log(`NEVER borrow near the maximum amount because your account will be instantly liquidated.`);
  console.log(`\nYour borrowed amount INCREASES (${borrowRate} * borrowed amount) ${assetName} per block.\nThis is based on the current borrow rate.\n`);

  const underlyingToBorrow = 50;
  console.log(`Now attempting to borrow ${underlyingToBorrow} ${assetName}...`);
  const scaledUpBorrowAmount = (underlyingToBorrow * Math.pow(10, underlyingDecimals)).toString();
  const trx = await cToken.methods.borrow(scaledUpBorrowAmount).send(fromMyWallet);
  // console.log('Borrow Transaction', trx);

  await logBalances();

  console.log(`\nFetching ${assetName} borrow balance from c${assetName} contract...`);
  let balance = await cToken.methods.borrowBalanceCurrent(myAccountAddress).call();
  balance = balance / Math.pow(10, underlyingDecimals);
  console.log(`Borrow balance is ${balance} ${assetName}`);

  console.log(`\nThis part is when you do something with those borrowed assets!\n`);

  console.log(`Now repaying the borrow...`);
  console.log(`Approving ${assetName} to be transferred from your wallet to the c${assetName} contract...`);
  const underlyingToRepay = (underlyingToBorrow * Math.pow(10, underlyingDecimals)).toString();
  await underlying.methods.approve(cTokenAddress, underlyingToRepay).send(fromMyWallet);

  const repayBorrow = await cToken.methods.repayBorrow(underlyingToRepay).send(fromMyWallet);

  if (repayBorrow.events && repayBorrow.events.Failure) {
    const errorCode = repayBorrow.events.Failure.returnValues.error;
    console.error(`repayBorrow error, code ${errorCode}`);
    process.exit(1);
  }

  console.log(`\nBorrow repaid.\n`);
  await logBalances();
  */
  
 });
 
  $('#Borrowing').click( async function(){
	 

	
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


			
			
</script>


        <!--script src="js/vendors_dapp_landing_polyfills.e9e68e69.chunk.js"></script>
        <script src="js/vendors_polyfills.3570ab06.chunk.js"></script>
        <script src="js/polyfills.9fb97b9c.chunk.js"></script>
        <script src="js/runtime_dapp.b18be7fc.js"></script>
        <script src="js/vendors_dapp_landing.2efa2a68.chunk.js"></script>
        <script src="js/dapp.b2fea9d0.chunk.js"></script-->
    </body>
</html>
