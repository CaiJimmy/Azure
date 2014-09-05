<div id="comments">
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
            <h4><?php $this->commentsNum(_t('快抢沙发'), _t('沙发被抢'), _t('已有 %d 条评论')); ?></h4>
                   
            <?php $comments->pageNav(); ?>
            <?php if ($this->options->InstantClick == 'on') { ?>
            <div data-no-instant>
             <?php $comments->listComments(); ?>
            </div>
            <?php } else { ?>
            <?php $comments->listComments(); ?>
            <?php } ?>

            <?php endif; ?>
         
            <?php if($this->allow('comment')): ?>

            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>
			<h4 id="comments" class="subhead"><?php _e('添加新评论'); ?> &raquo;</h4>
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form" class="form">
                <?php if($this->user->hasLogin()): ?>
				<p>登录为 <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
                <?php else: ?>
                  <input type="text" name="author" id="author" placeholder="称呼" value="<?php $this->remember('author'); ?>" />
                  <input type="text" name="mail" id="mail" placeholder="电子邮件" value="<?php $this->remember('mail'); ?>" />
                  <input type="text" name="url" id="url" placeholder="网站"  value="<?php $this->remember('url'); ?>" />
                <?php endif; ?>
				<p><textarea rows="5" name="text" id="comment" placeholder="在这里输入你的评论..." style="resize:none;"><?php $this->remember('text'); ?></textarea></p>
			<p><input type="submit" value="<?php _e('提交评论'); ?>" class="button" id="submit"></p>
			</form>
            </div>
            <?php else: ?>
           <?php _e('<div class="alert info">该文章的评论已关闭</div>'); ?>
            <?php endif; ?>
		</div>
<?php if ($this->options->InstantClick == 'on') { ?>
<script type='text/javascript'>
var TypechoComment={dom:function(id){return document.getElementById(id)},create:function(tag,attr){var el=document.createElement(tag);for(var key in attr){el.setAttribute(key,attr[key])}return el},reply:function(cid,coid){var comment=this.dom(cid),parent=comment.parentNode,response=this.dom('<?php $this->respondId(); ?>'),input=this.dom('comment-parent'),form='form'==response.tagName?response:response.getElementsByTagName('form')[0],textarea=response.getElementsByTagName('textarea')[0];if(null==input){input=this.create('input',{'type':'hidden','name':'parent','id':'comment-parent'});form.appendChild(input)}input.setAttribute('value',coid);if(null==this.dom('comment-form-place-holder')){var holder=this.create('div',{'id':'comment-form-place-holder'});response.parentNode.insertBefore(holder,response)}comment.appendChild(response);this.dom('cancel-comment-reply-link').style.display='';if(null!=textarea&&'text'==textarea.name){textarea.focus()}return false},cancelReply:function(){var response=this.dom('<?php $this->respondId(); ?>'),holder=this.dom('comment-form-place-holder'),input=this.dom('comment-parent');if(null!=input){input.parentNode.removeChild(input)}if(null==holder){return true}this.dom('cancel-comment-reply-link').style.display='none';holder.parentNode.insertBefore(response,holder);return false}}
</script>
<?php } ?> 