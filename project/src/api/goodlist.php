<?php 

    include 'dbhelper.php';
    
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $qty = isset($_GET['qty']) ? $_GET['qty'] : 18;


    // echo "{$page}";

    $sql = "select * from goods ";
    $result = query_sql($sql);

//数组Array
    // echo $result;

    $data = array_slice($result,($page-1)*$qty,$qty);

//标准数据格式
    $res = array( 
            'total' => count($result),
            'page'=>$page*1,
            'qty'=>$qty*1,
            'data'=>$data
        );

    $rr = json_encode($res,JSON_UNESCAPED_UNICODE);




//传出数组对象(有传送功能)
    echo "{$rr}";
   
 



?>