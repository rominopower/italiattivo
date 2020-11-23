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
       
<?php if ( have_posts() ) : ?>       

        <div class="row">
     
            <div class="col-sm-8">   <?php while ( have_posts() ) : the_post(); ?>
              <div class="row home_article white">
                
               
                 
                 
                  <div class="col-sm-12 white" style="padding-bottom: 50px"> 
                <h2><?php the_title(); ?></h2><p>
                <?php the_content(); ?>
		
	
		    
		<?php 

$file = get_field('file');

// print_r($file);

if( $file["url"] ): ?>
	
	<a href="<?php echo $file['url']; ?>">Download </a>

<?php endif; ?>
                  </div>
                 
                  
                 
                 
                 </div>
           <?php
                endwhile;
		endif;
?> </div>
            <div class="col-sm-4">
                 <div class="row" style="margin-left:10px">	   
		  <div class="col-sm-12 white" style="padding-bottom: 10px">
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
                           <div class="col-sm-12 white" style="padding-bottom: 10px">
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

        <hr>

      
        <!-- /.row -->

       <?php get_footer(); ?>