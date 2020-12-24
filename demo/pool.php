<?php include 'header.php';?>
<?php include 'sidebar.php';?>


<style type="text/css">
  .selectCImage{
      max-width: 25px;
      margin-right: 5px;
  }

  .select2.select2-container{ width: 100% !important; }
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

<?php include 'footer.php';?>

<script type="text/javascript">
  
  $(document).ready(function(){

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
        
        $('#displayTokenTo').html('');
        $('#displayTokenTo').html(vStr);

      },
      error: function (result) {
         /* alert("Error"); */
      }
    });

  });

</script>




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

        changeFromToken();

    });

    $(document.body).on("change","#displayTokenTo",function(){
      
        $("#pairWalletToBalance").html('');

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

        if(this.value == 'ETH'){
          window.web3 = new Web3(ethereum);
          web3.eth.getAccounts(async function(error, result) {
            if(!error && typeof(result[0]) !== 'undefined') {
              metaMaskAddress=""+result[0];
              var vCurrentBalance = await web3.eth.getBalance(metaMaskAddress);
              var vAvailableETH = parseFloat( vCurrentBalance /  1e18).toFixed(4);

              $("#pairWalletToBalance").html(vAvailableETH);

            }
          });
        } else {
          $("#pairWalletToBalance").html(0.00);          
        }

        changeFromToken();

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

            changeFromToken();

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

            changeFromToken();

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

        /*
        var int_num_allow = 15;
        var float_num_allow = 6;

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
        */

        changeFromToken();

        return true;

    });

  });

  
  function changeFromToken(){

    var spnPoolFromToken = $("#spnPoolFromToken").html();
    var spnPoolToToken = $("#spnPoolToToken").html();

    if( (spnPoolFromToken != '' && spnPoolToToken != '') && (spnPoolFromToken != 'Select Token' && spnPoolToToken != 'Select Token')){

      var txtPoolFromToken = $("#txtPoolFromToken").val();
      var txtPoolToToken = $("#txtPoolToToken").val();
      
      if(txtPoolFromToken != '' && txtPoolToToken != ''){

        var forFirst = 0;
        var forSecond = 0;

        forFirst = (txtPoolToToken / txtPoolFromToken).toFixed(6); //.replace(/\.0+$/,'');
        forSecond = (txtPoolFromToken / txtPoolToToken).toFixed(6); //.replace(/\.0+$/,'');
        
        if(isFinite(forFirst)){
          $(".firstTokenRate").html(parseFloat(forFirst));
        } else {
          $(".firstTokenRate").html(0);
        }

        if(isFinite(forSecond)){
          $(".secondTokenRate").html(parseFloat(forSecond));
        } else {
          $(".secondTokenRate").html(0);
        }

        $(".startTwoTokens #first1").html(spnPoolFromToken);
        $(".startTwoTokens #first2").html(spnPoolToToken);
        $(".endTwoTokens #second1").html(spnPoolToToken);
        $(".endTwoTokens #second2").html(spnPoolFromToken);

      } else {
        $(".firstTokenRate").html('-');
        $(".secondTokenRate").html('-');

        $(".startTwoTokens #first1").html("");
        $(".startTwoTokens #first2").html("");
        $(".endTwoTokens #second1").html("");
        $(".endTwoTokens #second2").html("");
      }
      

    } else {

      $(".firstTokenRate").html('-');
      $(".secondTokenRate").html('-');

    }
   
  }


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




<!-- Modal 2 -->
<div class="modal fade" id="coin_option2" tabindex="-1" aria-labelledby="coin_option2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="coin_option2Label">Create a pair<i class="fa fa-question-circle ml-2" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-sm-12 mb-3">
          <div class="alert alert-danger">
            You are the first liquidity provider.<br>
            The ratio of tokens you add will set the price of this pool.<br>
            Once you are happy with the rate click supply to review.
          </div>
        </div>
        <div class="col-sm-12">
          <div class="row py-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <span>Token Name</span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
              <div class="sc-kkGfuU hyvXgi css-1rhdhic">Balance: <span id="pairWalletFromBalance">0.00</span> &nbsp;
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="row py-2 hover-select-token">
            <div class="col-sm-12">
                <div class="input-group">
                    <input type="text" class="form-control" id="txtPoolFromToken" aria-label="Text input with dropdown button" style="border-radius: 50px 0 0 53px;" placeholder="0.0">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary dropdown-toggle" id="btnPoolFromToken" type="button" data-toggle="modal" data-target="#from_token_pop">
                        <img src="images/eth.png" id="imgPoolFromToken" style="width: 20px;margin-right: 10px;display: none;"><span id="spnPoolFromToken">Select Token</span></button>
                    </div>
                  </div>
              </div>
              <div class="col-sm-12 py-3 text-center">
                <p class="m-0"><i class="fa fa-plus" aria-hidden="true"></i></p>
              </div>
              <div class="col-sm-12">

                  <div class="row">
                    <div class="col-md-6">
                      test
                    </div>
                    <div class="col-md-6 text-right">
                      <div class="sc-kkGfuU hyvXgi css-1rhdhic">Balance: <span id="pairWalletToBalance">0.00</span> &nbsp;
                        <i class="fa fa-arrow-down" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>

                  <div class="input-group">
                    <input type="text" class="form-control" id="txtPoolToToken" aria-label="Text input with dropdown button" style="border-radius: 50px 0 0 53px;" placeholder="0.0">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary dropdown-toggle" id="btnPoolToToken" type="button" data-toggle="modal" data-target="#to_token_pop">
                        <img src="images/eth.png" id="imgPoolToToken" style="width: 20px;margin-right: 10px;display: none;"><span id="spnPoolToToken">Select Token</span></button>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer border-top-0">

        <div class="row" style="width: 100%;">
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


        <div class="row" style="width: 100%;">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <button disabled="" class="btn btn-primary w-100 mb-3">
              <div class="css-10ob8xa">Invalid pair</div>
            </button>

            <button disabled="" class="btn btn-primary w-100 mb-3">
              Insufficient ETH balance
            </button>

            <button class="btn btn-primary w-100 mb-3">Approve BAT</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="from_token_pop" tabindex="-1" aria-labelledby="from_token_popLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="from_token_popLabel">Select Token<i class="fa fa-question-circle ml-2" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-sm-12">
          <div class="row py-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <button class="btn btn-primary" id="pairETHButtonFrom">ETH</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
              <i class="fa fa-arrow-down" aria-hidden="true"></i>
            </div>
          </div>
          <select name="displayTokenFrom" id="displayTokenFrom" class="form-control form-control-lg" style="border-radius: 20px;width: 100%;">
            <option value='0' selected='true'> Select Token </option>
          </select>
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

<div class="modal fade" id="to_token_pop" tabindex="-1" aria-labelledby="to_token_popLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="to_token_popLabel">Select Token<i class="fa fa-question-circle ml-2" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-sm-12">
          <div class="row py-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <button class="btn btn-primary" id="pairETHButtonTo">ETH</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
              <i class="fa fa-arrow-down" aria-hidden="true"></i>
            </div>
          </div>
          <select name="displayTokenTo" id="displayTokenTo" class="form-control form-control-lg" style="border-radius: 20px;width: 100%;">
            <option value='0' selected='true'> Select Token </option>
          </select>         
        </div>
      </div>
  
    </div>
  </div>
</div>