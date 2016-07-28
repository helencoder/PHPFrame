<?php
/**
 * Author：helen
 * CreateTime: 2016/07/27 10:26
 * Description：数据中心产品管理
 */
// 权限控制
include_once './auth.php';

// 应用入口文件
date_default_timezone_set("Asia/Shanghai");
header('Content-type: text/html;charset=utf-8');
// 项目根路径
define('BASEPATH', dirname(__FILE__));
// 调试模式
define('APP_DEBUG', True);

// 引入配置文件
include_once BASEPATH . '/config/config.php';

// 路由控制
$router = include_once BASEPATH . '/config/router.php';
if ($_SERVER['HTTP_HOST'] !== 'dsscms.weibo.com') {
    var_dump('当前host不被允许');
} else {
    $request_path = str_replace('/index.php', '', $_SERVER['PHP_SELF']);
    $request_query = getCurrentQuery();
    if (array_key_exists($request_path, $router)) {
        $module_file = BASEPATH . $router[$request_path]['file_name'];
        $class_name = $router[$request_path]['class_name'];
        $method_name = $router[$request_path]['method_name'];
        if (file_exists($module_file)) {
            include $module_file;
            $obj_module = new $class_name();
            if (!method_exists($obj_module, $method_name)) {
                die("要调用的方法不存在");
            } else {
                if (is_callable(array($obj_module, $method_name))) {
                    $obj_module->$method_name($request_query, $_POST);
                }
            }
        } else {
            die("定义的模块不存在");
        }
    } else {
        echo '页面不存在';
    }
}

