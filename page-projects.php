<?php
/**
 * Template Name: Page Projects
 *  * 
 * @package Stivale 
 */

get_header(); ?>
       
       <script>
	
	
	
       </script>
       
       <div class="row" style="padding:20px 0px">
	
	  <div class="col-sm-12">
	 
	    
	    <ul id="filtro">
		<?php
		
		$liste=get_categories();
		// print_r($liste);
		foreach($liste as $lista) {
		?>
		
		<li class="filtro" id="<?php echo $lista->name; ?>"><?php echo $lista->name; ?></li>
		
		<?php
		}
		?>
	    </ul>
	    
	 
	    
	  </div>
	
       </div>
       

        <div class="row">
            
            <?php
            
           // $nazione=$_GET["country"];
            
        
            
        //    if($nazione)  {
         $args=array('post_type' => 'lavori','posts_per_page=-1');
        //  } else {
        //$args=array('post_type' => 'project','posts_per_page=-1');
	//'tax_query' => array(array('taxonomy' => 'category', 'field' => 'slug','terms' => 'works'))
         // }
		
		
          // $args["tax_query"]= array('taxonomy'=>'country','terms'    => $nazione);
       
	
            $the_query = new WP_Query( $args );

        while ( $the_query->have_posts() ) : $the_query->the_post();
	
	

            ?>
            <div class="col-sm-3 progetti_box <?php $category = get_the_category();
echo $category[0]->cat_name; ?>">
               <div> 
              <a  href="<?php the_permalink(); ?>"> <?php
              $attr = array('class'	=> 'img-responsive');
                  echo  get_the_post_thumbnail($post->ID, "basic", $attr );
                   ?></a> </div>
               <div style="padding:0px 10px 10px 10px;">
              <div style="height: 65px; padding-top: 10px">   <a class="progetto_titolo" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <div class="progetti_intro "><span class="ellipsis_text">
                <?php the_excerpt(); ?></span></div>
                </div>
            </div>
          <?php
          
          endwhile;
          ?>
        </div>
        <!-- /.row -->

       <?php get_footer(); ?>
       