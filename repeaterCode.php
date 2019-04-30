<?php
function add_your_fields_meta_box() {
    	add_meta_box(
    		'your_fields_meta_box', // $id
    		'Custom Fields', // $title
    		'show_your_fields_meta_box', // $callback
    		null, // $screen
    		'advanced', // $context
    		'high' // $priority
    	);
    }
    add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );





function show_your_fields_meta_box() {

		global $post;
		$meta = get_post_meta( $post->ID, 'your_fields', true );


		$page_template = get_post_meta( $post->ID, '_wp_page_template', true );
		$post_type1=get_post_meta($post->ID,get_post_type(),true);
		//print_r($post_type1);

		$post_type = get_post_type( $post->ID );
		//echo $post_type;
		
		?>



<?php
add_action( 'add_meta_boxes', 'mb_add_custom_box' );
/* Do something with the data entered */
add_action( 'save_post', 'mb_save_postdata' );
/* Adds a box to the main column on the Post and Page edit screens */
function mb_add_custom_box() {
    add_meta_box(
        'mb_sectionid',
        __( 'My Repeater Fields', 'myplugin_textdomain' ),
        'mb_inner_custom_box',
        'slider');
}
/* Prints the box content */
function mb_inner_custom_box() {
    global $post;
    // Use nonce for verification
    wp_nonce_field( plugin_basename( __FILE__ ), 'mbMeta_noncename' );
    ?>
    <div id="meta_inner">
    <?php
    //get the saved meta as an array
    $songs = get_post_meta($post->ID,'songs',false);
    $c = 0;
    if ( count( $songs ) > 0 ) {
        if(!empty($songs)){
            foreach( $songs as $track_val ) {
                foreach( $track_val as $track ) {
                    if ( isset( $track['title'] ) || isset( $track['track'] ) ) {
                        printf( '<p>Title <input type="text" name="songs[%1$s][title]" value="%2$s" /> -- Description : <input type="text" name="songs[%1$s][track]" value="%3$s" /><span class="remove">%4$s</span></p>', $c, $track['title'], $track['track'], __( 'Remove Field' ) );
                        $c = $c +1;
                    }
                }
            }
        }    
    }
    ?>
<span id="here"></span>
<span class="add"><?php _e('Add Fields'); ?></span>
<script>
    var $ =jQuery.noConflict();
    $(document).ready(function() {
        var count = <?php echo $c; ?>;
        $(".add").click(function() {
            count = count + 1;
            $('#here').append('<p>Title <input type="text" name="songs['+count+'][title]" value="" /> -- Description : <input type="text" name="songs['+count+'][track]" value="" /><span class="remove">Remove Field</span></p>' );
            return false;
        });
        $(".remove").live('click', function() {
            $(this).parent().remove();
        });
    });
    </script>
</div><?php
}
/* When the post is saved, saves our custom data */
function mb_save_postdata( $post_id ) {
    // verify if this is an auto save routine. 
    // If it is our form has not been submitted, so we dont want to do anything
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;
    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( !isset( $_POST['mbMeta_noncename'] ) )
        return;
    if ( !wp_verify_nonce( $_POST['mbMeta_noncename'], plugin_basename( __FILE__ ) ) )
        return;
    // OK, we're authenticated: we need to find and save the data
    $songs = $_POST['songs'];
    update_post_meta($post_id,'songs',$songs);
}

?>






        function custom_settings_plugin_url(){
    return plugin_dir_url( __FILE__ );
}

function custom_settings_backend_js_css(){

    wp_enqueue_script('custom_jquery_min',custom_settings_plugin_url().'js/jquery.min.js');
    wp_enqueue_script( 'custom_js', custom_settings_plugin_url().'js/plugin.js' );
    
    wp_localize_script( 'custom_jquery_min', 'my_plugin_ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}

add_action( 'admin_enqueue_scripts', 'custom_settings_backend_js_css' );









    <tr class="empty-row screen-reader-text">
      <td>
        <input type="text" placeholder="Title" name="TitleItem[]" value="<?php if(get_option('TitleItem') != '') echo esc_attr( get_option('TitleItem') ); ?>"/></td>
      <td>
          <textarea placeholder="Description" cols="55" rows="5" name="TitleDescription[]" value="<?php if(get_option('TitleDescription') != '') echo esc_attr( get_option('TitleDescription') ); ?>"></textarea>
          </td>
      <td><a class="button remove-row" href="#">Remove</a></td>
    </tr>