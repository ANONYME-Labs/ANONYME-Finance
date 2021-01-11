<?php include 'header.php';?>
<?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1363.2px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 border-bottom pb-3">
          <div class="col-lg-4 col-md-4 col-sm-12 text-center">
            <p class="mb-0">Your Balance in Anonyme</p>
            <h5 class="m-0 supply_blalnce">0000</h5>
          </div>
           <div class="col-lg-4 col-md-4 col-sm-12 text-center">
            <p class="mb-0">Your Wallet Balance</p>
            <h5 class="m-0 walletbalance">0000</h5>
          </div>
           <div class="col-lg-4 col-md-4 col-sm-12 text-center">
            <p class="mb-0">Health factore</p>
            <h5 class="m-0">-</h5>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DEPOSIT</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="card px-3 py-5">
             <div class="row justify-content-center">
               <div class="col-md-7 col-sm-12">
                 <h3 class="text-center text-info">Your balance is <span id="supplybalanceUSD"> $ 0</span></h3>
                 <p class="text-center">Your balance is <span class="supply_blalnce"> 0 <?=ltrim($_COOKIE['currency'],'c');?></span>.</p>
                 <div class="go-back text-center my-3">
					<button class="btn btn-info"  data-toggle="modal" data-target="#supplyWithdraw" >Supply</button>
                    <div class="text-center"><a href="home.php">Go back</a></div>
                 </div>
                </div> 
				 <!--div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Asset</th>
                    <th>APY / Earned</th>
                    <th>Balance</th> 
					 <th>Collateral</th>
                  </tr>
                  </thead>
                   <tbody id="productlist">
						<!--?php
							echo $query2 = "SELECT * FROM currency where (name!='".$_COOKIE['currency']."' and contractABI!='') and (name='BAT' or name='DAI') ";
							$result2 = mysqli_query($conn,$query2);
							$vStr="";
							$i=0;
							
							if($result2){
							while($row = mysqli_fetch_array($result2)){
							
								
								$name = $row['name'];
								$image_url = $row['image_url'];
								$ContractAddress = $row['contractAddress'];
								$ContractABI= $row['contractABI'];
								
								$arrayABI[$i]=$row['name'];
								
								$vStr = $vStr."<tr class='tokenrow' >";
								$vStr = $vStr."<td>";
								$vStr = $vStr . " <a
      onClick=\"document.cookie='currency=".$name."; path=/';location.reload();\" role='menuitem'><img src='".$image_url ."' alt='' class='img-circle img-size-32 mr-2 '>";
								$vStr = $vStr . $name;
								$vStr = $vStr . "</a></td>";
								$vStr = $vStr . '<td>';
								$vStr = $vStr . "<a
      onClick=\"document.cookie='currency=".$name."; path=/';location.reload();\" role='menuitem'><span class='supply_percentage".$name."'>0%</span></a>";
								$vStr = $vStr . "</td>";
								$vStr = $vStr . "<td><a
      onClick=\"document.cookie='currency=".$name."; path=/';location.reload();\" role='menuitem'><span id='CurrentAssetsBAL".$name."' ></span></a></td>";  
								$vStr = $vStr . '<td>';
								$vStr = $vStr . "  <a href='#' class='nav-link'> <span class='badge'><input id='".$name."-ether-basic-switch' class='' type='checkbox' role='checkbox' ></span></a><input type='hidden' name='contractABI".$name."' id='contractABI".$name."' value='".$ContractABI."' /><input type='hidden' name='ContractAddress".$name."' id='ContractAddress".$name."' value='".$ContractAddress."' />";
								$vStr = $vStr . "</td>";					
								$vStr = $vStr . "</tr>";
								
								$i++;
							}
							
							echo $vStr;
							
							echo "<input type='hidden' name='arrayABI' id='arrayABI' value='".implode(',',$arrayABI)."' />";
							
							}else{ echo 'No result found!'; }
						?>
                     </tbody>
                </table>
                 </div--> 
				 <!--div class="or text-center">
                   <span>Or</span>
                 </div>
                 <p class="text-center">Directly purchase this asset via our partners.</p>
                 <p class="text-center">Please make sure your country is eligible for purchase</p>
                 <div class="text-center mb-3">
                   <a href="" class=""><img src="images/logo.png" style="width: 120px;"></a>
                 </div>
                 <div class="text-center"><a href="">Go back</a></div-->
              
             </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card card-widget widget-user-2 shadow-sm">
            <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="images/logo-d.png" alt="User Avatar" style="width: 32px;">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username" style="margin-left: 50px;">Anonyme Reserve Overview</h3>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <!--li class="nav-item">
                    <a href="#" class="nav-link">
                      Utilization rate <span class="float-right badge">73.81%</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Available liquidity <span class="float-right badge">10,031,194.99094 DAI</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Asset price <span class="float-right badge">$ 1</span>
                    </a>
                  </li-->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Deposit APY <span class="supply_percentage float-right badge text-danger">0 %</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Can be used as collateral <span class="float-right badge"><input id="ether-basic-switch" class="" type="checkbox" role="checkbox"></span>
                    </a>
                  </li>
				   <li class="nav-item">
                    <a href="#" class="nav-link">
                      Borrow Limit <span class="float-right badge borrow_limit">$0</span>
                    </a>
                  </li> 
				  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Borrow Limit Used <span class="float-right badge borrow_limit_used">0 %</span>
                    </a>
                  </li>
                  <!--li class="nav-item">
                    <a href="#" class="nav-link">
                      Maximum LTV <span class="float-right badge">75%</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Liquidation threshold <span class="float-right badge">80%</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                     Liquidation threshold <span class="float-right badge">5%</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                     Historical rates <span class="float-right badge ">APY</span>
                    </a>
                  </li-->
                </ul>
              </div>

            </div>
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

 <?php include 'footer.php';?>