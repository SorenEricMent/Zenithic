<?php
if ( post_password_required() )
    return;
?>
<div id="comments" class="responsesWrapper">
    <meta content="UserComments:<?php echo number_format_i18n( get_comments_number() );?>" itemprop="interactionCount">
    <?php comments_popup_link('还没有评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
    <ol class="commentlist">
        <?php
        wp_list_comments( array(
            'style'       => 'ol',
            'short_ping'  => true,
            'avatar_size' => 32,
            'type'        =>'comment',
            'callback'    =>'simple_comment',
        ) );
        ?>
    </ol>
    <nav class="navigation comment-navigation u-textAlignCenter" data-fuck="<?php the_ID();?>">
    <?php paginate_comments_links(array('prev_next'=>true)); ?>
    </nav>
    <?php if(comments_open()) : ?>
        <div id="respond" class="respond" role="form">
            <h2 id="reply-title" class="comments-title"><?php comment_form_title( '', '回复给 %s' ); ?> <small>
                    <?php cancel_comment_reply_link(); ?>
                </small></h2>
            <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
                <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
            <?php else : ?>
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="commentform" id="commentform">
                    <?php if ( $user_ID ) : ?>
                        <p class="warning-text" style="margin-bottom:10px">以<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>身份登录 | <a class="link-logout" href="<?php echo wp_logout_url(get_permalink()); ?>">退出登录 »</a></p>
                        <textarea class="form-control mdui-textfield-input" rows="3" id="comment" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};" placeholder="留下你的知识与见解..." class="form-control" tabindex="1" name="comment"></textarea>
                    <?php else : ?>
                        <textarea class="form-control mdui-textfield-input" rows="3" id="comment" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};" placeholder="留下你的知识与见解..." tabindex="1" name="comment"></textarea>
                        <div class="commentform-info">
                        	<div class="mdui-textfield">
                        	<label class="mdui-textfield-label">昵称</label>
                            <label id="author_name" for="author">
                                <input class="mdui-textfield-input form-control" id="author" type="text" tabindex="2" value="<?php echo $comment_author; ?>" name="author" required>
                            </label>
                            <br/>
                            <label class="mdui-textfield-label">邮箱</label>
                            <label id="author_email" for="email">
                                <input class="mdui-textfield-input form-control" id="email" type="text" tabindex="3" value="<?php echo $comment_author_email; ?>" name="email" required>
                            </label>
                            <br/>
                            <label class="mdui-textfield-label">网址[非必须]</label>
                            <label id="author_website" for="url">
                                <input class="mdui-textfield-input form-control" id="url" type="text" tabindex="4" value="<?php echo $comment_author_url; ?>" name="url">
                            </label>
                            <br/>
                            </div>
                        </div>
                    <?php endif; ?>
                    <br/>
                    <div class="btn-group commentBtn" role="group">
                        <input name="submit" type="submit" id="submit" class="mdui-btn mdui-btn-raised btn btn-sm btn-danger btn-block" tabindex="5" value="发表评论" /></div>
                    <?php comment_id_fields(); ?>
                </form>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>