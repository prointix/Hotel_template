<?php

namespace app\assets;

use yii\web\AssetBundle;

class DatePickerAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css'

    ];
    /**
     * @var array
     */
    public $js = [
        'https://cdn.jsdelivr.net/npm/flatpickr',
        'js/qty.js'

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
