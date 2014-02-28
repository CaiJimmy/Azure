<?php $this->need('header.php'); ?>
    <div class="content grid-u-1 grid-u-med-3-4">
        <h1 class="content-subhead">
            <a href="<?php $this->options->siteUrl(); ?>">
                主页
            </a>
            &raquo;
            <?php $this->category(); ?> &raquo;
                <?php $this->title() ?>
        </h1>
        <article class="post" id="post">
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
                </p>
            </header>
            <div class="post-description">
                <p>
                    <?php $this->content(); ?>
                </p>
            </div>
            <div class="tags">
                <?php $this->tags(' , ', true, '无'); ?>
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