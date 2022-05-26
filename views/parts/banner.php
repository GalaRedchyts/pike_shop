<?php if (!empty($content['banner']) && !empty($content['banner']['slides'])): ?>
<section id="banner">
    <div class="container">
        <div class="row banner-row d-flex align-items-center justify-content-start">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php for($i = 0; $i < count($content['banner']['slides']); $i++): ?>
                    <button type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="<?= $i ?>"
                            class="<?= ($i == 0 ? 'active' : '') ?>"
                            aria-current="true"
                            aria-label="Slide <?= ($i + 1) ?>"
                    ></button>
                    <?php endfor; ?>
                </div>
                <div class="carousel-inner">
                    <?php foreach ($content['banner']['slides'] as $key => $slide): ?>
                    <div class="carousel-item <?= ($key == 0 ? 'active' : '') ?>">
                        <div class="contaner">
                            <div class="row">
                                <div class="col-lg-5 banner-slide-container">
                                    <h1><?= $slide['title'] ?></h1>
                                    <h2><?= $slide['description'] ?></h2>
                                    <img src="<?= $slide['image']['path'] ?>"
                                         class="<?= $slide['image']['classes']?>"
                                         alt="<?= $slide['image']['alt']?>">
                                    <a href="<?= $slide['button']['href'] ?>"
                                       class="btn btn-outline-primary text-uppercase"
                                    ><?= $slide['button']['text'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>