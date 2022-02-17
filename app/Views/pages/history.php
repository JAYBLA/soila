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
                        <h2 class="title">Brief History</h2>
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
                                <h3>Brief History</h3>
                                <p>SOILA PUBLIC LIMITED COMPANY is a registered public company on Business Regulatory
                                    Licensing Agency (BRELA) and Tanzania Revenue Authority (TRA) in Tanzania which
                                    based on contract farming services, agriculture loans through SACCOS, marketing
                                    search, digital-agriculture, processing factories and food products. <br><br>

                                    SOILA PLC intends to provide service and products through investment in agriculture
                                    and agro-based industries of Tanzania. In addition, SOILA PLC is founded in response
                                    to the growing demand for clients/investors to invest in agriculture. Using
                                    market-based approaches and strategies, as well as working in partnership with
                                    stakeholders from the farmers to the exporters, SOILA PLC promises and promotes
                                    sustainability and profitability in the interest of national food security, income
                                    generation, poverty alleviation and agriculture sector development of Tanzania. <br><br>

                                    SOILA PLC works closely with the various actors on agriculture sector to set up and
                                    allow clients to invest on horticulture crops, maize, rice, sunflowers through SOILA
                                    PLC as implementer. The set of ideals that SOILA PLC carries is a paradigm shift
                                    from the previous contract farming model to a more robust and comprehensive system
                                    for clients/investors.  <br> <br>

                                    The company was formed from the words of <strong> SOLUTION FOR INVESTORS IN LIVESTOCK AND
                                    AGRICULTURE (SOILA PLC).</strong>
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