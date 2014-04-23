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
        $link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '">'._('Next').' &rarr;</a>';
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
        $link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '">&larr; '._('Previous').'</a>';
        echo $link;
    } else {
        echo $default;
    }
}