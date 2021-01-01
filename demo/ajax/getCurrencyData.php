<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../connection.php';

$data = [];

if(isset($_POST['tokenname']) && $_POST['tokenname'] != ''){

	$tokenname = $_POST['tokenname'];

	$sel_qry = "SELECT * FROM `currency` where name='".$tokenname."' AND contractABI != '' ORDER BY contractABI DESC";
	$result = mysqli_query($conn, $sel_qry);
	$cur_count = mysqli_num_rows($result);
	
	if($cur_count > 0){

		$currency_data = [];
		$currency_data = mysqli_fetch_assoc($result);

		$data['status'] = '1';
		$data['message'] = 'Please select token name.';
		$data['data'] = $currency_data;

	} else {

		$data['status'] = '0';
		$data['message'] = 'Token name not found in databse.';
		
	}

} else {
	$data['status'] = '0';
	$data['message'] = 'Please select token name 1.';
}

echo json_encode($data);

/*

echo '<pre>'; print_r($row); echo '</pre>';

$sel_qry = "SELECT * FROM `currency` where name='".$tok['symbol']."'";
$result = mysqli_query($conn, $sel_qry));
$cur_count = mysqli_num_rows($result);

if($cur_count > 0){

	while ($row = mysqli_fetch_assoc($result)) {
		
		echo '<pre>';print_r($row);echo '</pre>';

	}

}
*/