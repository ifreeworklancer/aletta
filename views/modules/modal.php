<div class="custom-modal-wrapper custom-modal-wrapper--feedback">
    <div class="custom-modal">
        <div class="close-modal">
            <div class="line line--left"></div>
            <div class="line line--right"></div>
        </div>
        <div class="custom-modal-view">
            <div class="product-selected">
                <?php $count = 0;
                foreach ($products_list['items'] as $item) : $count++; ?>
                    <div class="product-selected-item <?php if ($count === 1) echo 'active'; ?>">
                        <img src="<?= $item['image']; ?>" alt="" class="image">
                        <div class="name">
                            <?= $item['name']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="custom-modal-body">
            <h3 class="title">
                Свяжитесь с нами, чтобы заказать крем
            </h3>
            <form>
                <div class="form-column">
                    <div class="custom-dropdown">
                        <div class="custom-dropdown-input">
                            <div class="custom-dropdown-input__title">
                                <?= $products_list['items'][0]['name'] ?>
                            </div>
                            <div class="custom-dropdown-input__icon"></div>
                        </div>
                        <div class="custom-dropdown-body">
                            <ul class="custom-dropdown-body-list">
                                <?php foreach ($products_list['items'] as $item) : ?>
                                    <li data-cream="<?= $item['name']; ?>">
                                        <?= $item['name']; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <input type="hidden" name="cream" value="<?= $products_list['items'][0]['name'] ?>">
                        </div>
                    </div>
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
    <div class="modal-mask"></div>
</div>
<div class="custom-modal-wrapper custom-modal-wrapper--advice">
    <div class="custom-modal">
        <div class="close-modal">
            <div class="line line--left"></div>
            <div class="line line--right"></div>
        </div>
        <div class="custom-modal-body">
            <h3 class="title">
                Свяжитесь с нами
            </h3>
            <form>
                <div class="form-column">
                    <div class="form-group">
                        <label for="user-name--<?= $user_name = generateRandomString(); ?>">
                            Имя
                        </label>
                        <input type="text" name="name" id="user-name--<?= $user_name; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="user-phone--<?= $user_phone = generateRandomString(); ?>">
                            Номер телефона
                        </label>
                        <input type="tel" name="phone" id="user-phone--<?= $user_phone; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="user-email--<?= $user_email = generateRandomString(); ?>">
                            Email
                        </label>
                        <input type="email" name="email" id="user-email--<?= $user_email; ?>" class="form-control">
                    </div>
                    <button class="btn btn-secondary w-100">
                        Отправить
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-mask"></div>
</div>
