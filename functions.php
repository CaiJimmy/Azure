<?php
/**
 * 显示下一篇
 * 
 * @access public
 * @param string $default 如果没有下一篇,显示的默认文字
 * @return void
 */
function theNext($widget, $default = NULL)
{
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
              ->where('table.contents.created > ?', $widget->created)
              ->where('table.contents.status = ?', 'publish')
              ->where('table.contents.type = ?', $widget->type)
              ->where('table.contents.password IS NULL')
              ->order('table.contents.created', Typecho_Db::SORT_ASC)
              ->limit(1);
    $content = $db->fetchRow($sql);
 
    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '">下一篇文章 &rarr;</a>';
        echo $link;
    } else {
        echo $default;
    }
}
 
/**
 * 显示上一篇
 * 
 * @access public
 * @param string $default 如果没有下一篇,显示的默认文字
 * @return void
 */
function thePrev($widget, $default = NULL)
{
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
              ->where('table.contents.created < ?', $widget->created)
              ->where('table.contents.status = ?', 'publish')
              ->where('table.contents.type = ?', $widget->type)
              ->where('table.contents.password IS NULL')
              ->order('table.contents.created', Typecho_Db::SORT_DESC)
              ->limit(1);
    $content = $db->fetchRow($sql);
 
    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '">&larr; 上一篇文章</a>';
        echo $link;
    } else {
        echo $default;
    }
}
function themeConfig($form) {
 $CDNSetting = new Typecho_Widget_Helper_Form_Element_Radio('CDN', 
    array(
        'on' => _t('开启'),  
        'off' => _t('关闭')
        ), 
    'on', 
    _t('主题样式表CDN加速'));
    $form->addInput($CDNSetting);

    $CDNUrl = new Typecho_Widget_Helper_Form_Element_Text('CDNUrl', NULL, 'http://cdn.jimmycai.org/Azure/style.css', _t('请输入您的样式表CDN地址（<a href="http://jimmycai.org/Azure.html#CDN">关于默认的CDN地址</a>）'));
    $form->addInput($CDNUrl);
}
?>