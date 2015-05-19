<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" type="text/css" media="screen" /> 
<script type="text/javascript" src="<?php bloginfo('template_url');?>/images/base.js"></script>
<meta name="description" content="<?php echo $description?>" />
<meta name="keywords" content="<?php echo $keywords?>" />
</head>
<body class="home blog cat-1-id">
<div id="wrap"> 
	<div id="header">
        <div id="header_wrap">
    	<div id="blog_title"> 
        	<h1><a href="<?php bloginfo('home'); ?>/"><?php bloginfo('name') ?></a></h1> 
        </div> 
		<div id="blog_topad"> 
        	
        </div> 
        <div id="top_r">
			<div class="search" style="margin-top:20px;">
            <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/"> 
                <input name="s" type="text" id="s" onblur="if (this.value =='') this.value='站内搜索...'" onfocus="this.value=''" onclick="if (this.value=='站内搜索...') this.value=''" value="站内搜索..." class="inputbox" /> 
                <input type="submit"  id="button" value="" class="go" /> 
            </form>
            </div> 
        </div> 

    </div>
	    </div>
                <div id="nav_wrap">
        <div id="nav"> 
         <ul class="main_menu">
         <li><a href="/index.php">首页</a>
<?php wp_list_pages('title_li=&depth=1&sort_column=post_date&sort_order=id');?>
        </ul>           

        </div> 
        <div class="sub"><?php if ( get_option('pake_notice') ) { ?>
<?php echo stripslashes(get_option('pake_notice')); ?><?php } ?></div> 
</div>