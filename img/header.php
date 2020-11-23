<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo bloginfo($show = 'name'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <!-- Custom CSS -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">
 
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-lightbox.css" rel="stylesheet">

     
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0;  }
  #sortable li { margin: 3px 3px 3px 0; padding: 30px 0px; float: left; width: 100px; height: 30px; font-size: 1em; text-align: center; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <?php
        
      if($post->post_type=="esercizi") {
      ?>
       <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/completa.js"></script>
       <?php
       }
       ?>
       
       <?php
      
      if($post->post_type=="frasi") {
      ?>

       <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/frasi.js"></script>
       <?php
       }
       ?>
       
       
    
	<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">

 
<?php // wp_head(); ?>
</head>

<body>
<div id="fb-root"></div>
<script>
$( document ).ready(function() {
  
 
  
     $('#m').click(function() {
      creaListaProgetti('gne');
     });
  
  //  alert("aa");



$(".filtro").on("click", function() {
    $( "div.progetti_box" ).css("display", "block");
		$( "div.progetti_box" ).not( "."+this.id).css( "display", "none");
		
		});



});

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=180085468676270";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!-- Navigation -->
   

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <div class="container">
	
<div class="row">
    
</div>	


<div class="row"><div class="col-sm-9"> 
<div class="titolo"> <a class="titoloheader" href="http://www.italiattivo.com">Italiattivo </a><div class="sottotitolo"> Italiano Interattivo</div> </div> </div><div class="col-sm-3"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/m1.png"></div>

</div>  <?php /*if (is_home() */ if($abilitato)  { ?>

<div class="row"><div class="col-sm-6"> </div>
<div class="col-sm-6"> 
     <nav class="navbar" role="navigation">
    
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             <!--    <a class="navbar-brand" href="#">Start Bootstrap</a>  -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
      
                	<?php
                        
                        $defaults = array(
	'theme_location'  => 'primary',
	'menu'            => 'Menu 1',
	'container'       => 'div',
	'container_class' => 'collapse navbar-collapse',
	'container_id'    => 'container-menu',
	'menu_class'      => 'nav navbar-nav',
	'menu_id'         => 'primary',
	'echo'            => true,
	'fallback_cb'     => false,
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);
                        
                        
                        wp_nav_menu( $defaults ); ?>
           <!--     <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul> -->
      
            <!-- /.navbar-collapse -->
      
        <!-- /.container -->
    </nav></div></div> 
       

	
    
	
    <div class="row" id="row1">
	<div class="col-sm-6">
       
	</div>
		    <div class="col-sm-6">
			
			<div id="slideshow" class="carousel slide">
                  
                  <?php
			$args=array('post_type' => 'lavori', 'posts_per_page'=>'20');
		   $lavori=get_posts($args);
		   
		  // print_r($lavori);
			
			  ?>
                  
                  
                  <ol class="carousel-indicators">
                  
                 <?php  
		     $x=0;
		     foreach($lavori as $lavoro) {
		     
		     ?>
    <li data-target="#slideshow" data-slide-to="<?php echo $x; ?>"></li>
 
    
    <?php
    $x++;
     } 
     ?>
    
    
  </ol>
                  
                  
		    </div>    
	</div>
   </div>
   
   <?php } ?>

    <!-- Page Content -->
   
