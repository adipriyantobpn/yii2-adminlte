<?php
use yii\helpers\Html;
use adipriyantobpn\adminlte\assets\AdminlteAsset;

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $skin string */
/* @var $layout string */

//-- register assets
AdminlteAsset::register($this);
//-- get asset URL
$adminlteAsset = new AdminlteAsset();
$adminlteDirAsset = Yii::$app->assetManager->getPublishedUrl($adminlteAsset->sourcePath);
//-- get adminlte skin & layout
$skin = (isset($this->params['skin'])) ? $this->params['skin'] : 'skin-blue';
$layout = (isset($this->params['layout'])) ? $this->params['layout'] : '';
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <?= Html::csrfMetaTags() ?>
    <?= $this->head() ?>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|---------------------------------------------------------|

-->
<body class="<?= $skin ?> <?= $layout ?>">
<?= $this->beginBody() ?>
<div class="wrapper">

    <!-- Main Header -->
    <?= $this->render('header.php', [
        'adminlteDirAsset' => $adminlteDirAsset,
    ]) ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?= $this->render('left.php', [
        'adminlteDirAsset' => $adminlteDirAsset,
    ]) ?>

    <!-- Content Wrapper. Contains page content -->
    <?= $this->render('content.php', [
        'content' => $content,
        'adminlteDirAsset' => $adminlteDirAsset,
    ]) ?><!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?= $this->render('footer.php', [
        'adminlteDirAsset' => $adminlteDirAsset,
    ]) ?>

</div><!-- ./wrapper -->
<?= $this->endBody() ?>
</body>
</html>
<?= $this->endPage() ?>