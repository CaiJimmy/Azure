<?php
/**
 * 蔚蓝简洁的Typecho主题
 * 
 * @package Azure
 * @author Jimmy
 * @version 2.0
 * @link http://jimmycai.org
 */
 
 $this->need('header.php');
 ?>    
        <div class="content grid-u-1 grid-u-med-3-4">
        <!--[if lt IE 10]> 
        <div class="alert danger">
         当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="/go.html?url=http://browsehappy.com/">升级你的浏览器</a>.
        </div>
        <![endif]-->
            <div class="posts">
                <?php while($this->next()): ?>
                    <article class="post" id="<?php $this->cid() ?>">
                        <?php if (isset($this->fields->Status)): ?>
                            <a href="<?php $this->permalink() ?>" title="<?php $this->date(); ?>">
                                <div class="post-content">
                                    <div class="well">
                                        <?php $this->excerpt(250, '......');?>
                                    </div>
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
                                        <span class="commentsnum">
                                            <a href="<?php $this->permalink() ?>#comments">
                                                <?php $this->commentsNum('快抢沙发', '沙发被抢', '%d 条评论'); ?>
                                            </a>
                                        </span>
                                    </p>
                                </header>
                                <div class="post-content">
                                  <?php if ($this->options->TextDisplay == 'text') { ?>
                                       <?php $this->excerpt(250, '......');?>
                                   <?php } else { ?>
                                        <?php $this->content('继续阅读'); ?>
                                   <?php } ?> 
                                </div>
                                <?php endif; ?>
                    </article>
                    <hr>
                    <?php endwhile; ?>
            </div>
            <div class="page-nav">
                <?php $this->pageNav('上一页','下一页',10,'...');?>
            </div>
        <h1 class="subhead">
            友情链接
        </h1>
        <div class="links">
            <ul>
                <li>
                    <a target="_blank" href="#">
                        请到index.php修改友情链接
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                        友情链接样式由@山炮不二提供
                    </a>
                </li>
            </ul>
        </div>
        <hr>
            <?php $this->need('footer.php'); ?>