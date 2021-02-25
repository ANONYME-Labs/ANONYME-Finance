<?php 

include 'connection.php';
include 'config.php';

$userWallet = '';
if (isset($_COOKIE['userWallet']) && $_COOKIE['userWallet'] != '') {
    $userWallet = $_COOKIE['userWallet'];
}

$toggle_expert_mode = '';
if (isset($_COOKIE['toggle_expert_mode']) && $_COOKIE['toggle_expert_mode'] != '') {
    $toggle_expert_mode = $_COOKIE['toggle_expert_mode'];
}

$disable_multihops = '';
if (isset($_COOKIE['disable_multihops']) && $_COOKIE['disable_multihops'] != '') {
    $disable_multihops = $_COOKIE['disable_multihops'];
}

$slip_tlrance_txt = '';
if (isset($_COOKIE['slip_tlrance_txt']) && $_COOKIE['slip_tlrance_txt'] != '') {
    $slip_tlrance_txt = $_COOKIE['slip_tlrance_txt'];
}

?>
<!DOCTYPE html>
<html lang="en" style="height: auto;" class="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anonyme – Lend, Borrow And Swap</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/style.css?<?php echo time()?>">

    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/alertify.min.css" />
    <link rel="stylesheet" type="text/css" href="css/dd.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
  
    <script type="text/javascript">

      var routerContractAddress = "<?php echo $routerContractAddress; ?>";
      var routerContractABI = <?php echo $routerContractABI; ?>;
      var WETHAddress = "<?php echo $WETHAddress; ?>";

      var factoryContractAddress = "<?php echo $factoryContractAddress; ?>";
      var factoryContractABI = <?php echo $factoryContractABI; ?>;

      var network = <?php echo $network; ?>;

      var etherscan_api_url = '';
      if (network == 0) {
          etherscan_api_url = "http://api-rinkeby.etherscan.io/";
      } else {
          etherscan_api_url = "http://api.etherscan.io/";
      }

      var slip_tlrance_txt = "<?php echo $slip_tlrance_txt; ?>";

      var etherscanTx = "<?= $etherscanTx; ?>";

  </script>

  <input type="hidden" name="WETHAddress" id="WETHAddress" value="<?php echo $WETHAddress; ?>">
  <input type="hidden" name="login_user_wallet" id="login_user_wallet" value="<?php echo $userWallet; ?>" />
</head>

<body class="sidebar-mini dark-mode control-sidebar-slide-open" data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="" style="height: auto;">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-gray-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
