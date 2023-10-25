<?php

use yii\helpers\Url;
?>
<style>
    .image-box {
        overflow: hidden;
    }

    .image-box .card-img-top img {
        max-width: 100%;
        transition: all 0.3s ease;
        display: block;
        height: auto;
        object-fit: cover;
        transform: scale(1);
    }

    .image-box:hover img {
        transform: scale(1.2);
    }
</style>
<div class="card-section">
    <div class="container">
        <h2 class="demo-sub-card-on-h2">What are you looking for?</h2>
        <p class="col-10 col-lg-5 demo-sub-card-para">We offer a variety of room types to choose from, so you can find the perfect one for your needs.</p>
        <div class="row mt-3 gy-5">
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-none d-sm-block">
                            <div class="d-flex flex-row room-price ">
                                <small class="mt-2">From</small>
                                <h5 class="mt-1">$130</h5>
                                <small class="mt-2">/night</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">STUDIO QUEEN</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="<?= Url::to('@web/booking/room-detail') ?>" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-flex flex-row room-price ">
                            <small class="mt-2">From</small>
                            <h5 class="mt-1">$130</h5>
                            <small class="mt-2">/night</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">EXECUTIVE RESIDENCE</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="#" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-flex flex-row room-price ">
                            <small class="mt-2">From</small>
                            <h5 class="mt-1">$130</h5>
                            <small class="mt-2">/night</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">DELUXE KING</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="#" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-flex flex-row room-price ">
                            <small class="mt-2">From</small>
                            <h5 class="mt-1">$130</h5>
                            <small class="mt-2">/night</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">STUDIO QUEEN</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="#" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-flex flex-row room-price ">
                            <small class="mt-2">From</small>
                            <h5 class="mt-1">$130</h5>
                            <small class="mt-2">/night</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">EXECUTIVE RESIDENCE</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="#" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-flex flex-row room-price ">
                            <small class="mt-2">From</small>
                            <h5 class="mt-1">$130</h5>
                            <small class="mt-2">/night</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">DELUXE KING</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="#" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-5 mt-0">
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-flex flex-row room-price ">
                            <small class="mt-2">From</small>
                            <h5 class="mt-1">$130</h5>
                            <small class="mt-2">/night</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">STUDIO QUEEN</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="#" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-flex flex-row room-price ">
                            <small class="mt-2">From</small>
                            <h5 class="mt-1">$130</h5>
                            <small class="mt-2">/night</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">EXECUTIVE RESIDENCE</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="#" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-flex flex-row room-price ">
                            <small class="mt-2">From</small>
                            <h5 class="mt-1">$130</h5>
                            <small class="mt-2">/night</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">DELUXE KING</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="#" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-flex flex-row room-price ">
                            <small class="mt-2">From</small>
                            <h5 class="mt-1">$130</h5>
                            <small class="mt-2">/night</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">STUDIO QUEEN</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="#" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-flex flex-row room-price ">
                            <small class="mt-2">From</small>
                            <h5 class="mt-1">$130</h5>
                            <small class="mt-2">/night</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">EXECUTIVE RESIDENCE</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="#" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-card">
                    <div class="demo-card">
                        <div class="card-img-wrapper">
                            <img src="<?= Yii::getAlias('@web/img/product-1.png') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="demo-card-image">
                            <img src="<?= Yii::getAlias('@web/img/logo/logo-1.png') ?>" alt="logo" class="demo-card-image-respon" width="100px" />
                        </div>
                        <div class="d-flex flex-row room-price ">
                            <small class="mt-2">From</small>
                            <h5 class="mt-1">$130</h5>
                            <small class="mt-2">/night</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="demo-card-title">DELUXE KING</h5>
                        <div class="line-card"></div>
                        <div class="d-flex mb-4 mt-2">
                            <small class="mr-2"><img src="<?= Yii::getAlias('@web/img/icon/account_circle.png') ?>" class="me-1" alt="icon" width="17px"> Capacity : 4 Adults</small>
                            <small><img src="<?= Yii::getAlias('@web/img/icon/pivot_table_chart.png') ?>" class="ms-3" alt="icon" width="18px" height="18px"> Size : 39m²-53m²</small>
                        </div>
                        <a href="#" class="btn-more-detail mt-2">More detail <i class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->render('_sub_partner') ?>