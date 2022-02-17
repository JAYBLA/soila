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
                        <h2 class="title">Eligibility</h2>
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
                                <h3>Eligibility</h3>
                                <p>SOILA PLC Membership is open to all stakeholders in agriculture. SOILA PLC membership is categorized in four groups, which are investor’s members, shareholders members, community members and farmer’s members.
                                </p>
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