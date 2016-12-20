<!DOCTYPE html>
<html lang="cn">

<head>
<title><?php echo $type['title'] ?>-<?php echo $GLOBALS['S']['title'] ?></title>
<meta name="keywords" content="<?php echo $type['keywords'] ?> " />
<meta name="description" content="<?php echo $type['description'] ?> " />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fav icon -->
    <link rel="shortcut icon" href="images/favicon.png">

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

<script src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/wx.js"></script> <!-- Resource jQuery -->
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
									<a class="cn" href="#cn">简体中文</a> / <a class="en" href="#en">China-Pak Joint</a>
									</span>
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
                                       <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid=0  order by orders desc,tid limit 1");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?> <li class="color-1 icon-home <?php if($type['tid']==0){ ?>current-menu-item<?php } ?>"><a href="<?php echo $GLOBALS['WWW'] ?>">首页</a></li><?php } ?>
                                        <li class="color-2 icon-file-alt <?php if($type['tid']==1){ ?>current-menu-item<?php } ?>"><?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  tid='1'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?><a href="<?php echo $v['url'] ?>"><?php echo $v['title'] ?></a><?php } ?>
                                            <ul class="sub-menu">
                                            <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid='1' and mshow='1'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                                                <li><a href="<?php echo $v['url'] ?>"><?php echo $v['title'] ?></a></li>
                                             <?php } ?>
                                            </ul>
                                        </li>

                                        <li class="color-3 icon-edit <?php if($type['tid']==1){ ?>current-menu-item<?php } ?>"><?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  tid='3'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?><a href="<?php echo $v['url'] ?>"><?php echo $v['title'] ?></a><?php } ?>
                                            <ul class="sub-menu">
                                            <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid='3' and mshow='1'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                                                <li><a href="<?php echo $v['url'] ?>"><?php echo $v['title'] ?></a></li>
                                             <?php } ?>
                                            </ul>
                                        </li>

                                        <li class="color-4 icon-th-large <?php if($type['tid']==6){ ?>current-menu-item<?php } ?>"><?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  tid='6'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?><a href="<?php echo $v['url'] ?>"><?php echo $v['title'] ?></a><?php } ?>
                                            <ul class="sub-menu">
                                                <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid='6' and mshow='1'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                                                <li><a href="<?php echo $v['url'] ?>"><?php echo $v['title'] ?></a></li>
                                             <?php } ?>
                                            </ul>
                                        </li>
                                        <li class="color-5 icon-envelope <?php if($type['tid']==8){ ?>current-menu-item<?php } ?>"><?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  tid='8'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?><a href="<?php echo $v['url'] ?>"><?php echo $v['title'] ?></a><?php } ?></li>
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
                        <div class="row">
                            <div class="span12">
                                <section class="title-section">
                                    <h1 class="title-header"><?php echo $type['classname'] ?></h1>
                                    <ul class="breadcrumb breadcrumb__t">
                                        <li>当前位置：<?php echo $positions ?></li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                        <div class="row">
							<!-- Main Content Starts -->
                            <div class="span8 right" id="content">
                            
                            
                            <?php foreach( $lists as $v){ ?>
                                <!-- Article Starts-->
                                <article class="post post__holder">
                                    <header class="post-header">
                                        <h2 class="post-title"><a href="<?php echo $v['url'] ?>"><?php echo $v['title'] ?></a></h2>
                                    </header>
                                    <figure class="featured-thumbnail thumbnail">
                                        <a href="<?php echo $v['url'] ?>"><img width="250" height="200" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $v['litpic'] ?>" alt="<?php echo $v['title'] ?>" /></a>
                                    </figure>

                                    <div class="post_content">
                                        <div class="excerpt">
                                            <?php echo newstr($v['description'],200) ?>
                                        </div>
                                        <a href="<?php echo $v['url'] ?>" class="btn btn-primary btn-large">查看更多...</a>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="post_meta">
                                        <span class="post_category">
											<i class="icon-bookmark"></i>点击：<?php echo $v['hits'] ?> 次
										</span>
                                        <span class="post_date">
											<i class="icon-calendar"></i>
											<time datetime="2013-03-14T20:28:57">发布时间：<?php echo date('Y-m-d',$v['addtime']) ?></time>
										</span>

                                        <span class="post_permalink">
											<i class="icon-link"></i>
											<a href="<?php echo $v['url'] ?>">链接地址</a>
										</span>
                                    </div>
                                </article>
                                <!-- Article Ends-->
                           <?php } ?>


                                <div class="pagination pagination__posts">
                                    <ul>
                                   <?php echo $pages ?>
                                    </ul>
                                </div>
                            </div>
							<!-- Main Content Starts -->
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
                                    <?php $vn=0;$tablev=syClass("syModel")->findSql("select * from jw_article where isshow=1 and tid in(".$type["tid_leafid"].") and trait like '%,2,%'  order by orders desc,addtime desc,id desc limit 10");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["url"]=html_url("article",$v); $v["title"]=stripslashes($v["title"]);$v["description"]=stripslashes($v["description"]); ?>
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
                                        Copyright 2015 <strong><?php echo $GLOBALS['S']['comtitle'] ?></strong> All rights reserved. <i>网站设计：<a target="_blank" href="http://www.junww.com">成都网站建设</a></i>
                                    </div>
                                </div>
                                <div class="span6 social-links">
								<span class="text-follow">关注我们 :</span> 
									<a href="#"><i class="icon-facebook"></i></a>
									<a href="#"><i class="icon-twitter"></i></a>
									<a href="#"><i class="icon-google-plus"></i></a>
									<a href="#"><i class="icon-pinterest"></i></a>
									<a href="#"><i class="icon-linkedin"></i></a>
                                </div>
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

</body>
</html>
