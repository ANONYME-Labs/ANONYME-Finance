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

	$("#txtFromToken").change(function(){
		CheckCurrentBalance();
  	});

	$("#drpFromToken").change(function(){
		CheckCurrentBalance();
  	});


  	function CheckCurrentBalance()
  	{
  		var vFromAmount = $('#txtFromToken').val();
  		window.web3 = new Web3(ethereum);
  		 web3.eth.getAccounts(async function(error, result) {
            if(!error && typeof(result[0]) !== 'undefined')
               {
                	metaMaskAddress=""+result[0];
                	var vCurrencyType = $('#drpFromToken option:selected').text();
              		var vAvailableBalance =0;
              		var vCurrentbalance=0;
					var vContractAddress ='';
					var vContractABI ='';
					var vContract='';
					
					if($('#txt_mc_'+vCurrencyType).val()!=undefined)
					{
	              		vContractAddress = $('#txt_mc_'+vCurrencyType).val().toString(); // main contract address
	              		vContractABI = $('#txt_abi_'+vCurrencyType).val().toString();
	              		vContractABI = JSON.parse(vContractABI);
	              		vContract = new web3.eth.Contract(vContractABI, vContractAddress, {
			  					from: metaMaskAddress, // default from address
			  				});
	              		// this gives BAT amount
	              		vCurrentbalance =await vContract.methods.balanceOf(metaMaskAddress).call();
	              	}

	              	if(parseInt(vCurrentbalance==0))
	              	{
	              		$("#btnAmount").prop('disabled', false);
						$("#btnAmount").text("Enter an Amount");
	              	}
              		
              		if(vCurrencyType=="ETH")
              		{
              			// this gives ETH amount
                		var vCurrentETHBalance = await web3.eth.getBalance(metaMaskAddress);
              			vAvailableBalance =parseFloat( vCurrentETHBalance /  1e18);
              		}
              		else{
              			vAvailableBalance =parseFloat( vCurrentbalance /  1e18);
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

			  	// $('#displayTokenTo').html('');
      //           $('#displayTokenTo').html(vStr);
      //           $("#displayTokenTo .clstok").click(function(){
			  	// 	var vSelectedToToken = $(this).find(".ml-2").text();
			  	// 	var vSelectedToTokenImg = $(this).find("img").prop('src');
			  	// 	$('#spnToToken').text(vSelectedToToken);
			  	// 	$('#imgToToken').attr('src',vSelectedToTokenImg);
			  	// 	$('#to_token_pop').modal('hide');
			  	// });
            },
            error: function (result) {
                alert("Error");
            }
        });
 });
  </script>
  <?php include 'footer.php';?>