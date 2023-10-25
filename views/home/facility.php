<?php

use yii\helpers\Url;

$this->title = 'Facilities';
?>
<section class="section-facility">
    <div class="container">
        <?= $this->render('/site/_breadcrumb_header') ?>
    </div>
    <div class="container">
        <h2 class="text-center facility-title">FACILITIES</h2>
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="card">
                    <img src="<?= Yii::getAlias('@web/img/Facilities-1.png') ?>" class="img-fluid demo-facility-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title text-news-title">Swimming pool</h5>
                        <p class="card-text text-news-para">Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.</p>
                        <a href="<?= Url::to(['/home/detail-facility']) ?>" class="btn btn-news-update">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="<?= Yii::getAlias('@web/img/Facilities-2.png') ?>" class="img-fluid demo-facility-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title text-news-title">Restaurant</h5>
                        <p class="card-text text-news-para">Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.</p>
                        <a href="<?= Url::to(['/home/detail-facility']) ?>" class="btn btn-news-update">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="<?= Yii::getAlias('@web/img/Facilities-3.png') ?>" class="img-fluid demo-facility-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title text-news-title">Parking</h5>
                        <p class="card-text text-news-para">Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.</p>
                        <a href="<?= Url::to(['/home/detail-facility']) ?>" class="btn btn-news-update">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="card">
                    <img src="<?= Yii::getAlias('@web/img/Facilities-3.png') ?>" class="img-fluid demo-facility-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title text-news-title">Parking</h5>
                        <p class="card-text text-news-para">Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.</p>
                        <a href="<?= Url::to(['/home/detail-facility']) ?>" class="btn btn-news-update">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="card">
                    <img src="<?= Yii::getAlias('@web/img/Facilities-1.png') ?>" class="img-fluid demo-facility-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title text-news-title">Swimming pool</h5>
                        <p class="card-text text-news-para">Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.</p>
                        <a href="<?= Url::to(['/home/detail-facility']) ?>" class="btn btn-news-update">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="card">
                    <img src="<?= Yii::getAlias('@web/img/Facilities-2.png') ?>" class="img-fluid demo-facility-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title text-news-title">Restaurant</h5>
                        <p class="card-text text-news-para">Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.</p>
                        <a href="<?= Url::to(['/home/detail-facility']) ?>" class="btn btn-news-update">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->render('/site/_suggestion_room') ?>
    <?= $this->render('/site/_sub_partner') ?>
</section>