<div dir="rtl" align="right">

 Gentelella RTL / قالب راست چین شده مدیریت برای فریمورک Yii2
======================================================
قالب راست چین مدیریت مخصوص فریمورک Yii2  بر اساس قالب [gentelella-rtl](https://github.com/mortezakarimi/gentelella-rtl).

این قالب بر اساس کد موجود در [yii2-gentelella](https://github.com/yiister/yii2-gentelella) پیاده سازی گشته است و شامل بسته‌های کد لازم و تعدادی ویجت و همچنین دارای ساختار قالب مورد نیاز برای پروژه می‌باشد.

برای اطلاعات بیشتر در مورد نحوه استفاده از امکانات پکیج به ریپوزیتوری اصلی در این آدرس  [yii2-gentelella](https://github.com/yiister/yii2-gentelella) مراجعه فرمایید.

روش نصب
------------

بهترین روش نصب با استفاده از  [composer](http://getcomposer.org/download/).

اجرای دستور زیر

<div dir="LTR" align="left" style="direction:ltr;text-align:left;">

```
php composer.phar require --prefer-dist mortezakarimi/yii2-gentelella-rtl "~1.0.0"
```

</div>

یا افزودن

<div dir="LTR" align="left" style="direction:ltr;text-align:left;">

```
"mortezakarimi/yii2-gentelella-rtl": "~1.0.0‍"
```

</div>

به بخش `require ` در فایل `composer.json`.

استفاده از تولید کننده ساخت صفحات
----------------------

با افزودن کد زیر به بخش `gii` در تنظیمات سایت می‌توانید از تولید کننده صفحات استفاده کنید.

<div dir="LTR" align="left" style="direction:ltr;text-align:left;">

```php
'generators' => [
            'gentelella-rtl' => [
                'class' => 'mortezakarimi\gentelellartl\generators\crud\Generator'
            ]
        ],
```

</div>

در آینده انجام خواهد شد
---------------
در آینده نزدیک مستندات اضافه خواهد شد.
