<?php 
    
//引入 php文件
    include 'dbhelper.php';

//通过post获取内容  
    $username = !isset($_POST['username']) ? "" : $_POST['username'];
    $pwd = !isset($_POST['pwd']) ? "" : $_POST['pwd'];


//判断注册内容是否为空
    if($username == "" || $pwd == ""){
        echo "{status: false, message: '注册内容不能为空'}";
    }



//判断当前注册的用户是否存在，如果存在则不能再次注册
    $sql = "select * from users where username = '$username'";

    $result = query_sql($sql);



    if(count($result) > 0){
        echo "{status: false, message: '用户名已经注册'}";
    }
    else{

    //插入注册的信息到数据库
        $sql = "insert into users(username, password) values('$username', '$pwd')";

        $result = exec_sql($sql);

        if($result){
            echo "{status: true}";
        }
        else{
            echo "{status: false, message:'注册失败'}";
        }
        // echo json_encode($result);
    }; 

?>