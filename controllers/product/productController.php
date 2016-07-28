<?php

/**
 * Author：helen
 * CreateTime: 2016/07/27 10:39
 * Description：产品管理控制类
 */
namespace dssCms\controllers;

include_once BASEPATH . '/controllers/dbController.php';

class product
{
    public function __construct()
    {
        //var_dump('产品类初始化方法');
        $GLOBALS['dbConfig'] = include_once BASEPATH . '/config/db.php';
    }

    public function product_list($query, $data)
    {
        $dbConfig = $GLOBALS['dbConfig'];
        $dbObj = new \Database($dbConfig['DB_HOST'], $dbConfig['DB_USER'], $dbConfig['DB_PWD'], $dbConfig['DB_NAME']);
        $table = 'product';
        $dbObj->select_table_fields($table);
        $product_list = $dbObj->find();
        var_dump(json_encode($product_list, JSON_UNESCAPED_UNICODE));
        var_dump($query);
        var_dump($data);
    }

    public function add($query, $data)
    {
        var_dump('产品类add方法');
    }

    public function search($query, $data)
    {
        var_dump('产品类search方法');
        $dbConfig = $GLOBALS['dbConfig'];
        $dbObj = new \Database($dbConfig['DB_HOST'], $dbConfig['DB_USER'], $dbConfig['DB_PWD'], $dbConfig['DB_NAME']);
        $table = 'product';
        $dbObj->select_table_fields($table);
        $product_list = $dbObj->where($query)->find();
        var_dump($product_list);
    }

    public function modify($query, $data)
    {
        var_dump('产品类modify方法');
    }

    public function delete($query, $data)
    {
        var_dump('产品类delete方法');
    }
}