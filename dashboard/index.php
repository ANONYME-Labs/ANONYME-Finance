<?php include('header.php'); ?>
                <span>
                    <section id="borrow-overview" class="hero">
                        <div class="balance-totals">
                            <div class="content">
                                <div class="row align-middle mobile-hide">
                                    <div class="col-xs-5 text-center">
                                        <label class="supply">Supply Balance</label>
                                        <div class="headline headline--loading">$0</div>
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
                                                <div class="headline headline--loading">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 text-center">
                                        <label class="borrow">Borrow Balance</label>
                                        <div class="headline headline--loading">$0</div>
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
                                                <div class="headline headline--loading">$0</div>
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
                                        <div class="governance-panel__header align-between"><h4>Supply Markets</h4></div>
                                    </div>
                                </div>
                                <div id="borrowing-pane" class="col-sm-6">
                                    <div class="governance-panel">
                                        <div class="governance-panel__header align-between"><h4>Borrow Markets</h4></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </span>
<?php include('footer.php'); ?>             