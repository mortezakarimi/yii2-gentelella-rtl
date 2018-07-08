<?php

namespace mortezakarimi\gentelellartl\assets;

use yii\web\AssetBundle;

/**
 * @author Morteza Karimi <mortezak1373@gmail.com>
 */
class BootstrapRTLAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-rtl/dist';
    public $css = [
        'css/bootstrap-rtl.min.css'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
