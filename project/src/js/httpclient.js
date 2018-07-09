


//声明 http对象
var http = {

//拼接url
    baseUrl: 'http://localhost:86/project/src/',
    filterUrl: function(_url){
        if(_url.startsWith('http')){
            return _url;
        }
        return this.baseUrl + _url;
    },

//get请求方法
    get: function(_url, _params, _callback){

    //获取源对象的url
        _url = this.filterUrl(_url);

    //通过ajax请求到后端
        $.ajax({
            url: _url,
            data: _params || {},

        //插入表头，获取token保存登入信息
            headers: {

            //授权    
                Authorization: "Bearer " + window.localStorage.getItem('access_token')
            },

        //发送之前,生成遮罩层
            beforeSend: function(){
                if($('.mask')[0]){
                    $('.mask').show();//显示 
                } else {
                    var _mask = `<div class="mask" style="position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #ccc; opacity: .3;">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>`;
                    //链式调用
                    $(_mask).appendTo('body').show();
                }
            },
            success: function(res){
                _callback(res);
            },

        //完成隐藏（删除）遮罩层
            complete: function(){
                $('.mask').hide();//隐藏
                $('.mask').remove();//删除元素
            }
        })
    },

    post: function(_url, _params, _callback){
        _url = this.filterUrl(_url);
        console.log(_url, _params, _callback);
        $.ajax({
            url: _url,
            data: _params || {},
            type: 'post',
            headers: {
                Authorization: "Bearer " + window.localStorage.getItem('access_token')
            },
            beforeSend: function(){
                if(!/^1[3-9][\d]{9}$/.test($('#username').val())){
                    $.alert("手机号码不是你这样写的")
                    return false;
                }

                    if($('#pwd').val() == ""){
                    $.alert("请输入密码")
                    return false;
                }

                if($('.mask')[0]){
                    $('.mask').show();//显示 
                } else {
                    var _mask = `<div class="mask" style="position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #ccc; opacity: .3;">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>`;
                    //链式调用
                    $(_mask).appendTo('body').show();
                }
            },
            success: function(res){
                _callback(res);
            },
            error: function(error){
            //登入超时
                if(error.responseJSON.code == 40001){

                //跳转回登录页面
                    window.location.href = 'login.html';
                }
            },
            complete: function(){
                console.log(2222)
                $('.mask').hide();//隐藏
                $('.mask').remove();//删除元素
                console.log(666)
            }
        })
    }
}









// ==========================promise二次封装jq=======


// var zw = zw || {};

// zw.post = function (url, data){
//     return new Promise(function(resolve, reject){
//         $.post(url, data, function(res){
//                 resolve(res);
//         })

//         $.ajax({
//             url: url,
//             type: 'post',
//             data: data,
//             success: function(res){
//                 resolve(res);
//             },
//             error: function(error){
//                 reject(error);
//             }
//         })
//     })  
// }


// zw.post('url', {}).then(function(){

// }).catch(function(error){

// })



// post: function(_url, _params){
//         _url = this.filterUrl(_url);
//         console.log(_url, _params, _callback);

//         return new Promise(function(resolve, reject){
//         $.ajax({
//             url: _url,
//             data: _params || {},
//             type: 'post',
//             headers: {
//                 Authorization: "Bearer " + window.localStorage.getItem('access_token')
//             },
//             beforeSend: function(){
//                 if(!/^1[3-9][\d]{9}$/.test($('#username').val())){
//                     $.alert("手机号码不是你这样写的")
//                     return false;
//                 }

//                     if($('#pwd').val() == ""){
//                     $.alert("请输入密码")
//                     return false;
//                 }

//                 if($('.mask')[0]){
//                     $('.mask').show();//显示 
//                 } else {
//                     var _mask = `<div class="mask" style="position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #ccc; opacity: .3;">
//                             <i class="fa fa-refresh fa-spin"></i>
//                         </div>`;
//                     //链式调用
//                     $(_mask).appendTo('body').show();
//                 }
//             },
//             success: function(res){
//                 _callback(res);
//             },
//             error: function(error){
//             //登入超时
//                 if(error.responseJSON.code == 40001){

//                 //跳转回登录页面
//                     window.location.href = 'login.html';
//                 }
//             },
//             complete: function(){
//                 console.log(2222)
//                 $('.mask').hide();//隐藏
//                 $('.mask').remove();//删除元素
//                 console.log(666)
//             }
//         })
//     }

// }