<?php
function verification($type){
	switch ($type){
		case 1:
			return  '<p></p><a href="http://www.xinyangcheng.net/" target="_blank">求助问答</a><a href="http://www.xinyangcheng.net/" target="_blank">域名主机</a>';
		break;
		case 2:
			return ' | <a href="http://www.xinyangcheng.net/" target="_blank">技术支持</a> | <a href="http://www.xinyangcheng.net/" target="_blank">域名主机</a>';
		break;
		case 3:
			return '<tr><td width="80">版权申明：</td><td class="tdleft">多策网络仅出售网站模板，此核心程序并非本公司出售项目，请商业用户自行购买正版授权。程序官网：<a href="http://www.xinyangcheng.net/" target="_blank">http://www.xinyangcheng.net/</a></td></tr><tr><td width="80">系统介绍：</td><td class="tdleft">太阳城通用建站系统</td></tr>  <tr><td width="80">系统版本：</td><td class="tdleft">xinyangcheng<strong> '.syExt('version').'</strong> - '.syExt('update').'</td></tr><tr><td width="80">官方网址：</td><td class="tdleft"><a href="http://www.xinyangcheng.net/" target="_blank">www.xinyangcheng.net/</a></td></tr>';
		break;
		case 4:
			return '&nbsp;&nbsp;<a href="http://www.xinyangcheng.net/" target="_blank">xinyangcheng</a> '.syExt('version').' - '.syExt('update').' Powered by <a href="http://www.xinyangcheng.net/" target="_blank">wdoyo.com</a> © 2010-2099';
		break;
		case 5:
			return '<a href="http://www.xinyangcheng.net/" target="_blank">系统更新</a> | <a href="http://www.xinyangcheng.net/" target="_blank">使用帮助</a> | <a href="http://www.xinyangcheng.net/" target="_blank">域名主机</a>';
		break;
		case 6:
		return 'href="http://www.xinyangcheng.net/" class="v" target="_blank"';
		break;
		case 7:
		return ' log';
		break;
		case 8:
		return '轻松建站';
		break;
	}
}
?>