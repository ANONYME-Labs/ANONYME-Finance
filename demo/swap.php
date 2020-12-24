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
              <div class="col-sm-12">
                <div class="input-group">
                    <input type="text" id="txtFromToken" class="form-control" aria-label="Text input with dropdown button" style="border-radius: 50px 0 0 53px;" placeholder="0.0">
                    <div class="input-group-append">
                    	<select  name="drpFromToken" id="drpFromToken" style="width:100px;">
							<option value="calendar" data-image="images/eth.png">ETH</option>
						</select>
                       
                    </div>
                  </div>
              </div>
              <div class="col-sm-12 py-3 text-center">
                <p class="m-0"><i class="fa fa-arrow-down" aria-hidden="true"></i></p>
              </div>
              <div class="col-sm-12">
                <div class="input-group">
                    <input type="text" id="txtToToken"  class="form-control" aria-label="Text input with dropdown button" style="border-radius: 50px 0 0 53px;" placeholder="0.0">
                    <div class="input-group-append">
                      <!-- <button class="btn btn-outline-secondary dropdown-toggle" id="btnToToken" type="button" data-toggle="modal" data-target="#to_token_pop"><img src="images/eth.png" id="imgToToken" style="width: 20px;margin-right: 10px;"><span id="spnToToken">ETH</span></button> -->
                      <select  name="drpToToken" id="drpToToken" style="width:100px;">
							<option value="calendar" data-image="images/eth.png">ETH</option>
						</select>
                    </div>
                  </div>
              </div>
              <div class="col-sm-12 py-3 text-center">
                <button class="btn btn-info btn-block btn-lg">Connect Wallet</button>
              </div>
            </div>
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

<?php include 'footer.php';?>

<!-- <script src="js/jquery-1.9.0.min.js"></script> -->
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

	$("#txtFromToken").change(function(){
		var vFromAmount = $('#txtFromToken').val();
  		window.web3 = new Web3(ethereum);
  		 web3.eth.getAccounts(async function(error, result) {
            if(!error && typeof(result[0]) !== 'undefined')
               {
                	metaMaskAddress=""+result[0];

                	var batContractAddress = "0xbf7a7169562078c96f0ec1a8afd6ae50f12e5a99";
					var batABI = [{"constant":true,"inputs":[],"name":"batFundDeposit","outputs":[{"name":"","type":"address"}],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"}],"name":"approve","outputs":[{"name":"success","type":"bool"}],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"batFund","outputs":[{"name":"","type":"uint256"}],"payable":false,"type":"function"},{"constant":false,"inputs":[{"name":"_from","type":"address"},{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"success","type":"bool"}],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint256"}],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"tokenExchangeRate","outputs":[{"name":"","type":"uint256"}],"payable":false,"type":"function"},{"constant":false,"inputs":[],"name":"finalize","outputs":[],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"version","outputs":[{"name":"","type":"string"}],"payable":false,"type":"function"},{"constant":false,"inputs":[],"name":"refund","outputs":[],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"tokenCreationCap","outputs":[{"name":"","type":"uint256"}],"payable":false,"type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"balance","type":"uint256"}],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"isFinalized","outputs":[{"name":"","type":"bool"}],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"fundingEndBlock","outputs":[{"name":"","type":"uint256"}],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"ethFundDeposit","outputs":[{"name":"","type":"address"}],"payable":false,"type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transfer","outputs":[{"name":"success","type":"bool"}],"payable":false,"type":"function"},{"constant":false,"inputs":[],"name":"createTokens","outputs":[],"payable":true,"type":"function"},{"constant":true,"inputs":[],"name":"tokenCreationMin","outputs":[{"name":"","type":"uint256"}],"payable":false,"type":"function"},{"constant":true,"inputs":[],"name":"fundingStartBlock","outputs":[{"name":"","type":"uint256"}],"payable":false,"type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"},{"name":"_spender","type":"address"}],"name":"allowance","outputs":[{"name":"remaining","type":"uint256"}],"payable":false,"type":"function"},{"inputs":[{"name":"_ethFundDeposit","type":"address"},{"name":"_batFundDeposit","type":"address"},{"name":"_fundingStartBlock","type":"uint256"},{"name":"_fundingEndBlock","type":"uint256"}],"payable":false,"type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_to","type":"address"},{"indexed":false,"name":"_value","type":"uint256"}],"name":"LogRefund","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_to","type":"address"},{"indexed":false,"name":"_value","type":"uint256"}],"name":"CreateBAT","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_from","type":"address"},{"indexed":true,"name":"_to","type":"address"},{"indexed":false,"name":"_value","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_owner","type":"address"},{"indexed":true,"name":"_spender","type":"address"},{"indexed":false,"name":"_value","type":"uint256"}],"name":"Approval","type":"event"}];

              		var batContract = new web3.eth.Contract(batABI, batContractAddress, {
		  					from: metaMaskAddress, // default from address
		  				});

              		var vCurrencyType = $('#spnFromToken').text();
              		var vAvailableBalance =0;
              		// this gives BAT amount
              		var vCurrentBATbalance =await batContract.methods.balanceOf(metaMaskAddress).call();

              		// this gives ETH amount
                	var vCurrentETHBalance = await web3.eth.getBalance(metaMaskAddress);

              		if(vCurrencyType=="BAT")
              		{
              			vAvailableBalance =parseFloat( vCurrentBATbalance /  1e18);
              		}
              		else if(vCurrencyType=="ETH")
              		{
              			vAvailableBalance =parseFloat( vCurrentETHBalance /  1e18);
              		}

                	if(parseFloat(vFromAmount) > parseFloat(vAvailableBalance ))
                	{
                		$("#btnAmount").text("Insuficient liquidity");
                		$("#btnAmount").prop('disabled', true); 
                	}
                	else
                	{
                		$("#btnAmount").prop('disabled', false);
						$("#btnAmount").text("Enter an Amount");
                	}
              }
              else
              {
              	$('#txtFromToken').val('');
              	$('#txtToToken').val('');
              	alert("Please connect with your wallet.")
              }
            });
  	});

	//========== Get Tokens =============

	$.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: 'getTokens.php',
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
                //$('.ddChild ul').html(vStr);

                
      //           $('#displayTokenFrom').html('');
      //           $('#displayTokenFrom').html(vStr);
      //           $("#displayTokenFrom .clstok").click(function(){
			  	// 	var vSelectedToken = $(this).find(".ml-2").text();
			  	// 	var vSelectedTokenImg = $(this).find("img").prop('src');
			  	// 	$('#spnFromToken').text(vSelectedToken);
			  	// 	$('#imgFromToken').attr('src',vSelectedTokenImg);
			  	// 	$('#from_token_pop').modal('hide');
			  	// });
			  	// To Token

			  	$('#displayTokenTo').html('');
                $('#displayTokenTo').html(vStr);
                $("#displayTokenTo .clstok").click(function(){
			  		var vSelectedToToken = $(this).find(".ml-2").text();
			  		var vSelectedToTokenImg = $(this).find("img").prop('src');
			  		$('#spnToToken').text(vSelectedToToken);
			  		$('#imgToToken').attr('src',vSelectedToTokenImg);
			  		$('#to_token_pop').modal('hide');
			  	});
            },
            error: function (result) {
                alert("Error");
            }
        });
 });
  </script>
  