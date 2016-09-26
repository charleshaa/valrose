

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
	<meta name="viewport" content="width=375, user-scalable=no">
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
        $useragent=$_SERVER['HTTP_USER_AGENT'];
        $mobile = FALSE;
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
            $mobile = TRUE;
        }

        $cursor = 0;
        $ids = array('second', 'third', 'fourth', 'fifth');
        $items = cockpit('collections')->collection('Pages')->find()->toArray();
        foreach($items as $item):
            $image = $mobile ? str_replace(".jpg", "_mobile.jpg", $item['Image']) : $item['Image'];
            ?>
            <div class="fh5co-hero fullsize" id="<?php echo $ids[$cursor++]; ?>" style="background-image: url(<?php echo cockpit()->pathToUrl($image); ?>);" data-stellar-background-ratio="0.5">
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
