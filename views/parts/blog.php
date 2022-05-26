<?php if(!empty($content['blog'])) : ?>
<section id="Blog" class="section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="blog-content pb-4 col-lg-10">
                <div class="title text-center">
                    <h1 class="md-10"><b><?= $content['blog']['title']?></b></h1>
                    <p><?= $content['blog']['description']?></p>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col">
                <div class="blog-item">
                    <img src="<?= $content['blog']['blog-1']['image']?>"></b>
                    <h1><b><?= $content['blog']['blog-1']['name']?></b></h1>
                    <h4><?= $content['blog']['blog-1']['text']?></h4>
                    <h4><b><?= $content['blog']['blog-1']['data']?></b></h4>
                </div>
            </div>
            <div class="col">
                <div class="blog-item">
                    <img src="<?= $content['blog']['blog-2']['image']?>" ></b>
                    <h1><b><?= $content['blog']['blog-2']['name']?></b></h1>
                    <h4><?= $content['blog']['blog-2']['text']?></h4>
                    <h4><b><?= $content['blog']['blog-2']['data']?></b></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>