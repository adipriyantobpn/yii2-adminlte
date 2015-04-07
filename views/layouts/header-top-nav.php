<?php
use adipriyantobpn\adminlte\widgets\NavBar;
use yii\bootstrap\Nav;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $adminlteDirAsset string */
?>
<header class="main-header">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'innerContainerOptions' => [
            'class' => 'container-fluid',
        ],
        'options' => [
            'class' => 'navbar navbar-static-top'
        ]
    ]);
    //-- left menu
    echo Nav::widget([
        'options' => [
            'class' => 'nav navbar-nav',
        ],
        'items' => [
            [
                'label' => 'Link',
            ],
            [
                'label' => 'Link',
            ],
            [
                'label' => 'Dropdown',
                'url' => '#',
                'items' => [
                    [
                        'label' => 'Action',
                        'url' => '#',
                    ],
                    [
                        'label' => 'Another Action',
                        'url' => '#',
                    ],
                    [
                        'label' => 'Something else here',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Action',
                                'url' => '#',
                            ],
                            [
                                'label' => 'Another Action',
                                'url' => '#',
                            ],
                        ],
                    ],
                    '<li class="divider"></li>',
                    [
                        'label' => 'Separated link',
                        'url' => '#',
                    ],
                    '<li class="divider"></li>',
                    [
                        'label' => 'One more separated link',
                        'url' => '#',
                    ],
                ],
            ]
        ],
    ]);
    //-- search form
    echo Html::beginForm('#', 'post', [
        'class' => 'navbar-form navbar-left',
        'role' => 'search',
    ]);
    echo Html::tag('div',
        Html::input('text', 'search', '', ['class' => 'form-control', 'id' => 'navbar-search-input', 'placeholder' => 'Search']),
        ['class' => 'form-group', 'role' => 'search']
    );
    echo Html::endForm();
    //-- left menu
    echo Nav::widget([
        'options' => [
            'class' => 'nav navbar-nav navbar-right',
        ],
        'items' => [
            [
                'label' => 'Link',
            ],
            [
                'label' => 'Link',
            ],
            [
                'label' => 'Dropdown',
                'url' => '#',
                'items' => [
                    [
                        'label' => 'Action',
                        'url' => '#',
                    ],
                    [
                        'label' => 'Another Action',
                        'url' => '#',
                    ],
                    [
                        'label' => 'Something else here',
                        'url' => '#',
                    ],
                    '<li class="divider"></li>',
                    [
                        'label' => 'Separated link',
                        'url' => '#',
                    ],
                    '<li class="divider"></li>',
                    [
                        'label' => 'One more separated link',
                        'url' => '#',
                    ],
                ],
            ]
        ],
    ]);
    NavBar::end();
    ?>
</header>