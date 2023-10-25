<nav class="navbar demo-navbar navbar-expand-lg bg-white navbar-light p-3 shadow-sm " id="navbar_top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>">
            <img src="<?= Yii::getAlias('@web/img/logo/logo.png') ?>" alt="logo" width="160px" />
        </a>
        <button class="navbar-toggler shadow-none border-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>

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