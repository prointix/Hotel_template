<?php
$this->title = 'Swimming pool';
$this->params['breadcrumbs'][] = ['label' => 'Facility', 'url' => ['/home/facility']];
?>
<section class="section-detail-facility">
    <div class="container">
        <div class="section-breadcrumb mb-5">
            <div class="row justify-content-start">
                <div class="col-lg-10">
                    <div class="d-inline-flex">
                        <p class="m-0"><a href="<?= Yii::$app->homeUrl ?>" class="text-decoration-none text-dark"> <img src="<?= Yii::getAlias('@web/img/icon/Home.png') ?>" class="me-2" alt="icon" width="17px"> Home</a></p>
                        <i class="fas fa-angle-right pt-1 px-3"></i>
                        <p class="m-0">Facilities</p>
                        <i class="fas fa-angle-right pt-1 px-3"></i>
                        <p class="m-0 demo-breadcrumb"><?= $this->params['pageTitle'][] = $this->title; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="d-block demo-detail-facility">
                    <h2 class="text-detail-facility-h2">GALLERY</h2>
                    <h1 class="text-detail-facility-h1">SWIMMING POOL</h1>
                </div>
                <div class="line-detail-facility"></div>
            </div>
            <div class="col-lg-7">
                <div class="d-block demo-detail-facility">
                    <h5 class="text-detail-facility-h5">The best swimming pool for you</h5>
                    <p class="text-detail-facility-p">The swimming pool is located in the center of the hotel's grounds, surrounded by lush greenery and palm trees. The pool is a large, rectangular pool with a shallow end and a deep end. There is a waterfall feature at one end of the pool, and a swim-up bar at the other end.</p>
                    <div class="card border-card-left px-0 py-2 mt-5">
                        <div class="d-flex">
                            <small class="mx-2 my-2">Booking swimming Pool</small>
                            <div class="line-1 my-3 mx-2"></div>
                            <h5 class="my-2 text-box">CONTACT US:</h5>
                            <small class="my-2 mx-2">(+885) 60 617 022</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container section-gallery d-sm-none d-md-block">
        <h2 class="text-gallery">Discover the best gallery</h2>
        <hr class="detail4">
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="zoom-effect-facility">
                    <div class="image-effect">
                        <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-1.png') ?>" class="img-fluid detail-img-facility" alt="gallery facility">
                        <figcaption>
                            <h4><span class="h3">ALDE </span><br /> NAIRE</h4>
                        </figcaption>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row gx-3">
                    <div class="col-md-6">
                        <div class="zoom-effect-facility">
                            <div class="image-effect mb-3">
                                <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-2.png') ?>" class="img-fluid" alt="gallery facility">
                                <figcaption>
                                    <h6><span class="h5">ALDE </span><br /> NAIRE</h6>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="zoom-effect-facility">
                            <div class="image-effect">
                                <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-3.png') ?>" class="img-fluid" alt="gallery facility">
                                <figcaption>
                                    <h6><span class="h5">ALDE </span><br /> NAIRE</h6>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="zoom-effect-facility">
                            <div class="image-effect">
                                <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-4.png') ?>" class="img-fluid" alt="gallery facility">
                                <figcaption>
                                    <h6><span class="h5">ALDE </span><br /> NAIRE</h6>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="zoom-effect-facility">
                            <div class="image-effect">
                                <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-5.png') ?>" class="img-fluid" alt="gallery facility">
                                <figcaption>
                                    <h6><span class="h5">ALDE </span><br /> NAIRE</h6>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-6">
                <div class="zoom-effect-facility">
                    <div class="image-effect mt-2">
                        <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-6.png') ?>" class="img-fluid" alt="gallery facility">
                        <figcaption>
                            <h4><span class="h3">ALDE </span><br /> NAIRE</h4>
                        </figcaption>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="zoom-effect-facility">
                    <div class="image-effect mt-2">
                        <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-7.png') ?>" class="img-fluid" alt="gallery facility">
                        <figcaption>
                            <h4><span class="h3">ALDE </span><br /> NAIRE</h4>
                        </figcaption>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6">
                <div class="row gx-3">
                    <div class="col-md-6">
                        <div class="zoom-effect-facility">
                            <div class="image-effect mb-3">
                                <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-8.png') ?>" class="img-fluid" alt="gallery facility">
                                <figcaption>
                                    <h6><span class="h5">ALDE </span><br /> NAIRE</h6>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="zoom-effect-facility">
                            <div class="image-effect">
                                <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-9.png') ?>" class="img-fluid" alt="gallery facility">
                                <figcaption>
                                    <h6><span class="h5">ALDE </span><br /> NAIRE</h6>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="zoom-effect-facility">
                            <div class="image-effect">
                                <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-10.png') ?>" class="img-fluid" alt="gallery facility">
                                <figcaption>
                                    <h6><span class="h5">ALDE </span><br /> NAIRE</h6>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="zoom-effect-facility">
                            <div class="image-effect">
                                <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-11.png') ?>" class="img-fluid" alt="gallery facility">
                                <figcaption>
                                    <h6><span class="h5">ALDE </span><br /> NAIRE</h6>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="zoom-effect-facility">
                    <div class="image-effect">
                        <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-12.png') ?>" class="img-fluid detail-img-facility" alt="gallery facility">
                        <figcaption>
                            <h4><span class="h3">ALDE </span><br /> NAIRE</h4>
                        </figcaption>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container section-gallery d-none d-sm-block d-md-none">
        <h2 class="text-gallery">Discover the best gallery</h2>
        <hr class="detail4">
        <div class="row g-4">
            <div class="col-6">
                <div class="zoom-effect-facility">
                    <div class="image-effect">
                        <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-1.png') ?>" class="img-fluid" alt="gallery facility">
                        <figcaption>
                            <h4><span class="h3">ALDE </span><br /> NAIRE</h4>
                        </figcaption>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="zoom-effect-facility">
                    <div class="image-effect">
                        <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-2.png') ?>" class="img-fluid" alt="gallery facility">
                        <figcaption>
                            <h4><span class="h3">ALDE </span><br /> NAIRE</h4>
                        </figcaption>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="zoom-effect-facility">
                    <div class="image-effect">
                        <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-3.png') ?>" class="img-fluid" alt="gallery facility">
                        <figcaption>
                            <h4><span class="h3">ALDE </span><br /> NAIRE</h4>
                        </figcaption>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="zoom-effect-facility">
                    <div class="image-effect">
                        <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-4.png') ?>" class="img-fluid" alt="gallery facility">
                        <figcaption>
                            <h4><span class="h3">ALDE </span><br /> NAIRE</h4>
                        </figcaption>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="zoom-effect-facility">
                    <div class="image-effect">
                        <img src="<?= Yii::getAlias('@web/img/Gallery-Facility-5.png') ?>" class="img-fluid" alt="gallery facility">
                        <figcaption>
                            <h4><span class="h3">ALDE </span><br /> NAIRE</h4>
                        </figcaption>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->render('_suggestion_facility') ?>
    <div class="mt-5"></div>
    <?= $this->render('/site/_sub_partner') ?>
</section>