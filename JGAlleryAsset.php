<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 24.08.14
 * Time: 0:26
 */

class JGAlleryAsset extends \yii\web\AssetBundle{
    public $sourcePath = '@vendor/insolita/yii2-jgallery-widget/assets/jgallery';

    public $css = [];
    public $js=[];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function  init(){
        $this->js[] = YII_DEBUG ? 'js/jgallery.js' : 'js/jgallery.min.js';
        $this->js[] = 'js/tinycolor-0.9.16.min.js';
        $this->css[] = YII_DEBUG ? 'css/jgallery.css' : 'css/jgallery.min.css';
    }
} 