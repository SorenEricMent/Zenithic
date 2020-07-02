<div id="background-image-container">
	</div>
<div id="background-image-container-transparent">
	</div>
<?php get_header();?>
<?php get_sidebar(); ?>
<div id="single-page-main-container">
<div id="single-page-article-container" class="mdui-hoverable mdui-shadow-2">
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
	<span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
	<br/>
	<div id="single-container">
	<span id="main-article">
	<?php the_content(); ?>
	</span>
	</div>
	<?php else : ?>
	<div class="errorbox">
		错误:没有文章。
	</div>
	<?php endif; ?>
	</div>

<br/>
<span id="article-tags"><?php the_tags('标签：', ', ', ''); ?></span>
<div id="comment-container" class="mdui-hoverable mdui-shadow-2">
<?php comments_template( $file, $separate_comments ); ?>
<?php edit_post_link('编辑文章', '', ''); ?>
</div>
</div>
<?php get_footer() ?>