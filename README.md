# php_search-high
php_search&amp;high


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


<p style="display: inline;color: red;">t</p><p style="display: inline;color: red;">t</p><p style="display: inline;color: red;">t</p><p style="display: inline;color: red;">T</p><p style="display: inline;color: red;">T</p>123<p style="display: inline;color: red;">t</p>123123asdfasdf<p style="display: inline;color: red;">t</p>sdfddfd<p style="display: inline;color: red;">T</p>asdf<p style="display: inline;color: red;">T</p><p style="display: inline;color: red;">T</p>sdfsf<p style="display: inline;color: red;">t</p>SGF<p style="display: inline;color: red;">t</p>SDF
