require.config({
    paths: {
        'jquery': 'jquery-3.3.1',
        'http': 'moduleAjax'
    },
    shim: {
        'http': "jquery"
    }
})


require(['jquery', 'http'], function($,http){
    $(function(){
        $('#btn_login').click(function(){

            http.post('../api/login.php', {
                username: $('#username').val().trim(),
                pwd: $('#pwd').val().trim()
            }).then(function(res){
                console.log(res);
                var r = window.eval('(' + res + ')');
                console.log(r)
                if(r.status){
                    window.location.href = '../api/index.php';
                }
                if(r.status == false){
                    $.alert('账户或密码错误');
                }
            })
        }),
        $('#btn_register').click(function(){
            http.post('../api/register.php', {username: $('#username').val().trim(),
                pwd: $('#pwd').val().trim()}).then(function(res){
                    var r = window.eval('(' + res + ')');
                        console.log(r)
                    if(r.status){
                        console.log(333)
                        window.location.href = '../html/login.html'
                }
                    if(r.status == false){
                        $.alert('用户已注册');
                }
            })
        })
    })
})





                
        