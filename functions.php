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
 $TextDisplay = new Typecho_Widget_Helper_Form_Element_Radio('TextDisplay', 
    array(
        'text' => _t('纯文本'),  
        'content' => _t('带HTML标签')
        ), 
    'text', 
    _t('文章输出方式'));
    $form->addInput($TextDisplay);
 $InstantClick = new Typecho_Widget_Helper_Form_Element_Radio('InstantClick', 
    array(
        'on' => _t('开启'),  
        'off' => _t('关闭')
        ), 
    'off', 
    _t('无刷新加载功能（<a href="http://jimmycai.org/InstantClick.html" target="_blank">InstantClick</a>）'));
    $form->addInput($InstantClick);
}
?>