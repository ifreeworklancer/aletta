<?php
require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page About -->
    <section id="page-about-description" data-class-header="dark" data-class-nav="primary"
             style="background-image: url('<?= $page_about['description']['image']; ?>');">
        <div class="container-fluid h-100 p-0">
            <div class="row justify-content-end align-items-center h-100 no-gutters">
                <div class="col-sm-9 col-md-7 col-lg-6 col-xl-4">
                    <div class="page-about-item">
                        <h1 class="title">
                            <?= $page_about['description']['title']; ?>
                        </h1>
                        <div class="description">
                            <?= $page_about['description']['description']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="decor-title">
            <?= $page_about['description']['subtitle']; ?>
        </h2>
    </section>

    <section id="page-about-overview" class="page-overview" data-class-header="white" data-class-nav="dark">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-7 col-lg-5 order-2 order-lg-1">
                    <div class="page-about-overview-item">
                        <h2 class="title">
                            <?= $page_about['overview']['title']; ?>
                        </h2>
                        <div class="description">
                            <p>
                                <?= $page_about['overview']['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-7 mb-5 mb-lg-0 order-1 order-lg-2">
                    <div class="video-overview"
                         style="background-image: url('<?= getVideoImageLinkAttribute($page_about['overview']['video']) ?>');"
                         data-youtube="<?= getVideoLinkAttribute($page_about['overview']['video']); ?>">
                        <figure class="product-overview-decor-image"
                                style="background-image: url('../../images/icon/page-about-overview-decor.png');"></figure>
                        <svg width="40" height="40">
                            <use xlink:href="#play-icon"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <figure class="decor-image d-none d-md-block"
                style="background-image: url('../../images/icon/decor-image-dark.png');"></figure>
    </section>

<?php
require_once('../views/sections/contacts.php');
require_once('../views/base/footer.php');