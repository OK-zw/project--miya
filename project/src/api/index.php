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
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/base.css" />
        <link rel="stylesheet" type="text/css" href="../css/index.css" />
        <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css" />
        
        

        <script src="../js/index.js"></script>
        <script src="../js/common.js"></script>

        <script src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/1/js/jquery-1.11.0.min.js"><\/script>')</script>
        <script type="text/javascript" src="../js/1/js/jquery.flexslider-min.js"></script>
    </head>
    <body>
        <header>
            <div class="top">
                <div class="container">
                    <div class="fl">
                        <i class="fa fa-mobile fa-lg"></i>
                        <a href="#" class="hue">手机蜜芽</a>
                    </div>
                    <div class="fr top_r">
                        <ul>
                            <li><span>你好，欢迎来到蜜芽！</span></li>
                            <li><span><a href="#" class="hue">我的订单</a></span></li>
                            <li><span><a href="http://localhost:86/project/src/html/register.html" class="hue">免费注册</a></span></li>
                            <li><span><a href="#" class="hue">帮助中心</a></span></li>
                            <li><span><a href="http://localhost:86/project/src/html/login.html" class="hue">退出</a></span></li>
                        </ul>
                        <em>|</em>
                    </div>
                </div>
            </div>
            <div class="seek">
                <div class="container">
                    <a href="https://www.mia.com/" class="logo fl">
                        <img src="../css/img/logo.png" alt="" />
                    </a>
                    <div class="fr seekr">
                        <div class="clearfix">
                            <input type="text" class="text fl" />
                            <input type="button" value="搜索" class="btn_seek" />
                        </div>
                        <div class="cart fr">
                            <a href="http://localhost:86/project/src/html/cart.html" class="cart_item" target="_blank">
                                <i class="fa fa-shopping-cart fa-lg fl"></i>
                                <i class="fl cart_content">购物车</i>
                            </a>

                            
                            <div class="cart-more">
                                <span></span>
                                购物车还没有商品，快去选购吧！
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="nav">
                <div class="container">
                    <div class="menus fl">
                        <div class="menus_t">
                            <h3>商品分类</h3>
                        </div>
                        <div class="menus_b">
                            <dl>
                                <dt>
                                    <div class="inner t_inner">
                                        <strong>
                                            <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">奶粉/纸尿裤</a>
                                        </strong>
                                        <p>
                                            <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">婴儿奶粉</a>
                                            <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">羊奶粉</a>
                                            <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">特配奶粉</a>
                                            <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">拉拉裤</a>
                                            <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">宝宝湿巾</a>
                                            <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">德国爱他美</a>
                                            <i class="fa fa-arrow-right"></i>
                                        </p>
                                    </div>
                                </dt>
                                <dd>
                                    <div class="colums fl">
                                        <div class="colum">
                                            <h3>奶粉专区</h3>
                                            <p class="pp">
                                                <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">婴儿奶粉</a>

                                                <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">成长奶粉</a>

                                                <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">羊奶粉</a>

                                                <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">特配奶粉</a>

                                                <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">妈妈奶粉</a>

                                                <a href="http://localhost:86/project/src/html/goodlist.html#" target="_blank">成人奶粉</a>
                                            </p>
                                        </div>



                                        <div class="colum">
                                            <div class="colum">
                                                <h3>屁屁护理</h3>
                                                <p class="pp">
                                                    <a href="https://www.mia.com/s/cat18_tid694.html" target="_blank">纸尿裤</a>

                                                    <a href="https://www.mia.com/s/cat16_tid692.html" target="_blank">拉拉裤</a>

                                                    <a href="https://www.mia.com/s/cat25_tid696.html" target="_blank">隔尿垫/布尿裤</a>

                                                    <a href="https://www.mia.com/s/cat23_tid695.html" target="_blank">宝宝湿巾</a>
                                                </p>
                                            </div>
                                        </div>



                                        <div class="colum">
                                            <h3>全球奶粉大牌</h3>
                                            <p class="pp2">
                                                <a href="https://www.mia.com/s/cat18_tid694.html" target="_blank">德国爱他美</a>

                                                <a href="https://www.mia.com/s/cat16_tid692.html" target="_blank">德国Hipp</a>

                                                <a href="https://www.mia.com/s/cat25_tid696.html" target="_blank">德国Topfer</a>

                                                <a href="https://www.mia.com/s/cat23_tid695.html" target="_blank">荷兰Nutrilon</a>


                                                <a href="https://www.mia.com/s/cat18_tid694.html" target="_blank">英国Cow&Gate</a>

                                                <a href="https://www.mia.com/s/cat16_tid692.html" target="_blank">德国holle</a>

                                                <a href="https://www.mia.com/s/cat25_tid696.html" target="_blank">英国Aptamil</a>

                                                <a href="https://www.mia.com/s/cat23_tid695.html" target="_blank">授权行货惠氏启赋</a>



                                                <a href="https://www.mia.com/s/cat18_tid694.html" target="_blank">港版美赞成</a>

                                                <a href="https://www.mia.com/s/cat16_tid692.html" target="_blank">授权行货爱他美</a>

                                                <a href="https://www.mia.com/s/cat25_tid696.html" target="_blank">授权行货若优能</a>

                                                <a href="https://www.mia.com/s/cat23_tid695.html" target="_blank">授权行货 喜宝</a>

                                                <a href="https://www.mia.com/s/cat25_tid696.html" target="_blank">美国MeadJohnson</a>
                                            </p>
                                        </div>
                                        <div class="colum">
                                            <h3>全球纸尿裤大牌</h3>
                                            <p class="pp3">
                                                 <a href="https://www.mia.com/s/cat18_tid694.html" target="_blank">尤妮佳</a>

                                                <a href="https://www.mia.com/s/cat16_tid692.html" target="_blank">花王</a>

                                                <a href="https://www.mia.com/s/cat25_tid696.html" target="_blank">GOON大王天使</a>

                                                <a href="https://www.mia.com/s/cat23_tid695.html" target="_blank">Pampers帮宝适</a>



                                                <a href="https://www.mia.com/s/cat18_tid694.html" target="_blank">Huggies Gold好奇金装</a>

                                                <a href="https://www.mia.com/s/cat16_tid692.html" target="_blank">Huggies platinum好奇铂金装</a>

                                                <a href="https://www.mia.com/s/cat25_tid696.html" target="_blank">Mamaypoko 妈咪宝贝</a>

                                                <a href="https://www.mia.com/s/cat23_tid695.html" target="_blank">Libero丽贝乐</a>

                                                <a href="https://www.mia.com/s/cat18_tid694.html" target="_blank">Bella Baby Happy贝拉宝贝</a>

                                                <a href="https://www.mia.com/s/cat16_tid692.html" target="_blank">BioFities爱婴舒坦</a>

                                                <a href="https://www.mia.com/s/cat25_tid696.html" target="_blank">BAMBO班博</a>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="brands fr">
                                        <h3>热卖大牌</h3>
                                        <a href="https://www.mia.com/s/b526.html">
                                            <img src="https://img03.miyabaobei.com/d1/p3/brand/526_brand_logo_img1459856922.jpg" alt="" />
                                        </a>

                                        <a href="https://www.mia.com/s/b526.html">
                                            <img src="https://img03.miyabaobei.com/d1/p3/brand/175_brand_logo_img1459857796.jpg" alt="" />
                                        </a>

                                        <a href="https://www.mia.com/s/b526.html">
                                            <img src="https://img03.miyabaobei.com/d1/p3/brand/44_brand_logo_img1460020310.jpg" alt="" />
                                        </a>

                                        <a href="https://www.mia.com/s/b526.html">
                                            <img src="https://img03.miyabaobei.com/d1/p3/brand/189_brand_logo_img1459857574.jpg" alt="" />
                                        </a>

                                        <a href="https://www.mia.com/s/b526.html">
                                            <img src="https://img03.miyabaobei.com/d1/p5/brand/192_brand_logo_img1467099328.jpg" alt="" />
                                        </a>

                                        <a href="https://www.mia.com/s/b526.html">
                                            <img src="https://img03.miyabaobei.com/d1/p3/brand/1_brand_logo_img1459490969.jpg" alt="" />
                                        </a>

                                        <a href="https://www.mia.com/s/b526.html">
                                            <img src="https://img03.miyabaobei.com/d1/p3/brand/8_brand_logo_img1459491005.jpg" alt="" />
                                        </a>

                                        <a href="https://www.mia.com/s/b526.html">
                                            <img src="https://img03.miyabaobei.com/d1/p3/brand/425_brand_logo_img1459490793.png" alt="" />
                                        </a>

                                        <a href="https://www.mia.com/s/b526.html">
                                            <img src="https://img03.miyabaobei.com/d1/p3/brand/1206_brand_logo_img1459491133.jpg" alt="" />
                                        </a>
                                    </div>
                                </dd>
                            </dl>




                            <dl>
                                <dt>
                                    <div class="inner">
                                        <strong>
                                            <a href="#">辅食/喂养/洗护</a>
                                        </strong>
                                        <p>
                                            <a href="#">米粉</a>
                                            <a href="#">果泥/肉泥</a>
                                            <a href="#">溶豆/泡芙</a>
                                            <a href="#">磨牙饼干</a>
                                            <a href="#">鱼油/DHA</a>
                                            <a href="#">钙铁锌</a>
                                            <i class="fa fa-arrow-right"></i>
                                        </p>
                                    </div>
                                </dt>
                                <dd></dd>
                            </dl>

                            <dl>
                                <dt>
                                    <div class="inner">
                                        <strong>
                                            <a href="#">孕妈用品</a>
                                        </strong>
                                        <p>
                                            <a href="#">孕妇装/孕妇裙</a>
                                            <a href="#">待产/月子用品</a>
                                            <a href="#">防辐射服</a>
                                            <a href="#">孕期营养</a>
                                            <i class="fa fa-arrow-right"></i>
                                        </p>
                                    </div>
                                </dt>
                                <dd></dd>
                            </dl>

                            <dl>
                                <dt>
                                    <div class="inner">
                                        <strong>
                                            <a href="#">童装/童鞋/寝居</a>
                                        </strong>
                                        <p>
                                            <a href="#">新生儿礼盒</a>
                                            <a href="#">连身衣/爬服</a>
                                            <a href="#">T恤/POLO衫</a>
                                            <a href="#">亲子装</a>
                                            <a href="#">太阳镜</a>
                                            <i class="fa fa-arrow-right"></i>
                                        </p>
                                    </div>
                                </dt>
                                <dd></dd>
                            </dl>

                            <dl>
                                <dt>
                                    <div class="inner">
                                        <strong>
                                            <a href="#">玩具/书籍/出行</a>
                                        </strong>
                                        <p>
                                            <a href="#">益智</a>
                                            <a href="#">毛绒/安抚</a>
                                            <a href="#">牙胶/咬咬胶</a>
                                            <a href="#">戏水/游泳装备</a>
                                            <a href="#">中文绘本</a>
                                            <i class="fa fa-arrow-right"></i>
                                        </p>
                                    </div>
                                </dt>
                                <dd></dd>
                            </dl>

                            <dl>
                                <dt>
                                    <div class="inner">
                                        <strong>
                                            <a href="#">美妆/个护/轻奢</a>
                                        </strong>
                                        <p>
                                            <a href="#">防晒/隔离</a>
                                            <a href="#">化妆水/爽肤水</a>
                                            <a href="#">面膜</a>
                                            <a href="#">套装礼盒</a>
                                            <a href="#">美体塑身</a>
                                            <i class="fa fa-arrow-right"></i>
                                        </p>
                                    </div>
                                </dt>
                                <dd></dd>
                            </dl>

                            <dl>
                                <dt>
                                    <div class="inner">
                                        <strong>
                                            <a href="#">美食/保健</a>
                                        </strong>
                                        <p>
                                            <a href="#">干果/果干</a>
                                            <a href="#">休闲零食</a>
                                            <a href="#">地方特产</a>
                                            <a href="#">胶原蛋白</a>
                                            <a href="#">酵素</a>
                                            <a href="#">蔓越莓/葡萄籽</a>
                                            <i class="fa fa-arrow-right"></i>
                                        </p>
                                    </div>
                                </dt>
                                <dd></dd>
                            </dl>

                            <dl>
                                <dt>
                                    <div class="inner">
                                        <strong>
                                            <a href="#">家居/清洁</a>
                                        </strong>
                                        <p>
                                            <a href="#">奶瓶清洁</a>
                                            <a href="#">消毒液/柔顺剂</a>
                                            <a href="#">宝宝湿巾</a>
                                            <a href="#">床上用品</a>
                                            <a href="#">家居纸品</a>
                                            <i class="fa fa-arrow-right"></i>
                                        </p>
                                    </div>
                                </dt>
                                <dd></dd>
                            </dl>
                        </div>
                    </div>
                    <ul class="fl navs">
                        <li><a href="#">首页</a></li>
                        <li><a href="#">纸尿裤</a></li>
                        <li><a href="#">奶粉</a></li>
                        <li class="rotate">
                            <a href="#">正品保证</a>
                            <i class="fa fa-angle-double-down arrows"></i>
                            <div class="list">
                                <a href="https://www.mia.com/guarantee" class="ee" target="_blank">
                                    正品保证
                                </a>
                                <a href="https://www.mia.com/help-22.html" class="ee" target="_blank">
                                    退货政策
                                </a>
                                <a href="https://www.mia.com/help.html" class="ee" target="_blank">
                                    帮助中心
                                </a>
                            </div>
                        </li>
                        <li><a href="#">早教音乐</a></li>
                    </ul>
                </div>
            </div>
        </header>
        


        <div class="flexslider">
            <ul class="slides">
                <li style="background:url(../images/banner1.jpg) 50% 0 no-repeat;"></li>
                <li style="background:url(../images/banner2.jpg) 50% 0 no-repeat;"></li>
            </ul>
        </div>
        
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('.flexslider').flexslider({
                    directionNav: true,
                    pauseOnAction: false
                });
            });
        </script>


      <div class="brand">
            <div class="container">
                <div class="index_brand">
                    <h3>热卖商品</h3>
                    <div class="brands">
                        <a href="#">
                            <img src="https://img04.miyabaobei.com/d1/p3/brand/1781_brand_logo_img1459844806.jpg" alt="" />
                        </a>

                        <a href="#">
                            <img src="https://img01.miyabaobei.com/d1/p3/brand/2522_brand_logo_img1459909520.jpg" alt="" />
                        </a>

                        <a href="#">
                            <img src="https://img02.miyabaobei.com/d1/p3/brand/854_brand_logo_img1461148617.jpg" alt="" />
                        </a>

                        <a href="#">
                            <img src="https://img03.miyabaobei.com/d1/p3/brand/911_brand_logo_img1461148672.jpg" alt="" />
                        </a>

                        <a href="#">
                            <img src="https://img04.miyabaobei.com/d1/p3/brand/2336_brand_logo_img1459908964.jpg" alt="" />
                        </a>

                        <a href="#">
                            <img src="https://img01.miyabaobei.com/d1/p3/brand/576_brand_logo_img1460441450.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="recommend">
            <div class="container">
                <h3>为你推荐<span>千万妈妈 精明之选</span></h3>

                <div class="goods">
                    <!-- <a href="https://www.mia.com/item-1077430.html" title="柔软透气 自由自在" target="_blank">
                        <div class="goods_t">
                            <img src="https://img05.miyabaobei.com/d1/p5/item/10/1077/1077430_topic_1_c305e32b.jpg@base@tag=imgScale&w=447" alt="" />

                            <span class="shade"></span>
                        </div>
                        <div class="goods_b">
                            <div class="title">大王纸尿裤L54片*2包</div>
                            <p>柔软透气 自由自在</p>
                            
                            <div class="price">
                                <span class="new">
                                    拼团价:¥
                                    <em>148</em>
                                </span>
                                <span class="old">
                                    市场价:
                                    <em>¥376.00</em>
                                </span>
                            </div>

                            <p class="buy">4390人已团</p>
                            <span class="btn_buy">去拼团</span>
                        </div>
                    </a>

                    <a href="https://www.mia.com/item-1048263.html" title="多面透气 小屁屁持久干爽">
                        <div class="goods_t">
                            <img src="https://img06.miyabaobei.com/d1/p5/item/10/1048/1048263_topic_1.jpg@base@tag=imgScale&w=447" alt="" />
                            <span class="shade"></span>
                        </div>
                        <div class="goods_b">
                            <div class="title">花王纸尿裤M64*2包</div>
                            <p>多面透气 小屁屁持久干爽</p>
                            
                            <div class="price">
                                <span class="new">
                                    拼团价:¥
                                    <em>168</em>
                                </span>
                                <span class="old">
                                    市场价:
                                    <em>376.00</em>
                                </span>
                            </div>

                            <p class="buy">23.6万人已团</p>
                            <span class="btn_buy">去拼团</span>
                        </div>
                    </a>

                    <a href="#" title="超薄透气 舒适不渗漏">
                        <div class="goods_t">
                            <img src="https://img05.miyabaobei.com/d1/p5/item/10/1059/1059257_topic_1.jpg@base@tag=imgScale&w=447" alt="" />
                            <span class="shade"></span>
                        </div>
                        <div class="goods_b">
                            <div class="title">尤妮佳纸尿裤M64片*2包</div>
                            <p>超薄透气 舒适不渗漏</p>
                            
                            <div class="price">
                                <span class="new">
                                    拼团价:¥
                                    <em>158</em>
                                </span>
                                <span class="old">
                                    市场价:
                                    <em>376.00</em>
                                </span>
                            </div>

                            <p class="buy">12.2万人已团</p>
                            <span class="btn_buy">去拼团</span>
                        </div>
                    </a>

                    <a href="#" title="多面透气 小屁屁持久干爽">
                        <div class="goods_t">
                            <img src="https://img06.miyabaobei.com/d1/p5/item/10/1048/1048263_topic_1.jpg@base@tag=imgScale&w=447" alt="" />
                            <span class="shade"></span>
                        </div>
                        <div class="goods_b">
                            <div class="title">花王纸尿裤S82片*2包</div>
                            <p>多面透气 小屁屁持久干爽</p>
                            
                            <div class="price">
                                <span class="new">
                                    拼团价:¥
                                    <em>168</em>
                                </span>
                                <span class="old">
                                    市场价:
                                    <em>376.00</em>
                                </span>
                            </div>

                            <p class="buy">20.6万人已团</p>
                            <span class="btn_buy">去拼团</span>
                        </div>
                    </a>

                    <a href="#" title="长效驱蚊 无烟无味">
                        <div class="goods_t">
                            <img src="https://img05.miyabaobei.com/d1/p5/2018/03/03/aa/f5/aaf5f876d54099ca66c76aea3a43fd6b482204212.jpg@base@tag=imgScale&w=447" alt="" />
                            <span class="shade"></span>
                        </div>
                        <div class="goods_b">
                            <div class="title">子初蚊香液4瓶送加热器</div>
                            <p>长效驱蚊 无烟无味</p>
                            
                            <div class="price">
                                <span class="new">
                                    拼团价:¥
                                    <em>29.90</em>
                                </span>
                                <span class="old">
                                    市场价:
                                    <em>¥99.00</em>
                                </span>
                            </div>

                            <p class="buy">9625人已团</p>
                            <span class="btn_buy">去拼团</span>
                        </div>
                    </a>

                    <a href="#" title="防滑橡胶把手 密封防漏">
                        <div class="goods_t">
                            <img src="https://img02.miyabaobei.com/d1/p5/item/10/1063/1063910_normal_4.jpg" alt="" />
                            <span class="shade"></span>
                        </div>
                        <div class="goods_b">
                            <div class="title">膳魔师（宝宝用品） THERMOS 兔子吸管杯240ml 粉色</div>
                            <p>防滑橡胶把手 密封防漏</p>
                            
                            <div class="price">
                                <span class="new">
                                    拼团价:¥
                                    <em>99</em>
                                </span>
                                <span class="old">
                                    市场价:
                                    <em>¥118.00</em>
                                </span>
                            </div>

                            <p class="buy">15003人已团</p>
                            <span class="btn_buy">去拼团</span>
                        </div>
                    </a>

                    <a href="#" title="五种功能 长久使用 不闲置">
                        <div class="goods_t">
                            <img src="https://img02.miyabaobei.com/d1/p3/item/11/1144/1144165_normal_4.jpg" alt="" />
                            <span class="shade"></span>
                        </div>
                        <div class="goods_b">
                            <div class="title">霖贝儿 LINBEBE 欧式雕花婴儿床宝宝床实木多功能新生儿可改书桌【床+床垫】</div>
                            <p>五种功能 长久使用 不闲置</p>
                            
                            <div class="price">
                                <span class="new">
                                    拼团价:¥
                                    <em>888.00</em>
                                </span>
                                <span class="old">
                                    市场价:
                                    <em>¥1698.00</em>
                                </span>
                            </div>

                            <p class="buy">82436人已团</p>
                            <span class="btn_buy">去拼团</span>
                        </div>
                    </a>

                    <a href="#" title="洗发沐浴二合一 轻松搞定洗澡澡">
                        <div class="goods_t">
                            <img src="https://img02.miyabaobei.com/d1/p5/item/10/1000/1000496_normal_4.jpg" alt="" />
                            <span class="shade"></span>
                        </div>
                        <div class="goods_b">
                            <div class="title">加州宝宝 CALIFORNIA BABY 金盏花2合1洗发沐浴液 251ml</div>
                            <p>洗发沐浴二合一 轻松搞定洗澡澡</p>
                            
                            <div class="price">
                                <span class="new">
                                    拼团价:¥
                                    <em>75.00</em>
                                </span>
                                <span class="old">
                                    市场价:
                                    <em>¥246.00</em>
                                </span>
                            </div>

                            <p class="buy">31522人已团</p>
                            <span class="btn_buy">去拼团</span>
                        </div>
                    </a>

                    <a href="#" title="安全啃咬，CHEWBEADS同厂">
                        <div class="goods_t">
                            <img src="https://img02.miyabaobei.com/d1/p5/item/17/1768/1768215_normal_4_75587506.jpg" alt="" />
                            <span class="shade"></span>
                        </div>
                        <div class="goods_b">
                            <div class="title">兔头妈妈甄选 甜甜圈硅胶牙胶-粉色  宝宝玩具食品级硅胶牙胶</div>
                            <p>安全啃咬，CHEWBEADS同厂</p>
                            
                            <div class="price">
                                <span class="new">
                                    拼团价:¥
                                    <em>43.80</em>
                                </span>
                                <span class="old">
                                    市场价:
                                    <em>¥78.00</em>
                                </span>
                            </div>

                            <p class="buy">94341人已团</p>
                            <span class="btn_buy">去拼团</span>
                        </div>
                    </a> -->

                   <!--  <a href="#" title="不做痒宝宝 一抹清热润燥！">
                        <div class="goods_t">
                            <img src="https://img04.miyabaobei.com/d1/p4/item/10/1076/1076458_normal_4.jpg" alt="" />
                            <span class="shade"></span>
                        </div>
                        <div class="goods_b">
                            <div class="title">贝亲婴儿桃子水200ml</div>
                            <p>不做痒宝宝 一抹清热润燥！</p>
                            
                            <div class="price">
                                <span class="new">
                                    拼团价:¥
                                    <em>369.00</em>
                                </span>
                                <span class="old">
                                    市场价:
                                    <em>¥578.00</em>
                                </span>
                            </div>

                            <p class="buy">18940人已团</p>
                            <span class="btn_buy">去拼团</span>
                        </div>
                    </a> -->
                </div>
            </div>
        </div>

        <main>
            <div class="container">
                <h3>今日特卖
                    <span>每天10点上新</span>
                </h3>
                <div class="main_content">
                    <div class="main_content1">
                        <a href="#" class="fl main_content1_l">
                            <img src="https://img02.miyabaobei.com/d1/p5/2018/06/22/73/63/73638455f2eebcfd190bd517ea27c822566984398.jpg" alt="" />
                            <i></i>
                        </a>
                        <div class="main_content1_r fr">
                            <a href="#">
                                <div class="discount_img fl">
                                    <img src="https://img01.miyabaobei.com/d1/p5/item/0/0/1857103832567_2_6c96ab90.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">洛斯小丁 Karlos&ting 夏季新款男女宝宝纱布开衫套装</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>109.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>219.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#">
                                <div class="discount_img two fl">
                                    <img src="https://img01.miyabaobei.com/d1/p5/item/0/0/18515070238177_2_322fbfa5.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">洛斯小丁 Karlos&ting 夏季新款女宝宝圆点连衣裙</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>89.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>219.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="discount_img three fl">
                                    <img src="https://img01.miyabaobei.com/d1/p5/item/0/0/1857103832567_2_6c96ab90.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">洛斯小丁 Karlos&ting 男女宝宝夏季新款纱布开裆连体</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>79.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>159.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="main_content1">
                        <a href="#" class="fl main_content1_l">
                            <img src="https://img03.miyabaobei.com/d1/p5/2018/06/21/ad/6b/ad6be159b772f7d8a22f99b50b19e0e6750391985.jpg" alt="" />
                            <i></i>
                        </a>
                        <div class="main_content1_r fr">
                            <a href="#">
                                <div class="discount_img fl">
                                    <img src="https://img04.miyabaobei.com/d1/p3/item/12/1275/1275096_normal_2.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">印象童年 IK 宝宝夏款棉印花短袖T恤衫</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>129.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>239.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#">
                                <div class="discount_img two fl">
                                    <img src="https://img04.miyabaobei.com/d1/p5/item/0/0/17331072756491_2.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">印象童年 IK 男童纯色休闲儿童短裤</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>119.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>198.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="discount_img three fl">
                                    <img src="https://img04.miyabaobei.com/d1/p5/item/0/0/17331072807757_2.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">印象童年 IK 男童纯色休闲儿童短裤</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>119.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>198.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="main_content1">
                        <a href="#" class="fl main_content1_l">
                            <img src="https://img04.miyabaobei.com/d1/p5/2018/06/21/e8/5c/e85cb0df917849d66b6019cee11d1ac3786241804.jpg" alt="" />
                            <i></i>
                        </a>
                        <div class="main_content1_r fr">
                            <a href="#">
                                <div class="discount_img fl">
                                    <img src="https://img04.miyabaobei.com/item/10/1005/1005822_normal_2.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">贝贝怡 bornbay  竹纤维隔尿垫宝宝双层隔尿床垫淡粉</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>39.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>79.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#">
                                <div class="discount_img two fl">
                                    <img src="https://img04.miyabaobei.com/d1/p1/item/10/1061/1061700_normal_2.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">贝贝怡 bornbay  棉质内衣孕妇内裤低腰内裤3条装粉蓝黄</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>39.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>99.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="discount_img three fl">
                                    <img src="https://img04.miyabaobei.com/d1/p3/item/10/1061/1061697_normal_2.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">贝贝怡 bornbay  产后喂奶哺乳前开扣文胸无钢圈孕妇胸罩</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>49.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>129.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="main_content1">
                        <a href="#" class="fl main_content1_l">
                            <img src="https://img01.miyabaobei.com/d1/p5/2018/06/21/45/aa/45aa10effd3a3daba7c280df7f508a0b639038738.jpg" alt="" />
                            <i></i>
                        </a>
                        <div class="main_content1_r fr">
                            <a href="#">
                                <div class="discount_img fl">
                                    <img src="https://img04.miyabaobei.com/d1/p5/item/0/0/1754020053852_2.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">咕噜日记 Purrfect diary  女童糖果色全棉系带小热裤【码数偏小，建议选择大1-2码】</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>29.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>199.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#">
                                <div class="discount_img two fl">
                                    <img src="https://img04.miyabaobei.com/d1/p5/item/0/0/18514101502151_2_4feff98c.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">咕噜日记 Purrfect diary  夏季新品女童全棉网眼连裤袜薄款透气防蚊 xgw801</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>29.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>79.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="discount_img three fl">
                                    <img src="https://img04.miyabaobei.com/d1/p5/item/0/0/18414014153985_2_8f773e39.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">咕噜日记 Purrfect diary  夏季新品宝宝满印图案全棉盆帽太阳帽  xzp803</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>29.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>69.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="main_content1">
                        <a href="#" class="fl main_content1_l">
                            <img src="https://img02.miyabaobei.com/d1/p5/2018/06/04/ce/08/ce08c844d5f5608e3377780304580cf5096682043.jpg" alt="" />
                            <i></i>
                        </a>
                        <div class="main_content1_r fr">
                            <a href="#">
                                <div class="discount_img fl">
                                    <img src="https://img04.miyabaobei.com/d1/p5/2017/05/11/f1/aa/f1aa2f8275144f977ec7b1d67fc9f0fe829602270.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">齐齐熊 ciciibear 夏季新品婴儿衣服卡通印花短袖短裤男女宝宝纯棉套装</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>56.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>138.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#">
                                <div class="discount_img two fl">
                                    <img src="https://img04.miyabaobei.com/d1/p5/2017/05/11/cf/0a/cf0a5c84d7852f1c13ef89847781d256829601467.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">齐齐熊 ciciibear 夏季新品婴儿衣服卡通印花短袖短裤男女宝宝纯棉套装</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>56.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>138.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="discount_img three fl">
                                    <img src="https://img04.miyabaobei.com/d1/p5/2017/05/09/b6/35/b635b5f03c6b6aaa6a55b52a1c07615b910976256.jpg" alt="" />
                                    <i></i>
                                </div>
                                <div class="discount_content fr">
                                    <p class="title">齐齐熊 ciciibear 宝宝背心两件套装呆萌条纹无袖衣服男女婴儿新款纯棉夏装</p>
                                    <div class="price">
                                        <span class="new">
                                            ¥
                                            <em>45.00</em>
                                        </span>
                                        <span class="old">
                                            ¥
                                            <em>156.00</em>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <section>
           <div class="container">
               <h3>
                   大牌尖货
                   <span>全世界的品牌 优惠特卖</span>
               </h3>

               <div class="layout">
                   <div class="block">
                       <div class="block_t">
                           <div class="fl">
                               <a href="#">
                                    <img src="https://img04.miyabaobei.com/d1/p5/brand/299_brand_logo_img1501472221.jpg" alt="" />           
                               </a>
                               <a href="#">bioisland</a>
                           </div>
                       </div>
                       <div class="block_b">
                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img05.miyabaobei.com/d1/p5/2017/05/04/f3/3e/f33e55d454c22a7b66dff944a37db081678597072.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包税 包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">全球购 | 【直邮包税】婴幼儿海藻DHA胶囊60粒装*2瓶</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>208</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>396</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/18/85/c9/85c917a463178f67eacf22adb500dc9e448703549.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包税 包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">全球购 | 【直邮包税】婴幼儿天然乳钙90粒+婴幼儿鳕鱼肝油90粒</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>228</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>356</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img05.miyabaobei.com/d1/p5/2017/07/13/76/23/7623e162ad2bc4e0ffc2a5b298e5303e395316464.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包税 包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">全球购 | 宝宝鳕鱼肝油DHA+VD90粒*2瓶</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>228</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>289</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2017/07/13/8d/6a/8d6ab765ebb043caab854cc2afa9a51e379071281.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包税 包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">全球购 | 婴幼儿天然牛乳液体钙90粒*2瓶</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>229</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>289</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>
                            
                            <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img05.miyabaobei.com/d1/p5/item/16/1692/1692556_topic_1_0dd7cdb0.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包税 包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">全球购 自营 | 婴幼儿海藻DHA 60粒*2</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>208</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>536</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                       </div>
                   </div>
               </div>

               <div class="layout">
                   <div class="block">
                       <div class="block_t">
                           <div class="fl">
                               <a href="#">
                                    <img src="https://img01.miyabaobei.com/d1/p3/brand/969_brand_logo_img1461150384.jpg" alt="" />            
                               </a>
                               <a href="#">洛斯小丁 Karlos&ting</a>
                           </div>
                       </div>
                       <div class="block_b">
                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img05.miyabaobei.com/d1/p5/2018/04/12/38/6b/386bb81198954751b43c79050020ba2f168777005.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季新款男宝宝开档连体衣</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>59</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>179</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/28/b7/c2/b7c26ade11437c0fb65811b9896a72dc051366202.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>49</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/28/b7/c2/b7c26ade11437c0fb65811b9896a72dc051366202.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>49</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/05/15/1f/38/1f385c630e948a50d54847bdea5dd0f2820762145.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>满减</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季新款男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>79</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>
                            
                            <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2017/05/16/5e/04/5e04392037e1708eec7d1cf36e34024d199461132.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">婴儿连体衣服纯棉春秋季男宝宝绅士满月0-3-6个月1周岁新生儿礼服</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>208</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>536</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                       </div>
                   </div>
               </div>


               <div class="layout">
                   <div class="block">
                       <div class="block_t">
                           <div class="fl">
                               <a href="#">
                                    <img src="https://img04.miyabaobei.com/d1/p5/brand/299_brand_logo_img1501472221.jpg" alt="" />            
                               </a>
                               <a href="#">bioisland</a>
                           </div>
                       </div>
                       <div class="block_b">
                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img05.miyabaobei.com/d1/p5/2017/05/04/f3/3e/f33e55d454c22a7b66dff944a37db081678597072.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包税 包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">全球购 | 【直邮包税】婴幼儿海藻DHA胶囊60粒装*2瓶</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>208</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>396</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/18/85/c9/85c917a463178f67eacf22adb500dc9e448703549.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包税 包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">全球购 | 【直邮包税】婴幼儿天然乳钙90粒+婴幼儿鳕鱼肝油90粒</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>228</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>356</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img05.miyabaobei.com/d1/p5/2017/07/13/76/23/7623e162ad2bc4e0ffc2a5b298e5303e395316464.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包税 包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">全球购 | 宝宝鳕鱼肝油DHA+VD90粒*2瓶</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>228</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>289</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2017/07/13/8d/6a/8d6ab765ebb043caab854cc2afa9a51e379071281.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包税 包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">全球购 | 婴幼儿天然牛乳液体钙90粒*2瓶</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>229</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>289</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>
                            
                            <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img05.miyabaobei.com/d1/p5/item/16/1692/1692556_topic_1_0dd7cdb0.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包税 包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">全球购 自营 | 婴幼儿海藻DHA 60粒*2</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>208</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>536</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                       </div>
                   </div>
               </div>

               <div class="layout">
                   <div class="block">
                       <div class="block_t">
                           <div class="fl">
                               <a href="#">
                                    <img src="https://img01.miyabaobei.com/d1/p3/brand/969_brand_logo_img1461150384.jpg" alt="" />            
                               </a>
                               <a href="#">洛斯小丁 Karlos&ting</a>
                           </div>
                       </div>
                       <div class="block_b">
                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img05.miyabaobei.com/d1/p5/2018/04/12/38/6b/386bb81198954751b43c79050020ba2f168777005.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季新款男宝宝开档连体衣</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>59</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>179</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/28/b7/c2/b7c26ade11437c0fb65811b9896a72dc051366202.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>49</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/28/b7/c2/b7c26ade11437c0fb65811b9896a72dc051366202.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>49</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/05/15/1f/38/1f385c630e948a50d54847bdea5dd0f2820762145.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>满减</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季新款男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>79</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>
                            
                            <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2017/05/16/5e/04/5e04392037e1708eec7d1cf36e34024d199461132.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">婴儿连体衣服纯棉春秋季男宝宝绅士满月0-3-6个月1周岁新生儿礼服</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>208</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>536</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                       </div>
                   </div>
               </div>

               <div class="layout">
                   <div class="block">
                       <div class="block_t">
                           <div class="fl">
                               <a href="#">
                                    <img src="https://img01.miyabaobei.com/d1/p3/brand/969_brand_logo_img1461150384.jpg" alt="" />            
                               </a>
                               <a href="#">洛斯小丁 Karlos&ting</a>
                           </div>
                       </div>
                       <div class="block_b">
                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img05.miyabaobei.com/d1/p5/2018/04/12/38/6b/386bb81198954751b43c79050020ba2f168777005.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季新款男宝宝开档连体衣</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>59</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>179</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/28/b7/c2/b7c26ade11437c0fb65811b9896a72dc051366202.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>49</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/28/b7/c2/b7c26ade11437c0fb65811b9896a72dc051366202.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>49</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/05/15/1f/38/1f385c630e948a50d54847bdea5dd0f2820762145.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>满减</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季新款男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>79</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>
                            
                            <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2017/05/16/5e/04/5e04392037e1708eec7d1cf36e34024d199461132.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">婴儿连体衣服纯棉春秋季男宝宝绅士满月0-3-6个月1周岁新生儿礼服</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>208</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>536</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                       </div>
                   </div>
               </div>

               <div class="layout">
                   <div class="block">
                       <div class="block_t">
                           <div class="fl">
                               <a href="#">
                                    <img src="https://img01.miyabaobei.com/d1/p3/brand/969_brand_logo_img1461150384.jpg" alt="" />            
                               </a>
                               <a href="#">洛斯小丁 Karlos&ting</a>
                           </div>
                       </div>
                       <div class="block_b">
                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img05.miyabaobei.com/d1/p5/2018/04/12/38/6b/386bb81198954751b43c79050020ba2f168777005.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季新款男宝宝开档连体衣</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>59</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>179</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/28/b7/c2/b7c26ade11437c0fb65811b9896a72dc051366202.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>49</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/28/b7/c2/b7c26ade11437c0fb65811b9896a72dc051366202.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>49</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/05/15/1f/38/1f385c630e948a50d54847bdea5dd0f2820762145.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>满减</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季新款男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>79</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>
                            
                            <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2017/05/16/5e/04/5e04392037e1708eec7d1cf36e34024d199461132.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">婴儿连体衣服纯棉春秋季男宝宝绅士满月0-3-6个月1周岁新生儿礼服</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>208</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>536</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                       </div>
                   </div>
               </div>


               <div class="layout">
                   <div class="block">
                       <div class="block_t">
                           <div class="fl">
                               <a href="#">
                                    <img src="https://img01.miyabaobei.com/d1/p3/brand/969_brand_logo_img1461150384.jpg" alt="" />            
                               </a>
                               <a href="#">洛斯小丁 Karlos&ting</a>
                           </div>
                       </div>
                       <div class="block_b">
                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img05.miyabaobei.com/d1/p5/2018/04/12/38/6b/386bb81198954751b43c79050020ba2f168777005.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季新款男宝宝开档连体衣</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>59</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>179</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/28/b7/c2/b7c26ade11437c0fb65811b9896a72dc051366202.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>49</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/03/28/b7/c2/b7c26ade11437c0fb65811b9896a72dc051366202.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>爆款直降</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>49</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>

                           <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2018/05/15/1f/38/1f385c630e948a50d54847bdea5dd0f2820762145.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>满减</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">夏季新款男女宝宝新款七分裤</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>79</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>159</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>
                            
                            <div class="block_content">
                               <a href="#">
                                   <div class="gds-img">
                                       <img src="https://img06.miyabaobei.com/d1/p5/2017/05/16/5e/04/5e04392037e1708eec7d1cf36e34024d199461132.jpg@base@tag=imgScale&w=447" alt="" />
                                       <span>包邮</span>
                                   </div>
                                   <div class="gds-desc">
                                       <p class="title">婴儿连体衣服纯棉春秋季男宝宝绅士满月0-3-6个月1周岁新生儿礼服</p>
                                        <div class="price">
                                           <span class="new">
                                               ¥
                                               <em>208</em>
                                           </span>
                                           <span class="old">
                                               ¥
                                               <em>536</em>
                                           </span>
                                        </div>
                                   </div>
                               </a>
                           </div>


                       </div>
                   </div>
               </div>


               
           </div> 
        </section>
        

        <footer>
            <div class="container">
                <div class="footer_t">
                    <a href="#">
                        <i></i>
                        <b>可信赖</b>
                        进口母婴特卖
                    </a>
                
                    <a href="#">
                        <i></i>
                        <b>无忧</b>
                        正品保证
                    </a>

                    <a href="#">
                        <i></i>
                        <b>7天</b>
                        无理由退货
                    </a>


                    <a href="#">
                        <i></i>
                        <b>恒温仓</b>
                        完善的货物仓储
                    </a>


                    <a href="#">
                        <i></i>
                        <b>24小时</b>
                        快速发货
                    </a>


                    <a href="#">
                        <i></i>
                        <b>100万</b>
                        妈妈口碑信赖
                    </a>

                </div>


                <div class="footer_c">
                    <div class="content_l fl">
                        <ul>
                            <li class="strong">使用帮助</li>
                            <li><a href="#">新手指南</a></li>
                            <li><a href="#">蜜粉值体系</a></li>
                            <li><a href="#">蜜豆体系</a></li>
                            <li><a href="#">正品承诺</a></li>
                        </ul>

                        <ul>
                            <li class="strong">支付方式</li>
                            <li><a href="#">支付方式</a></li>
                            <li><a href="#">支付流程</a></li>
                            <li><a href="#">跨境进口税</a></li>
                        </ul>

                        <ul>
                            <li class="strong">配送方式</li>
                            <li><a href="#">包邮政策</a></li>
                            <li><a href="#">发货时间</a></li>
                            <li><a href="#">配送区域</a></li>
                            <li><a href="#">验货签收</a></li>
                        </ul>

                        <ul>
                            <li class="strong">售后服务</li>
                            <li><a href="#">退货政策</a></li>
                            <li><a href="#">退货流程</a></li>
                            <li><a href="#">退货方式</a></li>
                        </ul>

                        <ul class="NContact">
                            <li class="strong">联系方式</li>
                            <li>总裁邮箱 ceo@mia.com</li>
                            <li>商务合作 bd@mia.com</li>
                            <li>媒体合作 pr@mia.com</li>
                            <li>招商中心 zhaoshang@mia.com</li>
                            <li>企业采购 qiye@mia.com</li>
                        </ul>
                    </div>
                    <div class="content_r fr">
                        <ul class="EWM">
                            <li class="strong">关注蜜芽</li>
                            <li>
                                <img src="https://img.miyabaobei.com/d1/p4/2016/11/15/3e/f6/3ef603e61e175352d66addb2b55722b2978255723.jpg" alt="" />


                                <div class="right">
                                    <a href="#">
                                        <img src="https://file01.miyabaobei.com/resources/images/index_fd_wb.gif" alt="官方微博" />
                                    </a>
                                    <div>
                                        <img src="https://file01.miyabaobei.com/resources/images/index_fd_wx.gif" alt="" />
                                    </div>
                                </div>  
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer_b">
                    <p>
                        <a href="#">关于蜜芽</a>|
                        <a href="#">加入蜜芽</a>|
                        <a href="#">商务合作</a>|
                        <a href="#">帮助中心</a>|
                        <a href="#">联系我们</a>|
                        <a href="#">友情连接</a>|
                        <a href="#">触屏版</a>|
                        <a href="#">媒体报道</a>
                    </p>
                    <p>
                    京公网安备：11010502027270 | 营业执照：91110105582599307U | 食品经营许可证：SP1101051410296669 | 出版物经营许可证：新出发京零字第朝160088号 
                    <br />
                     沪ICP备16004431号-2 | 员工舞弊举报：jiancha@mia.com 电话：010-56733467
                     <br />
                     通过本网站直接或者间接地推销商品或者服务的商业宣传活动均属“广告”
                     <br />
                    Copyright © 2018 蜜缇（上海）网络科技有限公司 Mia.com 保留一切权利。
                    </p>
                    <p class="cert">
                        <a href="#"><img src="https://img.miyabaobei.com/d1/p5/2017/12/01/78/6d/786de03b6e7d22ca19e6476983315bc5109099620.jpg" alt="" /></a>

                        <a href="#">
                            <img src="https://img.miyabaobei.com/d1/p4/2016/11/15/45/28/4528ccca07835b01064270e69e08adc0943841428.png" alt="" />
                        </a>
                        <img src="https://file01.miyabaobei.com/resources/images/res/alipay.jpg" alt="" />

                        <a href="#">
                            <img src="https://img.miyabaobei.com/d1/p5/2017/08/30/39/19/39196745138a2736f3a6d2a9ae8ac11a790263375.png" alt="" />
                        </a>

                        <a href="#">
                            <img src="https://img.miyabaobei.com/d1/p5/2017/08/30/de/89/de894f8cbc3f6780971e0aee5d60684c790435363.jpg" alt="" />
                        </a>
                    </p>
                </div>    
            </div>
        </footer>

        
        <div class="fixl">
            <img src="https://img.miyabaobei.com/d1/p3/2016/05/19/c2/8f/c28f17d15a13149cfa89f18dc32efb87.png" alt="" />
            <img src="https://img.miyabaobei.com/d1/p5/2016/11/15/d0/07/d007602602b2889dca7a8b7dbd43cb3a963181367.png" alt="" />
        </div>
        <div class="fixr">
            <ul>
                <li><a href="http://localhost:83/src/html/cart.html#">
                    <i class="fa fa-cart-arrow-down"></i>
                    购物车
                </a></li>
                <li><a href="">
                    <i class="fa fa-phone-square"></i>
                    咨询
                </a></li>
                <li>
                    <i class="fa fa-weixin"></i>
                    微信

                    <div class="item-app"></div>
                </li>
            </ul>
            <div class="black">
                <i class="fa fa-sort-asc"></i>
            </div>
        </div>
            

        <script type="text/javascript">
            $(function(){
                $.ajax({
                    url: 'http://localhost:86/project/src/api/shuju.php?start=0&end=5',
                    type: 'post',
                    success: function(res){
                        console.log(res);
                        var r = window.eval('(' + res + ')');
                        console.log(r);
                        var ul = document.createElement('ul');
                     
                        ul.innerHTML = r.map(function(item){
                            return `<li class="fl">
                                        <a href="http://localhost:86/project/src/html/commodity.html" target="_blank">
                                            <div class="goods_t">
                                                <img src="${item.images}" width='219px'>
                                                <span class="shade"></span>
                                            </div>
                                            <div class="goods_b"> 
                                                <p style="width:193px; height:16px; line-height:16px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; font-weight:700; color:#000">${item.name}</p>
                                                <p style="height:16px; line-height:16px;">${item.state}</p>
                                                <div class="price">
                                                    <span class="new">
                                                        拼团价:¥
                                                        <em>${item.price}</em>
                                                    </span>
                                                    <span class="old">
                                                        市场价:
                                                        <em>${item.oldprice}</em>
                                                    </span>
                                                </div>
                                                <p class="buy" style="height:16px; line-height:16px;">18940人已团</p>
                                                <span class="btn_buy">去拼团</span>
                                            </div>
                                        </a>
                                    </li>`
                        }).join('\n');


                    //回调地狱写法
                        $.ajax({
                            url: 'http://localhost:86/project/src/api/shuju.php?start=5&end=10',
                            type: 'post',
                            success: function(res){
                                console.log(res);
                                var r = window.eval('(' + res + ')');
                                console.log(r);
                                var Oul = document.createElement('ul');
                                Oul.innerHTML = r.map(function(item){
                                    return `<li class="fl">
                                                <a href="http://localhost:86/project/src/html/commodity.html" target="_blank">
                                                    <div class="goods_t">
                                                        <img src="${item.images}" width='219px'>
                                                        <span class="shade"></span>
                                                    </div>
                                                    <div class="goods_b"> 
                                                        <p style="width:193px; height:16px; line-height:16px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; font-weight:700; color:#000">${item.name}</p>
                                                        <p style="height:16px; line-height:16px;">${item.state}</p>
                                                        <div class="price">
                                                            <span class="new">
                                                                <em>${item.price}</em>
                                                            </span>
                                                            <span class="old" style=" position:  relative; top: -23px; left: 88px;">
                                                                <em>${item.oldprice}</em>
                                                            </span>
                                                        </div>
                                                       
                                                    </div>
                                                </a>
                                            </li>`
                                }).join('\n');

                                goods.appendChild(Oul);
                            }

                        })
                        

                        var goods = document.getElementsByClassName('goods')[0];
                        goods.appendChild(ul);
                        
                    }
                })
            })
        </script>
  </body>

</html> 