<div class="sider">
    <div class="hasbar">
        <h3 class="pan-header"><a>文章分类</a></h3>
        <ul class="pan-body">
           <?php wp_list_categories('title_li=&orderby=name&hide_empty=0&show_count=1&depth=1');?>
        </ul>
    </div>
    <div class="hasbar" style="margin-top:20px;">
        <h3 class="pan-header"><a>推荐文章</a></h3>
        <ul class="pan-body">
           <?php 
                  global $query_string3;
                  query_posts($query_string3.'&posts_per_page=10&caller_get_posts=1&orderby=rand'); ?>
                <?php while (have_posts()) : the_post(); ?>
                  <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </div>
