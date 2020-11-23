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

global $tipo;
?>
<script>
var dimensionValue = 'esercizio';
ga('set', 'tipoArticolo', dimensionValue);
</script>


<?php if ( have_posts() ) :



?>

dsdsadsad



        <div class="row">

            <div class="col-sm-8">   <?php while ( have_posts() ) : the_post(); ?>








              <div class="row home_article white">




                <div class="col-sm-12 white">
                <h2><?php the_title(); ?></h2><p>
                <?php the_content(); ?>

		     <div id="frasi">



    </div>

    <button id="check">
        Correggi
    </button>



                </p>
                  </div>




                 </div>
           <?php
                endwhile;
		endif;
?>

 <div class="row white" style="margin-top: 20px; padding: 20px 0px">

		<div class="col-sm-12"><div class="precedente">
		<?php previous_post_link( '&laquo; %link', '%title', TRUE, '', 'level' ); ?>
		<?php
/* $prev_post = get_previous_post();
if($prev_post) {
   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
   echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class=" ">&laquo; <strong>'. $prev_title . '</strong></a>' . "\n";
} */
?></div><div class="prossimo">

<?php next_post_link( '%link &raquo;', '%title', TRUE, '', 'level' ); ?>

<?php
/* $next_post = get_next_post();
if($next_post) {
   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
   echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class=" "> <strong>'. $next_title . ' &raquo;</strong></a>' . "\n";
}*/
?></div></div>
	      </div>

</div>
            <div class="col-sm-4">

		 <div class="row" style="margin-left:10px">
		  <div class="col-sm-12 white" style="">
			<h2> Livello </h2>

               <?php

			// echo $post->ID;
				$categories = get_the_terms( $post->ID, 'level' );
			     foreach( $categories as $category ) {

				echo $category->name;
				echo "<br/>";
				echo $category->description;

			    } ?>
		    </div>


                </div>

		  <div class="row" style="margin-left:10px; margin-top:10px">
                           <div class="col-sm-12 white" style="">
			    <h2> Argomento </h2>

	       <?php $posttags = get_the_tags($post->ID);

	       foreach ($posttags as $tag) {
		?>
		<span><?php echo $tag->name; ?></span>
	      <?php }
	       ?>

                           </div>
		</div>


            </div>
        </div>
        <!-- /.row -->




        <!-- /.row -->

       <?php get_footer(); ?>
