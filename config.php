<?php
define("APP_PATH",dirname(__FILE__));
define("JWCOM_PATH",APP_PATH."/include");
@date_default_timezone_set('PRC');
$jwcomConfig = array(

'db' => array(
'host' => '127.0.0.1',			//数据库地址
'port' => 3306,					//数据库端口
'database' => 'gynew',		//数据库名
'login' => 'root',				//数据库帐号
'password' => '',			//数据库密码
'prefix' => 'jw_',				//数据库表前缀
),

'ext' => array(
'version' => '3.3',
'update' => '20150508',
'auto_update' => 1,
'http_path' => 'http://www.lala.wang',
'site_title' => '国昱·玉珑湾',
'site_keywords' => '关键词',
'site_description' => '国昱·玉珑湾深刻理解现代人对健康的重视和渴求：项目位置与阳城县人民医院仅一路之隔；小区所有住宅均配备医护电梯，病人丛急救呼叫到转入医院病号不超过15分钟；小区规划养老医疗公寓,玉阳城人民医院建立社区医疗服务合作...国昱·玉珑湾为您的家庭成员提供完美的健康保障。 国昱·玉珑湾深刻理解现代人对健康的重视和渴求：项目位置与阳城县人民医院仅一路之隔；小区所有住宅均配备医护电梯，病人丛急救呼叫到转入医院病号不超过15分钟；小区规划养老医疗公寓,玉阳城人民医院建立社区医疗服务合作...国昱·玉珑湾为您的家庭成员提供完美的健康保障。',
'secret_key' => '1d0459f842860e38d55a10afe9959f3a',	//站内安全密钥，安装时会随机生成，一旦生成请勿修改，并请牢记，否则可能造成某些数据无法取回。
'site_comtitle' => '晋城市国昱房地产开发有限公司',
'site_phone' => '400-890-0000 转 820737',
'site_comemail' => '',
'site_address' => '阳城县凤城镇坪头路15号（原阳城热电厂）国昱·玉珑湾',
'site_combeian' => '晋ICP备15001960号',
'site_jwcdnapi' => '',
'view_themes' => 'default',
'site_html' => 0,
'site_html_dir' => 'html',
'site_html_rules' => '[mold]/[file].html',
'site_html_suffix' => '.html',
'site_html_index' => 0,
'enable_gzip' => 1,
'enable_gzip_level' => 6,
'cache_auto' => 1,
'cache_time' => 0,
'filetype' => 'jpg,gif,jpeg,bmp,png,swf,flv,wmv,wma,mp3,mp4,rar,zip,7z,txt,doc,docx,xls,xlsx',
'filesize' => 10485760,
'imgwater' => 0,
'imgwater_t' => 3,
'imgcaling' => 0,
'img_w' => 800,
'img_h' => 800,
'comment_audit' => 1,
'comment_user' => 0,
),
);