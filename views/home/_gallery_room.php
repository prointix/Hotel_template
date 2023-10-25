<?php

use app\assets\SlickAsset;

SlickAsset::register($this);
?>
<section class="regular slider gallery-room-section">
    <div>
        <img src="<?= Yii::getAlias('@web/img/Image-body-1.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
    </div>
    <div>
        <img src="<?= Yii::getAlias('@web/img/Image-body-2.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
    </div>
    <div>
        <img src="<?= Yii::getAlias('@web/img/Image-body-3.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
    </div>
    <div>
        <img src="<?= Yii::getAlias('@web/img/Image-body-4.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
    </div>
    <div>
        <img src="<?= Yii::getAlias('@web/img/Image-body-3.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
    </div>
    <div>
        <img src="<?= Yii::getAlias('@web/img/Image-body-2.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
    </div>
    <div>
        <img src="<?= Yii::getAlias('@web/img/Image-body-1.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
    </div>
    <div>
        <img src="<?= Yii::getAlias('@web/img/Image-body-4.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
    </div>
</section>

<!-- <div class="container-fluid gallery-room-section text-center my-3">
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-3">
                        <img src="<?= Yii::getAlias('@web/img/Image-body-1.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <img src="<?= Yii::getAlias('@web/img/Image-body-2.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <img src="<?= Yii::getAlias('@web/img/Image-body-3.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <img src="<?= Yii::getAlias('@web/img/Image-body-4.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <img src="<?= Yii::getAlias('@web/img/Image-body-3.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <img src="<?= Yii::getAlias('@web/img/Image-body-2.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <img src="<?= Yii::getAlias('@web/img/Image-body-4.png') ?>" class="rounded gallery mx-auto d-block" alt="1" width="250px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php
$script = <<<JS
$(".regular").slick({
    infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

  ]

});
JS;
$this->registerJs($script);
?>