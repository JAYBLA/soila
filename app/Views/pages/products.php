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
                                <h3><?= $title ?></h3>
                                <p>SOILA PLC is a Tanzania public company that is committed to cultivating both organic
                                    and non – organic crops and livestock for both the United Republic of Tanzania
                                    market and the global market. We are in business to produce both organic and non –
                                    organic food and raw materials for people and industries in commercial quantities.
                                    Our products are being sale through our physicals shops located in Morogoro CBD also
                                    we deliver our products according to order and large quantity through signed
                                    contract <br>
                                    These are the products we concentrate on. If need arises, we will definitely add
                                    related products;

                                <ul class="ttm-list ttm-list-style-icon d-grid ttm-list-icon-color-skincolor">
                                    <li><i class="fa fa-arrow-circle-right"></i><span
                                            class="ttm-list-li-content">Maize flour ( Brand: SOILA - Sembe)</span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span
                                            class="ttm-list-li-content">Rice (Brand:  SOILA – Rice grain)</span>
                                    </li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span
                                            class="ttm-list-li-content">Oilseed (Brand: SOILA  – Cooking oil)</span>
                                    </li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span
                                            class="ttm-list-li-content">Agriculture produce ( Brand: SOILA- Crops)</span></li>
                                </ul>
                                <br>
                                The Board also makes recommendations to various LNGOs, INGOs, various groups and
                                government agencies to ensure that the corporate governance policies by which SOILA
                                PLC operates are relevant and up to date. Furthermore, SOILA PLC’s Board oversees
                                and monitors corporate operations according to pertinent legal and national
                                requirements in coherence with its need to contain risk at a tolerable level.
                                </p>
                            </div><!-- ttm-blog-classic-content end -->
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