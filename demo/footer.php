<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#from_token_pop">
  Launch demo modal
</button> -->

<!-- Modal 3 -->

<div class="modal fade" id="coin_option3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Select Token<i class="fa fa-question-circle ml-2" aria-hidden="true"></i></h5>
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




<!-- Modal 2 -->
<div class="modal fade" id="coin_option2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Create a pair<i class="fa fa-question-circle ml-2" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-sm-12 mb-3">
        	<div class="alert alert-danger">You are the first liquidity provider.<br>
The ratio of tokens you add will set the price of this pool.<br>
Once you are happy with the rate click supply to review.</div>
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
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" style="border-radius: 50px 0 0 53px;" placeholder="0.0">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="modal" data-target="#coin_option3"><img src="images/eth.png" style="width: 20px;margin-right: 10px;">ETH</button>
                    </div>
                  </div>
              </div>
              <div class="col-sm-12 py-3 text-center">
                <p class="m-0"><i class="fa fa-plus" aria-hidden="true"></i></p>
              </div>
              <div class="col-sm-12">
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" style="border-radius: 50px 0 0 53px;" placeholder="0.0">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="modal" data-target="#from_token_pop"><img src="images/eth.png" style="width: 20px;margin-right: 10px;">ETH</button>
                    </div>
                  </div>
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


<div class="modal fade" id="from_token_pop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Select Token<i class="fa fa-question-circle ml-2" aria-hidden="true"></i></h5>
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
        	<div id="displayTokenFrom" class="row py-2 hover-select-token">
        		<!-- <div class="col-sm-12">
        			<div style="cursor: pointer;"><img src="images/eth.png" style="width: 20px;"> <span class="ml-2">ETH</span></div>
        		</div> -->
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


<div class="modal fade" id="to_token_pop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Select Token<i class="fa fa-question-circle ml-2" aria-hidden="true"></i></h5>
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
        	<div id="displayTokenTo" class="row py-2 hover-select-token">
        		<!-- <div class="col-sm-12">
        			<div style="cursor: pointer;"><img src="images/eth.png" style="width: 20px;"> <span class="ml-2">ETH</span></div>
        		</div> -->
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




<div class="modal fade" id="Connect_wallet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Select Token<i class="fa fa-question-circle ml-2" aria-hidden="true"></i></h5>
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
<script src="dist/js/jquery.twbs-toggle-buttons.min.js"></script>

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
  window.addEventListener('load', async () => {
  $(document).ready(function(){


  	var userWallet=getCookie('userWallet');

  	//alert(userWallet);

  	if(userWallet!=""){
       var vWallet=userWallet.substring(0, 6) + '...' + userWallet.substring(userWallet.length - 6, userWallet.length);
       $(".btnwalletaddress").html(vWallet);
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
</script>

</body></html>
