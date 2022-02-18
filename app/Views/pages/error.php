<?= $this->extend('layouts/base') ?>

<?= $this->section('stylesheet') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!--site-main start-->
<div class="site-main">
            <section class="error-404 ttm-bgimage-yes error-404 ttm-bg-error">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="ttm-big-icon ttm-textcolor-skincolor">
                        <i class="fa fa-thumbs-o-down"></i>
                    </div>
                    <header class="page-header">
                        <h1 class="page-title text-light">404 ERROR</h1>
                    </header>
                    <div class="page-content">
                        <p>This page may have been moved or deleted. Be sure to check your spelling.</p>
                    </div>
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white" href="/">Back to Home <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </section>
        </div>
        <!--site-main end-->
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>