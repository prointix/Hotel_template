<?php

use yii\helpers\Url;

$NewsandUpdate = [
    [
        'image' => Yii::getAlias('@web/img/news-and-update-1.png'),
        'title' => 'TOP 10 STUNNING HOTELS NEAR PUB STREET IN SIEM REAP',
        'descrption' => 'From private underground car parks and free on-site spaces from private underground car parks and free on-site spaces t ...',
    ],
    [
        'image' => Yii::getAlias('@web/img/news-and-update-2.png'),
        'title' => 'TOP 10 STUNNING HOTELS NEAR PUB STREET IN SIEM REAP',
        'descrption' => 'From private underground car parks and free on-site spaces from private underground car parks and free on-site spaces t ...',
    ],
    [
        'image' => Yii::getAlias('@web/img/news-and-update-3.png'),
        'title' => 'TOP 10 STUNNING HOTELS NEAR PUB STREET IN SIEM REAP',
        'descrption' => 'From private underground car parks and free on-site spaces from private underground car parks and free on-site spaces t ...',
    ],
]
?>
<div class="container section-news">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center">News and Update</h2>
        <div class="news-and-update-line text-center"></div>
    </div>
    <div class="row gy-4">
        <?php
        foreach ($NewsandUpdate as $value) {
        ?>
            <div class="col-lg-4">
                <div class="card">
                    <img src="<?= $value['image'] ?>" class="img-fluid demo-card-img-top" alt="image">
                    <div class="card-body">
                        <span class="btn-news">Dec 22, 2023</span>
                        <h5 class="card-title mt-3 text-news-title text-uppercase"><?= $value['title'] ?></h5>
                        <p class="card-text text-news-para"><?= $value['descrption'] ?></p>
                        <a href="<?= Url::to(['/home/detail-news-and-update']) ?>" class="btn btn-news-update">Read more</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>