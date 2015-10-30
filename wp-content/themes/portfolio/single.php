<?php

include("header.php");?>

<?php 

if(have_posts()){
    //I have some posts so loop through the posts
	while(have_posts()){ 
	//get the post, the title, the content
	    the_post();
		echo '<h1 class="content-header">'.get_the_title().'</h1>';?>
		<h3 class="front-sub-header"><a href="<?php bloginfo('url'); ?>/portfolio">See full portfolio.</a></h3><?php
		echo '<div class="single-content">'.get_the_content().'</div>';?>
		<h3 class="front-sub-header home"><a href="<?php bloginfo('url'); ?>/">Back to home page.</a></h3><?php
	}//endloop
}
//no posts exist
else{
	echo "You do not have any content";
} ?>

<?php include("footer.php"); ?>