<?php include 'header.php';?>
<?php include 'sidebar.php';?>

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
    <div class="content" id="swap">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col-lg-6">
            <!-- /.card -->

            <div class="card p-3 mb-3">
              <p>Liquidity provider rewards</p>
              <p>Liquidity providers earn a 0.3% fee on all trades proportional to their share of the pool. Fees are added to the pool, accrue in real time and can be claimed by withdrawing your liquidity.</p>
              <a href="#">Read more about providing liquidity</a>
            </div>

            <div class="row mb-5">
              <div class="col-lg-6">
                <h3>Your liquidity</h3>
              </div>
              <div class="col-lg-6">
                <a href="#" class="btn btn-outline-info btn-lg" role="button" aria-pressed="true" data-toggle="modal" data-target="#coin_option2">Create a pair</a>
                <a href="#" class="btn btn-info btn-lg" role="button" aria-pressed="true">Add Liquidity</a>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-12 text-center">
                <p>Connect to a wallet to view your liquidity.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <p>Don't see a pool you joined?<a href=""> Import it.</a></p>
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
	 
$(document).ready(function(){

	
	$("#btnPoolFromToken").click(function(){
  		//$('#coin_option2').modal('hide');
  	});

  	$("#btnPoolToToken").click(function(){
  		//$('#coin_option2').modal('hide');
  	});

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
                	vStr = vStr + '<div class="col-sm-12"><div class="clstok" style="cursor: pointer;"><img src="'+data[i].cURL+'" style="width: 20px;"> <span class="ml-2">'+data[i].cCode+'</span></div></div>';
                }
                $('#displayTokenFrom').html('');
                $('#displayTokenFrom').html(vStr);
                $("#displayTokenFrom .clstok").click(function(){
			  		var vSelectedToken = $(this).find(".ml-2").text();
			  		var vSelectedTokenImg = $(this).find("img").prop('src');
			  		$('#spnPoolFromToken').text(vSelectedToken);
			  		$('#imgPoolFromToken').attr('src',vSelectedTokenImg);
			  		$('#from_token_pop').modal('hide');
			  	});

                $('#displayTokenTo').html('');
                $('#displayTokenTo').html(vStr);
                $("#displayTokenTo .clstok").click(function(){
			  		var vSelectedToToken = $(this).find(".ml-2").text();
			  		var vSelectedToTokenImg = $(this).find("img").prop('src');
			  		$('#spnPoolToToken').text(vSelectedToToken);
			  		$('#imgPoolToToken').attr('src',vSelectedToTokenImg);
			  		$('#to_token_pop').modal('hide');
			  	});

                //$('#displayTokenCoin3').html('');
                //$('#displayTokenCoin3').html(vStr);
            },
            error: function (result) {
                alert("Error");
            }
        });
});
  </script>

  <?php include 'footer.php';?>