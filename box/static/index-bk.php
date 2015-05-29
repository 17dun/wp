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
                    <li><a href="/index.php"></a>
                    <?php wp_list_pages('title_li=&depth=1&sort_column=post_date&sort_order=id');?>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrap content">
        <div class="main">
            <div class="banner">
                <ul class="banner-images-box">
                    <?php
                        $i=1;
                        while ( $i<= 5) {
                            echo '<li><a href="'.get_option('home_banner'.$i.'_link').'"><img src="'.get_option('home_banner'.$i.'_img').'">'.get_option('home_banner'.$i.'_title').'</a></li>';
                            $i++;
                        }
                    ?>
                </ul>
                <ul class="banner-btn-box">
                    <li><a href="#" class="banner-btn">1</a></li>
                    <li><a href="#" class="banner-btn">2</a></li>
                    <li><a href="#" class="banner-btn">3</a></li>
                    <li><a href="#" class="banner-btn">4</a></li>
                    <li><a href="#" class="banner-btn">5</a></li>
                </ul>
            </div>
            <div class="pan">
                <?php if (get_option('home_catid1')) { $catid1 = get_option('home_catid1'); } ?>
                <h3 class="pan-header"><?php wp_list_categories('include='.$catid1.'&title_li=&style=none'); ?></h3>
                <ul class="pan-body">
                    <?php query_posts('cat='.$catid1.'&showposts=8'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li><span><?php the_time('m-d'); ?></span>
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
                    <li><span><?php the_time('m-d'); ?></span>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>     
                    <?php endwhile; ?> 
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
                <?php if (get_option('home_catid3')) { $catid3 = get_option('home_catid3'); } ?>
                <h3 class="pan-header"><?php wp_list_categories('include='.$catid3.'&title_li=&style=none'); ?></h3>
                <ul class="pan-body">
                    <?php query_posts('cat='.$catid3.'&showposts=8'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li><span><?php the_time('m-d'); ?></span>
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
                    <li><span><?php the_time('m-d'); ?></span>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>     
                    <?php endwhile; ?> 
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

    <div class="wrap footer"> <?php if ( get_option('com_copyright') ) { echo stripslashes(get_option('com_copyright'));} ?></div>
</body>
</html>