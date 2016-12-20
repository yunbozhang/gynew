<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $channel['title'] ?></title>
<meta name="keywords" content="<?php echo $channel['keywords'] ?>" />
<meta name="description" content="<?php echo $channel['description'] ?>" />
<link href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var site_dir="<?php echo $GLOBALS['WWW'] ?>";
</script>
<script type="text/javascript" src="<?php echo $GLOBALS['WWW'] ?>include/js/jsmain.js"></script>
<script src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/main.js" type="text/javascript"></script>
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
                                       <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid=0  order by orders desc,tid limit 1");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?> <li class="color-1 icon-home <?php if($type['tid']==0){ ?>current-menu-item<?php } ?>"><a href="<?php echo $GLOBALS['WWW'] ?>">首页</a></li><?php } ?>
                                        <li class="color-2 icon-file-alt <?php if($type['tid']==1){ ?>current-menu-item<?php } ?>"><?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  tid='1'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?><a href="<?php echo $v['url'] ?>"><?php echo $v['title'] ?></a><?php } ?>
                                            <ul class="sub-menu">
                                            <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid='1' and mshow='1'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                                                <li><a href="<?php echo $v['url'] ?>"><?php echo $v['title'] ?></a></li>
                                             <?php } ?>
                                            </ul>
                                        </li>

                                        <li class="color-3 icon-edit <?php if($type['tid']==1){ ?>current-menu-item<?php } ?>"><?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  tid='2'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?><a href="<?php echo $v['url'] ?>"><?php echo $v['title'] ?></a><?php } ?>
                                            <ul class="sub-menu">
                                            <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid='2' and mshow='1'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
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
        



<div class="wpm list">
  <div class="tab11"></div>
  <div class="tab1 tab1b main">
    <div class="l">
      <div class="columnc"><h2><?php echo $type['classname'] ?></h2></div>
      <div class="columncl">
      <?php $ytid=$type[tid];if(!syDB("classtype")->find(array("pid"=>$type[tid],"mshow"=>1),null,"tid")){ $ypid=syDB("classtype")->find(array("tid"=>$type[tid],"mshow"=>1),null,"pid");$type[tid]=$ypid[pid];} ?><?php $tn=0;$tablet=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid='".$type[tid]."' and mshow='1'  order by orders desc,tid");$type[tid]=$ytid;foreach($tablet as $t){ $t["tid_leafid"]=$sy_class_type->leafid($t["tid"]);$t["n"]=$tn=$tn+1; $t["classname"]=stripslashes($t["classname"]);$t["classnamesub"]=stripslashes($t["classnamesub"]);$t["description"]=stripslashes($t["description"]); $t["url"]=html_url("classtype",$t); ?>
      <a href="<?php echo $t['url'] ?>"<?php if($type['tid']==$t['tid']){ ?> class="c"<?php } ?>><?php echo $t['classname'] ?> </a>
      <?php } ?>
      </div>
    </div>
    <div class="r">
    <div class="content">
		<div class="position">当前位置：<?php echo $positions ?></div>
		<div class="c"><h1><?php echo $channel['title'] ?></h1></div>
		<div class="c t">发布时间：<?php echo date('Y-m-d H:i:s',$channel['addtime']) ?> 点击：<script src="<?php echo $GLOBALS['WWW'] ?>index.php?c=channel&a=hits&molds=<?php echo $molds ?>&id=<?php echo $channel['id'] ?>" type="text/javascript"></script></div>
		<div class="c">
        <table class="ordertab">
          <?php foreach( $fields as $v){ ?>
          <tr>
            <td class="left" style="background-color: #F2F2F2; color:#333"><strong><?php echo $v['fieldsname'] ?></strong> 
            调用标识：<?php if($v['fieldstype']=='select'||$v['fieldstype']=='checkbox'){ ?>
            <?php echo '{'.'fun fieldsinfo("'.$v['fields'].'",$channel["'.$v['fields'].'"],$molds)'.'}';?>
            <?php }else{ ?>
            <?php echo '{'.'$channel['.$v['fields'].']}'.'}';?>
            <?php } ?>
            </td>
          </tr>
          <tr>
            <td class="left">
            <?php if($v['fieldstype']=='select'||$v['fieldstype']=='checkbox'){ ?>
            <?php echo fieldsinfo($v['fields'],$channel[$v['fields']],$molds) ?>
            <?php }else{ ?>
            <?php echo $channel[$v['fields']] ?>
            <?php } ?>
            </td>
          </tr>
          <?php } ?>
        </table>
        </div>
        <div class="c"><ul class="pages"><?php echo $pages ?></ul></div>
        <div class="c prev">
        	<?php if($aprev){ ?>上一篇：<a href="<?php echo $aprev['url'] ?>"><?php echo $aprev['title'] ?></a><?php } ?>
            <?php if($anext){ ?>下一篇：<a href="<?php echo $anext['url'] ?>"><?php echo $anext['title'] ?></a><?php } ?>
        </div>
	</div>
       <div class="comment">
         <div class="t c">文章评论</div>
         <div class="i c">
<script type="text/javascript">
function comment_ret(){
	if(document.comment.body.value.length==''){alert("请输入评论内容！");return false;}
	if(document.comment.vercode.value.length==''){alert("请输入验证码！");return false;}
	if(document.comment.body.value.length>500){alert("评论内容不能超过500字！");return false;}
}
</script>
         <form method="post" action="<?php echo $GLOBALS['WWW'] ?>index.php?c=comment&m=<?php echo $molds ?>" name="comment" onsubmit="return comment_ret()">
         <input name="aid" type="hidden" value="<?php echo $channel['id'] ?>" />
         <dl><dt>内容:</dt><dd><textarea name="body" style="width:500px; height:50px;" class="inp"></textarea></dd></dl>
         <dl>
         <?php if($GLOBALS['G_DY']['vercode']==1){ ?>
         <dt>验证码:</dt><dd><input name="vercode" type="text" style="width:50px;" class="inp" /></dd><dd><img src="<?php echo $GLOBALS['WWW'] ?>include/vercode.php" id="vercodeimg" width="58" height="24" onclick="newvercode();" style="cursor:pointer;" /></dd>
    <script type="text/javascript">
	setTimeout('newvercode()',1000);
    function newvercode(){
        document.getElementById("vercodeimg").src=site_dir+"include/vercode.php?a="+Math.random();
    }
    </script>
         <?php }else{ ?><dt>&nbsp;</dt><?php } ?>
         <dd><input name="" type="submit" value="提交" class="btnmini" /></dd></dl>
         </form>
         </div>
         <script type="text/javascript">ajax_comment('comment','<?php echo $molds ?>',<?php echo $channel['id'] ?>,1,'person/ajax_comment.html');</script>
         <div id="comment"></div>
       </div>
    </div>
  </div>
  <div class="tab12 mban"></div>
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
