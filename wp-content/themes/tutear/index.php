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
                     <li><a href="?page_id=2"><span class="menu-info"></span>关于公会</a>
                     <li><a href="/index.php"><span class="menu-news"></span>公会新闻</a>
                     <li><a href="/index.php"><span class="menu-act"></span>公会活动</a>
                     <li><a href="/index.php"><span class="menu-serv"></span>会员服务</a>
                     <li><a href="/index.php"><span class="menu-merb"></span>入会申请</a>
                     <li><a href="/index.php"><span class="menu-fuh"></span>创投孵化器</a>
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
                           <img src="images/yf.jpg" width="700" height="200" alt="中国创投公会计划年内敲响纳斯达克钟声"/> 
                           <div class="caption"> 
                            <h1><a href="#" style="text-decoration:none;font-size:14px;">中国创投公会计划年内敲响纳斯达克钟声</a></h1> 
                          </div> 
                        </div>
                        <div class="slide"> 
                        <img src="images/wxx.jpg" width="700" height="200" alt="90后女孩王晓湘携不知名茶成为中国创投公会一号会员"/> 
                          <div class="caption"> 
                            <h1><a href="#" style="text-decoration:none;font-size:14px;">0后女孩王晓湘携不知名茶成为中国创投公会顶级会员</a></h1> 
                            </div> 
                     </div>
                        <div class="slide">
                            <img src="images/ns.jpg" width="700" height="200" alt="中国国际农商峰会在北京举行"/> 
                            <div class="caption"> 
                              <h1><a href="#" style="text-decoration:none;font-size:14px;">中国国际农商峰会在北京举行</a></h1> 
                             </div> 
                        </div>
                    <div class="slide">
                     <img src="images/zc.jpg" width="700" height="200" alt="京东金融2015新发力，股权众筹平台将上线"/> 
                        <div class="caption"> 
                           <h1><a href="#" style="text-decoration:none;font-size:14px;">京东金融2015新发力，股权众筹平台将上线</a></h1> 
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
                    <?php query_posts('cat='.$catid1.'&showposts=5'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>     
                    <?php endwhile; ?> 
                </ul>
            </div>
            <div class="pan" style="margin-left:10px">
                <?php if (get_option('home_catid2')) { $catid2 = get_option('home_catid2'); } ?>
                <h3 class="pan-header"><?php wp_list_categories('include='.$catid2.'&title_li=&style=none'); ?></h3>
                <ul class="pan-body">
                    <?php query_posts('cat='.$catid2.'&showposts=5'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>     
                    <?php endwhile; ?> 
                </ul>
            </div>
            <div class="clear"></div>
            <div class="pan middle">
                <h3 class="pan-header"><a hre="#">孵化项目</a></h3>
                <ul class="pan-body">
                    <li class="first">
                        <a class="img-wrap" href="#">
                            <img src="box/static/images/shili.jpg" />
                        </a>
                        <a href="">不知名茶</a>
                    </li>
                    <li>
                        <a class="img-wrap"  href="#">
                            <img src="box/static/images/shili.jpg" />
                        </a>
                        <a href="">不知名茶</a>
                    </li>
                    <li>
                        <a class="img-wrap" href="#">
                            <img src="box/static/images/shili.jpg" />
                        </a>
                        <a href="">不知名茶</a>
                    </li>
                    <li>
                        <a class="img-wrap" href="#">
                            <img src="box/static/images/shili.jpg" />
                            
                        </a>
                        <a href="">不知名茶</a>
                    </li>
                </ul>

            </div>
            <div class="clear"></div>

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
            <div class="pan" style="margin-left:10px;">
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
            <div class="clear"></div>
        </div>
        <div class="sider">
            <div class="pan video">
                <div class="pan-body">
                <img class="video-img" src="box/static/images/test.jpg" alt="" />
                <div class="video-bg"></div>
                <p class="video-info">整合各方资源，通过提供多样化的服务，不断丰富和创新服务内容和服务模式，服务意识与服务质量赢得了会员企业的认可。
                </p>

                </div>
            </div>
            <div class="clear"></div>
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
            <div class="clear"></div>

             <div class="member">
                <h3 class="member-header"><a hre="#">会员单位</a></h3>
                <div id="member-list-content">
                <ul class="member-list">
                    <li><a href=""><img src="images/1.jpg" alt=""></a></li>
                    <li><a href=""><img src="images/2.jpg" alt=""></a></li>
                    <li><a href=""><img src="images/3.jpg" alt=""></a></li>
                    <li><a href=""><img src="images/4.jpg" alt=""></a></li>
                    <li><a href=""><img src="images/5.jpg" alt=""></a></li>
                    <li><a href=""><img src="images/4.jpg" alt=""></a></li>
                    <li><a href=""><img src="images/5.jpg" alt=""></a></li>
                </ul>
                </div>

            </div>

        </div>

                    <div class="pan foot-link">
                <h3 class="pan-header"><a hre="#">友情链接</a></h3>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
       
        <tbody><tr>
          <td width="10%" height="37" valign="top"><strong>合作媒体:</strong></td>
          <td width="90%" valign="top"><a href="http://www.prnasia.com/" target="_blank" title="美通社">美通社</a> |
<a href="http://www.xinhuanet.com/" target="_blank" title="新华网">新华网</a> |
<a href="http://www.nbd.com.cn/" target="_blank" title="每日经济新闻">每日经济新闻</a> |
<a href="http://www.jrj.com.cn/" target="_blank" title="金融界">金融界</a> |
<a href="http://www.hexun.com/" target="_blank" title="和讯网">和讯网</a> |
<a href="http://www.pedaily.cn/" target="_blank" title="投资界">投资界</a> |
<a href="http://www.zero2ipogroup.com" target="_blank" title="清科集团">清科集团</a> |
<a href="http://www.chinaventure.com.cn/" target="_blank" title="投资中国">投资中国</a> |
<a href="http://www.xjr365.cn/" target="_blank" title="新金融">新金融</a> |
<a href="http://www.ChinaValue.net/" target="_blank" title="价值中国">价值中国</a> |
<a href="http://www.moneydao.com/" target="_blank" title="投资有道">投资有道</a> |
<a href="http://www.topcapital.com.cn/pages/index.asp" target="_blank" title="投资与合作">投资与合作</a> |
<a href="http://www.xincaijing.com/Index.html" target="_blank" title="新财经">新财经</a> |
<a href="http://www.investorchina.com.cn/" target="_blank" title="投资者报">投资者报</a> |
<a href="http://www.sino-manager.com/" target="_blank" title="经理人网">经理人网</a> |
<a href="http://www.qianjing.cn/Index.html" target="_blank" title="钱经">钱经</a> |
<a href="http://www.capital-markets.cn/" target="_blank" title="资本市场">资本市场</a> |
<a href="http://www.capitalweek.com.cn/index.html" target="_blank" title="证券市场周刊">证券市场周刊</a> |
<a href="http://www.simuwang.com/" target="_blank" title="私募排排网">私募排排网</a> |
<a href="http://content.businessvalue.com.cn/" target="_blank" title="商业价值">商业价值</a> |
<a href="Link-1.html"><font color="#FF0000">更多</font></a></td>
        </tr>
        
        
        <tr>
          <td height="37" valign="top"><strong>国内组织:</strong></td>
          <td height="37" valign="top"><a href="http://www.zgc.gov.cn/" target="_blank" title="中关村国家自主创新示范区">中关村国家自主创新示范区</a> |
<a href="http://www.zhongguancun.com.cn/" target="_blank" title="中关村科技园区海淀园管理委员会">中关村科技园区海淀园管理委员会</a> |
<a href="http://www.zpark.com.cn/" target="_blank" title="中关村软件园">中关村软件园</a> |
<a href="http://www.bjmx-online.com" target="_blank" title="中关村科技企业家协会">中关村科技企业家协会</a> |
<a href="http://www.gqx.org.cn/" target="_blank" title="北京中关村高新技术企业协会">北京中关村高新技术企业协会</a> |
<a href="http://www.bjtf.cn/" target="_blank" title="北京市科技金融促进会">北京市科技金融促进会</a> |
<a href="http://www.bjit.org.cn" target="_blank" title="北京信息化协会">北京信息化协会</a> |
<a href="www.lnvcpea.org" target="_blank" title="辽宁省股权和创业投资协会">辽宁省股权和创业投资协会</a> |
<a href="http://www.zhongchou.cn/open" target="_blank" title="众筹网">众筹网</a> |
<a href="http://www.tusstar.com/" target="_blank" title="启迪创业孵化器">启迪创业孵化器</a> |
<a href="Link-2.html"><font color="#FF0000">更多</font></a></td>
        </tr>
        
        
        
        <tr>
          <td height="37" valign="top"><strong>国际组织:</strong></td>
          <td height="37" valign="top"><a href="http://www.insme.org" target="_blank" title="国际中小企业协会">国际中小企业协会</a> |
<a href="http://www.wbaa.biz/" target="_blank" title="世界天使投资协会">世界天使投资协会</a> |
<a href="http://www.nvca.org" target="_blank" title="美国风险投资协会">美国风险投资协会</a> |
<a href="http://www.iva.co.il" target="_blank" title="以色列风险投资协会">以色列风险投资协会</a> |
<a href="http://www.angelcapitalassociation.org" target="_blank" title="天使资本协会">天使资本协会</a> |
<a href="http://www.nacocanada.com/Home.aspx" target="_blank" title="加拿大国家天使资本协会">加拿大国家天使资本协会</a> |
<a href="http://www.cvca.ca" target="_blank" title="加拿大风险投资协会">加拿大风险投资协会</a> |
<a href="http://www.nasvf.org" target="_blank" title="国家种子基金和风险协会">国家种子基金和风险协会</a> |
<a href="http://www.eban.org" target="_blank" title="欧洲商务协会">欧洲商务协会</a> |
<a href="http://www.melekyatirimcilardernegi.org" target="_blank" title="土耳其天使投资协会">土耳其天使投资协会</a> |
<a href="Link-3.html"><font color="#FF0000">更多</font></a></td>
        </tr>
      </tbody></table>
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

        $('#member-list-content').kxbdSuperMarquee({
            distance:105,
            time:2,
            direction:'up'
        });


    });
    </script>

</body>
</html>