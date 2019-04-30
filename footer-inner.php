<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	<!-- </div> --><!-- #content -->


<!-- footer Ends -->
<?php wp_footer();?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

	
	<script>
		$(document).ready(function () {
			$('.navbar-light .dmenu').hover(function () {
				$(this).find('.sm-menu').first().stop(true, true).slideDown(150);
			}, function () {
				$(this).find('.sm-menu').first().stop(true, true).slideUp(105)
			});
			
			$('.search-open').click(function() {
				if($(this).css("margin-right") == "200px"){
					$('.pollSlider').animate({"margin-right": '-=200'}).removeClass('search-slide');
				} else {
					$('.pollSlider').animate({"margin-right": '+=200'}).addClass('search-slide');
				}
			});
			
			$('.search-close').click(function() {				
				$('.pollSlider').animate({"margin-right": '-=200'}).removeClass('search-slide');
			});
			$(function() {
					$('.owl-carousel').owlCarousel({
					margin: 20,
					loop: true,
					lazyLoad : true,
					navigation : true,
					touchDrag: true,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:true,
						},
						800:{
							items:1,
							nav:true,
						},
						1000:{
							items:3, 
							nav:true,
							loop:false
						}
					},
					stagePadding: 100,
					});
				});	
			
		});
		
		
		$(window).resize(function(){
			$('.image-area').click(function(){
				alert('test');
				$(this).find(".box-content").toggleClass('openCircle');
			});
		});
		
	</script>


	<script>
		$(document).ready(function(c) {
			$('.alert-close').on('click', function(c){
				$('.team-leaders-content').fadeOut('fast', function(c){
					$('.team-leaders-content').hide();
					$('.team-leaders-content-bg').hide();
				});
			});	
		});
	</script>


	<script>
		$(document).ready(function(){
		  $("#team-1").click(function(){
			$("#pop-1").toggle();
			$(".team-leaders-content-bg").toggle();
		  });
		});
		
		$(document).ready(function(){
		  $("#team-1").click(function(){
			$("#pop-1").toggle();
			$(".team-leaders-content-bg").toggle();
		  });
		});


		$(document).ready(function(){
		  $("#team-2").click(function(){
			$("#pop-2").toggle();
			$(".team-leaders-content-bg").toggle();
		  });
		});

		$(document).ready(function(){
		  $("#team-3").click(function(){
			$("#pop-3").toggle();
			$(".team-leaders-content-bg").toggle();
		  });
		});

		$(document).ready(function(){
		  $("#team-4").click(function(){
			$("#pop-4").toggle();
			$(".team-leaders-content-bg").toggle();
		  });
		});

		$(document).ready(function(){
		  $("#team-5").click(function(){
			$("#pop-5").toggle();
			$(".team-leaders-content-bg").toggle();
		  });
		});

		$(document).ready(function(){
		  $("#team-6").click(function(){
			$("#pop-6").toggle();
			$(".team-leaders-content-bg").toggle();
		  });
		});

		$(document).ready(function(){
		  $("#team-7").click(function(){
			$("#pop-7").toggle();
			$(".team-leaders-content-bg").toggle();
		  });
		});

		$(document).ready(function(){
		  $("#team-8").click(function(){
			$("#pop-8").toggle();
			$(".team-leaders-content-bg").toggle();
		  });
		});
	</script>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#login_form').on('submit',function(e){
			var formData = jQuery(this).serialize();
			var ajaxurl = '<?php echo admin_url("admin-ajax.php"); ?>';
			e.preventDefault();
			jQuery.ajax({ 
         data: formData,
         type: 'post',
         url: ajaxurl,
         success: function(data) {
              //console.log(data);
              var response = $.parseJSON(data);
              //alert(response);
              if(response.loggedin==true)
              {
              	//alert(response.message);
              	window.location.href = "http://localhost/Hari/wordpress/";
              }
              else{
              alert(response.message);
              	window.location.reload();
           		}	
        }
    	});
		});
	});
</script>


<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#wp_signup_form').on('submit',function(e){
			e.preventDefault();
			var formData = jQuery(this).serialize();
			var ajaxurl = '<?php echo admin_url("admin-ajax.php"); ?>';
			
			jQuery.ajax({ 
         data: formData,
         type: 'post',
         url: ajaxurl,
         success: function(data) {
              //console.log(data);
              var response = $.parseJSON(data);
              
              if(response.code==0)
              {
              	//alert(response.message);
              	window.location.href = "http://localhost/Hari/wordpress/login";
              }	
              else{
              alert(response.message);
              	window.location.reload();
           		}	

              //alert(data);

        }
    	});
		});
	});
</script>


</body>
</html>
