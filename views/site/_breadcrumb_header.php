<div class="section-breadcrumb mb-5">
    <div class="row justify-content-start">
        <div class="col-lg-10">
            <div class="d-inline-flex">
                <p class="m-0"><a href="<?= Yii::$app->homeUrl ?>" class="text-decoration-none text-dark fw-light"> <img src="<?= Yii::getAlias('@web/img/icon/Home.png') ?>" class="me-2" alt="icon" width="17px"> Home</a></p>
                <i class="fas fa-angle-right pt-1 px-3"></i>
                <p class="m-0 demo-breadcrumb fw-light"><?= $this->params['pageTitle'][] = $this->title; ?></p>
            </div>
        </div>
    </div>
</div>