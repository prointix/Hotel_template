<?php

use yii\helpers\Url;

$this->title = 'Payment';
?>
<style>
    .form-check-input {
        color: #D9D9D9;
    }

    .form-check-input:checked {
        background-color: #3BC9AD !important;
        border-color: #3BC9AD !important;
    }

    .demo-form-check-box {
        color: #D9D9D9;
    }

    .demo-form-check-box:checked {
        background-color: #2980B9 !important;
        border-color: #2980B9 !important;
    }
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
                            <i class="fas fa-angle-right pt-1 px-3"></i>
                            <p class="m-0">Detail</p>
                            <i class="fas fa-angle-right pt-1 px-3"></i>
                            <p class="m-0">Confirmation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container demo-step">
    <div class="row d-flex justify-content-between align-items-center">
        <div class="col-4 col-lg-4">
            <div class="d-block text-center">
                <button type="button" class="btn btn-outline-dark btn-circle-step mx-1">1</button>
                <p class="demo-text-step mt-1">Room and Offer</p>
            </div>
        </div>
        <div class="col-4 col-lg-4">
            <div class="d-block text-center">
                <button type="button" class="btn btn-outline-dark btn-circle-step mx-1">2</button>
                <p class="demo-text-step mt-1">Details</p>
            </div>
        </div>
        <div class="col-4 col-lg-4">
            <div class="d-block text-center">
                <button type="button" class="btn btn-outline-dark btn-circle-step-active mx-1">3</button>
                <p class="demo-text-step-active mt-1">Confirmation</p>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row mx-auto gx-5 gy-4">
        <div class="col-lg-6">
            <div class="card demo-card-booking-detail border-0">
                <div class="card-body px-4 py-4">
                    <h4 class="text-booking-detail">Your Booking Detail</h4>
                    <hr class="line-booking-detail">
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between">
                                <h4 class="text-uppercase">DELUXE KING</h4>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small-ratings">
                                    <i class="fa fa-star rating-color-star"></i>
                                    <i class="fa fa-star rating-color-star"></i>
                                    <i class="fa fa-star rating-color-star"></i>
                                    <i class="fa fa-star rating-color-star"></i>
                                    <i class="fa fa-star rating-color-star"></i>
                                    <small class="ms-1">5.0</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-2 mt-2">
                        <div class="col-6 col-lg-6">
                            <div class="position-relative">
                                <div class="card p-2">
                                    <div class="d-flex flex-column p-1">
                                        <small class="pb-2 text-blue fw-lighter">Check-in</small>
                                        <small class="mr-0"><img src="<?= Yii::getAlias('@web/img/icon/Union.png') ?>" class="me-1" alt="icon" width="17px"> Sat 12 Jul 2023</small>
                                    </div>
                                </div>
                                <div class="line-payment"></div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <div class="card p-2">
                                <div class="d-flex flex-column p-1">
                                    <small class="pb-2 text-blue fw-lighter">Check-out</small>
                                    <small class="mr-0"><img src="<?= Yii::getAlias('@web/img/icon/Union.png') ?>" class="me-1" alt="icon" width="17px"> Sat 12 Jul 2023</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="card p-2">
                                <div class="d-flex flex-column p-1">
                                    <small class="pb-2 text-blue fw-lighter">Night(S)</small>
                                    <small class="mr-0"><img src="<?= Yii::getAlias('@web/img/icon/partly_cloudy_night.png') ?>" class="me-1" alt="icon" width="22px"> 3 Nights</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="card p-2">
                                <div class="d-flex flex-column p-1">
                                    <small class="pb-2 text-blue fw-lighter">For</small>
                                    <small class="mr-0"><img src="<?= Yii::getAlias('@web/img/icon/bed-1.png') ?>" class="me-1" alt="icon" width="22px"> 2 adults <span class="dot"></span> 1 Room</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h5 class="text-latter-spacing-one">Your price summary</h5>
                        <hr>
                        <div class="py-1 d-flex">
                            <div class="col-8">Room Price</div>
                            <div class="ms-auto">$130.76</div>
                        </div>
                        <div class="d-flex">
                            <div class="col-8">
                                <small class="text-muted">x3 night</small>
                            </div>
                        </div>
                        <hr>
                        <div class="py-1 d-flex">
                            <div class="col-8">Stay Hotel</div>
                            <div class="ms-auto">$390.76</div>
                        </div>
                        <div class="py-1 d-flex">
                            <div class="col-8">Deposit</div>
                            <div class="ms-auto">$195.76</div>
                        </div>
                        <hr>
                        <div class="py-2 d-flex">
                            <div class="col-8 h5">Due Now</div>
                            <div class="ms-auto h5 btn-border-price">$195.76</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body px-4 py-4">
                    <h4 class="text-latter-spacing">Do your have promo code?</h4>
                    <label for="firstName" class="form-label mt-2">Enter your promo code</label>
                    <input type="text" class="form-control-lg form-control" id="firstName" placeholder="" value="" required="">
                    <button type="button" class="btn demo-btn-outline-dark mt-4">Apply now</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body px-4 py-4">
                    <h4 class="text-latter-spacing-one mb-4">Choose payment method</h4>
                    <div class="row gy-3">
                        <div class="col-3 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-block">
                                        <input class="form-check-input demo-form-check-box" type="checkbox" value="" id="paypal" checked>
                                    </div>
                                    <div class="d-block mt-2">
                                        <img src="<?= Yii::getAlias('@web/img/logo/PayPal-Logo 1.png') ?>" class="me-1" alt="icon" width="65px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 col-lg-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-block">
                                        <input class="form-check-input demo-form-check-box" type="checkbox" value="" id="creditCard">
                                    </div>
                                    <div class="d-block mt-2">
                                        <small class="ms-0 text-small-credit"><img src="<?= Yii::getAlias('@web/img/icon/ic_CreditDebit.png') ?>" class="me-2" alt="icon" width="25px">Credit/Debit Card</small>
                                        <div class="position-relative">
                                            <div class="position-absolute" style="top: -8px;left:10px">
                                                <img src="<?= Yii::getAlias('@web/img/icon/All-Card.png') ?>" class="ms-4" alt="icon" width="80px">
                                            </div>
                                        </div>
                                        <div class="position-relative section-credit-Card1">
                                            <div class="position-absolute" style="top: -8px;left:10px; display:none;">
                                                <img src="<?= Yii::getAlias('@web/img/icon/All-Card-active.png') ?>" class="ms-4" alt="icon" width="80px">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-block">
                                        <input class="form-check-input demo-form-check-box" type="checkbox" value="" id="card">
                                    </div>
                                    <div class="d-block mt-2">
                                        <small class="ms-0"><img src="<?= Yii::getAlias('@web/img/icon/add_card.png') ?>" class="me-1" alt="icon" width="19px">New card</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-paypal">
                        <hr class="mt-4">
                        <h5 class="text-paypal-title">PayPal</h5>
                        <small class="text-detial-paypal">Click the PayPal button to log into your account. Please stay on PayPal’s page until we’ve directed you back to review and complete your booking.</small>
                        <div class="form-check form-switch mt-3">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label demo-form-check-label" for="flexSwitchCheckChecked">Save your PayPal account for faster payment next time.</label>
                        </div>
                        <div class="d-flex mt-4">
                            <div class="h5 demo-paypal">Pay<span class="color-paypal">Pal</span></div>
                        </div>
                    </div>
                    <div class="section-new-card" style="display: none;">
                        <hr class="mt-4">
                        <h5 class="text-paypal-title">New Card</h5>
                        <div class="mb-3">
                            <label for="forname" class="form-label fw-light">Cardhoder’s name</label>
                            <input type="name" class="form-control form-control-lg">
                        </div>
                        <label class="fw-light">Card Number</label>
                        <div class="input-group">
                            <div class="input-group-text border-end-0" style="background-color: #ffff;">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            <input type="text" class="form-control form-control-lg border-start-0">
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col-md-6">
                                <label class="fw-light">Expiry Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="MM/YY">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="fw-light">CVC/CVV</label>
                                <div class="input-group">
                                    <div class="input-group-text border-end-0" style="background-color: #ffff;">
                                        <i class="fas fa-credit-card"></i>
                                    </div>
                                    <input type="text" class="form-control form-control-lg border-start-0">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label demo-form-check-label" for="exampleCheck1">Save your card for faster payment next time.</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 mt-4">
                <a class="btn demo-btn-primary fs-5" href="<?= Url::to(['/booking/success']) ?>">Complete Payment</a>
            </div>
        </div>
    </div>
</div>
<?php
$script = <<<JS

$(document).ready(function(){
  $("#paypal").click(function(){
    $(".section-paypal").toggle(1000);
  });
  
  $("#card").click(function(){
    $(".section-new-card").toggle(1000);
  });
});
JS;
$this->registerJs($script);
?>