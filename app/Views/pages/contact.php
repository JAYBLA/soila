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
                        <h2 class="title">Contact Us</h2>
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
    <!--form-section-->
    <section class="ttm-row form-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--section-title-->
                    <div class="section-title title-style-center_text margin_bottom30">
                        <div class="title-header">
                            <h3>GET IN TOUCH</h3>
                            <h2 class="title">Have Any Question?, Drop Us a Line!</h2>
                        </div>
                    </div>
                    <!--section-title-end-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="ttm-bgcolor-white contact-form-bg p-40 res-991-margin_right0 ">
                        <form id="contact_form" class="wrap-form contact_form padding_top15" method="post" action="#">
                            <div class="row ttm-boxes-spacing-30px">
                                <div class="col-sm-6 ttm-box-col-wrapper">
                                    <label>
                                        <span class="text-input margin_bottom0"><input name="your-name" type="text"
                                                value="" placeholder="Your Name*" required="required"></span>
                                    </label>
                                </div>
                                <div class="col-sm-6 ttm-box-col-wrapper">
                                    <label>
                                        <span class="text-input margin_bottom0"><input name="Phone" type="text" value=""
                                                placeholder="Your Phone*" required="required"></span>
                                    </label>
                                </div>
                                <div class="col-sm-6 ttm-box-col-wrapper">
                                    <label>
                                        <span class="text-input margin_bottom0">
                                            <input name="Email" type="text" value=""
                                                placeholder="Email Address*" required="required">
                                            </span>
                                    </label>
                                </div>
                                <div class="col-sm-6 ttm-box-col-wrapper">
                                    <label>
                                        <span class="text-input margin_bottom0"><input name="Subject" type="text"
                                                value="" placeholder="Subject*" required="required"></span>
                                    </label>
                                </div>
                                <div class="col-sm-12 ttm-box-col-wrapper">
                                    <label>
                                        <span class="text-input margin_bottom0"><textarea name="your-message" cols="40"
                                                rows="6" placeholder="Your Message"
                                                aria-required="true"></textarea></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button
                                        class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor w-100 text-light rounded-3"
                                        type="submit">Send Now!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ttm-bgcolor-white p-40 res-991-margin_top30 ttm-bgcolor-white p-40 ">
                        <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon flaticon-message"></i>
                                </div>
                            </div>
                            <div class="featured-content pt-2">
                                <div class="featured-title ">
                                    <h3 class="margin_bottom0">Email</h3>
                                </div>
                                <div class="featured-desc">
                                    <p><a href="mailto:info@soila.co.tz">info@soila.co.tz</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="featured-content pt-2">
                                <div class="featured-title ">
                                    <h3 class="margin_bottom0">Phone</h3>
                                </div>
                                <div class="featured-desc">
                                    <p><a href="tel:+255682655515">+255 (0) 682 655 515</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="featured-content pt-2">
                                <div class="featured-title ">
                                    <h3 class="margin_bottom0">Office Location</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>CCM MKOA BUILDING, <br>
                                        Block B, Second Floor, Kiswanya Street,<br>
                                        Plot number. 3.0.6.01 CR, Near Sabasaba ground,<br>
                                        <!-- P.o Box . AAAA<br> -->
                                        Morogoro, Tanzania
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--form-section-end-->
    <?= $this->endSection() ?>

    <?= $this->section('javascript') ?>
    <?= $this->endSection() ?>