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
                <button id="btnAmount" class="btn btn-info btn-block btn-lg">Connect Wallet</button>
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

              			// Change button text

              			if(parseInt(vCurrentbalance)==0)
		              	{
		              		alert("There is 0 balance found for "+vCurrencyType);
		              		$("#txtFromToken").val('');
		              		$("#btnAmount").prop('disabled', false);
							$("#btnAmount").text("Enter an Amount");
		              	}
	                	else if(parseFloat(vFromAmount) > parseFloat(vAvailableBalance ))
	                	{
	                		$("#btnAmount").text("Insuficient liquidity");
	                		$("#btnAmount").prop('disabled', true); 
	                	}
	                	else
	                	{
	                		if($('#drpToToken option:selected').val()==0)
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
              			$('#txtWalletToBalance').text(vAvailableBalance);
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


  	function changeFromToken(change = '') {

        var spnPoolFromToken = poolFromToken = $('#drpFromToken option:selected').val();
        var spnPoolToToken = poolToToken = $('#drpToToken option:selected').val();
        if(change=='to_change')
        {
          spnPoolToToken= poolToToken  = $('#drpFromToken option:selected').val();
          spnPoolFromToken  = poolFromToken = $('#drpToToken option:selected').val();
        }

        web3.eth.getAccounts(async function (error, result) {

            var myAccountAddress = result[0];
            var selectedtoken = spnPoolToToken
            
            if(spnPoolToToken=='ETH')
            {
              selectedtoken=spnPoolFromToken;
            }
            /*var startToken = $("#drpFromToken_title .ddlabel").html();
            var endToken = $("#drpToToken_title .ddlabel").html();*/

            $.ajax({
                type: "POST",
                url: 'ajax/getCurrencyData.php',
                data: {tokenname:selectedtoken },
                dataType: "json",
                success: function (res) {

                    console.log(res.status);

                    if (res.status == '1') {
                        var contractABI = res.data.contractABI;
                        var contractAddress = res.data.contractAddress;
                        var devide_to = '1e'+res.data.desimals;
                        if(res.name == 'ETH'){
                        		
                        } else {

                            var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);

                            var WETHobj = routerContract.methods.WETH().call();

                            const WETHval = WETHobj.then(function(result){

                                console.log("weth result : " + result);

                                var txtPoolFromToken = $("#txtFromToken").val();
                                var amountOut = ( devide_to / txtPoolFromToken);
                                if(change=='to_change')
                                {
                                  txtPoolFromToken = $("#txtToToken").val();
                                  amountOut = ( devide_to * txtPoolFromToken);
                                }
                                if(spnPoolToToken=='ETH' )
                                {
                                  amountOut = ( devide_to * txtPoolFromToken);
                                }
                                var path = [result, contractAddress];
                                var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();

                                getamntin.then(function(getAmtVal) {

                                    console.log(getAmtVal);

                                    if(spnPoolToToken=='ETH' || spnPoolFromToken=='ETH')
                                    {
                                      devide_to = 1e18;
                                    }


                                    if(spnPoolToToken=='ETH' )
                                    {
                                      var ETHValue = getAmtVal[0];
                                      var  tokenAount= getAmtVal[1];
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

                                      $(".startTwoTokens #first1").html(spnPoolToToken);
                                      $(".startTwoTokens #first2").html(spnPoolFromToken);
                                      $(".endTwoTokens #second1").html(spnPoolFromToken);
                                      $(".endTwoTokens #second2").html(spnPoolToToken);
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
                                      console.log("*txtPoolFromToken : " + txtPoolFromToken);
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

                                      $(".startTwoTokens #first1").html(spnPoolFromToken);
                                      $(".startTwoTokens #first2").html(spnPoolToToken);
                                      $(".endTwoTokens #second1").html(spnPoolToToken);
                                      $(".endTwoTokens #second2").html(spnPoolFromToken);
                                    }
                                    //$("#create_pair_btn").prop('disabled', false);

                                   // $("#create_pair_btn").html('Supply');
                                });
                            });
                        }
                    }
                },
                error: function (result) {
                    alert("Error");
                }
            });
        });
    }

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
            },
            error: function (result) {
                alert("Error");
            }
        });
 });
  </script>
  <?php include 'footer.php';?>