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
          <div class="col-lg-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header1 border-0">
                <!-- <div class="btn-group">
                  <button type="radio" class="btn btn-default">Deposit</button>
                  <button type="radio" class="btn btn-default">Borrowing</button>
                </div>
                 -->

                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn active" role="button">
                      <input type="radio" name="options" value="1" required>DEPOSIT
                    </label>
                    <label class="btn" role="button">
                      <input type="radio" name="options" value="0">BORROWINGS
                    </label>
                  </div>
              </div>
              <div class="card-body py-5">
                <div class="row justify-content-md-center">
                  <div class="col-md-4">
                    <div class="card card-min-height">
                      <div class="card-header text-center">
                        <h3 class="card-title text-center">
                          <i class="fas fa-text-width"></i>
                          No deposits yet
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body text-center">
                        <p>
                          There will be a list of all the assets you deposited and you are earning on. For now it’s empty until you start to deposit.
                        </p>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#supplyWithdraw">Deposit Now</button>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <div class="col-md-4">
                    <div class="card card-min-height">
                      <div class="card-header text-center">
                        <h3 class="card-title text-center">
                          Can’t see your deposits?
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body text-center">
                        <p class="mb-5">
                          Please switch to one of the available markets: proto,<a href="#">uniswapin</a> the bottom right.
                        </p>
                        <img src="images/logo.png" alt="" class="jsx-3778513761" style="width: 100px;">
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
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

  <?php include 'footer.php';?>