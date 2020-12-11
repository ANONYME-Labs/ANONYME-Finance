<?php include 'header.php';?>
<?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1363.2px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-uppercase">Swap</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" id="swap">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col-lg-5">
            <!-- /.card -->

            <div class="card px-3 py-4">
              <div class="col-sm-12">
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" style="border-radius: 50px 0 0 53px;" placeholder="0.0">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="modal" data-target="#coin_option1"><img src="images/eth.png" style="width: 20px;margin-right: 10px;">ETH</button>
                    </div>
                  </div>
              </div>
              <div class="col-sm-12 py-3 text-center">
                <p class="m-0"><i class="fa fa-arrow-down" aria-hidden="true"></i></p>
              </div>
              <div class="col-sm-12">
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" style="border-radius: 50px 0 0 53px;" placeholder="0.0">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="modal" data-target="#coin_option1"><img src="images/eth.png" style="width: 20px;margin-right: 10px;">ETH</button>
                    </div>
                  </div>
              </div>
              <div class="col-sm-12 py-3 text-center">
                <button class="btn btn-info btn-block btn-lg">Connect Wallet</button>
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
            	var vStr='';
                for(i=0;i<data.length;i++)
                {
                	vStr = vStr + '<div class="col-sm-12"><div style="cursor: pointer;"><img src="'+data[i].cURL+'" style="width: 20px;"> <span class="ml-2">'+data[i].cCode+'</span></div></div>';
                }
                $('#displayTokenCoin1').html('');
                $('#displayTokenCoin1').html(vStr);
            },
            error: function (result) {
                alert("Error");
            }
        });

  </script>
  <?php include 'footer.php';?>