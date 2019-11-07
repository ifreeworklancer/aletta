<?php
require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header-secondary.php');
?>

    <!-- Single product -->
    <section id="product-description" data-class-header="white" data-class-nav="dark">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-10 col-lg-6">
                    <div class="products-gallery">
                        <div class="custom-tabs">
                            <div class="custom-tabs-nav">
                                <?php $countTabNav = 0;
                                foreach ($single_product['description']['images'] as $image) : $countTabNav++; ?>
                                    <div class="custom-tabs-nav-item <?php if ($countTabNav === 1) echo 'active'; ?>">
                                        <figure style="background-image: url('<?= $image; ?>');"></figure>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="custom-tabs-body">
                                <?php $countTabBody = 0;
                                foreach ($single_product['description']['images'] as $image) : $countTabBody++; ?>
                                    <div class="custom-tabs-body-item <?php if ($countTabBody === 1) echo 'active'; ?>">
                                        <figure style="background-image: url('<?= $image; ?>');"></figure>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-6">
                    <div class="products-description">
                        <h2 class="title">
                            <?= $single_product['description']['title']; ?>
                        </h2>
                        <div class="description">
                            <p>
                                <?= $single_product['description']['description']; ?>
                            </p>
                        </div>
                        <div class="feature">
                            <div class="feature-title">
                                характеристики
                            </div>
                            <ul class="feature-list">
                                <?php foreach ($single_product['description']['feature'] as $value) : ?>
                                    <li>
                                        <?= $value; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="price mb-0">
                                <span class="price-text">
                                    цена
                                </span>
                                <span class="price-value">
                                    <?= $single_product['description']['price'] ?>
                                </span>
                                <span class="price-currency">
                                    грн
                                </span>
                            </div>
                            <a href="#" class="btn btn-outline-primary open-feedback ml-4">
                                заказать
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="decor-title">
            <span>
                <?= $single_product['description']['title']; ?>
            </span>
        </div>
        <figure class="decor-image d-none d-xl-block"
                style="background-image: url('../../images/icon/decor-image-secondary.png');"></figure>
    </section>

    <section id="product-overview" data-class-header="dark" data-class-nav="primary">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-7 col-lg-5 order-2 order-lg-1">
                    <div class="product-overview-item">
                        <h2 class="title">
                            <?= $single_product['overview']['title']; ?>
                        </h2>
                        <div class="description">
                            <p>
                                <?= $single_product['overview']['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-7 mb-5 mb-lg-0 order-1 order-lg-2">
                    <div class="video-overview"
                         style="background-image: url('<?= getVideoImageLinkAttribute($single_product['overview']['video']) ?>');"
                         data-youtube="<?= getVideoLinkAttribute($single_product['overview']['video']); ?>">
                        <figure class="product-overview-decor-image"
                                style="background-image: url('../../images/icon/product-overview-decor.png');"></figure>
                        <svg width="50" height="50">
                            <use xlink:href="#play-icon"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <figure class="decor-image d-none d-md-block" style="background-image: url('../../images/icon/decor-image-light.png');"></figure>
    </section>

<?php
require_once('../views/sections/reviews.php');
require_once('../views/base/footer.php');