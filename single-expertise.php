<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<!-- 	<section id="primary" class="content-area">
		<main id="main" class="site-main"> -->

	<section class="market-top">
    <div class="container-fluid">
	  <div class="top-develop">
	    <a class="our" href="#"></a>
		<a class="our" href="#"></a>
		<a class="active" href="#"><?= get_the_title()?></a>
      </div>
    </div>
	</section>
<section class="development-description">
			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				//get_template_part( 'template-parts/content/content', 'single' );

				//echo get_the_title();

	echo "<div class='head-img-des'>
   <div class='container'>
      <div class='row'>
            <div class='develop-des col-md-3 col-sm-12 col-xs-12'>
				<h5 style='margin-left: -81px;'>".get_the_title()."</h5>
				<hr class='small-line'>
				<h6 style='margin-left: -80px;'>TAMPA, FLORIDA</h6>
			</div>
						
			 <div class='para-section col-md-9 col-sm-12 col-xs-12'>
			 
				<p class='para-1'>".get_the_content()."</p>
		    </div>
    	 </div>
  	 </div>
	</div>  ";

if ( has_post_thumbnail() ) {
echo "	<div class='tab-img' class='d-block'>";
		  the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
	echo "	</div>";
}


 // Previous/next post navigation.
    $next_post = get_next_post();
    $previous_post = get_previous_post();

    $prevThumb = get_the_post_thumbnail_url( get_previous_post(), 'thumbnail-size' );
$nextThumb = get_the_post_thumbnail_url( get_next_post(), 'thumbnail-size' );
    
    echo "<div class='img-descript'>

    <div class='row'>
    	
    	<div class='dev-img col-md-6 col-sm-6 col-xs-12' >
    	<img src='".$prevThumb."' class='d-block ml-auto mr-auto'/>";
echo "</div>";

echo "<div class='dev-img col-md-6 col-sm-6 col-xs-12' >
		<img src='".$nextThumb	."' class='d-block ml-auto mr-auto'/>";
echo "</div>
	
	</div>
	<a href='".get_permalink( get_adjacent_post(false,'',true)->ID )."' class='back-btn expertise-btn'><i class='fa fa-arrow-left'></i> Back to our expertise </a>
				<a href='".get_permalink( get_adjacent_post(false,'',false)->ID )."' class='next-btn expertise-btn'>Next project <i class='arrow-right-icon'></i></a>

</div>";?>



	<?php			if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: parent post link */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',

								
						)
					);

				}

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}


		// 		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		// 			the_post_thumbnail();	
		// }


			endwhile; // End of the loop.
			?>

	<!-- 	</main> --><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
