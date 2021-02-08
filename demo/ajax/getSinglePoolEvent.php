<?php 
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

include '../connection.php';

$dbid = $_POST['dbid'];

  $selQuery = "SELECT * FROM events_poolpairs WHERE id = '".$dbid."' ";
  $result = mysqli_query($conn, $selQuery);
  $count = mysqli_num_rows($result);

  $data = [];
  
  if($count > 0){
    
    $row = mysqli_fetch_assoc($result);
    $data = $row; 
  }
  
  echo json_encode($data);
  