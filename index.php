﻿<?php
/**
 * 蔚蓝简洁的Typecho主题
 * 
 * @package Azure
 * @author Jimmy
 * @version 1.5
 * @link http://jimmycai.org
 */
 
 $this->need('header.php');
 ?>    
        <div class="content grid-u-1 grid-u-med-3-4">
            <div class="posts">
                <?php while($this->next()): ?>
                    <article class="post" id="<?php $this->cid() ?>">
                        <?php if (isset($this->fields->Status)): ?>
                            <a href="<?php $this->permalink() ?>" title="<?php $this->date(); ?>">
                                <div class="post-content">
                                    <blockquote>
                                        <?php $this->excerpt(250, _('......'));?>
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
                                        <span class="commentsnum">
                                            <a href="<?php $this->permalink() ?>#comments">
                                                <?php $this->commentsNum(_('No Comment'),_('1 Comment'), _('%d Comments')); ?>
                                            </a>
                                        </span>
                                    </p>
                                </header>
                                <div class="post-content">
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
                <?php $this->pageNav(_('Previous'),_('Next'),10,_('...'));?>
            </div>
            <?php $this->need('footer.php'); ?>
        </div>