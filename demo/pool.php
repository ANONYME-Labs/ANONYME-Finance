<?php include 'header.php';?>
<?php include 'sidebar.php';?>

<style type="text/css">
  .selectCImage{
      max-width: 25px;
      margin-right: 5px;
  }
  .select2-container--default .select2-selection--single{
    height: 40px;
  }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1363.2px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-uppercase">POOL</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" id="swap">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col-lg-6">
            <!-- /.card -->

            <div class="card p-3 mb-3">
              <p>Liquidity provider rewards</p>
              <p>Liquidity providers earn a 0.3% fee on all trades proportional to their share of the pool. Fees are added to the pool, accrue in real time and can be claimed by withdrawing your liquidity.</p>
              <a href="#">Read more about providing liquidity</a>
            </div>

            <div class="row mb-5">
              <div class="col-lg-6">
                <h3>Your liquidity</h3>
              </div>
              <div class="col-lg-6">
                <a href="#" class="btn btn-outline-info" role="button" aria-pressed="true" data-toggle="modal" data-target="#coin_option2">Create a pair</a>
                <a href="#" class="btn btn-info" role="button" aria-pressed="true">Add Liquidity</a>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-12 text-center">
                <p>Connect to a wallet to view your liquidity.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <p>Don't see a pool you joined?<a href=""> Import it.</a></p>
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
	 
$(document).ready(function(){

	
	$("#btnPoolFromToken").click(function(){
  		//$('#coin_option2').modal('hide');
  });

  $("#btnPoolToToken").click(function(){
  		//$('#coin_option2').modal('hide');
	});

  $.ajax({
    type: "POST",
    contentType: "application/json; charset=utf-8",
    url: 'getTokens.php',
    data: "{}",
    dataType: "json",
    success: function (data) {
      var vStr='';
      for(i=0;i<data.length;i++) {

        	vStr = vStr + '<option dataimage="'+data[i].cURL+'" value='+data[i].cCode+'>'+data[i].cCode+'</option>';
      }
      $('#displayTokenFrom').html('');
      $('#displayTokenFrom').html(vStr);
      $("#displayTokenFrom .clstok").click(function(){
	  		var vSelectedToken = $(this).find(".ml-2").text();
	  		var vSelectedTokenImg = $(this).find("img").prop('src');
	  		$('#spnPoolFromToken').text(vSelectedToken);
	  		$('#imgPoolFromToken').attr('src',vSelectedTokenImg);
	  		$('#from_token_pop').modal('hide');
	  	});

      $('#displayTokenTo').html('');
      $('#displayTokenTo').html(vStr);
      $("#displayTokenTo .clstok").click(function(){
	  		var vSelectedToToken = $(this).find(".ml-2").text();
	  		var vSelectedToTokenImg = $(this).find("img").prop('src');
	  		$('#spnPoolToToken').text(vSelectedToToken);
	  		$('#imgPoolToToken').attr('src',vSelectedToTokenImg);
	  		$('#to_token_pop').modal('hide');
	  	});

      //$('#displayTokenCoin3').html('');
      //$('#displayTokenCoin3').html(vStr);
    },
    error: function (result) {
       // alert("Error");
    }
  });          
});

function formatState (opt) {
    if (!opt.id) {
      return opt.text;
    }               
    var optimage = $(opt.element).attr('dataimage'); 
    if(!optimage){
      return opt.text;
    } else {
      var $opt = $(
      '<span class="selectCSpan"><img src="' + optimage + '" class="selectCImage" /> ' + $(opt.element).text() + '</span>'
      );
      return $opt;
    }
}
</script>




  <?php include 'footer.php';?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function(){

    $("#displayTokenFrom").select2({
        templateResult: formatState,
        templateSelection: formatState
    });

    $("#displayTokenTo").select2({
        templateResult: formatState,
        templateSelection: formatState
    });


    $(document.body).on("change","#displayTokenFrom",function(){

        $("#pairWalletFromBalance").html('');

        $("#from_token_pop").modal('hide');
        $("#spnPoolFromToken").html(this.value);

        $("#displayTokenFrom").select2({
          templateResult: formatState,
          templateSelection: formatState
        });

        $('#btnPoolFromToken img').show();
        var img = $("#select2-displayTokenFrom-container .selectCImage").attr('src');
        $('#btnPoolFromToken img').attr('src', img);

        var selectedTo = $("#spnPoolToToken").html();
        if(selectedTo == this.value){
          $("#spnPoolToToken").html("Select Token");
          $('#btnPoolToToken img').hide();
        }

        /* button action */

        if(this.value == 'ETH'){
          window.web3 = new Web3(ethereum);
          web3.eth.getAccounts(async function(error, result) {
            if(!error && typeof(result[0]) !== 'undefined') {
              metaMaskAddress=""+result[0];
              var vCurrentBalance = await web3.eth.getBalance(metaMaskAddress);
              var vAvailableETH = parseFloat( vCurrentBalance /  1e18).toFixed(4);

              $("#pairWalletFromBalance").html(vAvailableETH);

            }
          });
        } else {
          $("#pairWalletFromBalance").html(0.00);          
        }

    });

    $(document.body).on("change","#displayTokenTo",function(){

        $("#to_token_pop").modal('hide');
        $("#spnPoolToToken").html(this.value);

        $("#displayTokenTo").select2({
          templateResult: formatState,
          templateSelection: formatState
        });

        $('#btnPoolToToken img').show();
        var img = $("#select2-displayTokenTo-container .selectCImage").attr('src');
        $('#btnPoolToToken img').attr('src', img);

        var selectedFrom = $("#spnPoolFromToken").html();
        if(selectedFrom == this.value){
          $("#spnPoolFromToken").html("Select Token");
          $('#btnPoolFromToken img').hide();
        }

        /* button action */

    });


    $("#pairETHButtonFrom").click( async function(){

        $('#btnPoolFromToken img').show();
        $('#btnPoolFromToken img').attr('src', 'images/eth.png');

        $("#from_token_pop").modal('hide');
        $("#spnPoolFromToken").html('ETH');

        window.web3 = new Web3(ethereum);
        web3.eth.getAccounts(async function(error, result) {
          if(!error && typeof(result[0]) !== 'undefined') {
            metaMaskAddress=""+result[0];
            var vCurrentBalance = await web3.eth.getBalance(metaMaskAddress);
            var vAvailableETH = parseFloat( vCurrentBalance /  1e18).toFixed(4);

            $("#pairWalletFromBalance").html(vAvailableETH);

            $("#displayTokenFrom").select2({
              templateResult: formatState,
              templateSelection: formatState
            });

          }
        });
    });


    $("#pairETHButtonTo").click( async function(){

        $('#btnPoolToToken img').show();
        $('#btnPoolToToken img').attr('src', 'images/eth.png');

        $("#to_token_pop").modal('hide');
        $("#spnPoolToToken").html('ETH');

        window.web3 = new Web3(ethereum);
        web3.eth.getAccounts(async function(error, result) {
          if(!error && typeof(result[0]) !== 'undefined') {
            metaMaskAddress=""+result[0];
            var vCurrentBalance = await web3.eth.getBalance(metaMaskAddress);
            var vAvailableETH = parseFloat( vCurrentBalance /  1e18).toFixed(4);

            $("#pairWalletToBalance").html(vAvailableETH);

            $("#displayTokenTo").select2({
              templateResult: formatState,
              templateSelection: formatState
            });

          }
        });
    });

    $('#txtPoolFromToken, #txtPoolToToken').on('keyup paste input', function () {

        // allows 123. or .123 which are fine for entering on a MySQL decimal() or float() field
        // if more than one dot is detected then erase (or slice) the string till we detect just one dot
        // this is likely the case of a paste with the right click mouse button and then a paste (probably others too), the other situations are handled with keydown, keypress, keyup, etc

        while ( ($(this).val().split(".").length - 1) > 1 ) {

            $(this).val($(this).val().slice(0, -1));

            if ( ($(this).val().split(".").length - 1) > 1 ) {
                continue;
            } else {
                return false;
            }

        }

        // replace any character that's not a digit or a dot
        $(this).val($(this).val().replace(/[^0-9.]/g, ''));

        // now cut the string with the allowed number for the integer and float parts
        // integer part controlled with the int_num_allow variable
        // float (or decimal) part controlled with the float_num_allow variable

        var int_num_allow = 15;
        var float_num_allow = 1;

        var iof = $(this).val().indexOf(".");

        if ( iof != -1 ) {

            // this case is a mouse paste (probably also other events) with more numbers before the dot than is allowed
            // the number can't be "sanitized" because we can't "cut" the integer part, so we just empty the element and optionally change the placeholder attribute to something meaningful

            if ( $(this).val().substring(0, iof).length > int_num_allow ) {
                $(this).val('');
                // you can remove the placeholder modification if you like
                $(this).attr('placeholder', 'invalid number');
            }

            // cut the decimal part

            $(this).val($(this).val().substring(0, iof + float_num_allow + 1));

        } else {

            $(this).val($(this).val().substring(0, int_num_allow));
        }

        changeFromToken();

        return true;

    });

    /*$('#txtPoolFromToken, #txtPoolToToken').keypress(function(event) {
      
      console.log(event.which);

      if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
      } else {
        changeFromToken();
      }
    });*/


    function changeFromToken(){

      var spnPoolFromToken = $("#spnPoolFromToken").html();
      if(spnPoolFromToken != ''){

        var txtPoolFromToken = $("#txtPoolFromToken").val();
        $(".firstTokenRate").html(txtPoolFromToken);

        var txtPoolToToken = $("#txtPoolToToken").val();
        $(".secondTokenRate").html(txtPoolToToken);

      } else {

        $(".firstTokenRate").html('-');
        $(".secondTokenRate").html('-');

      }
      var spnPoolToToken = $("#spnPoolToToken").html();


      if(spnPoolFromToken != '' && spnPoolToToken != '' ){

        $(".startTwoTokens #first1").html('first1');
        $(".startTwoTokens #first2").html('first2');
        $(".endTwoTokens #second1").html('second1');
        $(".endTwoTokens #second2").html('second2');
      }
      
    }

  });



</script>