<?php include 'header.php';?>
<?php include 'sidebar.php';?>

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

            	<div class="modal-header border-bottom-0 p-0 mb-3">
                <h5 class="modal-title" id="coin_option2Label"> Swap </h5>
                <button class="open_settings_dialog_button close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sc-gbOuXE daxFHC"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></button>
                <span class="exp_md_ison" <?php if ($toggle_expert_mode == '') { ?> style="display: none;" <?php } ?> >🧙</span>
            </div>

            	<div class="col-lg-12 col-md-6 col-sm-6 text-right">
	                <div class="sc-kkGfuU hyvXgi css-1rhdhic">Balance: <span id="txtWalletFromBalance">0.00</span> &nbsp;
	                </div>
	            </div>
              <div class="col-sm-12">
                <div class="input-group">
                    <input type="text" id="txtFromToken" class="form-control clsfromtoken" aria-label="Text input with dropdown button" style="border-radius: 50px 0 0 53px;" placeholder="0.0">
                    <div class="input-group-append">
                    	<select  name="drpFromToken" id="drpFromToken" style="width:100px;">
                    		<option value="">Select Token</option>
							<option value="ETH" data-image="images/eth.png">ETH</option>
						</select>

                    </div>
                  </div>
              </div>
              <div id="btnarrow" class="col-sm-12 py-3 text-center">
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
                                        Prices
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="width: 100%;">
                                <div class="col-md-6">
                                    <div class="firstTokenRate">-</div>
                                    <div class="startTwoTokens">
                                        <span id="first1"></span> per <span id="first2"></span>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="secondTokenRate">-</div>
                                    <div class="endTwoTokens">
                                        <span id="second1"></span> per <span id="second2"></span>
                                    </div>
                                </div>
                                <!--div class="col-md-4">
                                    <div class="sc-kkGfuU kuSmHG css-1kt4f20">100%</div>
                                    <div class="css-1m402ei">Share of Pool</div>
                                </div-->
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
                <button id="btnAmount" class="btn btn-info btn-block btn-lg">Enter an Amount</button>
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
                <div class="col-md-6 rowroute">
                  Route
                </div>
                <div class="col-md-6 text-right rowroute">
                  <span id="routefromto" >
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
<input type="hidden" name="getamntoutdirectval" id="getamntoutdirectval" value="0" />
<input type="hidden" name="priceimpactR1" id="priceimpactR1" value="0" />
<input type="hidden" name="priceimpactR2" id="priceimpactR2" value="0" />

<!-- <msdropdown> -->
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
<link rel="stylesheet" href="css/alertify.min.css" />
<link rel="stylesheet" type="text/css" href="css/dd.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<!-- </msdropdown> -->
  <!-- /.control-sidebar -->
<div id="pool_loading"></div>
<style type="text/css">
    #pool_loading{
        display : none;
        position : fixed;
        z-index: 100;
        background-image : url('images/loader.gif');
        background-color:#666;
        opacity : 0.4;
        background-repeat : no-repeat;
        background-position : center;
        left : 0;
        bottom : 0;
        right : 0;
        top : 0;
    }
</style>
<style type="text/css">
    .selectCImage{
        max-width: 25px;
        margin-right: 5px;
    }

    .select2.select2-container{ width: 100% !important; }
    .select2-container--default .select2-selection--single{
        height: 40px;
    }

    .alertify .ajs-dialog{
            background-color: #2b2d3c;
    }

    .alertify .ajs-header, .alertify .ajs-footer{
        background-color: #000;
    }
    .dropdown-toggle{
        width: 100% !important;
        max-width: 150px;
        /*overflow: hidden;*/
    }
    .ddChild.ddchild_.border.shadow {
        width: 100%;
    }
</style>
 <script src="js/jquery-1.9.0.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery.dd.js"></script>
<script src="js/alertify.min.js" type="text/javascript"></script>
 



<script>

$(document).ready(function(){

	jQuery.noConflict();

	$(".rowroute").hide();

	var vPairABI='[{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1","type":"uint256"},{"indexed":true,"internalType":"address","name":"to","type":"address"}],"name":"Burn","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0In","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1In","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount0Out","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1Out","type":"uint256"},{"indexed":true,"internalType":"address","name":"to","type":"address"}],"name":"Swap","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"uint112","name":"reserve0","type":"uint112"},{"indexed":false,"internalType":"uint112","name":"reserve1","type":"uint112"}],"name":"Sync","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"DOMAIN_SEPARATOR","outputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"MINIMUM_LIQUIDITY","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"PERMIT_TYPEHASH","outputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"},{"internalType":"address","name":"","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"burn","outputs":[{"internalType":"uint256","name":"amount0","type":"uint256"},{"internalType":"uint256","name":"amount1","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"factory","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"getReserves","outputs":[{"internalType":"uint112","name":"_reserve0","type":"uint112"},{"internalType":"uint112","name":"_reserve1","type":"uint112"},{"internalType":"uint32","name":"_blockTimestampLast","type":"uint32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"_token0","type":"address"},{"internalType":"address","name":"_token1","type":"address"}],"name":"initialize","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"kLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"mint","outputs":[{"internalType":"uint256","name":"liquidity","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"nonces","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"},{"internalType":"uint256","name":"deadline","type":"uint256"},{"internalType":"uint8","name":"v","type":"uint8"},{"internalType":"bytes32","name":"r","type":"bytes32"},{"internalType":"bytes32","name":"s","type":"bytes32"}],"name":"permit","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"price0CumulativeLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"price1CumulativeLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"skim","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount0Out","type":"uint256"},{"internalType":"uint256","name":"amount1Out","type":"uint256"},{"internalType":"address","name":"to","type":"address"},{"internalType":"bytes","name":"data","type":"bytes"}],"name":"swap","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"sync","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"token0","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"token1","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"}]';

	var vFromTokenKeyPress=false;
	var vToTokenKeyPress =false;

  var factaddress='<?php echo $factoryContractAddress ?>';
  var factoryabi='<?php echo $factoryContractABI ?>';
	$("select").msDropdown({roundedBorder:false});

	$("#btnAmount").prop('disabled', false);
	$("#btnAmount").text("Enter an Amount");

 

	CheckBalanceInWallet('from');

	$("#txtFromToken").change(function(){
		CheckBalanceInWallet('from');
		changeFromToken("from_change");
  	});

  	$("#btnarrow").click(function(){
  		var vFromVal = $('#drpFromToken option:selected').val();
		var vToVal = $('#drpToToken option:selected').val();
  		if(vFromVal== "")
  		{
  			return false;
  		}
  	
  		$("#drpFromToken").msDropdown();
  		$("#drpToToken").msDropdown();

  		//=========== From Token  ===========
  		var i = 0;
	    var indexNumber = 0;
	    $("#drpFromToken option").each(function(){
	        if($(this).val() == vToVal){
	            indexNumber = i;
	        }
	        i++;
	    });

	    var oHandler = $('#drpFromToken').msDropDown().data("dd");
	    if(oHandler) {
	        oHandler.set("selectedIndex", indexNumber);
	    }

	    //=========== To Token  ===========
	    i = 0;
	    indexNumber = 0;
	    $("#drpToToken option").each(function(){
	        if($(this).val() == vFromVal){
	            indexNumber = i;
	        }
	        i++;
	    });
	    var oHandler = $('#drpToToken').msDropDown().data("dd");
	    if(oHandler) {
	        oHandler.set("selectedIndex", indexNumber);
	    }

	    //=========== get Token balance after interchange ===========
	    CheckBalanceInWallet('from');
	    CheckBalanceInWallet('to');
  		
  	});


	$("#drpFromToken").change(function(){
		var vFromVal = $('#drpFromToken option:selected').text();
		var vToVal = $('#drpToToken option:selected').text();
		if( vFromVal== vToVal)
		{
			alert("Both tokens can not be same");
      		$('#txtWalletFromBalance').text('0.00');
			$("#drpFromToken").val('');
			return false;
		}
		else
		{
			CheckBalanceInWallet('from');
			changeFromToken("from_change");
		}
  	});

  	$("#drpToToken").change(function(){

		var vFromVal = $('#drpFromToken option:selected').text();
		var vToVal = $('#drpToToken option:selected').text();
		if( vFromVal== vToVal)
		{
			alert("Both tokens can not be same");
			$('#txtWalletToBalance').text('0.00');
			$("#drpToToken").val('');
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
  		var vCurrencyType = '';
    	if(drpType=='from')
  		{
    		vCurrencyType=$('#drpFromToken option:selected').text();
    	}
    	else
    	{
    		vCurrencyType=$('#drpToToken option:selected').text();
    	}
 
    	

  		 window.web3 = new Web3(ethereum);
  		 web3.eth.getAccounts(async function(error, result) {
            if(!error && typeof(result[0]) !== 'undefined')
               {
                	metaMaskAddress=""+result[0];
                	
              		var vAvailableBalance =0;
              		var vCurrentbalance=0;
					var vContractAddress ='';
					var vContractABI ='';
					var vContract='';

					if($('#drpFromToken option:selected').val()=="")
			    	{
			    		$("#btnAmount").prop('disabled', true);
			    		return false;
			    	}

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

        vFromTokenKeyPress=true;
        vToTokenKeyPress=false;
        //GetPriceTokenForRoute("BAT","ETH",'0xbF7A7169562078c96f0eC1A8aFD6aE50f12e5A99');
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
        vFromTokenKeyPress=false;
        vToTokenKeyPress=true;
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
       

        var slipTolerance = $.cookie("slip_tlrance_txt");
        if (slipTolerance == '') {
            slipTolerance=0.1;
        }
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
                      var vgetpair= factorycontract.methods.getPair(WETHContract,contractAddress).call();
                      const vgetpairval = vgetpair.then(function(result1){
                        vPairAddress= result1;
                      });

                      if(vPairAddress='') {
                        const tx = factorycontract.methods.createPair(WETHContract,contractAddress).send({
                        }).on("confirmation", function () {
                            var vgetpair= factorycontract.methods.getPair(WETHContract,contractAddress).call();
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
                      var path = [WETHContract, contractAddress];
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

                        // [========= Please wait popup ===========]
                         var myPromise = MakeQuerablePromise(tx);

                         if(myPromise.isPending()){
                            alertify.alert("<b>Please wait</b>","<div class='text-center'><center><img src='images/ripple-loader.gif' style='width: 50px;' /></center> <br>Please wait...</div>", function(){});
                        }


                        var timerID = setInterval(function() {

                        if(myPromise.isFulfilled()){

                            myPromise.then(function(result){
                                alertify.alert("Transacton Recorded","Thanks for joining <?=$siteName;?> You can check the status at <a href='<?=$etherscanTx;?>"+result.transactionHash+"' target='_blank'>Etherscan</a><br><br> Once transaction is confirmed in Blockchain, you can come back to this page and login into your account.", function(){});
                            });

                            $(".ajs-ok").click();
                            clearInterval(timerID);
                        }

                        if(myPromise.isFulfilled()){
                            //resetAllFields();
                            //loadSelectOptions();
                            $(".ajs-ok").click();
                            clearInterval(timerID);
                        }

                        if(myPromise.isRejected()){

                            myPromise.then(response => {
                            }).catch(error => {
                                alertify.alert("Warning", error.message, function(){});
                            });
                            $(".ajs-ok").click();
                            clearInterval(timerID);
                        }

                    }, 500);

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
                      var vgetpair= factorycontract.methods.getPair(WETHContract,contractAddress).call();
                      const vgetpairval = vgetpair.then(function(result1){
                        vPairAddress= result1;
                      });

                      if(vPairAddress='') {
                        const tx = factorycontract.methods.createPair(WETHContract,contractAddress).send({
                        }).on("confirmation", function () {
                            var vgetpair= factorycontract.methods.getPair(WETHContract,contractAddress).call();
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
                      var path = [contractAddress,WETHContract];
                      var milliseconds = 300 * 1000;
                      var deadline = new Date().getTime() + milliseconds;
                      var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);
                      const tx = routerContract.methods.swapExactTokensForETH(amountout,vToTokenVal,path,addressFrom,deadline).send({
                        from:addressFrom,
                        gasLimit: web3.utils.toHex(260000),
                        gasPrice: web3.utils.toHex(1000000000),
                        value: vToTokenVal
                      }).on("transactionHash", function (hash) {
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

                           // [========= Please wait popup ===========]
                         var myPromise = MakeQuerablePromise(tx);

                         if(myPromise.isPending()){
                            alertify.alert("<b>Please wait</b>","<div class='text-center'><center><img src='images/ripple-loader.gif' style='width: 50px;' /></center> <br>Please wait...</div>", function(){});
                        }
                       var timerID = setInterval(function() {
                        if(myPromise.isFulfilled()){

                            myPromise.then(function(result){
                                alertify.alert("Transacton Recorded","Thanks for joining <?=$siteName;?> You can check the status at <a href='<?=$etherscanTx;?>"+result.transactionHash+"' target='_blank'>Etherscan</a><br><br> Once transaction is confirmed in Blockchain, you can come back to this page and login into your account.", function(){});
                            });
                            $(".ajs-ok").click();
                            clearInterval(timerID);
                        }

                        if(myPromise.isFulfilled()){
                            //resetAllFields();
                            //loadSelectOptions();
                            $(".ajs-ok").click();
                            clearInterval(timerID);
                        }
                        if(myPromise.isRejected()){

                            myPromise.then(response => {
                            }).catch(error => {
                                alertify.alert("Warning", error.message, function(){});
                            });
                            $(".ajs-ok").click();
                            clearInterval(timerID);
                        }

                    }, 500);

                 }
                },
                error: function (result) {
                    alert("Error");
                }
            });
        }
        else {
          var spndrpFromToken = drpFromToken = $('#drpFromToken option:selected').val();
          var spndrpToToken = drpToToken = $('#drpToToken option:selected').val();
          var selectedtoken =[spndrpFromToken,spndrpToToken];
          var vRountText=$(".rowroute #routefromto").text();

          $.ajax({
              type: "POST",
              url: 'ajax/getCurrencyData1.php',
              data: {tokenname:selectedtoken },
              dataType: "json",
              success: function (resp) {
                var contractABI1,contractAddress1,devide_to1;
                var contractABI2,contractAddress2,devide_to2;
                for(i=0;i<resp.length;i++)
                {
                  var res=resp[i];

                  if (res.status == '1') {

                    if(i==0 ){
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
              //  SWAP TOKENS FOR EXACT TOKENS
              var vPairAddress='';
                 var vgetpair= factorycontract.methods.getPair(contractAddress1,contractAddress2).call();
                 const vgetpairval = vgetpair.then(function(result1){
                  	 	vPairAddress= result1;
                  	 	 
                  	 var vPairABI='[{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1","type":"uint256"},{"indexed":true,"internalType":"address","name":"to","type":"address"}],"name":"Burn","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0In","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1In","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount0Out","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1Out","type":"uint256"},{"indexed":true,"internalType":"address","name":"to","type":"address"}],"name":"Swap","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"uint112","name":"reserve0","type":"uint112"},{"indexed":false,"internalType":"uint112","name":"reserve1","type":"uint112"}],"name":"Sync","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"DOMAIN_SEPARATOR","outputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"MINIMUM_LIQUIDITY","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"PERMIT_TYPEHASH","outputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"},{"internalType":"address","name":"","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"burn","outputs":[{"internalType":"uint256","name":"amount0","type":"uint256"},{"internalType":"uint256","name":"amount1","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"factory","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"getReserves","outputs":[{"internalType":"uint112","name":"_reserve0","type":"uint112"},{"internalType":"uint112","name":"_reserve1","type":"uint112"},{"internalType":"uint32","name":"_blockTimestampLast","type":"uint32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"_token0","type":"address"},{"internalType":"address","name":"_token1","type":"address"}],"name":"initialize","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"kLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"mint","outputs":[{"internalType":"uint256","name":"liquidity","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"nonces","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"},{"internalType":"uint256","name":"deadline","type":"uint256"},{"internalType":"uint8","name":"v","type":"uint8"},{"internalType":"bytes32","name":"r","type":"bytes32"},{"internalType":"bytes32","name":"s","type":"bytes32"}],"name":"permit","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"price0CumulativeLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"price1CumulativeLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"skim","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount0Out","type":"uint256"},{"internalType":"uint256","name":"amount1Out","type":"uint256"},{"internalType":"address","name":"to","type":"address"},{"internalType":"bytes","name":"data","type":"bytes"}],"name":"swap","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"sync","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"token0","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"token1","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"}]';

                    var pairContract = new web3.eth.Contract(JSON.parse(vPairABI), vPairAddress);
                    console.log(" pair address for erc20 To erc20 nnnn = " + vPairAddress);
                               	
                  	var objtoken0 = pairContract.methods.token0().call();
                  	var vtoken0='';
			        objtoken0.then(function(res) {
			            vtoken0 = res;
			        });
			        var vtoken1 = pairContract.methods.token1().call();
			        vtoken1.then(function(res) {
			            vtoken1 = res;
			        });
 			
			        // if token0 = fromaddress then call SWAP EXACT TOKENS FOR TOKENS function
			         setTimeout(function(){
			        	var  tx;
			        	var amountout=0;
			        	var txtboxinputvalue=0;
	                      var path = [];
	                      if (vRountText.toLocaleLowerCase().indexOf(">")!=-1)
				        	{
				            	path= [contractAddress1,WETHContract, contractAddress2];
				        	}
				        	else
				        	{
				        		console.log( " else path ");
				        		path = [contractAddress1, contractAddress2];
				        	}
	                     
	                        var milliseconds = 300 * 1000;
	                      var deadline = new Date().getTime() + milliseconds;
	                      var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);
	                      /*
							function swapExactTokensForTokens(
							  uint amountIn,
							  uint amountOutMin,
							  address[] calldata path,
							  address to,
							  uint deadline
							) external returns (uint[] memory amounts);

							for swapExactTokensForTokens  
							amountIn = textbox input value
							amountOutMin = estimated value


	                      */
	                      
	                    if(vFromTokenKeyPress==true && vToTokenKeyPress==false)
			        	{
			        		console.log(" iffffff if ififf ");
			        		vFromTokenVal = vFromTokenVal* 1e18;
			        		vFromTokenVal = vFromTokenVal.toLocaleString('fullwide', {useGrouping:false});
	                      	 amountout=vToTokenVal*devide_to1;
	                      	amountout = amountout.toLocaleString('fullwide', {useGrouping:false});

	                      	txtboxinputvalue=vFromTokenVal;
	                      	console.log("slipTolerance = "+slipTolerance);

	                      	var getamntout = routerContract.methods.getAmountsOut(amountout, path).call();
                  
		                  getamntout.then(function (getAmtVal) {
		                    
		                    txtboxinputvalue = vFromTokenVal;
		                    var gamout = getAmtVal[0];
		                    var getAmout = gamout.toLocaleString('fullwide', {useGrouping:false});
		                    console.log(getAmout);
		                    
		                    var x = (getAmout * slipTolerance);
		                    var y = x.toLocaleString('fullwide', {useGrouping:false});
		                    var z = (y / 100);
		                    var p = z.toLocaleString('fullwide', {useGrouping:false});
		                    var mns_percent = (BigInt(getAmout) - BigInt(p));
		                    var getAmountOut = mns_percent.toLocaleString('fullwide', {useGrouping:false});

		                  	 console.log("=====================");
		                    console.log("txtboxinputvalue: " + txtboxinputvalue);
		                    console.log("amountout: " + getAmountOut);
		                    console.log("path: " + path);
		                    console.log("addressFrom: " + addressFrom);
		                    console.log("deadline: " + deadline);
		                    console.log("=====================");


		                      	tx = routerContract.methods.swapExactTokensForTokens(txtboxinputvalue,getAmountOut,path,addressFrom,deadline).send({
		                        from:addressFrom,
		                        gasLimit: web3.utils.toHex(760000),
		                        gasPrice: web3.utils.toHex(1000000000),
		                        value: 0
		                      });

		                     // [========= Please wait popup ===========]
		                         var myPromise = MakeQuerablePromise(tx);

		                         if(myPromise.isPending()){
		                            alertify.alert("<b>Please wait</b>","<div class='text-center'><center><img src='images/ripple-loader.gif' style='width: 50px;' /></center> <br>Please wait...</div>", function(){});
		                        }
		                        var timerID = setInterval(function() {

		                        if(myPromise.isFulfilled()){

		                            myPromise.then(function(result){
		                                alertify.alert("Transacton Recorded","Thanks for joining <?=$siteName;?> You can check the status at <a href='<?=$etherscanTx;?>"+result.transactionHash+"' target='_blank'>Etherscan</a><br><br> Once transaction is confirmed in Blockchain, you can come back to this page and login into your account.", function(){});
		                            });

		                            $(".ajs-ok").click();
		                            clearInterval(timerID);
		                        }

		                        if(myPromise.isFulfilled()){
		                            //resetAllFields();
		                            //loadSelectOptions();
		                            $(".ajs-ok").click();
		                            clearInterval(timerID);
		                        }
		                        if(myPromise.isRejected()){

		                            myPromise.then(response => {
		                            }).catch(error => {
		                                alertify.alert("Warning", error.message, function(){});
		                            });
		                            $(".ajs-ok").click();
		                            clearInterval(timerID);
		                        }
		                    }, 500);


		                      	/*.on("transactionHash", function (hash) {
		                           console.log("transactionHash : " + hash);
		                      }).on("receipt", function () {
		                          console.log("Receipt");
		                      })
		                      .on("confirmation", function () {
		                          console.log("Confirmed");
		                      })
		                      .on("error", async function () {
		                          console.log("Error");
		                      });*/


		                    });
			        	}
			        	else if(vFromTokenKeyPress==false && vToTokenKeyPress==true)
			        	{
			        		console.log(" else iffffff  else if else ififf ");
			        		vFromTokenVal = vFromTokenVal* 1e18;
                      		vFromTokenVal = vFromTokenVal.toLocaleString('fullwide', {useGrouping:false});
                      		amountout=vToTokenVal*devide_to1;
                      		amountout = amountout.toLocaleString('fullwide', {useGrouping:false});

                      		txtboxinputvalue=vFromTokenVal;

                      		var getamntout = routerContract.methods.getAmountsOut(amountout, path).call();
                      		getamntout.then(function (getAmtVal) {


                      			txtboxinputvalue = vFromTokenVal;
		                    var gamout = getAmtVal[0];
		                    var getAmout = gamout.toLocaleString('fullwide', {useGrouping:false});
		                    console.log(getAmout);
		                    
		                    var x = (getAmout * slipTolerance);
		                    var y = x.toLocaleString('fullwide', {useGrouping:false});
		                    var z = (y / 100);
		                    var p = z.toLocaleString('fullwide', {useGrouping:false});
		                    var mns_percent = (BigInt(getAmout) - BigInt(p));
		                    var getAmountOut = mns_percent.toLocaleString('fullwide', {useGrouping:false});

		                  	 console.log("=====================");
		                    console.log("txtboxinputvalue: " + txtboxinputvalue);
		                    console.log("amountout: " + getAmountOut);
		                    console.log("path: " + path);
		                    console.log("addressFrom: " + addressFrom);
		                    console.log("deadline: " + deadline);
		                    console.log("=====================");

                      		tx = routerContract.methods.swapTokensForExactTokens(getAmountOut,txtboxinputvalue,path,addressFrom,deadline).send({
		                        from:addressFrom,
		                        gasLimit: web3.utils.toHex(760000),
		                        gasPrice: web3.utils.toHex(1000000000),
		                        value: 0
		                      });

                      		// [========= Please wait popup ===========]
		                         var myPromise = MakeQuerablePromise(tx);

		                         if(myPromise.isPending()){
		                            alertify.alert("<b>Please wait</b>","<div class='text-center'><center><img src='images/ripple-loader.gif' style='width: 50px;' /></center> <br>Please wait...</div>", function(){});
		                        }
		                        var timerID = setInterval(function() {

		                        if(myPromise.isFulfilled()){

		                            myPromise.then(function(result){
		                                alertify.alert("Transacton Recorded","Thanks for joining <?=$siteName;?> You can check the status at <a href='<?=$etherscanTx;?>"+result.transactionHash+"' target='_blank'>Etherscan</a><br><br> Once transaction is confirmed in Blockchain, you can come back to this page and login into your account.", function(){});
		                            });

		                            $(".ajs-ok").click();
		                            clearInterval(timerID);
		                        }

		                        if(myPromise.isFulfilled()){
		                            //resetAllFields();
		                            //loadSelectOptions();
		                            $(".ajs-ok").click();
		                            clearInterval(timerID);
		                        }
		                        if(myPromise.isRejected()){

		                            myPromise.then(response => {
		                            }).catch(error => {
		                                alertify.alert("Warning", error.message, function(){});
		                            });
		                            $(".ajs-ok").click();
		                            clearInterval(timerID);
		                        }
		                    }, 500);

                      		/*.on("transactionHash", function (hash) {
		                           console.log("transactionHash : " + hash);
		                      }).on("receipt", function () {
		                          console.log("Receipt");
		                      })
		                      .on("confirmation", function () {
		                          console.log("Confirmed");
		                      })
		                      .on("error", async function () {
		                          console.log("Error");
		                      });*/
		                 });

			        	}
			        	console.log(" in token0 = "+ vtoken0);
	                      console.log("keypress from = " + vFromTokenKeyPress);
	                      console.log("keypress to = " + vToTokenKeyPress);

	                      console.log(" txtboxinputvalue = " + txtboxinputvalue);
	                      console.log(" amount out  = " + amountout);

	              
				}, 1500);

                });

                 console.log(" pair address for erc20 To erc20 yyyy = " + vPairAddress);

                if(vPairAddress='') {
                const tx = factorycontract.methods.createPair(contractAddress1,contractAddress2).send({
                }).on("confirmation", function () {
                    var vgetpair= factorycontract.methods.getPair(contractAddress1,contractAddress2).call();
                    const vgetpairval = vgetpair.then(function(result1){
                      vPairAddress= result1;
                      console.log(" pair address for erc20 To erc20 www = " + vPairAddress);
                    });
                  })
                  .on("error", async function () {
                      console.log("Error");
                  });
              }

             }
            });
        }

		});
  	});

	function MakeQuerablePromise(promise) {
        // Don't modify any promise that has been already modified.
        if (promise.isResolved) return promise;

        // Set initial state
        var isPending = true;
        var isRejected = false;
        var isFulfilled = false;

        // Observe the promise, saving the fulfillment in a closure scope.
        var result = promise.then(
            function(v) {
                isFulfilled = true;
                isPending = false;
                return v;
            },
            function(e) {
                isRejected = true;
                isPending = false;
                throw e;
            }
        );

        result.isFulfilled = function() { return isFulfilled; };
        result.isPending = function() { return isPending; };
        result.isRejected = function() { return isRejected; };

        return result;
    }

 

	function changeFromToken(change = '') {

        var spndrpFromToken = drpFromToken = $('#drpFromToken option:selected').val();
        var spndrpToToken = drpToToken = $('#drpToToken option:selected').val();
        if(change=='to_change')
        {
          spndrpToToken = $('#drpFromToken option:selected').val();
          spndrpFromToken  = $('#drpToToken option:selected').val();
        }
 console.log( " spndrpFromToken = "+ spndrpFromToken);

  console.log( " spndrpToToken = "+ spndrpToToken);
      

       var slipTolerance = $.cookie("slip_tlrance_txt");
        if (slipTolerance == '') {
            slipTolerance=0.1;
        }

        var multiHops = $.cookie("disable_multihops");
        if (multiHops == '') {
            multiHops='no';
        }

        console.log("disable_multihops =" + multiHops);

        window.web3 = new Web3(ethereum);
        web3.eth.getAccounts(async function (error, result) {

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

            console.log( " selectedtoken = "+ selectedtoken);

            var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);
            var WETHContract="<?php echo $WETHAddress; ?>";

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

                    	console.log("iffffffffffffffff ");
                      var res=resp[0];
                      if (res.status == '1') {
                        var contractABI = res.data.contractABI;
                        var contractAddress = res.data.contractAddress;
                        var devide_to = '1e'+res.data.desimals;
                        
                        if(WETHContract){
                            var txtFromToken = $("#txtFromToken").val();
                            if(change=='to_change') {
                                txtFromToken = $("#txtToToken").val();
                            }

                            var amountOut = ( devide_to * txtFromToken);
                            amountOut = amountOut.toLocaleString('fullwide', {useGrouping:false});
                            console.log("amountOut : " +amountOut);
                            var path = [WETHContract, contractAddress];
                            console.log("WETHContract = " + WETHContract);
                             console.log("contractAddress = " + contractAddress);
                            if(spndrpFromToken=='ETH'){
                              console.log("444" + drpToToken + " :: " + change);
                              	if(change=='to_change') 
                              	{
                                	path = [contractAddress,WETHContract];
                                	var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();
                              	}
                              	else{
                                	var getamntin = routerContract.methods.getAmountsOut(amountOut, path).call();
                              	}
                            } 
                            else 
                            {
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

                                    if(spndrpToToken=='ETH' || spndrpFromToken=='ETH') 
                                    {
                                        devide_to = 1e18;

                                        //if((spndrpToToken=='ETH' &&  change=='to_change') || drpToToken=='ETH'  )
                                        if(change!='to_change' && drpToToken!='ETH'  )
                                        {
                                       		console.log("11111");
                                          	var ETHValue = getAmtVal[1];
                                          	var  tokenAount= getAmtVal[0];
                                        } 
                                        else 
                                        {
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
                                        if(change=='to_change') 
                                        {
                                          $("#txtFromToken").val(SetDecimalForTokenValues(parseFloat(forFirst).toFixed(8)));
                                          $("#minmax").html('Maximum sold');
                                          $(".firstTokenRate").html(parseFloat(forFirst/$("#txtToToken").val()));
                                          $(".secondTokenRate").html(parseFloat(forSecond*$("#txtToToken").val()));
                                           var calculateMinRec = parseFloat($("#txtFromToken").val() * slipTolerance).toFixed(8);
                                          	var divMinrec = parseFloat(calculateMinRec/100).toFixed(8);
                                          	var minrec = parseFloat( parseFloat($("#txtFromToken").val()) + parseFloat( divMinrec)).toFixed(8);
                                          
                                          //$("#txtFromToken").focus();
                                        } else {
                                          $("#txtToToken").val(SetDecimalForTokenValues(parseFloat(forFirst).toFixed(8)));
                                          $(".firstTokenRate").html(parseFloat(forFirst/$("#txtFromToken").val()));
                                          $(".secondTokenRate").html(parseFloat(forSecond*$("#txtFromToken").val()));
                                          $("#minmax").html('Minimum received');
                                          var calculateMinRec = parseFloat($("#txtToToken").val() * slipTolerance).toFixed(8);
                                          	var divMinrec = parseFloat(calculateMinRec/100).toFixed(8);
                                          	var minrec = parseFloat( parseFloat($("#txtToToken").val()) - parseFloat( divMinrec)).toFixed(8);
                                          //$("#txtToToken").focus();
                                        }
                                        $(".startTwoTokens #first1").html(spndrpToToken);
                                        $(".startTwoTokens #first2").html(spndrpFromToken);
                                        $(".endTwoTokens #second1").html(spndrpFromToken);
                                        $(".endTwoTokens #second2").html(spndrpToToken);

                                    } 
                                    else 
                                    {

                                        var tokenAount = getAmtVal[0];
                                        var ETHValue = getAmtVal[1];
                                        //var inpDevide = (amountOut / tokenAount).toFixed(8);
                                        console.log("tokenAount : " + tokenAount);

                                        var inpDevide = (tokenAount/devide_to).toFixed(8);
                                        var getInpSingle = parseFloat(inpDevide).toFixed(8);
                                        console.log("getInpSingle : " + getInpSingle);

                                        var forFirst =  getInpSingle;
                                        var forSecond =((1 / forFirst)).toFixed(8);
                                        
                                        if(change=='to_change')
                                        {
                                          $("#txtFromToken").val(SetDecimalForTokenValues(parseFloat(forFirst).toFixed(8)));
                                          //$("#txtFromToken").focus();
                                          $("#minmax").html('Maximum sold');
	                                        var calculateMinRec = parseFloat($("#txtFromToken").val() * slipTolerance).toFixed(8);
	                                        var divMinrec = parseFloat(calculateMinRec/100).toFixed(8);
	                                        var minrec = parseFloat( parseFloat($("#txtFromToken").val()) +parseFloat( divMinrec)).toFixed(8);
                                        }
                                        else {
                                          $("#txtToToken").val(SetDecimalForTokenValues(parseFloat(forFirst).toFixed(8)));
                                          $("#minmax").html('Minimum received');
                                          var calculateMinRec = parseFloat($("#txtToToken").val() * slipTolerance).toFixed(8);
	                                         var divMinrec = parseFloat(calculateMinRec/100).toFixed(8);
	                                        var minrec = parseFloat( parseFloat($("#txtToToken").val()) -  parseFloat(divMinrec)).toFixed(8);
                                        //$("#txtToToken").focus();
                                        }

                                        $(".firstTokenRate").html(parseFloat(forFirst));
                                        $(".secondTokenRate").html(parseFloat(forSecond));
                                        $(".startTwoTokens #first1").html(spndrpFromToken);
                                        $(".startTwoTokens #first2").html(spndrpToToken);
                                        $(".endTwoTokens #second1").html(spndrpToToken);
                                        $(".endTwoTokens #second2").html(spndrpFromToken);
                                    }
                                    var Insuficient=0;
                                    if(parseFloat($("#txtFromToken").val()) > parseFloat($("#txtWalletFromBalance").html())) {
                                        $("#btnAmount").prop('disabled', true);
                                        var vtoken=$('#drpFromToken option:selected').val();
                                        $(".rowroute").hide();
                                        $(".rowroute #routefromto").html('');
                                        $("#btnAmount").html('Insufficient ' + vtoken +' balance');
                                        Insuficient=1;
                                    } 

                                  	var vPairAddress='';
                                  	var vgetpair= factorycontract.methods.getPair(WETHContract,contractAddress).call();
                                  	const vgetpairval = vgetpair.then(function(result1){
                                    vPairAddress= result1;
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
										if($(".rowroute").is(":visible"))
                                        {
                                           vLiqProviderFee=0.005991;
                                        }
                                        console.log("vLiqProviderFee 33 = " + vLiqProviderFee);

										//vLiqProviderFee = vLiqProviderFee*$("#txtFromToken").val();

										//vLiqProviderFee = parseFloat(vLiqProviderFee).toFixed(8);
										//  console.log("ASA: "+ Math.floor($("#txtToToken").val()));
										if(change=='to_change' && drpToToken!='ETH') {
											var trade_fee = parseFloat(vReverse2)*vLiqProviderFee;                                        
											var token_reserv= parseFloat(vReverse2) + parseFloat(trade_fee);
											var vPriceImpact=parseFloat(($("#txtFromToken").val()*100/token_reserv)).toFixed(2);
	                                    	//var vPriceImpact=parseFloat(($("#txtFromToken").val()/vReverse2)*100).toFixed(2);
	                                    	console.log("11!: " + vPriceImpact);
	                                    	//vLiqProviderFee = vLiqProviderFee/10;
	                                    	// var minrec=parseFloat($("#txtFromToken").val()-($("#txtFromToken").val()*vLiqProviderFee)).toFixed(5);
	                                    	vLiqProviderFee = vLiqProviderFee*$("#txtFromToken").val(); 
	                                    }
	                                    else 
	                                    {
	                                      //var minrec=parseFloat($("#txtToToken").val()-($("#txtToToken").val()*vLiqProviderFee)).toFixed(5);
	                                      	var trade_fee = parseFloat(vReverse1)*vLiqProviderFee;                                        
											var token_reserv= parseFloat(vReverse1) + parseFloat(trade_fee);
											var vPriceImpact=parseFloat(($("#txtToToken").val()*100/token_reserv)).toFixed(2);
	                                      //var vPriceImpact=parseFloat(($("#txtToToken").val()/vReverse1)*100).toFixed(2);
	                                      vLiqProviderFee = vLiqProviderFee*$("#txtFromToken").val(); 
	                                      console.log("2222!: " + vPriceImpact);
	                                      //var minrec=parseFloat($("#txtToToken").val()-($("#txtToToken").val()*vLiqProviderFee)).toFixed(5);
	                                    }
	                                    if(parseFloat(vPriceImpact)<=0.01)
	                                    {
	                                    	$("#priceimpact").html('<0.01%');
	                                    }
	                                    else {
	                                        $("#priceimpact").html(parseFloat(vPriceImpact).toFixed(2)+'%');
	                                    }

										$("#minrecamount").html(SetDecimalForMinMax(minrec)+' ' + spndrpToToken);
										$("#liqudityfee").html(SetDecimalForLF(vLiqProviderFee,Insuficient)+' '+drpFromToken);
										if(parseFloat(vPriceImpact)>5 && parseFloat(vPriceImpact)<=15 && Insuficient==0)
										{
											$("#btnAmount").html('Swap Anyway');
										}
										else if (parseFloat(vPriceImpact)>15) {
											$("#btnAmount").prop('disabled', true);
											$("#btnAmount").html('Price Impact is too high');
										}
										else {
											if(Insuficient==0){
												$("#btnAmount").prop('disabled', false);
												$("#btnAmount").html('Swap');
											}
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
          	}
        }
        else 
        {
        	console.log(" eeeeeeeeeellllssssssssseeeeeeeeeeeeee");
                      var contractABI1,contractAddress1,devide_to1;
                      var contractABI2,contractAddress2,devide_to2;
                      for(i=0;i<resp.length;i++)
                      {
                        var res=resp[i];

                        if (res.status == '1') {

                          if(i==0 ){
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

                        console.log("contractAddress2 : " +contractAddress2);
                        console.log("contractAddress1 : " +contractAddress1);
                      var txtFromToken = $("#txtFromToken").val();
                      var amountOut = (devide_to1 * txtFromToken);
                      if(change=='to_change') {
                          txtFromToken = $("#txtToToken").val();
                           amountOut = (devide_to2 * txtFromToken);
                          //var amountOut = (devide_to2 * txtFromToken);
                        //  amountOut = ( devide_to * txtFromToken);
                      }

                       
                      amountOut = amountOut.toLocaleString('fullwide', {useGrouping:false});
                      console.log("amountOut : " +amountOut);
                      //get direct amountOut
                      var pathdirect = [contractAddress1,contractAddress2];
                      var getamntoutdirectval=0;
                      if(change=='to_change')
                      {
                          	pathdirect = [contractAddress2,contractAddress1];
                        	var getamntoutdirect = routerContract.methods.getAmountsIn(amountOut, pathdirect).call();
                        	getamntoutdirect.then(function(getamntoutdirect) {
                          	console.log("getamntoutdirectval 11 : " + getamntoutdirect);
                            	getamntoutdirectval=getamntoutdirect[0]/devide_to2;
                            	$("#getamntoutdirectval").val(getamntoutdirect[0]/devide_to2);

                          });
                      }
                      else {
                        var getamntoutdirect = routerContract.methods.getAmountsOut(amountOut, pathdirect).call();
                        getamntoutdirect.then(function(getamntoutdirect) {
                          console.log("getamntoutdirectval 22 : " + getamntoutdirect);
                            getamntoutdirectval=getamntoutdirect[1]/devide_to2;
                            $("#getamntoutdirectval").val(getamntoutdirect[1]/devide_to2);

                          });
                      }

                      getamntoutdirectval= $("#getamntoutdirectval").val();
                      console.log("getamntoutdirectval 33 : " + getamntoutdirectval);
                      //get direct amountOut
                     
                        console.log(WETHContract);
                        var path = [contractAddress1,WETHContract];
                        console.log(path);
                        if(change=='to_change')
                        {
                          path = [WETHContract,contractAddress1];
                          var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();
                        }
                        else {
                          var getamntin = routerContract.methods.getAmountsOut(amountOut, path).call();
                        }

                        console.log("getamntin : " + getamntin);
                        try {
                          getamntin.then(function(getAmtVal) {
                              console.log("getAmtVal : " + getAmtVal);
                              if(getAmtVal){
                                if(change=='to_change')
                                {
                                  var tokenAount = getAmtVal[0];
                                  var ETHValue = getAmtVal[1];
                                  path = [contractAddress2,WETHContract];
                                  tokenAount = tokenAount.toLocaleString('fullwide', {useGrouping:false});
                                  var getamntout = routerContract.methods.getAmountsIn(tokenAount, path).call();
                                }
                                else {
                                  var tokenAount = getAmtVal[1];
                                  var ETHValue = getAmtVal[0];
                                  path = [WETHContract, contractAddress2];
                                  tokenAount = tokenAount.toLocaleString('fullwide', {useGrouping:false});
                                  var getamntout = routerContract.methods.getAmountsOut(tokenAount, path).call();
                                }

                                console.log("tokenAount 11 path : " + tokenAount);
                                console.log("ETHValue 11 path : " + ETHValue);

                                getamntout.then(function(getAmtVal) {
                                  console.log("getamntout : " + getamntout);
                                  if(getamntout){
                                    if(change=='to_change')
                                    {
                                    	tokenAount = getAmtVal[0];
                                    	ETHValue = getAmtVal[1];

                                    	console.log("tokenAount 22 path : " + tokenAount);
                                      	console.log("ETHValue 22 path : " + ETHValue);
                                    }
                                    else {
                                     	tokenAount = getAmtVal[1];
                                     	ETHValue = getAmtVal[0];

                                     	console.log("tokenAount 33 path : " + tokenAount);
                                      	console.log("ETHValue 33 path : " + ETHValue);
                                   }
                                //var inpDevide = (amountOut / tokenAount).toFixed(8);
                                    // if(parseFloat($("#txtFromToken").val()) > parseFloat($("#txtWalletFromBalance").html())) {
                                    // 	$(".rowroute").hide();
                                    // }
                                      	
                                  	var vLiqProviderFee=0.003;
                                	if($(".rowroute").is(":visible"))
                                	{
                                		vLiqProviderFee=0.005991;
                                	}

                                     if(multiHops=="no")
                                      {

                                      	var inpDevideETH = (ETHValue/devide_to1).toFixed(8);
                                      //============ Route 1 Pairing ERC20 to ETH =================
                                      	var vPairAddress='';
                                         var vgetpairR1='';
                                          	if(change=='to_change')
                                            {
                                          		vgetpairR1=factorycontract.methods.getPair(WETHContract,contractAddress1).call();
                                      		}
                                      		else
                                      		{
                                      			vgetpairR1=factorycontract.methods.getPair(contractAddress1,WETHContract).call();
                                      		}
                                         const vgetpairvalR1 = vgetpairR1.then(function(result1){
                                           vPairAddress= result1;
                             
                                               var pairContractR1 = new web3.eth.Contract(JSON.parse(vPairABI), vPairAddress);
                                               var getreservesR1 = pairContractR1.methods.getReserves().call();
                                               getreservesR1.then(function(response) {
                                                 console.log("getreserves : " + response[0]);
                                                 var vReverse1R1=response[0]/devide_to1;
                                                 var vReverse2R1=parseFloat(response[1]/devide_to2).toFixed(4);
                                                 // if(change=='to_change')
                                                 // {
                                                 //   vReverse1R1=parseFloat(response[1]/devide_to1).toFixed(4);
                                                 //   vReverse2R1=parseFloat(response[0]/devide_to2).toFixed(4);
                                                 // }
                                                 console.log("vReverse1 R1 : " + vReverse1R1);
                                                 console.log("vReverse2  R1 : " +$("#txtFromToken").val()+ " :: "+  vReverse2R1);

                                                var trade_fee = parseFloat(vReverse2R1)*vLiqProviderFee;
                                                var token_reserv = parseFloat(vReverse2R1)+parseFloat(trade_fee);
                                                console.log("inpDevideETH : " + inpDevideETH);
                                                 console.log("token_reserv R1 : " + token_reserv);
                                                var PriceImpactETH=parseFloat((inpDevideETH/token_reserv)*100).toFixed(4);

												console.log("PriceImpactETH R1 : " + PriceImpactETH);
												$('#priceimpactR1').val(PriceImpactETH);
                                     		});
                                    	});

                                        //============ Route 2 Pairing ETH to ERC20 =================

                                        var vPairAddress='';
                                        var vgetpairR2='';
                                        if(change=='to_change')
                                        {
                                        	vgetpairR2=factorycontract.methods.getPair(contractAddress2,WETHContract).call();
                                     	}
                                 		else
                                 		{
                                 			vgetpairR2 = factorycontract.methods.getPair(WETHContract,contractAddress2).call();
                                 		}
                                        	const vgetpairvalR2 = vgetpairR2.then(function(result1){
                                        	vPairAddress= result1;
                             
                                           	var pairContractR2 = new web3.eth.Contract(JSON.parse(vPairABI), vPairAddress);
                                            var getreservesR2 = pairContractR2.methods.getReserves().call();
                                            getreservesR2.then(function(response) {
                                            	console.log("getreserves : " + response[0]);
                                            	var vReverse1R2=response[0]/devide_to1;
                                            	var vReverse2R2=parseFloat(response[1]/devide_to2).toFixed(4);
                                                 // if(change=='to_change')
                                                 // {
                                                 //   vReverse1R1=parseFloat(response[1]/devide_to1).toFixed(4);
                                                 //   vReverse2R1=parseFloat(response[0]/devide_to2).toFixed(4);
                                                 // }
                                                console.log("vReverse1 R2 : " + vReverse1R2);
                                                console.log("vReverse2  R2 : " +$("#txtFromToken").val()+ " :: "+  vReverse2R2);
                                                var trade_fee = parseFloat(vReverse2R2)*vLiqProviderFee;
                                                var token_reserv = parseFloat(vReverse2R2)+parseFloat(trade_fee);
                                                var PriceImpactR2=parseFloat((inpDevideETH/token_reserv)*100).toFixed(4);
                                                
												console.log("PriceImpactETH R2 : " + PriceImpactR2);
												$('#priceimpactR2').val(PriceImpactR2);
                                     		});
                                    	});

                                      
                                    }

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
                                        console.log("getamntoutdirectval : " + getamntoutdirectval);

                                      if((parseFloat(getamntoutdirectval)>parseFloat(getInpSingle) && parseFloat(getamntoutdirectval)>0.00000000 && change!='to_change') || (parseFloat(getamntoutdirectval)<parseFloat(getInpSingle) && parseFloat(getamntoutdirectval)>0.00000000 && change=='to_change'))
                                      {

                                      	console.log(" route row hide ");
                                        getInpSingle= getamntoutdirectval;
                                        $(".rowroute").hide();
                                        $(".rowroute #routefromto").html('');
                                      }
                                      else {
                                      	console.log(" route row show ");
                                        $(".rowroute").show();
                                        $(".rowroute #routefromto").html(drpFromToken +' > ETH > ' + drpToToken );
                                      }
                                      if(multiHops=="yes")
                                      {
                                      		getInpSingle= getamntoutdirectval;
                                        	$(".rowroute").hide();
                                        	$(".rowroute #routefromto").html('');
                                      }
                                     
                                      var forFirst =  getInpSingle;
                                      console.log("forFirst : " + forFirst);
                                      var forSecond =((1 / forFirst)).toFixed(8);
                                      console.log("*txtFromToken : " + txtFromToken);
                                      console.log("forSecond : " + forSecond);
                                      if(change=='to_change')
                                      {
                                        $("#txtFromToken").val(SetDecimalForTokenValues(parseFloat(forFirst).toFixed(10)));
                                        //$("#txtFromToken").focus();
                                         $("#minmax").html('Maximum sold');
                                        var calculateMinRec = parseFloat($("#txtFromToken").val() * slipTolerance).toFixed(8);
                                          	var divMinrec = parseFloat(calculateMinRec/100).toFixed(8);
                                          	var minrec = parseFloat( parseFloat($("#txtFromToken").val()) +parseFloat( divMinrec)).toFixed(8);
                                      }
                                      else {
                                        $("#txtToToken").val(SetDecimalForTokenValues(parseFloat(forFirst).toFixed(10)));
                                      //$("#txtToToken").focus();
                                       $("#minmax").html('Minimum received');
                                      var calculateMinRec = parseFloat($("#txtToToken").val() * slipTolerance).toFixed(8);
                                          	var divMinrec = parseFloat(calculateMinRec/100).toFixed(8);
                                          	var minrec = parseFloat( parseFloat($("#txtToToken").val()) -parseFloat( divMinrec)).toFixed(8);
                                      }

                                      $(".firstTokenRate").html(parseFloat(forFirst/$("#txtFromToken").val()));
                                      $(".secondTokenRate").html(parseFloat(forSecond));
                                      $(".startTwoTokens #first1").html(spndrpFromToken);
                                      $(".startTwoTokens #first2").html(spndrpToToken);
                                      $(".endTwoTokens #second1").html(spndrpToToken);
                                      $(".endTwoTokens #second2").html(spndrpFromToken);
                                      var Insuficient=0;
                                      if(parseFloat($("#txtFromToken").val()) > parseFloat($("#txtWalletFromBalance").html())) {
                                          $("#btnAmount").prop('disabled', true);
                                          var vtoken=$('#drpFromToken option:selected').val();
                                          //$(".rowroute").hide();
                                        	//$(".rowroute #routefromto").html('');
                                          $("#btnAmount").html('Insufficient ' + vtoken +' Token');
                                          Insuficient=1;
                                      }


                                      console.log(" Insuficient = "+Insuficient);

                                       /*else if(parseFloat($("#txtToToken").val()) > parseFloat($("#txtWalletToBalance").html())) {
                                          $("#btnAmount").prop('disabled', true);
                                          var vtoken=$('#drpToToken option:selected').val();
                                          $("#btnAmount").html('Insufficient ' + vtoken +' Token');
                                      }*/
                                      // else {
                                         var vPairAddress='';
                                         var vgetpair='';
                                         if(change=='to_change')
                                        {
                                        	vgetpair=factorycontract.methods.getPair(contractAddress2,contractAddress1).call();
                                        }
                                        else
                                        {
                                        	vgetpair = factorycontract.methods.getPair(contractAddress1,contractAddress2).call();
                                        }
                                         const vgetpairval = vgetpair.then(function(result1){
                                           vPairAddress= result1;
                             
                                               var pairContract = new web3.eth.Contract(JSON.parse(vPairABI), vPairAddress);
                                               var getreserves = pairContract.methods.getReserves().call();
                                               getreserves.then(function(response) {
                                                 console.log("getreserves : " + response[0]);
                                                 var vReverse1=response[0]/devide_to1;
                                                 var vReverse2=parseFloat(response[1]/devide_to2).toFixed(4);

                                                console.log("vReverse1 : " + vReverse1);
                                                console.log("vReverse2 : " +$("#txtFromToken").val()+ " :: "+  vReverse2);
                                                console.log("vLiqProviderFee 11 = " + vLiqProviderFee);

                                                var vPriceImpact=0.01;
	                                           
										        if(multiHops=="yes" || Insuficient==1)
                                      			{
	                                               if(change=='to_change') {
	                                                 var vPriceImpact=parseFloat(($("#txtFromToken").val()/vReverse2)*100).toFixed(4);
	                                                 
	                                                 console.log("111111  !: " + vPriceImpact);
	                                               }
	                                               else {
	                                                 var vPriceImpact=parseFloat(($("#txtToToken").val()/vReverse1)*100).toFixed(4);
	                                                 console.log("2222!: " + vPriceImpact);
	                                               }
	                                           }

	                                           if(multiHops=="no")
	                                           {
	                                               var vRountText=$(".rowroute #routefromto").text();
	                                               if($(".rowroute").is(":visible"))
										        	{
										            	var vPriceImpact = parseFloat($('#priceimpactR1').val()) +parseFloat( $('#priceimpactR2').val());
										            	console.log(" price impact total = "+vPriceImpact);
										        	}
										        }
	                                           vLiqProviderFee = vLiqProviderFee*$("#txtFromToken").val();
										        	//93689
                                               if(parseFloat(vPriceImpact)<=0.01)
                                               {
                                                 	$("#priceimpact").html('<0.01%');
                                               }
                                               else {
                                                   	$("#priceimpact").html(parseFloat(vPriceImpact).toFixed(2)+'%');
                                               }
                                                 $("#minrecamount").html(SetDecimalForMinMax(minrec)+' ' + spndrpToToken);
                                                 $("#liqudityfee").html(SetDecimalForLF(vLiqProviderFee,Insuficient)+' '+drpFromToken);
                                                 if(parseFloat(vPriceImpact)>5 && parseFloat(vPriceImpact)<=15 && Insuficient==0)
                                                 {
                                                	$("#btnAmount").html('Swap Anyway');
                                                 }
                                                 else if (parseFloat(vPriceImpact)>15) {
                                                   	$("#btnAmount").prop('disabled', true);
                                                   	$("#btnAmount").html('Price Impact is too high');
                                                 }
                                                 else {
                                                   if(Insuficient==0){
                                                     $("#btnAmount").prop('disabled', false);
                                                     $("#btnAmount").html('Swap');
                                                   }
                                                }
                                               });
                                             });
                                          //$("#btnAmount").html('Swap');
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
                                                  if(Insuficient==0){
                                                    $("#btnAmount").prop('disabled', false);
                                                    $("#btnAmount").html('Swap');
                                                  }
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
                                                        if(Insuficient==0){
                                                          if($("#approve1").is(':hidden')){
                                                            $("#btnAmount").prop('disabled', false);
                                                          }
                                                          $("#btnAmount").html('Swap');
                                                        }
                                                    }
                                                });
                                      //}
                                  }
                                });
                              }
                              else {
                                console.log("EERerer");
                              }
                            });
                        } catch (e) {
                          console.log("Error : " + e);
                        } finally {

                        }


                      }
                },
                error: function (result) {
                    alert("Error");
                }
            });
        });
    }

    function ToFixedNoRounding(n,vNum)
    {
    	const reg = new RegExp("^-?\\d+(?:\\.\\d{0," + n + "})?", "g")
	    const a = vNum.toString().match(reg)[0];
	    const dot = a.indexOf(".");
	    if (dot === -1) { // integer, insert decimal dot and pad up zeros
	        return a + "." + "0".repeat(n);
	    }
	    const b = n - (a.length - dot) + 1;
	    return b > 0 ? (a + "0".repeat(b)) : a;
    }

    function SetDecimalForTokenValues(vTokenVal)
    {
    	if(vTokenVal<0.009)
    	{
    		return ToFixedNoRounding(8,parseFloat(vTokenVal));
    	}
    	else if(vTokenVal<0.09)
    	{
    		return ToFixedNoRounding(7,parseFloat(vTokenVal));
    	}
    	else if(vTokenVal<0.9)
    	{
    		return ToFixedNoRounding(6,parseFloat(vTokenVal));
    	}
    	else if(vTokenVal<9)
    	{
    		return ToFixedNoRounding(5,parseFloat(vTokenVal));
    	}
    	else if(vTokenVal>9 && vTokenVal<99)
    	{
    		return ToFixedNoRounding(4,parseFloat(vTokenVal));
    	}
    	else if(vTokenVal>99 && vTokenVal<999)
    	{
    		return ToFixedNoRounding(3,parseFloat(vTokenVal));
    	}
    	else if(vTokenVal>999 && vTokenVal<9999)
    	{
    		return ToFixedNoRounding(2,parseFloat(vTokenVal));
    	}
    	else if(vTokenVal>9999 && vTokenVal<99999)
    	{
    		return ToFixedNoRounding(1,parseFloat(vTokenVal));
    	}
    	
    }

    function SetDecimalForMinMax(vMinMax)
    {
    	console.log("vMinMax = "+vMinMax);
    	if(vMinMax>=0.001 && vMinMax<0.01)
    	{
    		console.log("vMinMax  11 = "+vMinMax);
    		return parseFloat(vMinMax).toFixed(6);
    	}
    	else if(vMinMax>=0.01 && vMinMax<0.1)
    	{
    		console.log("vMinMax  11 = "+vMinMax);
    		return parseFloat(vMinMax).toFixed(5);
    	}
    	else if(vMinMax>=0.1 && vMinMax<1)
    	{
    		console.log("vMinMax  22 = "+vMinMax);
    		return parseFloat(vMinMax).toFixed(4);
    	}
    	else if(vMinMax>=1 && vMinMax<10)
    	{
    		console.log("vMinMax  33 = "+vMinMax);
    		return parseFloat(vMinMax).toFixed(3);
    	}
    	else if(vMinMax>=10 && vMinMax<100)
    	{
    		console.log("vMinMax  44 = "+vMinMax);
    		return parseFloat(vMinMax).toFixed(2);
    	}
    	else if(vMinMax>=100 && vMinMax<1000)
    	{
    		console.log("vMinMax  55 = "+vMinMax);
    		return parseFloat(vMinMax).toFixed(1);
    	}
    	else if(vMinMax>=1000 && vMinMax<10000)
    	{
    		console.log("vMinMax  66 = "+Math.floor(vMinMax));
    		return  Math.floor(vMinMax);
    	}
    	else if(vMinMax>=10000 && vMinMax<=99999)
    	{
    		console.log("vMinMax  66 = "+Math.floor(vMinMax));
    		return  Math.floor(vMinMax);
    	}
    	else
    	{
    		return parseFloat(vMinMax).toFixed(6);
    	}
    	
    }

    function SetDecimalForLF(vLiqFee, vInsuficient)
    {
    	console.log(" vLiqFee = "+vLiqFee);
    	if(vInsuficient==1)
    	{
    		var vFirstDigitAfterDecimal = vLiqFee.toString().split('.')[1][0];
    		if(vFirstDigitAfterDecimal>0)
    		{
    			return Math.floor(vLiqFee)+ "."+vFirstDigitAfterDecimal;
    		}
    		else
    		{
    			return  Math.floor(vLiqFee);
    		}
    	}
    	else
    	{
    		if(vLiqFee<0.01)
	    	{
	    		return ToFixedNoRounding(6,parseFloat(vLiqFee));
	    	}
	    	else if(vLiqFee<0.1)
	    	{
	    		return ToFixedNoRounding(5,parseFloat(vLiqFee));
	    	}
	    	else if(vLiqFee<1)
	    	{
	    		return ToFixedNoRounding(4,parseFloat(vLiqFee));
	    	}
	    	else if(vLiqFee<10)
	    	{
	    		return ToFixedNoRounding(3,parseFloat(vLiqFee));
	    	}
	    	else if(vLiqFee<100)
	    	{
	    		return ToFixedNoRounding(2,parseFloat(vLiqFee));
	    	}
	    	else if(vLiqFee<1000)
	    	{
	    		return ToFixedNoRounding(1,parseFloat(vLiqFee));
	    	}
	    	else
	    	{
	    		return parseFloat(vLiqFee);
	    	}
    	}
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
  <script src="//cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.js"></script>
<script type="text/javascript"
 src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).on("click", ".open_settings_dialog_button", function () {
  $("#open_settings_dialog_pop").modal('show');
});
</script>
  <?php include 'footer.php';?>
