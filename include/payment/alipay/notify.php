<?php
require("../../../config.php");
require(JWCOM_PATH."/sys.php");

$v = syClass('alipay',null,'alipay.php');
$g = $v->verify_get();
if($g){
	$v->success($g);
	echo 'success';
}else{
	echo "fail";
}
?>