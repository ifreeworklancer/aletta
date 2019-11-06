<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page Laboratory -->
    <section id="page-laboratory" data-class-header="dark" data-class-nav="primary">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-sm-6 col-lg-5">
                    <div class="page-description">
                        <h1 class="title">
                            <?= $page_laboratory['title']; ?>
                        </h1>
                        <div class="description">
                            <?= $page_laboratory['description']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-laboratory-view">
            <div class="page-laboratory-slider">
                <?php foreach ($page_laboratory['gallery'] as $item) : ?>
                    <figure class="page-laboratory-slider-item"
                            style="background-image: url('<?= $item; ?>');"></figure>
                <?php endforeach; ?>
            </div>
            <div class="slider-navigation">
                <div class="slider-arrow slider-arrow--laboratory">
                    <div class="slider-arrow-item slider-arrow-item--prev">
                        <svg width="20" height="20">
                            <use xlink:href="#arrow-prev"></use>
                        </svg>
                    </div>
                    <div class="slider-arrow-item slider-arrow-item--next">
                        <svg width="20" height="20">
                            <use xlink:href="#arrow-next"></use>
                        </svg>
                    </div>
                </div>
                <div class="slider-nav slider-nav--laboratory">
                    <div class="slider-nav-item slider-nav-item--index">01</div>
                    <div class="slider-nav-item slider-nav-item--last">01</div>
                </div>
            </div>
        </div>
        <h2 class="decor-title">
            <?= $page_laboratory['subtitle']; ?>
        </h2>
        <figure class="decor-image d-none d-md-block" style="background-image: url('../../images/icon/decor-image-light.png');"></figure>
    </section>

<?php
require_once('../views/sections/reviews.php');
require_once('../views/base/footer.php');