<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"C:\www\deshiguanwang\public/../application/home\view\index\index.html";i:1550882702;s:56:"C:\www\deshiguanwang\application\home\view\pub\head.html";i:1551152961;s:56:"C:\www\deshiguanwang\application\home\view\pub\foot.html";i:1550113599;}*/ ?>

<!----header---->

<!doctype html>
<html>
 
<head>
<meta name="baidu-site-verification" content="YxZRW4iX1Q" />
    <meta charset="utf-8">
    <meta content="width=device-width,inital-scarel=1"name="viewport"/>
    <meta name="keywords" content="<?php echo $da['keywords']; ?>" />
    <meta name="description" content="<?php echo $da['content']; ?>" />

    <title><?php echo $da['title']; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>media.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>font-awesome.min.css"/>
    <script type="text/javascript" src="<?php echo config('home_js'); ?>jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="<?php echo config('home_js'); ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo config('home_js'); ?>scrolltopcontrol.js"></script>
    <script type="text/javascript" src="<?php echo config('home_js'); ?>main.js"></script>
    <script type="text/javascript" src="<?php echo config('home_js'); ?>jquery.page.js"></script>
    <script type="text/javascript" src="<?php echo config('home_js'); ?>wow.min.js"></script>

    <script type="text/javascript">
        new WOW().init();
    </script>
 
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?eb5dfa82517f954586c8b09305899118";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


    <script>
        $(document).ready(function () {
            /*评论*/
            $(".comment-carousel-carousel").owlCarousel({
                autoPlay: 6000,
                items: 6,
                navigation: false,
                pagination: true,
                itemsDesktop: [1199, 4],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [768, 2],
                itemsMobile: [479, 1],
            });

        })
    </script>
</head>

<body>

<div id="header">

    <nav role="navigation" class="navbar navbar-style">
        <div class="container">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#mb-navbar" class="navbar-toggle"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>

                <a href="#"  id='hhh' class="navbar-brand">
                       
                </a>

            </div>


            <div id="mb-navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">





                    <li class="active">
                        <a href="/">首页</a>
                    </li>
                    <li>
                        <a href="/home/about/index.html">关于我们</a>
                    </li>
                    <li>
                        <a href="/home/product/index.html">产品服务</a>
                    </li>


                    <li>
                        <a href="/home/news/index.html">新闻中心</a>
                    </li>
                    <li>
                        <a href="/home/team/index.html">公司团队</a>
                    </li>
                    <li>
                        <a href="/home/contact/index.html">联系我们</a>
                    </li>
                       <li>
                        <a  target="_blank" href="https://mall.jd.com/index-669855.html">京东店铺</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://shop.suning.com/70222662/index.html">苏宁店铺</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>
<!----banner---->
<style>

    @media screen and (min-width: 1201px) {
        *{
            margin: 0;
            padding: 0;
            border: none;
        }

        .ddd{
            display: none;
        }
        .fff{
            display: none;
        }

        .aaa{
            display: block;
            margin-bottom: 100px;
        }
        .banner_box{
            position: relative; /*attention*/
            width: 100%;
            height: 550px;
            overflow: hidden;
        }
        .banner_images{
            position: absolute; /*attention*/
            left: 0;
            width: 400%; /*attention please*/
        }
        .banner_img{
            float: left;
            width: 25%; /*attention please*/
            height: 550px;
        }
        .banner_img img{
            width: 100%;
            height: 550px;
        }

        .switcher{
            position: absolute;
            top: 285px;
            width: 100%;
            display: none;
        }
        .switcher p{
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            color: #fff;
            font-size: 30px;
            background: rgba(0, 0, 0, .8);
            border-radius: 50%;
            cursor: pointer;
        }
        .switcher .prev{
            float: left;
            margin-left: 50px
        }
        .switcher .next{
            float: right;
            margin-right: 50px;
        }
        .banner_box:hover .switcher{
            display: block;
        }
        .points{
            position: absolute;
            left: 50%;
            bottom: 20px;
            width: 400px;
            margin-left: -200px;
            overflow: hidden;
        }
        .points li{
            width: 100px;
            height: 5px;
            background: rgba(0, 0, 0, .8);
            float: left;
            list-style: none;
            cursor: Crosshair;
        }
        .points li.point_on{
            background:white;
        }
    }

    @media screen and (max-width: 600px) {
        *{
            margin: 0;
            padding: 0;
            border: none;
        }


        .aaa{
            display: block;
            margin-bottom: 20px;
        }
        .banner_box{
            position: relative; /*attention*/
            width: 100%;
            height: 150px;
            overflow: hidden;
        }
        .banner_images{
            position: absolute; /*attention*/
            left: 0;
            width: 400%; /*attention please*/
        }
        .banner_img{
            float: left;
            width: 25%; /*attention please*/
            height: 150px;
        }
        .banner_img img{
            width: 100%;
            height: 150px;
        }

        .switcher{
            position: absolute;
            top: 285px;
            width: 100%;
            display: none;
        }
        .switcher p{
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            color: #fff;
            font-size: 30px;
            background: rgba(0, 0, 0, .8);
            border-radius: 50%;
            cursor: pointer;
        }
        .switcher .prev{
            float: left;
            margin-left: 50px
        }
        .switcher .next{
            float: right;
            margin-right: 50px;
        }
        .banner_box:hover .switcher{
            display: block;
        }
        .points{
            position: absolute;
            left: 50%;
            bottom: 5px;
            width: 400px;
            margin-left: -30px;
            overflow: hidden;
        }
        .points li{
            width: 20px;
            height: 5px;
            background: rgba(0, 0, 0, .8);
            float: left;
            list-style: none;
            cursor: Crosshair;
        }
        .points li.point_on{
            background:white;
        }

    }


</style>


<div class="banner_box">
    <div class="banner_images">
        <?php if(is_array($inf) || $inf instanceof \think\Collection || $inf instanceof \think\Paginator): $i = 0; $__LIST__ = $inf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <div class="banner_img"><img src="<?php echo substr($v['img_path'],1); ?>" alt="bannerThree"></div>
        <?php endforeach; endif; else: echo "" ;endif; ?>


    </div>

    <div class="switcher">
        <p class="prev">←</p>
        <p class="next">→</p>
    </div>

    <ul class="points">
        <li class="point_on"></li>
        <li></li>
        <li></li>

    </ul>
</div>

<!----about---->
<!--<div id="about">-->
    <!--<div class="container">-->
        <!--<div class="row">-->
            <!--<div class="col-md-12">-->
                <!--<div class="about-text">-->
                    <!--<h1>北京隆富盛元科技发展有限公司</h1>-->
                    <!--<h4>我们有严谨的态度 专业的技术 全面的服务 多年的智能家居行业经验 靠谱的团队</h4>-->

                    <!--<a class="about-btn" href="#">About Us</a>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->
<!----case---->

<div id="culture">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <div>
                        <h2><span>企业文化</span></h2>
                        <p>COMPANY ONLINE PROJECT DISPLAY</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="culture">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="culture-left">
                        <div class="culture-text">
                            <h2>品牌文化:</h2>
                            <p><?php echo $infos['detail_one']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="culture-right">
                        <div class="culture-text">
                            <h2>公司主营业务</h2>
                            <span>Main business of the company</span>
                          <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "没有任何记录" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                <p><?php echo $v['business']; ?></p>
                            <?php endforeach; endif; else: echo "没有任何记录" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div  class="aaa" id="service">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <div>
                        <h2>木瓜 - <span>服务</span></h2>
                        <a href="tel:"></a>
                        <p>Small Craftsman Service</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 paddnone">
                <a href="/home/about/index.html">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?php echo config('home_images'); ?>/icon_pic1.jpg">
                        </div>
                        <div class="service-hover">
                            <img src="<?php echo config('home_images'); ?>/HD-logo.png">
                            <h3>关于木瓜</h3>
                            <p>木瓜文化致力于为客户提供更好的服务 严谨的态度</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 paddnone">
                <a href="/home/news/index.html">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?php echo config('home_images'); ?>/icon_pic2.jpg">
                        </div>
                        <div class="service-hover">
                            <img src="<?php echo config('home_images'); ?>/news-icon.png">
                            <h3>新闻中心</h3>
                            <p>发布浏览业内消息 公司最新状态 参与活动状态</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 paddnone">
                <a href="/home/product/index.html">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?php echo config('home_images'); ?>/icon_pic1.jpg">
                        </div>
                        <div class="service-hover">
                            <img src="<?php echo config('home_images'); ?>/case-icon.png">
                            <h3>木瓜服务</h3>
                            <p>智能家居 学习玩具 空调批发</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 paddnone">
                <a href="/home/contact/index.html">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?php echo config('home_images'); ?>/icon_pic2.jpg">
                        </div>
                        <div class="service-hover">
                            <img src="<?php echo config('home_images'); ?>/tel-icon.png">
                            <h3>联系我们</h3>
                            <p>业务合作 项目咨询可联系我们进一步交流</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //case
    (function ($) {
        $.fn.extend({
            show: function (div) {
                var w = this.width(),
                    h = this.height(),
                    xpos = w / 2,
                    ypos = h / 2,
                    eventType = "",
                    direct = "";
                this.css({"overflow": "hidden", "position": "relative"});
                div.css({"position": "absolute", "top": this.width()});
                this.on("mouseenter mouseleave", function (e) {
                    var oe = e || event;
                    var x = oe.offsetX;
                    var y = oe.offsetY;
                    var angle = Math.atan((x - xpos) / (y - ypos)) * 180 / Math.PI;
                    if (angle > -45 && angle < 45 && y > ypos) {
                        direct = "down";
                    }
                    if (angle > -45 && angle < 45 && y < ypos) {
                        direct = "up";
                    }
                    if (((angle > -90 && angle < -45) || (angle > 45 && angle < 90)) && x > xpos) {
                        direct = "right";
                    }
                    if (((angle > -90 && angle < -45) || (angle > 45 && angle < 90)) && x < xpos) {
                        direct = "left";
                    }
                    move(e.type, direct)
                });

                function move(eventType, direct) {
                    if (eventType == "mouseenter") {
                        switch (direct) {
                            case "down":
                                div.css({"left": "0px", "top": h}).stop(true, true).animate({"top": "0px"}, "fast");
                                break;
                            case "up":
                                div.css({"left": "0px", "top": -h}).stop(true, true).animate({"top": "0px"}, "fast");
                                break;
                            case "right":
                                div.css({"left": w, "top": "0px"}).stop(true, true).animate({"left": "0px"}, "fast");
                                break;
                            case "left":
                                div.css({"left": -w, "top": "0px"}).stop(true, true).animate({"left": "0px"}, "fast");
                                break;
                        }
                    } else {
                        switch (direct) {
                            case "down":
                                div.stop(true, true).animate({"top": h}, "fast");
                                break;
                            case "up":
                                div.stop(true, true).animate({"top": -h}, "fast");
                                break;
                            case "right":
                                div.stop(true, true).animate({"left": w}, "fast");
                                break;
                            case "left":
                                div.stop(true, true).animate({"left": -w}, "fast");
                                break;
                        }
                    }
                }
            }
        });
    })(jQuery)
    /*
    *使用说明：
    *		$(".a").show($(".b"))
    *		a是展示层，b是遮罩层
    *		b在a的内部
    */

    $(".case-item").each(function (i) {
        $(this).show($(".case-hover").eq(i));
    });
</script>
<script>
    $(function(){
        var img_length = $('.banner_img').length; //图片的张数
        var i  = 1;

        //3

        function banner(){ //轮播函数
            if(i < 0){
                i = img_length - 1;
            }
            if(i > img_length - 1){
                i = 0;
            }
            $('.banner_images').animate({'left': (-i*100)+'%'});
            $('.points li').eq(i).addClass('point_on').siblings().removeClass();
            i++;
        }
        var banner_timer = setInterval(banner, 3000);

        $('.switcher p').hover(function(){	//鼠标移入左右切换箭头清除定时器使轮播停止
            clearInterval(banner_timer);
        },function(){	//鼠标移出切换箭头还原定时器，这里为避免定时器重复 还将定时器赋值给上边定义的banner_timer变量
            banner_timer = setInterval(banner, 3000);
        });

        $('.switcher p').click(function(){	//点击左右箭头使图片左右切换
            if($(this).attr('class') == 'prev'){
                i-=2;
                banner();
            }else{
                i += 1;
                banner();
            }
        })

        $('.points li').click(function(){	//点击相应的焦点跳转到对应图片
            i = $(this).index();
            banner();
        });
    });
</script>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <div class="footer-text">
                    <h4>联系方式</h4>
                    <ul>
                        <li><img src="<?php echo config('home_images'); ?>mapicon.png">地址：<?php echo $info['address']; ?></li>
                        <li><img src="<?php echo config('home_images'); ?>teliocn.png">电话：<?php echo $info['tel']; ?></li>
                        <li><img src="<?php echo config('home_images'); ?>emailicon.png">E-mail：<?php echo $info['email']; ?></li>
                        <li><img src="<?php echo config('home_images'); ?>websiteicon.png">网址：<?php echo $info['com']; ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="footer-erwei">

                    <div>
                        <a href="#" class="thumbnail">
                            <img src="<?php echo substr($info['code_img'],1); ?>">
                        </a>
                        <p>扫码关注长顺邓氏微信公众号</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="copyright">
    <p><span>服务条款</span><?php echo $info['copyrigtht']; ?>　<?php echo $info['company_name']; ?>　保留所有权利　<?php echo $info['icp']; ?></p>
</div>
</body>
</html>
