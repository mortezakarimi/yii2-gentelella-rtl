<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace mortezakarimi\gentelellartl\assets;

use yii\web\AssetBundle;

class ThemeBuildAsset extends AssetBundle
{
    public $sourcePath = '@bower/gentelella-rtl/build/';

    public $css = [
        'css/custom.css',
    ];
}
