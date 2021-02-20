<?php include 'header.php';?>
<?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1363.2px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!--<div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <!-- /.card >
            <div class="card p-3">
              <canvas id="visitors-chart" height="200"></canvas>
            </div>
            <!-- /.card >
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <!-- /.card >
            <div class="card p-3">
              <canvas id="visitors-chart1" height="200"></canvas>
            </div>
            <!-- /.card >
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <!-- /.card >
            <div class="card p-3">
              <canvas id="visitors-chart2" height="200"></canvas>
            </div>
            <!-- /.card >
          </div-->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <!-- /.card -->
            <div class="card p-3">
              <div class="row mb-3">
                <div class="col-sm-12 card-header1">
                  <div class="btn-group btn-group-toggle px-4" data-toggle="buttons">
                    <span style="">
                      Reserve size
                    </span>
                    <span style="float: right;margin-left: 20px; font-weight: 800;" id="totResUsd" >
                      -
                    </span>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-12 text-center">
                  <h5 id="UtilizationRate" >-</h5>
                  <p>
                    Utilisation rate
                  </p>
                </div>
              </div> 
              <div class="row mb-3">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                  <p class="mb-0" style="font-size: 16px;">Available Liquidity</p>
                  <h3 style="font-weight: 800;" id="availableLiq" >-</h3>
                  <p class="mb-0" id="availableLiqUSD">-</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
				  <div id="chartContainer" style="height: 147px; max-width: 296px; margin: 0px auto;"></div>
                  <!--canvas id="pieChart" height="147" width="296" class="chartjs-render-monitor" style="display: block; height: 118px; width: 237px;"></canvas-->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                  <p class="mb-0" style="font-size: 16px;">Total Borrowed</p>
                  <h3 style="font-weight: 800;" id="totB" >-</h3>
                  <p class="mb-0" id="totBorrUsd" >-</p>
                </div>
              </div>
              <div class="row justify-content-center mb-3">
                <div class="col-md-4">
                  <div class="card card-widget widget-user-2 shadow-sm">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header bg-danger pt-2 pb-0">
                        <h5 class="text-center" style="font-size: 16px; color: white;">Deposit</h5>
                      </div>
                      <div class="card-footer p-0">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              Deposit APY <span class="supply_percentage float-right badge bg-primary">-</span>
                            </a>
                          </li>
                          <!--li class="nav-item">
                            <a href="#" class="nav-link">
                              Past 30D Avg. <span class="float-right badge bg-info">-</span>
                            </a>
                          </li-->
                        </ul>
                      </div>
                    </div>
                </div>
                <!--div class="col-md-3">
                  <div class="card card-widget widget-user-2 shadow-sm">
                      <!-- Add the bg color to the header using any of the bg-* classes >
                      <div class="widget-user-header bg-success pt-2 pb-0">
                        <h5 class="text-center" style="font-size: 16px; color: white;">Stable borrowing</h5>
                      </div>
                      <div class="card-footer p-0">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              Borrow APR <span class="float-right badge bg-primary">31%</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              % over total <span class="float-right badge bg-success">12%</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                </div-->
                <div class="col-md-4">
                  <div class="card card-widget widget-user-2 shadow-sm">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header bg-info pt-2 pb-0">
                        <h5 class="text-center" style="font-size: 16px; color: white;">Variable borrowing</h5>
                      </div>
                      <div class="card-footer p-0">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              Borrow APR <span class="borrow_percentage float-right badge bg-primary">-</span>
                            </a>
                          </li>
                          <!--li class="nav-item">
                            <a href="#" class="nav-link">
                              Past 30D Avg. <span class="float-right badge bg-info">-</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              % over total <span class="float-right badge bg-success">-</span>
                            </a>
                          </li-->
                        </ul>
                      </div>
                    </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-sm-3 border-right">
                    <div class="description-block">
                      <h5 class="description-header" id="collateralFactor" >-</h5>
                      <span class="description-text"   >Maximum LTV</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <!--div class="col-sm-3 border-right">
                    <div class="description-block">
                      <h5 class="description-header">-</h5>
                      <span class="description-text">Liquidation threshold</span>
                    </div>
                    <!-- /.description-block >
                  </div>
                  <div class="col-sm-3 border-right">
                    <div class="description-block">
                      <h5 class="description-header">-</h5>
                      <span class="description-text">Liquidation penalty</span>
                    </div>
                    <!-- /.description-block >
                  </div-->
                  <!-- /.col -->
                  <div class="col-sm-3">
                    <div class="description-block">
                      <h5 class="description-header testcollateral">-</h5>
                      <span class="description-text">Used as collateral</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <!-- /.card -->
            <div class="card card-widget widget-user-2 shadow-sm">
            <!-- Add the bg color to the header using any of the bg-* classes -->
             
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <h3 class="widget-user-username ml-3 text-info">Borrows</h3>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Borrowed <span class="float-right badge" id="totborrow" >-</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Health factor <span class="float-right badge">-</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Loan to value<span class="float-right badge text-danger borrow_limit_used">0%</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Available to you <span class="float-right badge borrow_limit">-</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <h3 class="widget-user-username ml-3 text-info">Deposits</h3>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Your wallet balance <span class="float-right badge walletbalance">-</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                     You already deposited<span class="float-right badge supply_blalnce">-</span>
                    </a>
                  </li>
                </ul>
                <div class="text-center py-3">
                  <button type="button" class="btn btn-primary btn-sm ml-2" onclick="deposit('<?=$_COOKIE['currency'];?>');" >Deposit</button>
                  <button type="button" class="btn btn-default btn-sm ml-2" onclick="borrow('<?=$_COOKIE['currency'];?>');" id="BorrowDes" >Borrow</button>
                  <button type="button" class="btn btn-outline-secondary btn-sm ml-2">Withdraw</button>
                  <button type="button" class="btn btn-outline-secondary btn-sm">Repay</button>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>


      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->

  <?php include 'footer.php';?>

