<?php
/**
 * Author：helen
 * CreateTime: 2016/07/27 10:31
 * Description：公共函数
 */

/**
 * 获取当前页面的完整url
 */
function getCurrentUrl()
{
    //当前页面的url
    $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $url;
}

/**
 * 获取当前页面的query，并以数组形式返回
 */
function getCurrentQuery()
{
    $query = $_SERVER['QUERY_STRING'];
    $query_arr = convertUrlQuery($query);
    return $query_arr;
}

//定义处理函数
function get_url_msg($str)
{
    $data = array();
    $parameter = explode('&', end(explode('?', $str)));
    foreach ($parameter as $val) {
        $tmp = explode('=', $val);
        $data[$tmp[0]] = $tmp[1];
    }
    return $data;
}

/*
     * 将URL中的参数取出来放到数组里
     * @access public
     * @param string url后带参数
     * @return array 处理后的数组信息
     * */
function convertUrlQuery($query){
    if ($query === '') {
        $params = '';
    } else {
        $queryParts = explode('&', $query);
        $params = array();
        foreach ($queryParts as $param){
            $item = explode('=', $param);
            $params[$item[0]] = $item[1];
        }
    }
    return $params;
}

/*
 * 将 参数数组 再变回 字符串形式的参数格式
 * @access public
 * @param array 参数数组信息
 * @return string url后带参数
 * */
function getUrlQuery($array_query){
    $tmp = array();
    foreach($array_query as $k=>$param)
    {
        $tmp[] = $k.'='.$param;
    }
    $params = implode('&',$tmp);
    return $params;
}