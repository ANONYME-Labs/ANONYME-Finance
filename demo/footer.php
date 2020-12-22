<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#from_token_pop">
  Launch demo modal
</button> -->

<!-- Modal 3 -->

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
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="max-value">
          <div class="input-group mb-3">
              <input style="font-size: 59px;text-align: center;padding: 30px;border: none;" type="text" class="form-control" placeholder="0" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">MAX</button>
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
                  <img src="images/logo-d.png" style="width: 16px; margin-left: 5px;"><span>Supply APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>0.01%</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <img src="images/logo-d.png" style="width: 16px; margin-left: 5px;"><span>Distribution APY</span>
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
                  <button class="btn btn-secondary btn-block">NO FUNDS AVAILABLE</button>
                </div>
              </div>
              <div class="row ">
                <div class="col-sm-12">
                  <span>Wallet Balance</span>
                  <span style="float: right;">0ETH</span>
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
                  <img src="images/logo-d.png" style="width: 16px; margin-left: 5px;"><span>Supply APY</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <span>0.01%</span>
                </div>
              </div>
              <div class="row mb-3 border-bottom py-3 px-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <img src="images/logo-d.png" style="width: 16px; margin-left: 5px;"><span>Distribution APY</span>
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
                  <button class="btn btn-secondary btn-block">NO BALANCE TO WITHDRAW</button>
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

      
        var bal = await web3.eth.getBalance(myAccountAddress);
        var accbal = ( bal / 1000000000000000000 );
        console.log('accbal '+accbal);
        var arrayABI = '';
        <?php if($mainContractABI != ''){ ?>
          arrayABI = <?php echo $mainContractABI; ?>;
        <?php } ?>
        var mainContractAddress = "<?=$mainContractAddress; ?>";
        //var referrerID = document.getElementById("regReferralID").value;


        var userWallet=getCookie('userWallet');
        if(userWallet!=""){
          var vWallet=userWallet.substring(0, 6) + '...' + userWallet.substring(userWallet.length - 6, userWallet.length);
          $(".btnwalletaddress").html(vWallet);
        }


var comptrollerAbi =[{"constant":true,"inputs":[],"name":"pendingAdmin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newPendingAdmin","type":"address"}],"name":"_setPendingAdmin","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"comptrollerImplementation","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"_acceptImplementation","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"pendingComptrollerImplementation","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newPendingImplementation","type":"address"}],"name":"_setPendingImplementation","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"_acceptAdmin","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"admin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"payable":true,"stateMutability":"payable","type":"fallback"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldPendingImplementation","type":"address"},{"indexed":false,"name":"newPendingImplementation","type":"address"}],"name":"NewPendingImplementation","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldImplementation","type":"address"},{"indexed":false,"name":"newImplementation","type":"address"}],"name":"NewImplementation","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldPendingAdmin","type":"address"},{"indexed":false,"name":"newPendingAdmin","type":"address"}],"name":"NewPendingAdmin","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldAdmin","type":"address"},{"indexed":false,"name":"newAdmin","type":"address"}],"name":"NewAdmin","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"error","type":"uint256"},{"indexed":false,"name":"info","type":"uint256"},{"indexed":false,"name":"detail","type":"uint256"}],"name":"Failure","type":"event"}];
var comptrollerAddress = "0x2EAa9D77AE4D8f9cdD9FAAcd44016E746485bddb";



var marketAbi =[{"constant":true,"inputs":[],"name":"isComptroller","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"unitroller","type":"address"}],"name":"_become","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"payer","type":"address"},{"name":"borrower","type":"address"},{"name":"repayAmount","type":"uint256"},{"name":"borrowerIndex","type":"uint256"}],"name":"repayBorrowVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"payer","type":"address"},{"name":"borrower","type":"address"},{"name":"repayAmount","type":"uint256"}],"name":"repayBorrowAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"pauseGuardian","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"pendingAdmin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"state","type":"bool"}],"name":"_setSeizePaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newCloseFactorMantissa","type":"uint256"}],"name":"_setCloseFactor","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"minter","type":"address"},{"name":"mintAmount","type":"uint256"},{"name":"mintTokens","type":"uint256"}],"name":"mintVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cTokenBorrowed","type":"address"},{"name":"cTokenCollateral","type":"address"},{"name":"liquidator","type":"address"},{"name":"borrower","type":"address"},{"name":"repayAmount","type":"uint256"},{"name":"seizeTokens","type":"uint256"}],"name":"liquidateBorrowVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"liquidationIncentiveMantissa","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"minter","type":"address"},{"name":"mintAmount","type":"uint256"}],"name":"mintAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newLiquidationIncentiveMantissa","type":"uint256"}],"name":"_setLiquidationIncentive","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"redeemer","type":"address"},{"name":"redeemAmount","type":"uint256"},{"name":"redeemTokens","type":"uint256"}],"name":"redeemVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newOracle","type":"address"}],"name":"_setPriceOracle","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"state","type":"bool"}],"name":"_setBorrowPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"borrower","type":"address"},{"name":"borrowAmount","type":"uint256"}],"name":"borrowVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"mintGuardianPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"getAccountLiquidity","outputs":[{"name":"","type":"uint256"},{"name":"","type":"uint256"},{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newPauseGuardian","type":"address"}],"name":"_setPauseGuardian","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cTokenBorrowed","type":"address"},{"name":"cTokenCollateral","type":"address"},{"name":"liquidator","type":"address"},{"name":"borrower","type":"address"},{"name":"repayAmount","type":"uint256"}],"name":"liquidateBorrowAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"src","type":"address"},{"name":"dst","type":"address"},{"name":"transferTokens","type":"uint256"}],"name":"transferVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cTokenCollateral","type":"address"},{"name":"cTokenBorrowed","type":"address"},{"name":"liquidator","type":"address"},{"name":"borrower","type":"address"},{"name":"seizeTokens","type":"uint256"}],"name":"seizeVerify","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"oracle","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"transferGuardianPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"address"}],"name":"markets","outputs":[{"name":"isListed","type":"bool"},{"name":"collateralFactorMantissa","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"state","type":"bool"}],"name":"_setTransferPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"},{"name":"cToken","type":"address"}],"name":"checkMembership","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"maxAssets","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"borrowGuardianPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"state","type":"bool"}],"name":"_setMintPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"}],"name":"_supportMarket","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"getAssetsIn","outputs":[{"name":"","type":"address[]"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"seizeGuardianPaused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"comptrollerImplementation","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"src","type":"address"},{"name":"dst","type":"address"},{"name":"transferTokens","type":"uint256"}],"name":"transferAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cTokens","type":"address[]"}],"name":"enterMarkets","outputs":[{"name":"","type":"uint256[]"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"cTokenBorrowed","type":"address"},{"name":"cTokenCollateral","type":"address"},{"name":"repayAmount","type":"uint256"}],"name":"liquidateCalculateSeizeTokens","outputs":[{"name":"","type":"uint256"},{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"cTokenCollateral","type":"address"},{"name":"cTokenBorrowed","type":"address"},{"name":"liquidator","type":"address"},{"name":"borrower","type":"address"},{"name":"seizeTokens","type":"uint256"}],"name":"seizeAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newMaxAssets","type":"uint256"}],"name":"_setMaxAssets","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"borrower","type":"address"},{"name":"borrowAmount","type":"uint256"}],"name":"borrowAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"","type":"address"},{"name":"","type":"uint256"}],"name":"accountAssets","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"pendingComptrollerImplementation","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"newCollateralFactorMantissa","type":"uint256"}],"name":"_setCollateralFactor","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"closeFactorMantissa","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"cToken","type":"address"},{"name":"redeemer","type":"address"},{"name":"redeemTokens","type":"uint256"}],"name":"redeemAllowed","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"cTokenAddress","type":"address"}],"name":"exitMarket","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"admin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":false,"name":"cToken","type":"address"}],"name":"MarketListed","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"cToken","type":"address"},{"indexed":false,"name":"account","type":"address"}],"name":"MarketEntered","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"cToken","type":"address"},{"indexed":false,"name":"account","type":"address"}],"name":"MarketExited","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldCloseFactorMantissa","type":"uint256"},{"indexed":false,"name":"newCloseFactorMantissa","type":"uint256"}],"name":"NewCloseFactor","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"cToken","type":"address"},{"indexed":false,"name":"oldCollateralFactorMantissa","type":"uint256"},{"indexed":false,"name":"newCollateralFactorMantissa","type":"uint256"}],"name":"NewCollateralFactor","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldLiquidationIncentiveMantissa","type":"uint256"},{"indexed":false,"name":"newLiquidationIncentiveMantissa","type":"uint256"}],"name":"NewLiquidationIncentive","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldMaxAssets","type":"uint256"},{"indexed":false,"name":"newMaxAssets","type":"uint256"}],"name":"NewMaxAssets","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldPriceOracle","type":"address"},{"indexed":false,"name":"newPriceOracle","type":"address"}],"name":"NewPriceOracle","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldPauseGuardian","type":"address"},{"indexed":false,"name":"newPauseGuardian","type":"address"}],"name":"NewPauseGuardian","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"action","type":"string"},{"indexed":false,"name":"pauseState","type":"bool"}],"name":"ActionPaused","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"error","type":"uint256"},{"indexed":false,"name":"info","type":"uint256"},{"indexed":false,"name":"detail","type":"uint256"}],"name":"Failure","type":"event"}];
var marketAddress = "0xb1983eE0064Fdb2A581966715DC9bA4D8B289A6A";


/* Add your Ethereum wallet to the Web3 object
web3.eth.accounts.wallet.add('0x' + privateKey);
const myWalletAddress = web3.eth.accounts.wallet[0].address;

// Mainnet Contract for cETH (the collateral-supply process is different for cERC20 tokens)
const cEthAddress = '0x4ddc2d193948926d02f9b1fe9e1daa0718270ed5';
const cEth = new web3.eth.Contract(cEthAbi, mainContractAddress);

// Mainnet Contract for the Compound Protocol's Comptroller
const comptrollerAddress = '0x3d9819210a31b4961b30ef54be2aed79b9c9cd3b';
const comptroller = new web3.eth.Contract(comptrollerAbi, comptrollerAddress);
*/
// Mainnet Contract for the Open Price Feed
const priceFeedAddress = '0x922018674c12a7f0d394ebeef9b58f186cde13c1';
const priceFeedAbi = [{"inputs":[{"internalType":"contract OpenOraclePriceData","name":"priceData_","type":"address"},{"internalType":"address","name":"reporter_","type":"address"},{"internalType":"uint256","name":"anchorToleranceMantissa_","type":"uint256"},{"internalType":"uint256","name":"anchorPeriod_","type":"uint256"},{"components":[{"internalType":"address","name":"cToken","type":"address"},{"internalType":"address","name":"underlying","type":"address"},{"internalType":"bytes32","name":"symbolHash","type":"bytes32"},{"internalType":"uint256","name":"baseUnit","type":"uint256"},{"internalType":"enum UniswapConfig.PriceSource","name":"priceSource","type":"uint8"},{"internalType":"uint256","name":"fixedPrice","type":"uint256"},{"internalType":"address","name":"uniswapMarket","type":"address"},{"internalType":"bool","name":"isUniswapReversed","type":"bool"}],"internalType":"struct UniswapConfig.TokenConfig[]","name":"configs","type":"tuple[]"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"string","name":"symbol","type":"string"},{"indexed":false,"internalType":"uint256","name":"anchorPrice","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"oldTimestamp","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"newTimestamp","type":"uint256"}],"name":"AnchorPriceUpdated","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"string","name":"symbol","type":"string"},{"indexed":false,"internalType":"uint256","name":"reporter","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"anchor","type":"uint256"}],"name":"PriceGuarded","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"string","name":"symbol","type":"string"},{"indexed":false,"internalType":"uint256","name":"price","type":"uint256"}],"name":"PriceUpdated","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"reporter","type":"address"}],"name":"ReporterInvalidated","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"bytes32","name":"symbolHash","type":"bytes32"},{"indexed":false,"internalType":"uint256","name":"oldTimestamp","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"newTimestamp","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"oldPrice","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"newPrice","type":"uint256"}],"name":"UniswapWindowUpdated","type":"event"},{"inputs":[],"name":"anchorPeriod","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"ethBaseUnit","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"expScale","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"i","type":"uint256"}],"name":"getTokenConfig","outputs":[{"components":[{"internalType":"address","name":"cToken","type":"address"},{"internalType":"address","name":"underlying","type":"address"},{"internalType":"bytes32","name":"symbolHash","type":"bytes32"},{"internalType":"uint256","name":"baseUnit","type":"uint256"},{"internalType":"enum UniswapConfig.PriceSource","name":"priceSource","type":"uint8"},{"internalType":"uint256","name":"fixedPrice","type":"uint256"},{"internalType":"address","name":"uniswapMarket","type":"address"},{"internalType":"bool","name":"isUniswapReversed","type":"bool"}],"internalType":"struct UniswapConfig.TokenConfig","name":"","type":"tuple"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"cToken","type":"address"}],"name":"getTokenConfigByCToken","outputs":[{"components":[{"internalType":"address","name":"cToken","type":"address"},{"internalType":"address","name":"underlying","type":"address"},{"internalType":"bytes32","name":"symbolHash","type":"bytes32"},{"internalType":"uint256","name":"baseUnit","type":"uint256"},{"internalType":"enum UniswapConfig.PriceSource","name":"priceSource","type":"uint8"},{"internalType":"uint256","name":"fixedPrice","type":"uint256"},{"internalType":"address","name":"uniswapMarket","type":"address"},{"internalType":"bool","name":"isUniswapReversed","type":"bool"}],"internalType":"struct UniswapConfig.TokenConfig","name":"","type":"tuple"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"string","name":"symbol","type":"string"}],"name":"getTokenConfigBySymbol","outputs":[{"components":[{"internalType":"address","name":"cToken","type":"address"},{"internalType":"address","name":"underlying","type":"address"},{"internalType":"bytes32","name":"symbolHash","type":"bytes32"},{"internalType":"uint256","name":"baseUnit","type":"uint256"},{"internalType":"enum UniswapConfig.PriceSource","name":"priceSource","type":"uint8"},{"internalType":"uint256","name":"fixedPrice","type":"uint256"},{"internalType":"address","name":"uniswapMarket","type":"address"},{"internalType":"bool","name":"isUniswapReversed","type":"bool"}],"internalType":"struct UniswapConfig.TokenConfig","name":"","type":"tuple"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"bytes32","name":"symbolHash","type":"bytes32"}],"name":"getTokenConfigBySymbolHash","outputs":[{"components":[{"internalType":"address","name":"cToken","type":"address"},{"internalType":"address","name":"underlying","type":"address"},{"internalType":"bytes32","name":"symbolHash","type":"bytes32"},{"internalType":"uint256","name":"baseUnit","type":"uint256"},{"internalType":"enum UniswapConfig.PriceSource","name":"priceSource","type":"uint8"},{"internalType":"uint256","name":"fixedPrice","type":"uint256"},{"internalType":"address","name":"uniswapMarket","type":"address"},{"internalType":"bool","name":"isUniswapReversed","type":"bool"}],"internalType":"struct UniswapConfig.TokenConfig","name":"","type":"tuple"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"underlying","type":"address"}],"name":"getTokenConfigByUnderlying","outputs":[{"components":[{"internalType":"address","name":"cToken","type":"address"},{"internalType":"address","name":"underlying","type":"address"},{"internalType":"bytes32","name":"symbolHash","type":"bytes32"},{"internalType":"uint256","name":"baseUnit","type":"uint256"},{"internalType":"enum UniswapConfig.PriceSource","name":"priceSource","type":"uint8"},{"internalType":"uint256","name":"fixedPrice","type":"uint256"},{"internalType":"address","name":"uniswapMarket","type":"address"},{"internalType":"bool","name":"isUniswapReversed","type":"bool"}],"internalType":"struct UniswapConfig.TokenConfig","name":"","type":"tuple"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"cToken","type":"address"}],"name":"getUnderlyingPrice","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"bytes","name":"message","type":"bytes"},{"internalType":"bytes","name":"signature","type":"bytes"}],"name":"invalidateReporter","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"lowerBoundAnchorRatio","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"maxTokens","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"name":"newObservations","outputs":[{"internalType":"uint256","name":"timestamp","type":"uint256"},{"internalType":"uint256","name":"acc","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"numTokens","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"name":"oldObservations","outputs":[{"internalType":"uint256","name":"timestamp","type":"uint256"},{"internalType":"uint256","name":"acc","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"bytes[]","name":"messages","type":"bytes[]"},{"internalType":"bytes[]","name":"signatures","type":"bytes[]"},{"internalType":"string[]","name":"symbols","type":"string[]"}],"name":"postPrices","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"string","name":"symbol","type":"string"}],"name":"price","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"priceData","outputs":[{"internalType":"contract OpenOraclePriceData","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"name":"prices","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"reporter","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"reporterInvalidated","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"bytes","name":"message","type":"bytes"},{"internalType":"bytes","name":"signature","type":"bytes"}],"name":"source","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"pure","type":"function"},{"inputs":[],"name":"upperBoundAnchorRatio","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"}];
const priceFeed = new web3.eth.Contract(priceFeedAbi, priceFeedAddress);

const erc20Abi =[{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"amount","type":"uint256"}],"name":"approve","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"repayAmount","type":"uint256"}],"name":"repayBorrow","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"reserveFactorMantissa","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"account","type":"address"}],"name":"borrowBalanceCurrent","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"exchangeRateStored","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"src","type":"address"},{"name":"dst","type":"address"},{"name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"borrower","type":"address"},{"name":"repayAmount","type":"uint256"}],"name":"repayBorrowBehalf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"pendingAdmin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"owner","type":"address"}],"name":"balanceOfUnderlying","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getCash","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newComptroller","type":"address"}],"name":"_setComptroller","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalBorrows","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"comptroller","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"reduceAmount","type":"uint256"}],"name":"_reduceReserves","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"initialExchangeRateMantissa","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"accrualBlockNumber","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"underlying","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"totalBorrowsCurrent","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"redeemAmount","type":"uint256"}],"name":"redeemUnderlying","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalReserves","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"borrowBalanceStored","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"mintAmount","type":"uint256"}],"name":"mint","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"accrueInterest","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"dst","type":"address"},{"name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"borrowIndex","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"supplyRatePerBlock","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"liquidator","type":"address"},{"name":"borrower","type":"address"},{"name":"seizeTokens","type":"uint256"}],"name":"seize","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newPendingAdmin","type":"address"}],"name":"_setPendingAdmin","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"exchangeRateCurrent","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"getAccountSnapshot","outputs":[{"name":"","type":"uint256"},{"name":"","type":"uint256"},{"name":"","type":"uint256"},{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"borrowAmount","type":"uint256"}],"name":"borrow","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"redeemTokens","type":"uint256"}],"name":"redeem","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"owner","type":"address"},{"name":"spender","type":"address"}],"name":"allowance","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"_acceptAdmin","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newInterestRateModel","type":"address"}],"name":"_setInterestRateModel","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"interestRateModel","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"borrower","type":"address"},{"name":"repayAmount","type":"uint256"},{"name":"cTokenCollateral","type":"address"}],"name":"liquidateBorrow","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"admin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"borrowRatePerBlock","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newReserveFactorMantissa","type":"uint256"}],"name":"_setReserveFactor","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"isCToken","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"inputs":[{"name":"underlying_","type":"address"},{"name":"comptroller_","type":"address"},{"name":"interestRateModel_","type":"address"},{"name":"initialExchangeRateMantissa_","type":"uint256"},{"name":"name_","type":"string"},{"name":"symbol_","type":"string"},{"name":"decimals_","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":false,"name":"interestAccumulated","type":"uint256"},{"indexed":false,"name":"borrowIndex","type":"uint256"},{"indexed":false,"name":"totalBorrows","type":"uint256"}],"name":"AccrueInterest","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"minter","type":"address"},{"indexed":false,"name":"mintAmount","type":"uint256"},{"indexed":false,"name":"mintTokens","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"redeemer","type":"address"},{"indexed":false,"name":"redeemAmount","type":"uint256"},{"indexed":false,"name":"redeemTokens","type":"uint256"}],"name":"Redeem","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"borrower","type":"address"},{"indexed":false,"name":"borrowAmount","type":"uint256"},{"indexed":false,"name":"accountBorrows","type":"uint256"},{"indexed":false,"name":"totalBorrows","type":"uint256"}],"name":"Borrow","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"payer","type":"address"},{"indexed":false,"name":"borrower","type":"address"},{"indexed":false,"name":"repayAmount","type":"uint256"},{"indexed":false,"name":"accountBorrows","type":"uint256"},{"indexed":false,"name":"totalBorrows","type":"uint256"}],"name":"RepayBorrow","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"liquidator","type":"address"},{"indexed":false,"name":"borrower","type":"address"},{"indexed":false,"name":"repayAmount","type":"uint256"},{"indexed":false,"name":"cTokenCollateral","type":"address"},{"indexed":false,"name":"seizeTokens","type":"uint256"}],"name":"LiquidateBorrow","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldPendingAdmin","type":"address"},{"indexed":false,"name":"newPendingAdmin","type":"address"}],"name":"NewPendingAdmin","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldAdmin","type":"address"},{"indexed":false,"name":"newAdmin","type":"address"}],"name":"NewAdmin","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldComptroller","type":"address"},{"indexed":false,"name":"newComptroller","type":"address"}],"name":"NewComptroller","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldInterestRateModel","type":"address"},{"indexed":false,"name":"newInterestRateModel","type":"address"}],"name":"NewMarketInterestRateModel","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"oldReserveFactorMantissa","type":"uint256"},{"indexed":false,"name":"newReserveFactorMantissa","type":"uint256"}],"name":"NewReserveFactor","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"admin","type":"address"},{"indexed":false,"name":"reduceAmount","type":"uint256"},{"indexed":false,"name":"newTotalReserves","type":"uint256"}],"name":"ReservesReduced","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"error","type":"uint256"},{"indexed":false,"name":"info","type":"uint256"},{"indexed":false,"name":"detail","type":"uint256"}],"name":"Failure","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"amount","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"spender","type":"address"},{"indexed":false,"name":"amount","type":"uint256"}],"name":"Approval","type":"event"}];

const underlyingAddress = mainContractAddress;
const underlying = new web3.eth.Contract(erc20Abi, mainContractAddress);


const assetName = 'USD'; // for the log output lines
const underlyingDecimals = 18; // Number of decimals defined in this ERC20 token's contract

// Web3 transaction information, we'll use this for every transaction we'll send
const fromMyWallet = {
  from: myAccountAddress,
  gasLimit: web3.utils.toHex(500000),
  gasPrice: web3.utils.toHex(20000000000) // use ethgasstation.info (mainnet only)
};

var marketcontract = new web3.eth.Contract(marketAbi, comptrollerAddress,{
  from: myAccountAddress, // default from address
 });
 
  
 var checkMembership = await marketcontract.methods.checkMembership(myAccountAddress,mainContractAddress).call({from: myAccountAddress})
console.log(checkMembership); 
 $('#ether-basic-switch').attr('checked', checkMembership);
//await web3.eth.sendTransaction({
    //from: myAccountAddress,
    //to: proxy.address
// });
 

 


var myContract = new web3.eth.Contract(arrayABI, mainContractAddress, {
  from: myAccountAddress, // default from address
  });
  
 
 console.log(myContract);


var balance = await myContract.methods.balanceOf(myAccountAddress).call({from: myAccountAddress});
$('.supply_blalnce').html(balance/100000000+' ETH');




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


console.log('supplyRatePerBlock'+supplyRatePerBlock);
console.log('borrowRatePerBlock'+borrowRatePerBlock);


$('.supply_percentage').html(supplyApy.toFixed(2)+' %');
$('.supply_percentage_mo').html(supplyApy.toFixed(2)+' %');

$('.borrow_percentage').html(borrowApy.toFixed(2)+' %');
$('.borrow_percentage_mo').html(borrowApy.toFixed(2)+' %');

$('.walletbalance').html(accbal.toFixed(3)+' ETH');
$('.borrow_blalnce').html(accbal.toFixed(3)+' ETH');
 
 console.log('accbal '+accbal);
 
const logBalances = () => {
  return new Promise(async (resolve, reject) => {
    let myWalletEthBalance = +web3.utils.fromWei(await web3.eth.getBalance(myAccountAddress));
    let myWalletCEthBalance = await myContract.methods.balanceOf(myAccountAddress).call() / 1e8;
    //let myWalletUnderlyingBalance = +await underlying.methods.balanceOf(myAccountAddress).call() / Math.pow(10, 8);

    console.log("My Wallet's  ETH Balance:", myWalletEthBalance);
    console.log("My Wallet's cETH Balance:", myWalletCEthBalance);
    //console.log(`My Wallet's  ${assetName} Balance:`, myWalletUnderlyingBalance);

    resolve();
  });
}; 
 
 await logBalances();
 
 
 
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
    const supplybalanceUSD= (2 *((balanceOfUnderlying * supplyApy)/100))* 586.44;
    const borrow_limit=(supplybalanceUSD*80)/100;
     
    $('#supplybalanceUSD').html('$ '+supplybalanceUSD.toFixed(2));
    $('.borrow_limit').html('$ '+borrow_limit.toFixed(2));
    
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
    
    const supplybalanceUSD= (2 *((balanceOfUnderlying * supplyApy)/100))* 586.44;
    const borrow_limit=(supplybalanceUSD*80)/100;
    const borrowbalanceUSD= (2 *((borrowBalance * borrowApy)/100))* 586.44;
    const borrow_limit_used=(borrowbalanceUSD*100)/ borrow_limit;

      $('#borrow_wrapper').html('<h3 class="text-center text-info">Your balance is <span id="borrowbalanceUSD"> $ '+borrowbalanceUSD.toFixed(2)+'</span></h3><p class="text-center">Your balance of <?php echo $_COOKIE['currency'];?> is <span id="totborrow">'+accbal.toFixed(3)+' ETH</span>.</p><div class="go-back text-center my-3"><button class="btn btn-info" id="Borrowing" >Borrow</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-info" id="go-back" >Go Back</button></div>');
    $('#borrowbalanceUSD').html('$ '+borrowbalanceUSD.toFixed(2));
    $('.borrow_limit_used').html(borrow_limit_used.toFixed(2)+' %');
    $('#totborrow').html(borrowBalance.toFixed(4));
  }
  
  let exchangeRateCurrent = await myContract.methods.exchangeRateCurrent().call();
  exchangeRateCurrent = exchangeRateCurrent / Math.pow(10, 18 + ethDecimals - 8);
  console.log("Current exchange rate from cETH to ETH:", exchangeRateCurrent, '\n');

  
  /* BAT
  
 
 const cBatAddress ='0xebf1a11532b93a529b5bc942b4baa98647913002';
 const batAddress ='0xbF7A7169562078c96f0eC1A8aFD6aE50f12e5A99';
 
const cTokenDecimals = 8; // all cTokens have 8 decimal places
const underlying = new web3.eth.Contract(erc20Abi, batAddress);
const cToken1 = new web3.eth.Contract(arrayABI, cBatAddress);
const underlyingDecimals = await underlying.methods.decimals().call();
const exchangeRateCurrent = await cToken1.methods.exchangeRateCurrent().call();
const mantissa = 18 + parseInt(underlyingDecimals) - cTokenDecimals;
const oneCTokenInUnderlying = exchangeRateCurrent / Math.pow(10, mantissa);
console.log('1 cBAT can be redeemed for', oneCTokenInUnderlying, 'BAT');
*/
  oneCTokenInUnderlying = exchangeRateCurrent / (1 * 10 ^ (18 + underlyingDecimals - 8));
   console.log('oneCTokenInUnderlying'+oneCTokenInUnderlying);
  
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
   

await logBalances();

  const ethToSupplyAsCollateral = 0.0001;

  console.log('\nSupplying ETH to the protocol as collateral (you will get cETH in return)...\n');
  let mint = await myContract.methods.mint().send({
    from: myAccountAddress,
    gasLimit: web3.utils.toHex(210200),
    gasPrice: web3.utils.toHex(1000000000), // use ethgasstation.info (mainnet only)
    value: web3.utils.toHex(ethToSupplyAsCollateral * 1e18)
  });

  await logBalances();

 

 

 });
 
  $('#Borrowing').click( async function(){
   

  console.log('Calculating your liquid assets in the protocol...');
  let { 1:liquidity } = await marketcontract.methods.getAccountLiquidity(myAccountAddress).call();
  liquidity = liquidity / 1e18;

  console.log('Fetching cETH collateral factor...');
  let { 1:collateralFactor } = await marketcontract.methods.markets(myAccountAddress).call();
  collateralFactor = (collateralFactor / 1e18) * 100; // Convert to percent

  console.log('Fetching ${assetName} price from the price feed...');
 // let underlyingPriceInUsd = await priceFeed.methods.price(assetName).call();
 // underlyingPriceInUsd = underlyingPriceInUsd / 1e6; // Price feed provides price in USD with 6 decimal places

  console.log('Fetching borrow rate per block for ${assetName} borrowing...');
  let borrowRate = await cToken.methods.borrowRatePerBlock().call();
  borrowRate = borrowRate / Math.pow(10, underlyingDecimals);

  console.log('\nYou have ${'+liquidity+'} of LIQUID assets (worth of USD) pooled in the protocol.');
  console.log('You can borrow up to ${'+collateralFactor+'}% of your TOTAL collateral supplied to the protocol as ${'+assetName+'}.');
 // console.log('1 ${'+assetName+'} == ${'+underlyingPriceInUsd.toFixed(6)+'} USD');
//  console.log('You can borrow up to ${'+liquidity+' / '+underlyingPriceInUsd+'} ${'+assetName+'} from the protocol.');
  console.log('NEVER borrow near the maximum amount because your account will be instantly liquidated.');
  console.log('\nYour borrowed amount INCREASES (${'+borrowRate+'} * borrowed amount) ${'+assetName+'} per block.\nThis is based on the current borrow rate.\n');

  const underlyingToBorrow = 50;
  console.log('Now attempting to borrow ${'+underlyingToBorrow+'} ${'+assetName+'}...');
  const scaledUpBorrowAmount = (underlyingToBorrow * Math.pow(10, underlyingDecimals)).toString();
  const trx = await cToken.methods.borrow(scaledUpBorrowAmount).send({from: myAccountAddress});
   console.log('Borrow Transaction', trx);

  await logBalances();

  console.log('\nFetching ${'+assetName+'} borrow balance from c${'+assetName+'} contract...');
  let balance = await cToken.methods.borrowBalanceCurrent(myAccountAddress).call();
  balance = balance / Math.pow(10, underlyingDecimals);
  console.log('Borrow balance is ${'+balance+'} ${'+assetName+'}');

  console.log('\nThis part is when you do something with those borrowed assets!\n');

  console.log('Now repaying the borrow...');
  console.log('Approving ${assetName} to be transferred from your wallet to the c${'+assetName+'} contract...');
//  const underlyingToRepay = (underlyingToBorrow * Math.pow(10, underlyingDecimals)).toString();
 /// await underlying.methods.approve(cTokenAddress, underlyingToRepay).send(fromMyWallet);

  const repayBorrow = await cToken.methods.repayBorrow(underlyingToRepay).send(fromMyWallet);

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
