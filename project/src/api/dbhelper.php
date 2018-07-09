<?php 
    function conn(){
        $servername = "localhost"; // 数据库的主机
        $serverAccount = "root"; // 登录数据库的用户名
        $serverPwd = "root"; // 登录数据库的密码
        $database = "miya"; // 要连接的数据库

        $conn = new mysqli($servername, $serverAccount, $serverPwd, $database);
        $conn->set_charset('utf8');
        //判断是否连接出错
        if($conn->connect_error){
            echo('连接数据库错误');
            return null;
        }
        return $conn;
    }

    //执行逻辑操作
    function exec_sql($sql){
        $conn = conn();
        //insert
        //不需要释放内存(insert into, update, delete)
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    //执行查询操作
    function query_sql($sql){
        $conn = conn();
        $result = $conn->query($sql);
        //定义一个空数组
        $dataset = array();

        while($row = $result->fetch_assoc()){
            $dataset[] = $row;
        }

        $result->free();
        $conn->close();
        return $dataset;
    }
?>