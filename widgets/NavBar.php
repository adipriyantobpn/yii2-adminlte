<?php
namespace adipriyantobpn\adminlte\widgets;

use yii\helpers\Html;

class NavBar extends \yii\bootstrap\NavBar
{
    /**
     * @inheritdoc
     */
    protected function renderToggleButton()
    {
        $bar = Html::tag('icon', '', ['class' => 'fa fa-bars']);
        $screenReader = "<span class=\"sr-only\">{$this->screenReaderToggleText}</span>";

        return Html::button("{$screenReader}\n{$bar}", [
            'class' => 'navbar-toggle',
            'data-toggle' => 'collapse',
            'data-target' => "#{$this->containerOptions['id']}",
        ]);
    }
}