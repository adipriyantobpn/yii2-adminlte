<?php
namespace adipriyantobpn\adminlte\assets;

use yii\web\AssetBundle;

class RespondjsAsset extends AssetBundle
{
    public $sourcePath = '@bower/respond-minmax/dest';
    public $js = [
        'respond.min.js',
    ];
}