<?php

namespace adipriyantobpn\adminlte\widgets;

use yii\helpers\Html;

class Box extends \yii\base\Widget
{
    CONST COLOR_DEFAULT = 'box-default';
    CONST COLOR_SUCCESS = 'box-success';
    CONST COLOR_WARNING = 'box-warning';
    CONST COLOR_DANGER = 'box-danger';

    CONST STATUS_COLLAPSED = 'collapsed-box';

    public $color = self::COLOR_DEFAULT;

    public $collapsible = false;

    public $removable = false;

    public $collapsed = false;

    public $title;

    public function init()
    {
        $collapsed = $this->collapsed ? 'collapsed-box' : '';

        echo Html::beginTag('div', ['class' => 'box ' . $this->color . ' ' . $collapsed]);
        $this->renderHeader();
        echo Html::beginTag('div', ['class' => 'box-body']);
    }

    public function run()
    {
        echo Html::endTag('div');
        echo Html::endTag('div');
    }

    protected function renderHeader()
    {
        echo Html::beginTag('div', ['class' => 'box-header with-border']);
        echo Html::tag('h4', Html::encode($this->title));
        echo $this->renderTool();
        echo Html::endTag('div');
    }

    protected function renderTool()
    {
        $icon = $this->collapsed ? '<i class="fa fa-plus"></i>' : '<i class="fa fa-minus"></i>';

        echo Html::beginTag('div', ['class' => 'box-tools pull-right']);
        echo ($this->collapsible)
            ? Html::button($icon, ['class' => 'btn btn-box-tool', 'data-widget' => 'collapse'])
            : '';
        echo ($this->removable)
            ? Html::button('<i class="fa fa-times"></i>', ['class' => 'btn btn-box-tool', 'data-widget' => 'remove'])
            : '';
        echo Html::endTag('div');
    }
}
?>