<?php

/**
 * 10进制 转 62进制
 *
 * @param $n
 * @return string
 */
function dec62($n) {
    $base = 62;
    $index = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $ret = '';
    for($t = floor(log10($n) / log10($base)); $t >= 0; $t --) {
        $a = floor($n / pow($base, $t));
        $ret .= substr($index, $a, 1);
        $n -= $a * pow($base, $t);
    }
    return $ret;
}

/**
 * 62进制 转 10进制
 *
 * @param $s
 * @return bool|int
 */
function dec10($s) {
    $base = 62;
    $index = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $ret = 0;
    $len = strlen($s) - 1;
    for($t = 0; $t <= $len; $t ++) {
        $ret += strpos($index, substr($s, $t, 1)) * pow($base, $len - $t);
    }
    return $ret;
}