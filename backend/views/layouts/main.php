<?php


use yii\helpers\Html;
use yii\helpers\Url;
use common\models\User;

$bundle = yiister\gentelella\assets\Asset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) &&
$_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>" >
<?php $this->beginBody(); ?>
<div class="container body">
    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><i class="fa fa-globe"></i>
                        <span>Lochin HR Manager</span></a>
                </div>
                <div class="clearfix"></div>

                <div class="profile">
                    <div class="profile_pic">
                        <img src="http://placehold.it/128x128" alt="..." class="img-circle profile_img">
<!--                        --><?//= Html::img('/admin/uploads/'.Employee::getImages(),
//                            ['alt' => '...', 'class'=>'img-circle profile_img','width' => '100px']
//                        );
//                        ?>
                    </div>
                    <div class="profile_info">
                        <span>Добро пожаловать</span>
                        <h2><?=Yii::$app->user->identity->username?></h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->
                <br />
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <br>
                        <h3>Общее меню</h3>
                        <?=
                        \yiister\gentelella\widgets\Menu::widget(
                            [
                                "items" => [
                                    ["label" => "Dashboard", "url" => "/admin/site/index", "icon" => "home"],
                                    ["label" => "Тазйиқ ва зўравонлик содир этган шахс", "url" => ["punishedperson/index"], "icon" => "files-o"],
                                    ["label" => "Жабрланган шахс", "url" => ["clientes/index"],"icon" => "code-fork"],
                                    [
                                        "label" => "Ходимлар рўйхати",
                                        "icon" => "users",
                                        "url" => "#",
                                        "items" => [
                                            ["label" => "Список сотрудников", "url" => ["/employee/index"],"icon"=>"user"],
                                            ["label" => "Должность", "url" => ["/positions/index"],"icon" => "send"],
                                            ["label" => "Отдел", "url" => ["/departments/index"],"icon" => "sitemap"],
                                        ],
                                    ],
                                    [
                                        "label" => "Уммумий маълумотларм",
                                        "icon" => "users",
                                        "url" => "#",
                                        "items" => [
                                            ["label" => "Вилоятлар", "url" => ["/regions/index"],"icon"=>"user"],
                                            ["label" => "Туманлар", "url" => ["/districts/index"],"icon"=>"user"],
                                            ["label" => "Қишлоқ ва маҳалалар", "url" => ["/mfy/index"],"icon"=>"user"],

                                            ["label" => "Ёши", "url" => ["/ages/index"],"icon"=>"user"],
                                            ["label" => "Фуқаролиги", "url" => ["/citizenship/index"],"icon" => "send"],
                                            ["label" => "Жинси", "url" => ["/genders/index"],"icon" => "sitemap"],
                                            ["label" => "Маълумоти", "url" => ["/education/index"],"icon" => "sitemap"],
                                            ["label" => "Оилавий аҳволи", "url" => ["/familyposition/index"],"icon" => "sitemap"],
                                            ["label" => "Ижтимоий аҳволи", "url" => ["/socialstatus/index"],"icon" => "sitemap"],
                                            ["label" => "Шахснинг ҳолати бўйича", "url" => ["/conditionperson/index"],"icon" => "sitemap"],
                                            ["label" => "Содир этилган жойи", "url" => ["/placeection/index"],"icon" => "sitemap"],

                                            ["label" => "Жабрланган шахснинг бандлиги", "url" => ["/workingplace/index"],"icon" => "sitemap"],

                                            ["label" => "Тазйиқ ва зўравонлик турлари", "url" => ["/typeviolence/index"],"icon" => "sitemap"],

                                            ["label" => "Ҳимоя ордери бериш учун асос бўлган ҳужжатлар", "url" => ["/extensionprotectionorder/index"],"icon" => "sitemap"],
                                            ["label" => "Вояга етмаган ёки суд томондан муомалага лаёқатсиз деб топилган тазйиқ ва зўравонликдан жабрланувчиларга нисбатан
ҳимоя ордери кимлар иштирокида расмийлаштириб берилган",
                                                "url" => ["/genders/index"],"icon" => "sitemap"],

                                            ["label" => "Белгиланган чекловлар", "url" => ["/typerestrictions/index"],"icon" => "sitemap"],

                                            ["label" => "Ҳимоя ордери муддати узайтирилганлиги",
                                                "url" => ["/genders/index"],"icon" => "sitemap"],

                                            ["label" => "Тазйиқ ва зўравонликдан жабрланувчиларга ёрдам кўрсатиш
бўйича махсус марказларга жойлаштириш", "url" => ["/sendpreparation/index"],"icon" => "sitemap"],


                                            ["label" => "Ҳимоя ордерини тугатиш асослари", "url" => ["/groundsterminationorder/index"],"icon" => "sitemap"],
                                            ["label" => "Тазйиқ ёки зўравонлик содир этган шахс", "url" => ["/personviolence/index"],"icon" => "sitemap"],
                                            ["label" => "Тазйиқ ва зўравонлик содир этган ҳолати", "url" => ["/stateviolence/index"],"icon" => "sitemap"],
                                            ["label" => "Тазйиқ ва зўравонлик ҳолатлари ким томондан содир этилганлиги", "url" => ["/ectionspersonviolence/index"],"icon" => "sitemap"],
                                            ["label" => "Зўравонлик содир этиш сабабалари", "url" => ["/reasonviolence/index"],"icon" => "sitemap"],
                                            ["label" => "Тазйиқ ва зўравонлик содир этган шахс ҳолати", "url" => ["/conditionpersonviolence/index"],"icon" => "sitemap"],
                                            ["label" => "Тазйиқ ва зўравонлик ҳолатларини содир этилганлигини такрорийлиги", "url" => ["/occurredrepetition/index"],"icon" => "sitemap"],
                                            ["label" =>"Ушбу ҳолат бўйича ҳимоя ордерини бериш билан биргаликда жиноят иши қўзғатилганлиги" , "url" => ["/genders/index"],"icon" => "sitemap"],
                                            ["label" =>"Ушбу ҳолат бўйича ҳимоя ордерини бериш билан биргаликда жиноят иши қўзғатилганлиги", "url" => ["/criminalproceedings/index"],"icon" => "sitemap"],
                                            ["label" => "Ушбу ҳолат бўйича ҳимоя ордерини бериш билан биргаликда маъмурий жавобгарликка тортилганлиги", "url" => ["/administrativeliability/index"],"icon" => "sitemap"],
                                        ],
                                    ],
                                ],
                            ]
                        )
                        ?>
                    </div>
                </div>
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>

            </div>
        </div>

        <div class="top_nav">
            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="http://placehold.it/128x128" alt=""><?= Yii::$app->user->identity->username?>
                                <span class=" fa fa-angle-down"></span>
                                <!--                                --><?//=
//
//                                Html::img('/admin/uploads/'.Employee::getImages(),
//                                    ['alt' => '...', 'class'=>'']
//                                );
                                ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li>
                                    <?php
                                    if (Yii::$app->user->isGuest) {
                                        echo '<li><a href="/admin/login/">Login</a></li>';
                                    } else {
                                        echo '<li>'
                                            . Html::beginForm(['/site/logout'], 'post')
                                            . Html::submitButton(
                                                'Выйти (' . Yii::$app->user->identity->username . ')',
                                                ['class' => 'btn btn-link logout']
                                            )
                                            . Html::endForm()
                                            . '</li>';
                                    }
                                    ?>
                                </li>
                            </ul>
                        </li>

                        <!--                        Notifocation-->
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                        <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                        <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                        <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                        <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a href="/">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!--                        Notifocation-->
                    </ul>
                </nav>
            </div>
        </div>

        <div class="right_col" role="main">
            <?php if (isset($this->params['h1'])): ?>
                <div class="page-title">
                    <div class="title_left">
                        <h1><?= $this->params['h1'] ?></h1>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="clearfix"></div>
            <?= $content ?>
        </div>

        <footer>
            <div class="pull-right">
                <!--                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com" rel="nofollow" target="_blank">Colorlib</a><br />-->
                <!--                Extension for Yii framework 2 by <a href="http://yiister.ru" rel="nofollow" target="_blank">Yiister</a>-->
            </div>
            <div class="clearfix"></div>
        </footer>

    </div>

</div>





<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
