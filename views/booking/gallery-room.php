<?php

use app\assets\SlickAsset;

SlickAsset::register($this);
?>
<div class="main">
    <div class="slider slider-for">
        <div>
            <img src="<?= Yii::getAlias('@web/img/room-offer-1.png') ?>" class="rounded img-fluid d-block" alt="Room and Offer" width="540px">
        </div>
        <div>
            <img src="<?= Yii::getAlias('@web/img/room-offer-2.png') ?>" class="rounded img-fluid d-block" alt="Room and Offer" width="540px">
        </div>
        <div>
            <img src="<?= Yii::getAlias('@web/img/room-offer-3.png') ?>" class="rounded img-fluid d-block" alt="Room and Offer" width="540px">
        </div>
        <div>
            <img src="<?= Yii::getAlias('@web/img/room-offer-4.png') ?>" class="rounded img-fluid d-block" alt="Room and Offer" width="540px">
        </div>
        <div>
            <img src="<?= Yii::getAlias('@web/img/room-offer-2.png') ?>" class="rounded img-fluid d-block" alt="Room and Offer" width="540px">
        </div>
    </div>
    <div class="slider slider-nav my-4">
        <div>
            <img src="<?= Yii::getAlias('@web/img/room-offer-1.png') ?>" class="rounded img-fluid  demo-gallery" alt="Room and Offer" width="250px">
        </div>
        <div>
            <img src="<?= Yii::getAlias('@web/img/room-offer-2.png') ?>" class="rounded img-fluid  demo-gallery" alt="Room and Offer" width="250px">
        </div>
        <div>
            <img src="<?= Yii::getAlias('@web/img/room-offer-3.png') ?>" class="rounded img-fluid  demo-gallery" alt="Room and Offer" width="250px">
        </div>
        <div>
            <img src="<?= Yii::getAlias('@web/img/room-offer-4.png') ?>" class="rounded img-fluid  demo-gallery" alt="Room and Offer" width="250px">
        </div>
        <div>
            <img src="<?= Yii::getAlias('@web/img/room-offer-2.png') ?>" class="rounded img-fluid  demo-gallery" alt="Room and Offer" width="250px">
        </div>
    </div>
</div>
<?php
$script = <<<JS
 $('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
   slidesToShow: 3,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   autoplaySpeed: 3000,
    autoplay: true,
    speed: 300,
    infinite: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }

  ]
 });

 $('a[data-slide]').click(function(e) {
   e.preventDefault();
   var slideno = $(this).data('slide');
   $('.slider-nav').slick('slickGoTo', slideno - 1);
 });
JS;
$this->registerJs($script);
?>