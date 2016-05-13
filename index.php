<?php
/**
 * Created by PhpStorm.
 * User: baihuzi
 * Date Time: 2016/5/13 18:24
 */
require_once('common.php');

$key      = "t";
$test_str = "tttTT123t123123asdfasdftsdfddfdTasdfTTsdfsftSGFtSDF";

$result = replay_keyword($key, $test_str);

echo $result;
