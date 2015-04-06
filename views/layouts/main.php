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
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

</div><!-- ./wrapper -->
<?= $this->endBody() ?>
</body>
</html>
<?= $this->endPage() ?>