<?php
/**
 * Template Name: Page Projects 2
 *  * 
 * @package Stivale 
 */

get_header(); ?>
       

        <div class="row">
            
            <?php
            
            $nazione=$_GET["country"];
            
        
            
            if($nazione)  {
         $args=array('post_type' => 'project','posts_per_page=-1',  'tax_query' => array(array('taxonomy' => 'country', 'field' => 'slug','terms' => $nazione)));
          } else {
        $args=array('post_type' => 'project','posts_per_page=-1');
          }
		
		
          // $args["tax_query"]= array('taxonomy'=>'country','terms'    => $nazione);
       
	
            $the_query = new WP_Query( $args );

        while ( $the_query->have_posts() ) : $the_query->the_post();
	

            ?>
            <div class="col-sm-3 progetti_box2">
               <div> 
              <a  href="<?php the_permalink(); ?>"> <?php
              $attr = array('class'	=> 'img-responsive');
                  echo  get_the_post_thumbnail($post->ID, "basic", $attr );
                   ?></a> </div>
               <div class="white" style="padding:0px 10px;">
              <div style="height: 65px; padding-top: 10px">   <a class="progetto_titolo" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <div class="progetti_intro"><span class="ellipsis_text">
                <?php the_excerpt(); ?></span></div>
                </div>
            </div>
          <?php
          
          endwhile;
          ?>
        </div>
        <!-- /.row -->

       <?php get_footer(); ?>
       