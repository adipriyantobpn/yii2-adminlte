<?php
use yii\helpers\Inflector;
use yii\widgets\Breadcrumbs;
use adipriyantobpn\adminlte\widgets\Alert;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $adminlteDirAsset string */
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= isset($this->title)
                ? Html::encode($this->title)
                : Inflector::camel2words(Inflector::id2camel($this->context->module->id))
            ?>
            <?= isset($this->params['subtitle'])
                ? '<small>' . $this->params['subtitle'] . '</small>'
                : ''
            ?>
        </h1>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
        <!-- Your Page Content Here -->

    </section><!-- /.content -->
</div>