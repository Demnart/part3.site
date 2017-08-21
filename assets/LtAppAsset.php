<?php
/**
 * Created by PhpStorm.
 * User: Genjo
 * Date: 14.08.2017
 * Time: 22:35
 */

namespace app\assets;


use yii\web\AssetBundle;
use yii\web\View;

class LtAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
    'js/html5shiv.js',
    'js/respond.min.js',
    ];

    public $jsOptions = [
        'condition'=>'lte IE9',
        'position'=> View::POS_HEAD
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}