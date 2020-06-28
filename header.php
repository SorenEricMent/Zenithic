<?php wp_head(); ?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		<?php
	if (is_home()) {
		bloginfo('name');
		echo " - ";
		bloginfo('description');
	} elseif (is_category()) {
		single_cat_title();
		echo " - ";
		bloginfo('name');
	} elseif (is_single() || is_page()) {
		single_post_title();
	} elseif (is_search()) {
		echo "Result";
		echo " - ";
		bloginfo('name');
	} elseif (is_404()) {
		echo 'Not Found';
	} else {
		wp_title('', true);
	}
	?>
	</title>
	<link rel="stylesheet" href="https://cdn.winsloweric.cn/mdui/css/mdui.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<script src="https://cdn.winsloweric.cn/mdui/js/mdui.min.js"></script>
</head>
<header id="header-container">

</header>
