<head>
	<link rel="stylesheet" href="https://cdn.winsloweric.cn/mdui/css/mdui.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"/>
	<script>
		window.alert = function(e) {
			mdui.snackbar({
				message : e,
				position : 'bottom'
			});
		}
</script>
	<script src="https://cdn.winsloweric.cn/mdui/js/mdui.min.js"></script>
	<script src="https://cdn.winsloweric.cn/jquery/jquery.min.js"></script>
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
</head>
<header id="header-container" class="mdui-shadow-3">
<h2 class="homelink">
	<a class="homelink" href="<?php echo get_option('home'); ?>">
	<?php bloginfo('name'); ?>
	</a>
	</h2>
<h4 id="page-description" class="grid_12 caption clearfix">&nbsp;<?php bloginfo('description'); ?></h4>
<div id="uo-container" class="mdui-container mdui-p-t-1">
<ul class="mdui-menu" id="menu">
<li class="mdui-menu-item">
	<?php
	$logoutLink = wp_logout_url(home_url());
	$beginLink = wp_login_url(home_url());
	$registerLink = wp_registration_url();
	if (is_user_logged_in()) {
		$current_user = wp_get_current_user();
		echo "<a class='mdui-ripple' href='" . $logoutLink . "' ><i class='fa fa-sign-out'></i><span>退出登录</span></a>";
	} else {
		echo "<a class='mdui-ripple' href='" . $registerLink . "'>注册</a>";
		echo "<a class='mdui-ripple' href='" . $beginLink . "'>登录</a>";
	}
?>
    </li>
    </ul>
    <div id="user-operation" class="mdui-chip">
    	<?php
		global $current_user;
		get_currentuserinfo();
		echo "<img class='mdui-chip-icon'" . get_avatar($current_user -> user_email, 32);
	?>
	<?php
		if (is_user_logged_in()) {
			$current_user = wp_get_current_user();
			echo "<span id='user-area' class='mdui-chip-title'>" . $current_user -> user_login . ", 您好</span>";
		} else {
			echo "<span id='user-area' class='mdui-chip-title'>访客,您好</span>";
		}
	?>
</div>
</div>
</header>
<script>
	var inst = new mdui.Menu('#user-operation', '#menu');
	document.getElementById('uo-container').addEventListener('click', function() {
		inst.open();
	}); 
</script>