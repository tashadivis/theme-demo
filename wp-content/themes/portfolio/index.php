<?php

include("header.php");?>

<?php 
//if I do have posts then use the while loop
if(have_posts()){
    //I have some posts so loop through the posts
	while(have_posts()){ 
	//get the post, the title, the content
	    the_post();?>
		
			<?php 
				echo '<h2 class="content-header">'.get_the_title().'</h1>';?>
				<a href="<?php the_permalink(); ?>"><?php echo '<div class="page-content">'.get_the_content().'</div>'; ?></a>
		
	<?php }//endloop
}
//no posts exist
else{
	echo "No content found.";
}?>

<h3 class="front-sub-header home"><a href="<?php bloginfo('url'); ?>/">Back to home page.</a></h3>

<?php include("footer.php"); ?>