<?php

use yii\helpers\Url;

$this->title = 'Facilities';

$facility = [
    [
        'title' => 'Swimming pool',
        'description' => 'Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.',
        'image' => Yii::getAlias('@web/img/Facilities-1.png'),
    ],
    [
        'title' => 'Restaurant',
        'description' => 'Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.',
        'image' => Yii::getAlias('@web/img/Facilities-2.png'),
    ],
    [
        'title' => 'Parking',
        'description' => 'Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.',
        'image' => Yii::getAlias('@web/img/Facilities-3.png'),
    ],
    [
        'title' => 'Parking',
        'description' => 'Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.',
        'image' => Yii::getAlias('@web/img/Facilities-3.png'),
    ],
    [
        'title' => 'Swimming pool',
        'description' => 'Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.',
        'image' => Yii::getAlias('@web/img/Facilities-2.png'),
    ],
    [
        'title' => 'Restaurant',
        'description' => 'Siem Reap hotels are located within easy reach of all the major attractions, including Angkor Wat, the Old Market, and Pub Street.',
        'image' => Yii::getAlias('@web/img/Facilities-1.png'),
    ]
]
?>
<section class="section-facility">
    <div class="container">
        <?= $this->render('/site/_breadcrumb_header') ?>
    </div>
    <div class="container">
        <h2 class="text-center facility-title">FACILITIES</h2>
        <div class="row gy-4">
            <?php foreach ($facility as $value) {
            ?>
                <div class="col-lg-4">
                    <div class="card">
                        <?= '<img src="' . $value['image'] . '" alt="' . $value['title'] . '" class="img-fluid demo-facility-img-top">'; ?>
                        <div class="card-body">
                            <h5 class="card-title text-news-title"><?= $value['title'] ?></h5>
                            <p class="card-text text-news-para"><?= $value['description'] ?></p>
                            <a href="<?= Url::to(['/home/detail-facility']) ?>" class="btn btn-news-update">Read more</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <?= $this->render('/site/_suggestion_room') ?>
    <?= $this->render('/site/_sub_partner') ?>
</section>