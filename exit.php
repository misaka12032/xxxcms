<?php 
session_start();
require_once("include/common.php");
unset($_SESSION['sea_user_id']);
unset($_SESSION['sea_user_name']);
unset($_SESSION['sea_user_group']);
session_destroy();
setcookie(session_name(),'',time()-1,'/');
//生成同步退出的代码 
ShowMsg("您已退出登录！","index.php",0,3000);
?>