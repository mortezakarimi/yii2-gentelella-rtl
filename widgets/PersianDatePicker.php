<?php

namespace mortezakarimi\gentelellartl\widgets;

use Yii;
use yii\base\Exception;
use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\widgets\InputWidget;
use app\assets\PersianDatePickerAsset;

class PersianDatePicker extends InputWidget
{
    public $model;
    public $inline = false;
    public $altField;
    private $defaultInlineOptions = [
        'container' => ['tag' => 'div', 'options' => ['dir' => "ltr"]],
        'options' => []
    ];
    private $defaultPluginOptions = [
        'observer' => true,
        'responsive' => true,
        'altFormat' => 'X',
        "autoClose" => true,
        "format" => 'L',
        'position' => "auto",
        'initialValue' => false,
        'persian' => ['showHint' => true],
        'gregorian' => [
            'locale' => 'en',
            'showHint' => true,
        ],
    ];
    private $defaultOptions = [
        'class' => 'form-control',
        "autocomplete" => "off"
    ];
    public $initDateValue;
    public $inlineOptions = [];
    public $pluginOptions = [];
    public $inputOptions = [];
    private $input_id;

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        if (!$this->hasModel()) {
            throw new InvalidConfigException("Either 'name', or 'model' and 'attribute' properties must be specified.");
        }
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : $this->getId();
        }

        if (!isset($this->pluginOptions['altField'])) {
            $this->pluginOptions['altField'] = "#" . $this->options['id'];
        }

        $this->pluginOptions = ArrayHelper::merge($this->defaultPluginOptions, $this->pluginOptions);
        if ($this->inline === true) {
            $this->pluginOptions = ArrayHelper::merge(['inline' => true], $this->pluginOptions);
            $this->input_id = $this->options['id'] . "_inlineDatePicker";
        } else {
            ArrayHelper::remove($this->pluginOptions, 'inline');
            $this->input_id = $this->options['id'] . "_datePickerInput";
        }
        $this->options = ArrayHelper::merge($this->defaultOptions, $this->options);
        $this->inputOptions = ArrayHelper::merge($this->defaultOptions, $this->inputOptions);
        $this->inputOptions = ArrayHelper::merge(['id' => $this->input_id], $this->inputOptions);
        $this->inlineOptions = ArrayHelper::merge($this->defaultInlineOptions, $this->inlineOptions);
        parent::init();
    }

    public function run()
    {
        $this->registerAssetBundle();
        $html = '';
        if ($this->inline === true) {
            $html .= $this->renderInputHtml('hidden');
            $html .= $this->renderInlineDate();
        } else {
            $html .= $this->renderInputHtml('hidden');
            $html .= $this->renderInputDate();
        }
        return $html;
    }

    protected function renderInlineDate()
    {
        $html = '';
        if (!empty($this->inlineOptions['container'])) {
            $html .= Html::beginTag(ArrayHelper::getValue($this->inlineOptions, 'container.tag', 'div'), ArrayHelper::getValue($this->inlineOptions, 'container.options', []));
        }
        $html .= Html::button('<span aria-hidden="true">&times;</span>', ['id' => $this->options['id'] . "_clearInput", "class" => "close", "aria-label" => Yii::t('yii', "Delete"), 'data-toggle' => 'tooltip', 'title' => Yii::t('yii', "Delete")]);
        $html .= Html::tag('div', '', ['id' => $this->input_id]);

        if (!empty($this->inlineOptions['container'])) {
            $html .= Html::endTag(ArrayHelper::getValue($this->inlineOptions, 'container.tag', 'div'));
            $html .= Html::tag('div', '', ['class' => 'clearfix']);
        }

        return $html;
    }

    protected function renderInputDate()
    {
        $html = '<div class="input-group">';
        $html .= Html::input('text', null, $this->value, $this->inputOptions);
        $html .= '<span class="input-group-btn">';
        $html .= Html::button('<span aria-hidden="true">&times;</span>', ['id' => $this->options['id'] . "_clearInput", "class" => "btn btn-default", "aria-label" => Yii::t('yii', "Delete"), 'data-toggle' => 'tooltip', 'title' => Yii::t('yii', "Delete")]);
        $html .= '</span></div>';
        return $html;
    }

    /**
     * Registers the asset bundle and locale
     */
    public function registerAssetBundle()
    {
        $view = $this->getView();
        \app\assets\PersianDatePickerAsset::register($view);
        $initDate = null;
        if (!empty($this->initDateValue)) {
            $initDate = Yii::$app->formatter->asTimestamp($this->initDateValue);
        }

        if ($this->inline === true) {
            $script = "var pd_" . Html::getAttributeName($this->attribute) . "=$('#" . $this->options['id'] . "_inlineDatePicker').persianDatepicker(" . Json::encode($this->pluginOptions) . ");$(document).on('click','#" . $this->options['id'] . "_clearInput" . "',function(e){e.preventDefault();pd_" . Html::getAttributeName($this->attribute) . ".setDate(new persianDate.unix({$initDate})); $('#" . $this->options['id'] . "').val('');pd_" . Html::getAttributeName($this->attribute) . ".options.onSelect()})";
        } else {
            $script = "var pd_" . Html::getAttributeName($this->attribute) . "=$('#" . $this->options['id'] . "_datePickerInput').persianDatepicker(" . Json::encode($this->pluginOptions) . ");$(document).on('click','#" . $this->options['id'] . "_clearInput" . "',function(e){e.preventDefault();pd_" . Html::getAttributeName($this->attribute) . ".setDate(new persianDate.unix({$initDate})); $('#" . $this->options['id'] . "').val('');$('#" . $this->options['id'] . "_datePickerInput').val('');pd_" . Html::getAttributeName($this->attribute) . ".options.onSelect()})";
        }
        $view->registerJs($script);
        if (!empty(Html::getAttributeValue($this->model, $this->attribute))) {
            $unixDate = Yii::$app->formatter->asTimestamp(Html::getAttributeValue($this->model, $this->attribute));
            $view->registerJs("pd_" . Html::getAttributeName($this->attribute) . ".setDate(new persianDate.unix({$unixDate}));");
        } elseif (!empty($this->initDateValue)) {
            $unixDate = Yii::$app->formatter->asTimestamp($this->initDateValue);
            $view->registerJs("pd_" . Html::getAttributeName($this->attribute) . ".setDate(new persianDate.unix({$unixDate}));$('#" . $this->options['id'] . "').val('');$('#" . $this->options['id'] . "_datePickerInput').val('');");
        }

    }
}