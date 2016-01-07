<?php
require_once("../API/qqConnectAPI.php");
require_once (dirname(__FILE__) . "/../../../inc/common.inc.php");
$qc = new QC();
$admin=ck_login('uin','skey',true,true);
$db->update('user',array('qqtk'=>$qc->qq_callback().$qc->get_openid()),'id='.$admin['0']);
echo "绑定成功";