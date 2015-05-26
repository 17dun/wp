<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $description?>" />
    <meta name="keywords" content="<?php echo $keywords?>" />
    <title></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/slide-2.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/slide.js"></script>
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
                     <input style="margin-bottom:-6px;" type="image" src="wp-content/themes/tutear/images/ss.jpg" name="Submit" value="提交">
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
                    <li><a href="/index.php">首页</a>
                     <li><a href="/index.php">关于公会</a>
                     <li><a href="/index.php">新闻资讯</a>
                     <li><a href="/index.php">协会活动</a>
                     <li><a href="/index.php">会员服务</a>
                     <li><a href="/index.php">入会申请</a>
                     <li><a href="/index.php">创投孵化器</a>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrap content">
        <div class="main">
            <div class="banner">
                   <div id="slider-bg">             
                    <div id="slider-photos"> 
                      <div id="slides"> 
                        <div class="slides_container">
                        <div class="slide"> 
                           <img src="images/11111.jpg" width="700" height="200" alt="第十八届全国大学生网球锦标赛暨全国高校“校长杯”网球比赛开幕"/> 
                           <div class="caption"> 
                            <h1><a href="#" style="text-decoration:none;font-size:12px;">第十八届全国大学生网球锦标赛暨全国高校“校长杯”网球比赛开幕</a></h1> 
                          </div> 
                        </div>
                        <div class="slide">
                            <img src="images/big1.jpg" width="700" height="200" alt="第十三届全国大学生田径锦标赛开幕 人大学子男子百米专业组夺冠"/> 
                            <div class="caption"> 
                              <h1><a href="#" style="text-decoration:none;font-size:12px;">第十三届全国大学生田径锦标赛开幕 人大学子男子百米专业组夺冠</a></h1> 
                             </div> 
                        </div> 
                        <div class="slide"> 
                        <img src="images/777.jpg" width="700" height="200" alt=""/> 
                          <div class="caption"> 
                            <h1><a href="#" style="text-decoration:none;font-size:12px;">新闻学院开展赴山东诸城、湖南中方“新闻学子走基层”学习实践活动</a></h1> 
                            </div> 
                     </div>

                    <div class="slide">
                     <img src="images/22.jpg" width="700" height="200" alt="人大成立中国共产党历史与理论研究院 9名专家受聘任学术顾问"/> 
                        <div class="caption"> 
                           <h1><a href="#" style="text-decoration:none;font-size:12px;">人大成立中国共产党历史与理论研究院 9名专家受聘任学术顾问</a></h1> 
                        </div> 
                    </div>
                      </div>    
                        <a href="#" class="prev"><img src="images/arrow-prev.png" width="30" height="70" alt="Arrow Prev" border="0"></a> 
                        <a href="#" class="next"><img src="images/arrow-next.png" width="30" height="70" alt="Arrow Next" border="0"></a>
                    </div> 
                </div> 
            </div>
            </div>
            <div class="clear"></div>
            <div class="pan">
                <?php if (get_option('home_catid1')) { $catid1 = get_option('home_catid1'); } ?>
                <h3 class="pan-header"><?php wp_list_categories('include='.$catid1.'&title_li=&style=none'); ?></h3>
                <ul class="pan-body">
                    <?php query_posts('cat='.$catid1.'&showposts=8'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>     
                    <?php endwhile; ?> 
                </ul>
            </div>
            <div class="pan">
                <?php if (get_option('home_catid2')) { $catid2 = get_option('home_catid2'); } ?>
                <h3 class="pan-header"><?php wp_list_categories('include='.$catid2.'&title_li=&style=none'); ?></h3>
                <ul class="pan-body">
                    <?php query_posts('cat='.$catid2.'&showposts=8'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>     
                    <?php endwhile; ?> 
                </ul>
            </div>
            <div class="clear"></div>
            <div class="pan middle">
                <h3 class="pan-header">孵化案例</h3>
                <ul class="pan-body">
                    <li>
                        <a href="#">
                            <img src="" />
                            <p>不知名茶</p>
                        </a>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
    

            <div class="pan">
                <?php if (get_option('home_catid3')) { $catid3 = get_option('home_catid3'); } ?>
                <h3 class="pan-header"><?php wp_list_categories('include='.$catid3.'&title_li=&style=none'); ?></h3>
                <ul class="pan-body">
                    <?php query_posts('cat='.$catid3.'&showposts=8'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>     
                    <?php endwhile; ?> 
                </ul>
            </div>
            <div class="pan">
                <?php if (get_option('home_catid4')) { $catid4 = get_option('home_catid4'); } ?>
                <h3 class="pan-header"><?php wp_list_categories('include='.$catid4.'&title_li=&style=none'); ?></h3>
                <ul class="pan-body">
                    <?php query_posts('cat='.$catid4.'&showposts=8'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>     
                    <?php endwhile; ?> 
                </ul>
            </div>
        </div>
        <div class="sider">
            <div class="pan video">
                <div class="pan-body">
                <img class="video-img" src="wp-content/themes/tutear/images/test.jpg" alt="" />
                <div class="video-bg"></div>
                <p class="video-info">整合各方资源，通过提供多样化的服务，不断丰富和创新服务内容和服务模式，服务意识与服务质量赢得了会员企业的认可。
                </p>

                </div>
            </div>
            <div class="nums">
                <ul class="nums-list">
                    <li><a class="btn0" href=""></a><p>章程</p></li>
                    <li><a class="btn1" href=""></a><p>成员简介</p></li>
                    <li><a class="btn2" href=""></a><p>筹委会</p></li>
                    <li><a class="btn3" href=""></a><p>公会分会</p></li>
                    <li><a class="btn4" href=""></a><p>大记事</p></li>
                    <li><a class="btn5" href=""></a><p>联系方式</p></li>
                </ul>

            </div>

        </div>

        <div class="fd-link">
            
        </div>
        <div class="clear"></div>
    </div>

    <div class="wrap footer"> <?php if ( get_option('com_copyright') ) { echo stripslashes(get_option('com_copyright'));} ?></div>

    <script>
        $(document).ready(function(){
        $('#slides').slides({
            preload: true,
            preloadImage: 'images/ajax-loader.gif',
            effect: 'slide',
            play: 5000,
            pause: 2500,
            hoverPause: true
        });
    });


    </script>

</body>
</html>