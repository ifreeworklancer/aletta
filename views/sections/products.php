<!-- Products -->
<section id="products" data-class-header="white" data-class-nav="dark">
    <div class="products">
        <?php $count = 0;
        foreach ($products['items'] as $item) : $count++; ?>
            <div class="products-item <?php if ($count === 1) echo 'active'; ?>">
                <div class="products-item-nav">
                    <div class="title">
                        <span>
                            Крем <?= $item['title']; ?>
                        </span>
                    </div>
                    <div class="counter">
                        0<?= $count; ?>
                    </div>
                </div>
                <div class="products-item-body">
                    <div class="products-gallery">
                        <div class="custom-tabs">
                            <div class="custom-tabs-nav">
                                <?php $countTabNav = 0;
                                foreach ($item['images'] as $image) : $countTabNav++; ?>
                                    <div class="custom-tabs-nav-item <?php if ($countTabNav === 1) echo 'active'; ?>">
                                        <figure style="background-image: url('<?= $image; ?>');"></figure>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="custom-tabs-body">
                                <?php $countTabBody = 0;
                                foreach ($item['images'] as $image) : $countTabBody++; ?>
                                    <div class="custom-tabs-body-item <?php if ($countTabBody === 1) echo 'active'; ?>">
                                        <figure style="background-image: url('<?= $image; ?>');"></figure>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="products-description">
                        <h2 class="title">
                            <?= $item['title']; ?>
                        </h2>
                        <div class="description">
                            <p>
                                <?= $item['description']; ?>
                            </p>
                        </div>
                        <div class="feature">
                            <div class="feature-title">
                                характеристики
                            </div>
                            <ul class="feature-list">
                                <?php foreach ($item['feature'] as $value) : ?>
                                    <li>
                                        <?= $value; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="price">
                            <span class="price-text">
                                цена
                            </span>
                            <span class="price-value">
                                <?= $item['price'] ?>
                            </span>
                            <span class="price-currency">
                                грн
                            </span>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="#" class="btn btn-outline-primary open-feedback mr-4">
                                заказать
                            </a>
                            <a href="#" class="link-more">
                                узнать больше
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <figure class="decor-image d-none d-xl-block"
            style="background-image: url('../../images/icon/decor-image-secondary.png');"></figure>
</section>