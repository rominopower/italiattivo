		<?php
		/*template name: Page Mappa */
		get_header();
		?>
	
	
 

  			
							<div id="amchart1" style="width: 100%; height: 300px;"></div>
						
						
		



<script type='text/javascript' src='http://www.amcharts.com/lib/3/ammap.js?ver=1.0.11'></script>
<script type='text/javascript' src='http://www.amcharts.com/lib/3/maps/js/worldLow.js?ver=1.0.11'></script>
	
			
<?php

get_footer();
?>
		    <script>
      try {

}
catch( err ) { console.log( err ); }    </script>
    	</body>
</html>
	    <script>
      try {
var amchart1 = AmCharts.makeChart("amchart1", {
	"type": "map",
    "theme": "none",
    "pathToImages": "http://www.amcharts.com/lib/3/images/",

	"dataProvider": {
     "map": "worldLow",
     "zoomLevel":3,
     "zoomLongitude":10.2,
     "zoomLatitude":8.3,
     "areas":[{id:"AF", url:"../?country=afghanistan"},{id:"IQ", url:"../?country=iraq"},{id:"LY", url:"../?country=libia"},{id:"YE", url:"../?country=yemen"}],
	},
	"areasSettings": {
		"autoZoom": true,
		"selectedColor": "#CC0000"
	},
  
	"smallMap": {}
});
}
catch( err ) { console.log( err ); }    </script>