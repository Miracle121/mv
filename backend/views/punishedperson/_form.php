<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Punishedperson */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="punishedperson-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secondname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ordernumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateissue')->textInput() ?>

    <?= $form->field($model, 'dateend')->textInput() ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'livingplacesregions')->textInput() ?>

    <?= $form->field($model, 'livingplacesdistricts')->textInput() ?>

    <?= $form->field($model, 'livingplacesmahalla')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'registrationregion')->textInput() ?>

    <?= $form->field($model, 'registrationdistricts')->textInput() ?>

    <?= $form->field($model, 'registrationmahalla')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fulldescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'createddate')->textInput() ?>

    <?= $form->field($model, 'creatorid')->textInput() ?>

    <?= $form->field($model, 'administrId')->textInput() ?>

    <?= $form->field($model, 'agesId')->textInput() ?>

    <?= $form->field($model, 'citizenshipId')->textInput() ?>

    <?= $form->field($model, 'conditionpersonId')->textInput() ?>

    <?= $form->field($model, 'conditionvId')->textInput() ?>

    <?= $form->field($model, 'criminalproceedId')->textInput() ?>

    <?= $form->field($model, 'districtsId')->textInput() ?>

    <?= $form->field($model, 'ectionspersonId')->textInput() ?>

    <?= $form->field($model, 'educationId')->textInput() ?>

    <?= $form->field($model, 'extensionId')->textInput() ?>

    <?= $form->field($model, 'familypositionId')->textInput() ?>

    <?= $form->field($model, 'gendersId')->textInput() ?>

    <?= $form->field($model, 'groundsId')->textInput() ?>

    <?= $form->field($model, 'mfyId')->textInput() ?>

    <?= $form->field($model, 'occurredrepetitionId')->textInput() ?>

    <?= $form->field($model, 'personviolenceId')->textInput() ?>

    <?= $form->field($model, 'placeectionId')->textInput() ?>

    <?= $form->field($model, 'reasonviolenceId')->textInput() ?>

    <?= $form->field($model, 'regionsId')->textInput() ?>

    <?= $form->field($model, 'sendpreparationId')->textInput() ?>

    <?= $form->field($model, 'socialstatusId')->textInput() ?>

    <?= $form->field($model, 'stateviolenceId')->textInput() ?>

    <?= $form->field($model, 'typerestrictionsId')->textInput() ?>

    <?= $form->field($model, 'typeviolenceId')->textInput() ?>

    <?= $form->field($model, 'workingplaceId')->textInput() ?>

    <?= $form->field($model, 'jabirlanuvchi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
