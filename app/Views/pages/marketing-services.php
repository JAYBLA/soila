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
                        <h2 class="title">Marketing Services</h2>
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
                                <h3>Marketing Services</h3>
                                <p>
                                    SOILA PLC we help farmers to access markets for their agriculture produce in a right
                                    time. Get in touch with our marketing service and be one of the beneficiaries in
                                    Tanzania and worldwide.
                                </p>

                                <h3>1. How to become member?</h3>
                                <p>Procedures for joining and becoming a member of SOILA PLC for marketing services.</p>
                                <p>
                                <p>
                                <ul class="ttm-list ttm-list-style-icon d-grid ttm-list-icon-color-skincolor">
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">We
                                            have a very simple procedure to of joining SOILA PLC, you can become a
                                            member by filling the membership application form available at our
                                            headquarters offices in Morogoro or download membership application form at
                                            our website and contact directly with our staff through phone number, email
                                            or WhatsApp.</span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">After
                                            filling in the form, the next step is to pay your membership dues according
                                            to your membership category. The payment can be done directly to our Bank
                                            Account indicated on the form or by cash at our office.</span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">For
                                            more information about how to join SOILA PLC, please contact the Investor
                                            relation at the address investorrelation@soila.co.tz .Become a member and
                                            join an organization that understands your concern on marketing issue.
                                        </span></li>
                                </ul>
                                </p>
                                <h3>2. Benefit</h3>
                                <p>All SOILA PLC members-individuals, groups, SMEs and organizations-will have exclusive
                                    access to the following member-only benefits:</p>
                                <p>
                                <ul class="ttm-list ttm-list-style-icon d-grid ttm-list-icon-color-skincolor">
                                    <li><i class="fa fa-arrow-circle-right"></i><span
                                            class="ttm-list-li-content">Marketing access of your agriculture produce in
                                            and outside Tanzania</span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span
                                            class="ttm-list-li-content">Receive information of agriculture produce and
                                            various opportunities </span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">
                                            Access to SOILA PLC's technical services through our staff who are able to
                                            provide technical services on sales and marketing, food safety, standards,
                                            nutrition and government policies and regulations.
                                        </span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">
                                            Access to SOILA PLC's marketing information database which delivers various
                                            information directly to your phone including latest prices in more than 30
                                            markets, proper agricultural practices, industry news updates and policy and
                                            regulatory issues
                                        </span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">
                                            Input dealers, financial institutions and other service providers will be
                                            given access to our database of farmers as well as the chance to advertise
                                            their products. Farmers and other value chain actors will be given
                                            opportunity to access information on quality input and financial services
                                            dedicated to advancing the agricultural sector
                                        </span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">
                                            Opportunity to network with other industry actors through various platforms.
                                            organized by SOILA PLC and its partners
                                        </span></li>
                                </ul>
                                </p>

                                <h3>3. Membership typet</h3>
                                <p>As Business Association SOILA PLC core purpose is to represent its members and focus
                                    their interests to bring change for the better on marketing of agriculture produce.
                                    SOILA PLC has three categories of membership:</p>
                                <p>
                                <h6>Silver:</h6>
                                <p> Small farmers who want to sell 0 to 20 tons of agriculture produce. (membership fee
                                    is Tsh. 30,000 per year)</p>
                                <h6>Tanzanite:</h6>
                                <p> Medium farmers who want to sell 0 to 100 tons of agriculture produce (membership fee
                                    is Tsh. 50,000 per year)</p>
                                <h6>Gold:</h6>
                                <p> Big farmers who want to sell 0 to 1000 tons and so on of agriculture produce.
                                    (membership fee is Tsh. 150,000 per year)</p>

                                </p>

                                <h3>4. Application Forms</h3>
                                <p>Clients may apply for SOILA PLC products and service directly from Head Office or
                                    through a downloading form in our website(<a
                                        href="www.soila.co.tz">www.soila.co.tz</a> ).
                                </p>
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">
                                    <a href="<?= base_url() ?>/documents/marketing-services.pdf" download="Marketing services -Membership application For"><span style="text-decoration:underline;">Download Marketing services -Membership application Form</span></a>
                                    </span></li>
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