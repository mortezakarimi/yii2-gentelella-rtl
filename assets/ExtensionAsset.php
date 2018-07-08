<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace mortezakarimi\gentelellartl\assets;

use yii\web\AssetBundle;

class ExtensionAsset extends AssetBundle
{
    public $sourcePath = '@mortezakarimi/gentelellartl/assets/src';
    public $js = [
        'js/extension.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
