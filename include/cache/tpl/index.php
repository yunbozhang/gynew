<!DOCTYPE html>
<html lang="cn">

<head>
<meta charset="UTF-8" />
<TITLE><?php echo $GLOBALS['S']['title'] ?></TITLE>
<META NAME="robots" CONTENT="all">
<META name="keywords" content="<?php echo $GLOBALS['S']['keywords'] ?>">
<META name="description" content="<?php echo $GLOBALS['S']['description'] ?>" >

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Fav icon -->
	<link rel="shortcut icon" href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>images/favicon.png">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>css/bootstrap.css" />
	
	<!-- Template CSS Files  -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>css/responsive.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>css/camera.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>css/style.css" />
		
	<!-- Template JS Files -->
	<script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/jquery-1.11.3.min.js"></script> 
	<script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/jquery-migrate-git.min.js"></script>
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
				<!-- Main Content Starts -->
                <div class="row">
                    <div class="span12">
                        <div class="row">
                            <div class="span12">
                                <div class="slider-wrap">
                                    <div id="slider-wrapper" class="slider">
                                        
										<!-- Slider Section Starts -->
                                        
                                        <div id="camera5448d07be94d1" class="camera_wrap camera">
                                        <?php $vn=0;$tablev=syClass("syModel")->findSql("select id,tid,sid,title,style,trait,gourl,addtime,hits,htmlurl,htmlfile,orders,mrank,mgold,isshow,keywords,description,bannerpic,bannerzhuti,bannermiaoshu from jw_banner a left join jw_banner_field b on (a.id=b.aid) where isshow=1 and tid in(7)  order by orders desc,addtime desc,id desc limit 3");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["url"]=html_url("channel",$v,0,0,banner); $v["title"]=stripslashes($v["title"]); $v["description"]=stripslashes($v["description"]); ?>
                                            <div data-src='<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $v['bannerpic'] ?>' data-link='#'>
                                                <div class="camera_caption fadeFromTop">
                                                    <h4><i class="icon-arrow-right"></i><?php echo $v['title'] ?></h4>
                                                    <h2><?php echo $v['bannerzhuti'] ?></h2>
                                                    <p><?php echo $v['bannermiaoshu'] ?></p>
                                                    <a href="<?php echo $v['bannerlink'] ?>" class="btn btn-primary btn-large">查看更多...</a>
												</div>
                                            </div>
                                            <?php } ?>

                                        </div>
										<!-- Slider Section Ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span12">
                                <div class="type-page">
									
                                    <div class="spacer"> </div>
									<!-- Projects Section Starts -->
                                    <div class="row">
                                        <div class="span12">
                                            <div class="content_box">
                                                <h2>户型展示</h2>
                                                <ul class="posts-grid row-fluid unstyled latest_projects">
													<!-- Image Format -->
                                          <?php $vn=0;$tablev=syClass("syModel")->findSql("select * from jw_article where isshow=1 and tid in(2)  order by orders desc,addtime desc,id desc limit 4");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["url"]=html_url("article",$v); $v["title"]=stripslashes($v["title"]);$v["description"]=stripslashes($v["description"]); ?>
                                                    <li>
                                                        <div class="flip-container">
                                                            <div class="flipper">
                                                                <div class="front">
                                                                    <h5><?php echo newstr($v['title'],35) ?></h5>
                                                                    <figure class="featured-thumbnail thumbnail"><img src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $v['litpic'] ?>" alt="<?php echo $v['title'] ?>" /></figure>
                                                                </div>
                                                                <div class="back">
                                                                    <div class="inner">
                                                                        <h5><?php echo newstr($v['title'],35) ?></h5>
                                                                        <div class="post_meta"><span class="post_date"><time datetime="<?php echo date('Y-m-d',$v['addtime']) ?>"><?php echo date('Y-m-d',$v['addtime']) ?></time></span></div>
                                                                        <p class="excerpt"><?php echo newstr($v['description'],100) ?></p>
																		<a href="<?php echo $v['url'] ?>" class="btn btn-primary" title="查看更多...">查看更多...</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php } ?>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
									<!-- Projects Section Ends -->
                                    <div class="spacer"> </div>

                                    <!-- Services Section Starts -->
                                    <div class="row">
                                        <div class="span4">
                                            <div class="service-box color-1 extra-btn">
                                                <figure class="icon"><i class="icon-leaf"></i></figure>
                                                <div class="service-box_body">
                                                    <h2 class="title">资源整合服务</h2>
                                                    <div class="service-box_txt">为客户整合相关平台资源，匹配投资项目，促成投资行为达成.</div>
                                                    <div class="btn-align"><a href="#" title="Read more" class="btn btn-inverse btn-normal btn-primary">Read more</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="service-box color-2 extra-btn">
                                                <figure class="icon"><i class="icon-cogs"></i></figure>
                                                <div class="service-box_body">
                                                    <h2 class="title">投资考察服务</h2>
                                                    <div class="service-box_txt">根据客户需求，提供意向性投资考察的全程协助服务及代理考察服务.</div>
                                                    <div class="btn-align"><a href="#" title="Read more" class="btn btn-inverse btn-normal btn-primary">Read more</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="service-box color-3 extra-btn">
                                                <figure class="icon"><i class="icon-comments-alt"></i></figure>
                                                <div class="service-box_body">
                                                    <h2 class="title">投资咨询服务</h2>
                                                    <div class="service-box_txt">实行会员制，定期为会员提供与投资相关的政策、资讯咨询服务.</div>
                                                    <div class="btn-align"><a href="#" title="Read more" class="btn btn-inverse btn-normal btn-primary">Read more</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Services Section Ends -->

									<!-- Clients Section Starts -->
                                    <div class="row">
                                        <div class="span12">
                                            <div class="content_box ">
                                                <h2>户型视频</h2>
                                                <ul class="posts-grid row-fluid unstyled latest_projects">
                                                    <!-- Image Format -->
                                          <?php $tablev=syClass("syModel")->findSql("select * from jw_video limit 4");foreach($tablev as $v){ ?>
                                                    <li>
                                                                    <h5><?php echo newstr($v['title'],35) ?></h5>
<!--                                                                     <figure class="featured-thumbnail thumbnail"><img src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $v['litpic'] ?>" alt="<?php echo $v['title'] ?>" /></figure>
 -->  
 <video width=100% height=40% controls="controls" autoplay="autoplay">
  <source src="/uploads/movie.ogg" type="video/ogg" />
  <source src="/uploads/movie.mp4" type="video/mp4" />
  <source src="/uploads/movie.webm" type="video/webm" />
  <object data="/uploads/movie.mp4" width=100% height=40%>
    <embed width=100% height=40% src="/movie/movie.mp4" />
  </object>
                                                             
                                                    </li>
                                                    <?php } ?>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
									<!-- Skills Section Starts -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- Main Content Ends -->
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

	<script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/camera.min.js"></script>
	<script type="text/javascript">
	//    jQuery(window).load(function() {
	jQuery(function() {
		var myCamera = jQuery('#camera5448d07be94d1');
		if (!myCamera.hasClass('motopress-camera')) {
			myCamera.addClass('motopress-camera');
			myCamera.camera({
				alignment: 'topCenter', //topLeft, topCenter, topRight, centerLeft, center, centerRight, bottomLeft, bottomCenter, bottomRight
				autoAdvance: true, //true, false
				mobileAutoAdvance: true, //true, false. Auto-advancing for mobile devices
				barDirection: 'leftToRight', //'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
				barPosition: 'top', //'bottom', 'left', 'top', 'right'
				cols: 12,
				easing: 'easeOutQuad', //for the complete list http://jqueryui.com/demos/effect/easing.html
				mobileEasing: '', //leave empty if you want to display the same easing on mobile devices and on desktop etc.
				fx: 'random', //'random','simpleFade', 'curtainTopLeft', 'curtainTopRight', 'curtainBottomLeft',          'curtainBottomRight', 'curtainSliceLeft', 'curtainSliceRight', 'blindCurtainTopLeft', 'blindCurtainTopRight', 'blindCurtainBottomLeft', 'blindCurtainBottomRight', 'blindCurtainSliceBottom', 'blindCurtainSliceTop', 'stampede', 'mosaic', 'mosaicReverse', 'mosaicRandom', 'mosaicSpiral', 'mosaicSpiralReverse', 'topLeftBottomRight', 'bottomRightTopLeft', 'bottomLeftTopRight', 'bottomLeftTopRight'
				//you can also use more than one effect, just separate them with commas: 'simpleFade, scrollRight, scrollBottom'
				mobileFx: '', //leave empty if you want to display the same effect on mobile devices and on desktop etc.
				gridDifference: 250, //to make the grid blocks slower than the slices, this value must be smaller than transPeriod
				height: '52.5%', //here you can type pixels (for instance '300px'), a percentage (relative to the width of the slideshow, for instance '50%') or 'auto'
				imagePath: '/skin/default/images/camera-slider/', //he path to the image folder (it serves for the blank.gif, when you want to display videos)
				loader: 'no', //pie, bar, none (even if you choose "pie", old browsers like IE8- can't display it... they will display always a loading bar)
				loaderColor: '#ffffff',
				loaderBgColor: '#eb8a7c',
				loaderOpacity: 1, //0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1
				loaderPadding: 0, //how many empty pixels you want to display between the loader and its background
				loaderStroke: 3, //the thickness both of the pie loader and of the bar loader. Remember: for the pie, the loader thickness must be less than a half of the pie diameter
				minHeight: '147px', //you can also leave it blank
				navigation: true, //true or false, to display or not the navigation buttons
				navigationHover: false, //if true the navigation button (prev, next and play/stop buttons) will be visible on hover state only, if false they will be visible always
				pagination: true,
				playPause: false, //true or false, to display or not the play/pause buttons
				pieDiameter: 33,
				piePosition: 'rightTop', //'rightTop', 'leftTop', 'leftBottom', 'rightBottom'
				portrait: true, //true, false. Select true if you don't want that your images are cropped
				rows: 8,
				slicedCols: 12,
				slicedRows: 8,
				thumbnails: false,
				time: 5000, //milliseconds between the end of the sliding effect and the start of the next one
				transPeriod: 1200, //lenght of the sliding effect in milliseconds

				////////callbacks

				onEndTransition: function() {}, //this callback is invoked when the transition effect ends
				onLoaded: function() {}, //this callback is invoked when the image on a slide has completely loaded
				onStartLoading: function() {}, //this callback is invoked when the image on a slide start loading
				onStartTransition: function() {} //this callback is invoked when the transition effect starts
			});
		}
	});
	//    });
	
</script>

</body>
</html>
