
<?php include 'header.php';?>
<?php include 'sidebar.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1363.2px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
              <p>Current market size</p>
              <h1 class="h1">$ 1,611,810,651.44</h1>
          </div><!-- /.col -->
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

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Products</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Active</th>
                    <th>Market-Size</th>
                    <th>Total Borrowed</th>
                    <th>Deposit APY</th>
                    <th>
                      <span>Variable</span>
                      <p>Borrow APR</p>
                    </th>
                    <th>
                      <span>Stable</span>
                      <p>Borrow APR</p>
                    </th>
					 <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="showtokenlist">
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
                  <tr>
                    <td>
                      <img src="<?=$row['image_url']; ?>" alt="Product 1" class="img-circle img-size-32 mr-2">
                      <?=$row['name'];?>
                    </td>
                    <td><span>-</span></td>
                    <td><span class="totalborrowc<?=ltrim($name, 'c');?>" >0.00 USD</span></td>
                    <td><span class="supply_percentagec<?=ltrim($name, 'c');?>" >0%</span></td>
                    <td>
                      <span class="borrow_percentagec<?=ltrim($name, 'c');?>">0%</span>                     
                    </td>
                    <td>
                      <span>-</span>
                    </td>                  
				  <td>
                   <span><button class="btn btn-info"  onclick="deposit('<?=$row['name'];?>');" >Deposit</button> &nbsp;&nbsp;<button class="btn btn-info" onclick="borrow('<?=$row['name'];?>');" >Borrow</button></span>
                   </td>
				   <td> <?php 
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
					</td>
				   </tr>
				  
				   <?php
								 $i++;	
								}
							}
							
						}
						echo "<input type='hidden' name='arrayABI' id='arrayABI' value='".implode(',',$arrayABI)."' />";
						echo "<input type='hidden' name='ABI' id='ABI' value='".implode(',',$ABI)."' />";
				   ?>
                  </tbody>
                </table>
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
<script>

	$.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: 'getTokens.php',
            data: "{}",
            dataType: "json",
            success: function (data) {
				
				console.log(data);
				
            	var vStr='';
                for(i=0;i<data.length;i++)
                {
					if(data[i].cCode=='BAT' || data[i].cCode=='DAI' || data[i].cCode=='cETH'){
                	vStr =vStr + '<tr data-address="'+data[i].tokenaddress+'" class="tokenrow" >';
                    vStr = vStr + '<td>';
                    vStr = vStr + ' <img  src="'+data[i].cURL+'" alt=""  class="img-circle img-size-32 mr-2 ">';
                    vStr = vStr + data[i].cCode ;
                    vStr = vStr + '</td>';
                    vStr = vStr + '<td><span>$13 USD</span></td>';
                    vStr = vStr + '<td><span>$13 USD</span></td>';
                    vStr = vStr + '<td><span>$13 USD</span></td>';
                   vStr = vStr + ' <td>';
                    vStr = vStr + '  <small class="text-success mr-1">';
                    vStr = vStr + '    <i class="fas fa-arrow-up"></i>';
                    vStr = vStr + '    12%';
                    vStr = vStr + '  </small>';
                    vStr = vStr + '  12,000 Sold';
                   vStr = vStr + ' </td>';
                    vStr = vStr + '<td>';
                    vStr = vStr + '  <span>20.60%</span>';
                    vStr = vStr + '</td>';
					 vStr = vStr + '<td>';
                    vStr = vStr + '  <span><button class="btn btn-info"  onclick="deposit(\''+data[i].cCode+'\');" >Deposit</button> &nbsp;&nbsp;<button class="btn btn-info" onclick="borrow(\''+data[i].cCode+'\');" >Borrow</button></span>';
                    vStr = vStr + '</td>';
                  vStr = vStr + '</tr>';
				}

                }
               // $('#showtokenlist').html('');
               // $('#showtokenlist').html(vStr);
               /* $(".tokenrow").click(function(){
                  var vadd= $(this).attr('data-address');
                  location.href='overview.php?address='+vadd;

                });*/
            },
            error: function (result) {
                alert("Error");
            }
        });
		
		

  </script>
  <!-- Main Footer -->
  <?php include('config.php'); ?>
 <?php include 'footer.php';?>
