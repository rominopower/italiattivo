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

		$tipi=array("esercizi", "frasi");


		 $tag = get_queried_object();




		$conts=get_posts(array(  'tax_query' => array(
		array(
			'taxonomy' => 'level',
			'field' => 'slug',
			'terms' => $tag
		)
	), 'post_type'=>array('esercizi'), 'posts_per_page'=>-1));
		//  print_r($conts);


		// $cont->ID;


		foreach($conts as $cont) {


		    switch($cont->post_type) {

			case "esercizi":
			    $tipo="Esercizi";
			 //   $sottotitolo=$cont->post_content;


			break;

			case "frasi":
			     $tipo="Frasi";
			     $parole=str_word_count($cont->post_content);

			     $sottotitolo="Ordina una frase di ".$parole." parole";

			break;


			 }




		    ?>
		    <div class="col-sm-3">

			<div class="boxcat white" style="padding:10px">
			    <?php $cont->ID; ?>

			    <div class="titolobox">
				<a href="<?php echo $cont->guid; ?>"> <?php echo $cont->post_title; ?></a>
			    </div>

			    <div class="tipo"><?php echo $tipo ?></div>

			    <div><?php echo $sottotitolo; ?></div>

			    <div> Livello:
				<?php
				$categories = get_the_terms( $cont->ID, 'level' );
			     foreach( $categories as $category ) {
				echo $category->name;
			    } ?>

			    </div>



		    </div>
		    </div>
		    <?php
		}


		$conts=get_posts(array(  'tax_query' => array(
		array(
			'taxonomy' => 'level',
			'field' => 'slug',
			'terms' => $tag
		)
	), 'post_type'=>array('frasi'), 'posts_per_page'=> 1, 'order'=>'ASC'));



		foreach($conts as $cont) {

		?>

	  <div class="col-sm-3">

			<div class="boxcat white" style="padding:10px">

			    <div class="titolobox"><a href="<?php echo $cont->guid; ?>"> <?php echo $cont->post_title; ?></a></div>

			    <div class="tipo">Frasi</div>

			    <div>Frasi di autori famosi da ordinare </div>


			</div>
	    </div>

		    <?php
		}
		    ?>

                  </div>






        <!-- /.row -->

        <hr>

        <div class="row">

        </div>
        <!-- /.row -->

       <?php get_footer(); ?>
