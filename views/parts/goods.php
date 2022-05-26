<?php
$products = db_select(
    "products",
    columns: "id, title, price, quantity, description",
    conditions: "is_option is FALSE AND quantity > 0",
    order: "price"
);
$products = array_chunk($products, 9);
?>
<section id="Goods" class="section-gap">
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="goods-content pb-5 col-lg-10">
            <div class="title text-center">
                <h1 class="md-10"><b><?= $content['goods']['title'] ?? '' ?></b></h1>
                <p><?= $content['goods']['description'] ?? '' ?></p>
            </div>
        </div>
    </div>
    <?php foreach ($products as $row): ?>
    <div class="row">
    <?php foreach ($row as $item): ?>
        <div class="col-lg-4">
            <div class="goods-item"
                 data-id="<?= $item['id'] ?>"
                 data-qnty="<?= $item['quantity'] ?>"
                 data-name="<?= $item['title'] ?>"
                 data-price="<?= $item['price'] ?>"
                 data-bs-toggle="modal"
                 data-bs-target="#buy"
            >
                <div class="title justify-content-between d-flex">
                    <h4><b><?= $item['title'] ?></b></h4>
                    <p class="price float-right"> <b><?=  $item['price'] ?></b></p>
                </div>
                <p><?=  $item['description'] ?></p>
            </div>
        </div>
            <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
</div>
</section>