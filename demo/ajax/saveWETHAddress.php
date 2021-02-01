<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../connection.php';

$WETHAddress = $_POST['WETHAddress'];
$query = "UPDATE adminsetting SET WETHAddress='".$WETHAddress."'";
mysqli_query($conn, $query);