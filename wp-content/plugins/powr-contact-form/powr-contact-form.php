<?php
    /**
     * @package POWr Contact Form
     * @version 1.0
     */
    /*
    Plugin Name: POWr Contact Form
    Plugin URI: http://www.powr.io
    Description: Create a custom Contact Form in minutes. Add the widget to your theme, or create a Contact Form on ANY page or post by using the shortcode [powr-contact-form]. Then, simply visit your site and click the settings icon to customize your Contact Form right in the page. Many more plugins & tutorials at POWr.io.
    Author: POWr.io
    Version: 1.0
    Author URI: http://www.powr.io
    */

    ///////////////////////////////////////GENERATE JS IN HEADER///////////////////////////////
    //For local mode (testing)
    if(!function_exists('powr_local_mode')){
        function powr_local_mode(){
          return false;
        }
    }
    //Generates an instance key
    if(!function_exists('generate_powr_instance')){
        function generate_powr_instance() {
          $alphabet = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789';
          $pass = array(); //remember to declare $pass as an array
          $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
          for ($i = 0; $i < 10; $i++) { //Add 10 random characters
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
          }
          $pass_string = implode($pass) . time(); //Add the current time to avoid duplicate keys
          return $pass_string; //turn the array into a string
        }
    }
    //Adds script to the header if necessary
    if(!function_exists('initialize_powr_js')){
        function initialize_powr_js(){
          //No matter what we want the javascript in the header:
          add_option( 'powr_token', generate_powr_instance(), '', 'yes' );	//Add a global powr token: (This will do nothing if the option already exists)
          $powr_token = get_option('powr_token'); //Get the global powr_token
          if(powr_local_mode()){//Determine JS url:
            $js_url = '//localhost:3000/powr_local.js';
          }else{
            $js_url = '//s3-us-west-1.amazonaws.com/powr/powr.min.js';
          }
          ?>
          <script>
            (function(d){
              var js, id = 'powr-js', ref = d.getElementsByTagName('script')[0];
              if (d.getElementById(id)) {return;}
              js = d.createElement('script'); js.id = id; js.async = true;
              js.src = '<?php echo $js_url; ?>';
              js.setAttribute('powr-token','<?php echo $powr_token; ?>');
              js.setAttribute('external-type','wordpress');
              ref.parentNode.insertBefore(js, ref);
            }(document));
          </script>
          <?php
        }
        //CALL INITIALIZE
        add_action( 'wp_enqueue_scripts', 'initialize_powr_js' );
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////Create Contact Form widget/////////////////////////////////
    class Powr_Contact_Form extends WP_Widget{
      //Create the widget
      public function __construct(){
        parent::__construct( 'powr_contact_form',
                             __( 'POWr Contact Form' ),
                             array( 'description' => __( 'Contact Form by POWr.io') )
        );
      }
      //This prints the div
      public function widget( $args, $instance ){
        $label = $instance['label'];
        ?>
        <div class='widget powr-contact-form' label='<?php echo $label; ?>'></div>
        <?php
      }
      public function update( $new_instance, $old_instance ){
        //TODO: Figure out what needs to happen here
        $instance = $old_instance;
        //If no label, then set a label
        if( empty($instance['label']) ){
          $instance['label'] = 'wordpress_'.time();
        }
        return $instance;
      }
      public function form( $instance ){
        ?>
        <p>
          No need to edit here - just click the gears icon on your Contact Form.
        </p>
        <p>
          Learn more at <a href='http://www.powr.io'>POWr.io</a>
        </p>
        <?php
      }
    }
    //Register Widget With Wordpress
    function register_powr_contact_form() {
      register_widget( 'Powr_Contact_Form' );
    }
    //Use widgets_init action hook to execute custom function
    add_action( 'widgets_init', 'register_powr_contact_form' );
    //Create short codes for adding plugins anywhere:
    function powr_contact_form_shortcode( $atts ){
      if(isset($atts['label'])){
        $label = $atts['label'];
      }else{
        $label = '';
      }
      return "<div class='powr-contact-form' label='$label'></div>";
    }
    add_shortcode( 'powr-contact-form', 'powr_contact_form_shortcode' );
  ?>