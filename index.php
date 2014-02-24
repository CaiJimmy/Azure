<?php
/**
 * 蔚蓝简洁的Typecho主题
 * 
 * @package Azure
 * @author Jimmy
 * @version 1.0
 * @link http://jimmycai.org
 */
 
 $this->need('header.php');
 ?>    
<div class="content pure-u-1 pure-u-med-3-4">
    <div class="posts">
        <h1 class="content-subhead">
            <a href="<?php $this->options->siteUrl(); ?>">
                主页
            </a>
            &raquo; 最新文章
        </h1>
        <?php while($this->next()): ?>
            <article class="post" id="<?php $this->cid() ?>">
                <?php if (isset($this->fields->Status)): ?>
                    <a href="<?php $this->permalink() ?>" title="<?php $this->date(); ?>">
                        <div class="post-description">
                            <blockquote>
                                 <?php $this->excerpt(250, '......');?>
                            </blockquote>
                        </div>
                    </a>
                    <?php else: ?>
                <header class="post-header">
                    <a href="<?php $this->permalink() ?>" class="post-title">
                        <?php $this->title() ?>
                    </a>
                    <p class="post-meta">
                        <?php $this->date(); ?> | 分类：
                            <?php $this->category(); ?>
                    </p>
                </header>
                <div class="post-description">
                    <p>
                        <?php $this->content(); ?>
                    </p>
                </div>
                 <?php endif; ?>
            </article>
            <hr>
            <?php endwhile; ?>
    </div>
    <div class="page-nav">
        <?php $this->pageNav('上一页','下一页',10,'...');?>
    </div>
    <?php $this->need('footer.php'); ?>
</div>