<?php if (!empty($content['gallery'])) : ?>
<section id="Gallery" class="section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="gallery-content pb-5 col-lg-10">
                <div class="title text-center">
                    <h1 class="md-10"><b><?= $content['gallery']['title']?></b></h1>
                    <p><?= $content['gallery']['description']?></p>
                </div>
            </div>
        </div>
        <div class="gallery">
            <figure class="gallery_item gallery_item-1">
                <img src="<?= $content['gallery']['gallery']['item-1']['image'] ?>"
                     class="gallery_img" alt="<?= $content['gallery']['gallery']['item-1']['alt'] ?>">
            </figure>
            <figure class="gallery_item gallery_item-2">
                <img src="<?= $content['gallery']['gallery']['item-2']['image'] ?>"
                     class="gallery_img" alt="<?= $content['gallery']['gallery']['item-2']['alt'] ?>">
            </figure>
            <figure class="gallery_item gallery_item-3">
                <img src="<?= $content['gallery']['gallery']['item-3']['image'] ?>"
                     class="gallery_img" alt="<?= $content['gallery']['gallery']['item-3']['alt'] ?>">
            </figure>
            <figure class="gallery_item gallery_item-4">
                <img src="<?= $content['gallery']['gallery']['item-4']['image'] ?>"
                     class="gallery_img" alt="<?= $content['gallery']['gallery']['item-4']['alt'] ?>">
            </figure>
            <figure class="gallery_item gallery_item-5">
                <img src="<?= $content['gallery']['gallery']['item-5']['image'] ?>"
                     class="gallery_img" alt="<?= $content['gallery']['gallery']['item-5']['alt'] ?>">
            </figure>
            <figure class="gallery_item gallery_item-6">
                <img src="<?= $content['gallery']['gallery']['item-6']['image'] ?>"
                     class="gallery_img" alt="<?= $content['gallery']['gallery']['item-6']['alt'] ?>">
            </figure>
        </div>
    </div>
</section>
<?php endif; ?>