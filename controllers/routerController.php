<?php

/**
 * Author：helen
 * CreateTime: 2016/07/27 11:38
 * Description：路由控制类
 */
class router
{
    private $_host = 'dsscms.weibo.com';
    private $_path;
    private $_query;
    private $_data;

    public function __construct($host, $path, $query, $data)
    {
        if ($this->_host !== $host) {
            return false;
        } else {
            var_dump('right');
            return $this;
        }

    }

}