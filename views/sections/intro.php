<!-- Intro -->
<section id="intro" data-class-header="dark" data-class-nav="primary">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-sm-7 col-lg-5">
                <div class="intro-item">
                    <div class="section-description">
                        <h2 class="title">
                            <?= $intro['title']; ?>
                        </h2>
                        <div class="description">
                            <p>
                                <?= $intro['description']; ?>
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn btn-outline-secondary">
                            Узнать больше
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="intro-decor-title">
        <?= $intro['subtitle']; ?>
    </h1>
    <figure class="decor-intro-image d-none d-xl-block" style="background-image: url('../../images/content/intro/intro-decor.png');"></figure>
    <figure class="decor-image d-none d-md-block" style="background-image: url('../../images/icon/decor-image-primary.png');"></figure>
</section>
