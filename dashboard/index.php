<?php include('config.php'); ?>
<?php include('header.php'); ?>
                <span>
                    <section id="borrow-overview" class="hero">
                        <div class="balance-totals">
                            <div class="content">
                                <div class="row align-middle mobile-hide">
                                    <div class="col-xs-5 text-center">
                                        <label class="supply">Supply Balance</label>
                                        <div class="headline headline--loading"></div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="net-apy-wrapper">
                                            <div class="net-apy">
                                                <svg viewBox="0 0 140 140" width="100%">
                                                    <path d="M 70 70 L  70 0 A 70 70 0 0 1 70 0 Z" stroke="transparent" fill="#9669ED"></path>
                                                    <path d="M 70 70 L  70 0 A 70 70 0 1 1 69.99956017702848 1.381744718642608e-9 Z" stroke="transparent" fill="#00D395"></path>
                                                </svg>
                                            </div>
                                            <div class="net-apy-description">
                                                <label>Net APY</label>
                                                <div class="headline headline--loading"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 text-center">
                                        <label class="borrow">Borrow Balance</label>
                                        <div class="headline headline--loading"></div>
                                    </div>
                                </div>
                                <div class="row align-middle mobile-only">
                                    <div class="col-xs-4">
                                        <div class="net-apy-wrapper">
                                            <div class="net-apy">
                                                <svg viewBox="0 0 140 140" width="100%">
                                                    <path d="M 70 70 L  70 0 A 70 70 0 0 1 70 0 Z" stroke="transparent" fill="#9669ED"></path>
                                                    <path d="M 70 70 L  70 0 A 70 70 0 1 1 69.99956017702848 1.381744718642608e-9 Z" stroke="transparent" fill="#00D395"></path>
                                                </svg>
                                            </div>
                                            <div class="net-apy-description">
                                                <label>Net APY</label>
                                                <div class="headline headline--loading"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 text-left">
                                        <div class="balance">
                                            <label class="supply">Collateral Balance</label>
                                            <div class="headline headline--loading"></div>
                                            <label class="borrow">Borrow Balance</label>
                                            <div class="headline headline--loading"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="limit-bar align-between">
                                <label>Borrow Limit</label>
                                <div class="progress-bar-wrapper">
                                    <div class="progress dark-clear thin"><div role="progressbar" aria-value-now="0" aria-valuemin="0" aria-valuemax="100" class="progress-bar green" style="width: 0%;"></div></div>
                                    <div class="progress-bar-percent-label">
                                        <div style="width: 0%;"><p class="small">0%</p></div>
                                    </div>
                                    <div class="progress-bar-hover-space"></div>
                                </div>
                                <label>$0</label>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container-large">
   <div id="interface-container" class="row">
      <div id="collateral-pane" class="col-sm-6">
         <div class="governance-panel">
            <div class="governance-panel__header align-between">
               <h4>Supply</h4>
            </div>
            <section class="Supply_collateral" style="display:none" >
               <div class="governance-panel__labels">
                  <div class="col-xs-4 col-sm-4"><label>Asset</label></div>
                  <div class="col-xs-0 col-sm-3 text-right mobile-hide"><label>APY / Earned</label></div>
                  <div class="col-xs-4 col-sm-3 text-right"><label>Balance</label></div>
                  <div class="col-xs-4 col-sm-2 text-right"><label>Collateral</label></div>
               </div>
               <div class="assets">
                  <a class="asset" id="supplying" >
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="ctoken ctoken--cETH ctoken--cETH"></span>
                        <div class="balance">
                           <div>Ether</div>
                           <span class="subtitle mobile-only supply_percentage">0%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>0%</div>
                           <span class="subtitle">TBD</span>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>$0</div>
                           <span class="subtitle" id="totsupply" >0 ETH</span>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="mdc-switch mdc-switch--checked">
                           <div class="mdc-switch__track"></div>
                           <div class="mdc-switch__thumb-underlay">
                              <div class="mdc-switch__thumb"><input id="basic-switch" class="mdc-switch__native-control" type="checkbox" role="checkbox"></div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </section>
         </div>
         <section class="asset-list" style="display:none" >
            <span class="panel-label row"><label>All Markets</label><span class="dropdown-icon active"></span></span>
            <div class="governance-panel hideable">
               <div class="governance-panel__labels">
                  <div class="col-xs-4 col-sm-4"><label>Asset</label></div>
                  <div class="col-xs-0 col-sm-3 text-right mobile-hide"><label>APY</label></div>
                  <div class="col-xs-4 col-sm-3 text-right"><label>Wallet</label></div>
                  <div class="col-xs-4 col-sm-2 text-right"><label>Collateral</label></div>
               </div>
               <div class="assets">
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon BAT"></span>
                        <div class="balance">
                           <div>Basic Attention Token</div>
                           <span class="subtitle mobile-only">0.02%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>0.02%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 BAT</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="mdc-switch">
                           <div class="mdc-switch__track"></div>
                           <div class="mdc-switch__thumb-underlay">
                              <div class="mdc-switch__thumb"><input id="basic-switch" class="mdc-switch__native-control" type="checkbox" role="checkbox"></div>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon DAI"></span>
                        <div class="balance">
                           <div>Dai</div>
                           <span class="subtitle mobile-only">16.08%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>16.08%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 DAI</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="mdc-switch">
                           <div class="mdc-switch__track"></div>
                           <div class="mdc-switch__thumb-underlay">
                              <div class="mdc-switch__thumb"><input id="basic-switch" class="mdc-switch__native-control" type="checkbox" role="checkbox"></div>
                           </div>
                        </div>
                     </div>
                  </a>
				  <a class="asset" id="eth_supply_market" >
					<div class="col-xs-4 col-sm-4 identity">
						<span class="icon ETH"></span>
						<div class="balance">
							<div>Ether</div>
							<span id="supply_percentage_mo" class="subtitle mobile-only">0%</span>
						</div>
						</div>
						<div class="col-xs-0 col-sm-3 text-right mobile-hide">
							<div class="balance">
							<div class="supply_percentage" >0%</div>
							</div>
											</div>
					   <div class="col-xs-4 col-sm-3 text-right">
						  <div class="balance">
							 <div id="supply_blalnce" >0 ETH</div>
						  </div>
					   </div>
					   <div class="col-xs-4 col-sm-2 text-right">
						  
								<input id="ether-basic-switch" class="" type="checkbox" role="checkbox">
							 </div>
						  
					</a>
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon USDC"></span>
                        <div class="balance">
                           <div>USD Coin</div>
                           <span class="subtitle mobile-only">1.62%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>1.62%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 USDC</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="mdc-switch">
                           <div class="mdc-switch__track"></div>
                           <div class="mdc-switch__thumb-underlay">
                              <div class="mdc-switch__thumb"><input id="basic-switch" class="mdc-switch__native-control" type="checkbox" role="checkbox"></div>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon USDT"></span>
                        <div class="balance">
                           <div>Compound USDT</div>
                           <span class="subtitle mobile-only">0.00%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>0.00%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 USDT</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right"></div>
                  </a>
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon WBTC"></span>
                        <div class="balance">
                           <div>Wrapped BTC</div>
                           <span class="subtitle mobile-only">0%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>0%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 WBTC</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="mdc-switch">
                           <div class="mdc-switch__track"></div>
                           <div class="mdc-switch__thumb-underlay">
                              <div class="mdc-switch__thumb"><input id="basic-switch" class="mdc-switch__native-control" type="checkbox" role="checkbox"></div>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon ZRX"></span>
                        <div class="balance">
                           <div>0x</div>
                           <span class="subtitle mobile-only">0.03%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>0.03%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 ZRX</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="mdc-switch">
                           <div class="mdc-switch__track"></div>
                           <div class="mdc-switch__thumb-underlay">
                              <div class="mdc-switch__thumb"><input id="basic-switch" class="mdc-switch__native-control" type="checkbox" role="checkbox"></div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </section>
      </div>
      <div id="borrowing-pane" class="col-sm-6">
         <div class="governance-panel">
            <div class="governance-panel__header align-between">
               <h4>Borrowing</h4>
            </div>
            <section class="borrow_collateral" style="display:none" >
               <div class="governance-panel__labels">
                  <div class="col-xs-4 col-sm-4"><label>Asset</label></div>
                  <div class="col-xs-0 col-sm-3 text-right mobile-hide"><label>APY / Accrued</label></div>
                  <div class="col-xs-4 col-sm-3 text-right"><label>Balance</label></div>
                  <div class="col-xs-4 col-sm-2 text-right"><label>% Of Limit</label></div>
               </div>
               <div class="assets">
                  <a class="asset" id="Borrowing" >
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon ETH"></span>
                        <div class="balance">
                           <div>Ether</div>
                           <span class="subtitle mobile-only borrow_percentage">0%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div class="borrow_percentage" >0%</div>
                           <span class="subtitle">TBD</span>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>$0</div>
                           <span class="subtitle" id="totborrow">0 ETH</span>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="progress-holder">
                           <div class="progress">
                              <div role="progressbar" aria-value-now="1.2500723072261841" aria-valuemin="0" aria-valuemax="100" style="width: 1.25007%;" class="progress-bar"></div>
                           </div>
                           <span>0%</span>
                        </div>
                     </div>
                  </a>
               </div>
            </section>
         </div>
         <section class="asset-list" style="display:none" >
            <span class="panel-label row"><label>All Markets</label><span class="dropdown-icon active"></span></span>
            <div class="governance-panel hideable">
               <div class="governance-panel__labels">
                  <div class="col-xs-4 col-sm-4"><label>Asset</label></div>
                  <div class="col-xs-0 col-sm-3 text-right mobile-hide"><label>APY</label></div>
                  <div class="col-xs-4 col-sm-3 text-right"><label>Wallet</label></div>
                  <div class="col-xs-4 col-sm-2 text-right"><label>Liquidity</label></div>
               </div>
               <div class="assets">
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon BAT"></span>
                        <div class="balance">
                           <div>Basic Attention Token</div>
                           <span class="subtitle mobile-only">2.33%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>2.33%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 BAT</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="balance">
                           <div>$78.35M</div>
                        </div>
                     </div>
                  </a>
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon DAI"></span>
                        <div class="balance">
                           <div>Dai</div>
                           <span class="subtitle mobile-only">17.47%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>17.47%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 DAI</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="balance">
                           <div>$3.48M</div>
                        </div>
                     </div>
                  </a>
				 <a class="asset" id="eth_borrow_market">
				   <div class="col-xs-4 col-sm-4 identity">
					  <span class="icon ETH"></span>
					  <div class="balance">
						 <div>Ether</div>
						 <span id="borrow_percentage_mo" class="subtitle mobile-only">21.98%</span>
					  </div>
				   </div>
				   <div class="col-xs-0 col-sm-3 text-right mobile-hide">
					  <div class="balance">
						 <div class="borrow_percentage" >0%</div>
					  </div>
				   </div>
				   <div class="col-xs-4 col-sm-3 text-right">
					  <div class="balance">
						 <div id="borrow_blalnce" >0 ETH</div>
					  </div>
				   </div>
				   <div class="col-xs-4 col-sm-2 text-right">
					  <div class="balance">
						 <div id="totalborrowbalance" >$0</div>
					  </div>
				   </div>
				</a>
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon USDC"></span>
                        <div class="balance">
                           <div>USD Coin</div>
                           <span class="subtitle mobile-only">5.84%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>5.84%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 USDC</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="balance">
                           <div>$24.42M</div>
                        </div>
                     </div>
                  </a>
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon USDT"></span>
                        <div class="balance">
                           <div>Compound USDT</div>
                           <span class="subtitle mobile-only">2.02%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>2.02%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 USDT</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="balance">
                           <div>$765,461,258,533.28M</div>
                        </div>
                     </div>
                  </a>
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon WBTC"></span>
                        <div class="balance">
                           <div>Wrapped BTC</div>
                           <span class="subtitle mobile-only">2.02%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>2.02%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 WBTC</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="balance">
                           <div>$107,306,791,759,194.08M</div>
                        </div>
                     </div>
                  </a>
                  <a class="asset">
                     <div class="col-xs-4 col-sm-4 identity">
                        <span class="icon ZRX"></span>
                        <div class="balance">
                           <div>0x</div>
                           <span class="subtitle mobile-only">2.42%</span>
                        </div>
                     </div>
                     <div class="col-xs-0 col-sm-3 text-right mobile-hide">
                        <div class="balance">
                           <div>2.42%</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 text-right">
                        <div class="balance">
                           <div>0 ZRX</div>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-2 text-right">
                        <div class="balance">
                           <div>$19.03M</div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </section>
      </div>
   </div>
</div>
                    </section>
                </span>
<?php include('footer.php'); ?>             