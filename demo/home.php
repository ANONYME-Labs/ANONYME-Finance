<?php include 'header.php';?>
<?php include 'sidebar.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1363.2px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v3</h1>
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
                    <th>Deposit API</th>
                    <th>
                      <span>Variable</span>
                      <p>Borrow APR</p>
                    </th>
                    <th>
                      <span>Stable</span>
                      <p>Borrow APR</p>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <img src="https://app.aave.com/static/media/dai.59d423e0.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
                      DAI
                    </td>
                    <td><span>$13 USD</span></td>
                    <td><span>$13 USD</span></td>
                    <td><span>$13 USD</span></td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        12%
                      </small>
                      12,000 Sold
                    </td>
                    <td>
                      <span>20.60%</span>
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

  <!-- Main Footer -->
 <?php include 'footer.php';?>