<?php $url_es= get_post_meta($post->ID, "file", true);

$url_json= get_post_meta($post->ID, "json", true);

$url=get_template_directory_uri()."/".$tipo."/".$url_es.".txt";



if($url_json) {
$json=get_template_directory_uri()."/regole/".$url_json.".json";
}
// echo $json;


?>

  <?php
  $lines = file($url);


//  $frasi=file_get_contents($url); ?>
   <script>
var listone;
var regole='<?php echo $json; ?>';

var fra= [];
  <?php
 foreach ($lines as $line_num => $line) {
$line = str_replace(array("\n","\r"), "", $line);
?>
fra[<?php echo $line_num ?>]="<?php echo $line; ?>";
<?php  } ?>


</script>





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
