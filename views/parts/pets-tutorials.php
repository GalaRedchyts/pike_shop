<?php if (!empty($content['pets-tutorials'])) : ?>
<section id="Pets-tutorials" class="section-gap">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6 video d-flex align-items-center justify-content-center">
                <div class="overlay"></div>
                <a href="<?= $content['pets-tutorials']['sides']['left']['link'] ?>" class="play-btn">
                    <img src="<?= $content['pets-tutorials']['sides']['left']['image'] ?>" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-6 p-5">
                <h2><?= $content['pets-tutorials']['sides']['right']['description'] ?> </h2>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>