require.config({
    paths: {
        'jquery': 'jquery-3.3.1',
        'confirm': '../jquery-confirm/jquery-confirm'
    },
    shim: {
        'confirm': "jquery"
    }
})

//二次封装ajax

define(['jquery', 'confirm'], function($,confirm){
    var baseUrl = "http://localhost:86/project/src/";
    function filterUrl(_url){
        if(_url.startsWith('http')){
            return _url;
        }
        return baseUrl + _url;
    }

    return{
        get: function(_url, _data){
            return new Promise(function(resolve, reject){
                $.ajax({
                    url: _url,
                    data: _data || {},
                    beforeSend: function(){
                        if(!/^1[3-9][\d]{9}$/.test($('#username').val())){
                        alert("手机号码不是你这样写的")
                        return false;
                    }

                        if($('#pwd').val() == ""){
                        alert("请输入密码")
                        return false;
                    }
                },
                    success: function(res){
                        resolve(res);
                    },
                    error: function(error){
                        reject(error);
                    }
                })
            })
            
        },
        post: function(_url, _data){
            return new Promise(function(resolve, reject){
                $.ajax({
                    url: _url,
                    data: _data || {},
                    type: 'post',
                    beforeSend: function(){
                        if(!/^1[3-9][\d]{9}$/.test($('#username').val())){
                        $.alert("手机号码不是你这样写的")
                        return false;
                    }

                        if($('#pwd').val() == ""){
                        $.alert("请输入密码")
                        return false;
                    }
                },
                    success: function(res){
                        resolve(res);
                    },
                    error: function(error){
                        reject(error);
                    }
                })
            })
            
        }
    }
})