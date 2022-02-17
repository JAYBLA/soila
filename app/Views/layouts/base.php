<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOILA | <?= $title ?> </title>
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/revolution/css/rs6.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/responsive.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/prettyPhoto.css">
    <!-- <link rel="stylesheet" href="css/slick.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.3.4/css/jquery.mmenu.all.min.css'>
    <?= $this->rendersection('stylesheet') ?>
</head>
</head>

<body>
    <!--page start-->
    <div class="page">
        <!-- preloader start -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->
        <?= $this->include('layouts/includes/header') ?>
        <?= $this->rendersection('content') ?>

        <?= $this->include('layouts/includes/footer') ?>

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->
    </div><!-- page end -->
    <!-- Javascript -->
    <script src="<?= base_url() ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>/js/jquery-migrate-3.3.2.min.js"></script>
    <script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/js/jquery.easing.js"></script>
    <script src="<?= base_url() ?>/js/jquery-waypoints.js"></script>
    <script src="<?= base_url() ?>/js/jquery-validate.js"></script>
    <script src="<?= base_url() ?>/js/jquery.prettyPhoto.js"></script>
    <!-- <script src="js/slick.min.js"></script> -->
    <script src="<?= base_url() ?>/js/numinate.min.js"></script>
    <script src="<?= base_url() ?>/js/imagesloaded.min.js"></script>
    <script src="<?= base_url() ?>/js/jquery-isotope.js"></script>
    <script src="<?= base_url() ?>/revolution/js/rbtools.min.js"></script>
    <script src="<?= base_url() ?>/revolution/js/rs6.min.js"></script>
    <script src="<?= base_url() ?>/revolution/js/slider.js"></script>
    <script src="<?= base_url() ?>/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.3.4/js/jquery.mmenu.min.all.min.js'></script>

    <script>
            $(document).ready(function(){
                $("#site-desktop-menu")
                .clone()
                .attr({'class':'d-lg-none','id':'mobile-menu'})
                .insertAfter("nav#site-desktop-menu");                
            });
        </script>
        
        <script>
			$(function() {
				$('nav#mobile-menu').mmenu({
					extensions	: [ 'fx-menu-slide', 'shadow-page', 'shadow-panels', 'listview-large', 'pagedim-white' ],
					iconPanels	: true,					
					keyboardNavigation : {
						enable	: true,
						enhance	: true
					},
					navbar : {
						title : 'SOILA'
					},
					navbars	: [
                            {
							position	: 'top',
							content		: [ 'breadcrumbs', 'close' ]
						}, 
					]
				});
			});
		</script>

    <?= $this->rendersection('javascript') ?>
    <!-- Javascript end-->
</body>

</html>