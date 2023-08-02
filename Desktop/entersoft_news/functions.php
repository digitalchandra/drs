<?php 
    //title function
    function entersoft_news_support(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme','entersoft_news_support');
    
    // Register Nav Menu
    register_nav_menu('main-menu', 'Main menu');
    // Register Feature Image
    add_theme_support( 'post-thumbnails' );
    // Theme templates 
    add_theme_support( 'block-templates' );
	add_theme_support( 'title', 'editor', 'thumbnail', 'custom-fields' );

    the_post_thumbnail(); // Without parameter ->; Thumbnail
    the_post_thumbnail( 'thumbnail' ); // Thumbnail (default 150px x 150px max)
    the_post_thumbnail( 'medium' ); // Medium resolution (default 300px x 300px max)
    the_post_thumbnail( 'medium_large' ); // Medium-large resolution (default 768px x no height limit max)
    the_post_thumbnail( 'large' ); // Large resolution (default 1024px x 1024px max)
    the_post_thumbnail( 'full' ); // Original image resolution (unmodified)
    the_post_thumbnail( array( 100, 100 ) ); // Other resolutions (height, width)
    	
    add_image_size( 'card-image-home', 300, 175 );

    // Custom Logo Section 
    	add_theme_support( 'custom-logo' );

        function themename_custom_logo_setup() {
            $defaults = array(
                'height'               => 100,
                'width'                => 400,
                'flex-height'          => true,
                'flex-width'           => true,
                'header-text'          => array( 'site-title', 'site-description' ),
                'unlink-homepage-logo' => true, 
            );
         
            add_theme_support( 'custom-logo', $defaults );
        }
   
    //widgets 
    add_theme_support('widgets');
    // Rigister Sidebar 
    function my_sidebars(){
	    register_sidebar(
                array(
                    'name'=> 'Home page Top Nav Ads',
                    'id'=> 'ads',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
            register_sidebar(
                array(
                    'name'=> 'Home Page Ads-1',
                    'id'=> 'ads1',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		
		   register_sidebar(
                array(
                    'name'=> 'latest Post',
                    'id'=> 'latest',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
            register_sidebar(
                array(
                    'name'=> 'Home Page Ads-2',
                    'id'=> 'ads2',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
            register_sidebar(
                array(
                    'name'=> 'Home Page Ads-3 ',
                    'id'=> 'ads3',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
            register_sidebar(
                array(
                    'name'=> 'Home Page Ads -4',
                    'id'=> 'ads4',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
            register_sidebar(
                array(
                    'name'=> 'Home page Ads News-5 ',
                    'id'=> 'ads5',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );

            register_sidebar(
                array(
                    'name'=> 'Home page Section-6',
                    'id'=> 'ads6',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );

            register_sidebar(
                array(
                    'name'=> 'Home page Section-7',
                    'id'=> 'ads7',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
                register_sidebar(
                array(
                    'name'=> 'Home page Section-8',
                    'id'=> 'ads8',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		          register_sidebar(
                array(
                    'name'=> 'Home page Section-9',
                    'id'=> 'ads9',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		          register_sidebar(
                array(
                    'name'=> 'Home page Section-10',
                    'id'=> 'ads10',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		          register_sidebar(
                array(
                    'name'=> 'Home page Section-11 Image 416x423 px',
                    'id'=> 'ads11',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
                register_sidebar(
                array(
                    'name'=> 'Home page Section-12 Image 416 x 258 px',
                    'id'=> 'ads12',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		                register_sidebar(
                array(
                    'name'=> 'Home page Section-13',
                    'id'=> 'ads13',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		
		    register_sidebar(
                array(
                    'name'=> 'Home page Section-14',
                    'id'=> 'ads14',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		   register_sidebar(
                array(
                    'name'=> 'Home page Section-15',
                    'id'=> 'ads15',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		      register_sidebar(
                array(
                    'name'=> 'Category Sidebar Ads ',
                    'id'=> 'cat-side',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		  register_sidebar(
                array(
                    'name'=> 'Reading Page Under Menu ',
                    'id'=> 'single1',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		  register_sidebar(
                array(
                    'name'=> 'Reading Page Sidebar 1',
                    'id'=> 'single2',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		  register_sidebar(
                array(
                    'name'=> 'Reading Page Sidebar 2',
                    'id'=> 'single3',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
            register_sidebar(
                array(
                    'name'=> 'Home page Nepali Date',
                    'id'=> 'npdate',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
            register_sidebar(
                array(
                    'name'=> 'Contact ',
                    'id'=> 'footer-contact',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
             register_sidebar(
                array(
                    'name'=> 'Footer Logo',
                    'id'=> 'footer-logo',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
                
              register_sidebar(
                array(
                    'name'=> 'Importance Link ',
                    'id'=> 'footer-link',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
           
            register_sidebar(
                array(
                    'name'=> 'Social Share ',
                    'id'=> 'social',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
   
		
		 register_sidebar(
                array(
                    'name'=> 'Menu White Logo',
                    'id'=> 'menulogo1',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );

	


		register_sidebar(
                array(
                    'name'=> 'Menu',
                    'id'=> 'menu',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		register_sidebar(
            array(
                    'name'=> 'Footer Menu',
                    'id'=> 'footer_menu',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		register_sidebar(
            array(
                    'name'=> 'Footer Menu under Editor',
                    'id'=> 'site-editor',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
		 register_sidebar(
                array(
                    'name'=> 'Comments Display',
                    'id'=> 'comments',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title'=> '</h4>'
                )
            );
    }
    
    
    add_action('widgets_init','my_sidebars');
    
    //Offset Quey 
   function wpsites_exclude_latest_post( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'offset', '1' );
     }
    }
 
    add_action( 'pre_get_posts', 'wpsites_exclude_latest_post', 1 );
    

    
     // Css Load section 

      function load_scripts() {
        echo"";
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('style_css', get_template_directory_uri() . '/assets/css/style.css', array(), $version, 'all');
        wp_enqueue_style('searchbox_css', get_template_directory_uri().'/assets/css/search.css', array(), $version, 'all');
        wp_register_style('bootstrap5_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all');
        wp_register_style('fontwasome4_css','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
        wp_enqueue_style('bootstrap5_css');
        wp_enqueue_style('fontwasome4_css');
    }
    add_action('wp_enqueue_scripts', 'load_scripts');


    function load_js_scripts(){
        wp_register_script('javascript_js', get_template_directory_uri(). 'assets/js/javascript.js', array(), true);
        wp_register_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
        wp_register_Script('jquey_js', 'https://code.jquery.com/jquery-2.2.4.min.js"', array(), '6.6.0', true);
        wp_enqueue_script('javascript_js');
        wp_enqueue_script('bootstrap_js');
        wp_enqueue_script('jquey_js');
       
    }
    add_action('wp_enqueue_scripts','load_js_scripts');


    // created date and modification date
    	add_theme_support( 'custom_conent' );
    	
        function wpb_last_updated_date( $content ) {
        $u_time = get_the_time('U');
        $u_modified_time = get_the_modified_time('U');
        if ($u_modified_time >= $u_time + 86400) {
        $updated_date = get_the_modified_time('F jS, Y');
        $updated_time = get_the_modified_time('h:i a');
        $custom_content .= '<p class="last-updated">Last updated on '. $updated_date . ' at '. $updated_time .'</p>'; 
        }
            $custom_content .= $content;
            return $custom_content;
        }
        add_filter( 'custom_content', 'wpb_last_updated_date' );
        
    //display the author name which is linked to the About page
        function author_name_shortcode(){
            global $post;
            $post_id = $post->ID;
            $author = get_the_author($post_id);
            $linkedAuthor = "<a href='/about'>".$author."</a>";
            return $linkedAuthor;
        }
        add_shortcode('post_author','author_name_shortcode');
        
    
    
    //Post minutes time and date
    
    function Bing_filter_time() {
        global $post ;
        $to = time();
        $from = get_the_time('U') ;
        $diff = (int) abs($to - $from);
        if ($diff <= 3600) {
        $mins = round($diff / 60);
        if ($mins <= 1) {
        $mins = 1;
        }
        $time = sprintf ( _n ( '%s minutes' , '%s minutes' , $mins ) , $mins ) . __ ( '-ago' , '' ) ;
        } else if (($diff <= 86400) && ($diff > 3600)) {
        $hours = round($diff / 3600);
        if ($hours <= 1) {
        $hours = 1;
        }
        $time = sprintf ( _n ( '%s hours' , '%s hours' , $hours ) , $hours ) . __ ( '-ago' , '' ) ;
        } elseif ($diff >= 86400) {
        $days = round($diff / 86400);
        if ($days <= 1) {
        $days = 1;
        $time = sprintf ( _n ( '%s days' , '%s days' , $days ) , $days ) . __ ( '-ago' , '' ) ;
        } elseif ($days > 29) {
        $time = get_the_time(get_option('date_format'));
        } else {
        $time = sprintf ( _n ( '%s days' , '%s days' , $days ) , $days ) . __ ( '-ago' , '' ) ;
        }
        }
        return $time;
        }
    add_filter('the_time','Bing_filter_time');
    






//Pagination
    function entersoft_number_pagination() {
    global $wp_query;
        $big = 9999999; // need an unlikely integer
        echo paginate_links( array(
       'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
       'format' => '?paged=%#%',
       'current' => max( 1, get_query_var('paged') ),
       'total' => $wp_query->max_num_pages) );
    }
    
 // Facebook or image descriobe on theme 
//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');
 
//Lets add Open Graph Meta Info
 
function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
        echo '<meta property="fb:app_id" content="Your Facebook App ID" />';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="Niroopan  "/>';
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
        $default_image="https://niroopan.com/wp-content/uploads/2023/07/niroopan-logo-new.png"; 
		//replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
    echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );   

//Popular Tag
add_shortcode('wpb_popular_tags', 'wpb_tag_cloud');
function wpb_tag_cloud() {
		$tags = get_tags();
		$args = array(
		'smallest' => 10,
		'largest' => 22,
		'unit' => 'px',
		'number' => 10,
		'format' => 'flat',
		'separator' => " ",
		'orderby' => 'count',
		'order' => 'DESC',
		'show_count' => 1,
		'echo' => false
	);

$tag_string = wp_generate_tag_cloud( $tags, $args );
return $tag_string;
}


//Popular Post
function pp_getPostViews($postID){
   $count_key = 'post_views_count';
   $count = get_post_meta($postID, $count_key, true);
   if($count==''){
     delete_post_meta($postID, $count_key);
     add_post_meta($postID, $count_key, '0');
     return "0 View";
   }
   return $count.' Views';
}
function pp_setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
     $count = 0;
   delete_post_meta($postID, $count_key);
   add_post_meta($postID, $count_key, '0');
  }
 else{
   $count++;
 update_post_meta($postID, $count_key, $count);
 }
}

//CPTUI 
//
function cptui_register_my_cpts_article_review() {

	/**
	 * Post Type: My Article Reviews.
	 */

	$labels = [
		"name" => esc_html__( "My Article Reviews", "chandrastha.com.np" ),
		"singular_name" => esc_html__( "Article", "chandrastha.com.np" ),
	];

	$args = [
		"label" => esc_html__( "My Article Reviews", "chandrastha.com.np" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "article_review", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "article_review", $args );
}

add_action( 'init', 'cptui_register_my_cpts_article_review' );


//Social Media Post 
        function entersoft_news_social(){
            $args = array(
                'labels'=>  array('name'=>'Social',
                'singular_name'=> 'Social_Media',
				'menu_name'     => 'Social Media', 'Social'
                ),
                'has_archive' => true,
                'rewrite'     => array( 'slug' => 'socialmedia' ),
                'hierarchical'=> false,
                'public'=> true,
                'has_archive'=> true,
                'menu_icon' =>'dashicons-networking',
				'show_in_menu'  => true,
                'supports'=> array('title', 'editor', 'thumbnail'),
                

                );
               
            register_post_type('Social_Media', $args);
        }
        add_action('init','entersoft_news_social');


//Social Media Post 
        function entersoft_news_team(){
            $args = array(
                'labels'=>  array('name'=>'Team',
                'singular_name'=> 'Team',
				'menu_name'     => 'Our Team', 'Team'
                ),
                'has_archive' => true,
                'rewrite'     => array( 'slug' => 'ourteam' ),
                'hierarchical'=> false,
                'public'=> true,
                'has_archive'=> true,
                'menu_icon' =>'dashicons-groups',
				'show_in_menu'  => true,
                'supports'=> array('title', 'editor', 'thumbnail'),
                

                );
               
            register_post_type('Team', $args);
        }
        add_action('init','entersoft_news_team');

?>