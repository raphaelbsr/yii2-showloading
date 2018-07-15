<?php

namespace raphaelbsr\showloading;

use Yii;
use yii\web\AssetBundle;

/**
 * @author Alexander Stepanov <student_vmk@mail.ru>
 */
class ShowLoadingAsset extends AssetBundle
{
    public $sourcePath = '@vendor/raphaelbsr/yii2-showloading/assets';
    public $css = [
        'css/showLoading.css',
    ];
    public $js = [
        'js/jquery.showLoading.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
        //$this->js[] = YII_DEBUG ? 'js/jquery.showLoading.js' : 'js/jquery.showLoading.min.js';
    }
}
