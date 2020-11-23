<?php

add_action( 'after_setup_theme', 'italia_setup' );


add_action( 'init', 'create_post_type' );
add_action( 'init', 'create_frasi' );
add_action( 'init', 'create_level_taxonomies' );
add_action( 'init', 'create_author_taxonomies' );


function create_frasi() {
    register_post_type( 'frasi',
    array(
      'labels' => array(
        'name' => __( 'Frasi' ),
        'singular_name' => __( 'Frase' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies'  => array( 'category', 'post_tag' ),


    )
  );
}



function create_post_type() {
  register_post_type( 'esercizi',
    array(
      'labels' => array(
        'name' => __( 'Esercizi' ),
        'singular_name' => __( 'Esercizio' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies'  => array( 'category', 'post_tag' ),


    )
  );







    register_post_type( 'quadri',
    array(
      'labels' => array(
        'name' => __( 'Quadri' ),
        'singular_name' => __( 'Quadro' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies'  => array( 'category', 'post_tag' ),
      'supports'=>array('thumbnail', 'title', 'editor')


    )
  );








}





function create_level_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)


	$labels = array(
		'name'                       => _x( 'Livello', 'taxonomy general name', 'italiattivo' ),

	);


	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,

	);

	register_taxonomy( 'level', array( 'post', 'esercizi', 'frasi', 'quadri'), $args );

}


function create_author_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)


	$labels = array(
		'name' => _x( 'Autore', 'taxonomy general name', 'italiattivo' ),

	);


	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,

	);

	register_taxonomy( 'autore', array('frasi', 'quadri', 'esercizi'), $args );

}




function italia_setup() {
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'italiattivo' ),
		) );


// add_image_size( 'basic', 600, 400, true );
add_theme_support('post-thumbnails' );
}

 function add_myscript(){
 //   wp_enqueue_script( 'my-ajax.js', get_bloginfo('template_directory') . "/js/my-ajax.js", array( 'jquery' ) );
}
add_action( 'init', 'add_myscript' );

function myNewAjax(){

$tag=$_POST["tag"];
// echo $nazione;
   $args=array('post_type' => array('post', 'esercizi'),'posts_per_page=-1', 'tag'=>'essere');

  $contenuti= get_posts($args);

 //  print_r($paesi);

 die(json_encode($contenuti));

  $x=0;
  $project=array();
   foreach($contenuti as $cont) {
     // $url = wp_get_attachment_image_src(get_post_thumbnail_id($paese->ID) );
     // print_r($url);
      // $project[$x]["img"]=$url[0];
      $project[$x]["title"]=$cont>post_title;
      $project[$x]["content"]=$cont->post_content;
    //  $project[$x]["nazione"]=$nazione;
    //  $project[$x]["name"]=$paese->post_name;
      $x++;
   }


 //   print_r($paesi);

  die(json_encode($project));
}

// create custom Ajax call for WordPress
add_action( 'wp_ajax_nopriv_myNewAjax', 'myNewAjax' );
add_action( 'wp_ajax_myNewAjax', 'myNewAjax' );

function esercizi_func( $atts, $content = "" ) {

  $x=0;
  $content=strip_tags($content, "<em><b><strong>");
  $lista=explode("\n", $content);
    ob_start();

    $x=0;
      ?>
      <script>
     var listone;

     var fra= [];
<?php   foreach ($lista as $l) {
  //
  if(strlen($l)>2) {

   ?>
     fra[<?php echo $x; ?>]="<?php echo $l; ?>";

     <?php
     $x++;
    }
     } ?>


     </script>

  <?php	return ob_get_clean();
  }
add_shortcode( 'es', 'esercizi_func' );

function associa_func( $atts, $content = "" ) {

  $a = shortcode_atts( array(
		'lista' => '',
	), $atts );

  $x=0;
  $content=strip_tags($content, "<em><b><strong>");
  $lista=explode("\n", $content);
    ob_start();

    $x=0;
      ?>

<script>

var <?php echo $a["lista"]; ?>=[];

<?php

 foreach ($lista as $l) {
  //

  if(strlen($l)>2) {

   ?>
<?php echo $a["lista"]; ?>[<?php echo $x; ?>]="<?php echo $l; ?>";

     <?php
     $x++;
    }
     } ?>


     </script>

  <?php	return ob_get_clean();
  }
add_shortcode( 'as', 'associa_func' );

add_shortcode("social", "social");


function social( $atts, $content = "" ) {
    $a = shortcode_atts( array(
      'title' => '',
    ), $atts );
$url=get_permalink(get_the_ID());
$url_fb="https://www.facebook.com/sharer/sharer.php?u=".$url."&title=".$a["title"];
$url_tw="https://twitter.com/share?url=".$url."&text=".$a["title"];

$url_li="https://www.linkedin.com/shareArticle?mini=true&url=http://developer.linkedin.com&title=UGAUGA&summary=My%20favorite%20developer%20program&source=LinkedIn";


 ob_start();
?>
<div class="share-title"> <span class="share-span"> SHARE </span> </div>
<div class="share-buttons">
<a class="share-link" href="#" onclick="
window.open('<?php echo $url_tw ?>','facebook-share-dialog','width=626,height=436');
return false;"> <img src="<?php echo get_stylesheet_directory_uri() ?>/img/twitter@3x.png" width="66" height="66"> </a>
  <a class="share-link" href="#" onclick="
window.open('<?php echo $url_fb ?>','twitter-share-dialog','width=626,height=436');
return false;">
  <img src="<?php echo get_stylesheet_directory_uri() ?>/img/facebook@3x.png" width="66" height="66"></a>
  <a class="share-link" href="<?php echo $url_li ?>" onclick="
window.open(this.href,'linkedin-share-dialog','width=626,height=436');
return false;"> <img src="<?php echo get_stylesheet_directory_uri() ?>/img/linkedin@3x.png" width="66" height="66"> </a>
</div>
<?php
return ob_get_clean();

}

?>
