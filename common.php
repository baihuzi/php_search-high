<?php
/**
 * Created by PhpStorm.
 * User: baihuzi
 * Date Time: 2016/5/4 17:06
 */

/**
 * @param $keyword 查找关键词 不区分大小写
 * @param $content 需查找的内容
 *
 * @return mixed
 */
function replay_keyword($keyword, $content)
{
    $keyword = "/($keyword)/i";
    $str     = '<p style="display: inline;color: red;">\\1</p>';
    $content = preg_replace($keyword, $str, $content);

    return $content;
}

echo replay_keyword("t","tttTT123t123123asdfasdftsdfddfdTasdfTTsdfsftSGFtSDF");





