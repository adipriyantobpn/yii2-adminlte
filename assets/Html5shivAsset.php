<?php
namespace adipriyantobpn\adminlte\assets;

use yii\web\AssetBundle;

class Html5shivAsset extends AssetBundle
{
    public $sourcePath = '@bower/html5shiv/dist';
    public $js = [
        'html5shiv-printshiv.min.js',
        'html5shiv.min.js',
    ];
}