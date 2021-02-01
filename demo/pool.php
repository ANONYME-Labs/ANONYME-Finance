<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link rel="stylesheet" href="css/alertify.min.css" />


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
                        <div class="col-lg-6">
                            <a href="javascript:;" class="btn btn-outline-info" role="button" aria-pressed="true" data-toggle="modal" data-target="#coin_option2">Create a pair</a>
                            <a href="javascript:;" class="btn btn-info" role="button" aria-pressed="true">Add Liquidity</a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-center">
                            <p>Connect to a wallet to view your liquidity.</p>
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
<link rel="stylesheet" type="text/css" href="css/dd.css" />
<script src="js/jquery.dd.js"></script>

<?php include 'footer.php'; ?>

<link rel="stylesheet" type="text/css" href="css/dd.css" />
<script src="js/jquery.dd.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script> -->

<script src="js/alertify.min.js" type="text/javascript"></script>

<script type="text/javascript">

    var routerContractAddress = "<?php echo $routerContractAddress; ?>";
    var routerContractABI = <?php echo $routerContractABI; ?>;
    var WETHAddress = "<?php echo $WETHAddress; ?>";

    $(document).ready(function () {

        window.web3 = new Web3(ethereum);
        web3.eth.getAccounts(async function (error, result) {
            
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

        $(".apprvebuttons").on("click",function(){

            var contractAddress=$(this).attr('data-address');
            var contractABI_json = JSON.parse($(this).attr('data-abi'));
            var contract_dec = JSON.parse($(this).attr('data-decimal'));
            web3.eth.getAccounts(async function (error, result) {

                myAccountAddress = result[0];

                var tknContract = new web3.eth.Contract(contractABI_json, contractAddress);
                var value= 1000*parseInt(contract_dec);
                value = value.toLocaleString('fullwide', {useGrouping:false});
                var getapprove = tknContract.methods.approve(routerContractAddress,value).send({
                    from: myAccountAddress,
                    gasLimit: web3.utils.toHex(560000),
                    gasPrice: web3.utils.toHex(10000000000),
                    value: 0 
                }).on("confirmation", function () {

                    console.log(getapprove);
                    //if(getapprove){
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

        function resetAllFields() {

            $("#txtPoolFromToken").val("");
            $("#txtPoolToToken").val("");

            $("#pairWalletFromBalance").html("0.00");
            $("#pairWalletToBalance").html("0.00");

            $(".firstTokenRate").html('-');
            $(".secondTokenRate").html('-');

            $(".startTwoTokens #first1").html("");
            $(".startTwoTokens #first2").html("");
            $(".endTwoTokens #second1").html("");
            $(".endTwoTokens #second2").html("");

            $("#poolFromToken_title .ddlabel").html("Select Token");
            $("#poolFromToken_title img").remove();

            $("#poolToToken_title .ddlabel").html("Select Token");
            $("#poolToToken_title img").remove();

        }

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
                }

            },
            error: function (result) {
                console.log(result);
            }
        });

        function loadSelectOptions() {

            $("select").msDropdown({roundedBorder: false});

            if ($(".enabled._msddli_").hasClass("selected")) {
                $(".enabled._msddli_").removeClass("selected");
            }

        }


        $(document.body).on("change", "#poolFromToken", function () {

            var poolFromToken = $('#poolFromToken option:selected').val();

            console.log(poolFromToken);
            getSelectedWalletBalance(poolFromToken, 'fromwallet');

            changeFromToken("from_change");

        });

        $(document.body).on("change", "#poolToToken", function () {

            var poolToToken = $('#poolToToken option:selected').val();

            console.log(poolToToken);
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

            changeFromToken('to_change');

            return true;
        });
    });

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

                    console.log(res.status);
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
                            console.log(balance);

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
            
            console.log(devide_to);

            var reserve0 = (_reserve0 / devide_to);
            var reserve1 = (_reserve1 / devide_to);
            var numOfToken = txtPoolFromToken;

            if(reserve0 <= 0 && reserve1 <= 0){

                $("#txtPoolFromToken").val("");
                $("#txtPoolToToken").val("");

                $(".firstTokenRate").html("");
                $(".secondTokenRate").html("");
                /*$(".startTwoTokens #first1").html(spnPoolToToken);
                $(".startTwoTokens #first2").html(spnPoolFromToken);
                $(".endTwoTokens #second1").html(spnPoolFromToken);
                $(".endTwoTokens #second2").html(spnPoolToToken);*/
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
                    console.log(forFirst);
                    $("#txtPoolToToken").val(forFirst);
                }
            } else if(change == 'to_change') {
                forSecond = (txtPoolFromToken * token1Price);
                if(forSecond > 0){
                    forSecond = parseFloat(forSecond).toFixed(8);
                    console.log(forSecond);
                    $("#txtPoolFromToken").val(forSecond);
                }
            } else {
                forFirst = (txtPoolFromToken * token0Price);
                if(forFirst > 0){
                    forFirst = parseFloat(forFirst).toFixed(8);
                    console.log(forFirst);
                    $("#txtPoolToToken").val(forFirst);
                }
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
                    console.log("getallowance : " + getallowance);
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
                            console.log(res.status);
                            if (res.status == '1') {
                                var contractABI1 = res.data.contractABI;
                                var contractAddress1 = res.data.contractAddress;

                                contractABI1 = JSON.parse(contractABI1);

                                var tknContract1 = new web3.eth.Contract(contractABI1, contractAddress1);
                                var getallowance1 = tknContract.methods.allowance(myAccountAddress, routerContractAddress).call();
                                getallowance1.then(function(getallowance1) {
                                console.log("getallowance : " + getallowance1);
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
            $("#pool_loading").hide();
            $("#create_pair_btn").prop('disabled', true);
            $("#create_pair_btn").html('Insufficient token');
        }
    }

    function changeFromToken(change = '') {

        $("#approve1").hide();
        $("#approve2").hide();
      
        console.log("rrrrr : " + web3.utils.toHex(0.00005*1e18) );
        console.log("1111 : " + web3.utils.fromWei(web3.utils.toHex(5*10**16) ));

        var spnPoolFromToken = poolFromToken = $('#poolFromToken option:selected').val();
        var spnPoolToToken = poolToToken = $('#poolToToken option:selected').val();
        if(change == 'to_change') {
          spnPoolToToken = poolToToken  = $('#poolFromToken option:selected').val();
          console.log(spnPoolToToken);
          spnPoolFromToken  = poolFromToken = $('#poolToToken option:selected').val();
          console.log(spnPoolFromToken);
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
            console.log(selectedtoken);
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

                            var WETHAddress = $("#WETHAddress").val(WETHAddress);

                            console.log("WETHAddress : " + WETHAddress);

                            if(WETHAddress){

                                var UniswapV2Factory = new web3.eth.Contract(factoryContractABI, factoryContractAddress);

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

                                console.log(contractAddress);
                                var from_token_name = $('#poolFromToken option:selected').val();;
                                var to_token_name = $('#poolToToken option:selected').val();;

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

                                            var UniswapV2Pair = new web3.eth.Contract(getPairABI_JSON, getPairAddress);
                                            var getReserve = UniswapV2Pair.methods.getReserves().call();
                                            getReserve.then(function(getReserveResult){

                                                var _reserve0 = getReserveResult._reserve0;
                                                var _reserve1 = getReserveResult._reserve1;

                                                console.log(_reserve0);
                                                console.log(_reserve1);

                                                getSetReserveValues(_reserve0, _reserve1, txtPoolFromToken, change, spnPoolFromToken, spnPoolToToken, contractAddress, contractABI, devide_to);
                                            });

                                        } else {

                                            var token0 = WETHAddress;
                                            var token1 = contractAddress;
                                            var getPairObj = UniswapV2Factory.methods.getPair(token0, token1).call();
                                            getPairObj.then(function(getPairAddress){

                                                console.log(getPairAddress);
                                    
                                                $.get(etherscan_api_url + "api?module=contract&action=getabi&address="+getPairAddress+"&format=raw", function( getPairABI ) {

                                                    console.log(getPairAddress);
                                                    
                                                    var getPairABI_JSON = jQuery.parseJSON(JSON.stringify(getPairABI));
                                                    var getPairABI_JSON = JSON.parse(getPairABI_JSON);
                                                    var UniswapV2Pair = new web3.eth.Contract(getPairABI_JSON, getPairAddress);
                                                    var getReserve = UniswapV2Pair.methods.getReserves().call();
                                                    getReserve.then(function(getReserveResult){
                                                        console.log(getReserveResult);
                                                    
                                                        var _reserve0 = getReserveResult._reserve0;
                                                        var _reserve1 = getReserveResult._reserve1;
                                                        
                                                        getSetReserveValues(_reserve0, _reserve1, txtPoolFromToken, change, spnPoolFromToken, spnPoolToToken, contractAddress, contractABI, devide_to);
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
                                                            to_token_address: to_token_address
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
                          }
                          else {
                             contractABI2 = res.data.contractABI;
                             contractAddress2 = res.data.contractAddress;
                             devide_to2 = '1e'+res.data.desimals;
                          }
                        }
                      }
                      var txtPoolFromToken = $("#txtPoolFromToken").val();

                      if(change=='to_change') {
                          txtPoolFromToken = $("#txtPoolToToken").val();
                          //var amountOut = (devide_to2 * txtPoolFromToken);
                        //  amountOut = ( devide_to * txtPoolFromToken);
                      }
                      var amountOut = (devide_to1 * txtPoolFromToken);
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
                                    console.log("*txtPoolFromToken : " + txtPoolFromToken);
                                    console.log("forSecond : " + forSecond);
                                    if(change=='to_change')
                                    {
                                      $("#txtPoolFromToken").val(parseFloat(forFirst).toFixed(8));
                                      //$("#txtPoolFromToken").focus();
                                    }
                                    else {
                                      $("#txtPoolToToken").val(parseFloat(forFirst).toFixed(8));
                                    //$("#txtPoolToToken").focus();
                                    }

                                    $(".firstTokenRate").html(parseFloat(forFirst));
                                    $(".secondTokenRate").html(parseFloat(forSecond));
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
                                            console.log("getallowance1 : " + getallowance1);
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
                                                  console.log("getallowance2 : " + getallowance2);
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
                                }
                              });
                            }
                          });
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


    function createPairBtnClick() {

        var startToken = $("#poolFromToken_title .ddlabel").html();
        var endToken = $("#poolToToken_title .ddlabel").html();

        if (startToken == endToken) {
            alertify.alert('Warning', 'Please select different token.');
            return false;
        }

        $.ajax({
            type: "POST",
            url: 'ajax/getCurrencyData.php',
            data: {tokenname: endToken},
            dataType: "json",
            success: function (res) {

                console.log(res.status);
                if (res.status == '1') {
                    var contractABI = res.data.contractABI;
                    var contractAddress = res.data.contractAddress;
                    var multiply_to = '1e'+res.data.desimals;
                    contractABI = JSON.parse(contractABI);

                    console.log(contractABI);
                    console.log(contractAddress);

                    web3.eth.getAccounts(async function (error, result) {

                        myAccountAddress = result[0];

                        if ((startToken != '' && endToken != '') && (startToken != 'Select Token' && endToken != 'Select Token')) {


                            var txtPoolFromToken = $("#txtPoolFromToken").val();
                            var txtPoolToToken = $("#txtPoolToToken").val();

                            var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress, {
                                from: myAccountAddress, // default from address
                            });

                            const userInputEthValue = web3.utils.toHex( multiply_to / txtPoolFromToken);

                            var WETHobj = routerContract.methods.WETH().call();

                            const WETHval = WETHobj.then(function(result){

                                console.log(result);

                              //  var amountOut = userInputEthValue;//100000000000000;
                                var amountOut = ( txtPoolFromToken * multiply_to);
                                var decimals = (txtPoolFromToken!=Math.floor(txtPoolFromToken))?(txtPoolFromToken.toString()).split('.')[1].length:0;
                              //  alert(decimals);
                                if(endToken=='ETH') {
                                  amountOut = ( multiply_to * txtPoolFromToken);
                                }
                                var path = [result, contractAddress];
                                console.log("amountOut : " + amountOut);
                                var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();

                                getamntin.then(function(getAmtVal) {

                                    console.log("getAmtVal : " + getAmtVal);

                                    var tokenAount = getAmtVal[0];
                                    var ETHValue = getAmtVal[1];
                                    var inpDevide = (tokenAount/ETHValue).toFixed(8);
                                    var getInpSingle = parseFloat(inpDevide).toFixed(8);
                                      //console.log("getInpSingle : " + getInpSingle);

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

                                    console.log(addLiqETH);

                                });

                            });

                            function successCallback(result) { }
                            function failureCallback(error) { }
                            return false;


                            /* Add Liquidity Methid Call - Start  */

                            var addLiquidityETH = 100000000000000;
                            var token = contractAddress;
                            var amountTokenDesired = 92407300000000000;
                            var amountTokenMin = 82407300000000000;
                            var amountETHMin = 90000000000000;
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
                                    gasPrice: web3.utils.toHex(1000000000),
                                    value: addLiquidityETH });

                            console.log(addLiqETH);

                            /* Add Liquidity Methid Call - End  */

                            /* Remove Liquidity Methid Call - Start  */
                            /*
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

                            var removeLiqETH = routerContract.methods.removeLiquidityETH(token, amountTokenDesired, amountTokenMin, amountETHMin, to, deadline).send({
                                    gasLimit: web3.utils.toHex(260000),
                                    gasPrice: web3.utils.toHex(1000000000),
                                    value: liquidity });

                            console.log(removeLiqETH);
                            */

                            /* Remove Liquidity Methid Call - End  */


                        }
                    });

                }
            },
            error: function (result) {
                alert("Error");
            }
        });
    }

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
<!-- Modal 2 -->
<div class="modal fade" id="coin_option2" tabindex="-1" aria-labelledby="coin_option2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg1">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="coin_option2Label">Create a pair<i class="fa fa-question-circle ml-2" aria-hidden="true"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
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
                            <button disabled="" class="btn btn-primary w-100 mb-3" id="create_pair_btn" onclick="createPairBtnClick();">
                                <div class="css-10ob8xa">Invalid pair</div>
                            </button>

                            <!-- <button disabled="" class="btn btn-primary w-100 mb-3">
                              Insufficient ETH balance
                            </button>
                            <button class="btn btn-primary w-100 mb-3">Approve BAT</button> -->

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
