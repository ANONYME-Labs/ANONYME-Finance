<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../connection.php';

$sel_qry = "SELECT * FROM `events_poolpairs` ";
$result = mysqli_query($conn, $sel_qry);
$count = mysqli_num_rows($result);

        $totalCol = $_POST['iColumns'];
        $search = $_POST['sSearch'];
        $columns = explode(',', $_POST['columns']);

        $start = $_POST['iDisplayStart'];
        $page_length = $_POST['iDisplayLength'];
       

        $selQuery = "SELECT * FROM events_poolpairs";
        $result = mysqli_query($conn, $selQuery);
        $totalRecords = mysqli_num_rows($result);
        
        if($search != ''){
          $selQuery .= " WHERE (transactionHash LIKE '%".$search."%' ";
          $selQuery .= " OR gasPrice LIKE '%".$search."%' ";
          $selQuery .= " OR gasUsed LIKE '%".$search."%' ";
          $selQuery .= " OR transactionHash LIKE '%".$search."%' ";
          $selQuery .= " OR timeStamp LIKE '%".$search."%' ";
          $selQuery .= " OR topic0 LIKE '%".$search."%' ";
          $selQuery .= " OR topic1 LIKE '%".$search."%') ";
        }

        $selQuery .= " ORDER BY ";
        $selQuery .= " timeStamp desc";

        if ($start != '' && $page_length != '') {
            $selQuery .= " LIMIT " . $start . ", " . $page_length;
        }        

        $result_limit = mysqli_query($conn, $selQuery);
        
        //echo $selQuery;exit;
        $data = [];
        while ($row = mysqli_fetch_assoc($result_limit)) {

          $timeStamp = date('Y-m-d h:i:s', $row['timeStamp']);
          $row['timeStamp'] = $timeStamp;

          $data[] = $row;
        }        

        echo json_encode(array(
            "aaData" => $data,
            "iTotalDisplayRecords" => $totalRecords,
            "iTotalRecords" => $totalRecords,
            "sColumns" => $_POST['sColumns'] ,
            "sEcho" => $_POST['sEcho']

        ));