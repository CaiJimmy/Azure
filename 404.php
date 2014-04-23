<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - File Not Found! | <?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.min.css'); ?>">
    <?php if ($this->is('post')): ?>
    <link rel="canonical" href="<?php $this->permalink() ?>" />
    <?php endif; ?>
    <?php if ($this->is('index')): ?>
    <link rel="canonical" href="<?php $this->options->siteUrl(); ?>" />
    <?php endif; ?>
    <?php $this->header("generator=&template="); ?>
  </head>
<body>
<div class="grid-g">
    <div class="sidebar grid-u-1 grid-u-med-1-4">
        <div class="header">
            <hgroup>
                <a href="<?php $this->options->siteUrl(); ?>">
                    <h1 class="title">
                        <?php $this->options->title(); ?>
                    </h1>
                </a>
                <h2 class="description">
                    <?php $this->options->description(); ?>
                </h2>
            </hgroup>
            <nav class="nav">
                <ul class="nav-list">
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while($pages->next()): ?>
                            <li class="nav-item">
                                <a href="<?php $pages->permalink(); ?>" class="button">
                                    <?php $pages->title(); ?>
                                </a>
                            </li>
                            <?php endwhile; ?>
                </ul>
            </nav>
            <?php if (empty($this->options->footerBlock) || in_array('ShowSearchBox', $this->options->footerBlock)): ?>
            <form class="form" id="search">
                <input type="text" class="input" name="s" id="s" required="true" placeholder="<?php _e('TRY....?'); ?>">
            </form>
            <?php endif; ?>
        </div>
    </div>
    <div class="content grid-u-1 grid-u-med-3-4">
        <h1 class="breadcrumbs" itemprop="breadcrumb">
            <a href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?></a>&nbsp;&gt;&nbsp;<?php _e('File Not Found!'); ?></h1>
        <h2 class="text-center">
            <?php _e('File Not Found!'); ?>
        </h2>
        <p class="text-center"><?php _e('Probably you have entered an incorrect URL, or the original article was removed bye me.'); ?></p>
        <?php $this->need('footer.php'); ?>