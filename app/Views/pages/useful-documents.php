<?= $this->extend('layouts/base') ?>

<?= $this->section('stylesheet') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- page-title -->
<div class="ttm-page-title ttm-bg clearfix" style="background-image: url(images/contact.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title"><?= $title ?></h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="/">
                                <i class="themifyicon ti-home"></i> &nbsp;
                                Home</a>
                        </span>
                        <span class="text-light"><?= $title ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
<!--site-main start-->
<div class="site-main">
    <!--blog-classic-section -->
    <div class="ttm-row ttm-without-sidebar clearfix">
        <div class="without-sidebar-container mx-auto">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12 content-area">
                    <!-- post -->
                    <article class="post ttm-blog-single clearfix">
                        <div class="ttm-blog-single-content mb-0">
                            <div class="entry-content">
                                <h3><a href="<?= base_url() ?>/documents/aina-ya-wanachama.pdf" download="SOILA PLC- AINA YA WANACHAMA">SOILA PLC- AINA YA WANACHAMA (Click to Download)</a></h3>
                                <hr>
                                <h3><a href="<?= base_url() ?>/documents/contract-farming.pdf" download="SOILA PLC- CONTRACT FARMING BUSINESS">SOILA PLC- CONTRACT FARMING BUSINESS (Click to Download)</a></h3>
                                <hr>
                                <h3><a href="<?= base_url() ?>/documents/kilimo-cha-mkataba.pdf" download="SOILA PLC- KILIMO CHA MKATABA">SOILA PLC- KILIMO CHA MKATABA (Click to Download)</a></h3>
                                <hr>
                                <h3><a href="<?= base_url() ?>/documents/offer-document.pdf" download="SOILA PLC- OFFER DOCUMENT">SOILA PLC- OFFER DOCUMENT (Click to Download)</a></h3>
                            </div>
                    </article><!-- post end -->
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!--blog-classic-section-end-->
</div>
<!--site-main end-->
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>