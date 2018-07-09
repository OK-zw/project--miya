<?php 

    //开启session
    session_start();
    // $_SESSION["user"] = "111";
    // echo json_encode($_SESSION);
    // $sessSavePath = dirname(__FILE__).’/session/’;
    // echo var_dump(is_writeable(ini_get(“session.save_path”)));

// 引入 dbhelper.php 文件
    include 'dbhelper.php';
    

    $username = !isset($_POST["username"]) ? "" : $_POST["username"];
    $pwd = !isset($_POST["pwd"]) ? "" : $_POST["pwd"];
    
    $sql = "select * from users where username = '$username' and password = '$pwd'";

    
    $result = query_sql($sql);


    if(count($result) > 0){
     
        $_SESSION['user'] = $username;
        echo "{status: true}";
    }
    else{
        echo "{status: false, message: '登入失败'}";
    }


    // $sql2 = "SELECT * FROM users WHERE password = '$password'";
    // $result2 = query_sql($sql2);

    // echo $result2;

    // if(count($result2) < 0){
    //     echo "{status: false, message: '密码错误'}";
    // }



?>