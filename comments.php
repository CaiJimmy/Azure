<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
 
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 
<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
    <div id="<?php $comments->theId(); ?>">
        <div class="comment-author">
            <?php $comments->gravatar('40', ''); ?>
            <cite class="fn"><?php $comments->author(); ?></cite>
        </div>
        <div class="comment-meta">
            <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a>
        </div>
        <div class="comment-content"><?php $comments->content(); ?></div>
        <div class="comment-reply"><?php $comments->reply(_('Reply')); ?></div>
    </div>
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<?php } ?>
<div id="comments">
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
            <h4><?php $this->commentsNum(_t('No Comment'), _t('1 Comment'), _t('%d Comments')); ?></h4>
                   
            <?php $comments->pageNav(); ?>

            <?php $comments->listComments(); ?>

            <?php endif; ?>
         
            <?php if($this->allow('comment')): ?>

            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(_('Cancel')); ?>
            </div>
			<h4 id="comments" class="subhead"><?php _e('Add comment'); ?> &raquo;</h4>
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form" class="form">
                <?php if($this->user->hasLogin()): ?>
				<p>Login as <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('Logout'); ?> &raquo;</a></p>
                <?php else: ?>
                  <input type="text" name="author" id="author" placeholder="Nick Name" value="<?php $this->remember('author'); ?>" />
                  <input type="text" name="mail" id="mail" placeholder="E-mail" value="<?php $this->remember('mail'); ?>" />
                  <input type="text" name="url" id="url" placeholder="WebSite"  value="<?php $this->remember('url'); ?>" />
                <?php endif; ?>
				<p><textarea rows="5" name="text" id="comment" placeholder="Type your opinion here..." style="resize:none;"><?php $this->remember('text'); ?></textarea></p>
			<p><input type="submit" value="<?php _e('Submit'); ?>" class="button" id="submit"></p>
			</form>
            </div>
            <?php else: ?>
           <?php _e('Comment is not allowed here!'); ?>
            <?php endif; ?>
		</div>