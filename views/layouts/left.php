<?php
use yii\widgets\Menu;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $adminlteDirAsset string */
?>
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $adminlteDirAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <?= Menu::widget([
            'encodeLabels' => false,
            'options' => ['class' => 'sidebar-menu'],
            'submenuTemplate' => "\n<ul class='treeview-menu'>\n{items}\n</ul>\n",
            'items' => [
                [
                    'label' => Html::tag('li', 'HEADER', ['class'=>'header']),
                ],
                [
                    'label' => '<span>Another Link</span>',
                    'url' => '#',
                    'options' => ['class'=>'active']
                ],
                [
                    'label' => '<span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i>',
                    'url' => '#',
                    'options' => ['class'=>'treeview'],
                    'items' => [
                        [
                            'label' => '<span>Another Link</span>',
                            'url' => '#',
                        ],
                        [
                            'label' => '<span>Another Link</span>',
                            'url' => '#',
                        ],
                        [
                            'label' => '<span>Multilevel 1</span> <i class="fa fa-angle-left pull-right"></i>',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => '<span>Another Link</span>',
                                    'url' => '#',
                                    'options' => ['class'=>'active']
                                ],
                                [
                                    'label' => '<span>Another Link</span>',
                                    'url' => '#',
                                ],
                                [
                                    'label' => '<span>Multilevel 2</span> <i class="fa fa-angle-left pull-right"></i>',
                                    'url' => '#',
                                    'options' => ['class'=>'treeview'],
                                    'items' => [
                                        [
                                            'label' => '<span>Another Link</span>',
                                            'url' => '#',
                                        ],
                                        [
                                            'label' => '<span>Another Link</span>',
                                            'url' => '#',
                                        ],
                                        [
                                            'label' => '<span>Multilevel 3</span> <i class="fa fa-angle-left pull-right"></i>',
                                            'url' => '#',
                                            'items' => [
                                                [
                                                    'label' => '<span>Another Link</span>',
                                                    'url' => '#',
                                                    'options' => ['class'=>'active']
                                                ],
                                                [
                                                    'label' => '<span>Another Link</span>',
                                                    'url' => '#',
                                                ],
                                                [
                                                    'label' => '<span>Multilevel 4</span> <i class="fa fa-angle-left pull-right"></i>',
                                                    'url' => '#',
                                                    'options' => ['class'=>'treeview'],
                                                    'items' => [
                                                        [
                                                            'label' => '<span>Another Link</span>',
                                                            'url' => '#',
                                                        ],
                                                        [
                                                            'label' => '<span>Another Link</span>',
                                                            'url' => '#',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]); ?>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>