<!-- Reviews -->
<section id="reviews">
    <div class="container h-100">
        <div class="row h-100 justify-content-center justify-content-lg-start align-items-center">
            <div class="col-sm-8 col-lg-6 col-xl-5">
                <div class="section-description">
                    <h2 class="title">
                        <?= $reviews['title']; ?>
                    </h2>
                    <div class="description">
                        <p>
                            <?= $reviews['description']; ?>
                        </p>
                    </div>
                </div>
                <form>
                    <div class="form-column">
                        <div class="form-group">
                            <label for="user-name">
                                Имя
                            </label>
                            <input type="text" name="name" id="user-name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user-phone">
                                Номер телефона
                            </label>
                            <input type="tel" name="phone" id="user-phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user-email">
                                Email
                            </label>
                            <input type="email" name="email" id="user-email" class="form-control">
                        </div>
                        <button class="btn btn-secondary w-100">
                            Отправить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="reviews">
        <div class="reviews-slider">
            <?php foreach ($reviews['slider'] as $item) : ?>
                <div class="reviews-slider-item">
                    <div class="reviews-item">
                        <div class="reviews-item-body">
                            <div class="image">
                                <figure style="background-image: url('<?= $item['image']; ?>');"></figure>
                            </div>
                            <div class="description">
                                <p>
                                    <?= $item['description']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="reviews-item-footer">
                            <div class="name">
                                <?= $item['name']; ?>
                            </div>
                            <div class="stars">
                                <?php
                                if ($item['stars'] > 5) {
                                    $item['stars'] = 5;
                                }
                                if ($item['stars'] < 1) {
                                    $item['stars'] = 1;
                                }
                                $counter = 1;
                                while ($counter <= $item['stars']) :
                                    $counter++;
                                    ?>
                                    <div class="icon">
                                        <svg width="15" height="15">
                                            <use xlink:href="#star-icon"></use>
                                        </svg>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="slider-arrow slider-arrow--reviews">
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
        <h2 class="decor-title">
            Отзывы покупателей
        </h2>
    </div>
    <figure class="decor-image" style="background-image: url('../../images/icon/decor-image-primary.png');"></figure>

    <footer id="app-footer">
        <div class="footer-item text-center text-lg-left">
            <?= date('Y'); ?>
            Все права защищены
        </div>
        <div class="footer-item">
            <ul class="footer-list">
                <li>
                    <a href="#">
                        Privacy Policy
                    </a>
                </li>
                <li>
                    <a href="#">
                        Coockie Policy
                    </a>
                </li>
                <li>
                    <a href="#">
                        Terms & Conditions
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-item text-center text-lg-right">
            Вебразработка сайта студией Impression Bureau 2019
        </div>
    </footer>
</section>