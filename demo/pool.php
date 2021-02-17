<?php
include 'header.php';
include 'sidebar.php';

$userWallet = '';
if (isset($_COOKIE['userWallet']) && $_COOKIE['userWallet'] != '') {
    $userWallet = $_COOKIE['userWallet'];
}

$toggle_expert_mode = '';
if (isset($_COOKIE['toggle_expert_mode']) && $_COOKIE['toggle_expert_mode'] != '') {
    $toggle_expert_mode = $_COOKIE['toggle_expert_mode'];
}

$disable_multihops = '';
if (isset($_COOKIE['disable_multihops']) && $_COOKIE['disable_multihops'] != '') {
    $disable_multihops = $_COOKIE['disable_multihops'];
}

$slip_tlrance_txt = '';
if (isset($_COOKIE['slip_tlrance_txt']) && $_COOKIE['slip_tlrance_txt'] != '') {
    $slip_tlrance_txt = $_COOKIE['slip_tlrance_txt'];
}
?>

<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
<link rel="stylesheet" href="css/alertify.min.css" />
<link rel="stylesheet" type="text/css" href="css/dd.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.css" />
<input type="hidden" name="login_user_wallet" id="login_user_wallet" value="<?php echo $userWallet; ?>" />

<div class="content-wrapper" style="min-height: 1363.2px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-uppercase">POOL</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content" id="poolpage">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-lg-6">

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
                            <p>
                                Don't see a pool you joined? 
                                <a href="javascript:;" id="import_pool_link"> Import it.</a>
                            </p>
                        </div>
                    </div>
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
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" name="WETHAddress" id="WETHAddress" value="<?php echo $WETHAddress; ?>">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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

    var factoryContractAddress = "<?php echo $factoryContractAddress; ?>";
    var factoryContractABI = <?php echo $factoryContractABI; ?>;

    var network = <?php echo $network; ?>;

    var etherscan_api_url = '';
    if (network == 0) {
        etherscan_api_url = "http://api-rinkeby.etherscan.io/";
    } else {
        etherscan_api_url = "http://api.etherscan.io/";
    }

    var slip_tlrance_txt = "<?php echo $slip_tlrance_txt; ?>";

    var etherscanTx = "<?= $etherscanTx; ?>";

</script>

<script type="text/javascript" src="js/pool_custom.js"></script>

<div class="modal fade" id="open_import_pool_pop" tabindex="-1" aria-labelledby="to_token_popLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md modal-dialog-top">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="coin_option2Label">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>Import Pool
                </h5>
                <button id="open_settings_dialog_button" class="close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sc-gbOuXE daxFHC"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></button>
                <span class="exp_md_ison" <?php if ($toggle_expert_mode == '') { ?> style="display: none;" <?php } ?> >🧙</span>
            </div>
            <div class="modal-body">
                <div class="row py-2">
                    <div class="col-md-12">
                        <p>
                            <b>Tip:</b> Use this tool to find pairs that don't automatically appear in the interface.
                        </p>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-12 mt-2">
                        <select name="importPoolFrom" id="importPoolFrom" class="form-control form-control-lg">
                            <option value='0' selected='true'> Select Token </option>
                            <option value="ETH" data-image="images/eth.png">ETH</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2 mb-2 text-center">
                        <span><strong>+</strong></span>
                    </div>
                    <div class="col-md-12">
                        <select name="importPoolTo" id="importPoolTo" class="form-control form-control-lg">
                            <option value='0' selected='true'> Select Token </option>
                            <option value="ETH" data-image="images/eth.png">ETH</option>
                        </select>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-12 text-center" id="imp_pool_found" style="display: none;">
                        <div><span>Pool Found!</span></div>
                        <div><a href="javascript:;"><strong>Manage this pool.</strong></a></div>
                    </div>

                    <div class="col-md-12 text-center" id="imp_sel_token">
                        <div>Select a token to find your liquidity.</div>
                    </div>
                    <div class="col-md-12 text-center" id="imp_pool_notfound" style="display: none;">
                        <div>You don’t have liquidity in this pool yet.</div>
                        <div><a href="javascript:;"><strong>Add liquidity.</strong></a></div>
                    </div>
                </div>

                <div class="row py-2" id="imp_pool_found_details" style="display: none;">
                    <hr/>
                    <div class="col-md-12">
                        <h5>Your position</h5>
                    </div>
                    <div class="col-md-6 pull-left">
                        <img class="" id="impbothtokenImgsf" alt="Token logo" src="images/bat.svg">
                        <img class="" id="impbothtokenImgss" alt="Token logo" src="images/eth.png">
                        <span id="imp_pair_labels">BAT/ETH</span>
                    </div>
                    <div class="col-md-6 pull-right">
                        <span id="imp_pair_blnc" class="pull-right">0.03181</span>
                    </div>
                    <div class="col-md-6 pull-left">
                        <span>Your pool share:</span>
                    </div>
                    <div class="col-md-6 pull-right">
                        <span id="imp_pool_share" class="pull-right">0.029480%</span>
                    </div>
                    <div class="col-md-6 pull-left">
                        <span id="imp_from_token">BAT:</span>
                    </div>
                    <div class="col-md-6 pull-right">
                        <span id="imp_from_token_blnc" class="pull-right">0.55792</span>
                    </div>
                    <div class="col-md-6 pull-left">
                        <span id="imp_to_token">ETH:</span>
                    </div>
                    <div class="col-md-6 pull-right">
                        <span id="imp_to_token_blnc" class="pull-right">0.0021238</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

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
                                <button class="btn btn-primary w-100 transactionPercent active trx_perc_0_1" onclick="transactionPercent(this, 0.1);">0.1%</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary w-100 transactionPercent trx_perc_0_5" onclick="transactionPercent(this, 0.5);">0.5%</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary w-100 transactionPercent trx_perc_1" onclick="transactionPercent(this, 1);">1%</button>
                            </div>
                            <div class="col-md-3 slip_tlrance_main">
                                <span id="slip_warning" aria-label="warning">⚠️</span>
                                <input type="text" class="form-control" name="slip_tlrance_txt" id="slip_tlrance_txt" value="<?php echo $slip_tlrance_txt; ?>" placeholder="0.10"><span>%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-12 y_tr_mfail">
                        <?php if ($slip_tlrance_txt <= 0.1) { ?>
                            <span>Your transaction may fail</span>
                        <?php } else if ($slip_tlrance_txt > 5) { ?>
                            <span>Your transaction may frontrun</span>
                        <?php } else { ?>
                            <span></span>
                        <?php } ?>
                    </div>

                    <div class="col-md-12 mt-2 tr_ddline">
                        <span>Transaction deadline</span> &nbsp; <a href="javascript:;" title="Your transaction will revert if the price changes unfavorably by more than this percentage."><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-2">
                        <div class="txn_ddline_main">
                            <input type="text" class="form-control" name="txn_ddline_txt" id="txn_ddline_txt" value="20" placeholder="50"><span>minutes</span>
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
                            <input type="checkbox" id="to_ex_md_chk" <?php
                            if ($toggle_expert_mode != '') {
                                echo 'checked';
                            }
                            ?> >
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
                            <input type="checkbox" id="dis_mult_chk" <?php
                            if ($disable_multihops != '') {
                                echo 'checked';
                            }
                            ?>>
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
                    <hr/>
                    <div class="col-md-12">
                        <h5>Your position</h5>
                    </div>
                    <div class="col-md-6 pull-left">
                        <img class="" id="rmlqbothtokenImgsf" alt="Token logo" src="images/bat.svg">
                        <img class="" id="rmlqbothtokenImgss" alt="Token logo" src="images/eth.png">
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
                <span class="exp_md_ison" <?php if ($toggle_expert_mode == '') { ?> style="display: none;" <?php } ?> >🧙</span>
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
                                <input type="text" class="form-control" id="txtPoolFromToken" aria-label="Text input with dropdown button" placeholder="0.0">
                                <div class="input-group-append">
                                    <select  name="drpFromToken" id="poolFromToken">
                                        <option value="" data-image="">Select Token</option>
                                        <option value="ETH" data-image="images/eth.png">ETH</option>
                                    </select>
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
                                <input type="text" class="form-control" id="txtPoolToToken" aria-label="Text input with dropdown button" placeholder="0.0">
                                <div class="input-group-append">
                                    <select  name="poolToToken" id="poolToToken">
                                        <option value="" data-image="">Select Token</option>
                                        <option value="ETH" data-image="images/eth.png">ETH</option>
                                    </select>
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
                                <button class="btn btn-danger w-100 mb-3 apprvebuttons" id="approve1" >
                                    <div class="css-10ob8xa">Invalid pair</div>
                                </button>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-danger w-100 mb-3 apprvebuttons" id="approve2" >
                                    <div class="css-10ob8xa">Invalid pair</div>
                                </button>
                            </div>
                            <button disabled="" class="btn btn-primary w-100 mb-3" id="create_pair_btn" onclick="createPairBtnClick();">
                                <div class="css-10ob8xa">Invalid pair</div>
                            </button>
                        </div>
                    </div>

                    <div class="row" id="create_found_pair" style="display: none;">
                        <hr/>
                        <div class="col-md-12">
                            <h5>Your position</h5>
                        </div>
                        <div class="col-md-6 pull-left">
                            <img class="" id="adlqbothtokenImgsf" alt="Token logo" src="images/bat.svg">
                            <img class="" id="adlqbothtokenImgss" alt="Token logo" src="images/eth.png">
                            <span id="adlq_token_pair_labels">BAT/ETH</span>
                        </div>
                        <div class="col-md-6 pull-right">
                            <span id="adlq_token_pair_blnc" class="pull-right">0.03181</span>
                        </div>

                        <div class="col-md-6 pull-left">
                            <span>Your pool share:</span>
                        </div>
                        <div class="col-md-6 pull-right">
                            <span id="adlqd_pool_share" class="pull-right">0.029480%</span>
                        </div>

                        <div class="col-md-6 pull-left">
                            <span id="yl_from_token">BAT:</span>
                        </div>
                        <div class="col-md-6 pull-right">
                            <span id="yl_from_token_blnc" class="pull-right">0.55792</span>
                        </div>

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
                    <select name="displayTokenFrom" id="displayTokenFrom" class="form-control form-control-lg">
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
                    <select name="displayTokenTo" id="displayTokenTo" class="form-control form-control-lg">
                        <option value='0' selected='true'> Select Token </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
