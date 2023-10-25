<?php
$this->title = 'Accommodation';
?>
<section class="section-accommodation">
    <div class="container bg-accomonation">
        <?= $this->render('/site/_breadcrumb_header') ?>
        <div class="row justify-content-start mt-4">
            <div class="col-lg-8">
                <div class="position-relative w-75">
                    <input class="form-control demo-rounded border-1  w-100 py-3 ps-4 pe-5" type="text" placeholder="What can we help you?">
                    <button type="button" class="btn btn-search demo-rounded  position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                </div>
            </div>
        </div>
    </div>
    <?= $this->render('/site/_sub_room_detail') ?>
</section>