<?php
namespace up2110h\ckeditor\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use up2110h\ckeditor\assets\CKEditorAsset;

class CKEditor extends Widget
{
    public $name;
    public $value;
    public $id;

    public function init()
    {
        parent::init();

        $this->value = '';
    }

    public function run()
    {
        CKEditorAsset::register($this->view);
        return Html::textarea($this->name, $this->value, ['id' => $this->id]) .
            Html::script("CKEDITOR.replace({$this->id});");
    }
}
