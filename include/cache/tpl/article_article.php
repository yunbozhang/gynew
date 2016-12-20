<!DOCTYPE html>
<html lang="cn">

<head>
<meta charset="UTF-8" />
<title><?php echo $article['title'] ?></title>
<meta name="keywords" content="<?php echo $article['keywords'] ?>" />
<meta name="description" content="<?php echo $article['description'] ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fav icon -->
    <link rel="shortcut icon" href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>images/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>css/bootstrap.css" />

    <!-- Template CSS Files  -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>css/responsive.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>css/style.css" />

    <!-- Template JS Files -->
    <script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/jquery-1.11.3.min.js"></script> 
    <script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/modernizr.js"></script>
</head>

<body>

    <div class="main-holder">
		<!-- Header Section Starts -->
        <header class="header">

<!-- <script src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/wx.js"></script> <!-- Resource jQuery -->
           <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="tail-top">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="contacts">


                                      <span class="tel"><?php echo $GLOBALS['S']['comphone'] ?></span>
										<address><?php echo $GLOBALS['S']['comaddress'] ?></address>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <span class="slogan">
<!-- 									<a class="cn" href="#cn">新浪微博</a> / <a class="en" href="#en">腾讯微博</a>
 -->									</span>
								</div>
                            </div>
                        </div>
                        <div class="clearfix">
							<!-- Logo -->
                            <div class="pull-left">
                                <div class="logo pull-left">
                                    <a href="<?php echo $GLOBALS['WWW'] ?>"><img src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>images/logo.png" alt="<?php echo $GLOBALS['S']['title'] ?>" title="<?php echo $GLOBALS['S']['comtitle'] ?>"></a>
                                </div>
                            </div>
                            <div class="pull-right">
								<!-- Navbar Starts -->
                                <nav class="nav nav__primary clearfix">
                                    <ul class="sf-menu">
                                    <!-- 首页 -->
                                       <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid=0  order by orders desc,tid limit 1");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?> 
                                       <li class="color-1 icon-home <?php if($type['tid']==0){ ?>current-menu-item<?php } ?>">
                                        <a href="<?php echo $GLOBALS['WWW'] ?>">
                                            首页
                                        </a>
                                    </li>
                                       <?php } ?>

                                    <!-- 关于我们 -->
                                        <li class="color-2 icon-file-alt <?php if($type['tid']==1){ ?>current-menu-item<?php } ?>">
                                            <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  tid='1'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                                            <a href="<?php echo $v['url'] ?>">
                                                <?php echo $v['title'] ?>
                                            </a>
                                            <?php } ?>
                                            
                                        </li>
                                   <!-- 服务项目 -->
                                        <li class="color-3 icon-edit <?php if($type['tid']==2){ ?>current-menu-item<?php } ?>">
                                            <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  tid='2'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                                            <a href="<?php echo $v['url'] ?>">
                                                <?php echo $v['title'] ?>
                                            </a>
                                            <?php } ?>
                                            
                                        </li>
                                    <!-- 人才招聘 -->

                                        <li class="color-4 icon-th-large <?php if($type['tid']==6){ ?>current-menu-item<?php } ?>">
                                            <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  tid='6'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                                            <a href="<?php echo $v['url'] ?>">
                                                <?php echo $v['title'] ?>
                                            </a>
                                            <?php } ?>
                                            
                                        </li>
                                    <!-- 联系我们 -->
                                        <li class="color-5 icon-envelope <?php if($type['tid']==8){ ?>current-menu-item<?php } ?>">
                                            <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  tid='8'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                                            <a href="<?php echo $v['url'] ?>">
                                                <?php echo $v['title'] ?>
                                            </a>
                                            <?php } ?>
                                        </li>
                                    </ul>
                                </nav>
								<!-- Navbar Ends -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<!-- Header Section Ends -->
        



        <div class="content-holder clearfix">
            <div class="container">
                <div class="row">
                    <div class="span12">
						<!-- Main Content Starts -->
                        <div class="row">
                            <div class="span8 right" id="content">
                                <article class="post post__holder">
                                    <header class="post-header">
                                        <h1 class="post-title"><?php echo $article['title'] ?></h1>
                                    </header>

                                    <div class="post_content">
                                        <p>
                                        		<div class="jwcdn">
		<jwbody>
		<?php echo $article['body'] ?>
		</jwbody>
		</div>
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="post_meta">
                                        <span class="post_category">
											<i class="icon-bookmark"></i>点击：<script src="<?php echo $GLOBALS['WWW'] ?>index.php?c=article&a=hits&id=<?php echo $article['id'] ?>" type="text/javascript"></script> 次
										</span>
                                        <span class="post_date">
											<i class="icon-calendar"></i>
											<time datetime="2013-03-14T20:28:57">发布时间：<?php echo date('Y-m-d',$article['addtime']) ?></time>
										</span>
                                        <span class="post_permalink">
											<i class="icon-link"></i>
											<a href="<?php echo $article['url'] ?>">链接地址</a>
										</span>
                                    </div>
                                    <!-- Social Share Starts -->
                                    <span class='st_facebook_hcount' data-displaytext='Facebook'></span>
                                    <span class='st_twitter_hcount' data-displaytext='Tweet'></span>
                                    <span class='st_googleplus_hcount' data-displaytext='Google +'></span>
                                    <!-- Social Share Ends -->
                                </article>


                            </div>
							<!-- Sidebar Starts -->
                            <div class="span4 sidebar" id="sidebar">
                                <div class="widget"><!-- Categories Widget -->
                                    <h3>栏目分类</h3>
                                    <ul>
                                          <?php $ytid=$type[tid];if(!syDB("classtype")->find(array("pid"=>$type[tid],"mshow"=>1),null,"tid")){ $ypid=syDB("classtype")->find(array("tid"=>$type[tid],"mshow"=>1),null,"pid");$type[tid]=$ypid[pid];} ?><?php $tn=0;$tablet=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid='".$type[tid]."' and mshow='1'  order by orders desc,tid");$type[tid]=$ytid;foreach($tablet as $t){ $t["tid_leafid"]=$sy_class_type->leafid($t["tid"]);$t["n"]=$tn=$tn+1; $t["classname"]=stripslashes($t["classname"]);$t["classnamesub"]=stripslashes($t["classnamesub"]);$t["description"]=stripslashes($t["description"]); $t["url"]=html_url("classtype",$t); ?>
      <li><a href="<?php echo $t['url'] ?>"<?php if($type['tid']==$t['tid']){ ?> class="c"<?php } ?>><?php echo $t['classname'] ?></a></li>
      <?php } ?>


                                    </ul>
                                </div>

                                <div class="widget"><!-- Recent Posts Widget -->
                                    <h3>推荐信息</h3>
                                    <ul class="post-list unstyled">
                                    <?php $vn=0;$tablev=syClass("syModel")->findSql("select * from jw_article where isshow=1 and tid in(".$type["tid_leafid"].") and trait like '%,2,%'  order by orders desc,addtime desc,id desc limit 3");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["url"]=html_url("article",$v); $v["title"]=stripslashes($v["title"]);$v["description"]=stripslashes($v["description"]); ?>
                                        <li class="post-list_li clearfix">
                                            <figure class="featured-thumbnail thumbnail">
                                                <a href="<?php echo $v['url'] ?>"><img src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $v['litpic'] ?>" alt="<?php echo $v['title'] ?>" /></a>
                                            </figure>
                                            <time datetime="2013-03-14T20:28"><?php echo date('Y-m-d',$v['addtime']) ?></time>
                                            <h4 class="post-list_h"><a href="<?php echo $v['url'] ?>"><?php echo newstr($v['title'],30) ?></a></h4>
                                            <div class="excerpt">
                                                <?php echo newstr($v['description'],200) ?> </div>
                                            <a href="<?php echo $v['url'] ?>" class="btn btn-primary">查看更多...</a>
                                        </li>
                                      <?php } ?>
                                    </ul>
                                </div>
                            </div>
							<!-- Sidebar Ends -->
                        </div>
						<!-- Main Content Ends -->
                    </div>
                </div>
            </div>
        </div>

		<!-- Footer Starts -->
        <footer class="footer">
            <div class="container">
                        <div class="copyright">
                            <div class="row">
                                <div class="span6">
                                    <div id="footer-text" class="footer-text">
                                        Copyright 2015 <strong><?php echo $GLOBALS['S']['comtitle'] ?></strong><i></br>网站设计：<a target="_blank" href="http://www.xinyangcheng.net">太阳城网络科技服务有限公司</a></i>
                                    </div>
                                </div>
                                <!-- <div class="span6 social-links">
								<span class="text-follow">关注我们 :</span> 
									<a href="#"><i class="icon-facebook"></i></a>
									<a href="#"><i class="icon-twitter"></i></a>
									<a href="#"><i class="icon-google-plus"></i></a>
									<a href="#"><i class="icon-pinterest"></i></a>
									<a href="#"><i class="icon-linkedin"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- Footer Ends -->
    </div>
    <div id="back-top-wrapper" class="visible-desktop">
        <p id="back-top">
            <a href="index.html#top"><span></span></a>
        </p>
    </div>
	<!-- Template JS Files -->
	<script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/jquery.mobilemenu.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/jflickrfeed.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/custom.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/bootstrap.min.js"></script>

<script type="text/javascript">
$(function(){
$(".jwcdn jwbody").each(function(index, element) {
	var $old=$(this).html();
	var $new=$old.replace(/\/uploads/g,'<?php echo $GLOBALS['S']['jwcdnapi'] ?>/uploads');
	$(this).html($new);
});
})
</script>
</body>
</html>
