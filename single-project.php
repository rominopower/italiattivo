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


       
<?php if ( have_posts() ) :      
global $countrycodes;
global $COUNTRY_LAT_LANG;
global $COMUNI_LAT_LANG;

 ?> 
        <div class="row white">
           <div class="col-sm-6">
 <?php
 while ( have_posts() ) : the_post(); ?>
       <div class="row white">
                <div class="col-sm-12">
               
                <h2><?php the_title(); ?></h2>
                <?php the_content();
                
                $comune=get_post_meta($post->ID, "comune", true);
                $lat=get_post_meta($post->ID, "latitudine", true);
                $long=get_post_meta($post->ID, "longitudine", true);
              //  echo $comune;
               if(!$lat) {
                    $coord2= $COMUNI_LAT_LANG[$comune];
                  $lat=$coord2[0];
                    $long=$coord2[1];
                
                } 
           //     print_r($coord2);
                
                $video=get_post_meta($post->ID, "video", true);
                
              
               
                $nazioni = wp_get_post_terms( $post->ID, "country",$args );
               // azione=
                $cod=$countrycodes[$nazioni[0]->name];
                
            //    echo $cod;
               $coord= $COUNTRY_LAT_LANG[$cod];
             //  print_r($coord);
                
// print_r($nazioni);
         ?>       </div>        </div>
           <?php
                endwhile;
		endif;
?> </div>
            
          
            <div class="col-sm-3" style="background-color:#F8E91A">
                
             <div id="mapumbria" style="width:100%; height: 300px">&nbsp;</div>
            </div>
            <div class="col-sm-3">
              <div id="mapworld" style="width:100%; height: 300px">&nbsp;</div>
            </div>
        </div>
        <!-- /.row -->
  <hr>

    <div class="row white" style="padding:20px 0px">
         <div class="col-sm-6">
        <?php
        
     
        if($video) {
            ?>
            <div class="embed-responsive embed-responsive-16by9">
             <video class="embed-responsive-item" controls preload="auto">
  <source src="<?php echo site_url(); ?>/wp-content/files_mf/<?php echo $video; ?>" type="video/mp4">

</video>
             </div>

            <?php
            
        }
        
        ?>
    </div>
     
      
            <div  class="col-sm-6">
         <div class="row">
        <?php
                
                $attr = array('class'	=> 'img-responsive');
                
                
                $args = array(
		'post_type' => 'attachment',
		'numberposts' => -1,
		'post_status' => null,
		'post_parent' => $post->ID
	);
	$attachments = get_posts($args);
        
        foreach ($attachments as $att) {
          $src=  wp_get_attachment_image_src( $att->ID, 'full', $icon ); ?> 
            
          
            
       <div class='col-sm-4'>
        <a class="thumbnail"  data-target="#lightbox" href="<?php echo $src[0]; ?>">
        <?php echo wp_get_attachment_image( $att->ID, 'medium', true, $attr ); ?>
        </a>
    </div> 
            
            <?php
            
        }
        
        
        ?>
        </div>
            </div>
    </div>
           

    
  
<script type='text/javascript' src='http://www.amcharts.com/lib/3/ammap.js?ver=1.0.11'></script>
<script type='text/javascript' src='http://www.amcharts.com/lib/3/maps/js/worldLow.js?ver=1.0.11'></script>
<script type='text/javascript' src='http://www.amcharts.com/lib/3/ammap_amcharts_extension.js?ver=20150907-02'></script>
<script type='text/javascript' src='http://www.amcharts.com/lib/3/maps/js/italyHigh.js'></script>
       
        <!-- /.row -->

       <?php get_footer(); ?>
       
       <script>
      try {
 var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";       
        
 AmCharts.makeChart("mapumbria", {
                type         : "map",
                theme        : AmCharts.themes.dark,
                pathToImages : "http://www.amcharts.com/lib/3/images/",
                dataProvider : {
                  map: "italyHigh",
                    "zoomLevel":8,
     "zoomLongitude":12.4319,
     "zoomLatitude":43.0043,
      areas: [ {
      id: "IT-55",
      value: 4447100
    }],
       images: [ {
        id: "london",
        color: "#000000",
        svgPath: targetSVG,
        title: "..<?php echo $comune; ?>",
        latitude: <?php echo $lat; ?>,
        longitude: <?php echo $long; ?>,
        label:"<?php echo $comune; ?>"
 }]
                },
                areasSettings   : {
                  "autoZoom"      : false,
                  "selectedColor": "#CC0000",
                "color":"#F8E91A"
                }
              });

}




catch( err ) { console.log( err ); }    </script>
       
          <script>
      try {
 var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";       
        
 AmCharts.makeChart("mapworld", {
                type         : "map",
                theme        : AmCharts.themes.dark,
                pathToImages : "http://www.amcharts.com/lib/3/images/",
                dataProvider : {
                  map: "worldLow",
                    "zoomLevel":8,
     "zoomLongitude":<?php echo $coord[1]; ?>,
     "zoomLatitude":<?php echo $coord[0]; ?>,
      areas: [ {
      id: "<?php echo $cod; ?>",
      value: 4447100
    }],
       images: [ {
        id: "london",
        color: "#000000",
        svgPath: targetSVG,
        title: "<?php echo $comune; ?>",
        latitude: <?php echo $lat; ?>,
        longitude: <?php echo $long; ?>,
        label:"<?php echo $comune; ?>"
 }]
                },
                areasSettings   : {
                  autoZoom      : false,
                    selectedColor: "#D00A09",
                color:"#F8E91A"
                }
              });

}




catch( err ) { console.log( err ); }    </script>
       
       