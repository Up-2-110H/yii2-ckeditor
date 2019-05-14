<?php

namespace up2110h\ckeditor\assets;

use yii\web\AssetBundle;

class CKEditorAsset extends AssetBundle
{
    public $basePath = '@webroot/ckeditor';
    public $baseUrl = '@web/ckeditor';
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $css = [
    ];
    public $js = [
        'ckeditor.js',
    ];
    public $depends = [
    ];
}
