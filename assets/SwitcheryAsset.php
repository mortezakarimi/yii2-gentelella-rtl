<?php

namespace mortezakarimi\gentelellartl\assets;

use yii\web\AssetBundle;

/**
 * @author Morteza Karimi <mortezak1373@gmail.com>
 */
class SwitcheryAsset extends AssetBundle
{
    public $sourcePath = '@npm/gentelella-rtl/vendors/switchery/dist/';
    public $css = [
        'switchery.min.css'
    ];
    public $js = [
        'switchery.min.js'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
