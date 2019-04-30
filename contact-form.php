<?php

/*
Plugin Name: Contact Form plugin

Version: 1.0
Author: Mobilyte team
Text Domain: Contact-Form
*/

// global variable for plugin



/**
 * Return the plugin URL
 * @return string Plugin URL
 */


function contact_form_plugin_url(){
    return plugin_dir_url( __FILE__ );
}

function contact_form_backend_js_css(){

	wp_enqueue_style( 'contact_style', contact_form_plugin_url().'css/style.css' );
    wp_enqueue_script('contact_jquery_min',contact_form_plugin_url().'js/jquery.min.js');
    wp_enqueue_script( 'contact_js', contact_form_plugin_url().'js/plugin.js' );
    //wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/my-ajax-script.js', array('jquery') );
    wp_localize_script( 'contact_jquery_min', 'my_plugin_ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}

add_action( 'admin_enqueue_scripts', 'contact_form_backend_js_css' );

function contact_form_frontend_js_css(){

    wp_enqueue_script('contact_jquery_min',contact_form_plugin_url().'js/jquery.min.js');
    wp_enqueue_script( 'contact_js', contact_form_plugin_url().'js/plugin.js' );
    //wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/my-ajax-script.js', array('jquery') );
    wp_localize_script( 'contact_jquery_min', 'my_plugin_ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}

add_action( 'wp_enqueue_scripts', 'contact_form_frontend_js_css' );

/*
* admin menu pages
*/
function contact_form_plugin_top_menu(){
   add_menu_page('contact form', 'contact form', 'manage_options', __FILE__, 'contact_form_render_plugin_page','dashicons-admin-plugins');
   add_submenu_page(__FILE__, 'Add New', 'Add New', 'manage_options', __FILE__.'/add-new', 'contact_form_render_add_new_page');
  add_submenu_page(null, 'Edit', 'Edit', 'manage_options', __FILE__.'/edit-form', 'contact_form_render_edit_page');
   //add_submenu_page( 'options-general.php', 'all', 'all', 'manage_options',  __FILE__, 'show_all_form_fields');
}

 //////////////////////////option Page-> contact form //////////////////////////////////////////////


 
 
 function contact_form_render_plugin_page(){
 	global $wpdb;

  ?>
   <div class='wrap'>
    <h2>Contact Forms</h2>

   <?php
    my_render_list_page();
  
   echo do_shortcode('[Contact-Form id= "'.$_REQUEST['form_ID'].'" Title = "'.$_REQUEST['editform_title'].'"]');
    ?>
   </div>
  <?php
 }


 function contact_form_render_add_new_page(){

 echo do_shortcode('[add_new_form]');

 }


function contact_form_render_edit_page(){

 echo do_shortcode('[my_edit_form]');

 }
add_action('admin_menu','contact_form_plugin_top_menu');

 //////////////////////////option Page-> contact form ends//////////////////////////////////////////////



//////////////////////////Option Add New Page//////////////////////////////////////////////
function AddNewForm_html(){
 	
   ob_start();

    include (dirname(__FILE__)."/template-parts/add-new-form.php");
   

    $response = ob_get_clean();	

	return $response;


}
 add_shortcode('add_new_form','AddNewForm_html');
//////////////////////////Option Add New Page//////////////////////////////////////////////

/****************************Ajax Request For AddNewForm**********************************************/

add_action('wp_ajax_AjaxAddNewForm', 'AjaxAddNewForm');
add_action('wp_ajax_nopriv_AjaxAddNewForm', 'AjaxAddNewForm');
function AjaxAddNewForm(){

 global $wpdb;

    if (!empty($_POST)) {
       
        $table_new = 'wp_formData';
        $data = array(

        	  'wp_form_title'    => $_POST['cf_title'],
            'wp_textarea'      => $_POST['wp_textarea']
        );
	  }
    $success_newform = $wpdb->insert( $table_new, $data );

    if($success_newform){

		$response = array("status"=>1,"message"=>"data save Succesfully.");
	}else{
		$response = array("status"=>0,"message"=>"oops do not save!.");
	} echo json_encode($response); die;
    
}
/****************************Ajax Request For AddNewForm**********************************************/



/****************************Function For Form Listings**********************************************/

function my_render_list_page(){
global $wpdb;
   $table_lists = $wpdb->get_results( "SELECT * FROM wp_formData ORDER BY date DESC " );

      $data = ' <form id="formListings" name="formListings" method="POST">
                 <table><thead>
                 <tr>
                 <th>Title</th>&nbsp;
                    &nbsp;<th>Shortcode</th>&nbsp;
                    &nbsp;<th>Date</th>
                  </tr></thead><tbody>';
      foreach($table_lists as $key => $val){

           $data.=  '<tr>';
           $data.=  '<td>'. $val->wp_form_title.'</td>';
           $data.=  '<td>[my-shortcode id ="'.$val->id.'" title = "'.$val->wp_form_title.'" ]</td>';
           $data.=  '<td>'. $val->date.'</td>';
           $data.=  '<td><span class="edit"><a href="http://localhost/plugin-practic/wp-admin/admin.php?page=contact-Form%2Fcontact-form.php%2Fedit-form&Post='.$val->id.'&title='.$val->wp_form_title.'">Edit</a></span></td>';
            $data.=  '</tr>';  
           
      }   
      $data.='</tbody></table></form>';
      echo $data;
}

/****************************Function For Form Listings Ends**********************************************/

/****************************Html Shortcode For EditForm**********************************************/
function my_edit_page_html(){
  $id = $_REQUEST['Post'];
  $title = $_REQUEST['title'];
   
      global $wpdb;
      $table_lists = $wpdb->get_results( "SELECT wp_textarea FROM wp_formData WHERE (id='".$id."') " );
      include (dirname(__FILE__)."/template-parts/edit-form.php");
   
   
      foreach($table_lists as $key => $val){ 
      $data = '<form id="editform" name="editform" method="POST">
                 <input type="text" name="editform_title" value="'.$title.'" size="77" id="editformTitle" spellcheck="true" autocomplete="off">
                    <br><br><br>
                 <textarea rows="15" cols="80" class="insert-here" name="wp_textarea">'.$val->wp_textarea.'</textarea>              
                 <input type="hidden" name="action" value="AjaxEditForm">
                 <input type="hidden" name="form_ID" value="'.$id.'">
                 <br>
                 <input type="submit" class="button" id="submit_edit_form" value="Update">
                 <br>
                 <div class="update-succes-message"></div><br>
              </form>';        
                               
    }

      echo $data;
}
add_shortcode('my_edit_form','my_edit_page_html');
 
/****************************Html Shortcode For EditForm Ends**********************************************/



/****************************Ajax Request For EditForm**********************************************/
add_action('wp_ajax_AjaxEditForm', 'AjaxEditForm');
add_action('wp_ajax_nopriv_AjaxEditForm', 'AjaxEditForm');
function AjaxEditForm(){

  $id = $_REQUEST['form_ID'];
  $Title = $_REQUEST['editform_title'];
  $Textarea = $_REQUEST['wp_textarea'];

    global $wpdb;
 

    if (!empty($_POST)) {
         
      $table = $wpdb->prefix . 'formData'; 
      $success_newform = $wpdb->query("UPDATE $table SET 
      wp_form_title = '".$Title."', wp_textarea ='".$Textarea."'
      WHERE id = '".$id."'");
           
      if($success_newform){

        $response = array("status"=>1,"message"=>"data has been updated Succesfully.");
      }else{
        $response = array("status"=>0,"message"=>"oops do not update!.");
      } echo json_encode($response); die;
    }

}

/****************************Ajax Request For EditForm Ends**********************************************/


/**********************************Shortcode Generate*********************************************/
function Dynamic_Form_shortcode( $atts ) {
  $table_lists = $wpdb->get_results( "SELECT * FROM wp_formData WHERE (id='".$id."') " );
    $attributes = shortcode_atts(
        array(
            'id'    => $id,
            'Title' => $Title
        ), $atts );

        // $attributes['id'] is now the passed-in ID

        $html_out .= '<form id ="contact-Form " name ="contact-Form" method ="POST">';                       
                        print_r($_POST);
        $html_out .= '</form>';

return $html_out;

}
add_shortcode('Contact-Form', 'Dynamic_Form_shortcode');        
?>
