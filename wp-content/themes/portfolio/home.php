<?php

include("header.php");?>

<?php 
//if I do have posts then use the while loop
if(have_posts()){
    //I have some posts so loop through the posts
	while(have_posts()){ 
	//get the post, the title, the content
	    the_post();
		echo '<h1 class="front-header">'.get_the_title().'</h1>';
	}//endloop
}
//no posts exist
else{
	echo "No content found.";
}

$portfolio_query = new WP_Query( $args );
?>

<div class="portfolio_feature">
	<?php 
	if ($portfolio_query->have_posts()) {
		//I have some posts so loop through the posts
		while($portfolio_query->have_posts()){ 
		//get the post, the title, the content
			$portfolio_query->the_post();
			if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large');?></a>
			<?php }
			else {
				echo "No thumbnail found.";
			}
		}//endloop
	wp_reset_postdata();
	}
	//no posts exist
	else {
		echo "No content found.";
	}

	?>
</div>

<?php include("footer.php"); ?>