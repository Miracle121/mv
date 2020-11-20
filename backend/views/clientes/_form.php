<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Clientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'telegram_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ages')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'living_pls')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'edu_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info_edu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'family_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'xizmatsafari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'xarbiyxizmat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sudlangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'haydovchilik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'moshina')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language_eng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language_china')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_lang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'word')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '1c')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'boshqadastur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'korxonamalumot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oxirgiishjoyi_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'oxirgiishjoyi_oylik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qanchaoylik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qancha_ishlaysiz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ishdankeyin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kolectiv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otaona')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sogliq')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qoshimchainfo')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'rasim')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'qoshimcha')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
