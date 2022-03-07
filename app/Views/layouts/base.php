<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOILA | <?= $title ?> </title>
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css" integrity="sha512-aB3UdGCt+QZdSlPCgDsJBJ+JytRb8oq/cdMEpLTaypINSyom0h5vcw2HsF1m0eZtWsetJllPtQOfCPM9UrdKYw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/revolution/css/rs6.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/responsive.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" integrity="sha512-4uGZHpbDliNxiAv/QzZNo/yb2FtAX+qiDb7ypBWiEdJQX8Pugp8M6il5SRkN8jQrDLWsh3rrPDSXRf3DwFYM6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css" integrity="sha512-aB3UdGCt+QZdSlPCgDsJBJ+JytRb8oq/cdMEpLTaypINSyom0h5vcw2HsF1m0eZtWsetJllPtQOfCPM9UrdKYw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js" integrity="sha512-IB7NSySDRedVEsYsOVuzN5O5jwRjV2ewVVmkDFIgE0yNu11GreBCOMv07i7hlQck41T+sTXSL05/cG+De4cZDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="js/slick.min.js"></script> -->
    <script src="<?= base_url() ?>/js/numinate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.min.js" integrity="sha512-GNb4Gyn5ZK+XcsnKg8jeo5olNYWqH+j+gMvbG1X5Z9Vz7bv/tQ2spLUuKcXo8T3r4p3IxVt0e/ARNwFftqCt+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url() ?>/revolution/js/rbtools.min.js"></script>
    <script src="<?= base_url() ?>/revolution/js/rs6.min.js"></script>
    <script src="<?= base_url() ?>/revolution/js/slider.js"></script>
    <script src="<?= base_url() ?>/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.3.4/js/jquery.mmenu.min.all.min.js'></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
        
        <script>
            $(document).ready(function() {
                <?php if(session()->getFlashdata('status')){?>
                swal({
                    title: "<?= session()->getFlashdata('status') ?>",
                    text: "<?= session()->getFlashdata('status_txt') ?>",
                    icon: "<?= session()->getFlashdata('status_icon') ?>",
                    button: "OK!",
                });
                <?php } ?>
            });
        </script>

    <?= $this->rendersection('javascript') ?>
    <!-- Javascript end-->
</body>

</html>