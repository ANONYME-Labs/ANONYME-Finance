<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

include '../connection.php';

$from_token_name = $_POST['from_token_name'];
$to_token_name = $_POST['to_token_name'];

$sel_qry = "SELECT * FROM `getpairdata` where from_token_name = '".$from_token_name."' AND to_token_name = '".$to_token_name."'";
$result = mysqli_query($conn, $sel_qry);
$count = mysqli_num_rows($result);

$getpairdata = [];
if($count > 0){
  
  $getpairdata = mysqli_fetch_assoc($result);

  echo json_encode($getpairdata);

} else {
  echo json_encode($getpairdata);
}

?>
