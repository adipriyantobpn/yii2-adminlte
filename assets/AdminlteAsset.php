<?php
namespace adipriyantobpn\adminlte\assets;

use yii\web\AssetBundle;

class AdminlteAsset extends AssetBundle
{
    public $sourcePath = '@bower/adminlte/dist';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
    ];
    public $js = [
        'js/app.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'adipriyantobpn\adminlte\assets\IoniconsAsset',
        'adipriyantobpn\adminlte\assets\Html5shivAsset',
        'adipriyantobpn\adminlte\assets\RespondjsAsset',
    ];
}