<nav id="sidebar-container" class='mdui-hoverable mdui-shadow-3'>
	<div>
		<br/>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('First_sidebar') ) :
		?>
		<span class="sidebar-index">分类目录</span>
		<ul id="sidebar-subcontainer-1">
			<?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
		</ul>
		<?php endif; ?>

		<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('Second_sidebar') ) :
		?>
		<span class="sidebar-index">最新文章</span>
		<ul id="sidebar-subcontainer-2">
			<?php
			$sidebarp = get_posts('numberposts=4&orderby=post_date');
			foreach ($sidebarp as $post) {
				echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
			}
			?>
		</ul>
		<?php endif; ?>
	</div>
	<div id="nav-down-guide">
		<?php
			echo "<span id='friend-link'>友情链接</span>"
		?>
		
		<br/>
	</div>
</nav>
<nav id="navigator-container">
	Navigator
</nav>