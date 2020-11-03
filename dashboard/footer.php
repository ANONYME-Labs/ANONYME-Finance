<?php $mainContractABI='[{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"amount","type":"uint256"}],"name":"approve","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"mint","outputs":[],"payable":true,"stateMutability":"payable","type":"function"},{"constant":true,"inputs":[],"name":"reserveFactorMantissa","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"account","type":"address"}],"name":"borrowBalanceCurrent","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"exchangeRateStored","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"src","type":"address"},{"name":"dst","type":"address"},{"name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"pendingAdmin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"owner","type":"address"}],"name":"balanceOfUnderlying","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getCash","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newComptroller","type":"address"}],"name":"_setComptroller","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalBorrows","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"repayBorrow","outputs":[],"payable":true,"stateMutability":"payable","type":"function"},{"constant":true,"inputs":[],"name":"comptroller","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"reduceAmount","type":"uint256"}],"name":"_reduceReserves","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"initialExchangeRateMantissa","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"accrualBlockNumber","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"totalBorrowsCurrent","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"redeemAmount","type":"uint256"}],"name":"redeemUnderlying","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalReserves","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"borrowBalanceStored","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"accrueInterest","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"dst","type":"address"},{"name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"borrowIndex","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"borrower","type":"address"},{"name":"cTokenCollateral","type":"address"}],"name":"liquidateBorrow","outputs":[],"payable":true,"stateMutability":"payable","type":"function"},{"constant":true,"inputs":[],"name":"supplyRatePerBlock","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"liquidator","type":"address"},{"name":"borrower","type":"address"},{"name":"seizeTokens","type":"uint256"}],"name":"seize","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newPendingAdmin","type":"address"}],"name":"_setPendingAdmin","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"exchangeRateCurrent","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"getAccountSnapshot","outputs":[{"name":"","type":"uint256"},{"name":"","type":"uint256"},{"name":"","type":"uint256"},{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"borrowAmount","type":"uint256"}],"name":"borrow","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"redeemTokens","type":"uint256"}],"name":"redeem","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"owner","type":"address"},{"name":"spender","type":"address"}],"name":"allowance","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"borrower","type":"address"}],"name":"repayBorrowBehalf","outputs":[],"payable":true,"stateMutability":"payable","type":"function"},{"constant":false,"inputs":[],"name":"_acceptAdmin","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newInterestRateModel","type":"address"}],"name":"_setInterestRateModel","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"interestRateModel","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"admin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"borrowRatePerBlock","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newReserveFactorMantissa","type":"uint256"}],"name":"_setReserveFactor","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"isCToken","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"inputs":[{"name":"comptroller_","type":"address"},{"name":"interestRateModel_","type":"address"},{"name":"initialExchangeRateMantissa_","type":"uint256"},{"name":"name_","type":"string"},{"name":"symbol_","type":"string"},{"name":"decimals_","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"payable":true,"stateMutability":"payable","type":"fallback"},{"anonymous":false,"inputs":[{"indexed":false,"name":"interestAccumulated","type":"uint256"},{"indexed":false,"name":"borrowIndex","type":"uint256"},{"indexed":false,"name":"totalBorrows","type":"uint256"}],"name":"AccrueInterest","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"minter","type":"address"},{"indexed":false,"name":"mintAmount","type":"uint256"},{"indexed":false,"name":"mintTokens","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"redeemer","type":"address"},{"indexed":false,"name":"redeemAmount","type":"uint256"},{"indexed":false,"name":"redeemTokens","type":"uint256"}],"name":"Redeem","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"borrower","type":"address"},{"indexed":false,"name":"borrowAmount","type":"uint256"},{"indexed":false,"name":"accountBorrows","type":"uint256"},{"indexed":false,"name":"totalBorrows","type":"uint256"}],"name":"Borrow","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"payer","type":"address"},{"indexed":false,"name":"borrower","type":"address"},{"indexed":false,"name":"repayAmount","type":"uint256"},{"indexed":false,"name":"accountBorrows","type":"uint256"},{"indexed":false,"name":"totalBorrows","type":"uint256"}],"name":"RepayBorrow","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"liquidator","type":"address"},{"indexed":false,"name":"borrower","type":"address"},{"indexed":false,"name":"repayAmount","type":"uint256"},{"indexed":false,"name":"cTokenCollateral","type":"address"},{"indexed":false,"name":"seizeTokens","type":"uint256"}],"name":"LiquidateBorrow","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldPendingAdmin","type":"address"},{"indexed":false,"name":"newPendingAdmin","type":"address"}],"name":"NewPendingAdmin","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldAdmin","type":"address"},{"indexed":false,"name":"newAdmin","type":"address"}],"name":"NewAdmin","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldComptroller","type":"address"},{"indexed":false,"name":"newComptroller","type":"address"}],"name":"NewComptroller","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldInterestRateModel","type":"address"},{"indexed":false,"name":"newInterestRateModel","type":"address"}],"name":"NewMarketInterestRateModel","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldReserveFactorMantissa","type":"uint256"},{"indexed":false,"name":"newReserveFactorMantissa","type":"uint256"}],"name":"NewReserveFactor","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"admin","type":"address"},{"indexed":false,"name":"reduceAmount","type":"uint256"},{"indexed":false,"name":"newTotalReserves","type":"uint256"}],"name":"ReservesReduced","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"error","type":"uint256"},{"indexed":false,"name":"info","type":"uint256"},{"indexed":false,"name":"detail","type":"uint256"}],"name":"Failure","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"amount","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"spender","type":"address"},{"indexed":false,"name":"amount","type":"uint256"}],"name":"Approval","type":"event"}]';
	  $mainContractAddress="0xd6801a1DfFCd0a410336Ef88DeF4320D6DF1883e";
	  $SITE_URL="http://localhost/anonyme.finance/";
	  ?>  
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
		 <script>

window.addEventListener('load', async () => {
$(document).ready(function(){
console.log(window.web3);

  $("#connect-wallet").click(async function(){
      
	  $('.actions').html('<div class="comp-balance">0.0000<img src="images/comp-icn.svg"></div><a id="account" class="mobile-hide"><span class=""></span>0x89...DDD5</a></div>');
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
			  console.log(window.web3);
              var now = new Date();
              now.setTime(now.getTime() + 1 * 3600 * 1000);
              document.cookie = "userWallet="+metaMaskAddress+"; expires=" + now.toUTCString() + "; path=/";
              
              location.reload();
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
          
          location.reload();
        }
      });
        
    }
    // Non-dapp browsers...
    else {

        console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
    }
  });

  $("#manualEntryButton").click(function(){
      
      var str = $("#manualEntryInput"). val();
      str = str.replace(/\s/g,'');    //removing spaces

      if (typeof str !== 'undefined' && str != '') {
        //now chekcing if it is user ID, which should be 10 digit long and should be only numbers
        if(str.match(/^[0-9]+$/) != null){

          var now = new Date();
          now.setTime(now.getTime() + 1 * 3600 * 1000);
          document.cookie = "userID="+str+"; expires=" + now.toUTCString() + "; path=/";
          window.location.href = "<?php echo $SITE_URL; ?>dashboard";

        }
        else if(str.length == 42){
          var now = new Date();
          now.setTime(now.getTime() + 1 * 3600 * 1000);
          document.cookie = "userWallet="+str+"; expires=" + now.toUTCString() + "; path=/";
          window.location.href = "<?php echo $SITE_URL; ?>dashboard";
        }
        else{
          $('#manualErrorMsg').text('Invalid User ID or Wallet Address');
        }

      }
      else{
        
        $('#manualErrorMsg').text('Enter User ID or Wallet Address');
      }
  });







});
});





window.addEventListener('load', async () => {
$(document).ready(function(){

$("#regUserButton").click(async function(){


// Modern dapp browsers...
    if (window.ethereum) {

        window.web3 = new Web3(ethereum);
        try {
            // Request account access if needed
            await ethereum.enable();
            // Acccounts now exposed
            web3.eth.getAccounts(async function(error, result) {
          if(!error && typeof(result[0]) !== 'undefined')
              {
              var myAccountAddress=""+result[0];

      

var arrayABI = <?=$mainContractABI; ?>;
var mainContractAddress = "<?=$mainContractAddress; ?>";
var referrerID = document.getElementById("regReferralID").value;



var myContract = new web3.eth.Contract(arrayABI, mainContractAddress, {
  from: myAccountAddress, // default from address
  });


var priceOfLevel1 = await myContract.methods.priceOfLevel(1).call({from: myAccountAddress});

var data = myContract.methods.regUser(referrerID).encodeABI();
          web3.eth.sendTransaction({
          from: myAccountAddress,
          to: mainContractAddress,
          gasLimit: 900000,
          value: priceOfLevel1,
          data: data, // deploying a contracrt
          }).on('transactionHash', function(hash){
            alertify.alert("Transacton Recorded","Thanks for joining . You can check the status at <a href='="+hash+"' target='_blank'>Etherscan</a><br><br> Once transaction is confirmed in Blockchain, you can come back to this page and login into your account.", function(){});

          }).on('receipt', function(receipt){
        console.log(receipt)
       

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
})
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
