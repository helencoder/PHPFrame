<?php
/**
 * Author：helen
 * CreateTime: 2016/07/27 16:12
 * Description：HTTP认证
 */
if ($_SERVER['PHP_AUTH_USER'] === 'dsscms' && $_SERVER['PHP_AUTH_PW'] === '1234') {
    //echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    unset($_SERVER['PHP_AUTH_USER']);
    unset($_SERVER['PHP_AUTH_PW']);
} else {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Forbidden !!!';
    exit;
}