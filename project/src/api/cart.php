<?php

//功能
//1、login.html登入成功 --> 跳转到login.php保存session（登入信息）
//2、到index.php中验证登入信息是否存在
    
    
    session_start();

    // echo $_SESSION['user']

    //判断是否有登录信息
    if(!isset($_SESSION['user'])){
        header("Location: ../html/login.html");
        exit;
    };

    if(isset($_SESSION['user'])){
        header("Location: ../html/cart.html");
        exit;
    };


?>
