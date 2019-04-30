<?php
/**
* Template Name: Home Page
*/
get_header();
?>
<?php $meta = get_post_meta( get_the_ID(), 'your_fields', true ); 
// echo $meta['text2']; die(); 
?>


<section class="carousal">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">

		

<?php
$args = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$sliders = new WP_Query( $args );
 
?>
<?php 
$i = 0;
if ( $sliders->have_posts() ) {
    while ( $sliders->have_posts() ) :
    	$sliders->the_post(); 
 
     ?>
	
	<?php if (has_post_thumbnail( $sliders->ID ) ): ?>
  			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $sliders->ID ), 'single-post-thumbnail' ); ?>
	<?php endif; ?>

			<div class="carousel-item <?= $i==0 ? 'active' : ''; ?>">
				<img src="<?php echo $image[0]; ?>" class="d-block w-100" alt="..." />
				<div class="heading-1">
					<h4><?= get_the_content();?><!-- <br /><?php //echo get_the_content(); ?> --></h4>
				</div>
			</div>

		
		<!-- Carousel Items Ends -->
		
			 <?php
			 $i++;
   endwhile;
} //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- Carousel Navigations Ends -->
	</div>
</section>
<!--  Carousel section Ends --> 
 
<section>
	<div class="progress">
		<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
		<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
		<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
		<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
		<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
	</div> 
	 
	<div class="ribbon-title text-center">
		<h4 class="d-inline"><?= $meta['text']; ?></h4> 
		<a href="#" class="find-home-btn hvr-sweep-to-right hvr-sweep-to-right"><?=$meta['text13'] ?> <i class="fa fa-arrow-right"></i> </a>
    </div>
</section> 
<!-- Carousel Below Ends -->

<section > 
	<div class="our-area text-center">
		<h4><?php echo do_shortcode(' [myshortCode key="hr_house_image_276"]	');?> </h4>
		<p><?= $meta['textarea'];?>
		</p>
	</div>
	<!-- Our Text Section Ends -->
	

	<div class="container image-row desktop-screen-sec"> 
		<div class="row">		
<?php

	$terms = get_terms( 'property_types', array(
    		'orderby'    => 'count',
    		'hide_empty' => 0
			) );

?>
<?php 
$i = 0;

foreach ( $terms as $term ) {?>

	<?php 
$term_image = get_term_meta($term->term_id, '_term_image', true);
 $image = wp_get_attachment_image_src($term_image);

 // print_r($term);die();

 ?>
	

			<div class="image-area col-md-3 col-sm-6 col-xs-12 box14 <?= $i==0 ? 'active' : ''; ?>">
				<img src="<?php echo $image[0]; ?>" class="d-block w-100" alt="..." />
				<div class="image-overlay"></div>
				<div class="heading-2">
					<h4><?= $term->name; ?></h4>
				</div>
				<div class="box-content text-center">
					<h3 class="title"><?= $term->name; ?></h3>
					<p class="post"><?= $term->description;?></p>
					<div class="icon"><a href="<?= get_permalink(); ?>" class="icon"><?= $meta['text8']; ?><i class="arrow-right-icon"></i></a></div>
				</div>
			</div>

		<?php
			 $i++;
    }
 //resetting the page loop
  
    ?>
			
		</div>
	</div>
</section> 
<!-- Our Join and Images Section Ends -->

<section> 
	<div class="background-image builds-communitives-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<div class="community">		 
						<h4 class="heading-3"><?php echo $meta['text7']; ?><span>lifts</span> lives</h4>
						<a href="expertise.html" class="find-home-btn read-more-btn hvr-sweep-to-right"><?= $meta['text8']; ?><i class="fa fa-arrow-right"></i> </a>
					</div>
				</div>
				<div class="col-md-7 col-xs-12">
					<div class="para-right">
						<p><?= $meta['benefits'];  ?></p>		 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>   
<!--  builds-communitives-sec Ends -->

<section class="images-carousel-sec">
    <div class="container-fluid">
		<div class="owl-carousel">
			<?php  
				$terms = get_terms( 'market_types', array(
    		'orderby'    => 'count',
    		'hide_empty' => 0
			) );
			//$terms = get_the_terms( $post->ID , 'market_types' );
					foreach ( $terms as $term ) {
				$args2 = array(
   				'post_type' => 'property',
   				'meta_key' => 'meta-checkbox', // include underscore prefix in key name
   				'meta_value' => 'yes',
   				'market_types' => $term->slug
				);
				$prop=new WP_Query($args2);
			?>
			<?php 
					$i = 0;
					
					if($prop->have_posts()){
					while ($prop->have_posts() ) : $prop->the_post(); ?>
		
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
  				<?php $image1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<?php endif; ?>

			<div class="item <?= $i==0 ? 'active' : ''; ?>">
				<a href="#">
					<img src="<?php echo $image1[0]; ?>" alt="Image 1" style="max-width:100%;" />
				</a>
				<div class="project-content" style="">					
					<div class="progress">
						<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
						<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
						<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
						<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
						<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="project-content-inner">
						<h2><?= get_the_title(); ?></h2>
						<p style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;"><?= get_the_content(); ?></p>
						<a href="<?= get_permalink(); ?>"><?= $meta['text8']; ?><i class="arrow-right-icon"></i></a>
						<h3><?=$meta['text15'];echo $term->name; ?></h3>
					</div>
				</div>
			</div>
			<?php
			 $i++;

    endwhile; //resetting the page loop
  	}
  }
    wp_reset_query(); //resetting the page query
    ?>


		</div>
	</div>
</section> 
  

<section class="section-news container-fluid">
	<div class="row">
		<div class="important-news col-md-6 col-xs-12">  
			<h4 class="heading-4"><?= $meta['text6']; ?></h4>
			<p><?= $meta['textarea4']; ?></p>
			<a href="#" class="story-read-more-btn"><?php echo $meta['text8']; ?><i></i></a>
		</div>
		<div style="padding: 0;" class="image-right col-md-6 col-xs-12">
			<img src="<?php echo $meta['image5']; ?>" class="d-block w-100" alt="...">
		</div>
	</div>
</section>
<!-- NEWS Section ENds -->  
   
<section class="">
	<div class="container-fluid work-with">
		<div class=" text-center">
			<h5 class="heading-5"><?= $meta['text4']; ?></h5>
			<h4 class="heading-6"><?= $meta['text3'] ?></h4>
		   
			<p class="para-graph text-center"><?= $meta['textarea3'] ?></p>	 
		
			<a href="#" class="find-home-btn job-btn hvr-sweep-to-right"><?= $meta['text5']; ?><i class="fa fa-arrow-right"></i> </a>
		</div>
	</div>
</section> 
<!-- Work with US Ends --> 


<?php
get_footer();