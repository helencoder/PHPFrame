<?php
/**
 * Author：helen
 * CreateTime: 2016/07/27 15:17
 * Description：项目路由
 */
return array(
    //默认路由
    '/index'      => array(
        'file_name'     => '\controllers\product\productController.php',
        'class_name'    => 'dssCms\controllers\product',
        'method_name'   => 'product_list'
    ),

    // 产品控制路由
    '/product/list'      => array(
        'file_name'     => '\controllers\product\productController.php',
        'class_name'    => 'dssCms\controllers\product',
        'method_name'   => 'product_list'
    ),
    '/product/add'      => array(
        'file_name'     => '\controllers\product\productController.php',
        'class_name'    => 'dssCms\controllers\product',
        'method_name'   => 'add'
    ),
    '/product/search'   => array(
        'file_name'     => '\controllers\product\productController.php',
        'class_name'    => 'dssCms\controllers\product',
        'method_name'   => 'search'
    ),
    '/product/modify'   => array(
        'file_name'     => '\controllers\product\productController.php',
        'class_name'    => 'dssCms\controllers\product',
        'method_name'   => 'modify'
    ),
    '/product/delete'   => array(
        'file_name'     => '\controllers\product\productController.php',
        'class_name'    => 'dssCms\controllers\product',
        'method_name'   => 'delete'
    ),

    // 用户控制路由
    'user/list'          => array(
        'file_name'     => '\controllers\user\userController.php',
        'class_name'    => 'dssCms\controllers\user',
        'method_name'   => 'user_list'
    ),
    'user/add'          => array(
        'file_name'     => '\controllers\user\userController.php',
        'class_name'    => 'dssCms\controllers\user',
        'method_name'   => 'add'
    ),
    'user/search'       => array(
        'file_name'     => '\controllers\user\userController.php',
        'class_name'    => 'dssCms\controllers\user',
        'method_name'   => 'search'
    ),
    'user/modify'       => array(
        'file_name'     => '\controllers\user\userController.php',
        'class_name'    => 'dssCms\controllers\user',
        'method_name'   => 'modify'
    ),
    'user/delete'       => array(
        'file_name'     => '\controllers\user\userController.php',
        'class_name'    => 'dssCms\controllers\user',
        'method_name'   => 'delete'
    ),


);

