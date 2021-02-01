<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../connection.php';

$getPairAddress = $_POST['getPairAddress'];
$getPairABI = $_POST['getPairABI'];

$query = "UPDATE adminsetting SET getPairAddress='".$getPairAddress."', getPairABI='".$getPairABI."'";
mysqli_query($conn, $query);
