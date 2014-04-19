<?php $this->need('header.php'); ?>
    <div class="content grid-u-1 grid-u-med-3-4">
        <h1 class="breadcrumbs" itemprop="breadcrumb">
            <a href="<?php $this->options->siteUrl(); ?>">
                主页
            </a>
             > 
            <?php $this->category(); ?>  > 
                <?php $this->title() ?>
                    <span class="date">
                        <?php $this->date(); ?>
                    </span> 
        </h1>
        <article class="post" id="<?php $this->cid() ?>">
            <header class="post-header">
                <a href="<?php $this->permalink() ?>" class="post-title">
                    <?php $this->title() ?>
                </a>
            </header>
            <div class="post-content">
                <p>
                    <?php $this->content(); ?>
                </p>
            </div>
            <div class="tags">
                <?php $this->tags('&nbsp;', true, '无'); ?>
            </div>
        </article>
        <ul class="pager">
            <li class="previous">
                <?php thePrev($this); ?>
            </li>
            <li class="next">
                <?php theNext($this); ?>
            </li>
        </ul>
        <br>
        <?php $this->need('comments.php'); ?>
            <?php $this->need('footer.php'); ?>