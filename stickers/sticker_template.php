<!DOCTYPE HTML>
<html>
    <head>
        <?php
			// require meta template for head
			require_once $loc . $assetsDir . 'meta.php';
		?>
        <link type="text/css" href="../css/reset.css" rel="stylesheet" media="screen" />
        <link type="text/css" href="../css/style.css" rel="stylesheet" media="screen" />
        
        <script type="text/javascript">
			var meta_gtm = "<?php echo $meta_gtm; ?>";
		</script>
    </head>
    
    <body class="no-bg">
    	<div id="img-container">
            <a href="<?php echo $meta_url; ?>" target="_self">
                <img src="<?php echo $dsp_image; ?>" title="<?php echo $img_title; ?>" alt="<?php echo $img_title; ?>" />
            </a>
        </div>
    </body>
    
    <?php
		// require google tag manager template
		require_once $loc . $assetsDir . 'clalit_gtm.php';
	?>
</html>
