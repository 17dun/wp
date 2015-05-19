<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $description?>" />
    <meta name="keywords" content="<?php echo $keywords?>" />
    <title></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/index.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/images/base.js"></script>
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
                    <input type="submit"  id="button" value="" class="go" /> 
                </form>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header-nav">
            <div id="nav"> 
                <ul class="main_menu">
                    <li><a href="/index.php">首页</a>
                    <?php wp_list_pages('title_li=&depth=1&sort_column=post_date&sort_order=id');?>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrap content">
        <div class="main">
            <div class="banner">
                <ul class="banner-images">
                    
                    <li></li>
                </ul>
                <ul class="banner-btn">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="pan">
                <h3 class="pan-header">公会新闻</h3>
                <ul class="pan-body">
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                </ul>
            </div>
            <div class="pan">
                <h3 class="pan-header">公会活动</h3>
                <ul class="pan-body">
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="midder">
                <h3 class="pan-header">公会活动</h3>
                <ul>
                    <li><img src="wp-content/themes/tutear/images/shili.jpg"/></li>
                    <li><img src="wp-content/themes/tutear/images/shili.jpg"/></li>
                    <li><img src="wp-content/themes/tutear/images/shili.jpg"/></li>
                    <li><img src="wp-content/themes/tutear/images/shili.jpg"/></li>
                    <li><img src="wp-content/themes/tutear/images/shili.jpg"/></li>
                    <li><img src="wp-content/themes/tutear/images/shili.jpg"/></li>
                    <li><img src="wp-content/themes/tutear/images/shili.jpg"/></li>
                    <li><img src="wp-content/themes/tutear/images/shili.jpg"/></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="pan">
                <h3 class="pan-header">合作会议</h3>
                <ul class="pan-body">
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                </ul>
            </div>
            <div class="pan">
                <h3 class="pan-header">推荐项目</h3>
                <ul class="pan-body">
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                    <li>【快乐投资学院】中国青年投资100——王维公开课干货盘点</li>
                </ul>
            </div>
        </div>
        <div class="sider">
            <div class="info">
                

            </div>
            <div class="nums">
                

            </div>

        </div>

        <div class="fd-link">
            
        </div>
        <div class="clear"></div>
    </div>

    <div class="wrap footer"> <?php if ( get_option('tutbear_copyright') ) { echo stripslashes(get_option('tutbear_copyright'));} ?></div>
</body>
</html>