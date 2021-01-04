<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en" style="height: auto;" class=""><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anonyme – Lend, Borrow And Swap</title>

  <!-- Google Font: Source Sans Pro -->
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
  <link rel="stylesheet" href="dist/css/style.css">
<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}

.h1{
    font-size: 40px;
    background: -webkit-linear-gradient(#c101ff, #dd13a8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
}
a {
    color: #ffffff;

}
.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
} 
.badge {
  font-size: 100%;
}

[class*=sidebar-dark-] {
    background-color: rgb(56, 61, 81);
}

.card-min-height{
  min-height: 280px;
}
.btn{
  border-radius: 30px;
}
.dark-mode .card .card {
    background-color: #2b2d3c;
    color: #fff;
}
.dark-mode .content-wrapper {
    background-color: #2b2d3c;
    color: #fff;
}
.dark-mode .card {
    color: #fff;
    background: #383d51;
}
.PoolSelectButton.jsx-3197832361 {
    background: rgb(241, 241, 243);
}

.SwitchMarketPanel__button {
    margin: 10px;
}

.switch-market{
  padding: 0 30px 0 30px;
  font-size: 16px;
  border-radius: 4px;
  background: white;
  color: #686565;
}



.card-header1 .btn-group { 
  border-radius: 30px!important;
  background-color: var(--gray-dark);
  padding: 6px;

}

.card-header1,.btn-group .btn{
  transition: all 0.4s ease 0s;
    padding: 6px 15px 6px 15px;
    width: 140px;


    
}
/*.card {
  margin-top: 1em;
}*/

.card-header1 .form-control {
  border: none;
}

.control-label {
  margin: .5em 1em 0;
}

</style>

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
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