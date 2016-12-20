<!DOCTYPE html>
<html lang="cn">

<head>
<meta charset="UTF-8" />
<title><?php echo $type['title'] ?>-<?php echo $GLOBALS['S']['title'] ?></title>
<meta name="keywords" content="<?php echo $type['keywords'] ?> " />
<meta name="description" content="<?php echo $type['description'] ?> " />

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


<body class="page-template-page-fullwidth">

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
                        <div class="row">
                            <div class="span12">
                                <section class="title-section">
                                    <h1 class="title-header"><?php echo $type['classname'] ?> </h1>
                                    <ul class="breadcrumb breadcrumb__t">
                                        <li>当前位置：<?php echo $positions ?></li>
                                    </ul>
                                </section>
                            </div>
                        </div>
						<!-- Main Content Starts -->
                        <div id="content" class="row">
                            <div class="span12">
                                <div>
                                    <div class="content_box">
                                        <div class="google-map">
											<iframe width='1110' height='440' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://f.amap.com/034NFJ'></iframe>
                                        </div>
                                        <div class="row-fluid">
											<!-- Contact Info Starts -->
                                            <div class="span4">
                                                <h2>公司联系信息</h2>
<!--                                                 <h5>经营范围：国内商务信息咨询；企业管理咨询；企业营销策划；会务服务及展览展示；策划文化交流活动。</h5>
 -->                                                <p>国昱·玉珑湾深刻理解现代人对健康的重视和渴求：项目位置与阳城县人民医院仅一路之隔；小区所有住宅均配备医护电梯，病人丛急救呼叫到转入医院病号不超过15分钟；小区规划养老医疗公寓,玉阳城人民医院建立社区医疗服务合作...国昱·玉珑湾为您的家庭成员提供完美的健康保障。 国昱·玉珑湾深刻理解现代人对健康的重视和渴求：项目位置与阳城县人民医院仅一路之隔；小区所有住宅均配备医护电梯，病人丛急救呼叫到转入医院病号不超过15分钟；小区规划养老医疗公寓,玉阳城人民医院建立社区医疗服务合作...国昱·玉珑湾为您的家庭成员提供完美的健康保障。
												<br/>
												<address>
													<strong>联系地址：<?php echo $GLOBALS['S']['comaddress'] ?>
													</strong>
													<br/>
													联系电话：<?php echo $GLOBALS['S']['comphone'] ?><br/>
<!--                                                     FAX: +1 800 800 9000<br/>
 -->													<!-- E-mail: <a href="mailto:<?php echo $GLOBALS['S']['comemail'] ?>"><span><?php echo $GLOBALS['S']['comemail'] ?></span></a><br/> -->
												</address> 
											</div>
											<!-- Contact Info Ends -->
											<!-- Contact Form Starts -->
                                            <div id="cf" class="span8">
                                                <h2>在线留言</h2>
                                                <div class="cf">
                                                    <form action="#cf" method="post" class="cf-form">
                                                        <div class="row-fluid">
                                                            <p class="span4 field"><span class="cf-form-control-wrap"><input type="text" id="your-name" placeholder="你的姓名" name="your-name" value="" size="40" title="Name:"/></span> </p>
                                                            <p class="span4 field"><span class="cf-form-control-wrap"><input type="text" id="your-email" placeholder="邮箱地址" name="your-email" value="" size="40" title="E-mail:"/></span> </p>
                                                            <p class="span4 field"><span class="cf-form-control-wrap"><input type="text" id="your-phone" placeholder="电话号码" name="your-phone" value="" size="40" title="Phone:"/></span> </p>
                                                        </div>
                                                        <p class="field"><span class="cf-form-control-wrap"><textarea name="your-message" id="your-message" placeholder="你要留言的内容..." cols="40" rows="10" title="Message:"></textarea></span> </p>
                                                        <p class="submit-wrap">
														<?php echo $result; ?>	
                                                            <input type="reset" value="重置" class="btn btn-primary" />
                                                            <input  id="submit" name="submit" type="submit" value="发送" class="cf-form-control  cf-submit btn btn-primary" />
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
											<!-- Contact Form Ends -->
                                        </div>
                                    </div>
                                </div>
                            </div>
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

</body>
</html>