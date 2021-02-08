<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

include '../connection.php';

$data = [];
//echo json_encode(count($_POST['tokenname']));exit;

if(isset($_POST['tokenname']) && $_POST['tokenname'] != '' && count($_POST['tokenname'])>0){

	for($i=0;$i<count($_POST['tokenname']);$i++){
		$tokenname = $_POST['tokenname'][$i];

		$sel_qry = "SELECT * FROM `currency` where name='".$tokenname."' AND contractABI != '' ORDER BY contractABI DESC";
		$result = mysqli_query($conn, $sel_qry);
		$cur_count = mysqli_num_rows($result);

		if($cur_count > 0){

			$currency_data = [];
			$currency_data = mysqli_fetch_assoc($result);

			$data[$i]['status'] = '1';
			$data[$i]['message'] = '';
			$data[$i]['data'] = $currency_data;

		} else {

			$data[$i]['status'] = '0';
			$data[$i]['message'] = 'Token name not found in databse.';

		}
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
