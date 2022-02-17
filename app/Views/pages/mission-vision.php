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
                        <h2 class="title">Vision & Mission </h2>
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
            <!--top-section-->
            <section class="ttm-row top-section clearfix">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="row res-991-margin_top_0 g-3">

                                    <div class="col-sm-6">
                                        <div class="card h-100 featured-icon-box icon-align-top-content style1">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Our Vision</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>To be the frontline of agribusiness sector in Africa.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card h-100 featured-icon-box icon-align-top-content style1">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Our Mission</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>To be a prominent and preferred agribusiness investment avenue for all stakeholders </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--top-section-end-->
</div>
<!--site-main end-->
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>