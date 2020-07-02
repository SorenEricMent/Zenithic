<!DOCTYPE HTML>
<html>
<!--Zenithic WP-Theme, By WinslowEric.CN (Zenithium.org)-->
<?php get_header(); ?>
<body style="overflow-y:auto; overflow-x:auto; ">
<div id="background-image-container">
	</div>
<div id="background-image-container-transparent">
	</div>
<div id="articles-main-container" class="mdui-shadow-3">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div class="articles-container mdui-shadow-2 mdui-hoverable mdui-ripple">
		<br/>
		<a class="title-index" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<br/>
		<span class="blog-excerpt"><?php the_excerpt(); ?></span>
	</div>
<?php endwhile; ?>
<button class="pagebtn mdui-btn mdui-btn-raised"
<?php
$current = $wp_query->query_vars['paged'];
$max_page = $wp_query->max_num_pages; 
if($current == $max_page){
	echo ">";
}else{
	echo " disabled>";
}
?>
<?php 
$current = $wp_query->query_vars['paged'];
$max_page = $wp_query->max_num_pages; 
if($current == $max_page){
	echo previous_posts_link("Prev");
}else{
	echo "Prev";
}
?>
<i class="mdui-icon material-icons">&#xe5d8;</i>
</button>
<button class="pagebtn mdui-btn mdui-btn-raised"
<?php
$current = $wp_query->query_vars['paged'];
$max_page = $wp_query->max_num_pages; 
if($current != $max_page){
	echo ">";
}else{
	echo " disabled>";
}
?>
<?php 
$current = $wp_query->query_vars['paged'];
$max_page = $wp_query->max_num_pages; 
if($current != $max_page){
	echo next_posts_link("Next");
}else{
	echo "Next";
}
?>
<i class="mdui-icon material-icons">&#xe5db;</i>
</button>
</div>
<?php endif; ?>
<script>
	var buttonElement1 = document.getElementsByClassName('pagebtn')[0];
	var buttonElement2 = document.getElementsByClassName('pagebtn')[1];
	for(var i=0;i<buttonElement1.children.length;i++){
		if(buttonElement1.children[i].localName == "a"){
			index1 = i;
		}
	}
	for(var i=0;i<buttonElement2.children.length;i++){
		if(buttonElement2.children[i].localName == "a"){
			index2 = i;
		}
	}
	buttonElement1.onclick = function(){
			buttonElement1.children[index1].click();
	}
	buttonElement2.onclick = function(){
			buttonElement2.children[index2].click();
	}
</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</body>
</html>