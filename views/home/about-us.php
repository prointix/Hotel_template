<?php

use app\assets\SlickAsset;
use Codeception\Lib\Interfaces\Web;

SlickAsset::register($this);
$this->title = 'About Us';

// Card FAQ
$cardfaq = [
    [
        'title' => 'What are the check-in and check-out times?',
        'description' => 'We are always happy to hear from our customers. If you have any questions, comments, or suggestions, please feel free to contact us. We can be reached by phone, email, or through our website.',
    ],
    [
        'title' => 'What are the payment options?',
        'description' => 'Our hotel typically accept cash, credit cards, and debit cards. Some hotels may also accept travelers checks or money orders.',
    ],
    [
        'title' => 'What are the amenities offered?',
        'description' => 'Amenities offered by hotels vary depending on the hotel. Some common amenities include free Wi-Fi, a fitness center, a swimming pool, and a business center.',
    ],
    [
        'title' => 'What are the cancellation policies?',
        'description' => "Cancellation policies vary depending on the hotel. You should always check the hotel's cancellation policy before making a reservation.",
    ],
    [
        'title' => 'What are the pet policies?',
        'description' => "Pet policies vary depending on the hotel. Some hotels allow pets, while others do not. You should always check the hotel's pet policy before making a reservation.",
    ],
    [
        'title' => 'What are the accessibility options?',
        'description' => "Accessibility options vary depending on the hotel. Some hotels have rooms that are accessible to guests with disabilities. You should always check the hotel's accessibility options before making a reservation.",
    ],
]
?>
<section class="section-about-us">
    <div class="container">
        <?= $this->render('/site/_breadcrumb_header') ?>
    </div>
    <div class="container mb-5">
        <div class="row justify-content-between">
            <div class="col-lg">
                <div class="demo-bg-image-about">
                    <img src="<?= Yii::getAlias('@web/Union.png') ?>" alt="bg image" class="demo-group-icon-about" width="200px">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <h2 class="demo-about-us-title text-uppercase text-center">About Us</h2>
                        <div class="line-about-us"></div>
                        <p class="demo-text-about-us col-12 col-lg-9 text-center mt-4">Welcome to our hotel! We are a family-owned and operated business that has been serving guests for over <a href="#" class="text-decoration-none demo-text-link">20 years.</a> We are committed to providing our guests with a comfortable and relaxing stay.</p>
                        <p class="demo-text-about-us col-12 col-lg-8 text-center mt-4">Our hotel is the perfect place to stay for your next vacation or business trip. We offer a variety of amenities and services to make your stay comfortable and enjoyable.</p>
                        <p class="demo-text-about-us col-12 col-lg-8 text-center mt-4">We offer a variety of room types to suit your needs, from standard rooms to suites. We have a dedicated team of event planners who can help you plan your next corporate event or social gathering. We have a 24-hour fitness center and swimming pool. We offer free Wi-Fi throughout the hotel. We have a 24-hour front desk and security staff.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <?= $this->render('_gallery_room') ?>
    </section>
    <section>
        <div class="container demo-about-us-mr">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= Yii::getAlias('@web/img/about-us-1.png') ?>" class="rounded rounded-radio-cuz mx-0 image-about-respon" alt="1" width="90%">
                </div>
                <div class="col-lg-6 mt-respon">
                    <h2>Security</h2>
                    <p class="text-color-paragrap mt-1">Our hotel have a 24-hour security presence, with guards patrolling the property and monitoring CCTV cameras.</p>
                    <p class="text-color-paragrap mt-1">Guests are typically issued key cards to access their rooms. These cards can be programmed to only work at certain times of day or for certain doors, which can help to prevent unauthorized access.</p>
                    <p class="text-color-paragrap mt-1">We have emergency procedures in place in case of fire, medical emergencies, or other disasters. These procedures are designed to keep guests and staff safe and to help them evacuate the hotel if necessary.</p>
                </div>
            </div>
        </div>
        <div class="container demo-about-us-mr">
            <div class="row">
                <div class="col-lg-6 order-sm-1 order-lg-0 mt-respon">
                    <h2>Excellent location</h2>
                    <p class="text-color-paragrap mt-1">If you are visiting a city, you will want to choose a hotel that is close to the attractions you want to see. This will save you time and money on transportation.</p>
                    <p class="text-color-paragrap mt-1">If you do not have a car, you will want to choose a hotel that is easily accessible by public transportation. This will give you more freedom to explore the city and get around without having to rely on taxis or ride-sharing services.</p>
                    <p class="text-color-paragrap mt-1">If you want to be able to walk to restaurants and shops, you will want to choose a hotel that is located in a lively area. This will make it easy to find food and drinks, as well as souvenirs and other items you may need during your stay.</p>
                </div>
                <div class="col-lg-6 order-sm-0 order-lg-1">
                    <img src="<?= Yii::getAlias('@web/img/about-us-2.png') ?>" class="rounded rounded-radio-cuz ms-lg-5 image-about-respon" alt="1" width="90%">
                </div>
            </div>
        </div>
        <div class="container demo-about-us-mr">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= Yii::getAlias('@web/img/about-us-3.png') ?>" class="rounded rounded-radio-cuz mx-0 image-about-respon" alt="1" width="90%">
                </div>
                <div class="col-lg-6 mt-respon">
                    <h2>Facilities</h2>
                    <p class="text-color-paragrap mt-1">We offer a variety of room types to suit guests' needs. Standard rooms are the most common type of room and typically offer a bed, a desk, a dresser, and a bathroom. </p>
                    <p class="text-color-paragrap mt-1">Some hotels have a spa on-site. These spas offer a variety of treatments, such as massages, facials, and body treatments.</p>
                    <p class="text-color-paragrap mt-1">We have a pool on-site. These pools are typically open during the summer months and offer a great way to cool off and relax.</p>
                    <p class="text-color-paragrap mt-1">Hotels typically offer parking to guests. This parking may be free or paid, and it may be valet or self-service.</p>
                </div>
            </div>
        </div>
        <div class="container demo-about-us-mr">
            <div class="row d-flex justify-content-between align-items-end">
                <div class="col-lg-6 order-sm-1 order-lg-0 mt-respon">
                    <h2>Friendly staff</h2>
                    <p class="text-color-paragrap mt-1">Friendly staff is one of the most important factors in determining the quality of a hotel stay. When staff is friendly and helpful, it can make all the difference in creating a positive and memorable experience for guests.</p>
                    <p class="text-color-paragrap mt-1">Friendly staff is approachable and makes guests feel welcome. They are always willing to help and answer questions.</p>
                    <p class="text-color-paragrap mt-1">Friendly staff is attentive to guests' needs and wants. They are always on the lookout for ways to make guests' stay more enjoyable.</p>
                    <p class="text-color-paragrap mt-1">Friendly staff is responsive to guests' requests. They are quick to act and resolve any issues that may arise.</p>
                </div>
                <div class="col-lg-6 order-sm-0 order-lg-1">
                    <img src="<?= Yii::getAlias('@web/img/about-us-4.png') ?>" class="rounded rounded-radio-cuz ms-lg-5 image-about-respon" alt="1" width="90%">
                </div>
            </div>
        </div>
    </section>
</section>
<div class="mt-5"></div>
<?= $this->render('_sub_partner_logo') ?>
<?= $this->render('customer') ?>
<?= $this->render('/site/_contact_section') ?>
<div class="container faqs-section">
    <div class="d-flex flex-column align-items-center justify-content-center">
        <h2>FAQs</h2>
        <p>(Frequently Asked Question) about ALDENAIRE HOTEL.</p>
        <div class="line-faqs"></div>
    </div>
    <div class="row d-flex justify-content-center row-cols-1 mt-4 g-4">
        <?php
        foreach ($cardfaq as $value) { ?>
            <div class="col-lg-6">
                <div class="position-relative">
                    <div class="card demo-about-us-card">
                        <div class="img-ellise">
                            <div class="card-body card-faqs">
                                <h5 class="card-title"><?= $value['title'] ?></h5>
                                <p class="card-text card-text-faqs mt-1"><?= $value['description'] ?></p>
                            </div>
                        </div>
                        <div class="position-absolute Dotted-Shape">
                            <img src="<?= Yii::getAlias('@web/img/Dotted-Shape-1.png') ?>" alt="Dotted Shape" width="25px">
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
$script = <<<JS
    
JS;
$this->registerJs($script);
?>