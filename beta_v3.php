<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.6
		Site	: www.buildinternet.com/project/supersized
		
		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->

	<head>

		<title>Barry Price</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<link rel="stylesheet" href="http://barrypricearchitecture.com/plugins/slideshow/css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="http://barrypricearchitecture.com/plugins/slideshow/theme/supersized.shutter.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="http://barrypricearchitecture.com/includes/styles.css"/>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://barrypricearchitecture.com/plugins/slideshow/js/jquery.easing.min.js"></script>
		
		<script type="text/javascript" src="http://barrypricearchitecture.com/plugins/slideshow/js/supersized.3.2.6.min.js"></script>
		<script type="text/javascript" src="http://barrypricearchitecture.com/plugins/slideshow/theme/supersized.shutter.min.js"></script>
		<script type="text/javascript" src="http://barrypricearchitecture.com/includes/javascript.js"></script>
<link rel="stylesheet" href="http://barrypricearchitecture.com/includes/tipsy.css" type="text/css" />

<link rel="stylesheet" href="http://barrypricearchitecture.com/includes/tipsy-docs.css" type="text/css" />



<script type="text/javascript" src="http://barrypricearchitecture.com/includes/jquery.tipsy.js"></script>
		<script type="text/javascript">
			
			jQuery(function($){
				 $('#play-button').tipsy({gravity: 'sw',fade: true});
				$('#tray-button').tipsy({gravity: 'sw',fade: true});
				$('#showNav').tipsy({gravity: 'se',fade: true});
				$('#hideNav').tipsy({gravity: 'se',fade: true});
				$("#showNav").css('display', 'none');
				$.supersized({
				
					// Functionality
					slide_interval          :   10000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	2300,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														
														
	<?php include("connection.php"); ?> 													
	<?	
	$imageCounter=0;
	$imageDB=mysql_query("SELECT * FROM wp_ngg_pictures WHERE `exclude` =0 ORDER BY `sortorder` ASC ");
				while($Images=mysql_fetch_assoc($imageDB)){
			$imageCounter++;
			if($imageCounter>1){
				echo(",");
			}
echo("{image : 'http://barrypricearchitecture.com/cms/wp-content/gallery/homepage/".$Images["filename"]."', title : '<h1>".$Images["alttext"]."</h1> ".$Images["description"]."', thumb : 'http://barrypricearchitecture.com/cms/wp-content/gallery/homepage/thumbs/thumbs_".$Images["filename"]."'}");
				}
?>
															
															
												]
					
				});
		    });
		    
		</script>
		
	</head>
	
	

<body>

	<div id="headerBar"><a href="/beta.php"><img src="http://barrypricearchitecture.com/images/logo3.png" name="logo"  border="0" id="logo" /></a><span id="pageLinks" class="bigger"><span onclick="showPage('about');">about</span> | <span onclick="showPage('contact');">contact</span></span></div>
	
	<!--End of styles-->

	<!--Thumbnail Navigation-->
<div id="prevthumb"></div>
	<div id="nextthumb"></div>
	
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
	
	<div id="thumb-tray" class="load-item">
		<div id="thumb-back"></div>
		<div id="thumb-forward"></div>
	</div>
	
	<!--Time Bar-->
	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>
	
	<!--Control Bar-->
	<div id="controls-wrapper" class="load-item">
		<div id="controls">
			
			<a id="play-button" original-title="Play/Pause Slideshow"><img id="pauseplay" src="http://barrypricearchitecture.com/plugins/slideshow/img/pause.png"/></a>
		<a id="tray-button" original-title="Show/Hide Thumbnails"><img id="tray-arrow" src="http://barrypricearchitecture.com/plugins/slideshow/img/button-tray-up.png"/></a>
			<!--Slide counter-->
			<div id="slidecounter">
				<span class="slidenumber"></span> / <span class="totalslides"></span>
			</div>
			
			<!--Slide captions displayed here-->
			<div id="slidecaption"></div>
			
			<!--Thumb Tray button-->
			
			
			<!--Navigation-->
			<ul id="slide-list"></ul>
			
		</div>
        
	</div><div id="hideNav" onclick="hideNav();" class="showHideBttns" original-title="Hide Navigation"></div>
            <div id="showNav" onclick="showNav();" class="showHideBttns" original-title="Show Navigation"></div>
<!--About Contact-->
<?
$contentDB=mysql_query("SELECT * FROM wp_posts WHERE `ID` =2 ");
				$Aboutcontent=mysql_fetch_assoc($contentDB);
		?>
<div id="about" class="content"><div class="closeContent" onclick="closeContent();"></div>
<h1><?= $Aboutcontent["post_title"] ?></h1>
  <?= nl2br($Aboutcontent["post_content"]) ?>
</div>
<?
$contentDB=mysql_query("SELECT * FROM wp_posts WHERE `ID` =6 ");
				$Contactcontent=mysql_fetch_assoc($contentDB);
		?>
<div id="contact" class="content"><div class="closeContent" onclick="closeContent();"></div>
<h1><?= $Contactcontent["post_title"] ?></h1>
  <?= nl2br($Contactcontent["post_content"]) ?>

</div>
</body>
</html>
