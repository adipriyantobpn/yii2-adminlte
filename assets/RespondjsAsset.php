<?php
namespace adipriyantobpn\adminlte\assets;

use yii\web\AssetBundle;

class RespondjsAsset extends AssetBundle
{
    public $sourcePath = '@bower/respond-minmax/dest';
    public $js = [
        'respond.min.js',
    ];
    public $jsOptions = [
        'condition' => 'lte IE9',
        'position' => \yii\web\View::POS_HEAD,
    ];
}