<?php
/**
 * 蔚蓝简洁的Typecho主题
 * 
 * @package Azure
 * @author Jimmy
 * @version 1.2.5
 * @link http://jimmycai.org
 */
 
 $this->need('header.php');
 ?>    
        <div class="content grid-u-1 grid-u-med-3-4">
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
                                        <span class="date">
                                            <?php $this->date(); ?>
                                        </span>
                                        <span class="category">
                                            <?php $this->category(); ?>
                                        </span>
                                        <span class="commentsnum">
                                            <a href="<?php $this->permalink() ?>#comments">
                                                <?php $this->commentsNum('快抢沙发', '沙发被抢', '%d 条评论'); ?>
                                            </a>
                                        </span>
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