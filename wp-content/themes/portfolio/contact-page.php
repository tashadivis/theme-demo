<?php

/* Template Name: Contact Form */

include("header.php");?>

<?php 

echo do_shortcode('[contact-form-7 id="16" title="Contact-Form"]');
//if I do have posts then use the while loop
if(have_posts()){
    //I have some posts so loop through the posts
	while(have_posts()){ 
	//get the post, the title, the content
	    the_post();
		echo '<h1>'.get_the_title().'</h1>';
		echo '<div class="content">'.get_the_content().'</div>';
	}//endloop
}
//no posts exist
else{
	echo "You do not have any content";
} ?>

<?php include("footer.php"); ?>