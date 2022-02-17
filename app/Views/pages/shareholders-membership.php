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
                        <h2 class="title">Shareholders Membership</h2>
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
                                <h3>Shareholders membership</h3>
                                <p>This is the type of membership, joining for the purpose of buying company share through offer document 
                                    <ul class="ttm-list ttm-list-style-icon d-grid ttm-list-icon-color-skincolor">
                                            <li><i class="fa fa-arrow-circle-right"></i><span
                                                    class="ttm-list-li-content">Joining fee is Tsh. 5,000</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span
                                                    class="ttm-list-li-content">Member required to buy company share at least 50 share and so on</span>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span
                                                    class="ttm-list-li-content">Each share price is Tsh. 500</span>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span
                                                    class="ttm-list-li-content">Eligible to join SOILA SACCOS </span>
                                            </li>
                                        </ul>
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