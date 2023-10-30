<?php

use app\assets\DatePickerAsset;

DatePickerAsset::register($this);
?>
<div class="container-fluid bg-primary-search mb-2 search-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-9 col-xl-9">
        <div class="row g-3">
          <div class="col-lg col-xl">
            <div class="row">
              <div class="col col-lg-6 col-xl-6">
                <div class="input-group mt-1">
                  <input type="text" id="selecteddate" class="form-control demo-border-search py-2 bor-1" name="datefilter" placeholder="Check in">
                  <span class="input-group-text demo-input-group-text"><small class="mr-0"><img src="<?= Yii::getAlias('@web/img/icon/Union-1.png') ?>" class="me-1" alt="icon" width="17px"></small></span>
                </div>
              </div>
              <div class="col col-lg-6 col-xl-6">
                <div class="input-group mt-1">
                  <input type="text" id="selecteddate" class="form-control demo-border-search py-2 bor-1" name="datefilter" value="" placeholder="Check out">
                  <span class="input-group-text demo-input-group-text"><small class="mr-0"><img src="<?= Yii::getAlias('@web/img/icon/Union-1.png') ?>" class="me-1" alt="icon" width="17px"></small></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg">
            <div class="input-group mt-1">
              <input type="text" class="form-control demo-border-search py-2" placeholder="1 Room">
              <input type="text" class="form-control demo-border-search py-2" placeholder="2 adults">
              <input type="text" class="form-control demo-border-search py-2" placeholder="0 child">
              <span class="input-group-text demo-input-group-text"></span>
              <div class="popover__wrapper">
                <div class="popover_icon">
                  <i class="fas fa-chevron-down color-icon-search"></i>
                </div>
                <div class="popover__content">
                  <div class="popover__message">
                    <div class="row">
                      <div class="align-self-center">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="p-2">Room</div>
                          <div class="mt-1 mb-2">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-number" data-type="minus" data-field="quant[2]">
                                  <span class="color-minus"><i class="fas fa-minus-square fa-lg"></i></span>
                                </button>
                              </span>
                              <div class="demo-number">
                                <input type="text" name="quant[1]" class="form-control input-number" value="10" min="1" max="100">
                              </div>
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-number" data-type="plus" data-field="quant[1]">
                                  <span class="color-plus"><i class="fas fa-plus-square fa-lg"></i></span>
                                </button>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="p-2">Adult</div>
                          <div class="my-2">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-number" data-type="minus" data-field="quant[2]">
                                  <span class="color-minus"><i class="fas fa-minus-square fa-lg"></i></span>
                                </button>
                              </span>
                              <div class="demo-number">
                                <input type="text" name="quant[2]" class="form-control input-number" value="10" min="1" max="100">
                              </div>
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-number" data-type="plus" data-field="quant[2]">
                                  <span class="color-plus"><i class="fas fa-plus-square fa-lg"></i></span>
                                </button>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex  justify-content-between align-items-center">
                          <div class="p-2">Childre</div>
                          <div class="mb-2 mt-2">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-number" data-type="minus" data-field="quant[2]">
                                  <span class="color-minus"><i class="fas fa-minus-square fa-lg"></i></span>
                                </button>
                              </span>
                              <div class="demo-number">
                                <input type="text" name="quant[3]" class="form-control input-number" value="10" min="1" max="100">
                              </div>
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-number" data-type="plus" data-field="quant[3]">
                                  <span class="color-plus"><i class="fas fa-plus-square fa-lg"></i></span>
                                </button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-6">
                        <div class="d-flex">
                          <button type="button" class="btn btn-outline-secondary btn-popover-clear">Clear</button>
                          <button type="button" class="btn btn-secondary btn-popover-done ms-3">Done</button>
                        </div>
                      </div>
                      <div class="col-6"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 d-grid gap-2">
        <button class="btn-search border py-2 mt-1">Check Availability</button>
      </div>
    </div>
  </div>
</div>
<?php
$script = <<<JS
    
    flatpickr('#selecteddate', {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        minDate: 'today'
    });
JS;
$this->registerJs($script);
?>