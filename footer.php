<blockquote>
    &copy;
    <?php echo date( 'Y'); ?>
        <a href="<?php $this->options->siteUrl(); ?>">
            <?php $this->options->title(); ?>
        </a>
        . 由
        <a href="http://www.typecho.org" target="_blank">
            Typecho
        </a>
        强力驱动 | Theme By
        <a href="http://jimmycai.org" target="_blank">
            Jimmy
        </a>
</blockquote>
</div>
<?php if ($this->options->InstantClick == 'on') { ?>
<script src="<?php $this->options->themeUrl('instantclick.min.js'); ?>" data-no-instant></script>
<script data-no-instant>InstantClick.init();</script>
<?php } ?> 
<?php $this->footer(); ?>
</body>
</html>
