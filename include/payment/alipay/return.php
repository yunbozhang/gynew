<?php
require("../../../config.php");
require(JWCOM_PATH."/sys.php");

$v = syClass('alipay',null,'alipay.php');
$g = $v->verify_get();
if($g) {
	$a=$v->success($g);
	message($a['msg'],$a['url']);
}
?>