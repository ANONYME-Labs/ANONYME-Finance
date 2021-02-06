<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

include '../connection.php';

$getPairAddress = $_POST['getPairAddress'];
$getPairABI = $_POST['getPairABI'];
$from_token_name = $_POST['from_token_name'];
$to_token_name = $_POST['to_token_name'];
$from_token_address = $_POST['from_token_address'];
$to_token_address = $_POST['to_token_address'];

$query = "INSERT INTO `getpairdata` (getPairAddress, getPairABI, from_token_name, to_token_name, from_token_address, to_token_address)";
$query .= " VALUES ('".$getPairAddress."','".$getPairABI."','".$from_token_name."','".$to_token_name."','".$from_token_address."','".$to_token_address."');";
mysqli_query($conn, $query);