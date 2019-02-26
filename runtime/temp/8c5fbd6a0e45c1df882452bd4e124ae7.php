<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"C:\www\deshiguanwang\public/../application/home\view\product\index.html";i:1547082469;s:56:"C:\www\deshiguanwang\application\home\view\pub\head.html";i:1551152961;s:56:"C:\www\deshiguanwang\application\home\view\pub\foot.html";i:1550113599;}*/ ?>

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
    <img src="<?php echo substr($img['img'],1); ?>" >
    <div class="breadcrumb_part">
        <div class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="guide">
                            <h2>产品服务 /
                                <small>Product Service</small>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--caseList-->
<div class="caseList">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab">
                    <ul id="myTab">
                        <li class="aa">
                            <a onclick="shuaxin()"   class="bb" data-toggle="tab">全部产品</a>
                        </li>
                        <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <li >
                            <a href="#<?php echo $v['category_id']; ?>"   class="bb" data-toggle="tab"><?php echo $v['category_name']; ?></a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>



                    </ul>
                </div>
                <div id="myTabContent" class="tab-content">
                    <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                    <div class="tab-pane fade in active" id="<?php echo $vv['category_id']; ?>">
                        <div class="row">
                            <?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvv): $mod = ($i % 2 );++$i;if($vvv['category_id'] == $vv['category_id']): ?>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="caseItem">
                                    <img src="<?php echo substr($vvv['product_img'],1); ?>"  width="480" height="480"  class="img-responsive">
                                    <h5>￥<?php echo $vvv['product_price']; ?></h5>
                                    <p><?php echo $vvv['product_name']; ?></p>
                                    <div class="footLink">
                                        <div>
                                            <a href="<?php echo $vvv['product_link']; ?>" target="view_window" class="leftLink">商品链接</a>

                                        </div>
                                        <a href="<?php echo $vvv['product_link']; ?>" target="view_window" class="rightLink">查看详情</a>
                                    </div>
                                </div>
                            </div>
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>

                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>

                <div class="page"></div>
            </div>
        </div>
    </div>
    <script>

        function shuaxin(){
            location.reload();
        }



        $(".page").createPage({
            pageCount:10,
            current:1,
            backFn:function(p){
                console.log(p);
            }
        });

          var aa =  $('.aa')[0];

         aa.className = "active";



    </script>
</div>
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
