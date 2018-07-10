<?php

/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;

$bundle = mortezakarimi\gentelellartl\assets\Asset::register($this);

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- /header content -->
<body class="login">
<?php $this->beginBody(); ?>
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <a class="hiddenanchor" id="reset"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form>
                    <h1>فرم ورود</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="نام کاربری" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="رمز ورود" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">ورود</a>
                        <a class="reset_pass" href="#reset">رمز ورود را از دست دادید؟</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">جدید در سایت؟
                            <a href="#signup" class="to_register"> ایجاد حساب </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©1397 تمامی حقوق محفوظ. Gentelella Alela! یک قالب بوت استرپ 3. حریم خصوصی و شرایط</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form>
                    <h1>ایجاد حساب</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="نام کاربری" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="ایمیل" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="رمز ورود" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">ارسال</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">در حال حاضر عضو هستید؟
                            <a href="#signin" class="to_register"> ورود </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©1397 تمامی حقوق محفوظ. Gentelella Alela! یک قالب بوت استرپ 3. حریم خصوصی و شرایط</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <div id="rest_pass" class="animate form rest_pass_form">
            <section class="login_content">
                <!-- /password recovery -->
                <form action="index.html">
                    <h1>بازیابی رمز عبور</h1>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" name="email" placeholder="ایمیل" />
                        <div class="form-control-feedback">
                            <i class="fa fa-envelope-o text-muted"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-block">بازیابی رمز عبور </button>
                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">جدید در سایت؟
                            <a href="#signup" class="to_register"> ایجاد حساب </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©1397 تمامی حقوق محفوظ. Gentelella Alela! یک قالب بوت استرپ 3. حریم خصوصی و شرایط</p>
                        </div>
                    </div>
                </form>
                <!-- Password recovery -->
            </section>
        </div>
    </div>
</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>