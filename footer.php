<footer id="footer">
    &copy;
    <?php echo date( 'Y'); ?>
        <a href="<?php $this->options->siteUrl(); ?>">
            <?php $this->options->title(); ?>
        </a>
        . 由
        <a href="http://www.typecho.org">
            Typecho
        </a>
        强力驱动 | Theme By
        <a href="http://jimmycai.org">
            Jimmy
        </a>
</footer>
<!-- end #footer -->
</div>
<?php $this->footer(); ?>
</body>
</html>