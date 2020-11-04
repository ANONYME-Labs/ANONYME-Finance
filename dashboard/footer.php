
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

  $("#manualEntryButton").click(function(){
      
      var str = $("#manualEntryInput"). val();
      str = str.replace(/\s/g,'');    //removing spaces

      if (typeof str !== 'undefined' && str != '') {
        //now chekcing if it is user ID, which should be 10 digit long and should be only numbers
        if(str.match(/^[0-9]+$/) != null){

          var now = new Date();
          now.setTime(now.getTime() + 1 * 3600 * 1000);
          document.cookie = "userID="+str+"; expires=" + now.toUTCString() + "; path=/";
          window.location.href = "<?php echo $siteURL; ?>dashboard";

        }
        else if(str.length == 42){
          var now = new Date();
          now.setTime(now.getTime() + 1 * 3600 * 1000);
          document.cookie = "userWallet="+str+"; expires=" + now.toUTCString() + "; path=/";
          window.location.href = "<?php echo $siteURL; ?>dashboard";
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
