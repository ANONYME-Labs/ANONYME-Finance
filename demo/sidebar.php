<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <a href="#" class="brand-link">
      <img src="images/logo-d.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-weight: 800!important;">ANONYME</span>
    </a>
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info" style="width: 100%;">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle btn-block btnwalletaddress" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: rgba(255,255,255,.1);">

            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Mainnet Ethereum Network</a>
              <p>0x891967Abb9574EF74eE69FbDF43C3eF0b049DDD5</p>
              <a class="dropdown-item" href="#">Disconnect</a>
            </div>
          </div>
        </div>
      </div>


    <?php  
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    $cpage_name = explode('.', $curPageName)[0];  
    ?>   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($cpage_name == 'home') { echo 'menu-open'; } ?>">
            <a href="home.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item <?php if($cpage_name == 'dashboard') { echo 'menu-open'; } ?>">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item <?php if($cpage_name == 'swap') { echo 'menu-open'; } ?>">
            <a href="swap.php" class="nav-link">
              <i class="nav-icon fa fa-retweet"></i>
              <p>
                Swap
              </p>
            </a>
          </li>
          <li class="nav-item <?php if($cpage_name == 'pool') { echo 'menu-open'; } ?>">
            <a href="pool.php" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Pool
              </p>
            </a>
          </li>

          <li class="nav-item <?php if($cpage_name == 'chart') { echo 'menu-open'; } ?>">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fa fa-line-chart"></i>
              <p>
                Chart
              </p>
            </a>
          </li>
          <li class="nav-item <?php if($cpage_name == 'alldeposit') { echo 'menu-open'; } ?>">
            <a href="alldeposit.php" class="nav-link">
              <i class="nav-icon fas fa-wallet"></i>
              <p>
                Deposit
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fa fa-money"></i>
              <p>
                Loan
              </p>
            </a>
          </li> -->
          <li class="nav-item <?php if($cpage_name == 'staking') { echo 'menu-open'; } ?>">
            <a href="staking.php" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Staking
              </p>
            </a>
          </li>
          <li class="nav-item <?php if($cpage_name == 'gov') { echo 'menu-open'; } ?>">
            <a href="gov.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
               Governance
              </p>
            </a>
          </li>
          <li class="nav-item <?php if($cpage_name == 'allborrows') { echo 'menu-open'; } ?>">
            <a href="allborrows.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                BORROW
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
