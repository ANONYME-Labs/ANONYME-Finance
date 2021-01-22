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
    $(document).ready(function () {

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

            changeFromToken();

        });

        $(document.body).on("change", "#poolToToken", function () {

            var poolToToken = $('#poolToToken option:selected').val();

            console.log(poolToToken);
            getSelectedWalletBalance(poolToToken, 'towallet');

            changeFromToken();

        });

        $('#txtPoolFromToken, #txtPoolToToken').on('keyup paste input', function () {

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

            changeFromToken();

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

                }
            });

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
                            
                            var devide_to = 1e18;
                            
                            if(tokenname[0] == 'c'){
                                devide_to = 1e8;
                            }
                            
                            var vAvailable = parseFloat(balance / devide_to).toFixed(4);

                            if (walletLocation == 'fromwallet') {
                                $("#pairWalletFromBalance").html(vAvailable);
                            } else {
                                $("#pairWalletToBalance").html(vAvailable);
                            }

                        });

                    } else {
                        if (walletLocation == 'fromwallet') {
                            $("#pairWalletFromBalance").html("0.00");
                        } else {
                            $("#pairWalletToBalance").html("0.00");
                        }

                        alertify.alert('Error', 'Something went wrong, Please try again.');
                        $("#create_pair_btn").html('Invalid pair');
                        return false;
                    }

                },
                error: function (result) {
                    alert("Error");
                }
            });
        }
    }

    function changeFromToken() {

        var spnPoolFromToken = $("#spnPoolFromToken").html();
        var spnPoolToToken = $("#spnPoolToToken").html();

        web3.eth.getAccounts(async function (error, result) {

            var myAccountAddress = result[0];

            if(spnPoolFromToken == 'ETH'){

            } else {

                var startToken = $("#poolFromToken_title .ddlabel").html();
                var endToken = $("#poolToToken_title .ddlabel").html();

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


                var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);

                var WETHobj = routerContract.methods.WETH().call();
                                
                const WETHval = WETHobj.then(function(result){

                    console.log(result);

                    var txtPoolFromToken = $("#txtPoolFromToken").val();

                    var devide_to = 1e18;
                    if(endToken[0] == 'c'){
                        devide_to = 1e8;
                    }

                    var amountOut = (txtPoolFromToken * devide_to);
                    var path = [result, contractAddress];

                    var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();

                    getamntin.then(function(getAmtVal) {

                        console.log(getAmtVal);

                        var tokenAount = getAmtVal[0];
                        var ETHValue = getAmtVal[1];
                        
                        var inpDevide = (amountOut / tokenAount).toFixed(8);
                        var getInpSingle = (inpDevide * txtPoolFromToken).toFixed(8);
                        $("#txtPoolToToken").val(getInpSingle);

                    });

                });


                        }
                    },
                    error: function (result) {
                        alert("Error");
                    }

                });
            }


            if ((spnPoolFromToken != '' && spnPoolToToken != '') && (spnPoolFromToken != 'Select Token' && spnPoolToToken != 'Select Token')) {

                var txtPoolFromToken = $("#txtPoolFromToken").val();
                var txtPoolToToken = $("#txtPoolToToken").val();

                if (txtPoolFromToken != '' && txtPoolToToken != '') {

                    var forFirst = 0;
                    var forSecond = 0;

                    forFirst = (txtPoolToToken / txtPoolFromToken).toFixed(6); //.replace(/\.0+$/,'');
                    forSecond = (txtPoolFromToken / txtPoolToToken).toFixed(6); //.replace(/\.0+$/,'');

                    if (isFinite(forFirst)) {
                        $(".firstTokenRate").html(parseFloat(forFirst));
                    } else {
                        $(".firstTokenRate").html(0);
                    }

                    if (isFinite(forSecond)) {
                        $(".secondTokenRate").html(parseFloat(forSecond));
                    } else {
                        $(".secondTokenRate").html(0);
                    }

                    $(".startTwoTokens #first1").html(spnPoolFromToken);
                    $(".startTwoTokens #first2").html(spnPoolToToken);
                    $(".endTwoTokens #second1").html(spnPoolToToken);
                    $(".endTwoTokens #second2").html(spnPoolFromToken);

                    $("#create_pair_btn").prop('disabled', false);

                    $("#create_pair_btn").html('Supply');
                }
                /*$(".firstTokenRate").html('-');
                 $(".secondTokenRate").html('-');
                 
                 $(".startTwoTokens #first1").html("");
                 $(".startTwoTokens #first2").html("");
                 $(".endTwoTokens #second1").html("");
                 $(".endTwoTokens #second2").html("");*/


            } else {
                $(".firstTokenRate").html('-');
                $(".secondTokenRate").html('-');

                $("#create_pair_btn").prop('disabled', true);
            }
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

                            var multiply_to = 1e18;
                            if(endToken[0] == 'c'){
                                multiply_to = 1e8;
                            }
                           
                            const userInputEthValue = web3.utils.toHex(txtPoolFromToken * multiply_to);
                            


                            //var vAvailable = parseFloat(balance / devide_to).toFixed(4);

                            //const TOKEN_ADDED = web3.utils.toHex(txtPoolFromToken * multiply_to);
                            //console.log(TOKEN_ADDED);

                            /*const tx = routerContract.methods.approve(routerContractAddress, TOKEN_ADDED);
                            const encodedABI = tx.encodeABI();*/
                            
                            /*var factory = routerContract.methods.factory().call();
                            factory.then(function(result) {
                               console.log(result);
                            });*/

                            
                            /*var ETHtoBAT = getData('eth', 'https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=BAT');
                            function getData(prefix, url) {
                              $.getJSON(url, function(data) {
                                console.log(data.BAT);
                              });
                            }*/
                            
                            var WETHobj = routerContract.methods.WETH().call();
                            
                            const WETHval = WETHobj.then(function(result){

                                console.log(result);

                                var amountOut = 100000000000000;
                                var path = [result, contractAddress];

                                var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();

                                getamntin.then(function(getAmtVal) {

                                    console.log(getAmtVal);

                                    var tokenAount = getAmtVal[0];
                                    var ETHValue = getAmtVal[1];

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
                                        gasLimit: web3.utils.toHex(260000),
                                        gasPrice: web3.utils.toHex(1000000000),
                                        value: addLiquidityETH });

                                    console.log(addLiqETH);

                                });

                            });
                            

                            //const WETHval = WETHobj.then(successCallback, failureCallback);

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
                                    gasLimit: web3.utils.toHex(260000),
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

        //if ((startToken != '' && endToken != '') && (startToken != 'Select Token' && endToken != 'Select Token')) {

			/*window.web3 = new Web3(ethereum);
			// the address that will send the test transaction
			const addressFrom = '0x0e364eb0ad6eb5a4fc30fc3d2c2ae8ebe75f245c';
			const exchange_addr = '0x416F1Ac032D1eEE743b18296aB958743B1E61E81';
			const privKey = 'e331b6d69882b4cb4ea581d88e0b604039a3de5967688d3dcffdd2270c0fd109';
			
			// the exchange contract address
			const addressTo = '0xCC4d8eCFa6a5c1a84853EC5c0c08Cc54Cb177a6A';
			const contract = new web3.eth.Contract(JSON.parse(abi), addressTo);
			const TOKEN_ADDED = web3.utils.toHex(100*10**18);
			const tx = contract.methods.approve(exchange_addr, TOKEN_ADDED);
			const encodedABI = tx.encodeABI();

			console.log(encodedABI);*/

			
        /*} else {
            resetAllFields();
        }*/
    }
    
</script>


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
                                    <div class="sc-kkGfuU kuSmHG css-1kt4f20">100%</div>
                                    <div class="css-1m402ei">Share of Pool</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-4 hover-select-token">
                        <div class="col-lg-12 col-md-12 col-sm-12">
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