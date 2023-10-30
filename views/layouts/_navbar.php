<nav class="navbar demo-navbar navbar-expand-lg bg-white navbar-light p-3 shadow-sm " id="navbar_top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>">
            <img src="<?= Yii::getAlias('@web/img/logo/logo.png') ?>" alt="logo" width="160px" />
        </a>
        <!-- <div class="">
            <button class="navbar-toggler shadow-none border-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
        </div> -->
        <div class="d-lg-none d-xl-block">
            <button class="navbar-toggler shadow-none border-0 p-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars bar-color"></span>
            </button>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content demo-navbar-color">
                    <div class="modal-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-text mx-2 text-uppercase text-white active" href="<?= Yii::$app->homeUrl ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-text mx-2 text-uppercase" href="<?= Yii::getAlias('@web/home/accommodation') ?>">ACCOMMODATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-text mx-2 text-uppercase" href="<?= Yii::getAlias('@web/home/facility') ?>">FACILITIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-text mx-2 text-uppercase" href="<?= Yii::getAlias('@web/home/about-us') ?>">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-text mx-2 text-uppercase" href="<?= Yii::getAlias('@web/home/news-and-update') ?>">NEWS AND UPDATE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-text mx-2 text-uppercase" href="<?= Yii::getAlias('@web/home/contact-us') ?>">CONTACT US</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link nav-text mx-2 text-uppercase active" href="<?= Yii::$app->homeUrl ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-text mx-2 text-uppercase" href="<?= Yii::getAlias('@web/home/accommodation') ?>">ACCOMMODATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-text mx-2 text-uppercase" href="<?= Yii::getAlias('@web/home/facility') ?>">FACILITIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-text mx-2 text-uppercase" href="<?= Yii::getAlias('@web/home/about-us') ?>">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-text mx-2 text-uppercase" href="<?= Yii::getAlias('@web/home/news-and-update') ?>">NEWS AND UPDATE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-text mx-2 text-uppercase" href="<?= Yii::getAlias('@web/home/contact-us') ?>">CONTACT US</a>
                </li>
            </ul>
            <div class="d-sm-none d-md-block">
                <ul class="navbar-nav ">
                    <a class="btn btn-success btn-text text-uppercase" href="<?= Yii::getAlias('@web/home/accommodation') ?>">Book</a>
                </ul>
            </div>
        </div>
    </div>
</nav>