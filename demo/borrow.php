<?php include 'header.php';?>
<?php include 'sidebar.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1363.2px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">BORROW</h1>
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
                      <input type="radio" name="options" value="1" required>All
                    </label>
                    <label class="btn" role="button">
                      <input type="radio" name="options" value="0">Stable Coins
                    </label>
                  </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                    <tr>
                      <th>Assets</th>
                      <th>Available for you</th>
                      <th>Variable APR</th>
                      <th>Stable APR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="https://app.aave.com/static/media/dai.59d423e0.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
                        DAI
                      </td>
                      <td><span>$13 DAI</span></td>
                      <td><span>$13 DAI</span></td>
                      <td><span>7.12%</span></td>
                      <td>
                        <button class="btn btn-block btn-outline-primary">Details</button>
                      </td>
                    </tr>
                   
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
<?php include 'footer.php';?>
  <!-- Main Footer -->
 
