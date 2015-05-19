<div class="clear"></div> 
<div id="footer"> 
    <a id="gotop" href="javascript:void(0);" onclick="MGJS.goTop();return false;">回到顶部</a> 
    <div class="copy"> 
       <p>Copyright © 2008-2010　<?php bloginfo('name');?> 版权所有  <br /> 
	   Design By <A href="http://pakelab.com" target="_blank">帕克实验室</A> |  Power By Wordpress<br /> 
Valid <a href="http://validator.w3.org/check?uri=referer" target="_blank">XHTML 1.1</a> and <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" target="_blank">CSS 3</a> <?php if ( get_option('pake_footer') ) { ?>
<?php echo stripslashes(get_option('pake_footer')); ?>
<?php } ?> </p> 
	</div> 
    </div> 
</div> 
<?php wp_footer(); ?>
</body> 
</html>