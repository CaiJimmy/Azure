<?php $this->
    need('header.php'); ?>
    <div class="content pure-u-1 pure-u-med-3-4">
        <h1 class="content-subhead"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
        </h1>
        <?php if ($this->have()): ?>
            <?php while($this->next()): ?>
                <article class="post" id="<?php $this->cid() ?>">fields->Status)): ?>
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
                    <?php else: ?>
                        <article class="post">
                            <h1 class="content-subhead">
                                <?php _e( '没有找到内容'); ?>
                            </h1>
                        </article>
                        <?php endif; ?>
                            <div class="page-nav">
                                <?php $this->pageNav('上一页','下一页',10,'...');?>
                            </div>
                            <?php $this->need('footer.php'); ?>