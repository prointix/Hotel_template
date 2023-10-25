<?php

use app\assets\SlickAsset;

SlickAsset::register($this);
?>
<h2 class="text-center mb-4  mt-facility-respon">Discover the best Facilities</h2>
<div class="container facility-section">
    <div class="row d-flex justify-content-start">
        <div class="wrapper">
            <div class="slider-facility">
                <div>
                    <div class="overlay">
                        <img src="<?= Yii::getAlias('@web/img/Facility-1.png') ?>" class="rounded d-block" alt="1" width="250px">
                        <h5 class="overlay-text">Parking space</h5>
                    </div>
                </div>
                <div>
                    <div class="overlay">
                        <img src="<?= Yii::getAlias('@web/img/Facility-2.png') ?>" class="rounded d-block" alt="1" width="250px">
                        <h5 class="overlay-text">Restaurant</h5>
                    </div>
                </div>
                <div>
                    <div class="overlay">
                        <img src="<?= Yii::getAlias('@web/img/Facility-3.png') ?>" class="rounded d-block" alt="1" width="250px">
                        <h5 class="overlay-text">Swimming pool</h5>
                    </div>
                </div>
                <div>
                    <div class="overlay">
                        <img src="<?= Yii::getAlias('@web/img/Facility-4.png') ?>" class="rounded d-block" alt="1" width="250px">
                        <h5 class="overlay-text">Meeting room</h5>
                    </div>
                </div>
                <div>
                    <div class="overlay">
                        <img src="<?= Yii::getAlias('@web/img/Facility-1.png') ?>" class="rounded d-block" alt="1" width="250px">
                        <h5 class="overlay-text">Parking space</h5>
                    </div>
                </div>
                <div>
                    <div class="overlay">
                        <img src="<?= Yii::getAlias('@web/img/Facility-2.png') ?>" class="rounded d-block" alt="1" width="250px">
                        <h5 class="overlay-text">Restaurant</h5>
                    </div>
                </div>
                <div>
                    <div class="overlay">
                        <img src="<?= Yii::getAlias('@web/img/Facility-3.png') ?>" class="rounded d-block" alt="1" width="250px">
                        <h5 class="overlay-text">Swimming pool</h5>
                    </div>
                </div>
                <div>
                    <div class="overlay">
                        <img src="<?= Yii::getAlias('@web/img/Facility-4.png') ?>" class="rounded d-block" alt="1" width="250px">
                        <h5 class="overlay-text">Meeting room</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$script = <<<JS
$(document).ready(function(){
      $('.slider-facility').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        speed: 300,
        infinite: true,
        autoplaySpeed: 3000,
        autoplay: true,
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
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

  ]
      });
    });
JS;
$this->registerJs($script);
?>