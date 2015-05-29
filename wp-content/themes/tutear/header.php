<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $description?>" />
    <meta name="keywords" content="<?php echo $keywords?>" />
    <title></title>
    <link rel="stylesheet" href="box/static/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="box/static/css/slide-2.css" type="text/css" media="screen" />
    <script type="text/javascript" src="box/static/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="box/static/js/slide.js"></script>
    <script type="text/javascript" src="box/static/js/marquee.js"></script>
    <script type="text/javascript" src="box/static/images/base.js"></script>
</head>
<body>
    <div class="wrap header">
        <div class="header-top">
            <div class="header-top-title"> 
                <h1><a href="<?php bloginfo('home'); ?>/"></a></h1> 
            </div>
            <div class="header-top-search">
                <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/"> 
                    <input name="s" type="text" id="s" class="inputbox" /> 
                     <input style="margin-bottom:-6px;" type="image" src="box/static/images/ss.jpg" name="Submit" value="提交">
                </form>
            </div>
            <ul class="top-nav">
            <li>旗下媒体 |</li>
            <li>官方微博 |</li>
            <li>联系我们 |</li>
            <li>会员登录</li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="header-nav">
            <div id="nav"> 
                <ul class="main_menu">
                    <li><a href="/index.php"><span class="menu-index"></span>公会首页</a>
                     <li><a href="/index.php"><span class="menu-info"></span>关于公会</a>
                     <li><a href="/index.php"><span class="menu-news"></span>新闻资讯</a>
                     <li><a href="/index.php"><span class="menu-act"></span>协会活动</a>
                     <li><a href="/index.php"><span class="menu-serv"></span>会员服务</a>
                     <li><a href="/index.php"><span class="menu-merb"></span>入会申请</a>
                     <li><a href="/index.php"><span class="menu-fuh"></span>创投孵化器</a>
                </ul>
            </div>
        </div>
    </div>