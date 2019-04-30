<?php
/**
* Template Name: About Us Page
*/
?>
<?php get_header(); 
$meta = get_post_meta( get_the_ID(), 'your_fields', true ); 
 //echo $meta['textarea17']; die(); 

?>



<!-- background-img --> 
<?php while ( have_posts() ) : the_post(); ?>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
 
<section> 
	<div class="about-us" style="background-image: url(<?php echo $image[0]; ?>)">
		<div class="container-fluid">
		    <div class="about-heading">		 
				<h4 class="about-head-1"><?php the_content();?></h4>
			</div>
		</div>
	</div>
</section>   
<!-- background image Ends -->
<?php endif; ?>
			 <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>

<section>
	<div class="progress">
		<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
		<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
		<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
		<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
		<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
	</div> 
</section>
<!-- Progress Bar image Ends -->

<section class="mission-vision-sec ">
   <div class="container">
	  <div class="row">
	    <div class="mission col-xs-12 col-sm-12  col-md-4">
		    <h4 class="our-mission"><?php echo $meta['text24']; ?></h4>
			<p><?php echo $meta['textarea12'];?></p>
			
			<h4 class="our-mission"><?php echo $meta['text25']; ?></h4>
			<p><?php echo $meta['textarea13']; ?></p>
        </div>
		
		<div class="mission-img col-xs-12  col-sm-12 col-md-8 ">
		   <img src="<?php echo $meta['image11']; ?>" class="d-block ml-auto mr-auto" alt="..." />
        </div>
	</div>
  </div>			
</section>


<section class="statistics-icon-sec">
	<div class="container">    
        <div class="statistics text-center">
		    <h4><?= $meta['text16'];?></h4>
			<p><?= $meta['textarea0'];?></p>
		</div>
		<div class="box">
			<div class="icon-container">
				<div class="row">			 


						<?php
								$args = array(
    						'post_type' => 'statistics',
    						'post_status' => 'publish',
    						'posts_per_page' => -1
							);
							$statistics = new WP_Query( $args );
 
						?>

						<?php 
								if ( $statistics->have_posts() ) {
    						while ( $statistics->have_posts() ) :
    						$statistics->the_post(); 
     					?>
	
					<?php if (has_post_thumbnail( $statistics->ID ) ): ?>
  						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $statistics->ID ), 'single-post-thumbnail' ); ?>
					<?php endif; ?>


					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="box-part text-center">

							 <img src="<?php echo $image[0]; ?>"/>
							 <div class="title">
								<h4><?=get_the_content();?></h4>
								<h5><?=get_the_title();?></h5>
							</div>
						 </div>
					</div>	 

			<?php
  	endwhile;
	} //resetting the page loop
    wp_reset_query(); //resetting the page query
  ?>

				</div>		
			</div>
		</div>
	</div>			
</section>
<!-- Statisstics Section Ends -->


<section class="chief-team-sec">
	<div class="container">
        <div class="statistics text-center">
		    <h4><?= $meta['text17'];?></h4>
			<p><?= $meta['textarea10'];?></p>
		</div>

		<?php //for($i=1;$i<9;$i++){?>
				
		<div class="team-leaders">
			<div class="row">
				
				<?php
						$args = array(
    				'post_type' => 'team',
    				'post_status' => 'publish',
    				'posts_per_page' => -1
					);
					$team = new WP_Query( $args );
				?>

				<?php 
				$i = 1;
				if ( $team->have_posts() ) {
    		while ( $team->have_posts() ) :
    		$team->the_post(); 
     		
     	//	print_r($team);

    		$meta1= get_post_meta( $post->ID, 'your_fields', true );
     		?>
	
	<?php if (has_post_thumbnail( $team->ID ) ): ?>
  			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $team->ID ), 'single-post-thumbnail' ); ?>
	<?php endif; ?>

				<div class="col-12 col-sm-6 col-md-4 col-lg-3 image-grid-item">
					<div style="background-image: url(<?php echo $image[0]; ?>);" class="image-grid-cover" id="team-<?=$i?>" >
						<div class="team-name">
							<h4 class="cover-wrapper"><?= get_the_title()?></h4>
							<h5 class="cover-wrapper"><?= get_the_content()?></h5>
						</div>
					</div>
				</div>
			

			
				<!-- Modal Area Starts -->		
						
				<!-- Modal 2 -->
				<div class="team-leaders-content text-center" id="pop-<?=$i?>">
					<div class="team-info">
						<div class="team-mem-content">
							<div class="team-body">
								<div class="progress">
									<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<button type="button" class="close btn-closed alert-close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<div class="modal-team-detail">
									<h2 class="modal-name"><?=get_the_title();?></h2>
									<h3 class="modal-position" ><?=get_the_content();?></h3>
									<p class="modal-detail"><?=$meta1['textarea11'];?></p>									
									<i class="fab fa-linkedin-in"></i>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<!-- end Modal 2 -->
				
				<?php
			 	$i++;
   			endwhile;
				} //resetting the page loop
    		wp_reset_query(); //resetting the page query
    ?>		
				
				<!-- Modal Area Ends -->	
			</div>		
		</div>
		<div class="team-leaders-content-bg"></div>
	</div>			
</section>


<section class="signup-sec">
   <div class="container-fluid">
	   <div class="newsletter text-center">
		  <h4 class="d-inline "><?=$meta['text18']?></h4>
		   <a class="btn d-inline news-sign " data-toggle="modal" data-target="#exampleModal"><?=$meta['text19']?> <i class="arrow-right-icon"></i></a>
		  </div> 
		   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog letter" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?=$meta['text20']?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<div class="contact-row row"> 
					  <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="">
							<label class="input-name"><?=$meta['text21']?></label>
							<input type="text" name="name" class="input-text  ml-auto"/>
						</div> 
				
						<div>
							<label  class="input-name"><?=$meta['text22']?></label>
							<input type="email" name="email" class="input-text  ml-auto"/>
						</div>	

						<div>				
							<label class="input-name"><?=$meta['text23']?></label>
							<input type="number" name="phone" class="input-text ml-auto"/>
						</div>
					</div>
					 
				  </div>
				  <div class="modal-footer close-sub">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary popup-btn">Send</button>
				  </div>
				</div>
			  </div>
			</div>
	   
   </div>
 </div>
</section>

<?php
get_footer();