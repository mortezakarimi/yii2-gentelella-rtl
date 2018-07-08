<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace mortezakarimi\gentelellartl\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'mortezakarimi\gentelellartl\assets\BootstrapRTLAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'mortezakarimi\gentelellartl\assets\BootstrapProgressbar',
        'mortezakarimi\gentelellartl\assets\ThemeBuildAsset',
        'mortezakarimi\gentelellartl\assets\ThemeSrcAsset',
    ];
}
