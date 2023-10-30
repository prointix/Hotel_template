<?php

/** @var yii\web\View $this */

$this->title = 'ALDENAIRE';

?>
<style>
    .carousel .carousel-indicators button {
        width: 10px;
        height: 10px;
        border-radius: 100%;
        background-color: #17b193 !important;
    }
</style>
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item  active">
            <div class="demo-carousel-item">
                <img src="<?= Yii::getAlias('@web/img/Home_slide_show-1.png') ?>" class="d-block w-100" alt="Hotel Image" />
                <div class="border-one d-sm-none d-md-block"></div>
                <div class="border-two d-sm-none d-md-block"></div>
                <div class="carousel-item-top-left-center d-sm-none d-md-block">
                    <div class="item-text-header-2">
                        <h1 class="demo-item-text-2">The best choice for you.</h1>
                        <span class="demo-item-text-paragrap-2">
                            <p>let’s in invite family friends and girlfriends to enjoy a vacation in a luxury hotel at an affordable prices, make your vacation an unforgettable memory.</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="demo-carousel-item">
                <img src="<?= Yii::getAlias('@web/img/Home_slide_show-2.png') ?>" class="d-block w-100" alt="Hotel Image" />
                <div class="carousel-item-top-left d-sm-none d-md-block">
                    <div class="item-text-header-1">
                        <h1 class="demo-item-text-1 text-uppercase">LUXURY HOTEL</h1>
                        <span class="demo-item-text-paragrap-1">
                            <p>let’s in invite family friends and girlfriends to enjoy a vacation in a luxury hotel at an affordable prices, make your vacation an unforgettable memory.</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="demo-carousel-item">
                <img src="<?= Yii::getAlias('@web/img/Home_slide_show-3.png') ?>" class="d-block w-100" alt="Hotel Image" />
                <div class="carousel-item-bottom-left d-sm-none d-md-block">
                    <div class="item-text-header">
                        <h1 class="demo-item-text">Perfect Location.</h1>
                        <span class="demo-item-text-paragrap">
                            <p>let’s in invite family friends and girlfriends to enjoy a vacation in a luxury hotel at an affordable prices, make your vacation an unforgettable memory.</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->render('_search_section') ?>
<?= $this->render('_body_section') ?>
<?= $this->render('_facility_section') ?>
<?= $this->render('_card_section') ?>
<section class="bg-partner-home my-2 p-2 d-none d-sm-block d-md-none">
    <?= $this->render('_partner_section') ?>
</section>
<section class="d-sm-none d-md-block">
    <?= $this->render('_partner_section') ?>
</section>
<?= $this->render('_contact_section') ?>
<?= $this->render('_news_and_update_section') ?>
<?php
$script = <<<JS
   
JS;
$this->registerJs($script);
?>