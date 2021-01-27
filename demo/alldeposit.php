<?php include 'header.php';?>
<?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1363.2px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Deposit</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <!-- /.card -->

            <div class="card1">
              <div class="card-header border-0">
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-12">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn active" role="button">
                      <input type="radio" name="options" value="1" required>DEPOSIT
                    </label>
                    <label class="btn" role="button">
                      <input type="radio" name="options" value="0">BORROWINGS
                    </label>
                  </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-12">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="nav-icon fa fa-search"></i></button>
                    </div>
                  </div>
                  </div>
                </div>
                  
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-3 col-12">
                    <b>Asset</b>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <b>Your wallet balance</b>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <b>Your balance in Anonyme</b>  
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <b>APY</b> 
                  </div>
                   
                </div>
            </div>
			<?php
							$query2 = "SELECT * FROM currency where (contractABI!='') ";
							$result2 = mysqli_query($conn,$query2);
							
							$i=0;
							
							if($result2){
							while($row = mysqli_fetch_array($result2)){
							
								
								$name = $row['name'];
								$ABI[$i]=$row['name'];
								
								if($name=='BAT' || $name=='DAI' || $name=='cETH'){
									
			?>
			<input type='hidden' name='assetcontractABI<?=$row['name'];?>' id='assetcontractABI<?=$row['name'];?>' value='<?=$row['contractABI']; ?>' /><input type='hidden' name='assetContractAddress<?=$row['name'];?>' id='assetContractAddress<?=$row['name'];?>' value='<?=$row['contractAddress'];?>' />
            <div class="card TableItem">
              <div class="card-body" style="padding: 1rem!important;">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <div>
						
                        <img src="<?=$row['image_url']; ?>" style="width: 20px;">
                        <span><b class="ml-2"> <?=$row['name'];?></b></span>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <div>
                      <span><b class="mr-1 supply_balancec<?=ltrim($name, 'c');?>">0.0000 <?=$row['name'];?></b></span>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <div>
                      <span><b class="mr-1 supply_balance_Anonymec<?=ltrim($name, 'c');?>">0.0000 <?=$row['name'];?></b></span>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <div>
                      <span><b class="supply_percentagec<?=ltrim($name, 'c');?> text-danger" style="line-height: 30px;">0%</b></span>
					  <?php 
				       if($name!='cETH'){
						$queryInner = "SELECT * FROM currency where (name='c".$name."' and contractABI!='') ";
					   }else{
						 $queryInner = "SELECT * FROM currency where (name='".$name."' and contractABI!='') ";  
					   }
							$resultInner = mysqli_query($conn,$queryInner);
							
							
							
							if($resultInner){
							while($rowInner = mysqli_fetch_array($resultInner)){
								
								$ContractAddress = $rowInner['contractAddress'];
							    $ContractABI= $rowInner['contractABI'];
								$arrayABI[$i]=$rowInner['name'];
							    
						?>
						<input type='hidden' name='contractABI<?=$rowInner['name'];?>' id='contractABI<?=$rowInner['name'];?>' value='<?=$ContractABI; ?>' /><input type='hidden' name='ContractAddress<?=$rowInner['name'];?>' id='ContractAddress<?=$rowInner['name'];?>' value='<?=$ContractAddress;?>' />
						<?php
						
							   
							}
							}
						?>
                      <button type="button" onclick="deposit('<?=$row['name'];?>');" class="btn btn-outline-info btn-sm" style="min-width: 100px;max-width: 100px;float: right;">Details</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			 <?php
								 $i++;	
								}
							}
							
						}
						echo "<input type='hidden' name='arrayABI' id='arrayABI' value='".implode(',',$arrayABI)."' />";
						echo "<input type='hidden' name='ABI' id='ABI' value='".implode(',',$ABI)."' />";
			?>
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