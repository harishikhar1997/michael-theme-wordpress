<?php
/**
* Template Name:Our Expertise Template
*/
?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section> 
	<div class="expertise">
		<div class="container-fluid">
		    <div class="expertise-heading">		 
				<h4 class="expertise-head-1"><?php echo get_the_title();?></h4>
			</div>
		</div>
	</div>
</section>   
<!-- background image Ends -->

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
<!-- Progress Color Ends -->

<section class="tabs">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a id="development-tab"  class="nav-link active" data-toggle="tab" href="#development" role="tab" aria-controls="development" aria-selected="true">DEVELOPMENT</a>
		</li>
		<li class="nav-item">
			<a id="management-tab" class="nav-link"data-toggle="tab" href="#management" role="tab" aria-controls="management" aria-selected="false">MANAGEMENT</a>
		</li>
		<li class="nav-item">
			<a id="construction-tab" class="nav-link"  data-toggle="tab" href="#construction" role="tab" aria-controls="construction" aria-selected="false">CONSTRUCTION</a>
		</li>
		<li class="nav-item">
			<a  id="finance-tab" class="nav-link" data-toggle="tab" href="#finance" role="tab" aria-controls="finance" aria-selected="false">FINANCE</a>
		</li>
	</ul>
	<!-- Expertise Tabs Section Ends -->
	
	
	<div class="tab-content expertise-tab-sec" id="myTabContent">
		<div class="tab-pane fade show active" id="development" role="tabpanel" aria-labelledby="development-tab">
			<div class="tab-area row">
				<div class="development-heading-section col-md-3 col-sm-12 col-xs-12 p-0">
					<h5>Development placeholder goes here lorem sed ipsum dolor.</h5>
				</div>
				
				<div class="text-section col-md-9 col-sm-12 col-xs-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae odio aliquet rhoncus quis vel magna. Sed non elit malesuada nulla. Maecenas eget purus eu lorem dictum efficitur. Fusce vitae nunc efficitur, eleifend eros sed, porta elit tortor. Sed non mattis odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar nisl non tempor phar etra. Duis leo velit:</p>

					<ul class="list-points">
						<li>Tax Credit Housing</li>
						<li>Historic preservation</li>
						<li>RAD conversions and public housing redevelopment</li>
						<li>Conventional housing</li>
						<li>Student housing on-campus and off-campus</li>
						<li>Military housing</li>
					</ul>
				</div>
			</div>
					
			<div class="tab-img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-full-img.jpg" class="d-block ml-auto mr-auto" alt="Development Expertise Image" />
			</div>
			
			<div class="container">
				<h5 class="project-head">FEATURED PROJECTS</h5>
				<div class="row">
					<div class="three-img col-md-4 col-sm-12 col-xs-12">
						<a href="#">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-1-img.jpg" class="d-block ml-auto mr-auto" alt="..." />
						</a>
						<div class="feature-project-content" style="">					
							<div class="progress">
								<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="feature-project-content-inner">
								<h2>UC<br /> Davis</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae odio aliquet rhoncus quis vel magna. Sed non malesuada nulla. Maecenas eget purus eu lorem dictum.</p>
								<a href="#">Read more <i class="arrow-right-icon"></i></a>
								<h3><span>MARKET:</span> Affordable Living</h3>
							</div>
						</div>
					</div>
						
					<div class="three-img col-md-4 col-sm-12 col-xs-12">
						<a href="#">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-2-img.jpg" class="d-block ml-auto mr-auto" alt="..." />
						</a>

						<div class="feature-project-content" style="">					
							<div class="progress">
								<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="feature-project-content-inner">
								<h2>Ainger<br /> Place</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae odio aliquet rhoncus quis vel magna. Sed non malesuada nulla. Maecenas eget purus eu lorem dictum.</p>
								<a href="#">Read more <i class="arrow-right-icon"></i></a>
								<h3><span>MARKET:</span> Affordable Living</h3>
							</div>
						</div>
					</div>
						
					<div class="three-img col-md-4 col-sm-12 col-xs-12">
						<a href="#">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-3-img.JPG" class="d-block ml-auto mr-auto" alt="..." />
						</a>

						<div class="feature-project-content" style="">					
							<div class="progress">
								<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="feature-project-content-inner">
								<h2>1200<br /> Clybourn</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae odio aliquet rhoncus quis vel magna. Sed non malesuada nulla. Maecenas eget purus eu lorem dictum.</p>
								<a href="">Read more <i class="arrow-right-icon"></i></a>
								<h3><span>MARKET:</span> Affordable Living</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Development Featured Projects Ends -->
			
			 <section class="partner">
			   <div class="container-fluid">
				  <div class="learn-more text-center">
					 <h4 class="d-inline "> Want to learn more? Contact our Development team</h4>
					 <a class="btn d-inline" class="contact-us.html">Partner with us <i class="arrow-right-icon"></i></a>
				  </div>
			   </div>
			</section>
		</div>
		<!-- Development Tab Content Ends -->
		
		
		<div class="tab-pane fade" id="management" role="tabpanel" aria-labelledby="management-tab">
			<div class="tab-area row">
				<div class="management-heading-section col-md-3 col-sm-12 col-xs-12 p-0">
					<h5>Management placeholder goes here lorem sed ipsum dolor.</h5>
				</div>

				<div class="text-section col-md-9 col-sm-12 col-xs-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<ul class="manage-list-points">
						<li>Aenean quis tellus non odio dignissim sollicitudin sit amet ut quam. Suspendisse elementum vestibulum  massa non porttitor. Nam porta tortor malesuada, tempus odio in, lacinia purus.</li>
						<li>Donec ut diam consectetur, mattis ante a, elementum sapien. Vivamus non interdum ligula, vel viverra nisl.  Ut semper tortor nec enim congue dictum. Vestibulum erat lacus, condimentum vel sapien ac, tincidunt  sagittis sem. Suspendisse sollicitudin scelerisqu.</li>  
					</ul>
				</div>
			</div> 
                  
			<div class="tab-img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-3full-img.jpg" class="d-block ml-auto mr-auto" alt="..." />			   
				
			</div>
			
			<div class="container">
				<h5 class="project-head">FEATURED PROJECTS</h5>
				<div class="row">
					<div class="three-img col-md-4 col-sm-12 col-xs-12">
						<a href="#">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-manage-1.jpg" class="d-block ml-auto mr-auto" alt="..." />
						</a>
						<div class="feature-project-content" style="">					
							<div class="progress">
								<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="feature-project-content-inner">
								<h2>UC Davis</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae odio.</p>
								<a href="">Read more <i class="arrow-right-icon"></i></a>
								<h3>MARKET: Affordable Living</h3>
							</div>
						</div>
					</div>
						
					<div class="three-img col-md-4 col-sm-6 col-xs-12">
						<a href="#">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-manage-2.JPG" class="d-block ml-auto mr-auto" alt="..." />
						</a>
					   
						<div class="feature-project-content" style="">					
							<div class="progress">
								<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="feature-project-content-inner">
								<h2>Ainger Place</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae .</p>
								<a href="">Read more <i class="arrow-right-icon"></i></a>
								<h3>MARKET: Affordable Living</h3>
							</div>
						</div>
					</div>
						
					<div class="three-img col-md-4 col-sm-12 col-xs-12">
						<a href="#">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-manage-3.jpg" class="d-block ml-auto mr-auto" alt="..." />
						</a>
						  
						<div class="feature-project-content" style="">					
							<div class="progress">
								<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="feature-project-content-inner">
								<h2>1200 Clybourn</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae odio.</p>
								<a href="">Read more <i class="arrow-right-icon"></i></a>
								<h3>MARKET: Affordable Living</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Management Featured Project Ends -->
			<section class="partner manage-block">
			   <div class="container-fluid">
				  <div class="learn-more text-center">
					 <h4 class="d-inline "> Want to learn more? Contact our Development team</h4>
					 <a class="btn d-inline">Partner with us  <i class="arrow-right-icon"></i></a>
				  </div>
			   </div>
			</section>
		</div>
		<!-- Management Tabs Ends -->
		
		
		<div class="tab-pane fade" id="construction" role="tabpanel" aria-labelledby="construction-tab">
			<div class="tab-area row">
				<div class="construction-heading-section col-md-3 col-sm-12 col-xs-12 p-0">
					<h5>Construction placeholder goes here lorem sed ipsum dolor.</h5>
				</div>

				<div class="text-section col-md-9 col-sm-12 col-xs-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae odio aliquet rhoncus quis vel magna. Sed non elit malesuada nulla. Maecenas eget purus eu lorem dictum efficitur. Fusce vitae nunc efficitur, eleifend eros sed, porta elit tortor. Sed non mattis odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar nisl non tempor phar etra. Duis leo velit, bibendum vitae eleifend id, hendrerit sed nulla. </p>
					<p>Aenean quis tellus non odio dignissim sollicitudin sit amet ut quam. Suspendisse elementum vestibulum massa non porttitor. Nam porta tortor malesuada, tempus odio in, lacinia purus. Donec ut diam consectetur, mattis ante a, elementum sapien. Vivamus non interdum ligula, vel viverra nisl. Ut semper tortor nec enim congue dictum. Vestibulum erat lacus, condimentum vel sapien ac, tincidunt sagittis sem. Suspendisse sollicitudin scelerisque est. Morbi sit amet venenatis odio </p>
				</div>
			</div>
			<div class="tab-img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-construct.jpg" class="d-block ml-auto mr-auto" alt="..." />
			</div>
			
			<div class="container">
				<h5 class="project-head">FEATURED PROJECTS</h5>
				<div class="row">
					<div class="three-img col-md-4 col-sm-12 col-xs-12">
						<a href="#">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-construct-1.jpg" class="d-block ml-auto mr-auto" alt="..." />
						</a>
						<div class="feature-project-content" style="">					
							<div class="progress">
								<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="feature-project-content-inner">
								<h2>UC Davis</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae odio.</p>
								<a href="">Read more <i class="arrow-right-icon"></i></a>
								<h3>MARKET: Affordable Living</h3>
							</div>
						</div>
					</div>

					<div class="three-img col-md-4 col-sm-12 col-xs-12">
						<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-1-4.jpg" class="d-block ml-auto mr-auto" alt="..." />
						</a>
						   
						<div class="feature-project-content" style="">					
							<div class="progress">
								<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="feature-project-content-inner">
								<h2>Ainger Place</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae .</p>
								<a href="">Read more <i class="arrow-right-icon"></i></a>
								<h3>MARKET: Affordable Living</h3>
							</div>
						</div>
					</div>
						
					<div class="three-img col-md-4 col-sm-12 col-xs-12">
						<a href="#">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-construct-3.jpg" class="d-block ml-auto mr-auto" alt="..." />
						</a>

						<div class="feature-project-content" style="">					
							<div class="progress">
								<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="feature-project-content-inner">
								<h2>1200 Clybourn</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae odio.</p>
								<a href="">Read more <i class="arrow-right-icon"></i></a>
								<h3>MARKET: Affordable Living</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Construction Featured Projects Ends -->
			
			<section class="partner construct-block">
			   <div class="container-fluid">
				  <div class="learn-more text-center">
					 <h4 class="d-inline "> Want to learn more? Contact our Development team</h4>
					 <a class="btn d-inline">Partner with us  <i class="arrow-right-icon"></i></a>
				  </div>
			   </div>
			</section>
		</div>
		<!-- Construction Tabs Ends -->
		
		<div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab"> 
			<div class="tab-area row">
				<div class="finance-heading-section col-md-3 col-sm-12 col-xs-12 p-0">
					<h5>Finance lorem placeholder goes here lorem sed ipsum dolor.</h5>
				</div>

				<div class="text-section col-md-9 col-sm-12 col-xs-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id eros vitae odio aliquet rhoncus quis vel magna. Sed non elit malesuada nulla. Maecenas eget purus eu lorem dictum efficitur. Fusce vitae nunc efficitur, eleifend eros sed, porta elit tortor. Sed non mattis odio. Lorem ipsum dolor sit amet.</p>

					<div class="invest">
						<h4 class="acquisit">Acquisitions</h4>
						<p class="acquisit-para">Etiam ut enim ut augue porta convallis. Nunc diam massa, feugiat consequat tempus sed, lobortis nec quam. Fusce dignissim metus molestie lacinia suscipit. Cras condimentum urna a tellus pharetra viverra.</p>

						<h4 class="acquisit">Investment Management</h4>
						<p class="acquisit-para">Suspendisse ut pellentesque dolor. Integer pretium vitae nunc in pharetra. Vestibulum rhoncus enim sem, nec tincidunt magna consequat id. Quisque iaculis ex eget dui ultrices tincidunt. Quisque tempus aliquet facilisis. Sed feugiat lacinia sollicitudin. Etiam aliquet erat eget ante sagittis, at eleifend turpis molestie. Donec vitae leo vitae tellus commodo fringilla in et turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
				</div>
			</div>

			<div class="tab-img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-finance-full.jpg" class="d-block ml-auto mr-auto" alt="..." />
			</div>
			<div class="container">
					<h5 class="project-head">FEATURED PROJECTS</h5>
				<div class="row finance-imgs">
					<div class="three-img col-md-4 col-sm-12 col-xs-12">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-finance-img-1.jpg" class="d-block ml-auto mr-auto" alt="..." />
					</div>

					<div class="three-img col-md-4 col-sm-12 col-xs-12">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-finance-img-2.JPG" class="d-block ml-auto mr-auto" alt="..." />
					</div>

					<div class="three-img col-md-4 col-sm-12 col-xs-12">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-finance-img-3.jpg" class="d-block ml-auto mr-auto" alt="..." />
					</div>
				</div>
			</div>
			<!-- Finance Featured Project Section Ends -->
			<section class="partner finance-block">
			   <div class="container-fluid">
				  <div class="learn-more text-center">
					 <h4 class="d-inline "> Want to learn more? Contact our Development team</h4>
					 <a class="btn d-inline">Partner with us  <i class="arrow-right-icon"></i></a>
				  </div>
			   </div>
			</section>
		</div>
		<!-- Finance Tabs Ends -->
	</div>	
</section>
<!-- Exterpise  -->


<section class="market-serve">
   <div class="container">
		<div class="market text-center">
			<h4>Markets we serve</h4>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit,ut labore et dolore magna aliqua..</p>
		</div>
		
		<div class="small-screen-sec">
			<div class="owl-carousel">
				<div class="item">
					<div class="market-part text-center">
						 <div>
						   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-1-4.jpg" class="d-block " alt="..." />
						 </div>
						 <div class="market-title">
							<h4>Affordable <br />Living</h4>
							<p>Lorem ipsum dolor sit amet, donec consectetur adipiscing elit. Curabitur eros vitae odio aliquet rhoncus quis vela.</p>
							<a href="market-serve.html">Read more <i class="arrow-right-icon"></i></a>
						</div>
					 </div>
				</div>
				<div class="item">
					<div class="market-part text-center">  
						 <div>
							 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-2-4.jpg" class="d-block " alt="..." />
						 </div>
						 <div class="market-title">
							<h4>Student <br />Living</h4>
							<p>Lorem ipsum dolor sit amet, donec consectetur adipiscing elit. Curabitur eros vitae odio aliquet rhoncus quis vela.</p>
							<a href="market-serve.html">Read more <i class="arrow-right-icon"></i></a>
						</div>  
					</div>
				</div>
				<div class="item">
					<div class="market-part text-center">
						<a href="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-3-4.jpg" class="d-block " alt="..." />
						</a>
						<div class="market-title">
							<h4>Military <br />Living</h4>
							<p>Lorem ipsum dolor sit amet, donec consectetur adipiscing elit. Curabitur eros vitae odio aliquet rhoncus quis vela.</p>
							<a href="market-serve.html">Read more <i class="arrow-right-icon"></i></a>
						</div>
					 </div>
				</div>
				<div class="item">
					<div class="market-part text-center">   
						<a href="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-4-4.jpg" class="d-block " alt="..." />      
						</a>	 
						<div class="market-title">
							<h4>Luxury <br />Living</h4>
							<p>Lorem ipsum dolor sit amet, donec consectetur adipiscing elit. Curabitur eros vitae odio aliquet rhoncus quis vela.</p>
							<a href="market-serve.html">Read more <i class="arrow-right-icon"></i></a>
						</div>
					 </div>
				</div>	  
			</div>
		</div>
	
		<div class="row desktop-screen-sec">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="market-part text-center">
					 <div>
					   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-1-4.jpg" class="d-block " alt="..." />
					 </div>
					 <div class="market-title">
						<h4>Affordable <br />Living</h4>
						<p>Lorem ipsum dolor sit amet, donec consectetur adipiscing elit. Curabitur eros vitae odio aliquet rhoncus quis vela.</p>
						<a href="market-serve.html">Read more <i class="arrow-right-icon"></i></a>
					</div>
				 </div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="market-part text-center">  
					 <div>
						 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-2-4.jpg" class="d-block " alt="..." />
					 </div>
					 <div class="market-title">
						<h4>Student <br />Living</h4>
						<p>Lorem ipsum dolor sit amet, donec consectetur adipiscing elit. Curabitur eros vitae odio aliquet rhoncus quis vela.</p>
						<a href="market-serve.html">Read more <i class="arrow-right-icon"></i></a>
					</div>  
				</div>
			</div>	 
					
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="market-part text-center">
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-3-4.jpg" class="d-block " alt="..." />
					</a>
					<div class="market-title">
						<h4>Military <br />Living</h4>
						<p>Lorem ipsum dolor sit amet, donec consectetur adipiscing elit. Curabitur eros vitae odio aliquet rhoncus quis vela.</p>
						<a href="market-serve.html">Read more <i class="arrow-right-icon"></i></a>
					</div>
				 </div>
			</div>	 
				
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
				<div class="market-part text-center">   
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expertise-4-4.jpg" class="d-block " alt="..." />      
					</a>	 
					<div class="market-title">
						<h4>Luxury <br />Living</h4>
						<p>Lorem ipsum dolor sit amet, donec consectetur adipiscing elit. Curabitur eros vitae odio aliquet rhoncus quis vela.</p>
						<a href="market-serve.html">Read more <i class="arrow-right-icon"></i></a>
					</div>
				 </div>
			</div>
		</div>		
		
	</div>
</section>
<!-- Market Serve Section Ends -->

<?php
get_footer();