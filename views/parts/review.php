<?php if (!empty($content['review'])) : ?>
<section id="Review" class="section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="review-content pb-4 col-lg-10">
                <div class="title text-center">
                    <h1 class="md-10"><b><?= $content['review']['title'] ?></b></h1>
                    <p><?= $content['review']['description'] ?></p>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col">
                <div class="review-item">
                    <h1><b><?= $content['review']['review-1']['name'] ?><br>
                            <img src="<?= $content['review']['review-1']['image'] ?>"></b></h1>
                    <h3><p><?= $content['review']['review-1']['text'] ?></p></h3>
                </div>
            </div>
            <div class="col">
                <div class="review-item">
                    <h1><b><?= $content['review']['review-2']['name'] ?><br>
                            <img src="<?= $content['review']['review-2']['image'] ?>" ></b></h1>
                    <h3><p><?= $content['review']['review-2']['text'] ?></p></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>