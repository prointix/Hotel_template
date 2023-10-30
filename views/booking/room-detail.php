<?php

use app\assets\DatePickerAsset;
use app\assets\SlickAsset;
use yii\helpers\Url;

SlickAsset::register($this);
DatePickerAsset::register($this);
$this->title = 'Room and Offer';
?>
<style>
    /* .wrapper {
        padding: 5px 0;
        overflow-x: hidden;
    }

    .slick-initialized .slick-slide {
        color: #FFF;
        margin: 0 25px 0 0;
        display: flex;
        align-items: center;
        justify-content: center;
    } */

    .demo-gallery {
        width: 250px !important;
        height: 120px !important;
    }

    /* .slick-next,
    .slick-prev {
        z-index: 5;
    }

    .slick-next {
        right: 20px;
    }

    .slick-prev {
        left: 5px;
    }

    .slick-prev:before,
    .slick-next:before {
        color: #3a71c2;
    } */
</style>
<div class="section-room-detail bg-info-search mt-4">
    <div class="container-fluid ">
        <div class="container">
            <div class="section-breadcrumb mb-5">
                <div class="row justify-content-start">
                    <div class="col-lg-10 d-sm-none d-md-block">
                        <div class="d-inline-flex text-white">
                            <p class="m-0"><a href="<?= Yii::$app->homeUrl ?>" class="text-decoration-none text-white fw-light"> <img src="<?= Yii::getAlias('@web/img/icon/Home-1.png') ?>" class="me-2" alt="icon" width="17px"> Home</a></p>
                            <i class="fas fa-angle-right pt-1 px-3"></i>
                            <p class="m-0">Accommodation</p>
                            <i class="fas fa-angle-right pt-1 px-3"></i>
                            <p class="m-0">Room and Offer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container demo-step">
    <div class="row d-flex justify-content-between align-items-center">
        <div class="col-4 col-sm-4 c0l-md-4 col-lg-4">
            <div class="d-block text-center">
                <button type="button" class="btn btn-outline-dark btn-circle-step-active mx-1">1</button>
                <p class="demo-text-step-active mt-1">Room and Offer</p>
            </div>
        </div>
        <div class="col-4 col-sm-4 c0l-md-4 col-lg-4">
            <div class="d-block text-center">
                <button type="button" class="btn btn-outline-dark btn-circle-step mx-1">2</button>
                <p class="demo-text-step mt-1">Details</p>
            </div>
        </div>
        <div class="col-4 col-sm-4 c0l-md-4 col-lg-4">
            <div class="d-block text-center">
                <button type="button" class="btn btn-outline-dark btn-circle-step mx-1">3</button>
                <p class="demo-text-step mt-1">Confirmation</p>
            </div>
        </div>
    </div>
</div>

<div class="section-room-and-offer">
    <div class="container my-5">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-6">
                <?= $this->render('gallery-room') ?>
                <!-- <img src="<?= Yii::getAlias('@web/img/room-offer-1.png') ?>" class="rounded img-fluid d-block" alt="Room and Offer" width="536px">
                <div class="d-flex justify-content-around mt-4">
                    <div class="wrapper">
                        <div class="slider-gallery-room">
                            <div>
                                <img src="<?= Yii::getAlias('@web/img/room-offer-1.png') ?>" class="rounded img-fluid  demo-gallery" alt="Room and Offer" width="250px">
                            </div>
                            <div>
                                <img src="<?= Yii::getAlias('@web/img/room-offer-2.png') ?>" class="rounded img-fluid demo-gallery" alt="Room and Offer" width="250px">
                            </div>
                            <div>
                                <img src="<?= Yii::getAlias('@web/img/room-offer-3.png') ?>" class="rounded img-fluid demo-gallery" alt="Room and Offer" width="250px">
                            </div>
                            <div>
                                <img src="<?= Yii::getAlias('@web/img/room-offer-4.png') ?>" class="rounded img-fluid demo-gallery" alt="Room and Offer" width="250px">
                            </div>
                            <div>
                                <img src="<?= Yii::getAlias('@web/img/room-offer-1.png') ?>" class="rounded img-fluid demo-gallery" alt="Room and Offer" width="250px">
                            </div>
                            <div>
                                <img src="<?= Yii::getAlias('@web/img/room-offer-3.png') ?>" class="rounded img-fluid demo-gallery" alt="Room and Offer" width="250px">
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-5">
                <div class="card card-border-room">
                    <div class="card-body px-4 py-4">
                        <h5 class="text-uppercase text-room">ALDENAIRE</h5>
                        <hr class="line-room">
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-between lh-sm">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <h4 class="text-uppercase">DELUXE KING</h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="small-ratings">
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <small class="ms-1">5.0</small>
                                            </div>
                                        </div>
                                    </div>
                                    <span>
                                        <h4 class="fw-bolder">$130<small class="fw-light fs-6">/night</small></h4>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                <label for="" class="text-muted form-label demo-form-lable">Check-in</label>
                                <div class="input-group mt-1">
                                    <input type="text" id="selecteddate" class="form-control demo-border-check-in py-2 bor-1" name="datefilter" value="" placeholder="Check in">
                                    <span class="input-group-text demo-form-icon-room"><small class="mr-0"><img src="<?= Yii::getAlias('@web/img/icon/Union-1.png') ?>" class="me-1" alt="icon" width="17px"></small></span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                <label for="" class="text-muted form-label demo-form-lable">Check-out</label>
                                <div class="input-group mt-1">
                                    <input type="text" id="selecteddate" class="form-control demo-border-check-out py-2 bor-1" name="datefilter" value="" placeholder="Check out">
                                    <span class="input-group-text demo-form-icon-room"><small class="mr-0"><img src="<?= Yii::getAlias('@web/img/icon/Union-1.png') ?>" class="me-1" alt="icon" width="17px"></small></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="input-group my-3 ">
                                    <input type="text" class="form-control  py-2" placeholder="1 Room">
                                    <input type="text" class="form-control demo-border-room py-2" placeholder="2 adults">
                                    <input type="text" class="form-control demo-border-room py-2" placeholder="0 child">
                                    <span class="input-group-text demo-form-icon"></span>
                                    <?= $this->render('/site/popover') ?>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <a class="btn demo-btn-primary fs-5" href="<?= Url::to(['/booking/booking']) ?>">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="text-uppercase">Deluxe King</h2>
        <div class="line-room-one"></div>
        <div class="d-flex mb-3 mt-4">
            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/Group.png') ?>" class="me-2" alt="icon" width="17px"> Bed : 2</small>
            <small class="ms-4"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-2" alt="icon" width="17px"> Capacity : 4 Adults</small>
            <small class="ms-4"><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="me-2" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
        </div>
        <div class="d-flex mb-2">
            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/Task_alt.png') ?>" class="me-2" alt="icon" width="16px"> Pet-friendly and balcony</small>
            <small class="ms-4"><img src="<?= Yii::getAlias('@web/img/icon/distance.png') ?>" class="me-2" alt="icon" width="19px"> Location : 10th floor</small>
        </div>
    </div>
    <div class="container mt-5">
        <h5>Offered amenities</h5>
        <div class="row gx-3 gy-2">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 demo-bg-light">Toiletries such as soap, shampoo, conditioner, and lotion</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 demo-bg-light">A toothbrush and toothpaste</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 demo-bg-light">Towels and bathrobes</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 demo-bg-light">Wi-Fi and Parking</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 demo-bg-light">A welcome amenity such as fruit or chocolates</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 demo-bg-light">A razor and shaving cream</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 demo-bg-light">A razor and shaving cream</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 demo-bg-light">A telephone and television</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 demo-bg-light">A desk, chair and sofa</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 demo-bg-light">A coffee maker (optional)</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-12">
                <div class="p-3 demo-bg-light">A minibar (optional)</div>
            </div>
        </div>
        <div class="d-block mt-5">
            <h3>Description</h3>
            <p>Our Deluxe King Room is a spacious and comfortable room that can accommodate up to two guests. The room features a king-size bed, a sitting area with a sofa bed, a desk, a chair, and a large walk-in closet.</p>
        </div>
    </div>
    <div class="container demo-rating-clien">
        <div class="d-flex">
            <button type="button" class="btn btn-outline-dark btn-circle-tripadvisor mx-1"><i class="fas fa-voicemail"></i></button>
            <h3 class="mt-1 ms-2">TripAdvisor</h3>
            <h3 class=" mt-1 ms-3 fw-light">Rating</h3>
        </div>
        <div class="d-flex align-items-center">
            <h4 class="me-3 mt-1">5.0</h4>
            <i class="fas fa-circle rating-circle-color"></i>
            <i class="fas fa-circle rating-circle-color"></i>
            <i class="fas fa-circle rating-circle-color"></i>
            <i class="fas fa-circle rating-circle-color"></i>
            <i class="fas fa-circle rating-circle-color"></i>
            <h6 class="ms-3 mt-1 text-muted">1,200 reviews</h6>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-6">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 col-lg-2 d-flex justify-content-start align-items-start mb-4 mb-lg-0">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20%2810%29.webp" class="border border-2 rounded-circle img-fluid shadow-1" alt="woman avatar" width="80" height="80" />
                            </div>
                            <div class="col-10 col-lg-10">
                                <p class="fw-light lead mb-0"><strong>Andrew C</strong></p>
                                <p class="fw-light text-muted-rating mb-2">2 days ago</p>
                                <div class="d-flex align-items-center my-2">
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                </div>
                                <p class="demo-text-rating-advisor lh-lg mb-4">
                                    I was very disappointed with my stay at the Hotel Hell. The room was dirty and smelled bad, and the staff was rude and unhelpful. The location was also not very good, it was in a noisy and crowded area. I would not recommend this hotel to anyone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 col-lg-2 d-flex justify-content-start align-items-start mb-4 mb-lg-0">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20%2810%29.webp" class="border border-2 rounded-circle img-fluid shadow-1" alt="woman avatar" width="80" height="80" />
                            </div>
                            <div class="col-10 col-lg-10">
                                <p class="fw-light lead mb-0"><strong>Joe Jonh</strong></p>
                                <p class="fw-light text-muted-rating mb-2">11 jul</p>
                                <div class="d-flex align-items-center my-2">
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                </div>
                                <p class="demo-text-rating-advisor lh-lg mb-4">
                                    I was very disappointed with my stay at the Hotel Hell. The room was dirty and smelled bad, and the staff was rude and unhelpful. The location was also not very good, it was in a noisy and crowded area. I would not recommend this hotel to anyone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 col-lg-2 d-flex justify-content-start align-items-start mb-4 mb-lg-0">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20%2810%29.webp" class="border border-2 rounded-circle img-fluid shadow-1" alt="woman avatar" width="80" height="80" />
                            </div>
                            <div class="col-10 col-lg-10">
                                <p class="fw-light lead mb-0"><strong>Jonh Wick</strong></p>
                                <p class="fw-light text-muted-rating mb-2">1 weeks ago</p>
                                <div class="d-flex align-items-center my-2">
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                </div>
                                <p class="demo-text-rating-advisor lh-lg mb-4">
                                    I was very disappointed with my stay at the Hotel Hell. The room was dirty and smelled bad, and the staff was rude and unhelpful. The location was also not very good, it was in a noisy and crowded area. I would not recommend this hotel to anyone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 col-lg-2 d-flex justify-content-start align-items-start mb-4 mb-lg-0">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20%2810%29.webp" class="border border-2 rounded-circle img-fluid shadow-1" alt="woman avatar" width="80" height="80" />
                            </div>
                            <div class="col-10 col-lg-10">
                                <p class="fw-light lead mb-0"><strong>Florita nita</strong></p>
                                <p class="fw-light text-muted-rating mb-2">24 dec</p>
                                <div class="d-flex align-items-center my-2">
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                    <i class="fas fa-circle sub-rating-circle-color"></i>
                                </div>
                                <p class="demo-text-rating-advisor lh-lg mb-4">
                                    I was very disappointed with my stay at the Hotel Hell. The room was dirty and smelled bad, and the staff was rude and unhelpful. The location was also not very good, it was in a noisy and crowded area. I would not recommend this hotel to anyone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-see-all-rating">Show All 100 Reviews</button>
    </div>
</div>
<div class="section-suggestion-others-room">
    <?= $this->render('/site/_suggestion_room') ?>
</div>
<?php
$script = <<<JS
//     $(document).ready(function(){
//       $('.slider-gallery-room').slick({
//         slidesToShow: 3,
//         slidesToScroll: 1,
//         arrows: true,
//         speed: 300,
//         infinite: true,
//         autoplaySpeed: 3000,
//         autoplay: true,
//         responsive: [
//         {
//             breakpoint: 1024,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 992,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 768,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1
//             }
//         },
//         {
//             breakpoint: 576,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1
//             }
//         }

//   ]
//       });
//     });

    // Date picker
    flatpickr('#selecteddate', {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        minDate: 'today'
    });
JS;
$this->registerJs($script);
?>