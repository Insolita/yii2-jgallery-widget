<?php
namespace insolita\jgallery;


/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 24.08.14
 * Time: 0:25
 */

class JGalleryWidget extends \yii\base\Widget{

    /***
     * @var string $selector initial selector
     */

    public $selector='';

    /**
     *@var array $pluginOptions   @see http://jgallery.jakubkowalczyk.pl/
     */

    public $pluginOptions=[];

    public function init()
    {
        parent::init();
        $view = $this->getView();
        $script = '';
        $options =!empty($this->pluginOptions)?\yii\helpers\Json::encode($this->pluginOptions):'';
        $script .= "$('$this->selector').jGallery($options);" . PHP_EOL;
        $view->registerJs($script);
        JGAlleryAsset::register($view);
    }
}