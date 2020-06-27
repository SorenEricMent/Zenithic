<div>
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div class="articles-container">
		<br/>
		<a class="title-index" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<br/>
		<span class="blog-excerpt"><?php the_excerpt(); ?></span>
	</div>
<?php endwhile; ?>
</div>
<?php endif; ?>
<div class="page-navigator-container">
	<div id="page-navigator-next"><?php next_posts_link('Next page >') ?></div>
	<div id="page-navigator-prev"><?php previous_posts_link('< Prev page') ?></div>
</div>