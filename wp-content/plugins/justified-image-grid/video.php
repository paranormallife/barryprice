<?php
	// Loaded as part of a template redirect, that's how it has access to WP functions
	if(empty($_GET["file"])){
		echo 'Video file is not specified.';
		die();
	}
	$jig_settings = get_option('jig_settings');

	// Defaults for these settings if they are not yet in the database
	if(empty($jig_settings['video_area_background'])){
		$jig_settings['video_area_background'] = 'transparent';
	}
	if(empty($jig_settings['video_autoplay'])){
		$jig_settings['video_autoplay'] = 'yes';
	}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title><?php _e('Justified Image Grid video player', 'jig_td'); ?></title>
	<link rel='stylesheet' id='mediaelement-css'  href='<?php echo includes_url("js/mediaelement/mediaelementplayer.min.css"); ?>' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-mediaelement-css'  href='<?php echo includes_url("js/mediaelement/wp-mediaelement.css"); ?>' type='text/css' media='all' />
	<script type='text/javascript'>
		var _wpmejsSettings = {"pluginPath":"<?php echo str_replace('/', '\/', includes_url('js/mediaelement/', 'relative')); ?>"};
		var _JIGvideo = {
			"autoplay": <?php echo $jig_settings['video_autoplay'] == 'yes' ? 'true' : 'false'; ?>,
			"site_url": "<?php echo site_url(); ?>",
			"isset_referrer": <?php echo isset($_SERVER["HTTP_REFERER"]); ?>,
			"ref": "<?php echo esc_attr($_SERVER['HTTP_REFERER']); ?>",
			"hosted_here": <?php echo '"'.esc_attr($_GET['file']).'".indexOf("'.site_url().'") != -1'.(!empty($_GET["poster"]) ? ' && "'.esc_attr($_GET['poster']).'".indexOf("'.site_url().'") != -1' : ''); ?>,
			"inIframe": function () {
				try {
					return window.self !== window.top;
				} catch (e) {
					return true;
				}
			},
			"canPlay": function (){
				var player = new MediaElementPlayer('#jigVideoPlayer');
				if (_JIGvideo.autoplay === true) {
					player.play();
				}
			}
		};
	
	</script>
	<script type='text/javascript' src='<?php echo includes_url("js/jquery/jquery.js"); ?>'></script>
	<script type='text/javascript' src='<?php echo includes_url("js/mediaelement/mediaelement-and-player.min.js"); ?>'></script>
	<script type='text/javascript' src='<?php echo includes_url("js/mediaelement/wp-mediaelement.js"); ?>'></script>
	<script type='text/javascript' src='<?php echo plugins_url('js/jig-video.js', __FILE__); ?>'></script>



	<style type="text/css">
		html, body, div, span, applet, object, iframe, img, embed, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font-size: 100%;
			font: inherit;
			vertical-align: baseline;
		}
		body {
			line-height: 1;
		}
		html, body{
			overflow: hidden;
			width: 100%;
			height: 100%;
		}
		video{
			max-width: 100%;
			max-height: 100%;
		}
		.mejs-container, .mejs-embed, .mejs-embed body{
			background: <?php echo $jig_settings['video_area_background']; ?>; /* player background */
		}
		.mejs-controls .mejs-button button:focus{
			outline: none;
		}
		.mejs-controls .mejs-time-rail .mejs-time-loaded {
			background: #676767;
		}
		/*.mejs-overlay-loading{
			display: none;
		}*/
		.me-cannotplay{
			height: auto !important;
			max-height: 100%;
		}
		.securityNotice {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size: 16px;
			text-align: center;
		    font: small arial,sans-serif;
		   	color:#b71c1c;
		   	line-height: 1.8;
		}
	</style>
</head>

<body>
	<video id="jigVideoPlayer" height="100%" width="100%" <?php echo !empty($_GET["poster"]) ? 'poster="'.esc_attr($_GET["poster"]).'"' : ''; ?> src="<?php echo esc_attr($_GET["file"]); ?>">
	</video>
</body>
</html>