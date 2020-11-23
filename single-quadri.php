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

  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0;  }
  #sortable li { margin: 3px 3px 3px 0; padding: 30px 0px; float: left; width: 100px; height: 30px; font-size: 1em; text-align: center; }
  </style>


  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>








<?php if ( have_posts() ) : ?>




   <?php while ( have_posts() ) : the_post(); ?>





        <?php $url_f= get_post_meta($post->ID, "file", true);



    $url=get_template_directory_uri()."/quadri/".$url_f.".txt";

   // echo $url;

     $lines = file($url);





			// echo $post->ID;
				$categories = get_the_terms( $post->ID, 'autore' );
			     foreach( $categories as $category ) {

				$autore=$category->name;

				$desc=$category->description;

			    } ?>







	  <script>

	    $( document ).ready(function() {


    function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

var num=0;
var fra= [];
      <?php
     foreach ($lines as $line_num => $line) {
	$line = str_replace(array("\n","\r"), "", $line);
	?>
  fra[<?php echo $line_num ?>]="<?php echo $line; ?>";
  <?php  } ?>

     // alert(fra[1]);
	//  var listone;
	//  var regole='<?php echo $json; ?>';

     $("#check").click( function() {
	$("#error").empty();
       var frase= $( "#frase" ).val();


    //   var frasel = frase.toLowerCase();
     //  var fral=fra.toLowerCase();

      var frasel=capitalizeFirstLetter(frase);

      var trova= jQuery.inArray( frasel, fra );
    //   alert(trova);
      if(trova!=-1) {
      //  alert(frase);
          var itm = "<div class='frasequadro_ok'>"+frase+"<i class='material-icons'>thumb_up</i></div>"
      $("#frasi").append(itm);

      num++;
      //alert(num);
      } else {

	 var itm = "<div class='sbagliato'><b>"+frase+"</b> non va bene </div>"
	$("#error").append(itm);
      }
      // confronta(sortedIDs, esatta);

    // console.log(sortedIDs);



  } );

     })



    </script>





              <div class="row home_article white" style="padding:10px">

                 <div class="row">
	     <div class="col-sm-12">
		    <h2><?php the_title(); ?><span style="font-size: 15px; font-family:'Oxygen'"> di <?php echo $autore; ?></span></h2>

	     </div>

	  </div>
		 <div class="row">


                <div class="col-sm-6">

               <div>
		 <?php
		   $attr=array("class"=>"img-fluid");

		   echo get_the_post_thumbnail($post->ID, "full", $attr); ?>
		  </div>
	       <div>



	       </div>



		</div>

		<div class="col-sm-6">

		    <div>

			<?php the_content(); ?>

		    </div>

		  <div>
  <input id="frase" type="text" name="frase" size="50" placeholder="Inserisci la frase" />
</div>


		     <button id="check">
		 Controlla
		</button>

		     <div id="error"></div>

		     <div id="frasi"></div>

		</div>


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








        <!-- /.row -->




        <!-- /.row -->

       <?php  get_footer(); ?>
