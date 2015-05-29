<?php include (TEMPLATEPATH . '/header.php'); ?>
<div class="place">
        当前位置: <a href="<?php echo get_settings('home'); ?>">首页111</a> > <?php the_title(); ?></div>
	<div class="content wrap">
    	<div class="main">
        	
        	<div class="contents post">
			<?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            	                <div class="title"><h2><?php the_title(); ?></h2></div>
				<div class="conc">
                	<?php the_content(''); ?>
  <?php endwhile; ?>
      <?php endif; ?>

<div class="clear"></div>
</div>
</div>
</div>


<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
        	
    <div class="rb"></div>
	</div>
  <?php include (TEMPLATEPATH . '/links.php'); ?>
           <div class="clear"></div>
	</div><!-- #container -->