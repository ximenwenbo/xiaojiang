<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"C:\www\deshiguanwang\public/../application/home\view\about\index.html";i:1550914606;s:56:"C:\www\deshiguanwang\application\home\view\pub\head.html";i:1551152961;s:56:"C:\www\deshiguanwang\application\home\view\pub\foot.html";i:1550113599;}*/ ?>

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
   






<!--publicBanner-->
<div class="piblicBanner">
    <img  class="ggg"   src="<?php echo substr($data[0]['img'],1); ?>">

    <style>
        @media screen and (min-width: 1201px){
            .ggg{
                height: 550px;
            }
        }
    </style>

</div>
<!--aboutHighDao-->
<div class="aboutHighDao">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab">
                    <ul>

 

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="innerAbout" id="innerAbout">
        <div class="container">

        <!-- FSDFSDDDDDDDDDDDDDDDDDDDDDD -->
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <h3>公司简介 /
                            <small>COMPANY PROFILES</small>
                            <span class="line"></span></h3>
                    </div>
                    <div class="aboutContent">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="aboutImg">
                                    <img  width="650" height="300" src="<?php echo substr($data[1]['img'],1); ?>" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="aboutTxt">
                                    <p><?php echo $infos['about_us']; ?></p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
             
        </div>
    </div>
    <div  class="companyProfiles" id="companyProfiles">
        <div class="container">

        <!-- FSDFSDDDDDDDDDDDDDDDDDDDDDD -->
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <h3>历史沿革 /
                            <small> Historical evolution</small>
                            <span class="line"></span></h3>
                    </div>
                    <div class="aboutContent">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="aboutImg">
                                    <img  width="650" height="300" src="<?php echo substr($data[2]['img'],1); ?>" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="aboutTxt">
                                    <p>&nbsp&nbsp公司于1990年成立于中国北京，成立之初名为北京邓氏制冷安装服务中心，主要从事家（商）用空调设备销售及安装和冷库制作安装工程，同时提供咨询、工程设计等服务。合作品牌有美的、大金、日立、麦克维尔、格里等国内外一流品牌，公司是国内第一批成立美的空调专卖店企业，</p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
             
        </div>
    </div>
    <div class="companyHonors" id="companyHonors">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <h3>公司荣誉 /
                            <small>COMPANY HORNORS</small>
                            <span class="line"></span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel comment-carousel-carousel">
                    <div class="honnor">
                        <img src="<?php echo config('home_images'); ?>/honnorimg.jpg" class="img-responsive">
                        <div class="honnorTxt">
                            <h4>计算机软件著作权等级证书</h4>
                            <p>恒道FTA外贸助手软件</p>
                        </div>
                    </div>
                    <div class="honnor">
                        <img src="<?php echo config('home_images'); ?>/honnorimg.jpg" class="img-responsive">
                        <div class="honnorTxt">
                            <h4>计算机软件著作权等级证书</h4>
                            <p>恒道FTA外贸助手软件</p>
                        </div>
                    </div>
                    <div class="honnor">
                        <img src="<?php echo config('home_images'); ?>/honnorimg.jpg" class="img-responsive">
                        <div class="honnorTxt">
                            <h4>计算机软件著作权等级证书</h4>
                            <p>恒道FTA外贸助手软件</p>
                        </div>
                    </div>
                    <div class="honnor">
                        <img src="<?php echo config('home_images'); ?>/honnorimg.jpg" class="img-responsive">
                        <div class="honnorTxt">
                            <h4>计算机软件著作权等级证书</h4>
                            <p>恒道FTA外贸助手软件</p>
                        </div>
                    </div>
                    <div class="honnor">
                        <img src="<?php echo config('home_images'); ?>/honnorimg.jpg" class="img-responsive">
                        <div class="honnorTxt">
                            <h4>计算机软件著作权等级证书</h4>
                            <p>恒道FTA外贸助手软件</p>
                        </div>
                    </div>
                    <div class="honnor">
                        <img src="<?php echo config('home_images'); ?>/honnorimg.jpg" class="img-responsive">
                        <div class="honnorTxt">
                            <h4>计算机软件著作权等级证书</h4>
                            <p>恒道FTA外贸助手软件</p>
                        </div>
                    </div>
                    <div class="honnor">
                        <img src="<?php echo config('home_images'); ?>/honnorimg.jpg" class="img-responsive">
                        <div class="honnorTxt">
                            <h4>计算机软件著作权等级证书</h4>
                            <p>恒道FTA外贸助手软件</p>
                        </div>
                    </div>
                    <div class="honnor">
                        <img src="<?php echo config('home_images'); ?>/honnorimg.jpg" class="img-responsive">
                        <div class="honnorTxt">
                            <h4>计算机软件著作权等级证书</h4>
                            <p>恒道FTA外贸助手软件</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
   

 
</div>
<script>
    var lis = document.getElementsByClassName("btn");
    for(var i = 0; i < lis.length; i++) {
        lis[i].onclick = function() {
            //获取当前li的data-to属性值，用来匹配目标div
            var attr = this.getAttribute("data-to");
            //获取与当前li想匹配的div距离页面顶端的距离
            var div_top = document.getElementById(attr).offsetTop;
            window.scrollTo(0, div_top - 90);
        }
    }
</script>
<!----footer---->
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
