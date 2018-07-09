<?php 

include 'dbhelper.php';

$start = isset($_GET['start']) ? $_GET['start'] : 0;
$end = isset($_GET['end']) ? $_GET['end'] : 5;
    
$sql = "select * from list";

$result = query_sql($sql);

$data = json_encode(array_slice($result, $start, $end)); 

echo $data;


?>