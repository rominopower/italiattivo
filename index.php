<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();

?>

<div id="carouselExampleIndicators" class="row carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col">    <div class="sezione white materiali">

        	<div class="row">
        		 <div class="homebox col-md-6">
        		e<span style="font-size:24px; text-shadow: none">lementare</span>
        		</div>
        		 <div class="col-sm-6">
        			<div><b>Esercizi per studenti</b></div>

        			<div class="elenco">
        				<?php
        $args = array( 'posts_per_page' => 15, 'post_type' => 'esercizi', 'tax_query' => array(
		array(
			'taxonomy' => 'level',
			'field' => 'slug',
			'terms' => 'elementare'
		)
	));

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        	<span>
        		<a class="listahome" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        	</span> /
        <?php endforeach;
        wp_reset_postdata();?>
        			</div>

        		 </div>
        	</div>

            </div></div>
        <div class="col d-sm-block d-none">  <div class="sezione white materiali">

        	<div class="row">
        		 <div class="homebox col-md-6">
        		I<span style="font-size:24px; text-shadow: none">ntermedio</span>
        		</div>
        		 <div class="col-sm-6">
        			<div><b>Esercizi per studenti</b></div>

        			<div class="elenco">
        				<?php
        $args = array( 'posts_per_page' => 15, 'post_type' => 'esercizi', 'tax_query' => array(
		array(
			'taxonomy' => 'level',
			'field' => 'slug',
			'terms' => 'intermedio'
		)
	));

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        	<span>
        		<a class="listahome" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        	</span> /
        <?php endforeach;
        wp_reset_postdata();?>
        			</div>

        		 </div>
        	</div>

            </div></div>
      </div>
  </div>


  <div class="carousel-item">
    <div class="row">
      <div class="col">    <div class="sezione white materiali">

        <div class="row">
           <div class="homebox col-md-6">
          I<span style="font-size:24px; text-shadow: none">ntermedio</span>
          </div>
           <div class="col-sm-6">
            <div><b>Esercizi per studenti</b></div>

            <div class="elenco">
              <?php
      $args = array( 'posts_per_page' => 15, 'post_type' => 'esercizi', 'tax_query' => array(
  array(
    'taxonomy' => 'level',
    'field' => 'slug',
    'terms' => 'intermedio'
  )
));

      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <span>
          <a class="listahome" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </span> /
      <?php endforeach;
      wp_reset_postdata();?>
            </div>

           </div>
        </div>

          </div></div>
      <div class="col d-sm-block d-none">  <div class="sezione white materiali">

        <div class="row">
           <div class="homebox col-md-6">
          A<span style="font-size:24px; text-shadow: none">vanzato</span>
          </div>
           <div class="col-sm-6">
            <div><b>Esercizi per studenti</b></div>

            <div class="elenco">
              <?php
      $args = array( 'posts_per_page' => 15, 'post_type' => 'esercizi', 'tax_query' => array(
  array(
    'taxonomy' => 'level',
    'field' => 'slug',
    'terms' => 'avanzato'
  )
));

      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <span>
          <a class="listahome" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </span> /
      <?php endforeach;
      wp_reset_postdata();?>
            </div>

           </div>
        </div>

          </div></div>
    </div>
</div>
<div class="carousel-item">
  <div class="row">
    <div class="col">    <div class="sezione white materiali">

      <div class="row">
         <div class="homebox col-md-6">
        A<span style="font-size:24px; text-shadow: none">vanzato</span>
        </div>
         <div class="col-sm-6">
          <div><b>Esercizi per studenti</b></div>

          <div class="elenco">
            <?php
    $args = array( 'posts_per_page' => 15, 'post_type' => 'esercizi', 'tax_query' => array(
array(
  'taxonomy' => 'level',
  'field' => 'slug',
  'terms' => 'avanzato'
)
));

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
      <span>
        <a class="listahome" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </span> /
    <?php endforeach;
    wp_reset_postdata();?>
          </div>

         </div>
      </div>

        </div></div>
    <div class="col d-sm-block d-none">  <div class="sezione white materiali">

      <div class="row">
         <div class="homebox col-md-6">
        E<span style="font-size:24px; text-shadow: none">lementare</span>
        </div>
         <div class="col-sm-6">
          <div><b>Esercizi per studenti</b></div>

          <div class="elenco">
            <?php
    $args = array( 'posts_per_page' => 15, 'post_type' => 'esercizi', 'tax_query' => array(
array(
  'taxonomy' => 'level',
  'field' => 'slug',
  'terms' => 'elementare'
)
));

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
      <span>
        <a class="listahome" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </span> /
    <?php endforeach;
    wp_reset_postdata();?>
          </div>

         </div>
      </div>

        </div></div>
  </div>
</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php if ( have_posts() ) : ?>




<?php
$slugs = explode('/', get_query_var('category_name'));
	 //   $cc= get_category_by_slug('/'.end($slugs));
	   // print_r($slugs);

	    $cc=$slugs[0];
	    if(empty($cc)) {
		$cc='lezioni';
	    }

?>
        <div class="row">

            <div class="col-sm-8">  <div id="filter-projects"></div>
            <div class="row home_article barra_titolo"><div class="col-sm-12"><b> Ultimi esercizi </b></div></div>

            <?php



	    $args = array( 'posts_per_page' => 5, 'post_type' => array('esercizi'));
	    $the_query = new WP_Query( $args );

	    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

             <div class="row home_article white">

                <?php  if ( has_post_thumbnail()) { ?>

                <div class="col-sm-3 white">
                    <?php
                  $attr = array('class'	=> 'img-fluid img-home');
                   echo  get_the_post_thumbnail($post->ID, "full", $attr ); ?>
                </div>
                 <div class="col-sm-9 white">
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2><p>
                <?php


                $ct=get_the_content();
		$txt=explode("[",$ct);
		echo $txt[0]; ?>
                   <b> <a href="<?php the_permalink() ?>"><?php _e("Leggi tutto", "stivale"); ?></a></b>
                </p>
                  </div>

                 <?php

                } else {
                 ?>

                  <div class="col-sm-12 white">
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>


              <p> <b> <?php $termini=wp_get_post_terms( $post->ID, "level", $args );
              $tags=get_the_tags($post->ID);

              echo $termini[0]->name;
              if($tags) {
                echo " / ";
                    foreach($tags as $tag) {
                        echo $tag->name." ";
                    }
              }
              ?>
             </b></p>
                <p>
                <?php $ct=get_the_content();
                $txt=explode("[",$ct);
                echo $txt[0];




		?>
                  <b>  <a href="<?php the_permalink() ?>"><?php _e("Leggi tutto", "stivale"); ?></a></b>
                </p>
                  </div>

                  <?php
                }
                  ?>


                 </div>
           <?php
                endwhile;
		endif;
?> </div>
            <div class="col-sm-4">


		<div class="row" style="margin-left:10px; margin-bottom: 20px">
                           <div class="col-sm-12 white" style="padding: 20px">
				<div class="titolo_sidebar"> Descrivi un quadro  </div>

			<a href="ragazza-sul-tappeto-rosso"><img src="<?php echo esc_url( get_template_directory_uri() );  ?>/img/macchia01.jpg" class="img-fluid" border="0" /></a>

                           </div>
                </div>


		<div class="row" style="margin-left:10px; margin-bottom: 20px">
                           <div class="col-sm-12 white" style="padding: 20px">
				<div class="titolo_sidebar">Livelli</div>
			<?php

			$args=array("taxonomy"=>"level", "title_li"=>"");

			wp_list_categories($args);
			?>

                           </div>
                </div>

                <div class="row" style="margin-left:10px; ">
                           <div class="col-sm-12 white" style="padding: 20px">
			<div class="titolo_sidebar"> Argomenti </div>
			<?php
			$args=array('smallest' => 12, 'largest' => 12,  'separator' => ' / ');

			wp_tag_cloud( $args );
			?>

                           </div>
                </div>








            </div>
        </div>


      <?php get_footer(); ?>

 <script>

       function creaPagine(lista) {

      //  jQuery("#filter-projects").empty();
        var obj = JSON.parse(lista);

    //   alert (obj.length);
     //   alert(obj[0].post_title);
        var x=0;

        var theDiv = document.getElementById("filter-projects");
 jQuery("#filter-projects").append('<div class="row home_article barra_progetti"><div class="col-sm-12"><b> Progetti '+obj[x].post_type+' </b></div></div>');


           for (key in obj) {
          console.log("gne");
                var testo= '<div class="row home_article white"><div class="col-sm-3 white"><a href="?project='+obj[x].name+'"><img src='+obj[x].img+' class="img-fluid img-home"></a></div> <div class="col-sm-9 white progetti_intro"><h2><a class="progetto_titolo" href="?project='+obj[x].post_title+'">'+obj[x].post_title+'</a></h2><span class="ellipsis_text">'+obj[x].content+'</p> </div></div>';
              //  var content = document.createTextNode(testo);
             //  jQuery("#filter-projects").append(testo);
                x++;


           }

   jQuery("#filter-projects").append("<hr>");
   jQuery('.progetti_intro').ThreeDots({ max_rows:7 });



       }


       function creaListaProgetti(naz) {

        jQuery.ajax({
            type: 'POST',
            url: 'http://www.italiattivo.com/wp-admin/admin-ajax.php',
            data: {
                action: 'myNewAjax',
// la variabile da inviare alla funzione via post
                tag: 'x',
            },
            success: function(data, textStatus, XMLHttpRequest){
         // per covertire dei dati json restituiti dalla funzione
          // var obj = jQuery.parseJSON(data);
          // qui metti cosa fare con la funzione in caso di risposta ricevuta
    //alert("datA"+data);
		//var obj=jQuery.parseJSON(data);
		// console.log(obj);
             creaPagine(data);

	 //   console.log(obj[0]);

            },
            error: function(MLHttpRequest, textStatus, errorThrown){
                alert(errorThrown);
            }
        });


       }

       </script>
