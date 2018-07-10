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
    <body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>">
    <?php $this->beginBody(); ?>
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col hidden-print">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <?= Html::a(FA::i(FA::_PAW) . Html::tag('span', 'Gentelella Alela!'), Yii::$app->homeUrl,["class"=>"site_title"]) ?>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="http://placehold.it/128x128" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>خوش آمدید,</span>
                            <h2>مرتضی کریمی</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br/>
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>عمومی</h3>
                            <?=
                            mortezakarimi\gentelellartl\widgets\Menu::widget(
                                [
                                    "items" => [
                                        ["label" => 'خانه', "url" => "/", "icon" => "home"],
                                        ["label" => "طرح‌بندی", "url" => ["site/layout"], "icon" => "files-o"],
                                        ["label" => "صفحه خطا", "url" => ["site/error-page"], "icon" => "close"],
                                        [
                                            "label" => "ویجت",
                                            "icon" => "th",
                                            "items" => [
                                                ["label" => "منو", "url" => ["site/menu"]],
                                                ["label" => "پنل", "url" => ["site/panel"]],
                                            ],
                                        ],
                                        [
                                            "label" => "نشانها",
                                            "icon" => "table",
                                            "items" => [
                                                [
                                                    "label" => "پیش‌فرض",
                                                    "badge" => "123",
                                                ],
                                                [
                                                    "label" => "موفق",
                                                    "badge" => "new",
                                                    "badgeOptions" => ["class" => "label-success"],
                                                ],
                                                [
                                                    "label" => "خطر",
                                                    "badge" => "!",
                                                    "badgeOptions" => ["class" => "label-danger"],
                                                ],
                                            ],
                                        ],
                                        [
                                            "label" => "چند‌لایه",
                                            "icon" => "table",
                                            "items" => [
                                                [
                                                    "label" => "لایه دوم ۱",
                                                ],
                                                [
                                                    "label" => "لایه دوم ۲",
                                                    "items" => [
                                                        [
                                                            "label" => "لایه سوم ۱",
                                                        ],
                                                        [
                                                            "label" => "لایه سوم ۲",
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ]
                            )
                            ?>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="تنظیمات">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="تمام صفحه" onclick="toggleFullScreen();">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="قفل" class="lock_btn">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <?= Html::a('<span class="glyphicon glyphicon-off" aria-hidden="true"></span>', ['site/logout'], ['data' => ['method' => 'post', 'toggle' => "tooltip", 'placement' => "top", 'title' => "خروج"]]) ?>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav hidden-print">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <img src="http://placehold.it/128x128" alt="">مرتضی کریمی
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> نمایه</a></li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>تنظیمات</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">کمک</a></li>
                                    <li><?= Html::a(FA::i(FA::_SIGN_OUT)->pullRight() . 'خروج', ['site/logout'], ['data' => ['method' => 'post']]) ?></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                        <span class="image"><img src="http://placehold.it/128x128"
                                                                 alt="Profile Image"/></span>
                                            <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                            <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                        <span class="image"><img src="http://placehold.it/128x128"
                                                                 alt="Profile Image"/></span>
                                            <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                            <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                        <span class="image"><img src="http://placehold.it/128x128"
                                                                 alt="Profile Image"/></span>
                                            <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                            <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                        <span class="image"><img src="http://placehold.it/128x128"
                                                                 alt="Profile Image"/></span>
                                            <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                            <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که....
                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>مشاهده تمام اعلان ها</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- /header content -->
            <div class="right_col" role="main">
                <?= $content ?>
            </div>
            <!-- footer content -->
            <footer class="hidden-print">
                <div class="pull-left">
                    Gentelella - قالب پنل مدیریت بوت استرپ <a href="https://colorlib.com">Colorlib</a> | پارسی شده توسط
                    <a
                            href="https://morteza-karimi.ir">مرتضی کریمی</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content-->
        </div>
    </div>
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
    <div id="lock_screen">
        <table>
            <tr>
                <td>
                    <div class="clock"></div>
                    <span class="unlock">
                    <span class="fa-stack fa-5x">
                      <i class="fa fa-square-o fa-stack-2x fa-inverse"></i>
                      <i id="icon_lock" class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                </span>
                </td>
            </tr>
        </table>
    </div>
    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>