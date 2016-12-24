<?php 
/**
 * 定义入口文件
 *1.定义常量
 *2.加载数据库
 *3.启动 
 */
// echo "123";die;
header("content-type:text/html;charset=utf-8");
// 定义应用目录
define('MVC',dirname(__FILE__));//返回路径中的目录部分
// define('MVC',realpath(' /'));
define('CORE',MVC."/core");
define('APP',MVC."/app");
// 开启调试模式
define('DEBUG', TRUE);

if(DEBUG) {
    ini_set("display_error", 'On');
}else{
    ini_set("display_error", 'Off');
}

include CORE.'/common/function.php';
// p(MVC);die;
include CORE.'/imooc.php';
// p(APP);
