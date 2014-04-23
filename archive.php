<?php $this->need('header.php'); ?>
    <div class="content grid-u-1 grid-u-med-3-4">
        <h1 class="breadcrumbs" itemprop="breadcrumb"><?php $this->archiveTitle(array(
            'category'  =>  _t('Category : %s'),
            'search'    =>  _t('Keyword : %s'),
            'tag'       =>  _t('Tag : %s '),
            'author'    =>  _t('Wrote By %s')
        ), '', ''); ?></h1>
        <?php if ($this->have()): ?>
           <?php while($this->next()): ?>
           <div class="posts">
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
                                    <div class="post-meta">
                                        <span class="date">
                                            <?php $this->date(); ?>
                                        </span>
                                        <span class="commentsnum">
                                            <a href="<?php $this->permalink() ?>#comments">
                                                <?php $this->commentsNum(_('No Comment'),_('1 Comment'), _('%d Comments')); ?>
                                            </a>
                                        </span>
                                    </div>
                                <a href="<?php $this->permalink() ?>" class="post-title">
                                    <?php $this->title() ?>
                                </a>
                            </header>
                            <div class="post-content">
                                <p>
                                    <?php $this->content(); ?>
                                </p>
                            </div>
                            <?php endif; ?>
            </article>
            </div>
            <hr>
            <?php endwhile; ?>
                    <?php else: ?>
                        <article class="post">
                            <h1 class="content-subhead">
                                <?php _e( 'Not Found'); ?>
                            </h1>
                        </article>
                        <?php endif; ?>
                            <div class="page-nav">
                                <?php $this->pageNav(_('Previous',_('Next'),2,_('...'));?>
                            </div>
                                <?php $this->need('footer.php'); ?>