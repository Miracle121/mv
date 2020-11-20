<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<body class="login" style="background-color: #ffffff">
<div>
    <!--    //['id' => 'login-form', 'validateOnBlur'=>false]-->
    <?php $form = ActiveForm::begin(['id' => 'login-form', 'validateOnBlur'=>false]); ?>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <div>
                <img src="/admin/uploads/logo/lochin.jpg" width="350" height="350">
            </div>

            <section class="login_content">
                <h1>Вход в систему</h1>
                <div>
                    <?= $form->field($model, 'username')
                        ->textInput(['autofocus' => true,
                            'class' => 'form-control',
                            'placeholder' => 'Логин'])
                        ->label('Логин') ?>
                </div>
                <div>
                    <?= $form->field($model, 'password')
                        ->passwordInput(['autofocus' => true,
                            'class' => 'form-control',
                            'placeholder' => 'Пароль'])->label('Пароль') ?>
                </div>
                <div>
                    <?= Html::submitButton('Отправыть',
                        ['class' => 'btn btn-default submit', 'name' => 'login-button']) ?>
                    <a class="reset_pass" href="mailto:admin@example.com">Забилы свой пароль ?</a>
                </div>
                <div class="clearfix"></div>

            </section>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
</body>

