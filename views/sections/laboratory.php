<!-- Laboratory -->
<section id="laboratory">
    <div class="container h-100">
        <div class="row h-100 justify-content-center justify-content-lg-start align-items-center">
            <div class="col-sm-10 col-lg-6">
                <div class="laboratory-item">
                    <h2 class="title mb-3">
                        <?= $laboratory['title']; ?>
                    </h2>
                    <div class="description mb-4">
                        <p>
                            <?= $laboratory['description']; ?>
                        </p>
                    </div>
                    <div class="advantages">
                        <?php foreach ($laboratory['advantages'] as $item) : ?>
                            <div class="advantages-item">
                                <figure class="advantages-item-icon" style="background-image: url('<?= $item['icon']; ?>');"></figure>
                                <div class="advantages-item-description">
                                    <p>
                                        <?= $item['description']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div>
                        <a href="#" class="btn btn-outline-secondary">
                            Больше информации
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="laboratory-image d-none d-lg-block">
        <figure style="background-image: url('<?= $laboratory['image']; ?>');">
            <div class="laboratory-image-decor"
                 style="background-image: url('../../images/content/laboratory/laboratory-item-decor.png');"></div>
        </figure>
    </div>
    <figure class="decor-image d-none d-xl-block" style="background-image: url('../../images/icon/decor-image-primary.png');"></figure>
</section>