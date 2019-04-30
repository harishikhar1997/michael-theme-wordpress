<?php
/**
* Template Name: Careers Template
*/
?>
<?php $meta = get_post_meta( get_the_ID(), 'your_fields', true ); 
//echo $meta['text2']; die(); 
?>

<?php get_header(); ?>




<!-- background-img -->  

<section> 
	<div class="about-us career-page">
		<div class="container-fluid">
		    <div class="about-heading">		 
				<h4 class="about-head-1"><?= get_the_title();?></h4>
			</div>
		</div>
	</div>
	

</section>   
<!-- background image Ends -->

<section>
	<div class="progress">
			<div class="progress-bar ribbon-bar-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
			<div class="progress-bar ribbon-bar-2" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
			<div class="progress-bar ribbon-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
			<div class="progress-bar ribbon-bar-4" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
			<div class="progress-bar ribbon-bar-5" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<div class="ribbon-title text-center">
		<h4 class="d-inline"><?= $meta['text'];?></h4> 
		<a href="#" class="find-home-btn hvr-sweep-to-right">View jobs <i class="fa fa-arrow-right"></i> </a>
    </div>
</section>


<section>
   <div class="container">
		<div class="row">
			<div class="our-area text-center">
				<h4>Our core values</h4>
				<p><?= $meta['textarea'];?>
				</p>
			</div>
		</div>
	</div>			
</section>


<section class="career-icons">
	<div class="container">
		<div class="row">			 
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center core-icons bg-grey ">
				<div class="box-part text-center">
					<div class="title">
						<h4>CARPE DIEM <br/>AND THEN <br/>SOME</h4>
					</div>
				</div>
				<div class="circle">
					<p class="d-flex justify-content-center align-items-center">If you see a chance to make a difference, don’t wait until the time is right. The time is now.</p>
				</div>
			</div>	 
			
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center core-icons bg-green">
				<div class="box-part text-center">  
					<div class="title">
						<h4>OUR STATUS <br/>IS NEVER <br/>QUO</h4>
					</div>    
				</div>
				<div class="circle">
					<p class="d-flex justify-content-center align-items-center">We remain open to possibilities, ever curious about the next big thing for all of us. Don’t be afraid to use your voice and to recommend we try something new.</p>
				</div>
			</div>	 
						
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center core-icons bg-blue">
				<div class="box-part text-center">  
					<div class="title">
						<h4>Let's go out <br/>a little <br/>further</h4>
					</div>    
				</div>
				<div class="circle">
					<p class="d-flex justify-content-center align-items-center">Pioneering, innovating, and “going beyond” are all part of our DNA, so if you see a chance to go out a little further, take it.</p>
				</div>
			</div>
						
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center core-icons">
				<div class="box-part text-center">  
					 <div class="title">
						<h4>I got <br/>your back</h4>
					 </div>    
				 </div>
				<div class="circle">
					<p class="d-flex justify-content-center align-items-center">We respect our individualism while knowing our success depends on this golden rule: all for one and one for all. Together we build communities.</p>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center core-icons bg-blue">
				<div class="box-part text-center">  
					 <div class="title">
						<h4>Walk <br/>the job</h4>
					 </div>    
				 </div>
				<div class="circle">
					<p class="d-flex justify-content-center align-items-center">We plan carefully, we triple-check. We talk with and learn from one another. Our partners learn to trust our point of view because we’ve actually been there and done that.</p>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center core-icons">
				<div class="box-part text-center">  
					<div class="title">
						<h4>Keep <br/>it real</h4>
					</div>    
				</div>
				<div class="circle">
					<p class="d-flex justify-content-center align-items-center">When we say we’ll do something, we do it. We speak up, and more importantly, we listen.</p>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center core-icons bg-green">
				<div class="box-part text-center">  
					<div class="title">
						<h4>Do well by <br/>doing the <br/>extraordinary</h4>
					</div>    
				</div>
				<div class="circle">
					<p class="d-flex justify-content-center align-items-center">We invest in people, living and learning; anything we can do to help lift lives to the next level, and build great equity for all involved.</p>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center core-icons bg-grey">
				<div class="box-part text-center">  
					<div class="title">
						<h4>Laugh <br/>anytime</h4>
					</div>    
				</div>
				<div class="circle">
					<p class="d-flex justify-content-center align-items-center">We take our mission seriously, but never ourselves. Seriously, we work hard, play hard, and believe in laughing out loud</p>
				</div>
			</div>
		</div>	
	</div>			
</section>


<section class="benefits-icons">
	<div class="container">
		<div class="row">
			<div class="our-area text-center">
				<h4>Our beneﬁts placeholder</h4>
				<p><?= $meta['benefits'];?>
				</p>
			</div>
		</div>
		<div class="small-screen-sec ">
			<div class="owl-carousel">			 
				<div class="item text-center core-icons">
					<div class="text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-1.png" alt="" />
						<div class="title">
							<h4>Medical <br />Coverage</h4>
						</div>
					</div>
					
				</div>	 
				
				<div class="item text-center core-icons">
					<div class="text-center">  
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-2.png" alt="" />
						<div class="title">
							<h4>Dental <br />Coverage</h4>
						</div>    
					</div>
				</div>	 
								
				<div class="item text-center core-icons">
					<div class="text-center">  
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-3.png" alt="" />
						<div class="title">
							<h4>Vision <br />Coverage</h4>
						</div>    
					</div>
				</div>
						
				<div class="item text-center core-icons">
					<div class="text-center">  
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-4.png" alt="" />
						 <div class="title">
							<h4>Paid Vacations/ <br />Holidays</h4>
						 </div>    
					 </div>
				</div>
			
				<div class="item text-center core-icons">
					<div class="text-center">  
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-5.png" alt="" />
						 <div class="title">
							<h4>Paid Sick/<br />Personal Time</h4>
						 </div>    
					 </div>
				</div>
				
				<div class="item text-center core-icons">
					<div class="text-center">  
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-6.png" alt="" />
						<div class="title">
							<h4>Life <br />Insurance</h4>
						</div>    
					</div>
				</div>
			
				<div class="item text-center core-icons">
					<div class="text-center">  
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-7.png" alt="" />
						<div class="title">
							<h4>Disability <br />Insurance</h4>
						</div>    
					</div>
				</div>
				
				<div class="item text-center core-icons">
					<div class="text-center">  
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-8.png" alt="" />
						<div class="title">
							<h4>Flexible Spending <br />Accounts</h4>
						</div>    
					</div>
				</div>
				
				<div class="item text-center core-icons">
					<div class="text-center">  
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-9.png" alt="" />
						<div class="title">
							<h4>401(k) <br />Retirement Plan</h4>
						</div>    
					</div>
				</div>
				
				<div class="item text-center core-icons">
					<div class="text-center">  
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-10.png" alt="" />
						<div class="title">
							<h4>Employee Assistance <br />and AFLAC</h4>
						</div>    
					</div>
				</div>
			</div>
		</div>	
		
		<div class="row justify-content-center desktop-screen-sec">			 
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 text-center core-icons">
				<div class="text-center">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-1.png" alt="" />
					<div class="title">
						<h4>Medical <br />Coverage</h4>
					</div>
				</div>
				
			</div>	 
			
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 text-center core-icons">
				<div class="text-center">  
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-2.png" alt="" />
					<div class="title">
						<h4>Dental <br />Coverage</h4>
					</div>    
				</div>
			</div>	 
			
			
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 text-center core-icons">
				<div class="text-center">  
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-3.png" alt="" />
					<div class="title">
						<h4>Vision <br />Coverage</h4>
					</div>    
				</div>
			</div>
			
			
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 text-center core-icons">
				<div class="text-center">  
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-4.png" alt="" />
					 <div class="title">
						<h4>Paid Vacations/ <br />Holidays</h4>
					 </div>    
				 </div>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 text-center core-icons">
				<div class="text-center">  
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-5.png" alt="" />
					 <div class="title">
						<h4>Paid Sick/<br />Personal Time</h4>
					 </div>    
				 </div>
			</div>
		</div>
		
		<div class="row justify-content-center icon-secod-row desktop-screen-sec">
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 text-center core-icons">
				<div class="text-center">  
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-6.png" alt="" />
					<div class="title">
						<h4>Life <br />Insurance</h4>
					</div>    
				</div>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 text-center core-icons">
				<div class="text-center">  
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-7.png" alt="" />
					<div class="title">
						<h4>Disability <br />Insurance</h4>
					</div>    
				</div>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 text-center core-icons">
				<div class="text-center">  
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-8.png" alt="" />
					<div class="title">
						<h4>Flexible Spending <br />Accounts</h4>
					</div>    
				</div>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 text-center core-icons">
				<div class="text-center">  
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-9.png" alt="" />
					<div class="title">
						<h4>401(k) <br />Retirement Plan</h4>
					</div>    
				</div>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 text-center core-icons">
				<div class="text-center">  
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career-benefits-icon-10.png" alt="" />
					<div class="title">
						<h4>Employee Assistance <br />and AFLAC</h4>
					</div>    
				</div>
			</div>
		</div>	
	</div>			
</section>


<section class="career-client-sec">
	<div class="container">
        <div class="statistics text-center">
			<p>“The Michaels Organization lorem ipsum testimonial quote can go here in this space lorem ipsum dolor sit amet eu donec. </p>
			<span></span>
			<h5 class="client-info">CLIENT NAME, BUSINESS</h5>
		</div>	
    </div>
   </div>			
</section>


<section class="signup-sec">
   <div class="container-fluid">
	   <div class="newsletter text-center">
		  <h4 class="d-inline "> Ribbon title about signing up for the Michaels newsletter</h4>
		   <a class="btn d-inline news-sign"  data-toggle="modal" data-target="#exampleModal">Sign up  <i class="arrow-right-icon"></i></a>
		  </div> 
		   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog letter" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Newsletter</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<div class="contact-row row"> 
					  <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="">
							<label class="input-name"> Name</label>
							<input type="text" name="name" class="input-text  ml-auto"/>
						</div> 
				
						<div>
							<label  class="input-name">Email Address</label>
							<input type="email" name="email" class="input-text  ml-auto"/>
						</div>	

						<div>				
							<label class="input-name"> Phone</label>
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
	</div>
</section>

<?php
get_footer();