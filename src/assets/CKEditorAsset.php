<?php

namespace up2110h\ckeditor\assets;

use yii\web\AssetBundle;

class CKEditorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $css = [
    ];
    public $js = [
        '//cdn.ckeditor.com/4.11.4/basic/ckeditor.js',
    ];
    public $depends = [
    ];
}
