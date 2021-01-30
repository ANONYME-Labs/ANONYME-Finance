<?php include 'header.php';?>
<?php include 'sidebar.php';?>

<?php

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1363.2px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-uppercase">Swap</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" id="swap">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col-lg-5">
            <!-- /.card -->

            <div class="card px-3 py-4">

            	<div class="col-lg-12 col-md-6 col-sm-6 text-right">
	                <div class="sc-kkGfuU hyvXgi css-1rhdhic">Balance: <span id="txtWalletFromBalance">0.00</span> &nbsp;
	                </div>
	            </div>
              <div class="col-sm-12">
                <div class="input-group">
                    <input type="text" id="txtFromToken" class="form-control clsfromtoken" aria-label="Text input with dropdown button" style="border-radius: 50px 0 0 53px;" placeholder="0.0">
                    <div class="input-group-append">
                    	<select  name="drpFromToken" id="drpFromToken" style="width:100px;">
							<option value="ETH" data-image="images/eth.png">ETH</option>
						</select>

                    </div>
                  </div>
              </div>
              <div class="col-sm-12 py-3 text-center">
                <p class="m-0"><i class="fa fa-arrow-down" aria-hidden="true"></i></p>
              </div>

          	<div class="col-lg-12 col-md-6 col-sm-6 text-right">
	                <div class="sc-kkGfuU hyvXgi css-1rhdhic">Balance: <span id="txtWalletToBalance">0.00</span> &nbsp;
	                </div>
	            </div>
              <div class="col-sm-12">
                   <div class="input-group">
                    <input type="text" id="txtToToken"  class="form-control" aria-label="Text input with dropdown button" style="border-radius: 50px 0 0 53px;" placeholder="0.0">
                    <div class="input-group-append">
                      <!-- <button class="btn btn-outline-secondary dropdown-toggle" id="btnToToken" type="button" data-toggle="modal" data-target="#to_token_pop"><img src="images/eth.png" id="imgToToken" style="width: 20px;margin-right: 10px;"><span id="spnToToken">ETH</span></button> -->
                      <select  name="drpToToken" id="drpToToken" style="width:100px;">
                      		<option value="">Select Token</option>
							<option value="ETH" data-image="images/eth.png">ETH</option>
						</select>
                    </div>
                  </div>
              </div>

                    <div class="row py-2 hover-select-token">
                        <div class="col-sm-12">
                            <div class="sc-gqjmRU sc-fMiknA sc-dVhcbM iwiYPV">
                                <div class="sc-gqjmRU sc-jTzLTM sc-fjdhpX bdIUOu">
                                    <div class="sc-kkGfuU hyvXgi css-1aekuku">
                                        Initial prices and pool share
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="width: 100%;">
                                <div class="col-md-4">
                                    <div class="firstTokenRate">-</div>
                                    <div class="startTwoTokens">
                                        <span id="first1"></span> per <span id="first2"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="secondTokenRate">-</div>
                                    <div class="endTwoTokens">
                                        <span id="second1"></span> per <span id="second2"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sc-kkGfuU kuSmHG css-1kt4f20">100%</div>
                                    <div class="css-1m402ei">Share of Pool</div>
                                </div>
                            </div>
                        </div>
                    </div>
              <div class="col-sm-12 py-3 text-center">
                <div class="col-md-6">
                <button style="display:none" class="btn btn-danger w-100 mb-3 apprvebuttons" id="approve1" >
                    <div class="css-10ob8xa">Invalid pair</div>
                </button>
              </div>
              <div class="col-md-6">
                <button style="display:none" class="btn btn-danger w-100 mb-3 apprvebuttons" id="approve2" >
                    <div class="css-10ob8xa">Invalid pair</div>
                </button>
              </div>
                <button id="btnAmount" class="btn btn-info btn-block btn-lg">Connect Wallet</button>
              </div>
              <div class="col-sm-12 py-3 row">
                <div class="col-md-6">
                  <span id="minmax" >Minimum received</span>
                </div>
                <div class="col-md-6 text-right">
                  <span id="minrecamount" ></span>
                </div>
                <div class="col-md-6">
                  Price Impact
                </div>
                <div class="col-md-6 text-right">
                  <span id="priceimpact" ></span>
                </div>
                <div class="col-md-6">
                  Liquidity Provider Fee
                </div>
                <div class="col-md-6 text-right">
                  <span id="liqudityfee" >
                  0.003 ETH
                  </span>
                </div>
              </div>
            </div>
            <?php
            	$query2 = "SELECT * FROM currency ";
				$result2 = mysqli_query($conn,$query2);
				$vStr="";
				if($result2){
				while($row = mysqli_fetch_array($result2)){

					$name = $row['name'];
					$mainContractAddress = $row['contractAddress'];
					$mainContractABI = $row['contractABI'];
					?>
					<input type="hidden" id="txt_<?php echo $name; ?>" name="txt_<?php echo $name; ?>" value="<?php echo $name; ?>" class="tokenrow" >
					<input type="hidden" id="txt_mc_<?php echo $name; ?>" name="txt_mc_<?php echo $name; ?>" value="<?php echo $mainContractAddress; ?>" class="tokenrow" >
					<textarea style="visibility: hidden;" id="txt_abi_<?php echo $name; ?>"><?php echo $mainContractABI; ?></textarea>
				<?php
				}

				}else{ echo 'No result found!'; }
            ?>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->



<script src="js/jquery-1.9.0.min.js"></script>
<!-- <msdropdown> -->
<link rel="stylesheet" type="text/css" href="css/dd.css" />
<script src="js/jquery.dd.js"></script>
<!-- </msdropdown> -->


<script>

$(document).ready(function(){

	jQuery.noConflict();

	$("select").msDropdown({roundedBorder:false});

	$("#btnAmount").prop('disabled', false);
	$("#btnAmount").text("Enter an Amount");

	var routerContractAddress = "<?php echo $routerContractAddress; ?>";
    var routerContractABI = <?php echo $routerContractABI; ?>;

	CheckBalanceInWallet('from');

	$("#txtFromToken").change(function(){
		CheckBalanceInWallet('from');
		changeFromToken("from_change");
  	});


	$("#drpFromToken").change(function(){
		var vFromVal = $('#drpFromToken option:selected').text();
		var vToVal = $('#drpToToken option:selected').text();
		if( vFromVal== vToVal)
		{
			alert("Both tokens can not be same");
			return false;
		}
		else
		{
			CheckBalanceInWallet('from');
			changeFromToken("from_change");
		}
		// if($('#drpFromToken option:selected').text() == "ETH")
		// {
		// 	alert(" Etherum selected ");
		// }
		// else
		// {
		// 	alert(" Etherum NOT selected ");
		// }
  	});

  	$("#drpToToken").change(function(){

		var vFromVal = $('#drpFromToken option:selected').text();
		var vToVal = $('#drpToToken option:selected').text()
		if( vFromVal== vToVal)
		{
			alert("Both tokens can not be same");
			$('#txtWalletToBalance').text('0.00');
			$("#drpToToken").val(0);
			return false;
		}
		else
		{
			CheckBalanceInWallet('to');
			changeFromToken("to_change");
		}

  	});


  	function CheckBalanceInWallet(drpType)
  	{
  		var vFromAmount = $('#txtFromToken').val();
  		var vFromCurrencyType = $('#drpFromToken option:selected').text();

  		 window.web3 = new Web3(ethereum);
  		 web3.eth.getAccounts(async function(error, result) {
            if(!error && typeof(result[0]) !== 'undefined')
               {
                	metaMaskAddress=""+result[0];
                	var vCurrencyType = '';
                	if(drpType=='from')
              		{
                		vCurrencyType=$('#drpFromToken option:selected').text();
                	}
                	else
                	{
                		vCurrencyType=$('#drpToToken option:selected').text();
                	}
              		var vAvailableBalance =0;
              		var vCurrentbalance=0;
					var vContractAddress ='';
					var vContractABI ='';
					var vContract='';

					if($('#txt_mc_'+vCurrencyType).val()!=undefined)
					{
	              		vContractAddress = $('#txt_mc_'+vCurrencyType).val().toString(); // main contract address
	              		if($('#txt_abi_'+vCurrencyType).val()!="")
	              		{
		              		vContractABI = $('#txt_abi_'+vCurrencyType).val().toString();
		              		vContractABI = JSON.parse(vContractABI);
		              		vContract = new web3.eth.Contract(vContractABI, vContractAddress, {
				  					from: metaMaskAddress, // default from address
				  				});
		              		// this gives BAT amount
		              		vCurrentbalance =await vContract.methods.balanceOf(metaMaskAddress).call();
		              	}
	              	}

	              	var devide_to = 1e18;

                    if(vCurrencyType == 'cDAI'){
                        devide_to = 1e8;
                    }

              		if(vCurrencyType=="ETH")
              		{
              			// this gives ETH amount
                		vCurrentbalance = await web3.eth.getBalance(metaMaskAddress);
              			vAvailableBalance =parseFloat( vCurrentbalance /  devide_to).toFixed(4);
              		}
              		else
              		{
              			if(vCurrentbalance!="0")
		              	{
	              			vAvailableBalance =parseFloat( vCurrentbalance /  devide_to).toFixed(4);
	              		}
              		}

              		if(drpType=='from')
              		{
              			$('#txtWalletFromBalance').text(vAvailableBalance);
              		}
              		else
              		{
              			$('#txtWalletToBalance').text(vAvailableBalance);
              		}

              		// Change button text
          			if(parseInt(vCurrentbalance)==0)
	              	{
	              		alert("There is 0 balance found for "+vFromCurrencyType);
	              		$("#txtFromToken").val('');
	              		$("#btnAmount").prop('disabled', true);
			              $("#btnAmount").text("Enter an Amount");
	              	}
	              	else if(parseFloat(vFromAmount)==NaN || vFromAmount=="" || parseFloat(vFromAmount)==0)
	              	{
	              		$("#btnAmount").prop('disabled', true);
			              $("#btnAmount").text("Enter an Amount");
	              	}
                	else if(parseFloat(vFromAmount) > parseFloat(vAvailableBalance ))
                	{
                		$("#btnAmount").text("Insuficient liquidity");
                		$("#btnAmount").prop('disabled', true);
                	}
                	else
                	{
                		if($('#drpToToken option:selected').val()=="")
                		{
                			$("#btnAmount").prop('disabled', true);
							        $("#btnAmount").text("Select Token");
                		}
                		else
                		{
                			$("#btnAmount").prop('disabled', false);
        							$("#btnAmount").text("SWAP");
        						}
                	}

              }
              else
              {
              	$('#txtFromToken').val('');
              	$('#txtToToken').val('');
              	alert("Please connect with your wallet.")
              }
            });
  	}

  	$('#txtFromToken').on('keyup paste input', function () {
        while (($(this).val().split(".").length - 1) > 1) {
            $(this).val($(this).val().slice(0, -1));
            if (($(this).val().split(".").length - 1) > 1) {
                continue;
            } else {
                return false;
            }
        }
        // replace any character that's not a digit or a dot
        $(this).val($(this).val().replace(/[^0-9.]/g, ''));
        changeFromToken();

        return true;
    });

   $('#txtToToken').on('keyup paste input', function () {
        while (($(this).val().split(".").length - 1) > 1) {
            $(this).val($(this).val().slice(0, -1));

            if (($(this).val().split(".").length - 1) > 1) {
                continue;
            } else {
                return false;
            }
        }
        // replace any character that's not a digit or a dot
        $(this).val($(this).val().replace(/[^0-9.]/g, ''));
        changeFromToken('to_change');
        return true;
    });


   $("#btnAmount").click(function(){
		var vFromVal = $('#drpFromToken option:selected').text();
		var vToVal = $('#drpToToken option:selected').text();
    var vFromTokenVal = $('#txtFromToken').val();
		var vToTokenVal = $('#txtToToken').val();
		var contractABI = '';
    	var contractAddress = '';
    	var devide_to = '';

      window.web3 = new Web3(ethereum);
      web3.eth.getAccounts(async function (error, result) {

       var ETHmetaMaskAddress = result[0];
       let vExchangeAddress='';
       console.log(" my wallet address =" + ETHmetaMaskAddress + vFromVal);
       const addressFrom =ETHmetaMaskAddress; //'0x0e364eb0ad6eb5a4fc30fc3d2c2ae8ebe75f245c'

       var factaddress='0x5c69bee701ef814a2b6a3edd4b1652cb9cc5aa6f';
       var factoryabi='[{"inputs":[{"internalType":"address","name":"_feeToSetter","type":"address"}],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"token0","type":"address"},{"indexed":true,"internalType":"address","name":"token1","type":"address"},{"indexed":false,"internalType":"address","name":"pair","type":"address"},{"indexed":false,"internalType":"uint256","name":"","type":"uint256"}],"name":"PairCreated","type":"event"},{"constant":true,"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"allPairs","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"allPairsLength","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"tokenA","type":"address"},{"internalType":"address","name":"tokenB","type":"address"}],"name":"createPair","outputs":[{"internalType":"address","name":"pair","type":"address"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"feeTo","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"feeToSetter","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"},{"internalType":"address","name":"","type":"address"}],"name":"getPair","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"_feeTo","type":"address"}],"name":"setFeeTo","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"_feeToSetter","type":"address"}],"name":"setFeeToSetter","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}]';
       var  factorycontract = new web3.eth.Contract(JSON.parse(factoryabi), factaddress);
       // SWAP ETH to ERC20
       if(vFromVal == "ETH")
       {
    	    // get contract address & ABI for selected token
		      $.ajax({
                type: "POST",
                url: 'ajax/getCurrencyData.php',
                data: {tokenname:vToVal },
                dataType: "json",
                success: function (res) {
                	if (res.status == '1') {
                		contractABI = res.data.contractABI;
                    	contractAddress = res.data.contractAddress;
                    	devide_to = '1e'+res.data.desimals;

                    	console.log(" token ="+res.data.name);
                    	console.log(" contract address = "+ contractAddress);
                      var vPairAddress='';
                      var vgetpair= factorycontract.methods.getPair('0xc778417e063141139fce010982780140aa0cd5ab',contractAddress).call();
                      const vgetpairval = vgetpair.then(function(result1){
                        vPairAddress= result1;
                      });

                      if(vPairAddress='') {
                        const tx = factorycontract.methods.createPair('0xc778417e063141139fce010982780140aa0cd5ab',contractAddress).send({
                        }).on("confirmation", function () {
                            var vgetpair= factorycontract.methods.getPair('0xc778417e063141139fce010982780140aa0cd5ab',contractAddress).call();
                            const vgetpairval = vgetpair.then(function(result1){
                              vPairAddress= result1;
                            });
                          })
                          .on("error", async function () {
                              console.log("Error");
                          });
                      }

                      vFromTokenVal = vFromTokenVal* 1e18;
                      var amountout=vToTokenVal*devide_to;
                      amountout = amountout.toLocaleString('fullwide', {useGrouping:false});
                      var path = ['0xc778417e063141139fce010982780140aa0cd5ab', contractAddress];
                        var milliseconds = 300 * 1000;
                      var deadline = new Date().getTime() + milliseconds;
                      var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);
                      const tx = routerContract.methods.swapExactETHForTokens(amountout,path,addressFrom,deadline).send({
                        from:addressFrom,
                        gasLimit: web3.utils.toHex(260000),
                        gasPrice: web3.utils.toHex(1000000000),
                        value: vFromTokenVal
                      }).on("transactionHash", function (hash) {
                           //$('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="supplyWithdrawLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Thank you for supplying! You can check the status at <a href="<?php echo $etherscanTx;?>'+hash+'" target="_blank" style="text-decoration:underline;" >etherscan.io</a></span>');
                           console.log("transactionHash : " + hash);
                      }).on("receipt", function () {
                          console.log("Receipt");
                      })
                      .on("confirmation", function () {
                          console.log("Confirmed");
                      })
                      .on("error", async function () {
                          console.log("Error");
                      });

                	}
                },
                error: function (result) {
                    alert("Error");
                }
            });
        }
        else if(vToVal == "ETH") {
          $.ajax({
                type: "POST",
                url: 'ajax/getCurrencyData.php',
                data: {tokenname:vFromVal },
                dataType: "json",
                success: function (res) {
                 if (res.status == '1') {
                   contractABI = res.data.contractABI;
                     contractAddress = res.data.contractAddress;
                     devide_to = '1e'+res.data.desimals;

                     console.log(" token ="+res.data.name);
                     console.log(" contract address = "+ contractAddress);
                      var vPairAddress='';
                      var vgetpair= factorycontract.methods.getPair('0xc778417e063141139fce010982780140aa0cd5ab',contractAddress).call();
                      const vgetpairval = vgetpair.then(function(result1){
                        vPairAddress= result1;
                      });

                      if(vPairAddress='') {
                        const tx = factorycontract.methods.createPair('0xc778417e063141139fce010982780140aa0cd5ab',contractAddress).send({
                        }).on("confirmation", function () {
                            var vgetpair= factorycontract.methods.getPair('0xc778417e063141139fce010982780140aa0cd5ab',contractAddress).call();
                            const vgetpairval = vgetpair.then(function(result1){
                              vPairAddress= result1;
                            });
                          })
                          .on("error", async function () {
                              console.log("Error");
                          });
                      }

                      vToTokenVal = vToTokenVal* 1e18;
                      vToTokenVal = vToTokenVal.toLocaleString('fullwide', {useGrouping:false});
                      var amountout=vFromTokenVal*devide_to;
                      amountout = amountout.toLocaleString('fullwide', {useGrouping:false});
                      var path = [contractAddress,'0xc778417e063141139fce010982780140aa0cd5ab'];
                      var milliseconds = 300 * 1000;
                      var deadline = new Date().getTime() + milliseconds;
                      var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);
                      const tx = routerContract.methods.swapExactTokensForETH(amountout,vToTokenVal,path,addressFrom,deadline).send({
                        from:addressFrom,
                        gasLimit: web3.utils.toHex(260000),
                        gasPrice: web3.utils.toHex(1000000000),
                        value: vToTokenVal
                      }).on("transactionHash", function (hash) {
                           //$('.modal-content').html('<div class="modal-header"><h5 class="modal-title" id="supplyWithdrawLabel">Confirm Transaction</h5><button type="button" class="btn-close" data-dismiss="modal"></button></div><span style="padding:20% 30%;text-align:center">Thank you for supplying! You can check the status at <a href="<?php echo $etherscanTx;?>'+hash+'" target="_blank" style="text-decoration:underline;" >etherscan.io</a></span>');
                           console.log("transactionHash : " + hash);
                      }).on("receipt", function () {
                          console.log("Receipt");
                      })
                      .on("confirmation", function () {
                          console.log("Confirmed");
                      })
                      .on("error", async function () {
                          console.log("Error");
                      });

                 }
                },
                error: function (result) {
                    alert("Error");
                }
            });
        }
				 // the addressFrom address that will send the test transaction

        	 // the Uniswap factory contract address



		});
  	});

  	function changeFromToken(change = '') {

        var spndrpFromToken = drpFromToken = $('#drpFromToken option:selected').val();
        var spndrpToToken = drpToToken = $('#drpToToken option:selected').val();
        if(change=='to_change')
        {
          spndrpToToken = $('#drpFromToken option:selected').val();
          spndrpFromToken  = $('#drpToToken option:selected').val();
        }
        window.web3 = new Web3(ethereum);
        web3.eth.getAccounts(async function (error, result) {
          var factaddress='0x5c69bee701ef814a2b6a3edd4b1652cb9cc5aa6f';
          var factoryabi='[{"inputs":[{"internalType":"address","name":"_feeToSetter","type":"address"}],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"token0","type":"address"},{"indexed":true,"internalType":"address","name":"token1","type":"address"},{"indexed":false,"internalType":"address","name":"pair","type":"address"},{"indexed":false,"internalType":"uint256","name":"","type":"uint256"}],"name":"PairCreated","type":"event"},{"constant":true,"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"allPairs","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"allPairsLength","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"tokenA","type":"address"},{"internalType":"address","name":"tokenB","type":"address"}],"name":"createPair","outputs":[{"internalType":"address","name":"pair","type":"address"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"feeTo","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"feeToSetter","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"},{"internalType":"address","name":"","type":"address"}],"name":"getPair","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"_feeTo","type":"address"}],"name":"setFeeTo","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"_feeToSetter","type":"address"}],"name":"setFeeToSetter","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}]';
          var  factorycontract = new web3.eth.Contract(JSON.parse(factoryabi), factaddress);
            var myAccountAddress = result[0];
            var selectedtoken =[];
            if(spndrpToToken=='ETH')
            {
              selectedtoken=[spndrpFromToken];
            }
            else if(spndrpFromToken=='ETH'){
                selectedtoken=[spndrpToToken];
            }
            else {
              selectedtoken=[spndrpFromToken,spndrpToToken];
            }
            /*var startToken = $("#drpFromToken_title .ddlabel").html();
            var endToken = $("#drpToToken_title .ddlabel").html();*/


            $.ajax({
                type: "POST",
                url: 'ajax/getCurrencyData1.php',
                data: {tokenname:selectedtoken },
                dataType: "json",
                success: function (resp) {

                    //console.log(res.status);
                    if(resp.length==1){
                      var res=resp[0];
                      if (res.status == '1') {

                        var contractABI = res.data.contractABI;
                        var contractAddress = res.data.contractAddress;
                        var devide_to = '1e'+res.data.desimals;

                        var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);

                        var WETHobj = routerContract.methods.WETH().call();
                        var WETHContract='';
                        const WETHval = WETHobj.then(function(result){
                            WETHContract=result;
                            console.log("weth result : " + result);
                            if(result){
                                var txtFromToken = $("#txtFromToken").val();
                                if(change=='to_change') {
                                    txtFromToken = $("#txtToToken").val();
                                }

                                var amountOut = ( devide_to * txtFromToken);
                                amountOut = amountOut.toLocaleString('fullwide', {useGrouping:false});
                                console.log("amountOut : " +amountOut);
                                var path = [WETHContract, contractAddress];
                                console.log(WETHContract);
                                if(spndrpFromToken=='ETH'){
                                  console.log("444" + drpToToken + " :: " + change);
                                  if(change=='to_change') {
                                      path = [contractAddress,WETHContract];
                                      //if(drpToToken=='ETH')
                                    //  {
                                      //  var getamntin = routerContract.methods.getAmountsOut(amountOut, path).call();
                                      //}
                                    //  else{
                                        var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();
                                    //  }
                                  }
                                  else{


                                    var getamntin = routerContract.methods.getAmountsOut(amountOut, path).call();
                                  }

                                } else {
                                    //path = [contractAddress,result];
                                    if(drpToToken=='ETH')
                                    {
                                      path = [contractAddress,WETHContract];
                                      var getamntin = routerContract.methods.getAmountsOut(amountOut, path).call();
                                    }
                                    else{
                                    var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();
                                  }
                                }

                                console.log(getamntin);

                                getamntin.then(function(getAmtVal) {

                                    console.log("getAmtVal : " + getAmtVal);
                                    if(getAmtVal){

                                        if(spndrpToToken=='ETH' || spndrpFromToken=='ETH') {
                                            devide_to = 1e18;

                                            //if((spndrpToToken=='ETH' &&  change=='to_change') || drpToToken=='ETH'  )
                                            if(change!='to_change' && drpToToken!='ETH'  )
                                            {console.log("11111");
                                              var ETHValue = getAmtVal[1];
                                              var  tokenAount= getAmtVal[0];
                                            } else {
                                                console.log("222222");
                                                if(drpFromToken!='ETH' && change!='to_change'){
                                                  var ETHValue = getAmtVal[1];
                                                  var  tokenAount= getAmtVal[0];
                                                }
                                                else {
                                                  var ETHValue = getAmtVal[0];
                                                  var  tokenAount= getAmtVal[1];
                                                }

                                            }



                                            var inpDevide = (ETHValue/devide_to).toFixed(8);
                                            var getInpSingle = parseFloat(inpDevide).toFixed(8);


                                            var forFirst = getInpSingle;
                                            var forSecond = (1 / forFirst).toFixed(8);
                                            if(change=='to_change') {
                                              $("#txtFromToken").val(parseFloat(forFirst).toFixed(8));
                                              $("#minmax").html('Maximum sold');
                                              $(".firstTokenRate").html(parseFloat(forFirst/$("#txtToToken").val()));
                                              $(".secondTokenRate").html(parseFloat(forSecond*$("#txtToToken").val()));
                                              //$("#txtFromToken").focus();
                                            } else {
                                              $("#txtToToken").val(parseFloat(forFirst).toFixed(8));
                                              $(".firstTokenRate").html(parseFloat(forFirst/$("#txtFromToken").val()));
                                              $(".secondTokenRate").html(parseFloat(forSecond*$("#txtFromToken").val()));
                                              $("#minmax").html('Minimum received');
                                              //$("#txtToToken").focus();
                                            }



                                            $(".startTwoTokens #first1").html(spndrpToToken);
                                            $(".startTwoTokens #first2").html(spndrpFromToken);
                                            $(".endTwoTokens #second1").html(spndrpFromToken);
                                            $(".endTwoTokens #second2").html(spndrpToToken);

                                        } else {

                                            var tokenAount = getAmtVal[0];
                                            var ETHValue = getAmtVal[1];
                                            //var inpDevide = (amountOut / tokenAount).toFixed(8);
                                            console.log("tokenAount : " + tokenAount);

                                            var inpDevide = (tokenAount/devide_to).toFixed(8);
                                            var getInpSingle = parseFloat(inpDevide).toFixed(8);
                                              console.log("getInpSingle : " + getInpSingle);

                                            var forFirst =  getInpSingle;
                                            console.log("forFirst : " + forFirst);
                                            var forSecond =((1 / forFirst)).toFixed(8);
                                            console.log("*txtFromToken : " + txtFromToken);
                                            console.log("forSecond : " + forSecond);
                                            if(change=='to_change')
                                            {
                                              $("#txtFromToken").val(parseFloat(forFirst).toFixed(8));
                                              //$("#txtFromToken").focus();
                                            }
                                            else {
                                              $("#txtToToken").val(parseFloat(forFirst).toFixed(3));
                                            //$("#txtToToken").focus();
                                            }

                                            $(".firstTokenRate").html(parseFloat(forFirst));
                                            $(".secondTokenRate").html(parseFloat(forSecond));
                                            $(".startTwoTokens #first1").html(spndrpFromToken);
                                            $(".startTwoTokens #first2").html(spndrpToToken);
                                            $(".endTwoTokens #second1").html(spndrpToToken);
                                            $(".endTwoTokens #second2").html(spndrpFromToken);
                                        }

                                        if(parseFloat($("#txtFromToken").val()) > parseFloat($("#txtWalletFromBalance").html())) {
                                            $("#btnAmount").prop('disabled', true);
                                            var vtoken=$('#drpFromToken option:selected').val();
                                            $("#btnAmount").html('Insufficient ' + vtoken +' balance');
                                        } /*else if(parseFloat($("#txtToToken").val()) > parseFloat($("#txtWalletToBalance").html())) {
                                            $("#btnAmount").prop('disabled', true);
                                            var vtoken=$('#drpToToken option:selected').val();
                                            $("#btnAmount").html('Insufficient ' + vtoken +' balance');
                                        } */
                                        //else {

                                          var vPairAddress='';
                                          var vgetpair= factorycontract.methods.getPair(WETHContract,contractAddress).call();
                                          const vgetpairval = vgetpair.then(function(result1){
                                            vPairAddress= result1;
                                            var vPairABI='[{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1","type":"uint256"},{"indexed":true,"internalType":"address","name":"to","type":"address"}],"name":"Burn","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0In","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1In","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount0Out","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1Out","type":"uint256"},{"indexed":true,"internalType":"address","name":"to","type":"address"}],"name":"Swap","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"uint112","name":"reserve0","type":"uint112"},{"indexed":false,"internalType":"uint112","name":"reserve1","type":"uint112"}],"name":"Sync","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"DOMAIN_SEPARATOR","outputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"MINIMUM_LIQUIDITY","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"PERMIT_TYPEHASH","outputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"},{"internalType":"address","name":"","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"burn","outputs":[{"internalType":"uint256","name":"amount0","type":"uint256"},{"internalType":"uint256","name":"amount1","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"factory","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"getReserves","outputs":[{"internalType":"uint112","name":"_reserve0","type":"uint112"},{"internalType":"uint112","name":"_reserve1","type":"uint112"},{"internalType":"uint32","name":"_blockTimestampLast","type":"uint32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"_token0","type":"address"},{"internalType":"address","name":"_token1","type":"address"}],"name":"initialize","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"kLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"mint","outputs":[{"internalType":"uint256","name":"liquidity","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"nonces","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"},{"internalType":"uint256","name":"deadline","type":"uint256"},{"internalType":"uint8","name":"v","type":"uint8"},{"internalType":"bytes32","name":"r","type":"bytes32"},{"internalType":"bytes32","name":"s","type":"bytes32"}],"name":"permit","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"price0CumulativeLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"price1CumulativeLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"skim","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount0Out","type":"uint256"},{"internalType":"uint256","name":"amount1Out","type":"uint256"},{"internalType":"address","name":"to","type":"address"},{"internalType":"bytes","name":"data","type":"bytes"}],"name":"swap","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"sync","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"token0","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"token1","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"}]';
                                                var pairContract = new web3.eth.Contract(JSON.parse(vPairABI), vPairAddress);
                                                var getreserves = pairContract.methods.getReserves().call();
                                                getreserves.then(function(response) {
                                                  console.log("getreserves : " + response[0]);
                                                  var vReverse1=response[0]/devide_to;
                                                  var vReverse2=parseFloat(response[1]/devide_to).toFixed(4);
                                                  if(drpToToken=='ETH')
                                                  {
                                                    vReverse1=parseFloat(response[1]/devide_to).toFixed(4);
                                                    vReverse2=parseFloat(response[0]/devide_to).toFixed(4);
                                                  }
                                                  console.log("vReverse1 : " + vReverse1);
                                                  console.log("vReverse2 : " +$("#txtFromToken").val()+ " :: "+  vReverse2);


                                                  var vLiqProviderFee=0.003;
                                                  vLiqProviderFee = vLiqProviderFee*$("#txtFromToken").val();

                                                  //vLiqProviderFee = parseFloat(vLiqProviderFee).toFixed(8);
                                                //  console.log("ASA: "+ Math.floor($("#txtToToken").val()));
                                                if(change=='to_change' && drpToToken!='ETH') {
                                                  var vPriceImpact=parseFloat(($("#txtFromToken").val()/vReverse2)*100).toFixed(2);
                                                  console.log("11!: " + vPriceImpact);
                                                  //vLiqProviderFee = vLiqProviderFee/10;
                                                  var minrec=parseFloat($("#txtFromToken").val()-($("#txtFromToken").val()*vLiqProviderFee)).toFixed(5);
                                                }
                                                else {
                                                  var vPriceImpact=parseFloat(($("#txtToToken").val()/vReverse1)*100).toFixed(2);
                                                  console.log("2222!: " + vPriceImpact);
                                                  var minrec=parseFloat($("#txtToToken").val()-($("#txtToToken").val()*vLiqProviderFee)).toFixed(5);
                                                }
                                                $("#priceimpact").html(vPriceImpact+'%');
                                                  $("#minrecamount").html(minrec+' ' + spndrpToToken);
                                                  $("#liqudityfee").html(vLiqProviderFee+' '+drpFromToken);
                                                  if(parseFloat(vPriceImpact)>5 && parseFloat(vPriceImpact)<=15)
                                                  {
                                                    $("#btnAmount").html('Swap Anyway');
                                                  }
                                                  else if (parseFloat(vPriceImpact)>15) {
                                                    $("#btnAmount").prop('disabled', true);
                                                    $("#btnAmount").html('Price Impact is too high');
                                                  }


                                                });
                                              });
                                              //$("#btnAmount").html('Swap');
                                              //check approval into ERC-20 token for router contract
                                            contractABI_json = JSON.parse(contractABI);

                                            var tknContract = new web3.eth.Contract(contractABI_json, contractAddress);
                                            var getallowance = tknContract.methods.allowance(myAccountAddress, routerContractAddress).call();
                                            getallowance.then(function(getallowance) {
                                                console.log("getallowance : " + getallowance);
                                                if(parseInt(getallowance)<= 10000) {
                                                    $("#approve2").show();
                                                    if($('#drpToToken option:selected').val()=='ETH'){
                                                      var vtoken=$('#drpFromToken option:selected').val();
                                                    }
                                                    else {
                                                      var vtoken=$('#drpToToken option:selected').val();
                                                    }
                                                    $("#approve2").html('Approve '+vtoken);
                                                    $("#approve2").attr('data-address',contractAddress);
                                                    $("#approve2").attr('data-abi',contractABI);
                                                    $("#approve2").attr('data-decimal',devide_to);
                                                    $("#btnAmount").prop('disabled', true);
                                                } else {
                                                    $("#approve2").hide();
                                                    $("#approve2").attr('data-address','');
                                                    $("#approve2").attr('data-abi','');
                                                    $("#approve2").attr('data-decimal',0);
                                                    if($("#btnAmount").html()!='Price Impact is too high')
                                                    {
                                                      $("#btnAmount").prop('disabled', false);
                                                      $("#btnAmount").html('Swap');
                                                    }
                                                }
                                            });
                                      //  }
                                    } else {
                                        $("#btnAmount").prop('disabled', true);
                                        $("#btnAmount").html('Insufficient token');
                                    }
                                });

                            } else {
                                $("#btnAmount").prop('disabled', true);
                                $("#btnAmount").html('Insufficient token');
                            }
                        });

                    }
                    }
                    else {
                      var contractABI1,contractAddress1,devide_to1;
                      var contractABI2,contractAddress2,devide_to2;
                      for(i=0;i<resp.length;i++)
                      {
                        var res=resp[i];

                        if (res.status == '1') {
                          if(i==0){
                             contractABI1 = res.data.contractABI;
                             contractAddress1 = res.data.contractAddress;
                             devide_to1 = '1e'+res.data.desimals;
                          }
                          else {
                             contractABI2 = res.data.contractABI;
                             contractAddress2 = res.data.contractAddress;
                             devide_to2 = '1e'+res.data.desimals;
                          }
                        }
                      }
                      var txtFromToken = $("#txtFromToken").val();

                      if(change=='to_change') {
                          txtFromToken = $("#txtToToken").val();
                          //var amountOut = (devide_to2 * txtFromToken);
                        //  amountOut = ( devide_to * txtFromToken);
                      }
                      var amountOut = (devide_to1 * txtFromToken);
                      var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);

                      amountOut = amountOut.toLocaleString('fullwide', {useGrouping:false});
                      console.log("amountOut : " +amountOut);

                      var WETHobj = routerContract.methods.WETH().call();

                      const WETHval = WETHobj.then(function(result){

                        console.log(result);
                        var path = [result, contractAddress1];
                        console.log(path);
                        var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();
                        console.log("getamntin : " + getamntin);
                        getamntin.then(function(getAmtVal) {
                            console.log("getAmtVal : " + getAmtVal);
                            if(getAmtVal){
                              var tokenAount = getAmtVal[0];
                              var ETHValue = getAmtVal[1];
                              var path = [result, contractAddress2];
                              tokenAount = tokenAount.toLocaleString('fullwide', {useGrouping:false});
                              var getamntout = routerContract.methods.getAmountsOut(tokenAount, path).call();
                              getamntout.then(function(getAmtVal) {
                                console.log("getamntout : " + getamntout);
                                if(getamntout){
                                   tokenAount = getAmtVal[1];
                                   ETHValue = getAmtVal[0];
                              //var inpDevide = (amountOut / tokenAount).toFixed(8);
                                    console.log("tokenAount : " + tokenAount);
                                    if(change=='to_change') {
                                      //var inpDevide = (tokenAount/devide_to1).toFixed(8);
                                      console.log("devide_to2 : " +devide_to2);
                                      var inpDevide = (tokenAount/devide_to2).toFixed(8);
                                    }
                                    else {
                                        var inpDevide = (tokenAount/devide_to2).toFixed(8);
                                    }

                                    var getInpSingle = parseFloat(inpDevide).toFixed(8);
                                      console.log("getInpSingle : " + getInpSingle);

                                    var forFirst =  getInpSingle;
                                    console.log("forFirst : " + forFirst);
                                    var forSecond =((1 / forFirst)).toFixed(8);
                                    console.log("*txtFromToken : " + txtFromToken);
                                    console.log("forSecond : " + forSecond);
                                    if(change=='to_change')
                                    {
                                      $("#txtFromToken").val(parseFloat(forFirst).toFixed(8));
                                      //$("#txtFromToken").focus();
                                    }
                                    else {
                                      $("#txtToToken").val(parseFloat(forFirst).toFixed(8));
                                    //$("#txtToToken").focus();
                                    }

                                    $(".firstTokenRate").html(parseFloat(forFirst/$("#txtFromToken").val()));
                                    $(".secondTokenRate").html(parseFloat(forSecond));
                                    $(".startTwoTokens #first1").html(spndrpFromToken);
                                    $(".startTwoTokens #first2").html(spndrpToToken);
                                    $(".endTwoTokens #second1").html(spndrpToToken);
                                    $(".endTwoTokens #second2").html(spndrpFromToken);
                                    if(parseFloat($("#txtFromToken").val()) > parseFloat($("#txtWalletFromBalance").html())) {
                                        $("#btnAmount").prop('disabled', true);
                                        var vtoken=$('#drpFromToken option:selected').val();
                                        $("#btnAmount").html('Insufficient ' + vtoken +' Token');
                                    } else if(parseFloat($("#txtToToken").val()) > parseFloat($("#txtWalletToBalance").html())) {
                                        $("#btnAmount").prop('disabled', true);
                                        var vtoken=$('#drpToToken option:selected').val();
                                        $("#btnAmount").html('Insufficient ' + vtoken +' Token');
                                    } else {

                                        $("#btnAmount").html('Swap');
                                        //check approval into ERC-20 token for router contract
                                        contractABI_json1 = JSON.parse(contractABI1);

                                        var tknContract1 = new web3.eth.Contract(contractABI_json1, contractAddress1);
                                        var getallowance1 = tknContract1.methods.allowance(myAccountAddress, routerContractAddress).call();
                                        getallowance1.then(function(getallowance1) {
                                            console.log("getallowance1 : " + getallowance1);
                                            if(parseInt(getallowance1)<= 0) {
                                                $("#approve1").show();
                                                var vtoken1=$('#drpFromToken option:selected').val();
                                                $("#approve1").html('Approve '+vtoken1);
                                                $("#approve1").attr('data-address',contractAddress1);
                                                $("#approve1").attr('data-abi',contractABI1);
                                                $("#approve1").attr('data-decimal',devide_to1);
                                                $("#btnAmount").prop('disabled', true);
                                            } else {
                                                $("#approve1").hide();
                                                $("#approve1").attr('data-address','');
                                                $("#approve1").attr('data-abi','');
                                                $("#approve1").attr('data-decimal',0);
                                                $("#btnAmount").prop('disabled', false);
                                                $("#btnAmount").html('Swap');
                                            }
                                        });



                                              contractABI_json2 = JSON.parse(contractABI2);

                                              var tknContract2 = new web3.eth.Contract(contractABI_json2, contractAddress2);
                                              var getallowance2 = tknContract2.methods.allowance(myAccountAddress, routerContractAddress).call();
                                              getallowance2.then(function(getallowance2) {
                                                  console.log("getallowance2 : " + getallowance2);
                                                  if(parseInt(getallowance2)<= 0) {
                                                      $("#approve2").show();
                                                      var vtoken=$('#drpToToken option:selected').val();
                                                      $("#approve2").html('Approve '+vtoken);
                                                      $("#approve2").attr('data-address',contractAddress1);
                                                      $("#approve2").attr('data-abi',contractABI2);
                                                      $("#approve2").attr('data-decimal',devide_to2);
                                                      $("#btnAmount").prop('disabled', true);
                                                  } else {
                                                      $("#approve2").hide();
                                                      $("#approve2").attr('data-address','');
                                                      $("#approve2").attr('data-abi','');
                                                      $("#approve2").attr('data-decimal',0);
                                                      if($("#approve1").is(':hidden')){
                                                        $("#btnAmount").prop('disabled', false);
                                                      }
                                                      $("#btnAmount").html('Swap');
                                                  }
                                              });
                                    }
                                }
                              });
                            }
                          });
                      });
                    }
                    /*if (res.status == '1') {
                        var contractABI = res.data.contractABI;
                        var contractAddress = res.data.contractAddress;
                        var devide_to = '1e'+res.data.desimals;

                            var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);

                            var WETHobj = routerContract.methods.WETH().call();

                            const WETHval = WETHobj.then(function(result){

                                console.log("weth result : " + result);

                                var txtFromToken = $("#txtFromToken").val();
                                var amountOut = ( devide_to * txtFromToken);
                                if(change=='to_change')
                                {
                                  txtFromToken = $("#txtToToken").val();
                                  amountOut = ( devide_to * txtFromToken);
                                }
                                if(spndrpToToken=='ETH' )
                                {
                                  amountOut = ( devide_to * txtFromToken);
                                }

                                var path = [result, contractAddress];
              								amountOut = amountOut.toLocaleString('fullwide', {useGrouping:false});
              								console.log("amountOut : " + amountOut);

              								console.log("path : " + path);
              									//	var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();
              									if(spndrpFromToken=='ETH'){
              											var getamntin = routerContract.methods.getAmountsOut(amountOut, path).call();
              									} else {
              											var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();
              									}


                                getamntin.then(function(getAmtVal) {

                                    console.log(getAmtVal);

                                    if(spndrpToToken=='ETH' || spndrpFromToken=='ETH')
                                    {
                                      devide_to = 1e18;
                                      //}


                                      //if(spndrpToToken=='ETH' )
                                      //{
                                      //  var ETHValue = getAmtVal[0];
                                      //  var  tokenAount= getAmtVal[1];
                      									if(spndrpToToken=='ETH' ) {
                      											var ETHValue = getAmtVal[0];
                      											var  tokenAount= getAmtVal[1];
                      									} else {
                      											var ETHValue = getAmtVal[1];
                      											var  tokenAount= getAmtVal[0];
                      									}
                                        var inpDevide = (ETHValue/devide_to).toFixed(8);
                                        var getInpSingle = parseFloat(inpDevide).toFixed(8);


                                        var forFirst = getInpSingle;
                                        var forSecond = (1 / forFirst).toFixed(8);
                                        if(change=='to_change')
                                        {
                                          $("#txtFromToken").val(parseFloat(forFirst).toFixed(8));
                                          //$("#txtFromToken").focus();
                                        }
                                        else {

  	                                      $("#txtToToken").val(parseFloat(forFirst).toFixed(8));
  	                                      //$("#txtToToken").focus();
  	                                    }
                                        $(".firstTokenRate").html(parseFloat(forFirst));
                                        $(".secondTokenRate").html(parseFloat(forSecond));

                                        $(".startTwoTokens #first1").html(spndrpToToken);
                                        $(".startTwoTokens #first2").html(spndrpFromToken);
                                        $(".endTwoTokens #second1").html(spndrpFromToken);
                                        $(".endTwoTokens #second2").html(spndrpToToken);
                                      }
                                    else {
                                      var tokenAount = getAmtVal[0];
                                      var ETHValue = getAmtVal[1];
                                      //var inpDevide = (amountOut / tokenAount).toFixed(8);
                                      console.log("tokenAount : " + tokenAount);

                                      var inpDevide = (tokenAount/devide_to).toFixed(8);
                                      var getInpSingle = parseFloat(inpDevide).toFixed(8);
                                        console.log("getInpSingle : " + getInpSingle);

                                      var forFirst =  ((1 / getInpSingle)).toFixed(8);
                                      console.log("forFirst : " + forFirst);
                                      var forSecond =getInpSingle;
                                      console.log("*txtFromToken : " + txtFromToken);
                                      console.log("forSecond : " + forSecond);
                                      if(change=='to_change')
                                      {
                                        $("#txtFromToken").val(parseFloat(forFirst).toFixed(8));
                                        //$("#txtFromToken").focus();
                                      }
                                      else {
                                        $("#txtToToken").val(parseFloat(forFirst).toFixed(3));
                                      //$("#txtToToken").focus();
                                      }

                                      $(".firstTokenRate").html(parseFloat(forFirst));
                                      $(".secondTokenRate").html(parseFloat(forSecond));

                                      $(".startTwoTokens #first1").html(spndrpFromToken);
                                      $(".startTwoTokens #first2").html(spndrpToToken);
                                      $(".endTwoTokens #second1").html(spndrpToToken);
                                      $(".endTwoTokens #second2").html(spndrpFromToken);
                                    }
                                      //$("#btnAmount").prop('disabled', false);

                                     // $("#btnAmount").html('Supply');
                                });
                            });

                    }*/
                },
                error: function (result) {
                    alert("Error");
                }
            });
        });
    }
    $(".apprvebuttons").on("click",function(){

      //alert($(this).attr('data-address') + ' --- ' + $(this).attr('data-abi'));
      var contractAddress=$(this).attr('data-address');
      var contractABI_json = JSON.parse($(this).attr('data-abi'));
      var contract_dec = JSON.parse($(this).attr('data-decimal'));
      web3.eth.getAccounts(async function (error, result) {

          myAccountAddress = result[0];

        var vId=$(this).attr('id');
      var tknContract = new web3.eth.Contract(contractABI_json, contractAddress);
      var value= 100000000*parseInt(contract_dec);
      value = value.toLocaleString('fullwide', {useGrouping:false});
      var getapprove = tknContract.methods.approve(routerContractAddress,value).send({
          from: myAccountAddress,
          gasLimit: web3.utils.toHex(560000),
          gasPrice: web3.utils.toHex(10000000000),
          value: 0 })
        .on("confirmation", function () {

        console.log(getapprove);
        //if(getapprove){
          $("#"+vId).hide();

          $(".apprvebuttons").each(function() {
            if($(this).is(':hidden'))
            {
              $("#create_pair_btn").prop('disabled', false);
            }
          });
        });
      });
    });
	//========== Get Tokens =============

	$.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: 'ajax/getAllTokens0.php',
            data: "{}",
            dataType: "json",
            success: function (data) {
            	var vStr='';
            	var arr = {'text': [],'image':[],'value':[],'description':[]};
                for(i=0;i<data.length;i++)
                {
                	//vStr = vStr + '<div class="col-sm-12"><div class="clstok" style="cursor: pointer;"><img src="'+data[i].cURL+'" style="width: 20px;"> <span class="ml-2">'+data[i].cCode+'</span></div></div>';
                	vStr = vStr + '<li class="enabled _msddli_ selected"><img src="'+data[i].cURL+'" class="fnone"><span class="ddlabel">'+data[i].cCode+'</span><div class="clear"></div></li>';
                	var oDD = $('#drpFromToken').msDropDown().data("dd");
                	oDD.add({text:data[i].cCode, value:data[i].cCode, image:data[i].cURL});

                	var oDD1 = $('#drpToToken').msDropDown().data("dd");
                	oDD1.add({text:data[i].cCode, value:data[i].cCode, image:data[i].cURL});
                }
            },
            error: function (result) {
                alert("Error");
            }
        });
 });
  </script>
  <?php include 'footer.php';?>
