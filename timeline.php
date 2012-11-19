
<!-- Begin Head Image -->
<div class="head-image"> <img src="images/timeline.jpg" alt="" />
	<div class="page-title">
		<br>
		<h1>From the beginning to the geek</h1>
	</div>
</div>
<!-- End Head Image --> 


<!-- Begin Wrapper -->
<div class="wrapper">
	<h2>TIMELINE</h2>
	<div id="timeline"></div>
</div>
<!-- End Wrapper --> 

<!-- BEGIN TimelineJS -->
<script type="text/javascript">
	var timeline_config = {
		width:              '100%',
		height:             '500',
		source:             'https://docs.google.com/spreadsheet/pub?key=0AoH8QRiQ_MMIdG14djdUZUd2ZjEzTC1xd3pTNjVOQnc&output=html',
            embed_id:           'timeline',               //OPTIONAL USE A DIFFERENT DIV ID FOR EMBED
            start_at_end:       false,                          //OPTIONAL START AT LATEST DATE
            start_at_slide:     '0',                            //OPTIONAL START AT SPECIFIC SLIDE
            start_zoom_adjust:  '0',                            //OPTIONAL TWEAK THE DEFAULT ZOOM LEVEL
            hash_bookmark:      true,                           //OPTIONAL LOCATION BAR HASHES
            font:               'Bevan-PotanoSans',             //OPTIONAL FONT
            debug:              false,                           //OPTIONAL DEBUG TO CONSOLE
            lang:               'fr',                           //OPTIONAL LANGUAGE
            maptype:            'watercolor',                   //OPTIONAL MAP STYLE
            css:                'css/timeline.css',     //OPTIONAL PATH TO CSS
            js:                 'js/timeline-min.js'    //OPTIONAL PATH TO JS
    }
</script>
<script type="text/javascript" src="./js/storyjs-embed.js"></script>
<!-- END TimelineJS -->