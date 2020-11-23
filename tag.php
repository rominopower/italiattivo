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

get_header(); ?>



      <div class="row home_article">
	<div class="col-sm-12"><b><div class="titolocat"><?php echo single_tag_title("", false) ?></div></b></div></div>


        <div class="row">

                  <?php

		 $tag = get_queried_object();


		$conts=get_posts(array('tag'=>$tag->slug, 'post_type'=>array('frasi', 'esercizi', 'post')));
		//  print_r($conts);


		// $cont->ID;


		foreach($conts as $cont) {


		    switch($cont->post_type) {

			case "esercizi":
			    $tipo="Esercizi";
			    $sottotitolo=strip_shortcodes($cont->post_content);
          $sottotitolo="";

			break;

			case "frasi":
			     $tipo="Frasi";
			     $parole=str_word_count($cont->post_content);

			     $sottotitolo="Ordina una frase di ".$parole." parole";

			break;
      case "post":
        $tipo="Per insegnanti";


			 }




		    ?>
		    <div class="col-sm-3">

			<div class="boxcat white" style="padding:10px">
			    <?php $cont->ID; ?>

			    <div class="titolobox"><a href="<?php echo $cont->guid; ?>"> <?php echo $cont->post_title; ?></a></div>

			    <div class="tipo"><?php echo $tipo ?></div>

          <div> Livello:
				<?php
				$categories = get_the_terms( $cont->ID, 'level' );
			     foreach( $categories as $category ) {
				echo $category->name;
			    } ?>

			    </div>
			    <div><?php echo $sottotitolo; ?></div>





		    </div>
		    </div>
		    <?php
		}


		?>




                  </div>






        <!-- /.row -->

        <hr>

        <div class="row">
            <!--
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #1</h2>
                <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #2</h2>
                <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #3</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>

        -->
        </div>
        <!-- /.row -->

       <?php get_footer(); ?>
