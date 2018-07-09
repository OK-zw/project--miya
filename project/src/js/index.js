


document.addEventListener('DOMContentLoaded',function(){

    var seek = document.getElementsByClassName('btn_seek')[0]

    seek.onmouseover = function (){
        seek.style.opacity = 1;
    }

    seek.onmouseout = function (){
        seek.style.opacity = .8;
    }


//购物车效果
    var cart  = document.getElementsByClassName('cart ')[0];
    var cart_more  = document.getElementsByClassName('cart-more ')[0];
    var cart_content  = document.getElementsByClassName('cart_content ')[0];

    var fa_cart  = document.getElementsByClassName('fa-shopping-cart ')[0]


    

    cart.onmouseover = function (){
        cart_more.classList.add('actived');
        cart_content.style.border = '1px solid #ff3893';
        
        cart_content.style.borderLeft = '1px solid #fff';
        fa_cart.style.borderRight = '1px solid #fff';


        fa_cart.style.background = "none";
        fa_cart.style.color = 'pink';

        fa_cart.style.height = '38px';
        cart_content.style.height = '38px';

        fa_cart.style.borderBottom = '1px solid #000';

        cart_content.style.borderBottom = '1px solid #000';  
    }

    cart.onmouseout = function (){
        cart_more.classList.remove('actived');

       
        cart_content.style.border = '1px solid #ccc';


        fa_cart.style.background = "#ff3893";
        fa_cart.style.color = '#fff';   
        fa_cart.style.borderRight = '1px solid #ff3893';

        fa_cart.style.height = '34px';
        cart_content.style.height = '34px';
        fa_cart.style.borderBottom = '1px solid #ff3893';
    }


//小图标旋转
    var rotate = document.getElementsByClassName('rotate')[0];
    var menus_t = document.getElementsByClassName('menus_t')[0];
    var goods = document.getElementsByClassName('goods')[0];
    var arrows = document.getElementsByClassName('arrows')[0];
    var list = document.getElementsByClassName('list')[0];
    var cc = document.getElementById("cc");
 

    rotate.onmouseover = function(){
 
        arrows.style.transition = 'transform 500ms';
     
        arrows.classList.add('rt');

        list.style.display = 'block';

    }

    
    rotate.onmouseout = function(){
 
        arrows.style.transition = 'transform 500ms';
     
        arrows.classList.remove('rt');

        list.style.display = 'none';
    }


    menus_t.onmouseover = function(){
 
        goods.style.transition = 'transform 500ms';
     
        goods.classList.add('rt');

        cc.style.display = 'block';

    }

    
    menus_t.onmouseout = function(){
 
        goods.style.transition = 'transform 500ms';
     
        goods.classList.remove('rt');

        cc.style.display = 'none';

    }









    var dl = document.getElementsByTagName('dl')[0];
    var dd = document.getElementsByTagName('dd')[0];
    var inner = document.getElementsByClassName('inner')[0];


    dl.onmouseover = function(){
        dl.style.borderLeft = "3px solid #fa4b9b";   
    }

    dl.onmouseout = function(){
        dl.style.borderLeft = "3px solid #fff";   
    }



//点击回到顶部 
    var fixl = document.getElementsByClassName('fixl')[0];
    var fixr = document.getElementsByClassName('fixr')[0];
    var black = document.getElementsByClassName('black')[0];


    black.onclick = function(){
                var time = setInterval(function(){
                    //计算滚动条速度，%
                    var su = scrollY*0.2;
                    //改变距离
                    var ju = scrollBy(0,-su);

                    //当滚动条到顶部关闭定时器
                    if(scrollY === 0){
                        clearInterval(time);
                    }
                },30);
                
            };

                window.onscroll = function (){
                    if(scrollY>=300){
                    fixl.style.display = "block";
                    fixr.style.display = "block";
                }else{
                    fixl.style.display = "none";
                    fixr.style.display = "none"; 
                }
            }



        var goods = document.getElementsByClassName('goods')[0];
        var goods_t = document.getElementsByClassName('goods_t');

       var good = goods.getElementsByTagName('a');



       Cookie = {
    /**
     * [设置cookie]
     * @param {String} name   [cookie名]
     * @param {String} value  [cookie值]
     * @param {[Object]} params [参数]
     */
    set:function(name,value,params){
        var content = name +'=' + value;

        // 如果params无值，默认undefined
        // 避免以下代码报错
        if(params === undefined){
            params = {};
        }

        // 有效期
        if(params.expires){
            content += ';expires='+params.expires.toUTCString();
        }

        // 保存路径
        if(params.path){
            content += ';path='+params.path;
        }

        // 域名
        if(params.domain){
            content += ';domain='+params.domain;
        }

        // 安全性
        if(params.secure){
            content += ';secure'
        }


        document.cookie = content;
    },

    // 获取（最难）
    get:function(name){
        // 获取所有cookie
        var res = '';
        var cookies = document.cookie;//1,2,0

        if(cookies.length>0){
            // 拆分cookie
            cookies = cookies.split('; ');

            for(var i=0;i<cookies.length;i++){
                // 拆分name,value
                var arr = cookies[i].split('=');

                // 判断是否为想要的cookie
                if(arr[0] === name){
                    res = arr[1];

                    break;
                }
            }
        }

        return  res;
    },

    // 删除（最易）
    remove:function(name,path){
        var date = new Date();
        date.setDate(date.getDate()-10);

        // document.cookie = name +'=null;expires=' + date.toUTCString() +';path='+path;
        this.set(name,null,{expires:date,path:path})
    }
}



});





