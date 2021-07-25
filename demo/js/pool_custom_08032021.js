$(document).ready(function () {


    var getPairABI = '[{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1","type":"uint256"},{"indexed":true,"internalType":"address","name":"to","type":"address"}],"name":"Burn","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount0In","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1In","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount0Out","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount1Out","type":"uint256"},{"indexed":true,"internalType":"address","name":"to","type":"address"}],"name":"Swap","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"uint112","name":"reserve0","type":"uint112"},{"indexed":false,"internalType":"uint112","name":"reserve1","type":"uint112"}],"name":"Sync","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"DOMAIN_SEPARATOR","outputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"MINIMUM_LIQUIDITY","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"PERMIT_TYPEHASH","outputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"},{"internalType":"address","name":"","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"burn","outputs":[{"internalType":"uint256","name":"amount0","type":"uint256"},{"internalType":"uint256","name":"amount1","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"factory","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"getReserves","outputs":[{"internalType":"uint112","name":"_reserve0","type":"uint112"},{"internalType":"uint112","name":"_reserve1","type":"uint112"},{"internalType":"uint32","name":"_blockTimestampLast","type":"uint32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"_token0","type":"address"},{"internalType":"address","name":"_token1","type":"address"}],"name":"initialize","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"kLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"mint","outputs":[{"internalType":"uint256","name":"liquidity","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"nonces","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"},{"internalType":"uint256","name":"deadline","type":"uint256"},{"internalType":"uint8","name":"v","type":"uint8"},{"internalType":"bytes32","name":"r","type":"bytes32"},{"internalType":"bytes32","name":"s","type":"bytes32"}],"name":"permit","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"price0CumulativeLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"price1CumulativeLast","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"skim","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount0Out","type":"uint256"},{"internalType":"uint256","name":"amount1Out","type":"uint256"},{"internalType":"address","name":"to","type":"address"},{"internalType":"bytes","name":"data","type":"bytes"}],"name":"swap","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"sync","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"token0","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"token1","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"}]';

    window.getPairABI = getPairABI;

    window.web3 = new Web3(ethereum);
    web3.eth.getAccounts(async function (error, result) {

        if (result.length > 0) {

            $("#wallet_connected").hide();
            myAccountAddress = result[0];

            if ($("#login_user_wallet").val() == '') {
                $("#login_user_wallet").val(myAccountAddress);
            }

            var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);
            var WETHobj = routerContract.methods.WETH().call();
            const WETHval = WETHobj.then(function (WETHAddress) {

                if(WETHAddress != ''){
                    $("#WETHAddress").val(WETHAddress);

                    $.ajax({
                        type: "POST",
                        url: 'ajax/saveWETHAddress.php',
                        data: {
                            WETHAddress: WETHAddress
                        },
                        success: function (resp) {
                            console.log(resp);
                        },
                        error: function (res_error) {
                            console.log(res_error);
                        }
                    });
                }
            });
        } else {

        }
    });

    if($('.custom_number_slider').length > 0){
        $('.custom_number_slider').slider();

        $("#custom_number_slider").mousemove(function () {
            $("#pool_percent_number").text(document.getElementById("custom_number_slider").value + "%");
            var number = document.getElementById("custom_number_slider").value;
            $("#rm_lq_sld_val").val(number);

            getFromToTokenPercentValue(number);
        });
    }

    $(".apprvebuttons").on("click", function () {

        var contractAddress = $(this).attr('data-address');
        var contractABI_json = JSON.parse($(this).attr('data-abi'));
        var contract_dec = JSON.parse($(this).attr('data-decimal'));
        web3.eth.getAccounts(async function (error, result) {

            myAccountAddress = result[0];
            if ($("#login_user_wallet").val() == '') {
                $("#login_user_wallet").val(myAccountAddress);
            }

            var tknContract = new web3.eth.Contract(contractABI_json, contractAddress);
            var value = 1000 * parseInt(contract_dec);
            value = value.toLocaleString('fullwide', {useGrouping: false});
            var getapprove = tknContract.methods.approve(routerContractAddress, value).send({
                from: myAccountAddress,
                gasLimit: web3.utils.toHex(560000),
                gasPrice: web3.utils.toHex(10000000000),
                value: 0
            }).on("confirmation", function () {
                $(this).hide();

                $(".apprvebuttons").each(function () {
                    if ($(this).is(':hidden')) {
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

    $("#open_settings_dialog_pop").on('hide.bs.modal', function () {
        var toggle_expert_mode = $.cookie("toggle_expert_mode");
        if (toggle_expert_mode == '') {
            $("#to_ex_md_chk").prop('checked', false);
        }
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

                if($('#poolFromToken').length > 0){
                    var oDD = $('#poolFromToken').msDropDown().data("dd");
                    oDD.add({text: data[i].cCode, value: data[i].cCode, image: data[i].cURL});
                }

                if($('#poolToToken').length > 0){
                    var oDD1 = $('#poolToToken').msDropDown().data("dd");
                    oDD1.add({text: data[i].cCode, value: data[i].cCode, image: data[i].cURL});
                }

                if($('#rmLqOutput1').length > 0){
                    var rmLqOutput1 = $('#rmLqOutput1').msDropDown().data("dd");
                    rmLqOutput1.add({text: data[i].cCode, value: data[i].cCode, image: data[i].cURL});
                }

                if($('#rmLqOutput2').length > 0){
                    var rmLqOutput2 = $('#rmLqOutput2').msDropDown().data("dd");
                    rmLqOutput2.add({text: data[i].cCode, value: data[i].cCode, image: data[i].cURL});
                }

                if($('#importPoolFrom').length > 0){
                    var importPoolFrom = $('#importPoolFrom').msDropDown().data("dd");
                    importPoolFrom.add({text: data[i].cCode, value: data[i].cCode, image: data[i].cURL});
                }

                if($('#importPoolTo').length > 0){
                    var importPoolTo = $('#importPoolTo').msDropDown().data("dd");
                    importPoolTo.add({text: data[i].cCode, value: data[i].cCode, image: data[i].cURL});
                }
            }

        },
        error: function (result) {
            console.log(result);
        }
    });

    $(document.body).on("change", "#poolFromToken", function () {

        var poolFromToken = $('#poolFromToken option:selected').val();
        var poolToToken = $('#poolToToken option:selected').val();

        if( poolFromToken== poolToToken) {
            
            alertify.alert('Warning', 'Both tokens should not be the same.');
            setTimeout(function(){
                $("#pairWalletFromBalance").html("0.00");
                $("#poolFromToken_title .ddlabel").html("Select Token");
                $("#poolFromToken_title img").remove();
                $("#poolFromToken_child .enabled._msddli_").removeClass("selected");
            }, 500);

            return false;
        } else {
            getSelectedWalletBalance(poolFromToken, 'fromwallet');
            changeFromToken("from_change");
        }

    });

    $(document.body).on("change", "#poolToToken", function () {

        var poolFromToken = $('#poolFromToken option:selected').val();
        var poolToToken = $('#poolToToken option:selected').val();

        if( poolFromToken == poolToToken) {
            
            alertify.alert('Warning', 'Both tokens should not be the same.');
            
            setTimeout(function(){
                $("#pairWalletToBalance").html("0.00");
                $("#poolToToken_title .ddlabel").html("Select Token");
                $("#poolToToken_title img").remove();
                $("#poolToToken_child .enabled._msddli_").removeClass("selected");
            }, 500);

            return false;
        } else {
            getSelectedWalletBalance(poolToToken, 'towallet');
            changeFromToken("from_change");
        }

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

    $("#typeSimpleData").on("click", function () {
        $("#simpleDataSection").show();
        $("#detailsDataSection").hide();
        $("#typeSimpleData").hide();
        $("#typeDetailsData").show();
    });

    $("#typeDetailsData").on("click", function () {
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

    $(document).on("click", ".open_settings_dialog_button", function () {
        
        $("#open_settings_dialog_pop").modal('show');

    });

    $("#to_ex_md_chk").change(function () {
        if ($(this).prop("checked") == true) {
            alertify.alert("<b>Are you sure?</b><div><p>Expert mode turns off the confirm transaction prompt and allows high slippage trades that often result in bad rates and lost funds.</p><p>ONLY USE THIS MODE IF YOU KNOW WHAT YOU ARE DOING.</p><div class=''><button class='btn btn-danger w-100' id='to_ex_md_cnf'>Turn On Expert Mode</button></div></div>", function () {}).set('basic', true);
        } else {
            $(".ajs-close").click();
            $("#to_ex_md_chk").prop('checked', false);
            $.cookie("toggle_expert_mode", "", {expires: 30});
            $(".exp_md_ison").hide();
        }
    });

    $(document).on("click", "#to_ex_md_cnf", function () {

        if ($("#to_ex_md_chk").prop("checked") == true) {
            var confirm = prompt('Please type the word "confirm" to enable expert mode.');
            if (confirm != null && confirm == "confirm") {

                $(".ajs-close").click();
                $.cookie("toggle_expert_mode", "yes", {expires: 30});
                $(".exp_md_ison").show();
                $("#open_settings_dialog_pop .close").click();

            } else {

                $(".ajs-close").click();
                $("#to_ex_md_chk").prop('checked', false);
                $.cookie("toggle_expert_mode", "", {expires: 30});
                $(".exp_md_ison").hide();

            }

        } else {
            $(".ajs-close").click();
            $("#to_ex_md_chk").prop('checked', false);
            $.cookie("toggle_expert_mode", "", {expires: 30});
            $(".exp_md_ison").hide();
        }
    });

    $("#dis_mult_chk").change(function () {
        if ($(this).prop("checked") == true) {
            $.cookie("disable_multihops", "yes", {expires: 30});
        } else {
            $.cookie("disable_multihops", "", {expires: 30});
        }
    });

    if (slip_tlrance_txt < 0.1 && slip_tlrance_txt > 0) {
        $("#slip_warning").show();
    } else if (slip_tlrance_txt == 0.1) {
        $("#slip_warning").hide();
        $("#slip_tlrance_txt").val(0.1);
        $(".transactionPercent").css("background-color", "inherit");
        $(".trx_perc_0_1").css("background-color", "");
        console.log("2");
    } else if (slip_tlrance_txt == 0.5) {
        $("#slip_warning").hide();
        $("#slip_tlrance_txt").val(0.5);
        $(".transactionPercent").css("background-color", "inherit");
        $(".trx_perc_0_5").css("background-color", "");
    } else if (slip_tlrance_txt == 1) {
        $("#slip_warning").hide();
        $("#slip_tlrance_txt").val(1);
        $(".transactionPercent").css("background-color", "inherit");
        $(".trx_perc_1").css("background-color", "");
    } else if (slip_tlrance_txt < 5 && slip_tlrance_txt > 0) {
        $(".y_tr_mfail span").hide();
        $("#slip_warning").hide();
        $(".transactionPercent").css("background-color", "inherit");
    } else if (slip_tlrance_txt > 5) {
        $(".y_tr_mfail span").show();
        $(".y_tr_mfail span").text("Your transaction may be frontrun");
        $("#slip_warning").show();
        $(".transactionPercent").css("background-color", "inherit");
    } else {
        var vl = 0.5;
        $("#slip_warning").hide();
        $("#slip_tlrance_txt").val(vl);
        $(".transactionPercent:not(.trx_perc_0_5)").css("background-color", "inherit");
        $.cookie("slip_tlrance_txt", vl, {expires: 30});
    }

    $(document).on("change keyup paste", "#slip_tlrance_txt", function () {
        var vl = $(this).val();
        if (vl <= 0.1) {
            $(".y_tr_mfail span").show();
            $(".y_tr_mfail span").text("Your transaction may fail");
            $("#slip_warning").show();
            $(".transactionPercent").css("background-color", "inherit");
            $(".trx_perc_0_1").css("background-color", "");
            $.cookie("slip_tlrance_txt", vl, {expires: 30});

        } else if (vl == 0.5) {
            $(".y_tr_mfail span").hide();
            $("#slip_warning").hide();
            $(".transactionPercent").css("background-color", "inherit");
            $(".trx_perc_0_5").css("background-color", "");
            $.cookie("slip_tlrance_txt", vl, {expires: 30});

        } else if (vl == 1) {
            $(".y_tr_mfail span").hide();
            $("#slip_warning").hide();
            $(".transactionPercent").css("background-color", "inherit");
            $(".trx_perc_1").css("background-color", "");
            $.cookie("slip_tlrance_txt", vl, {expires: 30});

        } else if (vl <= 5) {
            $(".y_tr_mfail span").hide();
            $("#slip_warning").hide();
            $(".transactionPercent").css("background-color", "inherit");
            $.cookie("slip_tlrance_txt", vl, {expires: 30});

        } else if (vl > 5) {
            $(".y_tr_mfail span").show();
            $(".y_tr_mfail span").text("Your transaction may be frontrun");
            $("#slip_warning").show();
            $(".transactionPercent:not(.trx_perc_0_5)").css("background-color", "inherit");
            $.cookie("slip_tlrance_txt", vl, {expires: 30});

        }
    });

    $(document).on("click", "#import_pool_link", function () {
                
        $("#imp_sel_token").show();
        $("#imp_pool_found").hide();
        $("#imp_pool_found_details").hide();
        $("#imp_pool_notfound").hide();

        $("#importPoolFrom_title .ddlabel").html("Select Token");
        $("#importPoolFrom_title img").remove();

        $("#importPoolTo_title .ddlabel").html("Select Token");
        $("#importPoolTo_title img").remove();

        $('#open_import_pool_pop').modal('show');

    });

    $("#open_import_pool_pop").on('hide.bs.modal', function () {

        setTimeout(function(){
            $("#open_import_pool_pop select").msDropdown({roundedBorder: false});
            if ($("#open_import_pool_pop .enabled._msddli_").hasClass("selected")) {
                $("#open_import_pool_pop .enabled._msddli_").removeClass("selected");
                $("#importPoolFrom_title .ddlabel").html("Select Token");
                $("#importPoolFrom_title img").remove();
                $("#importPoolTo_title .ddlabel").html("Select Token");
                $("#importPoolTo_title img").remove();
            }
        }, 600);

    });

    $(document.body).on("change", "#importPoolFrom", function () {

        var importPoolFrom = $('#importPoolFrom option:selected').val();
        var importPoolTo = $('#importPoolTo option:selected').val();

        getCheckImportPoolPair(importPoolFrom, importPoolTo, 'from');
    });

    $(document.body).on("change", "#importPoolTo", function () {

        var importPoolFrom = $('#importPoolFrom option:selected').val();
        var importPoolTo = $('#importPoolTo option:selected').val();

        getCheckImportPoolPair(importPoolFrom, importPoolTo, 'to');
    });

    $(document.body).on("click", "#imp_pool_found a", function () {
        $("#open_import_pool_pop").modal('hide');
        var transaction_hash = "0xf261ab639fa3ce30b85554ace926e04ea6b5c8e2641bccd5d851d4ca435178d1";
        $('#tbl_pool_events').DataTable().search(transaction_hash).draw();
    });

    $(document.body).on("click", "#imp_pool_notfound a", function () {

        $("#open_import_pool_pop").modal('hide');
        $("#coin_option2").modal('show');

        var ddlabelFrom = $("#importPoolFrom_title .ddlabel").text();
        var ddlabelTo = $("#importPoolTo_title .ddlabel").text();

        setTimeout(function(){

            $('#poolFromToken').val(ddlabelFrom);
            $('#poolToToken').val(ddlabelTo);

            var from_img = "images/" + ddlabelFrom.toLowerCase() + ".png";
            var to_img = "images/" + ddlabelTo.toLowerCase() + ".png";

            $("#poolFromToken_title .ddlabel").html(ddlabelFrom);
            $("#poolFromToken_title .ddlabel").before("<img src='"+from_img+"' class='fnone' />");

            $("#poolToToken_title .ddlabel").html(ddlabelTo);
            $("#poolToToken_title .ddlabel").before("<img src='"+to_img+"' class='fnone' />");

            $("#poolFromToken_child ul li").each(function () {
                var ddlabel = $(this).find('.ddlabel').text();
                if(ddlabel == ddlabelFrom){
                    $(this).addClass('selected');
                    getSelectedWalletBalance(ddlabelFrom, 'fromwallet');
                    changeFromToken("from_change");
                }
            });

            $("#poolToToken_child ul li").each(function () {
                var ddlabel = $(this).find('.ddlabel').text();
                if(ddlabel == ddlabelTo){
                    $(this).addClass('selected');
                    getSelectedWalletBalance(ddlabelTo, 'towallet');
                    changeFromToken("to_change");
                }
            });
        }, 500);
    });

});

function getCheckImportPoolPair(importPoolFrom, importPoolTo, fromto) {


    if ((importPoolFrom != '' && importPoolFrom != 0) && (importPoolTo != '' && importPoolTo != 0)) {
        
        var pairFount = 'no';
        if (pairFount == 'yes') {
            $("#imp_pool_found").show();
            $("#imp_pool_found_details").show();
            $("#imp_sel_token").hide();
            $("#imp_pool_notfound").hide();

        } else {

            $("#imp_pool_found").hide();
            $("#imp_pool_found_details").hide();
            $("#imp_sel_token").hide();
            $("#imp_pool_notfound").show();
        }

    } else {

        $("#imp_pool_found").hide();
        $("#imp_pool_found_details").hide();
        $("#imp_sel_token").show();
        $("#imp_pool_notfound").hide();
    }
}


function resetAllFields(not = '') {

    $("#txtPoolFromToken").val("");
    $("#txtPoolToToken").val("");

    $(".firstTokenRate").html('-');
    $(".secondTokenRate").html('-');

    $(".startTwoTokens #first1").html("");
    $(".startTwoTokens #first2").html("");
    $(".endTwoTokens #second1").html("");
    $(".endTwoTokens #second2").html("");

    if (not == '') {

        $("#pairWalletFromBalance").html("0.00");
        $("#pairWalletToBalance").html("0.00");

        $("#poolFromToken_title .ddlabel").html("Select Token");
        $("#poolFromToken_title img").remove();

        $("#poolToToken_title .ddlabel").html("Select Token");
        $("#poolToToken_title img").remove();
}
}

function loadSelectOptions() {

    if($("select").length > 0){
        $("select").msDropdown({roundedBorder: false});
    }

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
                    var devide_to = '1e' + res.data.desimals;
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

Number.prototype.toFixedSpecial = function (n) {
    var str = this.toFixed(n);
    if (str.indexOf('e+') === -1)
        return str;

    // if number is in scientific notation, pick (b)ase and (p)ower
    str = str.replace('.', '').split('e+').reduce(function (p, b) {
        return p + Array(b - p.length + 2).join(0);
    });

    if (n > 0)
        str += '.' + Array(n + 1).join(0);

    return str;
};

function getSetReserveValues(_reserve0, _reserve1, txtPoolFromToken, change, spnPoolFromToken, spnPoolToToken, contractAddress, contractABI, devide_to) {
    if (_reserve0 > 0 && _reserve1 > 0) {

        var reserve0 = (_reserve0 / devide_to);
        var reserve1 = (_reserve1 / devide_to);
        var numOfToken = txtPoolFromToken;

        if (reserve0 <= 0 && reserve1 <= 0) {

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

        if (change == 'from_change') {
            forFirst = (txtPoolFromToken * token0Price);
            if (forFirst > 0) {
                forFirst = parseFloat(forFirst).toFixed(8);
                $("#txtPoolToToken").val(forFirst);
            }
        } else if (change == 'to_change') {
            forSecond = (txtPoolFromToken * token1Price);
            if (forSecond > 0) {
                forSecond = parseFloat(forSecond).toFixed(8);
                $("#txtPoolFromToken").val(forSecond);
            }
        } else {
            forFirst = (txtPoolFromToken * token0Price);
            if (forFirst > 0) {
                forFirst = parseFloat(forFirst).toFixed(8);
                $("#txtPoolToToken").val(forFirst);
            }
        }

        if ($("#txtPoolFromToken").val() <= 0 || $("#txtPoolToToken").val() <= 0) {
            $("#create_pair_btn").prop('disabled', true);
            $("#create_pair_btn").html('Invalid pair');
            $("#pool_loading").hide();
            return false;
        }

        var totalLiquidity = (reserve0 + reserve1 + numOfToken);
        var share = ((numOfToken * 100) / totalLiquidity).toFixed(2);

        $(".firstTokenRate").html((token0Price));
        $(".secondTokenRate").html((token1Price));
        $(".startTwoTokens #first1").html(spnPoolToToken);
        $(".startTwoTokens #first2").html(spnPoolFromToken);
        $(".endTwoTokens #second1").html(spnPoolFromToken);
        $(".endTwoTokens #second2").html(spnPoolToToken);

        $("#pool_loading").hide();

        if (parseFloat($("#txtPoolFromToken").val()) > parseFloat($("#pairWalletFromBalance").html())) {
            $("#create_pair_btn").prop('disabled', true);
            var vtoken = $('#poolFromToken option:selected').val();
            $("#create_pair_btn").html('Insufficient ' + vtoken + ' Token');
        } else if (parseFloat($("#txtPoolToToken").val()) > parseFloat($("#pairWalletToBalance").html())) {
            $("#create_pair_btn").prop('disabled', true);
            var vtoken = $('#poolToToken option:selected').val();
            $("#create_pair_btn").html('Insufficient ' + vtoken + ' Token');
        } else {

            $("#create_pair_btn").html('Supply');
            //check approval into ERC-20 token for router contract
            contractABI_json = JSON.parse(contractABI);

            var tknContract = new web3.eth.Contract(contractABI_json, contractAddress);
            var getallowance = tknContract.methods.allowance(myAccountAddress, routerContractAddress).call();
            getallowance.then(function (getallowance) {

                if (parseInt(getallowance) <= 0) {
                    $("#approve2").show();
                    if ($('#poolToToken option:selected').val() == 'ETH') {
                        var vtoken = $('#poolFromToken option:selected').val();
                    } else {
                        var vtoken = $('#poolToToken option:selected').val();
                    }
                    $("#approve2").html('Approve ' + vtoken);
                    $("#approve2").attr('data-address', contractAddress);
                    $("#approve2").attr('data-abi', contractABI);
                    $("#approve2").attr('data-decimal', devide_to);
                    $("#create_pair_btn").prop('disabled', true);
                } else {
                    $("#approve2").hide();
                    $("#approve2").attr('data-address', '');
                    $("#approve2").attr('data-abi', '');
                    $("#approve2").attr('data-decimal', 0);
                    $("#create_pair_btn").prop('disabled', false);
                    $("#create_pair_btn").html('Supply');
                }
            });

            if (spnPoolFromToken != 'ETH' && spnPoolToToken != 'ETH') {
                var selectedtoken1 = spnPoolFromToken;

                $.ajax({
                    type: "POST",
                    url: 'ajax/getCurrencyData.php',
                    data: {tokenname: selectedtoken1},
                    dataType: "json",
                    success: function (res) {

                        if (res.status == '1') {
                            var contractABI1 = res.data.contractABI;
                            var contractAddress1 = res.data.contractAddress;

                            contractABI1 = JSON.parse(contractABI1);

                            var tknContract1 = new web3.eth.Contract(contractABI1, contractAddress1);
                            var getallowance1 = tknContract.methods.allowance(myAccountAddress, routerContractAddress).call();
                            getallowance1.then(function (getallowance1) {

                                if (parseInt(getallowance1) <= 0) {
                                    $("#approve1").show();
                                    var vtoken = $('#poolFromToken option:selected').val();
                                    $("#approve1").html('Approve ' + vtoken);
                                    $("#approve1").attr('data-address', contractAddress1);
                                    $("#create_pair_btn").prop('disabled', true);
                                } else {
                                    $("#approve1").hide();
                                    $("#approve1").attr('data-address', '');
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

function getShareOfPoolCalculations(_reserve0, _reserve1, devide_to) {

    setTimeout(function () {

        var txtPoolFromToken = $("#txtPoolFromToken").val();
        var txtPoolToToken = $("#txtPoolToToken").val();

        var token_reserv0 = parseInt(_reserve0) / devide_to;
        var token_reserv1 = parseInt(_reserve1) / devide_to;

        var share_of_pool = 0;
        var total_token = ((parseFloat(txtPoolFromToken) + parseFloat(txtPoolToToken)).toFixed(2));
        if (!isNaN(total_token)) {

            var total_pool_amount = token_reserv0 + token_reserv1 + parseFloat(total_token);
            var share_of_pool = ((total_token * 100) / total_pool_amount).toFixed(2);

            if (share_of_pool > 100) {
                share_of_pool = 100;
            }
        }

        if (parseFloat(share_of_pool) == 0) {
            $("#share_of_pool").html('0%');
        } else if (parseFloat(share_of_pool) <= 0.01) {
            $("#share_of_pool").html('<0.01%');
        } else {
            $("#share_of_pool").html(share_of_pool + '%');
        }

    }, 100);
}

function changeFromToken(change = '') {

    $("#approve1").hide();
    $("#approve2").hide();

    var spnPoolFromToken = poolFromToken = $('#poolFromToken option:selected').val();
    var spnPoolToToken = poolToToken = $('#poolToToken option:selected').val();

    if (change == 'to_change') {
        spnPoolToToken = poolToToken = $('#poolFromToken option:selected').val();
        spnPoolFromToken = poolFromToken = $('#poolToToken option:selected').val();
    }

    if (spnPoolToToken == '' || spnPoolFromToken == '') {
        $("#create_found_pair").hide();
        return false;
    }

    $("#create_found_pair").show();

    web3.eth.getAccounts(async function (error, result) {

        var myAccountAddress = result[0];
        var selectedtoken = [];

        if (spnPoolToToken == 'ETH') {
            selectedtoken = [spnPoolFromToken];
        } else if (spnPoolFromToken == 'ETH') {
            selectedtoken = [spnPoolToToken];
        } else {
            selectedtoken = [spnPoolFromToken, spnPoolToToken];
        }

        $.ajax({
            type: "POST",
            url: 'ajax/getCurrencyData1.php',
            data: {tokenname: selectedtoken},
            dataType: "json",
            success: async function (resp) {

                /* res=JSON.parse(res); */
                if (resp.length == 1) {
                    var res = resp[0];

                    console.log(res);

                    if (res.status == '1') {

                        console.log("First IF");

                        $("#pool_loading").show();

                        var WETHAddress = $("#WETHAddress").val();
                        if (WETHAddress) {

                            var contractABI = res.data.contractABI;
                            var contractAddress = res.data.contractAddress;
                            var devide_to = '1e' + res.data.desimals;

                            var txtPoolFromToken = $("#txtPoolFromToken").val();
                            if (change == 'to_change') {
                                txtPoolFromToken = $("#txtPoolToToken").val();
                            }
                            if (txtPoolFromToken <= 0) {
                                $("#txtPoolToToken").val("");
                            }

                            var from_token_name = $('#poolFromToken option:selected').val();
                            var to_token_name = $('#poolToToken option:selected').val();

                            $.ajax({
                                type: "POST",
                                url: 'ajax/getFactoryContract.php',
                                data: {
                                    from_token_name: from_token_name,
                                    to_token_name: to_token_name
                                },
                                dataType: "json",
                                success: function (resp) {

                                    if (resp != '') {

                                        var contractAddress1 = WETHAddress;
                                        var contractAddress2 = contractAddress;

                                        var getPairAddress = resp.getPairAddress;
                                        var getPairABI = resp.getPairABI;
                                        var getPairABI_JSON = JSON.parse(getPairABI);

                                        console.log(getPairAddress);

                                        var UniswapV2Pair = new web3.eth.Contract(getPairABI_JSON, getPairAddress);
                                        var getReserve = UniswapV2Pair.methods.getReserves().call();
                                        getReserve.then(function (getReserveResult) {

                                            var poolFromTokenVl = $('#poolFromToken option:selected').val();
                                            if (poolFromTokenVl == 'ETH') {
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
                                        getPairObj.then(function (getPairAddress) {

                                            $.get(etherscan_api_url + "api?module=contract&action=getabi&address=" + getPairAddress + "&format=raw", function (getPairABI) {

                                                var getPairABI_JSON = jQuery.parseJSON(JSON.stringify(getPairABI));
                                                var getPairABI_JSON = JSON.parse(getPairABI_JSON);
                                                var UniswapV2Pair = new web3.eth.Contract(getPairABI_JSON, getPairAddress);
                                                var getReserve = UniswapV2Pair.methods.getReserves().call();
                                                getReserve.then(function (getReserveResult) {

                                                    var poolFromTokenVl = $('#poolFromToken option:selected').val();
                                                    if (poolFromTokenVl == 'ETH') {
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
                                                        getPairAddress: getPairAddress,
                                                        getPairABI: getPairABI,
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
                                                        console.log(result);
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

                    var getPairABI = '';

                    try{
                        var contractABI1, contractAddress1, devide_to1;
                        var contractABI2, contractAddress2, devide_to2;

                        for (i = 0; i < resp.length; i++) {
                            var res = resp[i];

                            if (res.status == '1') {
                                if (i == 0) {
                                    contractABI1 = res.data.contractABI;
                                    contractAddress1 = res.data.contractAddress;
                                    devide_to1 = '1e' + res.data.desimals;
                                } else {
                                    contractABI2 = res.data.contractABI;
                                    contractAddress2 = res.data.contractAddress;
                                    devide_to2 = '1e' + res.data.desimals;
                                }
                            }
                        }
                        var txtPoolFromToken = $("#txtPoolFromToken").val();

                        if (change == 'to_change') {
                            txtPoolFromToken = $("#txtPoolToToken").val();
                        }

                        var amountOut = (devide_to1 * txtPoolFromToken);
                        var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);

                        amountOut = amountOut.toLocaleString('fullwide', {useGrouping: false});

                        var from_token_name = $('#poolFromToken option:selected').val();
                        var to_token_name = $('#poolToToken option:selected').val();

                        $("#pool_loading").show();

                        
                        console.log("ELSE");
                        var UniswapV2Factory = new web3.eth.Contract(factoryContractABI, factoryContractAddress);
                        var getPairObj = UniswapV2Factory.methods.getPair(contractAddress1, contractAddress2).call();
                        var getPairAddress = await getPairObj;

                        if (getPairAddress == '' || getPairAddress == '0x0000000000000000000000000000000000000000') {
                            $("#pool_loading").show();
                            const tx = UniswapV2Factory.methods.createPair(contractAddress1, contractAddress2).send({
                                    from: myAccountAddress,
                                });
                            var crtPair = await tx;

                            var getPairObj = UniswapV2Factory.methods.getPair(contractAddress1, contractAddress2).call();
                            var getPairAddress = await getPairObj;
                            $("#pool_loading").hide();
                        }

                        console.log(getPairAddress);
                            
                        var getPairABI = window.getPairABI;
                        var getPairABI_JSON = JSON.parse(getPairABI);

                        var pairContract = new web3.eth.Contract(getPairABI_JSON, getPairAddress);

                        $("#pool_loading").hide();

                        var vtokenObj0 = pairContract.methods.token0().call();
                        var vtoken0 = await vtokenObj0;
                        var vtokenObj1 = pairContract.methods.token1().call();
                        var vtoken1 = await vtokenObj1;

                        console.log(vtoken0);
                        console.log(vtoken1);

                        var getReservesObj = pairContract.methods.getReserves().call();
                        var getreserves = await getReservesObj;
                        console.log(getreserves);
                       

                        var vReverse1 = getreserves._reserve0;
                        var vReverse2 = getreserves._reserve1;
                        
                        
                        getShareOfPoolCalculations(vReverse1, vReverse2, devide_to1);

                        var share_of_pool = 0;
                        if (vtoken0 == contractAddress1) {
                            var vQuote = routerContract.methods.quote(amountOut, vReverse1, vReverse2).call();
                            vReverse1 = vReverse1 / devide_to1;
                        } else {
                            var vQuote = routerContract.methods.quote(amountOut, vReverse2, vReverse1).call();
                            vReverse2 = vReverse2 / devide_to2;
                        }

                        var tokenAount = await vQuote;
                        console.log(tokenAount);

                        console.log(tokenAount);

                        vQuote.then(function (vQuote) {

                            tokenAount = vQuote;

                            console.log(tokenAount);

                            if (change == 'to_change') {
                                var inpDevide = (tokenAount / devide_to2).toFixed(8);
                            } else {
                                var inpDevide = (tokenAount / devide_to2).toFixed(8);
                            }

                            var getInpSingle = parseFloat(inpDevide).toFixed(8);
                            var forFirst = getInpSingle;
                            var forSecond = ((1 / forFirst)).toFixed(8);

                            if (change == 'to_change') {
                                $("#txtPoolFromToken").val(parseFloat(forFirst).toFixed(8));
                            } else {
                                $("#txtPoolToToken").val(parseFloat(forFirst).toFixed(8));
                            }

                            forFirst = getInpSingle / txtPoolFromToken;
                            forSecond = ((1 / forFirst)).toFixed(8);

                            $(".firstTokenRate").html(parseFloat(forSecond));
                            $(".secondTokenRate").html(parseFloat(forFirst));
                            $(".startTwoTokens #first1").html(spnPoolFromToken);
                            $(".startTwoTokens #first2").html(spnPoolToToken);
                            $(".endTwoTokens #second1").html(spnPoolToToken);
                            $(".endTwoTokens #second2").html(spnPoolFromToken);

                            if (parseFloat($("#txtPoolFromToken").val()) > parseFloat($("#pairWalletFromBalance").html())) {
                                $("#create_pair_btn").prop('disabled', true);
                                var vtoken = $('#poolFromToken option:selected').val();
                                $("#create_pair_btn").html('Insufficient ' + vtoken + ' Token');
                            } else if (parseFloat($("#txtPoolToToken").val()) > parseFloat($("#pairWalletToBalance").html())) {
                                $("#create_pair_btn").prop('disabled', true);
                                var vtoken = $('#poolToToken option:selected').val();
                                $("#create_pair_btn").html('Insufficient ' + vtoken + ' Token');
                            } else {

                                $("#create_pair_btn").html('Supply');
                                //check approval into ERC-20 token for router contract
                                contractABI_json1 = JSON.parse(contractABI1);

                                var tknContract1 = new web3.eth.Contract(contractABI_json1, contractAddress1);
                                var getallowance1 = tknContract1.methods.allowance(myAccountAddress, routerContractAddress).call();
                                getallowance1.then(function (getallowance1) {
                                    if (parseInt(getallowance1) <= 0) {
                                        $("#approve1").show();
                                        var vtoken1 = $('#poolFromToken option:selected').val();
                                        $("#approve1").html('Approve ' + vtoken1);
                                        $("#approve1").attr('data-address', contractAddress1);
                                        $("#approve1").attr('data-abi', contractABI1);
                                        $("#approve1").attr('data-decimal', devide_to1);
                                        $("#create_pair_btn").prop('disabled', true);
                                    } else {
                                        $("#approve1").hide();
                                        $("#approve1").attr('data-address', '');
                                        $("#approve1").attr('data-abi', '');
                                        $("#approve1").attr('data-decimal', 0);
                                        $("#create_pair_btn").prop('disabled', false);
                                        $("#create_pair_btn").html('Supply');
                                    }
                                });

                                contractABI_json2 = JSON.parse(contractABI2);

                                var tknContract2 = new web3.eth.Contract(contractABI_json2, contractAddress2);
                                var getallowance2 = tknContract2.methods.allowance(myAccountAddress, routerContractAddress).call();
                                getallowance2.then(function (getallowance2) {

                                    if (parseInt(getallowance2) <= 0) {
                                        $("#approve2").show();
                                        var vtoken = $('#poolToToken option:selected').val();
                                        $("#approve2").html('Approve ' + vtoken);
                                        $("#approve2").attr('data-address', contractAddress1);
                                        $("#approve2").attr('data-abi', contractABI2);
                                        $("#approve2").attr('data-decimal', devide_to2);
                                        $("#create_pair_btn").prop('disabled', true);
                                    } else {
                                        $("#approve2").hide();
                                        $("#approve2").attr('data-address', '');
                                        $("#approve2").attr('data-abi', '');
                                        $("#approve2").attr('data-decimal', 0);
                                        if ($("#approve1").is(':hidden')) {
                                            $("#create_pair_btn").prop('disabled', false);
                                        }
                                        $("#create_pair_btn").html('Supply');
                                    }
                                });
                            }
                        });

                    } catch(error){
                        console.log(error);
                        alertify.alert('Warning', error.message);
                    }

                    if(getPairABI != ''){
                        $.ajax({
                            type: "POST",
                            url: 'ajax/saveFactoryContract.php',
                            data: {
                                getPairAddress: getPairAddress,
                                getPairABI: getPairABI,
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
                    }                                    
                }
            },
            error: function (result) {
                alert("Error");
            }
        });

        setTimeout(function () {
            $("#pool_loading").hide();
        }, 10000);
    });
}

function toFixedNumber(x) {
    if (Math.abs(x) < 1.0) {
        var e = parseInt(x.toString().split('e-')[1]);
        if (e) {
            x *= Math.pow(10, e - 1);
            x = '0.' + (new Array(e)).join('0') + x.toString().substring(2);
        }
    } else {
        var e = parseInt(x.toString().split('+')[1]);
        if (e > 20) {
            e -= 20;
            x /= Math.pow(10, e);
            x += (new Array(e + 1)).join('0');
        }
    }
    return x;
}

function MakeQuerablePromise(promise) {
    // Don't modify any promise that has been already modified.
    if (promise.isResolved)
        return promise;

    // Set initial state
    var isPending = true;
    var isRejected = false;
    var isFulfilled = false;

    // Observe the promise, saving the fulfillment in a closure scope.
    var result = promise.then(
            function (v) {
                isFulfilled = true;
                isPending = false;
                return v;
            },
            function (e) {
                isRejected = true;
                isPending = false;
                throw e;
            }
    );

    result.isFulfilled = function () {
        return isFulfilled;
    };
    result.isPending = function () {
        return isPending;
    };
    result.isRejected = function () {
        return isRejected;
    };

    return result;
}

async function createPairBtnClick() {

    var startToken = $("#poolFromToken_title .ddlabel").html();
    var endToken = $("#poolToToken_title .ddlabel").html();

    $("#create_pair_loading").show();
    if (startToken == endToken) {
        alertify.alert('Warning', 'Please select different token.');
        $("#create_pair_loading").hide();
        return false;
    }

    var selectedtoken = [];
    if (endToken == 'ETH') {
        selectedtoken = [startToken];
    } else if (startToken == 'ETH') {
        selectedtoken = [endToken];
    } else {
        selectedtoken = [startToken, endToken];
    }

    $("#create_pair_loading").show();

    $.ajax({
        type: "POST",
        url: 'ajax/getCurrencyData1.php',
        data: {tokenname: selectedtoken},
        dataType: "json",
        success: async function (resp) {

            $("#create_pair_loading").hide();

            if (resp.length == 1) {

                var res = resp[0];
                if (res.status == '1') {

                    $("#create_pair_loading").show();

                    var contractABI = res.data.contractABI;
                    var contractAddress = res.data.contractAddress;
                    var multiply_to = '1e' + res.data.desimals;
                    contractABI = JSON.parse(contractABI);

                    web3.eth.getAccounts(async function (error, result) {

                        try{

                            myAccountAddress = result[0];

                            if ((startToken != '' && endToken != '') && (startToken != 'Select Token' && endToken != 'Select Token')) {

                                console.log("token = " + res.data.name);
                                console.log("contract address = " + contractAddress);
                                var vPairAddress='';

                                var UniswapV2Factory = new web3.eth.Contract(factoryContractABI, factoryContractAddress);

                                var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress, {
                                    from: myAccountAddress, // default from address
                                });
                                var WETHobj = routerContract.methods.WETH().call();
                                var WETHval = await WETHobj;

                                console.log(WETHval);

                                var getPairObj = UniswapV2Factory.methods.getPair(WETHval, contractAddress).call();
                                var vPairAddress = await getPairObj;
                                
                                console.log(vPairAddress);

                                if(vPairAddress == '') {
                                    
                                    const tx = UniswapV2Factory.methods.createPair(WETHval, contractAddress).send({
                                            from: myAccountAddress,
                                        });
                                    var crtPair = await tx;

                                    var getPairObj = UniswapV2Factory.methods.getPair(WETHval, contractAddress).call();
                                    var vPairAddress = await getPairObj;
                                }

                                var txtPoolFromToken = $("#txtPoolFromToken").val();
                                var txtPoolToToken = $("#txtPoolToToken").val();

                                const userInputEthValue = web3.utils.toHex(toFixedNumber(multiply_to / txtPoolFromToken));
                                
                                //WETHval = WETHobj.then(function (result) {

                                console.log(WETHval);

                                var amountOut = (txtPoolFromToken * multiply_to);
                                var decimals = (txtPoolFromToken != Math.floor(txtPoolFromToken)) ? (txtPoolFromToken.toString()).split('.')[1].length : 0;

                                if (endToken == 'ETH') {
                                    amountOut = (multiply_to * txtPoolFromToken);
                                }

                                var path = [WETHval, contractAddress];

                                console.log(amountOut);
                                console.log(path);
                                
                                var getamntin = routerContract.methods.getAmountsIn(amountOut, path).call();
                                var getAmtVal = await getamntin;

                                //getamntin.then(function (getAmtVal) {

                                var tokenAount = getAmtVal[0];
                                var ETHValue = getAmtVal[1];
                                var inpDevide = (tokenAount / ETHValue).toFixed(8);
                                var getInpSingle = parseFloat(inpDevide).toFixed(8);

                                var tokenAount = ((1 / getInpSingle) * ETHValue);
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
                                    value: addLiquidityETH});

                                var myPromise = MakeQuerablePromise(addLiqETH);

                                if (myPromise.isPending()) {
                                    alertify.alert("<b>Please wait</b>", "<div class='text-center'><center><img src='images/ripple-loader.gif' style='width: 50px;' /></center> <br>Please wait...</div>", function () {});
                                }

                                var timerID = setInterval(function () {

                                    if (myPromise.isFulfilled()) {

                                        myPromise.then(function (result) {
                                            alertify.alert("Transacton Recorded", "Thanks for joining. You can check the status at <a href='" + etherscanTx + result.transactionHash + "' target='_blank'>Etherscan</a><br><br> Once the transaction is confirmed in Blockchain, you can come back to this page and reload this page.", function () {});
                                        });

                                        $(".ajs-ok").click();
                                        $("#create_pair_loading").hide();
                                        clearInterval(timerID);
                                    }

                                    if (myPromise.isFulfilled()) {
                                        resetAllFields();
                                        loadSelectOptions();
                                        $(".ajs-ok").click();
                                        $("#create_pair_loading").hide();
                                        clearInterval(timerID);
                                    }

                                    if (myPromise.isRejected()) {

                                        myPromise.then(response => {
                                        }).catch(error => {
                                            alertify.alert("Warning", error.message, function () {});
                                        });
                                        $(".ajs-ok").click();
                                        $("#create_pair_loading").hide();
                                        clearInterval(timerID);
                                    }

                                }, 500);
                                //});
                                //});
                            } else {
                                $("#create_pair_loading").hide();
                            }
                        } catch (error) {
                            alertify.alert("Warning", error.message, function () {});
                            $("#create_pair_loading").hide();
                        }
                    });
                }

            } else {

                var contractABI1, contractAddress1, devide_to1;
                var contractABI2, contractAddress2, devide_to2;

                for (i = 0; i < resp.length; i++) {
                    var res = resp[i];

                    if (res.status == '1') {
                        if (i == 0) {
                            contractABI1 = res.data.contractABI;
                            contractAddress1 = res.data.contractAddress;
                            devide_to1 = '1e' + res.data.desimals;
                        } else {
                            contractABI2 = res.data.contractABI;
                            contractAddress2 = res.data.contractAddress;
                            devide_to2 = '1e' + res.data.desimals;
                        }
                    }
                }

                var txtPoolFromToken = $("#txtPoolFromToken").val();
                var txtPoolToToken = $("#txtPoolToToken").val();

                var amountOut = (devide_to1 * txtPoolFromToken);
                var routerContract = new web3.eth.Contract(routerContractABI, routerContractAddress);

                amountOut = amountOut.toLocaleString('fullwide', {useGrouping: false});

                var from_token_name = $('#poolFromToken option:selected').val();
                var to_token_name = $('#poolToToken option:selected').val();

                $.ajax({
                    type: "POST",
                    url: 'ajax/getFactoryContract.php',
                    data: {
                        from_token_name: from_token_name,
                        to_token_name: to_token_name
                    },
                    dataType: "json",
                    success: function (resp) {

                        if (resp != '') {

                            var getPairAddress = resp.getPairAddress;
                            var getPairABI = resp.getPairABI;
                            var getPairABI_JSON = JSON.parse(getPairABI);


                            var pairContract = new web3.eth.Contract(getPairABI_JSON, getPairAddress);

                        } else {
                            var UniswapV2Factory = new web3.eth.Contract(factoryContractABI, factoryContractAddress);
                            var getPairObj = UniswapV2Factory.methods.getPair(contractAddress1, contractAddress2).call();
                            getPairObj.then(function (getPairAddress) {

                                if (getPairAddress != '0') {

                                    $.get(etherscan_api_url + "api?module=contract&action=getabi&address=" + getPairAddress + "&format=raw", function (getPairABI) {

                                        var getPairABI_JSON = jQuery.parseJSON(JSON.stringify(getPairABI));
                                        var getPairABI_JSON = JSON.parse(getPairABI_JSON);

                                        var pairContract = new web3.eth.Contract(getPairABI_JSON, getPairAddress);

                                        $.ajax({
                                            type: "POST",
                                            url: 'ajax/saveFactoryContract.php',
                                            data: {
                                                getPairAddress: getPairAddress,
                                                getPairABI: getPairABI,
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
                                                console.log(result);
                                            }
                                        });
                                    });
                                }
                            });
                        }

                        var vtoken0 = pairContract.methods.token0().call();
                        var vtoken1 = pairContract.methods.token1().call();

                        vtoken0.then(function (res) {
                            vtoken0 = res;
                        });

                        vtoken1.then(function (res) {
                            vtoken1 = res;

                            setTimeout(function () {

                                var getreserves = pairContract.methods.getReserves().call();
                                getreserves.then(function (response) {

                                    var vReverse1 = response[0];
                                    var vReverse2 = response[1];
                                    if (vtoken0 == contractAddress1) {
                                        var vQuote = routerContract.methods.quote(amountOut, vReverse1, vReverse2).call();
                                    } else {
                                        var vQuote = routerContract.methods.quote(amountOut, vReverse2, vReverse1).call();
                                    }

                                    vQuote.then(function (vQuote) {

                                        var tokenAmount = vQuote / devide_to2;
                                        var ETHValue = amountOut;

                                        var inpDevide = ((1 / tokenAmount));
                                        var token_percent = (tokenAmount * 0.5) / 100;
                                        var ETH_percent = (ETHValue * 0.5) / 100;

                                        var addLiquidityETH = $(".firstTokenRate").html() * devide_to1;
                                        var token = contractAddress;
                                        var amountTokenADesired = amountOut;
                                        var amountTokenBDesired = tokenAmount * devide_to2;
                                        var amountTokenMin = (ETHValue - ETH_percent);
                                        var amountETHMin = (tokenAmount - token_percent) * devide_to2;
                                        var amountETHMin = parseInt(amountETHMin); //amountETHMin.toLocaleString('fullwide', {useGrouping: false});
                                        var to = myAccountAddress;
                                        var milliseconds = 300 * 1000;
                                        var deadline = new Date().getTime() + milliseconds;

                                        console.log('==================');
                                        console.log('contractAddress1 ' + contractAddress1);
                                        console.log('contractAddress2 ' + contractAddress2);
                                        console.log('amountTokenDesired ' + amountTokenADesired);
                                        console.log('amountTokenBDesired ' + amountTokenBDesired);
                                        console.log('amountTokenMin ' + amountTokenMin);
                                        console.log('amountETHMin ' + amountETHMin);
                                        console.log('to ' + to);
                                        console.log('deadline ' + deadline);
                                        console.log('value 0');
                                        console.log('==================');

                                        var addLiqETH = routerContract.methods.addLiquidity(contractAddress1, contractAddress2, amountTokenADesired, amountTokenBDesired, amountTokenMin, amountETHMin, to, deadline).send({
                                            from: to,
                                            gasLimit: web3.utils.toHex(460000),
                                            gasPrice: web3.utils.toHex(10000000000),
                                            value: 0});

                                        var myPromise = MakeQuerablePromise(addLiqETH);

                                        if (myPromise.isPending()) {
                                            alertify.alert("<div class='text-center'><b>Please wait</b>", "<center><img src='images/ripple-loader.gif' style='width: 50px;' /></center> <br>Please wait...</div>", function () {});
                                        }

                                        var timerID = setInterval(function () {
                                            if (myPromise.isFulfilled()) {
                                                myPromise.then(function (result) {
                                                    alertify.alert("Transacton Recorded", "Thanks for Supplying liquidity to. You can check the status at <a href='" + etherscanTx + result.transactionHash + "' target='_blank'>Etherscan</a><br><br> Once transaction is confirmed in Blockchain, you can check your added liquidity.", function () {});
                                                });

                                                $(".ajs-ok").click();
                                                clearInterval(timerID);
                                            }

                                            if (myPromise.isFulfilled()) {
                                                $(".ajs-ok").click();
                                                clearInterval(timerID);
                                            }

                                            if (myPromise.isRejected()) {
                                                $(".ajs-ok").click();
                                                clearInterval(timerID);
                                            }

                                        }, 500);

                                        return false;
                                    });
                                });
                            }, 500);
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

function removeLiquidity(dbid) {

    $.ajax({
        type: "POST",
        url: 'ajax/getSinglePoolEvent.php',
        data: {dbid: dbid},
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

                getFromToTokenPercentValue(100);

                var token_price_ftt = "1 " + token_from + " = 0.00373513 " + token_to;
                $("#token_price_ftt").text(token_price_ftt);

                var token_price_ttf = "1 " + token_to + " = 276.4545 " + token_from;
                $("#token_price_ttf").text(token_price_ttf);

                $('#remove_liquidity_pop').modal('show');

                var token_pair_label = token_from + "/" + token_to;
                $("#token_pair_label, #token_pair_labels").text(token_pair_label);

                var rmlqbothtokenImgf = "images/" + token_from.toLowerCase() + ".png";
                $("#rmlqbothtokenImgf, #rmlqbothtokenImgsf, .fTokenImage").attr("src", rmlqbothtokenImgf);

                var rmlqbothtokenImgs = "images/" + token_to.toLowerCase() + ".png";
                $("#rmlqbothtokenImgs, #rmlqbothtokenImgss, .sTokenImage").attr("src", rmlqbothtokenImgs);

                var yl_from_token_blnc = 0.656565;
                $("#yl_from_token").text(token_from + ":");
                $("#yl_from_token_blnc").text(yl_from_token_blnc);

                var yl_to_token_blnc = 0.565656;
                $("#yl_to_token").text(token_to + ":");
                $("#yl_to_token_blnc").text(yl_to_token_blnc);

                var rmlqd_pool_share = 0.002999;
                $("#rmlqd_pool_share").text(rmlqd_pool_share + "%");

                $("#rmLqOutput1").val(token_from);
                $("#rmLqOutput1_title .ddlabel").html(token_from);
                $("#rmLqOutput1_title .ddlabel").before("<img src='"+rmlqbothtokenImgf+"' class='fnone' />");

                $("#rmLqOutput2").val(token_to);
                $("#rmLqOutput2_title .ddlabel").html(token_to);
                $("#rmLqOutput2_title .ddlabel").before("<img src='"+rmlqbothtokenImgs+"' class='fnone' />");

                $("#rmLqOutput1_child ul li").each(function () {
                    var ddlabel = $(this).find('.ddlabel').text();
                    if(ddlabel == token_from){
                        $(this).addClass('selected');
                    }
                });

                $("#rmLqOutput2_child ul li").each(function () {
                    var ddlabel = $(this).find('.ddlabel').text();
                    if(ddlabel == token_to){
                        $(this).addClass('selected');
                    }
                });
            });
        },
        error: function (res_error) {
            console.log(res_error);
        }
    });
}

function removeLiquidityInSidePopup(dbid) {

    $.ajax({
        type: "POST",
        url: 'ajax/getSinglePoolEvent.php',
        data: {dbid: dbid},
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
                    value: liquidity})
                        .then(function (result) {
                            console.log(result);
                        })
                        .catch(function (result) {
                            console.log(result);
                        });

                var removeLiqdPromise = MakeQuerablePromise(removeLiqETH);

                if (removeLiqdPromise.isPending()) {
                    alertify.alert("<div class='text-center'><b>Please wait</b>", "<center><img src='images/ripple-loader.gif' style='width: 50px;' /></center> <br>Please wait...</div>", function () {});
                }

                var timerRliqID = setInterval(function () {
                    if (removeLiqdPromise.isFulfilled()) {
                        $(".ajs-ok").click();
                        clearInterval(timerRliqID);
                        return false;
                    }

                    if (removeLiqdPromise.isRejected()) {
                        $(".ajs-ok").click();
                        clearInterval(timerRliqID);
                        return false;
                    }

                    if (removeLiqdPromise.isFulfilled()) {

                        removeLiqdPromise.then(function (result) {
                            alertify.alert("Transacton Recorded", "Removed liquidity. You can check the status at <a href='" + etherscanTx + result + "' target='_blank'>Etherscan</a>.", function () {});
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

function changeRLNumber(number) {

    $("#pool_percent_number").text(number + "%");
    $("#rm_lq_sld_val").val(number);
    $("#custom_number_slider").val(number);

    getFromToTokenPercentValue(number);
    
}

function getFromToTokenPercentValue(number){

    var from_token_val = 0.00342903;
    var to_token_val = 0.784524;

    var fTokenValue = (from_token_val * number) / 100;
    var sTokenValue = (to_token_val * number) / 100;

    $("#fTokenValue").text(fTokenValue);
    $("#sTokenValue").text(sTokenValue);

    var token_pair_blnc = 0.00311811;
    $("#token_pair_blnc").text(token_pair_blnc);

    $("#rmlqbothtoken").val(token_pair_blnc);
    $("#rmlqoutput1token").val(fTokenValue);
    $("#rmlqoutput2token").val(sTokenValue);

    if(fTokenValue <= 0){
        $("#rmlq_aprv_btn").prop('disabled', true);
    } else {
        $("#rmlq_aprv_btn").prop('disabled', false);
    }
}

function transactionPercent(obj = '', number) {

    $("#slip_tlrance_txt").val(number);
    $(".transactionPercent").css("background-color", "inherit");
    $(obj).css("background-color", "");
    $.cookie("slip_tlrance_txt", number, {expires: 30});

    if (number == 0.1) {
        $("#slip_warning").hide();

        $(".y_tr_mfail span").show();
        $(".y_tr_mfail span").text("Your transaction may fail");

    } else if (number == 0.5) {
        $("#slip_warning").hide();
        $(".y_tr_mfail span").hide();
    } else if (number == 1) {
        $("#slip_warning").hide();
        $(".y_tr_mfail span").hide();
    }
}
