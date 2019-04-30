

<?php


/*
Plugin Name: Bus ticketing plugin
Description: Bus ticketing plugin is for booking online ticket having loyality point system with coupon code 
Version: 1.0
Author: Mobilyte team
Text Domain: busticket
*/

// global variable for plugin
global $wpdb;


/**
 * Return the plugin URL
 * @return string Plugin URL
 */


function bus_ticketing_plugin_url(){
    return plugin_dir_url( __FILE__ );
}


/**
 * add js and css for front-end
 * @return css and js added
 */
function bus_ticketing_frontend_js_css(){
	
	wp_enqueue_style( 'bus_ticketing_font_awesome_css', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
	wp_enqueue_style( 'bus_ticketing_slick_css',  bus_ticketing_plugin_url().'slick/slick.css' );
	wp_enqueue_style( 'bus_ticketing_slick_theme_css',  bus_ticketing_plugin_url().'slick/slick-theme.css' );
	wp_enqueue_style( 'bus_ticketing_datepicker_min_css',  bus_ticketing_plugin_url().'css/jquery-ui.css' );
	wp_enqueue_style( 'bus_ticketing_profile_css', bus_ticketing_plugin_url().'css/profile.css' );
	wp_enqueue_style( 'bus_ticketing_plugin_css', bus_ticketing_plugin_url().'css/busticket.css' );
	wp_enqueue_style( 'bus_ticketing_plugin_responsive_css', bus_ticketing_plugin_url().'css/busticket-responsive.css' );
	wp_enqueue_style( 'bus_ticketing_developer_css', bus_ticketing_plugin_url().'css/developer.css' );
   
	wp_enqueue_script( 'bus_ticketing_datepicker_js', bus_ticketing_plugin_url().'js/jquery-ui.min.js', array(), null, true );
	wp_enqueue_script( 'bus_ticketing_validate_js', bus_ticketing_plugin_url().'js/jquery.validate.js', array(), null, true );
	wp_enqueue_script( 'bus_ticketing_slick_js', bus_ticketing_plugin_url().'slick/slick.js', array(), null, true );
	wp_enqueue_script( 'bus_ticketing_developer_js', bus_ticketing_plugin_url().'js/developer.js', array(), null, true );
	 //wp_enqueue_script('bus_ticketing_jscolor_js','https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.js');


   
}

add_action( 'wp_enqueue_scripts', 'bus_ticketing_frontend_js_css' );

if (is_admin()){
    wp_enqueue_script( 'bus_ticketing_jscolor_js','https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.js' );
   
}



function plugin_theme_option() { https://www.buspariwisataindonesia.com/
?>
<style type="text/css">
  /*Home and Ticket-search page theme color*/
  #top-menu a {color:<?php echo (get_option('header_menu_color')) ?>!important; }
  .selected-seat-value { color:<?php echo (get_option('button_background_color')) ?>!important; }
  .select-busseat td.busseat-front { color:<?php echo (get_option('button_background_color')) ?>!important; }
  .busticket-table-header a {color:<?php echo (get_option('button_background_color')) ?>!important; }
  .blue-text { color:<?php echo (get_option('button_background_color')) ?>!important; }
  .btn_background { background-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .busticket-btn { background-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .busticket-select-btn { background-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .select-seat-title { color:<?php echo (get_option('button_background_color')) ?>!important; }
  .busdate-carousel .busticket-date-option.active a{ background-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .busticket-radio-label input:checked ~ .checkmark  { background-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .filter-dropdown.active:before {border-bottom:3px solid <?php echo (get_option('button_background_color')) ?>!important; }
  .entry-content ul.amenities_icon li.amenities-selected { background-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .entry-content ul.amenities_icon li {color:<?php echo (get_option('button_background_color')) ?>!important; }
  .busticket-main-container .loc-value {color:<?php echo (get_option('button_background_color')) ?>!important; }
  #et-secondary-nav li ul, #top-header {background-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .et_mobile_menu { border-top:3px solid <?php echo (get_option('button_background_color')) ?>!important; }
  .nav li ul { border-top:3px solid <?php echo (get_option('button_background_color')) ?>!important; }
  .busticket-roundway-opt li a.active{ background-color:<?php echo (get_option('button_background_color')) ?>!important;
                                        border:<?php echo (get_option('button_background_color')) ?>!important;   }
  .busticket-form-group-middle span{background-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .et-search-form, .et_mobile_menu, .footer-widget li:before, .nav li ul, blockquote{ border-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .title {color:<?php echo (get_option('button_background_color')) ?>!important; }

  /*booking_page_theme_color*/
  .payment_options_title { color:<?php echo (get_option('button_background_color')) ?>!important; }
  .payment_tab .tab button.active { border-left:<?php echo (get_option('button_background_color')) ?>!important; }
  .blue-text2 { color:<?php echo (get_option('button_background_color')) ?>!important; }

   /*login_page_theme_color*/
  .busticket-button { background-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .busticker-forgot-password {color:<?php echo (get_option('button_background_color')) ?>!important; }
  .busticket-login {color:<?php echo (get_option('button_background_color')) ?>!important; }
  .busticket-get_started {background-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .busticket-heading-2 {color:<?php echo (get_option('button_background_color')) ?>!important; }


   /*Booking_history_page_theme_color*/
  .busticket-profile .tab-profile-options a.active{color:<?php echo (get_option('button_background_color')) ?>!important;
                                 border-color:<?php echo (get_option('button_background_color')) ?>!important; }
  .busticket-profile .tab-profile-options a.active i {color:<?php echo (get_option('button_background_color')) ?>!important;}  
  .busticket-profile .tab-profile-options a:hover {border-color:<?php echo (get_option('button_background_color')) ?>!important; }
                              
 </style>
 <?php
} 
add_action( 'wp_head', 'plugin_theme_option' );



/*
* form for user to login into system
* if user entered is correct then it login into system
*/



function bus_ticketing_login_form(){

        
 
    $origin_name =$_REQUEST['origin_name'];	
	$seatselect =$_REQUEST['seatselect'];
	$totlseats =$_REQUEST['totlseats'];
	$boarding_name =$_REQUEST['boarding_name'];
	$dropping_name =$_REQUEST['dropping_name'];
	$destination_name =$_REQUEST['destination_name'];
	
     //echo$origin_name;die;
	
	$url = $_GET['data'];


	$data .='
		<section>
			<div class="busticket-login-container">
				<h1 class="busticket-get_started">Let’s get Started..</h1>
				<div class="busticket-form">
					<h2 class="busticket-heading-2">Log in to Buscharter Malaysia!</h2>
					<div class="loader_tickecting" ></div>
					<div class="error_ticketing_message" ></div>
					<div class="success_ticketing_message" ></div>
					<form name = "bus_login_form" id = "bus_login_form" data-url="'.esc_url(admin_url( 'admin-ajax.php' )).'" action = "" method = "post" >';

					if(isset($_GET)){

						$data.='<input type="hidden" name="data" value="'.$url.'">';
					}
						
						$data .='<div class="busticket-form-row">
							<label class="busticket-form-label">Username<span class="busticket-important">*</span></label>
							<div class="busticket-input-sec">
								<input  class="busticket-input" placeholder="me@example.com" name = "email"  id = "email" type="text" />
								<i class="far fa-envelope icon-circle"></i>
							</div>
						</div>						
						
						<div class="busticket-form-row">
							<label class="busticket-form-label">Password (6 or more characters)<span class="busticket-important">*</span></label>
							<div class="busticket-input-sec">
								<input type="password" class="busticket-input" placeholder="" name = "password" id = "password" />
								<i class="fas fa-lock icon-circle"></i>
							</div>
						</div>
						
						<div class="busticket-text">
							<button class="busticket-button" id="bus_login_form_submit" type="submit" >LOG IN NOW!</button>
							<a href="'.get_permalink( get_option('forgot_page_link') ).'" class="busticker-forgot-password">Forgot Password?</a>
						</div>
					    
						
						<div class="busticket-registered">
							<h2 class="busticket-heading">Not a member?<a href="'.get_permalink( get_option('signup_page_link') ).'" class="busticket-login">Sign Up</a> </h2>
					    </div>
					</form>
				</div>
			</div>
		</section>		
	';
	return $data;
}
add_shortcode('ticket_user_login','bus_ticketing_login_form');

/*
* ajax form submit in admin
* login user in system
*/

add_action('wp_ajax_ticketing_login_form', 'ticketing_login_form');
add_action('wp_ajax_nopriv_ticketing_login_form', 'ticketing_login_form');

function ticketing_login_form()
{
	global $wpdb;
	$creds = $response = array();
	if($_POST['email']!="" && $_POST['password']!=""){
		$creds['user_login'] = $_POST['email'];
		$creds['user_password'] = $_POST['password'];
		$creds['remember'] = true;
		$loginRedirect = get_permalink( get_option('login_redirect') );
		 $url = $_POST['data']; 
           //echo $loginRedirect;
	    // check user login creadentials

	    $usersArr = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."users WHERE (user_email='".$_POST['email']."' or user_login='".$_POST['email']."' ) and ( user_activation_key = '' or user_activation_key = '0' ) limit 0,1  ");

	    if($usersArr){

			$user = wp_signon( $creds, true );

			// On success.
			if (!is_wp_error($user) ) {
				wp_set_current_user($user->ID);
				wp_set_auth_cookie( $user->ID );
				if(isset($_POST['data']) && !empty($_POST['data'])){

					$response = array("status"=>1,"message"=>"User login Succesfully.","redirect_url"=>$url);

				}else{
				$response = array("status"=>1,"message"=>"User login succesfully.","redirect_url"=>$loginRedirect);
			    }

			}else{
				$error_string = $user->get_error_message();
				$response = array("status"=>0,"message"=>"Wrong username or password.","redirect_url"=>$loginRedirect);
			}
		}else{
			$response = array("status"=>0,"message"=>"Wrong username or password.","redirect_url"=>$loginRedirect);
		}
	}else{
		$response = array("status"=>0,"message"=>"Please enter username and password both.","redirect_url"=>$loginRedirect);
	}
	echo json_encode($response); die();
}



/*
* form for user to register into system
* register user in system
*/
function bus_ticketing_signup_form(){
	ob_start();

    include (dirname(__FILE__)."/templates/signup-page.php");

    $response = ob_get_clean();	

	return $response;
}
add_shortcode('ticket_user_signup','bus_ticketing_signup_form');

/*
* ajax form submit in admin
* register user in system
*/

add_action('wp_ajax_ticketing_signup_form', 'ticketing_signup_form');
add_action('wp_ajax_nopriv_ticketing_signup_form', 'ticketing_signup_form');

function ticketing_signup_form()
{
	$response    = array();
	$username    = trim($_POST['username']);
	$email       = trim($_POST['email']);
	$password    = trim($_POST['password']);
	$phone       = trim($_POST['phone']);
	$phone_code  = trim($_POST['phone_code']);
	$signupRedirect = get_permalink( get_option('signup_redirect') ); 
    
	if($username!="" && $email!="" && $password!="" && $phone!="" && $phone_code!="" ){
		$userdata = array(
		    'user_login' =>  $username,
		    'user_email' =>  $email,
		    'user_url'   =>  $website,
		    'user_pass'  =>  $password 
		);
		 
		$user_id = wp_insert_user( $userdata ) ;
		 
		// On success.
		if ( ! is_wp_error( $user_id ) ) {
			update_usermeta( $user_id, 'phone_code', $phone_code );
			update_usermeta( $user_id, 'phone', $phone );

            $code = rand();    
	        global $wpdb;    	        
	        $wpdb->query( 
		        $wpdb->prepare( "
		            UPDATE $wpdb->users 
		            SET user_activation_key = %d 
		            WHERE ID = %d",
		            $code, 
		            $user_id
		        ) 
		    );	         

	        $activation_link = get_permalink(get_option('activation_page_link')).'?key='.$code.'&user='.base64_encode($user_id);
	        // wp_mail( $user_email, 'SUBJECT', 'Activation link : <a href="' . $activation_link.'">Click here to verify email.</a>' );
	        $subject = 'User Verification Link';
			$to=$email;
            $message.='<strong>Hi '.$username.',</strong>';
			$message.= '<h3>Please find the Email Verification Link below:</h3><a href="'. $activation_link.'">Click here to verify email</a><h3>Thanks</h3>';
            $headers[] = 'MIME-Version: 1.0' . "\r\n";
			$headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers[] = "X-Mailer: PHP \r\n";

             $mail=wp_mail($to, $subject, $message, $headers);
             if($mail){
			$response = array("status"=>1,"message"=>"Please check your email inbox to verify your E-mail.","redirect_url"=>$signupRedirect);
		}
		}else{
			$error_string = $user_id->get_error_message();
			$response = array("status"=>0,"message"=>$error_string,"redirect_url"=>$signupRedirect);
		}
	}else{
		$response = array("status"=>0,"message"=>"Enter all required fields.","redirect_url"=>$signupRedirect);
	}
	echo json_encode($response); die();
}

/*
* function to have form for forgot password
*/
function forgot_password_form(){
	return '
		<section>
			<div class="busticket-login-container">
				<h1 class="busticket-get_started">Forgot your Password</h1>
				<div class="busticket-form">
					<form name = "bus_forgot_password_form" id = "bus_forgot_password_form" data-url="'.esc_url(admin_url( 'admin-ajax.php' )).'" action = "" method = "post">

						<div class="loader_tickecting" ></div>
						<div class="error_ticketing_message" ></div>
						<div class="success_ticketing_message" ></div>
						
						<div class="busticket-form-row">
							<label class="busticket-form-label">Email<span class="busticket-important">*</span></label>
							<div class="busticket-input-sec">
								<input class="busticket-input" placeholder="me@example.com" type="text" name="email" id="email" >
								<i class="far fa-envelope icon-circle"></i>
							</div>
						</div>			
						
						<div class="busticket-text">
							<p class="busticket-content">You will receive an e-mail containing the reset password link.</p>
							<button id="forgot_password_button" class="busticket-button" type="button" >Send Now!</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	';
}
add_shortcode('ticket_user_forgot_password','forgot_password_form');

/*
* check reset_password 
*/
add_action('wp_ajax_ticketing_forgot_password_form', 'ticketing_forgot_password_form');
add_action('wp_ajax_nopriv_ticketing_forgot_password_form', 'ticketing_forgot_password_form');
function ticketing_forgot_password_form(){
	$response = array();
	$email = $_POST['email'];
	$resetlink = get_permalink( get_option('reset_page_link'));

	if(!empty($email)){
		$exists = email_exists( $email );
		if ( $exists ) {
			$user   = get_user_by( 'email', $email);
		    $userID =  $user->ID;
		    $expirationText = wp_generate_password( 6, false );
			add_user_meta( $userID, 'reset_password_expiration',$expirationText);

			$to = $email;
			$subject = 'Reset Password Link';
			$sender = get_option('name');

			$message = '<h3>Note: Please find the link below for Reset Password. </h3><a href="'.$resetlink."?enc_key=".$expirationText.'">Click here to reset password</a><h3>Thanks</h3>';

			$headers[] = 'MIME-Version: 1.0' . "\r\n";
			$headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers[] = "X-Mailer: PHP \r\n";
			$headers[] = 'From: '.$sender.' < '.$email.'>' . "\r\n";
            $mail=wp_mail($to, $subject, $message, $headers);


			if( $mail ){
				$response = array("status"=>1,"message"=>"Check your email address for your reset password link.");
			}else{
				$response = array("status"=>0,"message"=>"Oops something went wrong while sending reset password link.");
			}
		}else{
		    $response = array("status"=>0,"message"=>"Email address does n't belong to any user.");
		}
	}else{
		$response = array("status"=>0,"message"=>"Please enter email address.");
	}
	echo json_encode($response); die();
}

/*
* function to have form for reset password
*/
function reset_password_form(){
	$data .= '
		<section>
			<div class="busticket-login-container">';
				$show=0; 
			    if(isset($_GET['enc_key']) && !empty($_GET['enc_key'])){
			    	$key = trim($_GET['enc_key']);

			    	$users = get_users(
			    		array(
						    'meta_key'     => 'reset_password_expiration',
						    'meta_value'   => $key,
						    'meta_compare' => '==',
						)
			    	);
			    	if(!empty($users)){
			    		$show=1;
			    	}
			    }

			    if($show==1){

					$data .= '

					<h1 class="busticket-get_started">Reset your Password</h1>
					<div class="busticket-form">
		
						<form name = "bus_reset_password_form" id = "bus_reset_password_form" data-url="'.esc_url(admin_url( 'admin-ajax.php' )).'" action = "" method = "post" >
							
							<div class="loader_tickecting" ></div>
							<div class="error_ticketing_message" ></div>
							<div class="success_ticketing_message" ></div>

							<input type="hidden" name="enc_key_val" value="'.$key.'" >

							<div class="busticket-form-row">
								<label class="busticket-form-label">Enter New Password (6 or more characters)<span class="busticket-important">*</span></label>
								<div class="busticket-input-sec">
									<input class="busticket-input" placeholder="" type="password" name="password" id="password" >
									<i class="fas fa-lock icon-circle"></i>
								</div>
							</div>	

							<div class="busticket-form-row">
								<label class="busticket-form-label">Confirm New Password (6 or more characters)<span class="busticket-important">*</span></label>
								<div class="busticket-input-sec">
									<input class="busticket-input" placeholder="" type="password" name="confirm_password" id="confirm_password" >
									<i class="fas fa-lock icon-circle"></i>
								</div>
							</div>					
							
							<div class="busticket-text">
								<button id="reset_password_button" class="busticket-button" type="button" >Update Password!</button>
							</div>
						</form>
					</div>';
				}else{
					$data .= ' <h1 class="busticket-get_started">Invalid reset password link</h1>';					
				}
			$data .= '</div>
		</section>
	';
	return $data;
}
add_shortcode('ticket_user_reset_password','reset_password_form');

/*
* check reset_password 
*/
add_action('wp_ajax_ticketing_reset_password_form', 'ticketing_reset_password_form');
add_action('wp_ajax_nopriv_ticketing_reset_password_form', 'ticketing_reset_password_form');
function ticketing_reset_password_form(){
	$response = array();
	$key = trim($_POST['enc_key_val']);
	$password = trim($_POST['password']);
	$resetRedirect = get_permalink( get_option('reset_password_redirect') );

	if(!empty($password) && !empty($key)){
		$users = get_users(
			array(
			    'meta_key'     => 'reset_password_expiration',
			    'meta_value'   => $key,
			    'meta_compare' => '==',
			)
		);
		if(!empty($users)){
			foreach($users as $user){
				$update_user = wp_update_user( array (
						'ID' => $user->ID,
						'user_pass' => $password
					)
				);

				// if  update user return true then lets send user an email containing the new password
				if( $update_user ) {
					delete_user_meta( $user->ID, 'reset_password_expiration',  $key );
					$response = array("status"=>1,"message"=>"Password updated successfully.","redirect_url"=>$resetRedirect);
				}else{
					$response = array("status"=>0,"message"=>"Unable to update password.","redirect_url"=>$resetRedirect);
				}
			}
		}else{
			$response = array("status"=>0,"message"=>"Invalid expiry link.","redirect_url"=>$resetRedirect);
		}
	}else{
		$response = array("status"=>0,"message"=>"Please enter password and add encrypt key.","redirect_url"=>$resetRedirect);
	}
	echo json_encode($response); die();
}


/*Ajax Form Data for desktop view*/
add_action('wp_ajax_get_shuffled_time_PM_data', 'get_shuffled_time_PM_data');
add_action('wp_ajax_nopriv_get_shuffled_time_PM_data', 'get_shuffled_time_PM_data');

function get_shuffled_time_PM_data()
{
	global $wpdb;

	$from_date_click = "";
     
    //echo"<pre>";print_r($_REQUEST);echo"</pre>";
    $departure_date =date_format(date_create($_REQUEST['departure_date']),"d");
	if(isset($_REQUEST['date_click']) && !empty($_REQUEST['date_click']))
	{
		 $from_date_click = date_format(date_create($_REQUEST['date_click']),"d");
		//echo"a====";print_r($from_date_click);
	}
     


	$table_heads 	= $_POST['order_by'];
	$asc_desc 		= $_POST['order_asc_desc'];
	$table_heads 	= trim($table_heads);
	
	if($table_heads == "Depart"){
		
		$table_heads='boarding_timestamp';


	}
	else if($table_heads=="Arrival"){
		
		 $table_heads='dropping_timestamp';

	}
	else if($table_heads=="Duration"){
		
		 $table_heads='duration';

	}
	else if($table_heads=="Travels"){
		 
		 $table_heads='travells';

	}
	else if($table_heads=="Seat"){
		 
		 $table_heads='seat';

	}
	else if($table_heads=="Price"){
		 
		 $table_heads='price';

	}
	
	$newData = '';

	$boarding_point_arr = array();
	// echo"<pre>";print_r($_POST);
	$BoardingAndDropCondition 	= '';
	$BoardingPointCondition 	= '';
	$DropPointCondition 		= '';
	$AmenitiesCondition 		= '';
	$BusOperatorCondition 		= '';
    $from_date_clickCondition   = ''; 
    $departure_dateCondition="";
	if(!empty($_POST))
	{

		if(!empty($_POST['BoardingDrop']))	{	
	        
			$BoardingDropArrCount = count($_POST['BoardingDrop']);


			foreach ($_POST['BoardingDrop'] as $BordingDropTime) {

				$timeSlotVal 		= $BordingDropTime['time-slot'];
				$BordingDropTimeArr = explode("-",$timeSlotVal);

				$boarding = date("H:i", strtotime($BordingDropTimeArr[0]));
				$dropping = date("H:i", strtotime($BordingDropTimeArr[1]));

				if(!empty($BoardingAndDropCondition)){

					$BoardingAndDropCondition .= " OR (boarding_timestamp >= "."\"$boarding\""." AND "."  dropping_timestamp<="."\"$dropping\" )";
				
				}else{

					$BoardingAndDropCondition .= "( boarding_timestamp>="."\"$boarding\""." AND "."  dropping_timestamp<="."\"$dropping\" )";
				
				}
				 
			}

		}

		if(isset($_REQUEST['date_click']) && empty($_REQUEST['date_click'])){
        
			 $departure_dateCondition = 'DAY(bus_date) = "'.$departure_date.'"';
		}else{
			$departure_dateCondition = 'DAY(bus_date) = "'.$from_date_click.'"';
		}


		if(!empty($_POST['BoardingPoint'])){
          
			$BoardingPointArrCount = count($_POST['BoardingPoint']);

			foreach ($_POST['BoardingPoint'] as $BoardingPoint) {
			  
					$BoardingPointVal = $BoardingPoint['board-point'];
					if(!empty($BoardingPointCondition)){
                     
						 $BoardingPointCondition .= 'OR boarding_point_checkbox like ("%'.$BoardingPointVal.'%")'; 


					}else{

						$BoardingPointCondition .= ' boarding_point_checkbox like ("%'.$BoardingPointVal.'%")';

					}

			}
			

		}
		if(!empty($_POST['DropPoint'])){
	
			$DropPointArrCount = count($_POST['DropPoint']);

			for($Dp = 0; $Dp < $DropPointArrCount; $Dp++){
                      
					$DropPointVal = $_POST['DropPoint'][$Dp]['drop-point'];

					if(!empty($DropPointCondition)){
                     
					    $DropPointCondition .= ' OR dropping_point_checkbox like ("%'.$DropPointVal.'%")'; 

					}else{

						$DropPointCondition .= ' dropping_point_checkbox like ("%'.$DropPointVal.'%")';

					}

			}
			

		}
		if(!empty($_POST['Amenities'])){
	
			$AmenitiesArr = $_POST['Amenities'];
	
			foreach($AmenitiesArr as $AmenitiesValues){
                  	if(!empty($AmenitiesCondition)){
						$AmenitiesCondition .= 'AND (FIND_IN_SET("'.$AmenitiesValues.'",amenities_checkbox))';

					}else{
						$AmenitiesCondition .= ' (FIND_IN_SET("'.$AmenitiesValues.'",amenities_checkbox))';
					}
				

			}
			
		}

		if(!empty($_POST['BusOperator'])){
	
			$BusOperatorArrCount = count($_POST['BusOperator']);
			for($Am = 0; $Am < $BusOperatorArrCount; $Am++){

					$BusOperatorVal = $_POST['BusOperator'][$Am]['bus-operator'];
					if(!empty($BusOperatorCondition)){ 
						$BusOperatorCondition .= 'OR (FIND_IN_SET("'.$BusOperatorVal.'",bus_operator_checkbox))';
					}else{
						$BusOperatorCondition .= ' (FIND_IN_SET("'.$BusOperatorVal.'",bus_operator_checkbox))';
					}

			}	

		}
		$FinalSQLQUERY  = '';
		$checkAndStuats = 0;

		if(!empty($departure_dateCondition )){

			if($checkAndStuats == 0){
				$FinalSQLQUERY .= '('.$departure_dateCondition.')';
				$checkAndStuats = 1;

			}else{

				$FinalSQLQUERY .= ' AND ('.$departure_dateCondition.')';

			}
		}


		if(!empty($BoardingAndDropCondition)){
			
			if($checkAndStuats == 0){
				$FinalSQLQUERY .= '  ( '.$BoardingAndDropCondition.' )';
				$checkAndStuats = 1;

			}else{

				$FinalSQLQUERY .= ' AND ( '.$BoardingAndDropCondition.' )';

			}
			
		}
		if(!empty($BoardingPointCondition)){
			
			if($checkAndStuats == 0){
				$FinalSQLQUERY .= '  ( '.$BoardingPointCondition.' )';
				$checkAndStuats = 1;
			}else{
				$FinalSQLQUERY .= ' AND ( '.$BoardingPointCondition.' )';

			}
			
			
		}
		if(!empty($DropPointCondition)){
			
			if($checkAndStuats == 0){
				$FinalSQLQUERY .= '  ( '.$DropPointCondition.' )';
				$checkAndStuats = 1;
			}else{
				$FinalSQLQUERY .= ' AND ( '.$DropPointCondition.' )';
				
			}
							
		}
		if(!empty($AmenitiesCondition)){
			
			if($checkAndStuats == 0){
				$FinalSQLQUERY .= '  ( '.$AmenitiesCondition.' )';
				$checkAndStuats = 1;
			}else{
				$FinalSQLQUERY .= ' AND ( '.$AmenitiesCondition.' )';
				
			}
			
		}
		if(!empty($BusOperatorCondition)){
			
			if($checkAndStuats == 0){
				$FinalSQLQUERY .= '  ( '.$BusOperatorCondition.' )';
				$checkAndStuats = 1;
			}else{
				$FinalSQLQUERY .= ' AND ( '.$BusOperatorCondition.' )';
			}
			
		}

		$orderBY ="";
		if(!empty($table_heads))
		{

			$orderBY=" ORDER BY ".$table_heads." ".$asc_desc;
		}
	    
	     $sqlQuery2 =  "SELECT * FROM BCM_records where (origin= '".$_POST['origin_name']."' AND destination= '".$_POST['destination_name']."') AND (".$FinalSQLQUERY.") ".$orderBY; 
		//$records = $wpdb->prepare($sqlQuery2);
	      
		 $records1 = $wpdb->get_results($sqlQuery2); 
              //echo"<pre>preeti"; print_r($records1);echo"</pre>"; 
    	foreach($records1 as $record)
		{
			
           $dataArray[] = array(
	                    'id' 				      => $record->id,
	                    'boarding_point' 	      => $record->boarding_point,
                        'dropping_point' 	      => $record->dropping_point,
                        'origin' 			      => $record->origin,
                        'destination' 		      => $record->destination,
                        'duration' 			      => $record->duration,
                        'travells' 			      => $record->travells,
                        'seat' 				      => $record->seat, 
                        'price' 			      => $record->price,
                        'amenities_checkbox'      => $record->amenities_checkbox,
                        'boarding_point_checkbox' => $record->boarding_point_checkbox,
                        'dropping_point_checkbox' => $record->dropping_point_checkbox
	                );
        
		} 
		
	}									
		
	echo bt_prepare_result_body($dataArray); die;
} 


function bt_prepare_result($dataArray){
	$newData.='<form action="'.get_permalink( get_option('booking_page_link') ).'" method="GET" id="formPM">
                    <table class="busticket-table" cellspacing="0">

                        <thead>
							<tr class="busticket-th table-heads" name="th-repeat">
								<th class="busticket-table-header " ASC-DESC="ASC"><a href="#">Depart <i class="fas fa-angle-down"></i></a></th>
								<th class="busticket-table-header" ASC-DESC="ASC"><a href="#">Duration <i class="fas fa-angle-down"></i></a></th>
								<th class="busticket-table-header" ASC-DESC="ASC"><a href="#">Arrival <i class="fas fa-angle-down"></i></a></th>
								<th class="busticket-table-header" ASC-DESC="ASC"><a href="#">Travels <i class="fas fa-angle-down"></i></a></th>
								<th class="busticket-table-header" ASC-DESC="ASC"><a href="#">Seat <i class="fas fa-angle-down"></i></a></th>
								<th class="busticket-table-header" ASC-DESC="ASC"><a href="#">Price <i class="fas fa-angle-down"></i></a></th>
								<th class="busticket-table-header"  ASC-DESC="ASC"></th>
							</tr>
						</thead>';
                     
										
						$newData.= '<tbody class="bustickett">';

						$newData.= bt_prepare_result_body($dataArray);	

						$newData.= "</tbody>";	

						if($_GET['return_round']!="return")	{

							$departure_or_return="departure";

						}else{

							$departure_or_return="return";

						}		
													
						$newData.='<input type="hidden" class="seatselect" name="seatselect" >
			                       <input type="hidden" class="totlseats" name="totlseats">
			                       <input type="hidden"  name="trip_id" class="trip_id" value="">
			                       <input type="hidden"  name="action" value="add_to_cart_booking">
			                       <input type="hidden"  name="departure_or_return" value="'.$departure_or_return.'">
			                       <input type="hidden"  name="way-option" value="'.$_GET['way-option'].'">
        
	                </table>
	            </form>';

	return $newData;
}

add_action('wp_ajax_add_to_cart_booking', 'add_to_cart_booking');
add_action('wp_ajax_nopriv_add_to_cart_booking', 'add_to_cart_booking');
function add_to_cart_booking(){
	global $wpdb;
	session_start();

	//print_r($_SESSION);
    
    $add_to_cart_booking = array();

    if(!empty($_REQUEST)){
     
		$tripDetails = $wpdb->get_row("Select * from BCM_records where id =".$_GET['trip_id']);

	    $add_to_cart_booking =array();

	    $departure_or_return 						      = $_GET['departure_or_return'];
	    $way_option 								      = $_GET['way-option'];
	  	$add_to_cart_booking['trip_id']   		          = $_GET['trip_id'];
	  	$add_to_cart_booking['date_select']   		      = $tripDetails->bus_date ;
	    $add_to_cart_booking['busdate']   	   		      = date('D d M',strtotime($tripDetails->bus_date));
		$add_to_cart_booking['duration']  	   		      = $tripDetails->duration; 
	    $add_to_cart_booking['price']   			      = $tripDetails->price;     
	    $add_to_cart_booking['seatselect']     		      = $_REQUEST['seatselect'];
	 	$add_to_cart_booking['totlseats']   		      = $_REQUEST['totlseats'];
		$add_to_cart_booking['boarding_name']  		      = $tripDetails->boarding_point ;
		$add_to_cart_booking['dropping_name']    	      = $tripDetails->dropping_point ;
		$add_to_cart_booking['destination_name'] 	      = $tripDetails->destination ;
		$add_to_cart_booking['origin_name']      	      = $tripDetails->origin ;
		$add_to_cart_booking['travells']   	  		      = $tripDetails->travells ;
		$add_to_cart_booking['boarding_point_checkbox']   = $tripDetails->boarding_point_checkbox ;
		$add_to_cart_booking['total_seats']      	      = $_REQUEST['totlseats'];
		$add_to_cart_booking['total_money']      	      = $total_seats*10.00;
		$add_to_cart_booking['total_rm']   	  		      = $total_money+1.50;	


		if($way_option=="round_trip") {

			$_SESSION['booking_cart']['round_trip'] 	= true;

		}else{

			$_SESSION['booking_cart']['round_trip'] 	= false;

			$_SESSION['booking_cart']['return_data']    = '';
		}

		
		if($departure_or_return=="departure"){

			$_SESSION['booking_cart']['departure_data'] = $add_to_cart_booking;

		}else if($departure_or_return=="return"){

			$_SESSION['booking_cart']['return_data'] 	= $add_to_cart_booking;

		}
//print_r($_SESSION);

		$redirect = verify_booking_cart_data();

		calculate_booking_cart_total();

		$response = array("code"=>200, "message"=>"Your item has been added to cart successfully.", "redirect"=>$redirect);


   
		

	}else{
		$response = array("code"=>202, "message"=>"NO Params found!", "redirect"=>"");
   
	}



	echo json_encode($response); die();


}


add_action('wp_ajax_update_to_cart_booking', 'update_to_cart_booking');
add_action('wp_ajax_nopriv_update_to_cart_booking', 'update_to_cart_booking');
function update_to_cart_booking(){
	global $wpdb;
	session_start();

    if(!empty($_GET)){

	    if($_GET['insurance']==1){

	    	if($_SESSION['booking_cart']['round_trip']==true) { 

				$_SESSION['booking_cart']['insurance']	= 3.50*2;

			}else{

				$_SESSION['booking_cart']['insurance']	= 3.50;
			}

	    }else{

	    	$_SESSION['booking_cart']['insurance']  = 0;

	    }

		calculate_booking_cart_total();

		$response = array("code"=>200, "message"=>"Your cart has been updated successfully.");

	}else{
		$response = array("code"=>202, "message"=>"NO Params found!");
   
	}

	echo json_encode($response); die(); 

}

function calculate_booking_cart_total(){

	session_start();
	 
	$booking_cart = $_SESSION['booking_cart'];

	$total_departure_price 	= $booking_cart['departure_data']['price'] * $booking_cart['departure_data']['totlseats'];
	
	if($booking_cart['round_trip']==true) { 

		$total_return_price 	= $booking_cart['return_data']['price'] * $booking_cart['return_data']['totlseats'];

	}else{

		$total_return_price  = 0;

	}


	if($_SESSION['booking_cart']['round_trip']==true) { 

		$processing_fee = 1.50*2;

	}else{

		$processing_fee = 1.50;

	}
	
    
	
	$insurance = !empty($_SESSION['booking_cart']['insurance']) ? $_SESSION['booking_cart']['insurance'] : 0;
    $insurance = number_format((float)$insurance, 2, '.', '');  

   	$totalPayAmount = $total_departure_price + $total_return_price + $processing_fee + $insurance;
    $totalPayAmount = number_format((float)$totalPayAmount, 2, '.', '');  

	$_SESSION['booking_cart']['processing_fee'] 		= $processing_fee;
    $_SESSION['booking_cart']['totalPayAmount'] 		= $totalPayAmount;
	$_SESSION['booking_cart']['total_departure_price'] 	= $total_departure_price;
	$_SESSION['booking_cart']['total_return_price'] 	= $total_return_price;
    $_SESSION['booking_cart']['insurance'] 				= $insurance;

 
  
	return true;

}

function verify_booking_cart_data(){
	session_start();
	 
	$booking_cart = $_SESSION['booking_cart'];


	if( $booking_cart['round_trip']==true && !empty($booking_cart['departure_data']) && !empty( $booking_cart['return_data'] ) ){

		return "200";

	} else if($booking_cart['round_trip']==true && empty($booking_cart['departure_data'])  ){

		return "departure_data";

	}else if($booking_cart['round_trip']==true && empty($booking_cart['return_data'])  ){

		return "return_data";

	}else if($booking_cart['round_trip']==false && !empty($booking_cart['departure_data'])  ){

		return "200";

	}

}

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


function bt_prepare_result_body($dataArray){
            
	if(empty($dataArray)){
		$newData.='<tr class="busticket-reorder"> 
				<td class="busticket-table-body"  colspan="7">
					No result found!
				</td>
			</tr>';

		$newData.='</tbody>';
		return $newData;		
	}
	         

	if(!isMobile()){
					
		foreach ($dataArray as $value) {
			$count=$value['id'];
			$amenities_checkbox = explode(',',$value['amenities_checkbox']); 
			$newData.='<tr class="busticket-reorder" id="'.$value['id'].'">
		      	       
							<td class="busticket-table-body">
								'.$value['boarding_point'].'
								<small class="blue-text">'.$value['boarding_point_checkbox'].'</small>
							</td>
							<td class="busticket-table-body">
								<span class="busticket-font14">'.$value['duration'].'<br />									
								<i class="fas fa-long-arrow-alt-right"></i></span>
							</td>
							<td class="busticket-table-body">
								'.$value['dropping_point'].'
								<small class="blue-text">'.$value['dropping_point_checkbox'].'</small>
							</td>
							<td class="busticket-table-body">
								<span class="bus-operator">'.$value['travells'].'</span>
								<small class="table-bus-seater">Volvo A/C Seater Semi Sleeper (2+2)</small>
								<a href="javascript:void();" class="table-danger-text">Canc. Policy</a>
							</td>
							<td class="busticket-table-body">
								<span class="table-seat-available">'.$value['seat'].'</span>';
                                   
                                   
                                   if((in_array("Wifi",$amenities_checkbox)) || (in_array("wifi",$amenities_checkbox)) ){

                                        $amenity_Wifi_selected = "amenities-selected"; 
                                    }else{
                                    	$amenity_Wifi_selected = "";
                                    }

                                    if((in_array("TV",$amenities_checkbox)) || (in_array("TV",$amenities_checkbox)) ){

                                        $amenity_TV_selected = "amenities-selected"; 
                                    }else{
                                    	$amenity_TV_selected = "";
                                    }

                                    if((in_array("Meal",$amenities_checkbox)) || (in_array("Meal",$amenities_checkbox)) ){

                                        $amenity_Meal_selected = "amenities-selected"; 
                                    }else{
                                    	$amenity_Meal_selected = "";
                                    }

                                    if((in_array("Plug",$amenities_checkbox)) || (in_array("Plug",$amenities_checkbox)) ){

                                        $amenity_Plug_selected = "amenities-selected"; 
                                    }else{
                                    	$amenity_Plug_selected = "";
                                    } 
                                   
                                   

							$newData.='	<ul class="amenities_icon">
                                    <li class="amenity Wifi '.$amenity_Wifi_selected.'">
                                     
                                      <input type="hidden" class="icons" value="Wifi">
                                      <i class="fas fa-wifi"></i>
                                    </li>
                                    <li class="amenity TV '.$amenity_TV_selected.'">
                                      <input type="hidden" class="icons" value= "TV">
                                      <i class="fas fa-tv"></i>
                                    </li>
                                    <li class="amenity Meal '.$amenity_Meal_selected.'">
                                      <input type="hidden" class="icons" value= "Meal">
                                      <i class="fas fa-utensils"></i>
                                    </li>
                                    <li class="amenity  Plug '.$amenity_Plug_selected.'">
                                      <input type="hidden" class= "icons" value= "Plug">
                                      <i class="fas fa-plug"></i>
                                    </li>
                                </ul>	
							</td>
							<td class="busticket-table-body">
								<span class="busticket-fare">RM '.$value['price'].'<small class="busticket-fare-type">(Adult)</small></span>
								<span class="busticket-fare">RM '.$value['price'].'<small class="busticket-fare-type">(Child)</small></span>
							</td>
							<td class="busticket-table-body">
								<a href="javascript:void(0);" class="busticket-select-btn" data-trip_id="'.$value['id'].'">Select</a>
							</td>
			            </tr>
						<!-- Busticket Row 1 Ends -->

						<tr  class="busseat-row" attr="'.$value['id'].'">
						<input type="hidden" name="amount" class="seat_amount" value="'.$value['price'].'" id="'.$value['id'].'test">
							<td colspan="7">
								<table class="select-busseat">
									<tr>
										<td class="select-busseat-sec"><h2 class="select-seat-title">Select your seat</h2></td>
										<td class="select-busseat-sec">
											<table class="busseat-panel">
												<tbody id="seat-select">
												
													<tr>
														<td rowspan="5" class="busseat-front">
															<span>FRONT</span>
														</td>
														<td><div class="busseat_available selected" >3</div></td>
														<td><div class="busseat_available selected">5</div></td>
														<td><div class="busseat_available">8</div></td>
														<td><div class="busseat_available">11</div></td>
														<td><div class="busseat_available">14</div></td>
														<td><div class="busseat_available">17</div></td>
														<td><div class="busseat_available">20</div></td>
														<td><div class="busseat_available">23</div></td>
														<td><div class="busseat_available">26</div></td>
														<td><div class="busseat_available">30</div></td>
														<td rowspan="5" class="busseat-front"><span>Back</span></td>
													</tr>
													<tr>
														<td><div class="busseat_available">2</div></td>
														<td><div class="busseat_available">6</div></td>
														<td><div class="busseat_available">9</div></td>
														<td><div class="busseat_available">12</div></td>
														<td><div class="busseat_available">15</div></td>
														<td><div class="busseat_available">18</div></td>
														<td><div class="busseat_available">21</div></td>
														<td><div class="busseat_available">24</div></td>
														<td><div class="busseat_available">27</div></td>
														<td><div class="busseat_available">29</div></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td style="height:15px" colspan="12"></td>
													</tr>
													<tr>
														<td style="height:15px" colspan="12" ></td>
													</tr>
													<tr>
														<td><div class="busseat_reserved">1</div></td>
														<td><div class="busseat_reserved">4</div></td>
														<td><div class="busseat_reserved">7</div></td>
														<td><div class="busseat_available">10</div></td>
														<td><div class="busseat_available">13</div></td>
														<td><div class="busseat_available">16</div></td>
														<td><div class="busseat_available">19</div></td>
														<td><div class="busseat_available">22</div></td>
														<td><div class="busseat_available">25</div></td>
														<td><div class="busseat_available">28</div></td>
														
													</tr>
												</tbody>
											</table>
											
										</td>
										<td class="select-busseat-sec">
											<ul class="selected-seat-details" >
												<li>No. of ticket(s):<span class="selected-seat-value">2</span></li>
												<li class="seated" id="test">Seat(s) selected:<span class="selected-seat-value">3,5</span></li>
												<li>Total Amount:<span class="selected-seat-value">RM '.$value['price'].'</span></li>
											</ul> 
											
										</td>
										
									</tr>
									<tr>
										<td class="select-busseat-sec"></td>
										<td class="select-busseat-sec">
											<ul class="seat-type-description">
												<li><div class="busseat_reserved"></div> Occupied</li>
												<li><div class="busseat_available_example"></div> Available</li>
												<li><div class="busseat_selected"></div> Selected</li>
											</ul>
										</td>
										

										<td class="select-busseat-sec">
											<button class="busticket-proceed-btn" id="check_procceed" type="submit" name="submit_procceed">Proceed</button>
										</td>
										
										<div class="error_ticketing_message" ></div>

									</tr>
								</table>
							</td>
						</tr>';
		}
	} // Desktop 


	// 	Start Mobile results
	if(isMobile()){

    foreach ($dataArray as $value) {
	  $count=$value['id'];
	  $amenities_checkbox = explode(',',$value['amenities_checkbox']);
	  $newData.='<tr class="busticket-reorder" id="'.$value['id'].'">
						
					<td class="busticket-table-body">
					    <div class="contains-table-data">
							<div class="bus-boarding-point">'.$value['boarding_point'].' 
							    <small class="blue-text">'.$value['boarding_point_checkbox'].'</small>
							</div>
							<div class="bus-boarding-point">
							    <span class="busticket-font14">'.$value['duration'].'<br />
							       <i class="fas fa-long-arrow-alt-right">
							       </i>
							    </span>
							</div>
							<div class="bus-boarding-point">'.$value['dropping_point'].'
							    <small class="blue-text">'.$value['dropping_point_checkbox'].'
							    </small>
							</div>
						</div>		
						<div class="bus-operator-type">
							<span class="bus-operator">'.$value['travells'].'</span>
							<small class="table-bus-seater">Volvo A/C Seater Semi Sleeper (2+2)</small>
							<a href="javascript:void();" class="table-danger-text">Canc. Policy</a>
						</div>	
					    									
						<div class="bus-seats-price">
							<span class="table-seat-available">'.$value['seat'].'</span>';

							        if((in_array("Wifi",$amenities_checkbox)) || (in_array("Wifi",$amenities_checkbox)) ){

                                        $amenity_Wifi_selected = "amenities-selected"; 
                                    }else{
                                    	$amenity_Wifi_selected = "";
                                    }

                                    if((in_array("TV",$amenities_checkbox)) || (in_array("TV",$amenities_checkbox)) ){

                                        $amenity_TV_selected = "amenities-selected"; 
                                    }else{
                                    	$amenity_TV_selected = "";
                                    }

                                    if((in_array("Meal",$amenities_checkbox)) || (in_array("Meal",$amenities_checkbox)) ){

                                        $amenity_Meal_selected = "amenities-selected"; 
                                    }else{
                                    	$amenity_Meal_selected = "";
                                    }

                                    if((in_array("Plug",$amenities_checkbox)) || (in_array("Plug",$amenities_checkbox)) ){

                                        $amenity_Plug_selected = "amenities-selected"; 
                                    }else{
                                    	$amenity_Plug_selected = "";
                                    } 

                                    

							$newData.='	<ul class="amenities_icon">

		                                    <li class="amenity Wifi '.$amenity_Wifi_selected.'">
		                                     
		                                      <input type="hidden" class="icons" value="Wifi">
		                                      <i class="fas fa-wifi"></i>
		                                    </li>
		                                    <li class="amenity TV '.$amenity_TV_selected.'">
		                                      <input type="hidden" class="icons" value= "TV" >
		                                      <i class="fas fa-tv"></i>
		                                    </li>
		                                    <li class="amenity Meal '.$amenity_Meal_selected.'">
		                                      <input type="hidden" class="icons" value= "Meal">
		                                      <i class="fas fa-utensils"></i>
		                                    </li>
		                                    <li class="amenity  Plug '.$amenity_Plug_selected.'">
		                                      <input type="hidden" class= "icons" value= "Plug">
		                                      <i class="fas fa-plug"></i>
		                                    </li>
                                        </ul>
						</div>								
						<div class="bus-seats-price">
							<span class="busticket-fare">RM '.$value['price'].' <small class="busticket-fare-type">(Adult)</small></span>
							<span class="busticket-fare">RM '.$value['price'].' <small class="busticket-fare-type">(Child)</small></span>
						</div>
						<div class="bus-selection-button">
							<a href="javascript:void(0)" class="busticket-select-btn" data-trip_id="'.$value['id'].'">Select</a>
						</div>
					</td>
				</tr>
				<tr  class="busseat-row" attr="'.$value['id'].'">
						<input type="hidden" name="amount" class="seat_amount" value="'.$value['price'].'" id="'.$value['id'].'test">
					<td class="busticket-table-body">
						<h2 class="select-seat-title">Select your seat</h2>
						<table class="busseat-panel" cellspacing="0">
							<tbody class="seat-select">
								<tr>
									<td colspan="5" class="busseat-front">
										<span>FRONT</span>
									</td>
								</tr>
								<tr>
									<td><div class="busseat_available">1</div></td>
									<td width="20px"></td>
									<td width="20px"></td>
									<td><div class="busseat_available">2</div></td>
									<td><div class="busseat_available">3</div></td>
								</tr>
								<tr>
									<td><div class="busseat_available">4</div></td>
									<td width="20px"></td>
									<td width="20px"></td>
									<td><div class="busseat_available">5</div></td>
									<td><div class="busseat_available">6</div></td>
								</tr>
								<tr>
									<td><div class="busseat_available">7</div></td>
									<td width="20px"></td>
									<td width="20px"></td>
									<td><div class="busseat_available">8</div></td>
									<td><div class="busseat_available">9</div></td>
								</tr>
								<tr>
									<td><div class="busseat_available">10</div></td>
									<td width="20px"></td>
									<td width="20px"></td>
									<td><div class="busseat_available">11</div></td>
									<td><div class="busseat_available">12</div></td>
								</tr>
								<tr>
									<td><div class="busseat_available">13</div></td>
									<td width="20px"></td>
									<td width="20px"></td>
									<td><div class="busseat_available">14</div></td>
									<td><div class="busseat_available">15</div></td>
								</tr>
								<tr>
									<td><div class="busseat_available">16</div></td>
									<td width="20px"></td>
									<td width="20px"></td>
									<td><div class="busseat_available">17</div></td>
									<td><div class="busseat_available">18</div></td>
								</tr>
								<tr>
									<td><div class="busseat_available">19</div></td>
									<td width="20px"></td>
									<td width="20px"></td>
									<td><div class="busseat_available">20</div></td>
									<td><div class="busseat_available">21</div></td>
								</tr>
								<tr>
									<td><div class="busseat_available">22</div></td>
									<td width="20px"></td>
									<td width="20px"></td>
									<td><div class="busseat_available">23</div></td>
									<td><div class="busseat_available">24</div></td>
								</tr>
								<tr>
									<td><div class="busseat_available">25</div></td>
									<td width="20px"></td>
									<td width="20px"></td>
									<td><div class="busseat_available">26</div></td>
									<td><div class="busseat_available">27</div></td>
								</tr>
								<tr>
									<td><div class="busseat_available">28</div></td>
									<td width="20px"></td>
									<td width="20px"></td>
									<td><div class="busseat_available">29</div></td>
									<td><div class="busseat_available">30</div></td>
								</tr>
								<tr>
									<td colspan="5" class="busseat-front">
										<span>BACK</span>
									</td>
								</tr>
							</tbody>
						</table>
						<ul class="seat-type-description">
							<li><div class="busseat_reserved"></div> Occupied</li>
							<li><div class="busseat_available_example"></div> Available</li>
							<li><div class="busseat_selected"></div> Selected</li>
						</ul>
						<ul class="selected-seat-details" >
									<li>No. of ticket(s):<span class="selected-seat-value">2</span></li>
									<li class="seated" id="test">Seat(s) selected:<span class="selected-seat-value">3,5</span></li>
									<li>Total Amount:<span class="selected-seat-value">RM '.$value['price'].'</span></li>
								</ul>
						<button class="busticket-proceed-btn" id="check_procceed" type="submit" name="submit_procceed" ">Proceed</button>									
					</td>
				</tr>';
		}


	} // Mobile End
	
	return $newData;
}


/*
* check update profile check 
*/
add_action('wp_ajax_ticketing_profile_form', 'ticketing_profile_form');
add_action('wp_ajax_nopriv_ticketing_profile_form', 'ticketing_profile_form');
function ticketing_profile_form(){

	$response   = array();
	$firstName  = trim($_POST['first_name']);
	$lastName   = trim($_POST['last_name']);
	$email      = trim($_POST['email']);
	$phone      = trim($_POST['phone']);
	$phoneCode  = trim($_POST['phone_code']);
	$error      = "";


	if(!empty($email)){
		$current_user = wp_get_current_user();
		if(isset($current_user->ID) && !empty($current_user->ID)){
			$userID = $current_user->ID;
			update_user_meta( $current_user->ID, 'first_name', esc_attr($firstName) );
			update_user_meta( $current_user->ID, 'last_name', esc_attr($lastName) );
			update_user_meta( $current_user->ID, 'phone', esc_attr($phone) );
			update_user_meta( $current_user->ID, 'phone_code', esc_attr($phoneCode) );
			if ( !empty($email) ){
		        if (!is_email(esc_attr($email))){
		            $error = "The Email you entered is not valid. Please try again.";
		        }else if($current_user->user_email!=$email){
		        	if(email_exists(esc_attr($email))){
		        		$error = "This email is already used by another user. Try a different one.";
		        	}
		            
		        }else{
		            wp_update_user( array ('ID' => $current_user->ID, 'user_email' => esc_attr($email)));
		        }
		    }
		    if(empty($error)){
		    	$response = array("status"=>1,"message"=>"Profile updated successfully.");
		    }else{
		    	$response = array("status"=>0,"message"=>$error);
		    }

		}else{
			$response = array("status"=>0,"message"=>"Please logged in to update profile.");
		}
	}else{
		$response = array("status"=>0,"message"=>"Please enter email address.");
	}
	echo json_encode($response); die();
}

/*
* show custom fields for admin in form
*/

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="phone">Phone</label></th>

			<td>
				<?php $phone_code = get_the_author_meta( 'phone_code', $user->ID );?>
				<select name="phone_code" id="phone_code" >
                    <option <?php if($phone_code=="+01"){ echo "selected"; } ?> value="+01">+01</option>
					<option <?php if($phone_code=="+7"){ echo "selected"; } ?>  value="+7">+7</option>
					<option <?php if($phone_code=="+20"){ echo "selected"; } ?> value="+20">+20</option>
					<option <?php if($phone_code=="+32"){ echo "selected"; } ?> value="+32">+32</option>
					<option <?php if($phone_code=="+33"){ echo "selected"; } ?> value="+33">+33</option>
					<option <?php if($phone_code=="+36"){ echo "selected"; } ?> value="+36">+36</option>				
					<option <?php if($phone_code=="+39"){ echo "selected"; } ?> value="+39">+39</option>
					<option <?php if($phone_code=="+42"){ echo "selected"; } ?> value="+42">+42</option>
					<option <?php if($phone_code=="+43"){ echo "selected"; } ?> value="+43">+43</option>
					<option <?php if($phone_code=="+44"){ echo "selected"; } ?> value="+44">+44</option>
					<option <?php if($phone_code=="+46"){ echo "selected"; } ?> value="+46">+46</option>
					<option <?php if($phone_code=="+47"){ echo "selected"; } ?> value="+47">+47</option>
					<option <?php if($phone_code=="+48"){ echo "selected"; } ?> value="+48">+48</option>
					<option <?php if($phone_code=="+51"){ echo "selected"; } ?> value="+51">+51</option>
					<option <?php if($phone_code=="+53"){ echo "selected"; } ?> value="+53">+53</option>
					<option <?php if($phone_code=="+54"){ echo "selected"; } ?> value="+54">+54</option>
					<option <?php if($phone_code=="+55"){ echo "selected"; } ?> value="+55">+55</option>
					<option <?php if($phone_code=="+56"){ echo "selected"; } ?> value="+56">+56</option>
					<option <?php if($phone_code=="+58"){ echo "selected"; } ?> value="+58">+58</option>
					<option <?php if($phone_code=="+60"){ echo "selected"; } ?> value="+60" selected="">+60</option>
					<option <?php if($phone_code=="+61"){ echo "selected"; } ?> value="+61">+61</option>
					<option <?php if($phone_code=="+65"){ echo "selected"; } ?> value="+65">+65</option>
					<option <?php if($phone_code=="+81"){ echo "selected"; } ?> value="+81">+81</option>
					<option <?php if($phone_code=="+86"){ echo "selected"; } ?> value="+86">+86</option>  
					<option <?php if($phone_code=="+91"){ echo "selected"; } ?> value="+91">+91</option>
					<option <?php if($phone_code=="+92"){ echo "selected"; } ?> value="+92">+92</option>
					<option <?php if($phone_code=="+93"){ echo "selected"; } ?> value="+93">+93</option>
					<option <?php if($phone_code=="+94"){ echo "selected"; } ?> value="+94">+94</option>                 <option <?php if($phone_code=="+213"){ echo "selected"; } ?>value="+213">+213</option>
					<option <?php if($phone_code=="+227"){ echo "selected"; } ?>value="+227">+227</option>
					<option <?php if($phone_code=="+354"){ echo "selected"; } ?>value="+354">+354</option>
					<option <?php if($phone_code=="+420"){ echo "selected"; } ?>value="+420">+420</option>
					<option <?php if($phone_code=="+852"){ echo "selected"; } ?>value="+852">+852</option>
					<option <?php if($phone_code=="+880"){ echo "selected"; } ?>value="+880">+880</option>
					<option <?php if($phone_code=="+973"){ echo "selected"; } ?>value="+973">+973</option>
					<option <?php if($phone_code=="+974"){ echo "selected"; } ?>value="+974">+974</option>				
					<option <?php if($phone_code=="+1242"){ echo "selected"; } ?>value="+1242">+1242</option>
					<option <?php if($phone_code=="+1684"){ echo "selected"; } ?>value="+1684">+1684</option>	              
				</select>
				<input type="text" name="phone" id="phone" value="<?php echo esc_attr( get_the_author_meta( 'phone', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Phone number</span>
			</td>
		</tr>

	</table>
<?php }

/*
* save user custom fields in admin
*/
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	update_usermeta( $user_id, 'phone_code', $_POST['phone_code'] );
	update_usermeta( $user_id, 'phone', $_POST['phone'] );
}


/*
* admin menu pages
*/
add_action('admin_menu', 'ticketing_admin_menu');
add_action( 'admin_init', 'save_ticketing_extra' ); 
function ticketing_admin_menu() {

    //create new top-level menu
    add_menu_page('Bus ticketing', 'Bus ticketing', 'manage_options', __FILE__, 'show_ticketing_extra_fields' , '', 91) ;    
    
}

/*
* save option for ticketing plugin 
*/
function save_ticketing_extra() {
    register_setting( 'ticketing_setting', 'login_redirect' );
    register_setting( 'ticketing_setting', 'signup_redirect' );
    register_setting( 'ticketing_setting', 'login_page_link' );
    register_setting( 'ticketing_setting', 'signup_page_link' );

    register_setting( 'ticketing_setting', 'reset_page_link' );
    register_setting( 'ticketing_setting', 'forgot_page_link' );
    register_setting( 'ticketing_setting', 'booking_confirmation_page_link' );


    register_setting( 'ticketing_setting', 'ticket_search_page_link' );
    register_setting( 'ticketing_setting', 'booking_page_link' );
    register_setting( 'ticketing_setting', 'booking_history_page_link' );
    register_setting( 'ticketing_setting', 'booking_detail_page_link' );

    register_setting( 'ticketing_setting', 'paypal_username' );
    register_setting( 'ticketing_setting', 'paypal_password' );
    register_setting( 'ticketing_setting', 'paypal_api_version' );
    register_setting( 'ticketing_setting', 'paypal_api_signature' );


    /*Set Api credentials*/
    register_setting( 'ticketing_setting', 'api_username' );
    register_setting( 'ticketing_setting', 'api_password' );
    register_setting( 'ticketing_setting', 'api_version' );
    register_setting( 'ticketing_setting', 'api_signature' );

    /*Plugin Theme Setting*/
    register_setting( 'ticketing_setting', 'header_menu_color' );
    register_setting( 'ticketing_setting', 'button_background_color' );
    register_setting( 'ticketing_setting', 'bus_image' );
}

/*
* show form for setting option for ticketing plugin 
*/

function show_ticketing_extra_fields() {
?>
<style>
.width_50{
	width: 50%;
    float: left;
}
.form-table th{
	width:163px;
}
</style>

<div class="wrap">
	<h1>Bus tickecting plugin setting</h1>

	<form method="post" action="options.php">
	<?php settings_fields( 'ticketing_setting' ); ?>
	<?php do_settings_sections( 'ticketing_setting' ); ?>
	<?php 
		$pagesArr = array();
		// list of pages in site
		$mypages = get_pages( 
			array( 
				'post_type'      => 'page',
				'sort_column'    => 'post_title',
				'sort_order'     => 'asc',
				'post_parent'    => 0,
				'post_status'    => 'publish' 
			) 
		);
		if(!empty($mypages)){
			foreach( $mypages as $page ) {		
				$pagesArr[$page->ID] = $page->post_title; 
			}
		}	 
	?>
		<table class="form-table">    

		    <tr valign="top" class="width_50">
		    	<th scope="row">Login Page</th>
		     	<td>
		     		<select name="login_page_link">
		     			<option value="">Select Page</option>
		  			<?php
		  				$loginLink = esc_attr( get_option('login_page_link') ); 
		  				if(!empty($pagesArr)){
		  					foreach($pagesArr as $key=>$value){
		  					?>
		  					<option value="<?php echo $key;?>" <?php if($key==$loginLink){ echo "selected=selected"; }?> ><?php echo $value;?></option>
		  					<?php	
		  					}
		  				}
		  			?> 
		  			</select>  		
				</td>
		    </tr>  
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Signup Page</th>
		     	<td>
		     		<select name="signup_page_link">
		     			<option value="">Select Page</option>
		  			<?php
		  				$signupLink = esc_attr( get_option('signup_page_link') );
		  				if(!empty($pagesArr)){
		  					foreach($pagesArr as $key=>$value){
		  					?>
		  					<option value="<?php echo $key;?>"  <?php if($key==$signupLink){ echo "selected=selected"; }?> ><?php echo $value;?></option>
		  					<?php	
		  					}
		  				}
		  			?> 
		  			</select>  		
				</td>
		    </tr>  
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Login Redirect</th>
		     	<td>
		     		<select name="login_redirect">
		     			<option value="">Select Page</option>
		  			<?php
		  				$loginRedirectLink = esc_attr( get_option('login_redirect') );
		  				if(!empty($pagesArr)){
		  					foreach($pagesArr as $key=>$value){
		  					?>
		  					<option value="<?php echo $key;?>" <?php if($key==$loginRedirectLink){ echo "selected=selected"; }?> ><?php echo $value;?></option>
		  					<?php	
		  					}
		  				}
		  			?> 
		  			</select>  		
				</td>
		    </tr>  
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Signup redirect</th>
		     	<td>
		     		<select name="signup_redirect">
		     			<option value="">Select Page</option>
		  			<?php		  			
		  				$signupRedirectLink = esc_attr( get_option('signup_redirect') );
		  				if(!empty($pagesArr)){
		  					foreach($pagesArr as $key=>$value){
		  					?>
		  					<option value="<?php echo $key;?>" <?php if($key==$signupRedirectLink){ echo "selected=selected"; }?>  ><?php echo $value;?></option>
		  					<?php	
		  					}
		  				}
		  			?> 
		  			</select>  		
				</td>
		    </tr>  
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Reset Password Page</th>
		     	<td>
		     		<select name="reset_page_link">
		     			<option value="">Select Page</option>
		  			<?php
		  				$resetPageLink = esc_attr( get_option('reset_page_link') );
		  				if(!empty($pagesArr)){
		  					foreach($pagesArr as $key=>$value){
		  					?>
		  					<option value="<?php echo $key;?>" <?php if($key==$resetPageLink){ echo "selected=selected"; }?> ><?php echo $value;?></option>
		  					<?php	
		  					}
		  				}
		  			?> 
		  			</select>  		
				</td>
		    </tr>  
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Forgot Password Page</th>
		     	<td>
		     		<select name="forgot_page_link">
		     			<option value="">Select Page</option>
		  			<?php
		  				$forgotPageLink = esc_attr( get_option('forgot_page_link') );
		  				if(!empty($pagesArr)){
		  					foreach($pagesArr as $key=>$value){
		  					?>
		  					<option value="<?php echo $key;?>" <?php if($key==$forgotPageLink){ echo "selected=selected"; }?>  ><?php echo $value;?></option>
		  					<?php	
		  					}
		  				}
		  			?> 
		  			</select>  		
				</td>
		    </tr>  
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Ticket Search Page</th>
		     	<td>
		     		<select name="ticket_search_page_link">
		     			<option value="">Select Page</option>
		  			<?php
		  				$searchPageLink = esc_attr( get_option('ticket_search_page_link') );
		  				if(!empty($pagesArr)){
		  					foreach($pagesArr as $key=>$value){
		  					?>
		  					<option value="<?php echo $key;?>" <?php if($key==$searchPageLink){ echo "selected=selected"; }?>   ><?php echo $value;?></option>
		  					<?php	
		  					}
		  				}
		  			?> 
		  			</select>  		
				</td>
		    </tr>  
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Booking Page</th>
		     	<td>
		     		<select name="booking_page_link">
		     			<option value="">Select Page</option>
		  			<?php
		  				$bookingPageLink = esc_attr( get_option('booking_page_link') );
		  				if(!empty($pagesArr)){
		  					foreach($pagesArr as $key=>$value){
		  					?>
		  					<option value="<?php echo $key;?>" <?php if($key==$bookingPageLink){ echo "selected=selected"; }?>    ><?php echo $value;?></option>
		  					<?php	
		  					}
		  				}
		  			?> 
		  			</select>  		
				</td>
		    </tr>  
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Booking History Page</th>
		     	<td>
		     		<select name="booking_history_page_link">
		     			<option value="">Select Page</option>
		  			<?php
		  				$bookingHistoryPageLink = esc_attr( get_option('booking_history_page_link') );
		  				if(!empty($pagesArr)){
		  					foreach($pagesArr as $key=>$value){
		  					?>
		  					<option value="<?php echo $key;?>" <?php if($key==$bookingHistoryPageLink){ echo "selected=selected"; }?>    ><?php echo $value;?></option>
		  					<?php	
		  					}
		  				}
		  			?> 
		  			</select>  		
				</td>
		    </tr>  		
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Booking detail Page</th>
		     	<td>
		     		<select name="booking_detail_page_link">
		     			<option value="">Select Page</option>
		  			<?php
		  				$bookingDetailPageLink = esc_attr( get_option('booking_detail_page_link') );
		  				if(!empty($pagesArr)){
		  					foreach($pagesArr as $key=>$value){
		  					?>
		  					<option value="<?php echo $key;?>" <?php if($key==$bookingDetailPageLink){ echo "selected=selected"; }?>    ><?php echo $value;?></option>
		  					<?php	
		  					}
		  				}
		  			?> 
		  			</select>  		
				</td>
		    </tr>  
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Booking confirmation Page</th>
		     	<td>
		     		<select name="booking_confirmation_page_link">
		     			<option value="">Select Page</option>
		  			<?php
		  				$bookingConfirmationPageLink = esc_attr( get_option('booking_confirmation_page_link') );
		  				if(!empty($pagesArr)){
		  					foreach($pagesArr as $key=>$value){
		  					?>
		  					<option value="<?php echo $key;?>" <?php if($key==$bookingConfirmationPageLink){ echo "selected=selected"; }?>    ><?php echo $value;?></option>
		  					<?php	
		  					}
		  				}
		  			?> 
		  			</select>  		
				</td>
		    </tr>  
		    <tr valign="top" >
		    	<th scope="row">Paypal Settings:-</th>		     	
		    </tr>		    
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Paypal Username</th>
		     	<td>
		     		<input type="text" name="paypal_username" value="<?php echo esc_attr( get_option('paypal_username') ); ?>" /> 		
				</td>
		    </tr>
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Paypal Password</th>
		     	<td>
		     		<input type="text" name="paypal_password" value="<?php echo esc_attr( get_option('paypal_password') ); ?>" /> 		
				</td>
		    </tr>
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Paypal API Signature</th>
		     	<td>
		     		<input type="text" name="paypal_api_signature" value="<?php echo esc_attr( get_option('paypal_api_signature') ); ?>" /> 		
				</td>
		    </tr>
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Paypal API Version</th>
		     	<td>
		     		<input type="text" name="paypal_api_version" value="<?php echo esc_attr( get_option('paypal_api_version') ); ?>" /> 		
				</td>
		    </tr>

           <tr valign="top" >
		    	<th scope="row">Set API Credentials:-</th>		     	
		    </tr>		    
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Username</th>
		     	<td>
		     		<input type="text" name="api_username" value="<?php echo esc_attr( get_option('api_username') ); ?>" /> 		
				</td>
		    </tr>
		    <tr valign="top" class="width_50" >
		    	<th scope="row">Password</th>
		     	<td>
		     		<input type="text" name="api_password" value="<?php echo esc_attr( get_option('api_password') ); ?>" /> 		
				</td>
		    </tr>
		    <tr valign="top" class="width_50" >
		    	<th scope="row">API Signature</th>
		     	<td>
		     		<input type="text" name="api_signature" value="<?php echo esc_attr( get_option('api_signature') ); ?>" /> 		
				</td>
		    </tr>
		    <tr valign="top" class="width_50" >
		    	<th scope="row">API Version</th>
		     	<td>
		     		<input type="text" name="api_version" value="<?php echo esc_attr( get_option('api_version') ); ?>" /> 		
				</td>
		    </tr>

            <tr valign="top" >
		    	<th scope="row">Plugin Theme Settings:-</th>		     	
		    </tr>
            <tr valign="top" class="width_50" >
		    	<th scope="row">Choose header menu color</th>
		     	<td>
		     		<input type="color" name="header_menu_color" class="jscolor"  value="<?php echo esc_attr( get_option('header_menu_color') ); ?>" /> 		
				</td>
		    </tr>
              
            <tr valign="top" class="width_50" >
		    	<th scope="row">Choose Theme color</th>
		     	<td>
		     		<input type="color" name="button_background_color" class="jscolor"  value="<?php echo esc_attr( get_option('button_background_color') ); ?>" /> 		
				</td>
		    </tr> 

		    <tr valign="top" class="width_50">
		    	<th scope="row">Choose Bus</th>
		     	<td>
		     		<select name="bus_image">
		     			
		  			<?php
                       
		  			    $select_bus_image =  esc_attr( get_option('bus_image')); 
		  				$bus_blue         =  bus_ticketing_plugin_url()."images/bus-blue.png";
		  				$bus_teal         =  bus_ticketing_plugin_url()."images/bus-teal.png";
		  				$bus_orange       =  bus_ticketing_plugin_url()."images/bus-orange.png";
		  				$bus_mustard      =  bus_ticketing_plugin_url()."images/bus-mustard.png";
		  				$bus_purple       =  bus_ticketing_plugin_url()."images/bus-purple.png";
		  				$bus_green        =  bus_ticketing_plugin_url()."images/bus-green.png";
		  				$bus_black        =  bus_ticketing_plugin_url()."images/bus-black.png";
		  				$bus_red          =  bus_ticketing_plugin_url()."images/bus-red.png";
		  			
		  			?>	
		  					
		  					<option value="<?php echo $bus_blue;?>"<?php if($bus_blue == $select_bus_image){ echo "selected=selected"; }?>>Select Bus</option>

		  					<option value="<?php echo $bus_blue;?>"<?php if($bus_blue == $select_bus_image){ echo "selected=selected"; }?>>bus image (blue)</option>

		  					<option value="<?php echo $bus_mustard;?>" <?php if($bus_mustard == $select_bus_image){ echo "selected=selected"; }?>>bus image (mustard)</option>

		  					<option value="<?php echo $bus_teal;?>" <?php if($bus_teal == $select_bus_image){ echo "selected=selected"; }?>>bus image (teal)</option>

		  					<option value="<?php echo $bus_orange;?>" <?php if($bus_orange == $select_bus_image){ echo "selected=selected"; }?>>bus image (orange)</option>

		  					<option value="<?php echo $bus_green;?>" <?php if($bus_green == $select_bus_image){ echo "selected=selected"; }?>>bus image (green)</option>

		  					<option value="<?php echo $bus_black;?>" <?php if($bus_black == $select_bus_image){ echo "selected=selected"; }?>>bus image (black)</option>

		  					<option value="<?php echo $bus_purple;?>" <?php if($bus_purple == $select_bus_image){ echo "selected=selected"; }?>>bus image (purple)</option>

		  					<option value="<?php echo $bus_red;?>" <?php if($bus_red == $select_bus_image){ echo "selected=selected"; }?>>bus image (red)</option>
		  					 
		  			</select>  		
				</td>
		    </tr>   
		</table>

	<?php submit_button(); ?> 
	</form>
</div>  
<?php
}
 
function bus_ticket_search_page(){

   $wayoption = $_REQUEST['way-option'];

	ob_start();
?>
	 
	<div class="loader_tickecting"></div>
	
	<div id="et-main-area">
		<div id="main-content">
			<article id="post-2" class="post-2 page type-page status-publish">
				<div class="entry-content">
					<div class="et_pb_section et_pb_section_0 et_pb_with_background et_pb_fullwidth_section et_section_regular">
						<img src="<?php echo bus_ticketing_plugin_url(); ?>/images/Bus-Internal-image.jpg" alt="" />
						<div class="search-ticket-sec">
							<div class="busticket-main-container">
								<form action ="<?php echo get_permalink( get_option('ticket_search_page_link' ) ); ?>" method="GET" id="Ticket_section">
									<div class="busticket-form-search-option">
										<div class="busticket-search-option">
											<label class="busticket-radio-label">
												One Way 
												<input type="radio" name="way-option" id="one-check" class="way-option-check " value="one_way" <?php if($wayoption=="one_way"){ echo "checked"; } ?>/>
												<span class="checkmark "></span>
											</label>
										</div>
										<div class="busticket-search-option">
											<label class="busticket-radio-label">
												Round Trip
												<input type="radio" name="way-option" id="round-check" class="way-option-check" value="round_trip" <?php if( $wayoption=="round_trip" ){ echo "checked"; } ?> />
												 <span class="checkmark"></span>
											</label>
										</div>
									</div>
									<!-- Busticket Radio Option Ends -->
									
									
									<!-- Busticket One Way Options Starts -->
									<div id="busticket-one-way" class="busticket-one-way box busticket-way-sec">
										<div class="busticket-form-search-row">
											<div class="busticket-form-group">
												<div class="busticket-input-area">
													<i class="fas fa-map-marker-alt"></i>
													<select placeholder="Origin" name="origin" id="ticket-search-origin" class="busticket-form-input dropdown_home" required>
														<option value="" >Please Select</option>	
													    <option value="KL" <?php if($_GET['origin']=='KL') { echo "selected"; } ?>>KL</option>
	                                                    <option value="Johor" <?php if($_GET['origin']=='Johor') { echo "selected"; } ?>>Johor</option>
														<option value="Singapore" <?php if($_GET['origin']=='Singapore') { echo "selected"; } ?>>Singapore</option>													
                                                    </select>
												</div>
											</div>
																						
											<div class="busticket-form-group-middle">
												<span class="ticket-img"><img src="<?php echo bus_ticketing_plugin_url();?>/images/icon-exchange.png" class="busticket-return-image " alt="" /></span>
											</div>
											
											<div class="busticket-form-group">
												<div class="busticket-input-area">
													<i class="fas fa-map-marker-alt"></i>
													
                                                     <select placeholder="Destination" name="destination" id="ticket-search-destination" class="busticket-form-input dropdown_home" required>
													    <option value="" >Please Select</option>	
													    <option value="KL" <?php if($_GET['destination']=='KL') { echo "selected"; } ?>>KL</option>
	                                                    <option value="Johor" <?php if($_GET['destination']=='Johor') { echo "selected"; } ?>>Johor</option>
														<option value="Singapore" <?php if($_GET['destination']=='Singapore') { echo "selected"; } ?>>Singapore</option>	
                                                    </select>
												</div>
											</div>
										</div>
										<!-- Form Row Ends -->
										
										<div class="busticket-form-search-row">
											<div class="busticket-form-group busticket-half-width-group">											
												<div class="busticket-input-area">
													<i class="far fa-calendar-alt"></i><input type="text" placeholder="2018-06-06" class="busticket-form-input datepicker" id="depart" name="departure_date" value="<?php echo $_GET['departure_date']; ?>" autocomplete="off" />
												</div>
											</div>

											<div class="busticket-form-group  busticket-half-width-group busticket-right-sec roundway-dates" style="<?php if($wayoption=="one_way"){ echo "display: none"; } ?>">											
												<div class="busticket-input-area">
													<i class="far fa-calendar-alt"></i>
													<input type="text" placeholder="2018-06-06" name="return_date" class="busticket-form-input datepicker " id="return" value="<?php echo @$_GET['return_date']; ?>" autocomplete="off" />
												</div>
											</div>
										</div>
										<!-- Form Row Ends -->
										
										
										<div class="busticket-form-search-row busticket-btn-block">											
											<div class="busticket-form-group busticket-button-sec">
												<input type="hidden" name="return_round" value="" id="return_round">
												<input type="submit" value="Get set go!" class="busticket-btn bus-button" id="bus-button"/>
												
											</div>
										</div>

					
									</div>
									<!-- Busticket One Way Options Ends -->
								</form>							
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>



	<section>
		<!-- Main Container Starts -->
		<div class="busticket-main-container">
			<div id="busticket-one-way" class="busticket-one-way box">

				<div class="busticket-way-main-detail">
					<span class="loc-value busticket-depart">
						<?php if(@$_GET['return_round'] != 'return' ){echo $_GET['origin'];} 
                              
                              else{
                              	echo $_GET['destination'];
                              }
						?> 
					</span> 
						<i class="fas fa-long-arrow-alt-right"></i>
						<span class="loc-value busticket-return">
                            <?php
                              if(@$_GET['return_round'] != 'return' ){echo $_GET['destination'];} 
                              
                              else{
                              	echo $_GET['origin'];
                              }
                            ?>
                            	
                        </span>

					<span class="busticket-travel-time bucticket-timedetails">
						Depart: <?php 
						            if(@$_GET['return_round'] != 'return' ){ 
						              echo date('d M, D',strtotime($_GET['departure_date'])); 
                                    }else{
                                      echo date('d M, D',strtotime($_GET['return_date']));	
                                    }
						        ?> 
					</span>
					<span class="busticket-travel-way bucticket-timedetails">
						<?php if($wayoption=="one_way"){ echo "One Way"; } else { echo "Round Trip"; } ?>
					</span>
				</div>				


				<!-- BusTicket Round way Options Starts -->

				<ul class="busticket-roundway-opt roundwayshow" style="<?php if($wayoption=="one_way"){ echo "display: none"; } ?>" name="round-show-jaya">
					<li>
						<a href="#busticket-depart" id="departure-tab" class="jaya <?php if(@$_GET['return_round'] != 'return' ) { echo "active" ;} ?> " data-way="going">
							<span class="busticket-travel-time">Depart</span>
							<div class="busticket-loc"><span class="busticket-depart"><?php echo $_GET['origin'];?></span> <i class="fas fa-long-arrow-alt-right"></i> <span class="busticket-return"><?php echo $_GET['destination'];?></span></div>
							<span class="busticket-travel-time">Depart: <?php echo date('d M Y',strtotime($_GET['departure_date'])); ?> </span>
						</a>
					</li>
					<li>
						<a href="#busticket-return" id="return-tab" class="jaya <?php if(@$_GET['return_round'] == 'return' ) { echo "active" ;} ?>"  data-way="return">							
							<span class="busticket-travel-time return-tab">Return</span>
							<div class="busticket-loc"><span class="busticket-depart"><?php echo $_GET['destination'];?></span> <i class="fas fa-long-arrow-alt-right"></i> <span class="busticket-return"><?php echo $_GET['origin'];?></span></div>
							<span class="busticket-travel-time">Depart: <?php echo date('d M Y',strtotime($_GET['return_date'])); ?> </span>
						</a>
					</li>
				</ul>
				<!-- BusTicket Round way Options Ends -->

				<!-- Busticket Filter Options -->

				<?php
                


				if(!empty($_GET['return_round']) && $_GET['return_round'] == "return"){
						$origin  		= $_GET['origin'];
						$destination 	= $_GET['destination'];
						$departure_date = $_GET['departure_date'];
						$return_date    = $_GET['return_date'];

						$_GET['origin'] 		= $destination;
						$_GET['destination'] 	= $origin;
						$_GET['departure_date'] = $return_date;
						

					}

				 ?>
				
				<form name="form_search_2" id="form_search_2" method="get" action="" >
				
				<ul class="busticket-filter multiple-board" name="multiple-board">
					<li class="busticket-filter-option">
						<span>Filter:</span>
						<a href="javascript:void();" class="busticket-reset-btn" style="display: none">Reset Filter <i class="fas fa-times"></i></a>
					</li>					
					<li class="busticket-filter-option filter-dropdown active time_filter">
						<a href="javascript:void(0);"><i class="far fa-clock"></i> Time <i class="fas fa-angle-down"></i></a>
						<ul class="filter-subcategory-dropdown time" name ="slot-time">
							<li><input type="checkbox" name="BoardingDrop[][time-slot]" id="time-slot" value="00:00 AM - 11:59 AM" /><label for="time-slot" class="busticket-filter-subopt">00:00 AM - 11:59 AM</label></li>
							<li><input type="checkbox" name="BoardingDrop[][time-slot]" id="time-slot1" value="12:00 PM - 06:59 PM" /><label for="time-slot1" class="busticket-filter-subopt">12:00 PM - 06:59 PM</label></li>
							<li><input type="checkbox" name="BoardingDrop[][time-slot]" id="time-slot2" value="07:00 PM - 11:59 PM" /><label for="time-slot2" class="busticket-filter-subopt">07:00 PM - 11:59 PM</label></li>
						</ul>
					</li>			
					<li class="busticket-filter-option filter-dropdown boarding_point_filter">
						<a href="javascript:void(0);"><i class="fas fa-map-marker-alt"></i> Boarding Point <i class="fas fa-angle-down"></i></a>
						<ul class="filter-subcategory-dropdown">
							<li><input type="checkbox" name="BoardingPoint[][board-point]" class="board-point-1" id="board-point-1" value="First World Hotel" /><label for="board-point-1" class="busticket-filter-subopt">First World Hotel</label></li>
							<li><input type="checkbox" name="BoardingPoint[][board-point]" id="board-point-2" value="Genting Resort Hotel (basement 5)"/><label for="board-point-2" class="busticket-filter-subopt">Genting Resort Hotel (basement 5)</label></li>
						</ul>
					</li>			
					<li class="busticket-filter-option filter-dropdown boarding_point_filter">
						<a href="javascript:void(0);"><i class="fas fa-map-marker-alt"></i> Dropping Point <i class="fas fa-angle-down"></i></a>
						<ul class="filter-subcategory-dropdown">
							<li><input type="checkbox" name="DropPoint[][drop-point]" id="drop-point-1" value="Johor Jaya Bus Terminal"/><label for="drop-point-1" class="busticket-filter-subopt">Johor Jaya Bus Terminal</label></li>
						</ul>
					</li>			
					<li class="busticket-filter-option filter-dropdown boarding_point_filter">
						<a href="javascript:void(0);"><i class="fas fa-bus"></i> Bus Opertors <i class="fas fa-angle-down"></i></a>
						<ul class="filter-subcategory-dropdown">
							<li><input type="checkbox" name="BusOperator[][bus-operator]" id="bus-operator-1" value="LA Holidays (KKKL Translim Agent)"/><label for="bus-operator-1" class="busticket-filter-subopt">LA Holidays (KKKL Translim Agent)</label></li>
							<li><input type="checkbox" name="BusOperator[][bus-operator]" id="bus-operator-2" value="Perdana Express"/><label for="bus-operator-2" class="busticket-filter-subopt">Perdana Express</label></li>
							<li><input type="checkbox" name="BusOperator[][bus-operator]" id="bus-operator-3" value="Transitional"/><label for="bus-operator-3" class="busticket-filter-subopt">Transitional</label></li>
							<li><input type="checkbox" name="BusOperator[][bus-operator]" id="bus-operator-4" value="Adik Beradik Express"/><label for="bus-operator-4" class="busticket-filter-subopt">Adik Beradik Express</label></li>
						</ul>
					</li>	
					<li class="busticket-filter-option filter-dropdown boarding_point_filter">
						<a href="javascript:void(0);">Amenities <i class="fas fa-angle-down"></i></a>
						<ul class="filter-subcategory-dropdown">
							<li class="check_amenities"><input type="checkbox" name="Amenities[]" id="amenities-1" value="Meal" /><label for="amenities-1" class="busticket-filter-subopt">Meal</label></li>
							<li class="check_amenities"><input type="checkbox" name="Amenities[]" id="amenities-2" value="Wifi" /><label for="amenities-2" class="busticket-filter-subopt">Wifi</label></li>
							<li class="check_amenities"><input type="checkbox" name="Amenities[]" id="amenities-3" value="TV" /><label for="amenities-3" class="busticket-filter-subopt">TV</label></li>
							<li class="check_amenities"><input type="checkbox" name="Amenities[]" id="amenities-4" value="Plug" /><label for="amenities-4" class="busticket-filter-subopt">Plug</label></li>
						</ul>
					</li>
				</ul> 

				<input type="hidden" name="action" value="get_shuffled_time_PM_data">
				<input type="hidden" class="origin_name_th" name="origin_name" value="<?php echo $_GET['origin'];?>">
				<input type="hidden"  name="destination_name" class="destination_name_th" value="<?php echo $_GET['destination'];?>">
				<input type="hidden"  name="departure_date" class="departure_date" value="<?php echo $_GET['departure_date'];?>">
                <input type="hidden"  name="return_date" class="return_date" value="<?php echo $_GET['return_date'];?>">
 
				<input type="hidden"  name="order_asc_desc" class="order_asc_desc" value="">
				<input type="hidden"  name="order_by" class="order_by" value="">
				<input type="hidden"  name="date_click" class="date_click" value="">

				</form>
				<!-- Busticket Filter Options -->


				<!-- Desktop Search Sec Starts -->
				<?php 

				if(!empty($_GET['departure_date'])){ 

					$startDate = $_GET['departure_date'];
					$max_dates = 10;
					$countDates = 0;
	
				?>


				<div class="desktop-search">
					<div class="busdate-carousel desktop-filter" id="myDIV" name="Date-repeater">		
						<?php 
							while ($countDates < $max_dates) {
							$sliderDate = date('d M, D',strtotime("+".$countDates." day", strtotime($startDate))); 
							$active = ($countDates==0) ? "active" : "" ;
						?>	
							<div class="busticket-date-option busticket-dates <?php echo $active; ?>">
								<a><?php echo $sliderDate; ?></a>
							</div>					
						<?php $countDates += 1; } ?>
					</div>
				</div>
				<?php } ?>
					<!-- Busticket Date Carousel Ends -->

	<?php 
	

	if(!empty($_GET)){
		global $wpdb;
                    
		$whereArr = array();
       	

		if(!empty($_GET['origin'])){
			$whereArr[] = "origin = '".$_GET['origin']."'";
		}

		if(!empty($_GET['destination'])){
			$whereArr[] = "destination = '".$_GET['destination']."'";
		}

  


		if(!empty($_GET['departure_date'])){

			$departure_date=date_format(date_create($_GET['departure_date']),"d");

			$whereArr[] = "DAY(bus_date) = '".$departure_date."'";
		}
         
		
		if(!empty($whereArr)){
			$where = implode(" AND ", $whereArr);	
		}

        

		$dataArray =array();
 
	     $sql2= "SELECT * FROM BCM_records where " .$where;  
		
		$records2 = $wpdb->get_results($sql2);
		//echo"<pre>"; print_r($records2); echo"</pre>";
		if(!empty($records2)){
			foreach($records2 as $record){

				$dataArray[] = array(

			                    'id' 				      => $record->id,
			                    'boarding_point' 	      => $record->boarding_point,
			                    'dropping_point' 	      => $record->dropping_point,
			                    'origin' 			      => $record->origin,
			                    'destination' 		      => $record->destination,
			                    'duration' 			      => $record->duration,
			                    'travells' 			      => $record->travells,
			                    'seat' 			       	  => $record->seat, 
			                    'price' 			      => $record->price,
			                    'amenities_checkbox'      => $record->amenities_checkbox,
			                    'boarding_point_checkbox' => $record->boarding_point_checkbox,
                                'dropping_point_checkbox' => $record->dropping_point_checkbox
			                );
			}
		}
	}
	?>

				<div class="busticket-bus-selection" id="dataContainer">
					<?php 



					echo bt_prepare_result($dataArray);	?>
				</div>
			</div><!-- One Way Section Ends -->		
		</div><!--END  Main Container -->
	</section>

	<?php 

	$data = ob_get_contents();

	ob_end_clean();

	return $data;

} 

add_shortcode('bus_ticket_search','bus_ticket_search_page');


function home_search_box(){
 
         
	$data.='<div class="busticket-search-container">
							<h1 class="busticket-search-header">Book Bus Ticket Online</h1>
							<div class="busticket-search-sec" id="SearchContainer">
	
									<div class="busticket-form-row">
										<div class="busticket-search-option">
											<label class="busticket-radio-label">One Way <input type="radio" name="way-option" value="busticket-one-way" checked="checked"> <span class="checkmark"></span></label>
										</div>
										<div class="busticket-search-option">
											<label class="busticket-radio-label" id="round-label">Round Trip<input type="radio" name="way-option" value="busticket-round-way"> <span class="checkmark"></span></label>
										</div>
									</div>
									<!-- Busticket Radio Option Ends -->
									
									
									<!-- Busticket One Way Options Starts -->
									<div id="busticket-one-way" class="busticket-one-way box">
										<form  action = "'.get_permalink( get_option('ticket_search_page_link') ).'" method = "GET" class="search_home">

										<input type="hidden" name="way-option" value="one_way">
										<div class="busticket-form-row">
											<div class="busticket-form-group">
												<label class="busticket-label">From: City Name</label>
												<div class="busticket-input-area">
													<i class="fas fa-map-marker-alt"></i>
													<select placeholder="Origin" name="origin" id="one-way-origin_1" class="busticket-form-input dropdown_home" required>
													    
	                                                      <option value="">Please Select</option>
													      <option value="KL">KL</option>
	                                                      <option value="Johor">Johor</option>
														  <option value="Singapore">Singapore</option>
														  

                                                    </select>
												</div>
											</div>
																						
											<div class="busticket-form-group-middle">
												<a href="javascript:void();"><span><img src="'.bus_ticketing_plugin_url().'/images/icon-exchange.png" class="busticket-return-image" alt=""></span></a>
											</div>
											
											<div class="busticket-form-group busticket-right-sec">
												<label class="busticket-label">To: City Name</label>
												<div class="busticket-input-area">
													<i class="fas fa-map-marker-alt"></i>
													<select type="text" placeholder="Destination" name="destination" class="busticket-form-input dropdown_home" id="one_way_destination" required>													   					
													      <option value="">Please Select</option>
													      <option value="KL">KL</option>
	                                                      <option class="Johor" value="Johor">Johor</option>
														  <option class="Singapore" value="Singapore">Singapore</option>
                                                    </select>
												</div>
											</div>
										</div>
										<!-- Form Row Ends -->
										
										<div class="busticket-form-row">
											<div class="busticket-form-group ">
												<label class="busticket-label">Departure Date</label>											
												<div class="busticket-input-area ">
													<i class="far fa-calendar-alt"></i><input type="text" placeholder="2018-06-06" name="departure_date" id="departure_date_1" class="busticket-form-input datepicker date_range" value="" autocomplete="off"  />
												</div>

											</div>
											<div class="busticket-form-group busticket-button-sec">
												<button class="busticket-btn" type="submit" id="bus_button" >Get set go!</button>
											</div>
										</div>
										<!-- Form Row Ends -->
										</form>
									</div>
									<!-- Busticket One Way Options Ends -->
									
									
									<!-- Busticket Return Way Options Starts -->
									<div id="busticket-round-way" class="busticket-round-way box" style="display: none">
									  <form  action = "'.get_permalink( get_option('ticket_search_page_link') ).'" method = "GET" class="search_home">
									  <input type="hidden" name="way-option" value="round_trip">
										<div class="busticket-form-row">
											<div class="busticket-form-group">
												<label class="busticket-label">From: City Name</label>
												<div class="busticket-input-area">
													<i class="fas fa-map-marker-alt"></i>
													<select placeholder="Origin" name="origin" id="round-way-origin" class="busticket-form-input dropdown_home" required>
													    
	                                                      <option value="">Please Select</option>
													      <option value="KL">KL</option>
	                                                      <option value="Johor">Johor</option>
														  <option value="Singapore">Singapore</option>
														  

                                                    </select>
												</div>
											</div>
																															
											<div class="busticket-form-group-middle">
												<a href="javascript:void();"><span><img src="'.bus_ticketing_plugin_url().'/images/icon-exchange.png" class="busticket-return-image" alt=""></span></a>
											</div>
											
											<div class="busticket-form-group busticket-right-sec">
												<label class="busticket-label">To: City Name</label>
												<div class="busticket-input-area">
													<i class="fas fa-map-marker-alt"></i>
													<select type="text" placeholder="Destination" name="destination" class="busticket-form-input dropdown_home" id="round_way_destination" required>
													      <option value="">Please Select</option>
													      <option value="KL">KL</option>
	                                                      <option value="Johor">Johor</option>
														  <option value="Singapore">Singapore</option>
														  
                                                    </select>
												</div>
											</div>
										</div>
										<!-- Form Row Ends -->
										
										<div class="busticket-form-row">
											<div class="busticket-form-group ">
												<label class="busticket-label">Departure Date</label>											
												<div class="busticket-input-area ">
													<i class="far fa-calendar-alt"></i><input type="text" placeholder="2018-06-06" name="departure_date" id="departure_date_2" class="busticket-form-input datepicker date_range" value="'.$_GET['departure_date'].'" autocomplete="off" />
												</div>
											</div>
											<div class="busticket-form-group busticket-right-sec">
												<label class="busticket-label">Return Date</label>											
												<div class="busticket-input-area ">
													<i class="far fa-calendar-alt"></i><input type="text" placeholder="2018-06-06" name="return_date" id="return_date" class="busticket-form-input datepicker date_range" value="'.$_GET['return_date'].'" autocomplete="off" />
												</div>
											</div>
										</div>
										<!-- Form Row Ends -->
										
										<div class="busticket-form-row">
											<div class="busticket-form-group busticket-button-sec">
											 <button class="busticket-btn" id="home_search_button" type="submit">Get set go!</button>
											</div>
										</div>
										<!-- Form Row Ends -->
									  </form>
									</div>
									
									<!-- Busticket Return Way Options Ends -->
													
							</div>
		    </div>';
	return $data;						
}
add_shortcode('home_page_search_box','home_search_box');

/*
* show form for booking confirmation page
*/
function get_booking_details($booking_id){

	global $wpdb;
    $sql = "SELECT * FROM booking_orders LEFT JOIN order_transactions ON booking_orders.id=order_transactions.booking_id  where booking_orders.id= $booking_id";

	$data['booking_details'] = $wpdb->get_row($sql);

	
	$sqlmeta = "SELECT * FROM booking_orders_meta where booking_id= $booking_id";
	$data['booking_trips'] = $wpdb->get_results($sqlmeta);
	
	return $data;
}

function booking_confirmation_page(){

    global $wpdb;

	//echo"<pre>";print_r($bookingDetails); echo"</pre>";

	session_start();

  	$_REQUEST['booking_cart'] = '';
    
	//global $wpdb;
	if(isset($_REQUEST['txn_id'])){
		$txn_id 	= $_REQUEST['txn_id'];
		$booking_id = $_REQUEST['booking_id'];
		
	} 

  	$bookingDetails = get_booking_details($booking_id);
       
  	ob_start();

    include (dirname(__FILE__)."/templates/confirmation-page-details.php");

    $response = ob_get_clean();	

	return $response;

}
add_shortcode('ticket_booking_confirmation','booking_confirmation_page');

/*
* show form for booking page 
*/
function ticket_booking_page(){

	global $wpdb;

	session_start();
        
		    // 2 hours in seconds
		$timeout = 7200; // Number of seconds until it times out.
		 
		// Check if the timeout field exists.
		if(isset($_SESSION['timeout'])) {

		    // See if the number of seconds since the last
		    // visit is larger than the timeout period.
		   $duration = time() - (int)$_SESSION['timeout'];
		    if($duration > $timeout) {
		        // Destroy the session and restart it.
		        session_unset();
		        session_destroy();
		        session_start();
		    }


		}    
 
			// Update the timout field with the current time.
			$_SESSION['timeout'] = time();
	          

    if(!empty($_SESSION['booking_cart'])){

		$booking_cart = $_SESSION['booking_cart'];
        
	}else {

	    
	    echo "<div class= 'session-exp'>Sorry! Ticket cart is empty! <a href=".get_permalink( get_option('login_page_link') ).">please login</a></div>";

	    die();
	}


    $current_user = wp_get_current_user();	
    
    if(empty($current_user->ID)){
    	
    }else{
    	$phone 		= get_the_author_meta( 'phone', $current_user->ID );
	    $phone_code = get_the_author_meta( 'phone_code', $current_user->ID );
    }


      
	ob_start();

    include (dirname(__FILE__)."/templates/booking-cart-details.php");

    $response = ob_get_clean();	

	return $response; 
     
	   
}
add_shortcode("ticket_booking","ticket_booking_page");

/*
* show booking history page
*/
function NVPToArray($NVPString)
	{
		$proArray = array();
		while(strlen($NVPString))
		{
			// name
			$keypos= strpos($NVPString,'=');
			$keyval = substr($NVPString,0,$keypos);
			// value
			$valuepos = strpos($NVPString,'&') ? strpos($NVPString,'&'): strlen($NVPString);
			$valval = substr($NVPString,$keypos+1,$valuepos-$keypos-1);
			// decoding the respose
			$proArray[$keyval] = urldecode($valval);
			$NVPString = substr($NVPString,$valuepos+1,strlen($NVPString));
		}
		return $proArray;

}




add_action('wp_ajax_bt_paypal_payment','bt_paypal_payment');
add_action('wp_ajax_nopriv_bt_paypal_payment','bt_paypal_payment');
function bt_paypal_payment(){
	 
    session_start();

    global $wpdb;

	$current_user = wp_get_current_user();
    $user_id = $current_user->ID;

    if($user_id==0){
      	$response =array('status'=>'not_login','message'=>'Please Login First');
        echo json_encode($response); die();
    }

 
    
   

    $booking_cart = $_SESSION['booking_cart'];


    $total_rm		= $booking_cart['totalPayAmount'];

	//buyer information
	$name  			= $_POST['name_on_card'];
	$nameArr  		= explode(' ', $name);
	$firstName 		= $nameArr[0];
	$lastName 		= $nameArr[1];
	$fullname 		= $firstName.$lastName;
	$city 			= 'Charleston';
	$zipcode 		= '25301';
	$countryCode 	= 'US';

	//card details
	//$creditCardNumber = trim(str_replace(" ","",$_POST['card_number']));
	$creditCardNumber 	= $_POST['card_number'];
	$creditCardType 	= $_POST['card_type'];
	$expMonth 			= $_POST['expiry_month'];
	$expYear 			= $_POST['expiry_year'];
	$exp 				= $expMonth.$expYear;
	$cvv 				= $_POST['cvv'];
	$sandbox 			= TRUE;

	// Set PayPal API version and credentials.
	$api_version 	= '85.0';
	$api_endpoint 	= $sandbox ? 'https://api-3t.sandbox.paypal.com/nvp' : 'https://api-3t.paypal.com/nvp';
	$api_username 	= $sandbox ? 'gagan2626_api1.gmail.com' : 'LIVE_USERNAME_GOES_HERE';
	$api_password 	= $sandbox ? 'KZ8D7KRQSGQ2RV84' : 'LIVE_PASSWORD_GOES_HERE';
	$api_signature 	= $sandbox ? 'A2oXgbRoykt-Cb-NZec2cfT1qvD6AMQjU22MElbGyMZ9y7WtKKUoL126' : 'LIVE_SIGNATURE_GOES_HERE';


	$request_params = array
						(
						'METHOD' 			=> 'DoDirectPayment', 
						'USER' 				=> $api_username, 
						'PWD' 				=> $api_password, 
						'SIGNATURE' 		=> $api_signature, 
						'VERSION' 			=> $api_version, 
						'PAYMENTACTION' 	=> 'Sale',                   
						'IPADDRESS' 		=> $_SERVER['REMOTE_ADDR'],
						'CREDITCARDTYPE' 	=> 'Visa', 
						'ACCT'  			=> $creditCardNumber,                        
						'EXPDATE'  			=> $exp,           
						'CVV2'  			=> $cvv, 
						'FIRSTNAME'  		=> $firstName, 
						'LASTNAME'  		=> $lastName, 
						'STREET'  			=> '707', 
						'CITY'  			=> 'Largo', 
						'STATE'  			=> 'FL',                     
						'COUNTRYCODE'  		=> 'US', 
						'ZIP'  				=> '33770', 
						'AMT'  				=> $total_rm, 
						'CURRENCYCODE' 	 	=> 'USD', 
						'DESC' 				=> 'Testing Payments Pro'
						);

	// Loop through $request_params array to generate the NVP string.
	$nvp_string = '';
	foreach($request_params as $var=>$val)
	{
		$nvp_string .= '&'.$var.'='.urlencode($val);    
	}

	// Send NVP string to PayPal and store response
	$curl = curl_init();

	curl_setopt($curl, CURLOPT_VERBOSE, 1);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	curl_setopt($curl, CURLOPT_URL, $api_endpoint);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $nvp_string);
	$result = curl_exec($curl);
	curl_close($curl);
	$arr= NVPToArray($result);
	
	if($arr['ACK']=='Success'){
		
		$amount 		= $arr['AMT'];
		$paymentStatus 	= $arr['ACK'];
		$transactionID  = $arr['TRANSACTIONID'];
		$date  			= date("Y-m-d H:i:s");

		$booking_order_data = array
								(
								'user_id' 			=> $user_id, 
								'name' 				=> $_REQUEST['user_name'], 
								'email' 			=> $_REQUEST['user_email'],
								'phone' 			=> $_REQUEST['user_contact'], 
								'identity_type' 	=> $_REQUEST['identity_type'], 
								'identity_id' 		=> $_REQUEST['identity_id'], 
								'status' 			=> $paymentStatus,
								'processing_fee' 	=> $booking_cart['processing_fee'],
								'insurance_fee' 	=> $booking_cart['insurance'],
								'round_trip' 		=> $booking_cart['round_trip'],
								'date_created' 	    => $date, 
								);
		                

		$booking_res = $wpdb->insert('booking_orders',$booking_order_data);
		
		if($booking_res){

				$booking_id = $wpdb->insert_id;

			

				$booking_order_meta_data = array
								(
								 
								'booking_id'         	  => $booking_id, 
								'trip_type'      	      => 'departure', 
								'trip_id' 			      => $booking_cart['departure_data']['trip_id'],
								'origin_name'		      => $booking_cart['departure_data']['origin_name'],  
								'total_seats_amount'      => $booking_cart['total_departure_price'], 
								'processing_fee'          => $booking_cart['processing_fee'],
								'insurance_fee'           => $booking_cart['insurance'],
								'no_of_seats'             => $booking_cart['departure_data']['seatselect'],	
								'dropping_name'    	      => $booking_cart['departure_data']['dropping_name'], 
								'boarding_name'	    	  => $booking_cart['departure_data']['boarding_name'], 			
								'destination_name'	      => $booking_cart['departure_data']['destination_name'],
								'boarding_point_checkbox' => $booking_cart['departure_data']['boarding_point_checkbox'],
								'travels'	              => $booking_cart['departure_data']['travells'],
								'trip_date'			      => $booking_cart['departure_data']['date_select'],
								           
								);
						
            
	              $wpdb->insert('booking_orders_meta',$booking_order_meta_data);
                //$wpdb->last_query;
              
			if($booking_cart['round_trip']==true) {
				$booking_order_meta_data = array
								(
								
								'booking_id'      	      => $booking_id, 
								'trip_id' 			      => $booking_cart['return_data']['trip_id'], 
								'trip_type'      	      => 'return', 
								'total_seats_amount'      => $booking_cart['total_return_price'],
								'origin_name'		      => $booking_cart['return_data']['origin_name'], 
								'processing_fee'          => $booking_cart['processing_fee'],
								'insurance_fee'           => $booking_cart['insurance'],
								'no_of_seats'             => $booking_cart['return_data']['seatselect'], 
								'dropping_name'        	  => $booking_cart['return_data']['dropping_name'], 
								'boarding_name'		      => $booking_cart['return_data']['boarding_name'], 			
								'destination_name'	      => $booking_cart['return_data']['destination_name'],
								'travels'	              => $booking_cart['return_data']['travells'],
								'boarding_point_checkbox' => $booking_cart['return_data']['boarding_point_checkbox'], 
								'trip_date'		      	  => $booking_cart['return_data']['date_select'],           
								);
						

				$wpdb->insert('booking_orders_meta',$booking_order_meta_data);


			}



			$booking_order_transation_data = array
								(
								'user_id'          	=> $user_id, 
								'booking_id'      	=> $booking_id, 
								'card_number' 		=> $_POST['card_number'], 
								'total_amount'    	=> $amount,  
								'transaction_id'    => $transactionID, 
								'status'            => $paymentStatus, 
								'date'         		=> $date, 
								            
								);

			$res =  $wpdb->insert('order_transactions',$booking_order_transation_data);
			//echo $wpdb->last_query; die;	
			$bookingConfirmationPageLink = get_permalink( get_option('booking_confirmation_page_link') );
         	$bookingPageLink = get_permalink( get_option('booking_page_link') );

            if(!empty($res)){
                
             	$response=array('redirect_url'=>$bookingConfirmationPageLink.'?txn_id='.$transactionID.'&booking_id='.$booking_id,'status'=>'success','message'=>'Your booking has been successfully done.');
             	echo json_encode($response); die;
             	 
            }else{
             	$response=array('status'=>'failure','redirect_url'=>$bookingPageLink,'message'=>'Your transaction could not process.');
             	echo json_encode($response); die;
            }				
		}else{
			$response=array('status'=>'failure','redirect_url'=>$bookingPageLink,'message'=>'Your transaction could not process.');

            echo json_encode($response); die;
		}

	}else{
        $arr=array('message'=>'Transaction could not complete.','status'=>'failure','redirect_url'=>$bookingPageLink);
        echo json_encode($arr); die;

	}

}
function booking_detail_page(){
	return '
		<div class="busticket-booking-history-header">
			<div class="busticket-main-container">
				<h2 class="history-thanks">
					<i class="fas fa-bus icon-circle"></i>Thank you for choosing <strong>BUSCHARTER</strong> <span class="history-booking-date">Booking Date: 12-06-2018</span>
				</h2>
				
			</div>
		</div>
		<section>
			<div class="busticket-main-container">
				<a class="history-back" href="'.get_permalink( get_option('booking_history_page_link') ).'"><i class="fa fa-long-arrow-alt-left" aria-hidden="true"></i> Back</a>
				<div class="booking-history-half-width">
					<div class="busticket-bus-details">
						<ul class="bus-travel-loc busticket-bus-sec">
							<li class="bus-travel-loc-li">
								<span class="bus-travel-time">KKKL Express</span>
								<span class="bus-type">Volvo A/C Seater Semi Sleeper (2+2)</span>
							</li>						
							<li class="bus-travel-loc-li busticket-sec-right">
								<label class="bus-travel-time">Booking ID - <span class="bus-booking-id">BUS0112244556</span></label>
								
							</li>
						</ul>
						<ul class="bus-travel-loc">
							<li class="bus-travel-loc-li">
								<span class="bus-travel-time">09:30 AM</span>
								<label class="bus-travel-destination">Genting Highlands</label>
							</li>
							<li class="bus-travel-loc-li busticket-sec-center">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="83px" height="17px">
									<image  x="0px" y="0px" width="83px" height="17px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFMAAAARCAQAAAALK1jsAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiBhoRAiFEB+npAAABcElEQVRIx83Wv0vUcRzH8cedNRzYQTck0WA4hpPe4BIUjrV0YkO5BUHgUIvilJPkIBgS4tBfIJwgtIU3eFBEP4YQGoQQt+AsOE6Qu+4aPOLULxR8PuD3M74+H57v5/D+vD+fTEeMVYJBd910VV5W3Q+7NlWhHMzPRNOcs4CGlhb6XJSVs+uhD+nRzDnEdxM9YcFbbBlPj2ZBzbbPGr1seQ9QCNe8EMWSl1j05kx+3R2PvA7FZyNpTmEgIW/jcTg+liZkErI+TjTCOWuu4ldC3sFaOD5Wb1Y9MWznFO+3K3ifHs1rmDefuDdgL1izNOsFWLTuI/i0Ubx34DIoWDMJ7hs6e7Jc7HJa/yqUVKdcLP1nnVhzc9qKujljprpR24xLnmOk/CWUH+sKHeGbV572JEvdJmiH42P1ZhOjVnoey5yKGo6HUko036m4bdqOr3+zG26hYj8cH++HdDwjT474Dvo10vOmw7Kfp5JnhjRjoP8ABBxiIqfCMdYAAAAASUVORK5CYII=" />
								</svg>
								<span class="bus-travel-time">4h 20m</span>
							</li>
							<li class="bus-travel-loc-li busticket-sec-right">
								<span class="bus-travel-time">01:50 PM</span>
								<label class="bus-travel-destination">Johor Jaya</label>
							</li>
						</ul>
						<div class="busticket-confirmed-booking">Booking Confirmed</div>
					</div>
					<div class="busticket-passenger-details">
						<table class="busticket-passenger-details-table">
							<thead>
								<tr>
									<td class="busticket-passenger-details-header">Passengers</td>
									<td class="busticket-passenger-details-header">Seat Number(s)</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="busticket-passenger-details-value">Passenger 1</td>
									<td class="busticket-passenger-details-value">2</td>
								</tr>
								<tr>
									<td class="busticket-passenger-details-value">Passengers 2</td>
									<td class="busticket-passenger-details-value">3</td>
								</tr>
								<tr>
									<td class="busticket-passenger-details-value">Passengers 3</td>
									<td class="busticket-passenger-details-value">5</td>
								</tr>
								<tr>
									<td class="busticket-passenger-details-value">Passengers 4</td>
									<td class="busticket-passenger-details-value">6</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="busticket-passenger-total">
						<label class="busticket-passenger-details-header">Transaction Amount</label>
						<span class="busticket-passenger-details-value">RM 220</span>
					</div>
					
				</div>
				<div class="booking-history-half-width">
					<h2 class="history-manage-title">Manage Booking</h2>
					<ul class="busticket-manage-option">
						<li class="busticket-manage-optionli">
							<a href="#">
								Print Ticket
								<svg class="history-manage-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="21px">
									<image  x="0px" y="0px" width="20px" height="21px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAVCAQAAADs3AYjAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiBhoQGzpUoOMqAAABXElEQVQoz43Sv0vUcRgH8Nf3e4e2uIWiHibcYBIEQpa1SUNBs9AU2B+QQ6CDY6MNNtTg7KRTWzpEkxBNEQoS2dCg5WWS8tVTz4/D3fd753mF7wc+v543PO/383lI0W9TaIrvutN0VNvzdpQ8FWuvvRzKmRfrdA4TKmLN6BCMV49psqDk9AJxz1+FeulRr1wX+ybOpEAQFB37asL7yJgF6xaduKEiNBBzIm/tmXLPYxJz/o1RzzAjIXj0H+I7wbCikKeFiToepmvskrg0MY9D3W75rVM45zrCL10+2IdTw2Yv/HJjPDcosGUZL/xpUS9yYBJLtiK3ffTDVSseeCJSyUQlFqwYsK/XXejzWrDoprKSzVrs2la05Mgb1+pFXvrZ0uyu6brrKjYMWFNWrt3b5dyxkY5JPpPdY919bZnGnMRnPY19hB19hnxxJRu0IDGiq7kbHVZb9vCTtirhDBndfe4QVZg6AAAAAElFTkSuQmCC" />
								</svg>
							</a>
						</li>
						<li class="busticket-manage-optionli">
							<a href="#">
								Cancel Booking
								<svg class="history-manage-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px">
									<image  x="0px" y="0px" width="20px" height="20px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABjFBMVEW+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER3AFCHAFCHAEyLAEyG+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2/EyHAFCHAFCG+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER2+ER24AAe2AAK/EyG+Eh62AATFKzXKPEa0AAC/ER+/EiCzAADJO0XGLTi2AAW4BArELjT+/f3////GNDuxAACwAADFMjjELzW1AATJPUT++/zGNDq/Eh/++PrJPkXHOT///v//+/3GNTv++vvIPEK/ER7GOD3//f/++vy/HiS+GiD++fvIPEHHOT7+/P378PL77vH//v7IPULBICn45Ob56OnDJC7AGyX45OX55+jBHij99fj88/X+/PzHOD7BJSv//P3HNz3//P62AQXIOkHIO0HIPEO2AQS3BAnFMTfIO0LHOD+3AwjFKzbKPkfGLzm2AAG/EyC3AAYfEtJ6AAAAMXRSTlMAWaTW79emWwNU296Nk46VS1Lt8QRfq7Xi9N/jrbdYYwLwBlCclJpc4ORiBa7asGUI4LrC5gAAAAFiS0dEQ2fQDWIAAAAHdElNRQfiBhoQGBCkNnk/AAABPklEQVQY00XQ+T8CQQAF8IkcFXKTI3LLudXS7kbx7KywSIcK5b6v3PeRf9xOW7zf5vv5zHzePEJyMRQVG40lpWXl5C8mM5ePxVCwCpfbwzPiPW5XpW5VE5NeQdSUl3xT034rs+rAzCzmZJHnRaoA84EaDWuDC8DiElUlqiwDK8G6emLiJGE1hLWwLCsRICpIXANp5PgYXY8jkdzYBLZojOeaiIVjmkpjewe7e8y4ZmJjVVR5/wA4PKIqq2bTUZKPT4DTMzmPLZqJNBzB+QUuryjr20ratMs0nACukxmkc9pO7Jzk0ywUpfJNHLcprVIH6XTc3QOhByqqNJUBHp9sXYR0P78Ar1oX7ek3QHm3s89b/R+fAuvHi4L3y9+jz9Tr+s7q02XdP32FQfsHCiMPOv+nH3IOjxgd5tGx8dzxF+7jUaaQy6U+AAAAAElFTkSuQmCC" />
								</svg>
							</a>
						</li>
						<li class="busticket-manage-optionli">
							<a href="#">
								View Cancellation Policy 
								<svg class="history-manage-img eye-margin-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="11px">
									<image  x="0px" y="0px" width="20px" height="11px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAQAAADVAGXIAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiBhoQGScFkO1xAAAA4klEQVQY023QMSvEARzG8Y8JGzHehVeDvIDriJzh5FaKiShCsmMwyHC8DZyTMuEGQjFQ/8t2LH6W/12uPOO35/n168vflFyqSyTqKkr+zZJvP47lFBTklP34stheGvIsrIJDNTVHOnVZE54MNGtjwoUekHiRkXWrCHpVhFGYErbSyYpA0RzoTum2MEm4br1QVUYI7Dtt8RvBhLCTgmWBGdMImyndFcZhRKjqAx9eDRj05h30uxKGm6ezHoV1cODenT102BAeZNoVLWgIZXkFBXknQsP8/9JnnUt8+pQ4SwWl+QXSJ1DjNiRNRwAAAABJRU5ErkJggg==" />
								</svg>
							</a>
						</li>
						<li class="busticket-manage-optionli">
							<a href="#">
								Call <strong>BUSCHARTER</strong>
								<svg class="history-manage-img call-margin-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px">
									<image  x="0px" y="0px" width="20px" height="20px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAQAAAAngNWGAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiBhoQGxZmeI/JAAABSklEQVQoz33SPUjVYRTH8U8STb0r5N7SVktLL9IUBEFpSFuZBKJBhTQFhjrUUA0GJTi41JKNQSC0Njh5Q2opgpYclJaGomv313D//rv/ey/9pvPyPed5zvMcumlcfHSpMzEo1uwr/T7j3olfjrdio2LBmrq+Svkuy2Jy2z0vboNVcRBcMGEHuPoP/W6h7PHBJpgVMQauiAFoOFuCveJiYT8UT8FLG1B3uQTnpeWep8QE9ovrfPaiSMyJ05VxZm2BN1aZ9rMIx6O2Z9vd7OWaRtO5BZ6o29mG3jeEfjfgsT96wLqa/+qHV+CQeFtGjxiztwqeEKPgsPikB+dEfCu+oNSdcuID1sWiuIua6K2i8+JkYT8QU4X9XsOeKvpMjHSZoGalPTQpljvA5752Vh+z1XIszGwvRafuiXht2FFLLWvSVTd9EfHbmWbgLzryam0S+HJNAAAAAElFTkSuQmCC" />

								</svg>
							</a>
						</li>
					</ul>
				</div>
			</div>		
		</section>
	';
}
add_shortcode("booking_detail","booking_detail_page");

/*
* Show list of booking history
*/
function booking_history_page(){



	$current_user = wp_get_current_user();	

	  $name = $current_user->user_login;
	  $firstname = strtok($name, ' ');	
      $lastname = strstr($name, ' ');
	
    
    if(empty($current_user->ID)){
    	$data .='
    		<div class="busticket-profile">
				<div class="busticket-main-container">
		    		<div class="login-again">
						<div class="busticket-profile-user text-center">
							<div class="broken-bus-img">
								<img src="'.bus_ticketing_plugin_url().'/images/bus-broke.jpg" title="bus" alt="bus" />
							</div>
						    <h3 style="text-align:center;">Oops! Something went wrong...</h3>
							<p>Please <a href="'.get_permalink( get_option('login_page_link') ).'">login</a> to continue with your profile updation.</p>
						</div>
		    		</div>								
				</div>
			</div>
    	';
    }else{
	    $phone = get_the_author_meta( 'phone', $current_user->ID );
	    $phone_code = get_the_author_meta( 'phone_code', $current_user->ID );

		$data .='
			<div class="busticket-profile">
				<div class="busticket-main-container">
					<div class="busticket-profile-user">
						<div class="busticket-profile-icon">
							<i  class="fas fa-user-circle" ></i>
						</div>
						<div class="busticket-profile-mail">
							<h3>'.$firstname.' '.$lastname.'</h3>
							<p>'.$current_user->user_email.'</p>
						</div>
					</div>
					
					 <!-- Tab links -->
					<ul class="tab-profile-options">
						<li><a data-show="profile-info" href="javascript:void(0)" class="active" ><i class="fas fa-cog"></i>Settings</a></li>
						<li><a data-show="booking-trips" href="javascript:void(0)" ><i class="fas fa-ticket-alt"></i>My Bookings</a></li>						
					</ul>
				</div>
			</div>
			
			
			
			<section>
				<div class="profile-container-fluid">
					<div class="busticket-main-container">
						<div class="busticket-profile-form">
							<!-- Tab content -->
							<div id="booking-trips" class="tabcontent">
								<div class="busticket-past-trip">
									<h3>PAST TRIPS <span class="bustrips">7 Trips</span></h3>
								</div>
								<div class="desktop-search">
									<table class="busticket-table" cellspacing="0">
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">22</h2>
												<p class="busticket-booked-day">Wed <span>Jun 18</span></p>
											</td>
											<td class="busticket-table-body">
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
											</td>
											<td class="busticket-table-body">
												<span class="busticket-confirmed-booking">BOOKING CONFIRMED</span>
												<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
												<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
											</td>
											<td class="busticket-table-body">
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">22</h2>
												<p class="busticket-booked-day">Wed <span>Jun 18</span></p>
											</td>
											<td class="busticket-table-body">
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
											</td>
											<td class="busticket-table-body">
												<span class="busticket-canceled-booking">BOOKING Cancelled</span>
												<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
												<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
											</td>
											<td class="busticket-table-body">
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">20</h2>
												<p class="busticket-booked-day">Wed <span>Jun 18</span></p>
											</td>
											<td class="busticket-table-body">
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
											</td>
											<td class="busticket-table-body">
												<span class="busticket-confirmed-booking">BOOKING CONFIRMED</span>
												<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
												<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
											</td>
											<td class="busticket-table-body">
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">20</h2>
												<p class="busticket-booked-day">Wed <span>Jun 18</span></p>
											</td>
											<td class="busticket-table-body">
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
											</td>
											<td class="busticket-table-body">
												<span class="busticket-confirmed-booking">BOOKING CONFIRMED</span>
												<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
												<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
											</td>
											<td class="busticket-table-body">
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">20</h2>
												<p class="busticket-booked-day">Wed <span>Jun 18</span></p>
											</td>
											<td class="busticket-table-body">
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
											</td>
											<td class="busticket-table-body">
												<span class="busticket-confirmed-booking">BOOKING CONFIRMED</span>
												<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
												<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
											</td>
											<td class="busticket-table-body">
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">20</h2>
												<p class="busticket-booked-day">Wed <span>Jun 18</span></p>
											</td>
											<td class="busticket-table-body">
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
											</td>
											<td class="busticket-table-body">
												<span class="busticket-confirmed-booking">BOOKING CONFIRMED</span>
												<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
												<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
											</td>
											<td class="busticket-table-body">
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">20</h2>
												<p class="busticket-booked-day">Wed <span>Jun 18</span></p>
											</td>
											<td class="busticket-table-body">
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
											</td>
											<td class="busticket-table-body">
												<span class="busticket-canceled-booking">BOOKING Cancelled</span>
												<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
												<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
											</td>
											<td class="busticket-table-body">
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
									</table>
								</div>
								
								<div class="mobile-search">
									<table class="busticket-table" cellspacing="0">
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">22 Fri Jun 18</h2>
												
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
												<div class="busticket-booking-id-mobile">
													<span class="busticket-confirmed-booking">BOOKING CONFIRMED</span>
													<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
													<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
												</div>
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">22 Fri Jun 18</h2>
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
												<div class="busticket-booking-id-mobile">
													<span class="busticket-canceled-booking">BOOKING Cancelled</span>
													<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
													<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
												</div>
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>



										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">20 Wed Jun 18</h2>
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
												<div class="busticket-booking-id-mobile">
													<span class="busticket-canceled-booking">BOOKING Cancelled</span>
													<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
													<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
												</div>
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">20 Wed Jun 18</h2>
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
												<div class="busticket-booking-id-mobile">
													<span class="busticket-confirmed-booking">BOOKING CONFIRMED</span>
													<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
													<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
												</div>
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">20 Wed Jun 18</h2>
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
												<div class="busticket-booking-id-mobile">
													<span class="busticket-confirmed-booking">BOOKING CONFIRMED</span>
													<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
													<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
												</div>
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
										<tr>
											<td class="busticket-table-body">
												<h2 class="busticket-booked-date">20 Wed Jun 18</h2>
												<p class="busticket-booking-location">Genting Highlands - Johor Jaya</p>
												<div class="busticket-booking-id-mobile">
													<span class="busticket-canceled-booking">BOOKING Cancelled</span>
													<h5 class="busticket-booking-id">Booking Id: TRNAF24V2AXFY4</h5>
													<h6 class="busticket-booking-date-day">Booked on Tue, Jun 19, 2018</h6>
												</div>
												<a href="'.get_permalink( get_option('booking_detail_page_link') ).'" class="busticket-manage-booking"><i class="fas fa-cog"></i><p>MANAGE BOOKING</p></a>
											</td>
										</tr>
									</table>
								</div>
							</div>

							

							<div id="profile-info" class="tabcontent" style="display:block" >
								<div class="busticket-profile-started">	
									<div class="busticket-form-login">
										<h2 class="busticket-form-information">USER INFORMATION</h2>
									</div>
									
									<div class="ticket">
										<form class="busticket-personal-form" name = "bus_profile_form" id = "bus_profile_form" data-url="'.esc_url(admin_url( 'admin-ajax.php' )).'" action = "" method = "post" >

											<div class="loader_tickecting" ></div>
											<div class="error_ticketing_message" ></div>
											<div class="success_ticketing_message" ></div>

											<div class="busticket-form-row">
												<div class="busticket-profile-form-half-width">
													<label class="busticket-form-label">Email</label>
													<div class="busticket-input-sec">
														<input class="busticket-input" placeholder="" type="text" name="email" id="email" value="'.$current_user->user_email.'" >
													</div>
												</div>
												<div class="busticket-profile-form-half-width">
													<!--<h3 class="busticket-ticket-label">Password</h3>
													<a class="bus-ticktet-label" href="javascript:void();">Change Password</a>-->
												</div>
											</div>
											
											<div class="busticket-form-row">
												<div class="busticket-profile-form-half-width">
													<label class="busticket-form-label">First Name<span class="busticket-important"></span></label>
													<div class="busticket-input-sec">
														<input class="busticket-input" placeholder="" type="text" name="first_name" id="first_name" value="'.$firstname.'" >
														
													</div>
												</div>
												
												
												<div class="busticket-profile-form-half-width">
													<label class="busticket-form-label">Last Name<span class="busticket-important"></span></label>
													<div class="busticket-input-sec">
														<input class="busticket-input" placeholder="" type="text" name="last_name" id="last_name" value="'.$lastname.'" >
														
													</div>
												</div>
											</div>
											<div class="busticket-form-row">										
													
												<div class="busticket-profile-form-half-width">
													<label class="busticket-form-label">Phone Number<span class="busticket-important"></span></label>
													<div class="busticket-input-sec">
														<div class="busticket-number-area">
															<select name="phone_code" id="phone_code" class="busticket-select" >';

															/*$selected = "";
															if($phone_code=="+91"){
																$selected = " selected=selected ";
															}
															$data .= '<option '.$selected.' value="+91">+91</option>';

															$selected = "";
															if($phone_code=="+01"){
																$selected = " selected=selected ";
															}
															$data .= '<option '.$selected.' value="+01">+01</option>';

															$selected = "";
															if($phone_code=="+92"){
																$selected = " selected=selected ";
															}
															$data .= '<option '.$selected.' value="+92">+92</option>';

															$selected = "";
															if($phone_code=="+42"){
																$selected = " selected=selected ";
															}
															$data .= '<option '.$selected.' value="+42">+42</option>';

															$selected = "";
															if($phone_code=="+60"){
																$selected = " selected=selected ";
															}
															$data .= '<option '.$selected.' value="+60">+60</option>';

															$selected = "";
															if($phone_code=="+58"){
																$selected = " selected=selected ";
															}
															$data .= '<option '.$selected.' value="+58">+58</option>*/

                                  
                                                           $selected = "";
															if($phone_code=="+01"){
																$selected = " selected=selected ";
															}
                                                            $data .= '<option '.$selected.' value="+01">+01</option>';  
                                        
					                                        $selected = "";
																				if($phone_code=="+7"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+7">+7</option>';

															$selected = "";
																				if($phone_code=="+20"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.'value="+20">+20</option>';

															$selected = "";
																				if($phone_code=="+32"){
																					$selected = " selected=selected ";
																				}	
															$data .= '<option '.$selected.' value="+32">+32</option>';	

															$selected = "";
																				if($phone_code=="+33"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+33">+33</option>';	

															$selected = "";
																				if($phone_code=="+36"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+36">+36</option>';	

															$selected = "";
																				if($phone_code=="+39"){
																					$selected = " selected=selected ";
																				}										
															$data .= '<option '.$selected.' value="+39">+39</option>';

															$selected = "";
																				if($phone_code=="+42"){
																					$selected = " selected=selected ";
																				}	
															$data .= '<option '.$selected.' value="+42">+42</option>';	

															$selected = "";
																				if($phone_code=="+43"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+43">+43</option>';	

															$selected = "";
																				if($phone_code=="+44"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+44">+44</option>';

															$selected = "";
																				if($phone_code=="+46"){
																					$selected = " selected=selected ";
																				}	
															$data .= '<option '.$selected.' value="+46">+46</option>';	

															$selected = "";
																				if($phone_code=="+47"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+47">+47</option>';	

															$selected = "";
																				if($phone_code=="+48"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+48">+48</option>';	

															$selected = "";
																				if($phone_code=="+51"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+51">+51</option>';	

															$selected = "";
																				if($phone_code=="+53"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+53">+53</option>';	

															$selected = "";
																				if($phone_code=="+54"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+54">+54</option>';	

															$selected = "";
																				if($phone_code=="+55"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+55">+55</option>';

															$selected = "";
																				if($phone_code=="+56"){
																					$selected = " selected=selected ";
																				}	
															$data .= '<option '.$selected.' value="+56">+56</option>';	

															$selected = "";
																				if($phone_code=="+58"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+58">+58</option>';	

															$selected = "";
																				if($phone_code=="+60"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+60" selected="">+60</option>';	

															$selected = "";
																				if($phone_code=="+61"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+61">+61</option>';	

															$selected = "";
																				if($phone_code=="+65"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+65">+65</option>';	

															$selected = "";
																				if($phone_code=="+81"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+81">+81</option>';

															$selected = "";
																				if($phone_code=="+86"){
																					$selected = " selected=selected ";
																				}	
															$data .= '<option '.$selected.' value="+86">+86</option>';	

															$selected = "";
																				if($phone_code=="+91"){
																					$selected = " selected=selected ";
																				}  
															$data .= '<option '.$selected.' value="+91">+91</option>';	

															$selected = "";
																				if($phone_code=="+92"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+92">+92</option>';	

															$selected = "";
																				if($phone_code=="+93"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+93">+93</option>';	

															$selected = "";
																				if($phone_code=="+94"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+94">+94</option>';	                                        
						                                     $selected = "";
																				if($phone_code=="+213"){
																					$selected = " selected=selected ";
					 														    }                                                            		
															$data .= '<option '.$selected.' value="+213">+213</option>';

															$selected = "";
																				if($phone_code=="+227"){
																					$selected = " selected=selected ";
																				}	
															$data .= '<option '.$selected.' value="+227">+227</option>';	

															$selected = "";
																				if($phone_code=="+354"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+354">+354</option>';	

															$selected = "";
																				if($phone_code=="+420"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+420">+420</option>';

															$selected = "";
																				if($phone_code=="+852"){
																					$selected = " selected=selected ";
																				}	
															$data .= '<option '.$selected.' value="+852">+852</option>';	

															$selected = "";
																				if($phone_code=="+880"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+880">+880</option>';	

															$selected = "";
																				if($phone_code=="+973"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+973">+973</option>';	

															$selected = "";
																				if($phone_code=="+974"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+974">+974</option>	';

															$selected = "";
																				if($phone_code=="+1242"){
																					$selected = " selected=selected ";
																				}						
															$data .= '<option '.$selected.' value="+1242">+1242</option>';	

															$selected = "";
																				if($phone_code=="+1684"){
																					$selected = " selected=selected ";
																				}
															$data .= '<option '.$selected.' value="+1684">+1684</option>
					                                                              

															</select>

															<i class="fas fa-caret-down"></i> 
														</div>
														<input class="busticket-input" placeholder="" type="text" name="phone" id="phone" value="'.$phone.'" >
													</div>
												</div>
											
											<div class="busticket-profile-form-half-width">											
												<button class="busticket-button" id="profile_button" type="button" >Save Details</button>
											</div>
												
											</div>
										</form>
									</div>
								</div>	
							</div> 
								
						</div>
					</div>
				</div>
			</section>
		';		
	}
	return $data;
}
add_shortcode("booking_history","booking_history_page");

// remove admin bar on front-end
add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

// Add a Login hyperlink to the secondary navigation menu if the user is logged-out
function add_login_logout_register_menu( $items, $args ) {
	if ( $args->theme_location == 'secondary-menu' ) {
		if ( is_user_logged_in() ) {
			$items .= '<li><a href="' . wp_logout_url(home_url()) . '">' . __( 'Log Out' ) . '</a></li>';
		} else {
			$items .= '<li><a href="'.get_permalink( get_option('login_page_link') ).'">' . __( 'Login In' ) . '</a></li>';
			$items .= '<li><a href="'.get_permalink( get_option('signup_page_link') ).'">' . __( 'Sign Up' ) . '</a></li>';
		}
	}
	return $items;
} 

add_filter( 'wp_nav_menu_items', 'add_login_logout_register_menu', 199, 2 );


function verify_activation_link(){
	global $wpdb;
	$userId = "";
	$error = "Invalid email verification link.";
	$key = urldecode(trim($_GET['key']));
	$userID = base64_decode(urldecode(trim($_GET['user'])));
	if($key!="" && $userID!=""){
		
		$users = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."users WHERE ID='".$userID."' and user_activation_key = '".$key."' limit 0,1  ");
		
		if(!empty($users)){
			foreach($users as $user){
				$userId = $user->ID;
				
			}
			if(!empty($userId)){
				$wpdb->query( 
			        $wpdb->prepare( "
			            UPDATE $wpdb->users 
			            SET user_activation_key = %d 
			            WHERE ID = %d",
			            "", 
			            $userId
			        )
			    ); 
		        $error = "Your email has been verified. Please <a href='".get_permalink( get_option('login_page_link') )."'>login in website</a>";
			}
		}
	}

	$data = '
       <div class="busticket-profile">
			<div class="busticket-main-container">
	    		<div class="login-again">
					<div class="busticket-profile-user text-center">
						<div class="broken-bus-img">
							<img src="'.bus_ticketing_plugin_url().'/images/bus-broke.jpg" title="bus" alt="bus" />
						</div>
						<p>'.$error.'</p>
					</div>
	    		</div>								
			</div>
		</div>	
	';
	return $data;


}
add_shortcode( 'email_verification', 'verify_activation_link');

?>