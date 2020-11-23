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
                
               
                 
                 
                  <div class="col-sm-12 white"> 
                <h2><?php the_title(); ?></h2><p>
                <?php the_content(); ?>
                    <a href="<?php the_permalink() ?>">
                    </a>
                </p>
                  </div>
                 
                  
                 
                 
                 </div>
           <?php
                endwhile;
		endif;
?> </div>
            <div class="col-sm-4"> <div class="row" style="margin-left:10px; height: 100px">
                           <div class="col-sm-12 white" style="padding: 10px 0px"> 
         <a class="twitter-timeline" href="https://twitter.com/hashtag/cooperazione" data-widget-id="642811353539997696">#cooperazione Tweets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>

<div class="row" style="height:10px !important"><div class="col-sm-12"> &nbsp;  </div> </div>

<div class="row" style="margin-left:10px; margin-top:20px; height: 100px">
                           <div class="col-sm-12 white" style="padding: 10px 0px"> 

<div class="fb-post" data-href="https://www.facebook.com/FacebookDevelopers/posts/10151471074398553" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/FacebookDevelopers/posts/10151471074398553"><p>Be the first to know when we release a new video by subscribing to our official Facebook Developers YouTube channel!  http://www.youtube.com/facebookdevelopers</p>Posted by <a href="https://www.facebook.com/FacebookDevelopers">Facebook Developers</a> on&nbsp;<a href="https://www.facebook.com/FacebookDevelopers/posts/10151471074398553">Wednesday, May 29, 2013</a></blockquote></div></div>
                           </div></div>

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
       
       
