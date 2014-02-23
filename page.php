<?php $this->need('header.php'); ?>
    <div class="content pure-u-1 pure-u-med-3-4">
        <h1 class="content-subhead">
            <a href="<?php $this->options->siteUrl(); ?>">
                主页
            </a>
            &raquo;
            <?php $this->title() ?>
        </h1>
        <article class="post" id="post">
            <header class="post-header">
                <a href="<?php
                $this->permalink() ?>" class="post-title">
                    <?php $this->title() ?>
                </a>
            </header>
            <div class="post-description">
                <p>
                    <?php $this->content(); ?>
                </p>
            </div>
        </article>
        <?php $this->need('comments.php'); ?>
        <?php $this->need('footer.php'); ?>