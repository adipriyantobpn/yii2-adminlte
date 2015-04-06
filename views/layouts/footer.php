<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $adminlteDirAsset string */

$companyName = isset(Yii::$app->params['companyName'])
    ? Yii::$app->params['companyName']
    : '';
$companySite = isset(Yii::$app->params['companySite'])
    ? Yii::$app->params['companySite']
    : '#';
$footerMessage = isset($this->params['footerMessage'])
    ? $this->params['footerMessage']
    : '';
?>
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        <?= $footerMessage ?>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?= date('Y') ?> <?= Html::a($companyName, $companySite) ?>.</strong> All rights reserved.
</footer>