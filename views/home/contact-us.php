<?php
$this->title = 'Contact Us';
?>
<section class="section-contact-us position-relative">
    <div class="container">
        <?= $this->render('/site/_breadcrumb_header') ?>
    </div>
    <div class="container demo-contact-us">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="contact-us-title text-uppercase">Contact Us</h1>
            <div class="line-contact-us"></div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-6 order-lg-1 order-sm-2 mt-sm-5">
                <h2>Contact information</h2>
                <p class="text-contact-small-information col-lg-11">We are here to help you with any questions or concerns you may have. Please feel free to contact us using the information below.</p>
                <div class="line-us my-3 d-sm-none d-md-block"></div>
                <hr class="d-none d-sm-block d-md-none">
                <div class="d-block">
                    <small class="text-contact-small">Phone Number</small>
                    <h4 class="demo-text-contact-us">(+885) 60 617 022</h4>
                </div>
                <div class="d-block mt-3">
                    <small class="text-contact-small">Email address</small>
                    <h4 class="demo-text-contact-us">Aldenaire.info@gmail.com</h4>
                </div>
                <div class="d-block mt-3">
                    <small class="text-contact-small">Our location</small>
                    <h4 class="demo-text-contact-us">#0677, Group 25, Banteay Chas, Slor Kram, Siem Reap </h4>
                </div>
                <div class="d-block mt-3">
                    <small class="text-contact-small">Our hours of operation</small>
                    <h4 class="demo-text-contact-us">Available 24/7</h4>
                </div>
                <div class="line-us-infor my-4 d-sm-none d-md-block"></div>
                <hr class="d-none d-sm-block d-md-none">
                <div class="my-4">
                    <!-- <button type="button" class="btn btn-outline-dark btn-circle-footer mx-1"><i class="fas fa-voicemail"></i></button> -->
                    <button type="button" class="btn btn-outline-light btn-circle-footer mx-1"><img src="<?= Yii::getAlias('@web/img/icon/Trip_Advisor.png') ?>" class="pb-0" alt="trip advisor" width="19px"></button>
                    <button type="button" class="btn btn-outline-dark btn-circle-footer mx-1"><i class="fab fa-facebook-f"></i></button>
                    <button type="button" class="btn btn-outline-dark btn-circle-footer mx-1"><i class="fab fa-telegram-plane"></i></button>
                    <button type="button" class="btn btn-outline-dark btn-circle-footer mx-1"><i class="fas fa-envelope"></i></button>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-sm-1">
                <div class="card mb-4 demo-card-contact-us">
                    <div class="card-body demo-card-body-contact-us">
                        <h3 class="mb-4">Get in touch</h3>
                        <form>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example1">Name</label>
                                        <input type="text" id="form6Example1" class="form-control form-control-lg" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example2">Phone</label>
                                        <input type="text" id="form6Example2" class="form-control form-control-lg" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="form6Example3">Email</label>
                                <input type="text" id="form6Example3" class="form-control form-control-lg" />
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="form6Example4">Message</label>
                                <textarea type="text" id="form6Example4" class="form-control form-control-lg" rows="3" /></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-lg btn-info btn-block text-uppercase button-contact-us">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <img src="<?= Yii::getAlias('@web/Union.png') ?>" alt="bg image" class="d-none d-lg-block demo-contact-us-icon" width="420px">
            </div>
        </div>
    </div>
    <?= $this->render('_sub_partner_logo') ?>
    <div class="container">
        <div class="d-block">
            <h1 class="our-location">Get Direction</h1>
            <div class="line-contact-map"></div>
        </div>
        <div id="map-container-google-1" class="z-depth-1-half map-container demo-google-map my-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.819749933986!2d103.86334897473341!3d13.361481506211296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311017d8e848d339%3A0x2ceaa5f46dd48546!2sEuro%20Khmer%20Voyages!5e0!3m2!1sen!2skh!4v1695005798336!5m2!1sen!2skh" width="1170" height="596" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>