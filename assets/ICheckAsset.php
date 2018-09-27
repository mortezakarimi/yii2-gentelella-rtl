<?php

namespace mortezakarimi\gentelellartl\assets;

use yii\web\AssetBundle;

/**
 * @author Morteza Karimi <mortezak1373@gmail.com>
 */
class ICheckAsset extends AssetBundle
{
    public $sourcePath = '@npm/gentelella-rtl/vendors/iCheck/';
    public $css = [
        'skins/flat/green.css'
    ];
    public $js = [
        'icheck.min.js'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
