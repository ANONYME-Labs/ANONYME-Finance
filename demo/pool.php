<?php 

include 'header.php';
include 'sidebar.php';

$userWallet = '';
if(isset($_COOKIE['userWallet']) && $_COOKIE['userWallet'] != '') {
    $userWallet = $_COOKIE['userWallet'];
}

$toggle_expert_mode = '';
if(isset($_COOKIE['toggle_expert_mode']) && $_COOKIE['toggle_expert_mode'] != '') {
    $toggle_expert_mode = $_COOKIE['toggle_expert_mode'];
}

$disable_multihops = '';
if(isset($_COOKIE['disable_multihops']) && $_COOKIE['disable_multihops'] != '') {
    $disable_multihops = $_COOKIE['disable_multihops'];
}
?>

<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
<link rel="stylesheet" href="css/alertify.min.css" />
<link rel="stylesheet" type="text/css" href="css/dd.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.css" />
<input type="hidden" name="login_user_wallet" id="login_user_wallet" value="<?php echo $userWallet; ?>" />

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
    <div class="content" id="poolpage">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-lg-6">
                    <!-- /.card -->

                    <div class="card p-3 mb-3">
                        <p>Liquidity provider rewards</p>
                        <p>Liquidity providers earn a 0.3% fee on all trades proportional to their share of the pool. Fees are added to the pool, accrue in real time and can be claimed by withdrawing your liquidity.</p>
                        <a href="javascript:;">Read more about providing liquidity</a>
                    </div>

                    <div class="row mb-5">
                        <div class="col-lg-6">
                            <h3>Your liquidity</h3>
                        </div>
                        <div class="col-lg-6 text-right">
                            <a href="javascript:;" class="btn btn-info" role="button" aria-pressed="true" data-toggle="modal" data-target="#coin_option2">Add Liquidity</a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-center">
                            <p id="wallet_connected">Connect to a wallet to view your liquidity.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p>Don't see a pool you joined? <a href="javascript:;"> Import it.</a></p>
                        </div>
                    </div>

                    
                    <!-- /.card -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <table class="table tbl_pool_events-striped" id="tbl_pool_events" >
                     <thead>
                        <tr>
                           <th>Gas Price</th>
                           <th>Gas Used</th>
                           <th>Transaction Hash</th>
                           <th>Time Stamp</th>
                           <th id="action">Action</th>
                        </tr>
                     <tbody>
                     </tbody>
                     </thead>
                  </table>

                    
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
<input type="hidden" name="WETHAddress" id="WETHAddress" value="<?php echo $WETHAddress; ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- <msdropdown> -->
<?php include 'footer.php'; ?>

<script src="js/jquery.dd.js"></script>

<script src="js/alertify.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/pool_events_table.js"></script>

<script src="//cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.js"></script>

<script type="application/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script type="text/javascript">

    var routerContractAddress = "<?php echo $routerContractAddress; ?>";
    var routerContractABI = <?php echo $routerContractABI; ?>;
    var WETHAddress = "<?php echo $WETHAddress; ?>";

    $(document).ready(function () {

        window.web3 = new Web3(ethereum);
        web3.eth.getAccounts(async function (error, result) {

            if(result.length > 0){

                $("#wallet_connected").hide();
                myAccountAddress = result[0];

                if($("#login_user_wallet").val() == ''){
                    $("#login_user_wallet").val(myAccountAddress);
                }

                if(WETHAddress == ''){
                    var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);
                    var WETHobj = routerContract.methods.WETH().call();
                    const WETHval = WETHobj.then(function(WETHAddress){

                        $("#WETHAddress").val(WETHAddress);

                        $.ajax({
                            type: "POST",
                            url: 'ajax/saveWETHAddress.php',
                            data: {
                                WETHAddress:WETHAddress
                            },
                            success: function (resp) {
                                console.log(resp);
                            },
                            error: function (res_error) {
                                console.log(res_error);
                            }
                        });
                    });
                }
            } else {

            }
        });
    });


    var factoryContractAddress = "<?php echo $factoryContractAddress; ?>";
    var factoryContractABI = <?php echo $factoryContractABI; ?>;

    var network = <?php echo $network; ?>;

    var etherscan_api_url = '';
    if(network == 0){
        etherscan_api_url = "http://api-rinkeby.etherscan.io/";
    } else {
        etherscan_api_url = "http://api.etherscan.io/";
    }

    $(document).ready(function () {

        /*$('#custom_number_slider').change(function(){
            $('#pool_percent_number').text($(this).val());
        });
        */
        $("#custom_number_slider").mousemove(function(){
            $("#pool_percent_number").text(document.getElementById("custom_number_slider").value + "%");
            $("#rm_lq_sld_val").val(document.getElementById("custom_number_slider").value);
        })

        $(".apprvebuttons").on("click",function(){

            var contractAddress=$(this).attr('data-address');
            var contractABI_json = JSON.parse($(this).attr('data-abi'));
            var contract_dec = JSON.parse($(this).attr('data-decimal'));
            web3.eth.getAccounts(async function (error, result) {

                myAccountAddress = result[0];
                if($("#login_user_wallet").val() == ''){
                    $("#login_user_wallet").val(myAccountAddress);
                }

                var tknContract = new web3.eth.Contract(contractABI_json, contractAddress);
                var value= 1000*parseInt(contract_dec);
                value = value.toLocaleString('fullwide', {useGrouping:false});
                var getapprove = tknContract.methods.approve(routerContractAddress,value).send({
                    from: myAccountAddress,
                    gasLimit: web3.utils.toHex(560000),
                    gasPrice: web3.utils.toHex(10000000000),
                    value: 0
                }).on("confirmation", function () {
                    $(this).hide();

                    $(".apprvebuttons").each(function() {
                        if($(this).is(':hidden')) {
                            $("#create_pair_btn").prop('disabled', false);
                        }
                    });
                });
            });
        });

        $("#coin_option2").on('shown.bs.modal', function () {

            resetAllFields();
            loadSelectOptions();

        });

        loadSelectOptions();
        /*jQuery.noConflict();*/

        $.ajax({

            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: 'ajax/getAllTokens.php',
            data: "{}",
            dataType: "json",
            success: function (data) {

                var vStr = '';
                var arr = {'text': [], 'image': [], 'value': [], 'description': []};

                for (i = 0; i < data.length; i++) {

                    var oDD = $('#poolFromToken').msDropDown().data("dd");
                    oDD.add({text: data[i].cCode, value: data[i].cCode, image: data[i].cURL});

                    var oDD1 = $('#poolToToken').msDropDown().data("dd");
                    oDD1.add({text: data[i].cCode, value: data[i].cCode, image: data[i].cURL});

                    var rmLqOutput1 = $('#rmLqOutput1').msDropDown().data("dd");
                    rmLqOutput1.add({text: data[i].cCode, value: data[i].cCode, image: data[i].cURL});

                    var rmLqOutput2 = $('#rmLqOutput2').msDropDown().data("dd");
                    rmLqOutput2.add({text: data[i].cCode, value: data[i].cCode, image: data[i].cURL});
                }

            },
            error: function (result) {
                console.log(result);
            }
        });

        $(document.body).on("change", "#poolFromToken", function () {

            var poolFromToken = $('#poolFromToken option:selected').val();
            getSelectedWalletBalance(poolFromToken, 'fromwallet');

            changeFromToken("from_change");

        });

        $(document.body).on("change", "#poolToToken", function () {

            var poolToToken = $('#poolToToken option:selected').val();
            getSelectedWalletBalance(poolToToken, 'towallet');

            changeFromToken("from_change");

        });

        $('#txtPoolFromToken').on('keyup paste', function () { // input change

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

            // now cut the string with the allowed number for the integer and float parts
            // integer part controlled with the int_num_allow variable
            // float (or decimal) part controlled with the float_num_allow variable

            // var int_num_allow = 15;
            // var float_num_allow = 6;

            // var iof = $(this).val().indexOf(".");

            // if ( iof != -1 ) {

            //     // this case is a mouse paste (probably also other events) with more numbers before the dot than is allowed
            //     // the number can't be "sanitized" because we can't "cut" the integer part, so we just empty the element and optionally change the placeholder attribute to something meaningful

            //     if ( $(this).val().substring(0, iof).length > int_num_allow ) {
            //         $(this).val('');
            //         // you can remove the placeholder modification if you like
            //         $(this).attr('placeholder', 'invalid number');
            //     }

            //     // cut the decimal part

            //     $(this).val($(this).val().substring(0, iof + float_num_allow + 1));

            // } else {

            //     $(this).val($(this).val().substring(0, int_num_allow));
            // }

            changeFromToken("from_change");

            return true;
        });

        $('#txtPoolToToken').on('keyup paste input change', function () {
            while (($(this).val().split(".").length - 1) > 1) {
                $(this).val($(this).val().slice(0, -1));
                if (($(this).val().split(".").length - 1) > 1) {
                    continue;
                } else {
                    return false;
                }
            }
            $(this).val($(this).val().replace(/[^0-9.]/g, ''));
            changeFromToken('to_change');
            return true;
        });

        $('#rmlqbothtoken, #rmlqoutput1token, #rmlqoutput2token').on('keyup paste input change', function () {
            while (($(this).val().split(".").length - 1) > 1) {
                $(this).val($(this).val().slice(0, -1));
                if (($(this).val().split(".").length - 1) > 1) {
                    continue;
                } else {
                    return false;
                }
            }
            $(this).val($(this).val().replace(/[^0-9.]/g, ''));
            changeFromToken('to_change');
            return true;
        });

    });

    function resetAllFields(not = '') {

        $("#txtPoolFromToken").val("");
        $("#txtPoolToToken").val("");

        $(".firstTokenRate").html('-');
        $(".secondTokenRate").html('-');

        $(".startTwoTokens #first1").html("");
        $(".startTwoTokens #first2").html("");
        $(".endTwoTokens #second1").html("");
        $(".endTwoTokens #second2").html("");

        if(not == ''){

            $("#pairWalletFromBalance").html("0.00");
            $("#pairWalletToBalance").html("0.00");

            $("#poolFromToken_title .ddlabel").html("Select Token");
            $("#poolFromToken_title img").remove();

            $("#poolToToken_title .ddlabel").html("Select Token");
            $("#poolToToken_title img").remove();
        } 
    }

    function loadSelectOptions() {

        $("select").msDropdown({roundedBorder: false});

        if ($(".enabled._msddli_").hasClass("selected")) {
            $(".enabled._msddli_").removeClass("selected");
        }
    }

    function getSelectedWalletBalance(tokenname, walletLocation) {

        var loader = '<img src="images/loader.gif" class="balanceloader" />';

        if (walletLocation == 'fromwallet') {
            $("#pairWalletFromBalance").html(loader);
        } else {
            $("#pairWalletToBalance").html(loader);
        }

        var metaMaskAddress = '';

        if (tokenname == 'ETH') {

            window.web3 = new Web3(ethereum);
            web3.eth.getAccounts(async function (error, result) {
                if (!error && typeof (result[0]) !== 'undefined') {

                    metaMaskAddress = result[0];
                    if (metaMaskAddress == '') {
                        alertify.alert('Warning', 'Please Login to Tronlink Wallet.');
                        return false;
                    }

                    var vCurrentBalance = await web3.eth.getBalance(metaMaskAddress);
                    var vAvailableETH = parseFloat(vCurrentBalance / 1e18).toFixed(4);

                    if (walletLocation == 'fromwallet') {
                        $("#pairWalletFromBalance").html(vAvailableETH);
                    } else {
                        $("#pairWalletToBalance").html(vAvailableETH);
                    }

                    $("#pool_loading").hide();

                }
            });

            $("#pool_loading").hide();

        } else {

            $.ajax({

                type: "POST",
                //contentType: "application/json; charset=utf-8",
                url: 'ajax/getCurrencyData.php',
                data: {tokenname: tokenname},
                dataType: "json",
                success: function (res) {
                    if (res.status == '1') {
                        var contractABI = res.data.contractABI;
                        var contractAddress = res.data.contractAddress;
                        var devide_to = '1e'+res.data.desimals;
                        web3.eth.getAccounts(async function (error, result) {

                            myAccountAddress = result[0];
                            if (myAccountAddress == '') {
                                alertify.alert('Warning', 'Please Login to Tronlink Wallet.');
                                return false;
                            }

                            contractABI = JSON.parse(contractABI);

                            var tknContract = new web3.eth.Contract(contractABI, contractAddress);
                            var balance = await tknContract.methods.balanceOf(myAccountAddress).call();
                            var vAvailable = parseFloat(balance / devide_to).toFixed(4);

                            if (walletLocation == 'fromwallet') {
                                $("#pairWalletFromBalance").html(vAvailable);
                            } else {
                                $("#pairWalletToBalance").html(vAvailable);
                            }

                            $("#pool_loading").hide();

                        });

                    } else {
                        if (walletLocation == 'fromwallet') {
                            $("#pairWalletFromBalance").html("0.00");
                        } else {
                            $("#pairWalletToBalance").html("0.00");
                        }

                        $("#txtPoolFromToken").val(0.00);
                        $("#txtPoolToToken").val(0.00);
                        alertify.alert('Error', 'Something went wrong, Please try again.');
                        $("#create_pair_btn").html('Invalid pair');

                        $("#pool_loading").hide();

                        return false;
                    }

                },
                error: function (result) {
                    alert("Error");
                }
            });

            $("#pool_loading").hide();
        }
    }

    Number.prototype.toFixedSpecial = function(n) {
      var str = this.toFixed(n);
      if (str.indexOf('e+') === -1)
        return str;

      // if number is in scientific notation, pick (b)ase and (p)ower
      str = str.replace('.', '').split('e+').reduce(function(p, b) {
        return p + Array(b - p.length + 2).join(0);
      });

      if (n > 0)
        str += '.' + Array(n + 1).join(0);

      return str;
    };


    function getSetReserveValues(_reserve0, _reserve1, txtPoolFromToken, change, spnPoolFromToken, spnPoolToToken, contractAddress, contractABI, devide_to){
        if(_reserve0 > 0 && _reserve1 > 0){

            var reserve0 = (_reserve0 / devide_to);
            var reserve1 = (_reserve1 / devide_to);
            var numOfToken = txtPoolFromToken;            

            if(reserve0 <= 0 && reserve1 <= 0){

                $("#txtPoolFromToken").val("");
                $("#txtPoolToToken").val("");

                $(".firstTokenRate").html("");
                $(".secondTokenRate").html("");

                $("#create_pair_btn").prop('disabled', true);
                $("#create_pair_btn").html('Invalid pair');

                return false;
            }

            var token0Price = (reserve0 / reserve1).toFixed(8);
            var token1Price = (reserve1 / reserve0).toFixed(8);

            var forFirst = 0;
            var forSecond = 0;

            if(change == 'from_change') {
                forFirst = (txtPoolFromToken * token0Price);
                if(forFirst > 0){
                    forFirst = parseFloat(forFirst).toFixed(8);
                    $("#txtPoolToToken").val(forFirst);
                }
            } else if(change == 'to_change') {
                forSecond = (txtPoolFromToken * token1Price);
                if(forSecond > 0){
                    forSecond = parseFloat(forSecond).toFixed(8);
                    $("#txtPoolFromToken").val(forSecond);
                }
            } else {
                forFirst = (txtPoolFromToken * token0Price);
                if(forFirst > 0){
                    forFirst = parseFloat(forFirst).toFixed(8);
                    $("#txtPoolToToken").val(forFirst);
                }
            }

            if($("#txtPoolFromToken").val() <= 0 || $("#txtPoolToToken").val() <= 0){
                $("#create_pair_btn").prop('disabled', true);
                $("#create_pair_btn").html('Invalid pair');
                $("#pool_loading").hide();
                return false;
            }

            var totalLiquidity = (reserve0 + reserve1 + numOfToken);
            var share = ((numOfToken * 100) / totalLiquidity).toFixed(2);
            console.log(share);

            $(".firstTokenRate").html((token0Price));
            $(".secondTokenRate").html((token1Price));
            $(".startTwoTokens #first1").html(spnPoolToToken);
            $(".startTwoTokens #first2").html(spnPoolFromToken);
            $(".endTwoTokens #second1").html(spnPoolFromToken);
            $(".endTwoTokens #second2").html(spnPoolToToken);

            $("#pool_loading").hide();

            if(parseFloat($("#txtPoolFromToken").val()) > parseFloat($("#pairWalletFromBalance").html())) {
                $("#create_pair_btn").prop('disabled', true);
                var vtoken=$('#poolFromToken option:selected').val();
                $("#create_pair_btn").html('Insufficient ' + vtoken +' Token');
            } else if(parseFloat($("#txtPoolToToken").val()) > parseFloat($("#pairWalletToBalance").html())) {
                $("#create_pair_btn").prop('disabled', true);
                var vtoken=$('#poolToToken option:selected').val();
                $("#create_pair_btn").html('Insufficient ' + vtoken +' Token');
            } else {

                $("#create_pair_btn").html('Supply');
                //check approval into ERC-20 token for router contract
                contractABI_json = JSON.parse(contractABI);

                var tknContract = new web3.eth.Contract(contractABI_json, contractAddress);
                var getallowance = tknContract.methods.allowance(myAccountAddress, routerContractAddress).call();
                getallowance.then(function(getallowance) {

                    if(parseInt(getallowance)<= 0) {
                        $("#approve2").show();
                        if($('#poolToToken option:selected').val()=='ETH'){
                          var vtoken=$('#poolFromToken option:selected').val();
                        }
                        else {
                          var vtoken=$('#poolToToken option:selected').val();
                        }
                        $("#approve2").html('Approve '+vtoken);
                        $("#approve2").attr('data-address',contractAddress);
                        $("#approve2").attr('data-abi',contractABI);
                        $("#approve2").attr('data-decimal',devide_to);
                        $("#create_pair_btn").prop('disabled', true);
                    } else {
                        $("#approve2").hide();
                        $("#approve2").attr('data-address','');
                        $("#approve2").attr('data-abi','');
                        $("#approve2").attr('data-decimal',0);
                        $("#create_pair_btn").prop('disabled', false);
                        $("#create_pair_btn").html('Supply');
                    }
                });

                if(spnPoolFromToken!='ETH' && spnPoolToToken!='ETH') {
                    var selectedtoken1 = spnPoolFromToken;

                    $.ajax({
                        type: "POST",
                        url: 'ajax/getCurrencyData.php',
                        data: {tokenname:selectedtoken1 },
                        dataType: "json",
                        success: function (res) {

                            if (res.status == '1') {
                                var contractABI1 = res.data.contractABI;
                                var contractAddress1 = res.data.contractAddress;

                                contractABI1 = JSON.parse(contractABI1);

                                var tknContract1 = new web3.eth.Contract(contractABI1, contractAddress1);
                                var getallowance1 = tknContract.methods.allowance(myAccountAddress, routerContractAddress).call();
                                getallowance1.then(function(getallowance1) {

                                if(parseInt(getallowance1)<= 0) {
                                    $("#approve1").show();
                                    var vtoken=$('#poolFromToken option:selected').val();
                                    $("#approve1").html('Approve '+vtoken);
                                    $("#approve1").attr('data-address',contractAddress1);
                                    $("#create_pair_btn").prop('disabled', true);
                                } else {
                                    $("#approve1").hide();
                                    $("#approve1").attr('data-address','');
                                    $("#create_pair_btn").prop('disabled', false);
                                    $("#create_pair_btn").html('Supply');
                                }
                            });
                            }
                        }
                    });
                }
            }

        } else {
            resetAllFields('1');

            $("#pool_loading").hide();
            $("#create_pair_btn").prop('disabled', true);
            $("#create_pair_btn").html('Insufficient token');
        }
    }

    function getShareOfPoolCalculations(_reserve0, _reserve1, devide_to){
        
        setTimeout(function(){
            
            var txtPoolFromToken = $("#txtPoolFromToken").val();
            var txtPoolToToken = $("#txtPoolToToken").val();

            var token_reserv0 = parseInt(_reserve0) / devide_to;
            var token_reserv1 = parseInt(_reserve1) / devide_to;

            var share_of_pool = 0;
            var total_token= ((parseFloat(txtPoolFromToken)+parseFloat(txtPoolToToken)).toFixed(2));
            if(!isNaN(total_token)){
            
                var total_pool_amount = token_reserv0 + token_reserv1 + parseFloat(total_token);
                var share_of_pool = ((total_token * 100) / total_pool_amount).toFixed(2);

                if(share_of_pool > 100){
                    share_of_pool = 100;
                }
            }

            if(parseFloat(share_of_pool) <= 0.01) { 
                $("#share_of_pool").html('<0.01%');
            } else {
                $("#share_of_pool").html(share_of_pool + '%');
            }

        }, 100);

        /*
        var amountOut = (devide_to * txtPoolFromToken);
        var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);

        amountOut = amountOut.toLocaleString('fullwide', {useGrouping:false});
        //get quote
        
        var vtoken0 = UniswapV2Pair.methods.token0().call();
        vtoken0.then(function(res) {
            vtoken0 = res;
        });
        var vtoken1 = UniswapV2Pair.methods.token1().call();
        vtoken1.then(function(res) {
            vtoken1 = res;
        });

        setTimeout(function(){
            
            var vReverse1 = _reserve0;
            var vReverse2 = _reserve1;

            var share_of_pool = 0;
            if(vtoken0 == contractAddress1) {

                var vQuote = routerContract.methods.quote(amountOut,vReverse1,vReverse2).call();
                vReverse1 = vReverse1 / devide_to;

                if(txtPoolFromToken > 0){
                    share_of_pool = (parseFloat(txtPoolFromToken).toFixed(2) / vReverse1) * 100;
                } else {
                    share_of_pool = 0;
                }

                if(share_of_pool > 100){
                    share_of_pool = 100;
                }

            } else {
                
                if(amountOut > 0){
                    var vQuote = routerContract.methods.quote(amountOut, vReverse2, vReverse1).call();
                  
                    vReverse2 = vReverse2 / devide_to;
                    
                    if(txtPoolFromToken > 0){
                        share_of_pool = (parseFloat(txtPoolFromToken).toFixed(2) / vReverse2) * 100;
                    } else {
                        share_of_pool = 0;
                    }

                    if(share_of_pool > 100){
                        share_of_pool = 100;
                    }
                }
            }

            if(parseFloat(share_of_pool) <= 0) {
                $("#share_of_pool").html('0%');
            } else if(parseFloat(share_of_pool) <= 0.01) { 
                $("#share_of_pool").html('<0.01%');
            } else {
                if(share_of_pool < 0){

                }
                $("#share_of_pool").html(share_of_pool.toFixed(2) + '%');
            }
            
        }, 200);
        */
    }

    function changeFromToken(change = '') {

        $("#approve1").hide();
        $("#approve2").hide();

        var spnPoolFromToken = poolFromToken = $('#poolFromToken option:selected').val();
        var spnPoolToToken = poolToToken = $('#poolToToken option:selected').val();
        if(change == 'to_change') {
            spnPoolToToken = poolToToken  = $('#poolFromToken option:selected').val();
            spnPoolFromToken  = poolFromToken = $('#poolToToken option:selected').val();
        }

        if(spnPoolToToken == '' || spnPoolFromToken == ''){
            return false;
        }

        web3.eth.getAccounts(async function (error, result) {

            var myAccountAddress = result[0];
            var selectedtoken = [];

            if(spnPoolToToken == 'ETH') {
                selectedtoken = [spnPoolFromToken];
            } else if(spnPoolFromToken=='ETH'){
                selectedtoken = [spnPoolToToken];
            } else {
                selectedtoken = [spnPoolFromToken,spnPoolToToken];
            }

            $.ajax({
                type: "POST",
                url: 'ajax/getCurrencyData1.php',
                data: {tokenname:selectedtoken },
                dataType: "json",
                success: function (resp) {

                    /* res=JSON.parse(res); */
                    if(resp.length == 1){
                      var res = resp[0];

                        if (res.status == '1') {

                            $("#pool_loading").show();

                            var WETHAddress = $("#WETHAddress").val();
                            if(WETHAddress){

                                var contractABI = res.data.contractABI;
                                var contractAddress = res.data.contractAddress;
                                var devide_to = '1e'+res.data.desimals;

                                var txtPoolFromToken = $("#txtPoolFromToken").val();
                                if(change == 'to_change') {
                                    txtPoolFromToken = $("#txtPoolToToken").val();
                                }
                                if(txtPoolFromToken <= 0){
                                    $("#txtPoolToToken").val("");
                                }

                                var from_token_name = $('#poolFromToken option:selected').val();
                                var to_token_name = $('#poolToToken option:selected').val();

                                $.ajax({
                                    type: "POST",
                                    url: 'ajax/getFactoryContract.php',
                                    data: {
                                        from_token_name:from_token_name,
                                        to_token_name:to_token_name
                                    },
                                    dataType: "json",
                                    success: function (resp) {

                                        if(resp != ''){

                                            var contractAddress1 = WETHAddress;
                                            var contractAddress2 = contractAddress;

                                            var getPairAddress = resp.getPairAddress;
                                            var getPairABI = resp.getPairABI;
                                            var getPairABI_JSON = JSON.parse(getPairABI);

                                            var UniswapV2Pair = new web3.eth.Contract(getPairABI_JSON, getPairAddress);
                                            var getReserve = UniswapV2Pair.methods.getReserves().call();
                                            getReserve.then(function(getReserveResult){

                                                var poolFromTokenVl = $('#poolFromToken option:selected').val();
                                                if(poolFromTokenVl == 'ETH'){
                                                    var _reserve0 = getReserveResult._reserve0;
                                                    var _reserve1 = getReserveResult._reserve1;
                                                } else {
                                                    var _reserve0 = getReserveResult._reserve1;
                                                    var _reserve1 = getReserveResult._reserve0;
                                                }
                                                getSetReserveValues(_reserve0, _reserve1, txtPoolFromToken, change, spnPoolFromToken, spnPoolToToken, contractAddress, contractABI, devide_to);

                                                /* Share of Pool Calculation - Start */
                                                getShareOfPoolCalculations(_reserve0, _reserve1, devide_to);
                                                /* Share of Pool Calculation - End */
                                            });

                                        } else {

                                            var UniswapV2Factory = new web3.eth.Contract(factoryContractABI, factoryContractAddress);

                                            var token0 = WETHAddress;
                                            var token1 = contractAddress;
                                            var getPairObj = UniswapV2Factory.methods.getPair(token0, token1).call();
                                            getPairObj.then(function(getPairAddress){

                                                $.get(etherscan_api_url + "api?module=contract&action=getabi&address="+getPairAddress+"&format=raw", function( getPairABI ) {

                                                    var getPairABI_JSON = jQuery.parseJSON(JSON.stringify(getPairABI));
                                                    var getPairABI_JSON = JSON.parse(getPairABI_JSON);
                                                    var UniswapV2Pair = new web3.eth.Contract(getPairABI_JSON, getPairAddress);
                                                    var getReserve = UniswapV2Pair.methods.getReserves().call();
                                                    getReserve.then(function(getReserveResult){

                                                        var poolFromTokenVl = $('#poolFromToken option:selected').val();
                                                        if(poolFromTokenVl == 'ETH'){
                                                            var _reserve0 = getReserveResult._reserve0;
                                                            var _reserve1 = getReserveResult._reserve1;
                                                        } else {
                                                            var _reserve0 = getReserveResult._reserve1;
                                                            var _reserve1 = getReserveResult._reserve0;
                                                        }

                                                        getSetReserveValues(_reserve0, _reserve1, txtPoolFromToken, change, spnPoolFromToken, spnPoolToToken, contractAddress, contractABI, devide_to);

                                                        /* Share of Pool Calculation - Start */
                                                        getShareOfPoolCalculations(_reserve0, _reserve1, devide_to);
                                                        /* Share of Pool Calculation - End */
                                                    });

                                                    var from_token_name = $('#poolFromToken option:selected').val();
                                                    var to_token_name = $('#poolToToken option:selected').val();
                                                    var from_token_address = token0;
                                                    var to_token_address = token1;

                                                    $.ajax({
                                                        type: "POST",
                                                        url: 'ajax/saveFactoryContract.php',
                                                        data: {
                                                            getPairAddress:getPairAddress,
                                                            getPairABI:getPairABI,
                                                            from_token_name: from_token_name,
                                                            to_token_name: to_token_name,
                                                            from_token_address: from_token_address,
                                                            to_token_address: to_token_address,
                                                            user_wallet: myAccountAddress
                                                        },
                                                        success: function (resp) {
                                                            console.log(resp);
                                                        },
                                                        error: function (result) {
                                                            alert("Error");
                                                        }
                                                    });
                                                });
                                            });
                                        }
                                    },
                                    error: function (res_error) {
                                        console.log(res_error);
                                    }
                                });

                            } else {
                                $("#create_pair_btn").prop('disabled', true);
                                $("#create_pair_btn").html('Insufficient token');
                            }
                        }
                    } else {

                        var contractABI1,contractAddress1,devide_to1;
                        var contractABI2,contractAddress2,devide_to2;

                        for(i=0;i<resp.length;i++) {
                            var res=resp[i];

                            if (res.status == '1') {
                                if(i==0){
                                    contractABI1 = res.data.contractABI;
                                    contractAddress1 = res.data.contractAddress;
                                    devide_to1 = '1e'+res.data.desimals;
                                } else {
                                    contractABI2 = res.data.contractABI;
                                    contractAddress2 = res.data.contractAddress;
                                    devide_to2 = '1e'+res.data.desimals;
                                }
                            }
                        }
                        var txtPoolFromToken = $("#txtPoolFromToken").val();

                        if(change=='to_change') {
                            txtPoolFromToken = $("#txtPoolToToken").val();
                        }

                        var amountOut = (devide_to1 * txtPoolFromToken);
                        var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);

                        amountOut = amountOut.toLocaleString('fullwide', {useGrouping:false});
                        //get quote


                        var from_token_name = $('#poolFromToken option:selected').val();
                        var to_token_name = $('#poolToToken option:selected').val();

                        $.ajax({
                            type: "POST",
                            url: 'ajax/getFactoryContract.php',
                            data: {
                                from_token_name:from_token_name,
                                to_token_name:to_token_name
                            },
                            dataType: "json",
                            success: function (resp) {

                                if(resp != ''){

                                    var getPairAddress = resp.getPairAddress;
                                    var getPairABI = resp.getPairABI;
                                    var getPairABI_JSON = JSON.parse(getPairABI);
                                    
                                    var pairContract = new web3.eth.Contract(getPairABI_JSON, getPairAddress);

                                } else {
                                    var UniswapV2Factory = new web3.eth.Contract(factoryContractABI, factoryContractAddress);
                                    var getPairObj = UniswapV2Factory.methods.getPair(contractAddress1, contractAddress2).call();
                                    getPairObj.then(function(getPairAddress){

                                        if(getPairAddress != '0') {

                                            $.get(etherscan_api_url + "api?module=contract&action=getabi&address="+getPairAddress+"&format=raw", function( getPairABI ) {

                                                var getPairABI_JSON = jQuery.parseJSON(JSON.stringify(getPairABI));
                                                var getPairABI_JSON = JSON.parse(getPairABI_JSON);

                                                var pairContract = new web3.eth.Contract(getPairABI_JSON, getPairAddress);

                                                $.ajax({
                                                    type: "POST",
                                                    url: 'ajax/saveFactoryContract.php',
                                                    data: {
                                                        getPairAddress:getPairAddress,
                                                        getPairABI:getPairABI,
                                                        from_token_name: from_token_name,
                                                        to_token_name: to_token_name,
                                                        from_token_address: contractAddress1,
                                                        to_token_address: contractAddress2,
                                                        user_wallet: myAccountAddress
                                                    },
                                                    success: function (resp) {
                                                        console.log(resp);
                                                    },
                                                    error: function (result) {
                                                        alert("Error");
                                                    }
                                                });
                                            });
                                        }
                                    });

                                }
                                var vtoken0 = pairContract.methods.token0().call();
                                var vtoken1 = pairContract.methods.token1().call();

                                setTimeout(function(){

                                    vtoken0.then(function(res) {
                                        vtoken0 = res;
                                    });
                                    
                                    vtoken1.then(function(res) {
                                        vtoken1 = res;
                                        var getreserves = pairContract.methods.getReserves().call();
                                        
                                        getreserves.then(function(response) {
                                        
                                            var vReverse1 = response[0];
                                            var vReverse2 = response[1];

                                            getShareOfPoolCalculations(vReverse1, vReverse2, devide_to1);
                                            
                                            var share_of_pool = 0;
                                            if(vtoken0 == contractAddress1) {

                                                var vQuote = routerContract.methods.quote(amountOut,vReverse1,vReverse2).call();
                                                vReverse1 = vReverse1 / devide_to1;
                                            } else {

                                                var vQuote = routerContract.methods.quote(amountOut,vReverse2,vReverse1).call();
                                                vReverse2 = vReverse2 / devide_to2;
                                            }

                                            vQuote.then(function(vQuote) {
                                            
                                                tokenAount = vQuote;
                                                
                                                if(change=='to_change') {
                                                    var inpDevide = (tokenAount / devide_to2).toFixed(8);
                                                } else {
                                                   var inpDevide = (tokenAount / devide_to2).toFixed(8);
                                                }

                                                var getInpSingle = parseFloat(inpDevide).toFixed(8);
                                                var forFirst =  getInpSingle;
                                                var forSecond =((1 / forFirst)).toFixed(8);
                                               
                                                if(change=='to_change') {
                                                    $("#txtPoolFromToken").val(parseFloat(forFirst).toFixed(8));
                                                } else {
                                                    $("#txtPoolToToken").val(parseFloat(forFirst).toFixed(8));
                                                }

                                                forFirst =  getInpSingle / txtPoolFromToken;
                                                forSecond =((1 / forFirst)).toFixed(8);
                                               
                                                $(".firstTokenRate").html(parseFloat(forSecond));
                                                $(".secondTokenRate").html(parseFloat(forFirst));
                                                $(".startTwoTokens #first1").html(spnPoolFromToken);
                                                $(".startTwoTokens #first2").html(spnPoolToToken);
                                                $(".endTwoTokens #second1").html(spnPoolToToken);
                                                $(".endTwoTokens #second2").html(spnPoolFromToken);
                                                
                                                if(parseFloat($("#txtPoolFromToken").val()) > parseFloat($("#pairWalletFromBalance").html())) {
                                                   $("#create_pair_btn").prop('disabled', true);
                                                   var vtoken=$('#poolFromToken option:selected').val();
                                                   $("#create_pair_btn").html('Insufficient ' + vtoken +' Token');
                                                } else if(parseFloat($("#txtPoolToToken").val()) > parseFloat($("#pairWalletToBalance").html())) {
                                                   $("#create_pair_btn").prop('disabled', true);
                                                   var vtoken=$('#poolToToken option:selected').val();
                                                   $("#create_pair_btn").html('Insufficient ' + vtoken +' Token');
                                                } else {

                                                    $("#create_pair_btn").html('Supply');
                                                    //check approval into ERC-20 token for router contract
                                                    contractABI_json1 = JSON.parse(contractABI1);

                                                    var tknContract1 = new web3.eth.Contract(contractABI_json1, contractAddress1);
                                                    var getallowance1 = tknContract1.methods.allowance(myAccountAddress, routerContractAddress).call();
                                                    getallowance1.then(function(getallowance1) {
                                                        if(parseInt(getallowance1)<= 0) {
                                                            $("#approve1").show();
                                                            var vtoken1=$('#poolFromToken option:selected').val();
                                                            $("#approve1").html('Approve '+vtoken1);
                                                            $("#approve1").attr('data-address',contractAddress1);
                                                            $("#approve1").attr('data-abi',contractABI1);
                                                            $("#approve1").attr('data-decimal',devide_to1);
                                                            $("#create_pair_btn").prop('disabled', true);
                                                        } else {
                                                            $("#approve1").hide();
                                                            $("#approve1").attr('data-address','');
                                                            $("#approve1").attr('data-abi','');
                                                            $("#approve1").attr('data-decimal',0);
                                                            $("#create_pair_btn").prop('disabled', false);
                                                            $("#create_pair_btn").html('Supply');
                                                        }
                                                    });

                                                    contractABI_json2 = JSON.parse(contractABI2);

                                                    var tknContract2 = new web3.eth.Contract(contractABI_json2, contractAddress2);
                                                    var getallowance2 = tknContract2.methods.allowance(myAccountAddress, routerContractAddress).call();
                                                    getallowance2.then(function(getallowance2) {
                                                        
                                                        if(parseInt(getallowance2)<= 0) {
                                                            $("#approve2").show();
                                                            var vtoken=$('#poolToToken option:selected').val();
                                                            $("#approve2").html('Approve '+vtoken);
                                                            $("#approve2").attr('data-address',contractAddress1);
                                                            $("#approve2").attr('data-abi',contractABI2);
                                                            $("#approve2").attr('data-decimal',devide_to2);
                                                            $("#create_pair_btn").prop('disabled', true);
                                                        } else {
                                                            $("#approve2").hide();
                                                            $("#approve2").attr('data-address','');
                                                            $("#approve2").attr('data-abi','');
                                                            $("#approve2").attr('data-decimal',0);
                                                            if($("#approve1").is(':hidden')){
                                                                $("#create_pair_btn").prop('disabled', false);
                                                            }
                                                            $("#create_pair_btn").html('Supply');
                                                        }
                                                    });
                                                }
                                            });
                                        });
                                    });
                                }, 500);
                                            
                            },
                            error: function (result) {
                                alert("Error");
                            }
                        });
                    }
                },
                error: function (result) {
                    alert("Error");
                }
            });

            setTimeout(function(){
                $("#pool_loading").hide();
            },10000);
        });
    }

    function toFixedNumber(x) {
      if (Math.abs(x) < 1.0) {
        var e = parseInt(x.toString().split('e-')[1]);
        if (e) {
            x *= Math.pow(10,e-1);
            x = '0.' + (new Array(e)).join('0') + x.toString().substring(2);
        }
      } else {
        var e = parseInt(x.toString().split('+')[1]);
        if (e > 20) {
            e -= 20;
            x /= Math.pow(10,e);
            x += (new Array(e+1)).join('0');
        }
      }
      return x;
    }

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

    function createPairBtnClick() {

        var startToken = $("#poolFromToken_title .ddlabel").html();
        var endToken = $("#poolToToken_title .ddlabel").html();

        if (startToken == endToken) {
            alertify.alert('Warning', 'Please select different token.');
            return false;
        }

        var selectedtoken=[];
        if(endToken == 'ETH') {
            selectedtoken = [startToken];
        } else if(startToken=='ETH'){
            selectedtoken = [endToken];
        } else {
            selectedtoken = [startToken,endToken];
        }

        $.ajax({
            type: "POST",
            url: 'ajax/getCurrencyData1.php',
            data: {tokenname: selectedtoken},
            dataType: "json",
            success: function (resp) {
                if(resp.length == 1){
                    
                    var res = resp[0];
                    if (res.status == '1') {

                        var contractABI = res.data.contractABI;
                        var contractAddress = res.data.contractAddress;
                        var multiply_to = '1e'+res.data.desimals;
                        contractABI = JSON.parse(contractABI);

                        web3.eth.getAccounts(async function (error, result) {

                            myAccountAddress = result[0];

                            if ((startToken != '' && endToken != '') && (startToken != 'Select Token' && endToken != 'Select Token')) {

                                var txtPoolFromToken = $("#txtPoolFromToken").val();
                                var txtPoolToToken = $("#txtPoolToToken").val();

                                var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress, {
                                    from: myAccountAddress, // default from address
                                });

                                const userInputEthValue = web3.utils.toHex( toFixedNumber(multiply_to / txtPoolFromToken));
                                var WETHobj = routerContract.methods.WETH().call();

                                const WETHval = WETHobj.then(function(result){

                                    var amountOut = ( txtPoolFromToken * multiply_to);
                                    var decimals = (txtPoolFromToken!=Math.floor(txtPoolFromToken))?(txtPoolFromToken.toString()).split('.')[1].length:0;

                                    if(endToken=='ETH') {
                                        amountOut = ( multiply_to * txtPoolFromToken);
                                    }

                                    var path = [result, contractAddress];
                                    var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();

                                    getamntin.then(function(getAmtVal) {

                                        var tokenAount = getAmtVal[0];
                                        var ETHValue = getAmtVal[1];
                                        var inpDevide = (tokenAount/ETHValue).toFixed(8);
                                        var getInpSingle = parseFloat(inpDevide).toFixed(8);

                                        var tokenAount =  ((1 / getInpSingle)*ETHValue);
                                        var token_percent = Math.ceil((tokenAount * 1) / 100);
                                        var ETH_percent = Math.ceil((ETHValue * 1) / 100);

                                        var addLiquidityETH = ETHValue;
                                        var token = contractAddress;
                                        var amountTokenDesired = tokenAount;
                                        var amountTokenMin = (tokenAount - token_percent);
                                        var amountETHMin = (ETHValue - ETH_percent);
                                        var to = myAccountAddress;
                                        var milliseconds = 300 * 1000;
                                        var deadline = new Date().getTime() + milliseconds;

                                        console.log('==================');
                                        console.log('addLiquidityETH ' + addLiquidityETH);
                                        console.log('token ' + token);
                                        console.log('amountTokenDesired ' + amountTokenDesired);
                                        console.log('amountTokenMin ' + amountTokenMin);
                                        console.log('amountETHMin ' + amountETHMin);
                                        console.log('to ' + to);
                                        console.log('deadline ' + deadline);
                                        console.log('==================');

                                        var addLiqETH = routerContract.methods.addLiquidityETH(token, amountTokenDesired, amountTokenMin, amountETHMin, to, deadline).send({
                                            gasLimit: web3.utils.toHex(560000),
                                            gasPrice: web3.utils.toHex(10000000000),
                                            value: addLiquidityETH });

                                        var myPromise = MakeQuerablePromise(addLiqETH);

                                        if(myPromise.isPending()){
                                            alertify.alert("<b>Please wait</b>","<div class='text-center'><center><img src='images/ripple-loader.gif' style='width: 50px;' /></center> <br>Please wait...</div>", function(){});
                                        }

                                        var timerID = setInterval(function() {

                                            if(myPromise.isFulfilled()){

                                                myPromise.then(function(result){
                                                    alertify.alert("Transacton Recorded","Thanks for joining <?=$siteName;?> You can check the status at <a href='<?=$etherscanTx;?>"+result.transactionHash+"' target='_blank'>Tronscan</a><br><br> Once transaction is confirmed in Blockchain, you can come back to this page and login into your account.", function(){});
                                                });

                                                $(".ajs-ok").click();
                                                clearInterval(timerID);
                                            }

                                            if(myPromise.isFulfilled()){
                                                resetAllFields();
                                                loadSelectOptions();
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
                                    });
                                });
                            }
                        });
                    }

                } else {

                    var contractABI1,contractAddress1,devide_to1;
                    var contractABI2,contractAddress2,devide_to2;

                    for(i=0;i<resp.length;i++) {
                        var res=resp[i];

                        if (res.status == '1') {
                            if(i==0){
                                contractABI1 = res.data.contractABI;
                                contractAddress1 = res.data.contractAddress;
                                devide_to1 = '1e'+res.data.desimals;
                            } else {
                                contractABI2 = res.data.contractABI;
                                contractAddress2 = res.data.contractAddress;
                                devide_to2 = '1e'+res.data.desimals;
                            }
                        }
                    }

                    var txtPoolFromToken = $("#txtPoolFromToken").val();
                    var txtPoolToToken = $("#txtPoolToToken").val();

                    var amountOut = (devide_to1 * txtPoolFromToken);
                    var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);

                    amountOut = amountOut.toLocaleString('fullwide', {useGrouping:false});
                    
                    var from_token_name = $('#poolFromToken option:selected').val();
                    var to_token_name = $('#poolToToken option:selected').val();

                    $.ajax({
                        type: "POST",
                        url: 'ajax/getFactoryContract.php',
                        data: {
                            from_token_name:from_token_name,
                            to_token_name:to_token_name
                        },
                        dataType: "json",
                        success: function (resp) {

                            if(resp != ''){

                                var getPairAddress = resp.getPairAddress;
                                var getPairABI = resp.getPairABI;
                                var getPairABI_JSON = JSON.parse(getPairABI);

                                
                                var pairContract = new web3.eth.Contract(getPairABI_JSON, getPairAddress);

                            } else {
                                var UniswapV2Factory = new web3.eth.Contract(factoryContractABI, factoryContractAddress);
                                var getPairObj = UniswapV2Factory.methods.getPair(contractAddress1, contractAddress2).call();
                                getPairObj.then(function(getPairAddress){

                                    if(getPairAddress != '0') {

                                        $.get(etherscan_api_url + "api?module=contract&action=getabi&address="+getPairAddress+"&format=raw", function( getPairABI ) {

                                            var getPairABI_JSON = jQuery.parseJSON(JSON.stringify(getPairABI));
                                            var getPairABI_JSON = JSON.parse(getPairABI_JSON);

                                            var pairContract = new web3.eth.Contract(getPairABI_JSON, getPairAddress);

                                            $.ajax({
                                                type: "POST",
                                                url: 'ajax/saveFactoryContract.php',
                                                data: {
                                                    getPairAddress:getPairAddress,
                                                    getPairABI:getPairABI,
                                                    from_token_name: from_token_name,
                                                    to_token_name: to_token_name,
                                                    from_token_address: contractAddress1,
                                                    to_token_address: contractAddress2,
                                                    user_wallet: myAccountAddress
                                                },
                                                success: function (resp) {
                                                    console.log(resp);
                                                },
                                                error: function (result) {
                                                    alert("Error");
                                                }
                                            });
                                        });
                                    }
                                });
                            }

                            var vtoken0=pairContract.methods.token0().call();
                            var vtoken1=pairContract.methods.token1().call();

                            vtoken0.then(function(res) {
                                vtoken0 = res;
                            });
                            
                            vtoken1.then(function(res) {
                                vtoken1 = res;

                                setTimeout(function(){
                                  
                                    var getreserves = pairContract.methods.getReserves().call();
                                    getreserves.then(function(response) {
                                        
                                        var vReverse1=response[0];
                                        var vReverse2=response[1];
                                        if(vtoken0==contractAddress1) {
                                            var vQuote = routerContract.methods.quote(amountOut,vReverse1,vReverse2).call();
                                        } else {
                                            var vQuote = routerContract.methods.quote(amountOut,vReverse2,vReverse1).call();
                                        }

                                        vQuote.then(function(vQuote) {
                                            
                                            var tokenAmount = vQuote/devide_to2;
                                            var ETHValue=amountOut;

                                            var inpDevide =  ((1 / tokenAmount));
                                            var token_percent = (tokenAmount * 0.5) / 100;
                                            var ETH_percent = (ETHValue * 0.5) / 100;
                                            
                                            var addLiquidityETH = $(".firstTokenRate").html() *devide_to1;
                                            var token = contractAddress;
                                            var amountTokenADesired = amountOut;
                                            var amountTokenBDesired =tokenAmount * devide_to2;
                                            var amountTokenMin = (ETHValue - ETH_percent);
                                            var amountETHMin = (tokenAmount - token_percent) *devide_to2 ;
                                            var to = myAccountAddress;
                                            var milliseconds = 300 * 1000;
                                            var deadline = new Date().getTime() + milliseconds;

                                            console.log('==================');
                                            console.log('addLiquidityETH ' + addLiquidityETH);
                                            console.log('amountTokenDesired ' + amountTokenADesired);
                                            console.log('amountTokenBDesired ' + amountTokenBDesired);
                                            console.log('amountTokenMin ' + amountTokenMin);
                                            console.log('amountETHMin ' + amountETHMin);
                                            console.log('to ' + to);
                                            console.log('deadline ' + deadline);
                                            console.log('==================');

                                            var addLiqETH = routerContract.methods.addLiquidity(contractAddress1,contractAddress2, amountTokenADesired,amountTokenBDesired, amountTokenMin, amountETHMin, to, deadline).send({
                                            from:to,
                                            gasLimit: web3.utils.toHex(460000),
                                            gasPrice: web3.utils.toHex(10000000000),
                                            value: 0 });

                                            var myPromise = MakeQuerablePromise(addLiqETH);

                                            if(myPromise.isPending()){
                                                alertify.alert("<div class='text-center'><b>Please wait</b>","<center><img src='images/ripple-loader.gif' style='width: 50px;' /></center> <br>Please wait...</div>", function(){});
                                            }

                                            var timerID = setInterval(function() {
                                            console.log("Initial fulfilled:", myPromise.isFulfilled());//false
                                            console.log("Initial rejected:", myPromise.isRejected());//false
                                            console.log("Initial pending:", myPromise.isPending());//true

                                            if(myPromise.isFulfilled()){

                                              myPromise.then(function(result){
                                                  alertify.alert("Transacton Recorded","Thanks for Supplying liquidity to <?=$siteName;?>. You can check the status at <a href='<?=$etherscanTx;?>"+result.transactionHash+"' target='_blank'>Tronscan</a><br><br> Once transaction is confirmed in Blockchain, you can check your added liquidity.", function(){});
                                              });

                                              $(".ajs-ok").click();
                                              clearInterval(timerID);
                                            }

                                            if(myPromise.isFulfilled()){
                                              $(".ajs-ok").click();
                                              clearInterval(timerID);
                                            }

                                            if(myPromise.isRejected()){
                                              $(".ajs-ok").click();
                                              clearInterval(timerID);
                                            }

                                            }, 500);

                                            return false;
                                        });
                                    });
                                },500);
                            });
                        },
                        error: function (result) {
                            alert("Error");
                        }
                    });
                }
            },
            error: function (result) {
                alert("Error");
            }
        });
    }

    function removeLiquidity(dbid){

        $.ajax({
            type: "POST",
            url: 'ajax/getSinglePoolEvent.php',
            data: { dbid:dbid },
            dataType: "json",
            success: function (resp) {
                
                var pair_address = resp.pair_address;
                var token_from = resp.token_from;
                var token_to = resp.token_to;
                
                var gasPrice = resp.gasPrice;
                var gasUsed = resp.gasUsed;

                web3.eth.getAccounts(async function (error, result) {

                    myAccountAddress = result[0];

                    $("#pool_percent_number").text("100%");
                    $("#custom_number_slider").val(100);

                    $("#fTokenName").text(token_from);
                    $("#sTokenName").text(token_to);

                    var fTokenValue = 0.0056;
                    $("#fTokenValue").text(fTokenValue);

                    var sTokenValue = 0.0025;
                    $("#sTokenValue").text(sTokenValue);

                    var token_pair_blnc = 0.00311811;
                    $("#token_pair_blnc").text(token_pair_blnc);

                    $("#rmlqbothtoken").val(token_pair_blnc);
                    $("#rmlqoutput1token").val(fTokenValue);
                    $("#rmlqoutput2token").val(sTokenValue);


                    var token_price_ftt = "1 "+token_from+" = 0.00373513 "+token_to;
                    $("#token_price_ftt").text(token_price_ftt);

                    var token_price_ttf = "1 "+token_to+" = 276.4545 "+token_from;
                    $("#token_price_ttf").text(token_price_ttf);

                    $('#remove_liquidity_pop').modal('show');

                    var token_pair_label = token_from +"/"+ token_to;
                    $("#token_pair_label, #token_pair_labels").text(token_pair_label);

                    var rmlqbothtokenImgf = "images/"+token_from.toLowerCase()+".png";
                    $("#rmlqbothtokenImgf, #rmlqbothtokenImgsf, .fTokenImage").attr("src", rmlqbothtokenImgf);

                    var rmlqbothtokenImgs = "images/"+token_to.toLowerCase()+".png";
                    $("#rmlqbothtokenImgs, #rmlqbothtokenImgss, .sTokenImage").attr("src", rmlqbothtokenImgs);

                    var yl_from_token_blnc = 0.656565;
                    $("#yl_from_token").text(token_from+":");
                    $("#yl_from_token_blnc").text(yl_from_token_blnc);

                    var yl_to_token_blnc = 0.565656;
                    $("#yl_to_token").text(token_to+":");
                    $("#yl_to_token_blnc").text(yl_to_token_blnc);

                    var rmlqd_pool_share = 0.002999;
                    $("#rmlqd_pool_share").text(rmlqd_pool_share + "%");

                    
                });
            },
            error: function (res_error) {
                console.log(res_error);
            }
        });
    }


    function removeLiquidityInSidePopup(dbid){

        $.ajax({
            type: "POST",
            url: 'ajax/getSinglePoolEvent.php',
            data: { dbid:dbid },
            dataType: "json",
            success: function (resp) {
                
                var gasPrice = resp.gasPrice;
                var gasUsed = resp.gasUsed;

                web3.eth.getAccounts(async function (error, result) {

                    myAccountAddress = result[0];
                    
                    /* Remove Liquidity Method Call - Start  */
                    var contractAddress = '0xbF7A7169562078c96f0eC1A8aFD6aE50f12e5A99'; //resp.topic1;

                    var liquidity = 10000000000000;
                    var token = contractAddress;
                    var amountTokenDesired = 92407300000000000;
                    var amountTokenMin = 82407300000000000;
                    var amountETHMin = 90000000000000;
                    var to = myAccountAddress;
                    var milliseconds = 300 * 1000;
                    var deadline = new Date().getTime() + milliseconds;

                    console.log('==================');
                    console.log('liquidity ' + liquidity);
                    console.log('token ' + token);
                    console.log('amountTokenDesired ' + amountTokenDesired);
                    console.log('amountTokenMin ' + amountTokenMin);
                    console.log('amountETHMin ' + amountETHMin);
                    console.log('to ' + to);
                    console.log('deadline ' + deadline);
                    console.log('==================');

                    var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);

                    var removeLiqETH = routerContract.methods.removeLiquidity(token, amountTokenDesired, amountTokenMin, amountETHMin, to, deadline).send({
                            gasLimit: web3.utils.toHex(gasUsed),
                            gasPrice: web3.utils.toHex(gasPrice),
                            value: liquidity })
                    .then(function(result) {
                        console.log(result);
                    })
                    .catch(function(result) {
                        console.log(result);
                    });

                    var removeLiqdPromise = MakeQuerablePromise(removeLiqETH);

                    if(removeLiqdPromise.isPending()){
                        alertify.alert("<div class='text-center'><b>Please wait</b>","<center><img src='images/ripple-loader.gif' style='width: 50px;' /></center> <br>Please wait...</div>", function(){});
                    }

                    var timerRliqID = setInterval(function() {

                        console.log("Initial fulfilled:", removeLiqdPromise.isFulfilled()); //false
                        console.log("Initial rejected:", removeLiqdPromise.isRejected()); //false
                        console.log("Initial pending:", removeLiqdPromise.isPending()); //true

                        if(removeLiqdPromise.isFulfilled()){
                            $(".ajs-ok").click();
                            clearInterval(timerRliqID);
                            return false;
                        }

                        if(removeLiqdPromise.isRejected()){
                            $(".ajs-ok").click();
                            clearInterval(timerRliqID);
                            return false;
                        }

                        if(removeLiqdPromise.isFulfilled()){

                            removeLiqdPromise.then(function(result){
                                alertify.alert("Transacton Recorded","Removed liquidity. You can check the status at <a href='<?=$etherscanTx;?>"+result+"' target='_blank'>Tronscan</a>.", function(){});
                            });

                            $(".ajs-ok").click();
                            clearInterval(timerRliqID);
                        }

                    }, 500);

                    /* Remove Liquidity Method Call - End  */

                });

            },
            error: function (res_error) {
                console.log(res_error);
            }
        });
    }

    function changeRLNumber(number){
        $("#pool_percent_number").text(number+"%");
        $("#rm_lq_sld_val").val(number);
        $("#custom_number_slider").val(number);
    }

    $(document).ready(function () {

        $("#typeSimpleData").on("click",function(){
            $("#simpleDataSection").show();
            $("#detailsDataSection").hide();
            $("#typeSimpleData").hide();
            $("#typeDetailsData").show();
        });

        $("#typeDetailsData").on("click",function(){
            $("#simpleDataSection").hide();
            $("#detailsDataSection").show();
            $("#typeSimpleData").show();
            $("#typeDetailsData").hide();
        });

        $("#remove_liquidity_pop").on('shown.bs.modal', function () {

            $("#simpleDataSection").show();
            $("#detailsDataSection").hide();
            $("#typeSimpleData").hide();
            $("#typeDetailsData").show();

        });

        $("#open_settings_dialog_button").on("click",function(){

            $("#open_settings_dialog_pop").modal('show');

        });

        $("#to_ex_md_chk").change(function(){
            if($(this).prop("checked") == true) {
                alertify.alert("<b>Are you sure?</b><div><p>Expert mode turns off the confirm transaction prompt and allows high slippage trades that often result in bad rates and lost funds.</p><p>ONLY USE THIS MODE IF YOU KNOW WHAT YOU ARE DOING.</p><div class=''><button class='btn btn-danger w-100' id='to_ex_md_cnf'>Turn On Expert Mode</button></div></div>", function(){}).set('basic', true);
            } else {
                $(".ajs-close").click();
                $("#to_ex_md_chk").prop('checked', false);
                $.cookie("toggle_expert_mode", "", { expires: 30 });
                $("#exp_md_ison").hide();
            }
        });

        $(document).on("click", "#to_ex_md_cnf",function(){

            if($("#to_ex_md_chk").prop("checked") == true) {
                var confirm = prompt('Please type the word "confirm" to enable expert mode.');
                if (confirm != null && confirm == "confirm") {

                    $(".ajs-close").click();
                    $.cookie("toggle_expert_mode", "yes", { expires: 30 });
                    $("#exp_md_ison").show();
                    $("#open_settings_dialog_pop .close").click();

                } else {
                    
                    $(".ajs-close").click();
                    $("#to_ex_md_chk").prop('checked', false);
                    $.cookie("toggle_expert_mode", "", { expires: 30 });
                    $("#exp_md_ison").hide();

                }
                
            } else {
                $(".ajs-close").click();
                $("#to_ex_md_chk").prop('checked', false);
                $.cookie("toggle_expert_mode", "", { expires: 30 });
                $("#exp_md_ison").hide();
            }
        });

        $("#dis_mult_chk").change(function(){
            if($(this).prop("checked") == true) {
               console.log("ON");
               $.cookie("disable_multihops", "yes", { expires: 30 });
            } else {
               console.log("OFF");
               $.cookie("disable_multihops", "", { expires: 30 });
            }
        });

     });

</script>
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

<div class="modal fade" id="open_settings_dialog_pop" tabindex="-1" aria-labelledby="to_token_popLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md modal-dialog-top">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="to_token_popLabel">Transaction Settings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="row">
                    <div class="col-md-12 tr_tlrnce">
                        <span>Slippage tolerance</span> &nbsp; <a href="javascript:;" title="Your transaction will revert if the price changes unfavorably by more than this percentage."><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></a>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-primary w-100" onclick="changeRLNumber(0.1);">0.1%</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary w-100" onclick="changeRLNumber(0.5);">0.5%</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary w-100" onclick="changeRLNumber(1);">1%</button>
                            </div>
                            <div class="col-md-3 slip_tlrance_main">
                                <input type="text" class="form-control" name="slip_tlrance_txt" id="slip_tlrance_txt" value="" placeholder="0.10"><span>%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-12 y_tr_mfail">
                        <span>Your transaction may fail</span>
                    </div>

                    <div class="col-md-12 mt-2 tr_ddline">
                        <span>Transaction deadline</span> &nbsp; <a href="javascript:;" title="Your transaction will revert if the price changes unfavorably by more than this percentage."><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-2">
                        <div class="txn_ddline_main">
                            <input type="text" class="form-control" name="txn_ddline_txt" id="txn_ddline_txt" value="" placeholder="50"><span>minutes</span>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    
                    <div class="col-md-12 inter_stng">

                        <div class="mt-2"><strong>Interface Settings</strong></div>
                    </div>
                </div>
                <div class="row mt-2 to_ex_md_main">
                    <div class="col-md-6 to_ex_md_left">
                        <span>Toggle Expert Mode</span> &nbsp; <a href="javascript:;" title="Bypasses confirmation modals and allows high slippage trades. Use at your own risk."><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></a>
                    </div>
                    <div class="col-md-6 to_ex_md_right text-right pull-right">
                        <label class="switch">
                          <input type="checkbox" id="to_ex_md_chk" <?php if($toggle_expert_mode != '') { echo 'checked'; } ?> >
                          <div class="slider"></div>
                        </label>
                    </div>
                </div>
                <div class="row mt-2 dis_mult_main">
                    <div class="col-md-6 dis_mult_left">
                        <span>Disable Multihops</span> &nbsp; <a href="javascript:;" title="Bypasses confirmation modals and allows high slippage trades. Use at your own risk."><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></a>
                    </div>
                    <div class="col-md-6 dis_mult_right text-right pull-right">
                        <label class="switch">
                          <input type="checkbox" id="dis_mult_chk" <?php if($disable_multihops != '') { echo 'checked'; } ?>>
                          <div class="slider"></div>
                        </label>
                    </div>

                </div>

            </div>

            
        </div>
    </div>
</div>

<div class="modal fade" id="remove_liquidity_pop" tabindex="-1" aria-labelledby="to_token_popLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="to_token_popLabel">Remove Liquidity</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="row py-2">
                    <div class="col-md-12">
                        <p>
                            <b>Tip:</b> Removing pool tokens converts your position back into underlying tokens at the current rate, proportional to your share of the pool. Accrued fees are included in the amounts you receive.
                        </p>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-6 pull-left">
                        <p>Amount</p>
                    </div>
                    <div class="col-md-6 pull-right">
                        <a class="pull-right" href="javascript:;" id="typeDetailsData">Detailed</a>
                        <a class="pull-right" href="javascript:;" id="typeSimpleData">Simple</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p id="pool_percent_number">100%</p>
                        <input type="hidden" name="rm_lq_sld_val" id="rm_lq_sld_val" value="100">
                    </div>
                </div>

                <div class="row py-2">
                    <div class="w-100" id="simpleDataSection">
                        <div class="row py-2">
                            <div class="col-md-12">
                                <input type="range" name="slider" id="custom_number_slider" value="100" min="0" max="100" step="1" class="form-control"  />
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-primary w-100" onclick="changeRLNumber(25);">25%</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary w-100" onclick="changeRLNumber(50);">50%</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary w-100" onclick="changeRLNumber(75);">75%</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary w-100" onclick="changeRLNumber(100);">Max</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 py-2">
                            <div class="col-md-12">
                                <div class="col-md-6 pull-left">
                                    <h4 id="fTokenValue">0.0446336</h4>
                                </div>
                                <div class="col-md-6 pull-left">
                                    <img class="pull-right fTokenImage" alt="Token logo" src="images/bat.svg">
                                    <h4 id="fTokenName" class="pull-right">BAT</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col-md-12">
                                <div class="col-md-6 pull-left">
                                    <h4 id="sTokenValue">0.000169904</h4>
                                </div>
                                <div class="col-md-6 pull-left">
                                    <img class="pull-right sTokenImage" alt="Token logo" src="images/eth.png">
                                    <h4 id="sTokenName" class="pull-right">ETH</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-100" id="detailsDataSection">
                        <div class="row py-2">
                            <div class="col-md-12">
                                <div class="col-md-6 pull-left">
                                    <label>Input</label>
                                    <input type="text" class="form-control" name="rmlqbothtoken" id="rmlqbothtoken" value="0.0318169" />
                                </div>
                                <div class="col-md-6 pull-right">
                                    <div class="pull-right" id="rmlqbothtokenBalance">Balance: <span>0.0318169</span></div>
                                    <div class="pull-right mt-3">
                                        <img class="" id="rmlqbothtokenImgf" alt="Token logo" src="images/bat.svg">
                                        <img class="" id="rmlqbothtokenImgs" alt="Token logo" src="images/eth.png" >
                                        <span id="token_pair_label">BAT/ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col-md-12">
                                <div class="col-md-6 pull-left">
                                    <label>Output</label>
                                    <input type="text" class="form-control" name="rmlqoutput1token" id="rmlqoutput1token" value="0.55792" />
                                </div>
                                <div class="col-md-6 pull-right text-right">
                                    <br/>
                                    <select name="rmLqOutput1" id="rmLqOutput1" class="form-control pull-right form-control-lg">
                                        <option value='0' selected='true'> Select Token </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col-md-12">
                                <div class="col-md-6 pull-left">
                                    <label>Output</label>
                                    <input type="text" class="form-control" name="rmlqoutput2token" id="rmlqoutput2token" value="0.0021238" />
                                </div>
                                <div class="col-md-6 pull-right text-right">
                                    <br/>
                                    <select name="rmLqOutput2" id="rmLqOutput2" class="form-control pull-right form-control-lg">
                                        <option value='0' selected='true'> Select Token </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-6 pull-left">
                        <p>Price</p>
                    </div>
                    <div class="col-md-6 pull-right">
                        <p class="pull-right" id="token_price_ftt">1 BAT = 0.00373513 ETH</p>
                        <p class="pull-right" id="token_price_ttf">1 ETH = 267.729 BAT</p>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-6 pull-left">
                        <button class="btn btn-primary w-100" disabled>Approve</button>
                    </div>
                    <div class="col-md-6 pull-right">
                        <button class="btn btn-danger pull-right w-100" disabled >Remove</button>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-12">
                        <h5>Your position</h5>
                    </div>
                    <div class="col-md-6 pull-left">
                        <img class="" id="rmlqbothtokenImgsf" alt="Token logo" src="images/bat.svg" style="max-width: 20px;">
                        <img class="" id="rmlqbothtokenImgss" alt="Token logo" src="images/eth.png" style="max-width: 20px;">
                        <span id="token_pair_labels">BAT/ETH</span>
                    </div>
                    <div class="col-md-6 pull-right">
                        <p id="token_pair_blnc" class="pull-right">0.03181</p>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-6 pull-left">
                        <p>Your pool share:</p>
                    </div>
                    <div class="col-md-6 pull-right">
                        <p id="rmlqd_pool_share" class="pull-right">0.029480%</p>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-6 pull-left">
                        <p id="yl_from_token">BAT:</p>
                    </div>
                    <div class="col-md-6 pull-right">
                        <p id="yl_from_token_blnc" class="pull-right">0.55792</p>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-6 pull-left">
                        <p id="yl_to_token">ETH:</p>
                    </div>
                    <div class="col-md-6 pull-right">
                        <p id="yl_to_token_blnc" class="pull-right">0.0021238</p>
                    </div>
                </div>

                <script type="text/javascript">
                    $('.custom_number_slider').slider();
                </script>
            </div>

            
        </div>
    </div>
</div>

<div class="modal fade" id="coin_option2" tabindex="-1" aria-labelledby="coin_option2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg1">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="coin_option2Label">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Create a pair<i class="fa fa-question-circle ml-2" aria-hidden="true"></i>
                </h5>

                <button id="open_settings_dialog_button" class="close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sc-gbOuXE daxFHC"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></button>
                <span id="exp_md_ison" <?php if($toggle_expert_mode == '') { ?> style="display: none;" <?php } ?> >🧙</span>

                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <div id="pool_loading"></div>
                <div class="col-sm-12 mb-3">
                    <div class="alert alert-danger">
                        You are the first liquidity provider.<br>
                        The ratio of tokens you add will set the price of this pool.<br>
                        Once you are happy with the rate click supply to review.
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row py-2 hover-select-token">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <span>Input</span>
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

                                    <select  name="drpFromToken" id="poolFromToken" style="width:100px;">
                                        <option value="" data-image="">Select Token</option>
                                        <option value="ETH" data-image="images/eth.png">ETH</option>
                                    </select>

                                    <!-- <button class="btn btn-outline-secondary dropdown-toggle" id="btnPoolFromToken" type="button" data-toggle="modal" data-target="#from_token_pop">
                                      <img src="images/eth.png" id="imgPoolFromToken" style="width: 20px;margin-right: 10px;display: none;"><span id="spnPoolFromToken">Select Token</span></button> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-2 hover-select-token">
                        <div class="col-sm-12 text-center">
                            <p class="m-0"><i class="fa fa-plus" aria-hidden="true"></i></p>
                        </div>
                    </div>

                    <div class="row py-2 hover-select-token">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Input</span>
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

                                    <select  name="poolToToken" id="poolToToken" style="width:100px;">
                                        <option value="" data-image="">Select Token</option>
                                        <option value="ETH" data-image="images/eth.png">ETH</option>
                                    </select>

                                    <!-- <button class="btn btn-outline-secondary dropdown-toggle" id="btnPoolToToken" type="button" data-toggle="modal" data-target="#to_token_pop">
                                      <img src="images/eth.png" id="imgPoolToToken" style="width: 20px;margin-right: 10px;display: none;"><span id="spnPoolToToken">Select Token</span></button> -->
                                </div>
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
                                    <div class="sc-kkGfuU kuSmHG css-1kt4f20" id="share_of_pool">100%</div>
                                    <div class="css-1m402ei">Share of Pool</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-4 hover-select-token">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="col-md-12">
                          <button style="display:none" class="btn btn-danger w-100 mb-3 apprvebuttons" id="approve1" >
                              <div class="css-10ob8xa">Invalid pair</div>
                          </button>
                        </div>
                        <div class="col-md-12">
                          <button style="display:none" class="btn btn-danger w-100 mb-3 apprvebuttons" id="approve2" >
                              <div class="css-10ob8xa">Invalid pair</div>
                          </button>
                        </div>
                            <button disabled="" class="btn btn-primary w-100 mb-3" id="create_pair_btn" onclick="createPairBtnClick();">
                                <div class="css-10ob8xa">Invalid pair</div>
                            </button>

                            <!-- <button disabled="" class="btn btn-primary w-100 mb-3">
                              Insufficient ETH balance
                            </button>
                            <button class="btn btn-primary w-100 mb-3">Approve BAT</button> -->

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h5>Your position</h5>
                        </div>
                        <div class="col-md-6 pull-left">
                            <img class="" id="adlqbothtokenImgsf" alt="Token logo" src="images/bat.svg" style="max-width: 20px;">
                            <img class="" id="adlqbothtokenImgss" alt="Token logo" src="images/eth.png" style="max-width: 20px;">
                            <span id="adlq_token_pair_labels">BAT/ETH</span>
                        </div>
                        <div class="col-md-6 pull-right">
                            <span id="adlq_token_pair_blnc" class="pull-right">0.03181</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pull-left">
                            <span>Your pool share:</span>
                        </div>
                        <div class="col-md-6 pull-right">
                            <span id="adlqd_pool_share" class="pull-right">0.029480%</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pull-left">
                            <span id="yl_from_token">BAT:</span>
                        </div>
                        <div class="col-md-6 pull-right">
                            <span id="yl_from_token_blnc" class="pull-right">0.55792</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pull-left">
                            <span id="yl_to_token">ETH:</span>
                        </div>
                        <div class="col-md-6 pull-right">
                            <span id="yl_to_token_blnc" class="pull-right">0.0021238</span>
                        </div>
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
                        <a href="javascript:;">Change</a>
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
