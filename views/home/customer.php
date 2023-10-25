<section>
    <div class="container col-lg-12">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h2>Our customer says</h2>
            <p class="col-9 col-lg-5 text-center text-customer-p">We are always grateful for the feedback we receive from our customers. Here are a few things that our customers have said.</p>
            <div class="line-cutomer"></div>
        </div>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row d-flex justify-content-center">
                        <div class="wrapper">
                            <div class="slider-about">
                                <div class="col-lg-6">
                                    <div class="d-flex">
                                        <div class="flex-grow-1 mx-4">
                                            <div class="text-center mb-4">
                                                <p class="text-muted">“ The staff was friendly and helpful. They went above and beyond to make sure we had a great stay. The room was clean and comfortable. The bed was especially comfortable.”</p>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="flex-shrink-0 pe-2">
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" class="rounded-circle mb-4 shadow-2" alt="woman avatar" width="60" height="60">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <small class="col-2 ps-4 color-customer">Vireak Robot</small>
                                                    <small class="mt-1 ps-2 customer-text-small">General Manager</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex">
                                        <div class="flex-grow-1 mx-4">
                                            <div class="text-center mb-4">
                                                <p class="text-muted">“ The staff was friendly and helpful. They went above and beyond to make sure we had a great stay. The room was clean and comfortable. The bed was especially comfortable.”</p>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="flex-shrink-0 pe-2">
                                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp" class="rounded-circle mb-4 shadow-4-strong" alt="woman avatar" width="60" height="60">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <small class="col-2 ps-4 color-customer">Vireak Robot</small>
                                                    <small class="mt-1 ps-2 customer-text-small">General Manager</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex">
                                        <div class="flex-grow-1 mx-4">
                                            <div class="text-center mb-4">
                                                <p class="text-muted">“ The staff was friendly and helpful. They went above and beyond to make sure we had a great stay. The room was clean and comfortable. The bed was especially comfortable.”</p>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="flex-shrink-0 pe-2">
                                                    <img src="<?= Yii::getAlias('@web/img/serey.png') ?>" class="rounded-circle mb-4 shadow-4-strong" alt="woman avatar" width="60" height="60">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <small class="col-2 ps-4 color-customer">Serey Nakamen</small>
                                                    <small class="mt-1 ps-2 customer-text-small">General Manager</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php
$script = <<<JS
    $(document).ready(function(){
      $('.slider-about').slick({
        slidesToShow: 1,
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
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
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
    });
JS;
$this->registerJs($script);
?>