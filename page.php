<?php $this->need('header.php'); ?>
    <div class="content grid-u-1 grid-u-med-3-4">
        <h1 class="breadcrumbs" itemprop="breadcrumb">
            <a href="<?php $this->options->siteUrl(); ?>">
                首页
            </a>
             > 
           <?php $this->title() ?>
        </h1>
        <article class="post" id="post">
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
        </article>
        <?php $this->need('comments.php'); ?>
        <?php $this->need('footer.php'); ?>