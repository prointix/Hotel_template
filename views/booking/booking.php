<?php

use yii\helpers\Url;

$this->title = 'Bookinng';
?>
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
                <button type="button" class="btn btn-outline-dark btn-circle-step-active mx-1">2</button>
                <p class="demo-text-step-active mt-1">Details</p>
            </div>
        </div>
        <div class="col-4 col-lg-4">
            <div class="d-block text-center">
                <button type="button" class="btn btn-outline-dark btn-circle-step mx-1">3</button>
                <p class="demo-text-step mt-1">Confirmation</p>
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
                    <h4 class="text-latter-spacing-one mb-4">Enter Your Detail</h4>
                    <div class="row gx-3 gy-2">
                        <div class="col-lg-6">
                            <label for="" class="form-label">First name</label>
                            <input class="form-control form-control-lg" type="text">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="" class="form-label">Last name</label>
                            <input class="form-control form-control-lg" type="text">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="" class="form-label">Email</label>
                            <input class="form-control form-control-lg" type="text">
                            <div class="invalid-feedback">
                                Valid email name is required.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="" class="form-label">Confirm email</label>
                            <input class="form-control form-control-lg" type="text">
                            <div class="invalid-feedback">
                                Valid confirm email name is required.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="" class="form-label">Phone number</label>
                            <input class="form-control form-control-lg" type="text">
                        </div>
                        <div class="col-lg-6">

                            <label for="" class="form-label">Conntry/Region</label>
                            <div class="input-group input-group-lg">
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="my-4">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label text-muted" for="exampleCheck1">Create an account to manage your booking online</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-1 mb-4">
                <div class="card-body px-4 py-4">
                    <h4 class="text-latter-spacing-one mb-4">Your Arrival time</h4>
                    <div class="d-flex align-items-start col-8">
                        <small class="mt-2">
                            <img src="<?= Yii::getAlias('@web/img/icon/task_alt-1.png') ?>" class="me-2" alt="icon" width="18px">
                        </small>
                        <small class="mx-2 fw-light">Your room will be ready for check-in between 14:00 and 00:00</small>
                    </div>
                    <div class="d-flex mt-3">
                        <small class="mr-2">
                            <img src="<?= Yii::getAlias('@web/img/icon/new-1.png') ?>" class="me-2" alt="icon" width="22px">
                        </small>
                        <small class="mx-2 fw-light">24-hour front desk &minus; Help whenever you need it!</small>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body px-4 py-4">
                    <h4 class=" text-latter-spacing-one mb-3">Choose payment option</h4>
                    <form class="pb-0">
                        <div class="d-flex flex-row pb-3">
                            <div class="rounded border d-flex w-100 p-2 align-items-center">
                                <p class="mb-0">
                                    <button type="button" class="btn btn-outline-dark btn-circle-payment mx-1 me-3"><i class="fas fa-donate"></i></button>Deposit
                                </p>
                                <div class="ms-auto">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="..." checked />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row pb-3">
                            <div class="rounded border d-flex w-100 p-2 align-items-center">
                                <p class="mb-0">
                                    <button type="button" class="btn btn-outline-dark btn-circle-full-payment mx-1 me-3"><i class="fas fa-money-check-alt"></i></button>Full peyment
                                </p>
                                <div class="ms-auto">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="..." checked />
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="d-grid gap-2 mt-4">
                <a class="btn demo-btn-primary fs-5 d-sm-none d-md-block" href="<?= Url::to(['/booking/payment']) ?>">Continue To Payment</a>
            </div>
            <div class="d-grid gap-2 mt-4">
                <a class="btn demo-btn-primary fs-5 d-xl-none d-xxl-block" href="<?= Url::to(['/booking/payment']) ?>">Book Now</a>
            </div>
        </div>
    </div>
</div>