<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace mortezakarimi\gentelellartl\assets;

class Asset extends \yii\web\AssetBundle
{
    public $depends = [
        'mortezakarimi\gentelellartl\assets\ThemeAsset',
        'mortezakarimi\gentelellartl\assets\ExtensionAsset',
    ];
}
