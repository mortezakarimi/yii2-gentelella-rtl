<?php
/**
 * @link http://morteza-karimi.ir/
 * @copyright Copyright (c) 2018 Morteza Karimi
 */

// You must change it to use in your application
namespace app\assets;

use yii\web\AssetBundle;

/**
 * Persian Date Picker asset bundle.
 * You can use this after install persian-datepicker on bower by using:
 * `composer require --prefer-dist bower-asset/persian-datepicker`
 * @see https://github.com/babakhani/pwt.datepicker
 * @author Morteza Karimi <mortezak1373@gmail.com>
 */
class PersianDateAsset extends AssetBundle
{
    public $sourcePath = '@bower/persian-date/dist';
    public $css = [
    ];
    public $js = [
        'persian-date.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
