

<?php
    require_once('cockpit/bootstrap.php');
    $lang = $_GET['lang'];
    if(empty($lang)) $lang = 'fr';
?>



<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Valrose</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Charles Haarman" />
	<meta name="robots" content="noindex" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-wrap">
		<?php region('Header', $lang); ?>
        <?php
        $cursor = 0;
        $ids = array('second', 'third', 'fourth', 'fifth');
        $items = cockpit('collections')->collection('Pages')->find()->toArray();
        foreach($items as $item): ?>
            <div class="fh5co-hero fullsize" id="<?php echo $ids[$cursor++]; ?>" style="background-image: url(<?php echo cockpit()->pathToUrl($item['Image']); ?>);" data-stellar-background-ratio="0.5">
    			<div class="overlay"></div>
    			<div class="insection with-bg">
    				<h3 class="main-title"><?php echo $item['Title_'.$lang]; ?></h3>
    				<p class="paragraph hidden-xs"><?php echo $item['Sentence_'.$lang]; ?></p>
    				<div class="svg-frame-cnt">
    					<svg class="svg-frame" width="375" height="315">
    						<line class="top" x1="0" y1="0" x2="375" y2="0"/>
    						<line class="left left-top" x1="0" y1="0" x2="0" y2="80"/>
    						<line class="left left-bottom" x1="0" y1="215" x2="0" y2="315"/>
    						<line class="bottom" x1="0" y1="315" x2="375" y2="315"/>
    						<line class="right right-top" x1="375" y1="0" x2="375" y2="60"/>
    						<line class="right right-bottom" x1="375" y1="275" x2="375" y2="315"/>
    					</svg>
                        <p class="paragraph visible-xs"><?php echo $item['Sentence_'.$lang]; ?></p>
    				</div>
    			</div>
    		</div>
        <?php endforeach;?>
		<?php region('Booking form', $lang) ?>
	</div>

    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <p class="text-success">
                La demande a été envoyée avec succès.
            </p>

            <p>
                Nous vous remercions pour votre confiance, et vous invitons à consulter votre boite email.
            </p>
        </div>
      </div>
    </div>
    <div class="modal fade" id="error-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <p class="text-danger">
                Un problème est survenu lors de la soumission. Merci de réessayer.
            </p>
        </div>
      </div>
    </div>


	<?php region('Footer', $lang); ?>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/timepicki.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	<!-- <script src="js/animation.js"></script> -->

	</body>
</html>
