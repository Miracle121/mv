<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PunishedpersonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="punishedperson-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'photo') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'secondname') ?>

    <?= $form->field($model, 'middlename') ?>

    <?php // echo $form->field($model, 'ordernumber') ?>

    <?php // echo $form->field($model, 'dateissue') ?>

    <?php // echo $form->field($model, 'dateend') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'livingplacesregions') ?>

    <?php // echo $form->field($model, 'livingplacesdistricts') ?>

    <?php // echo $form->field($model, 'livingplacesmahalla') ?>

    <?php // echo $form->field($model, 'registrationregion') ?>

    <?php // echo $form->field($model, 'registrationdistricts') ?>

    <?php // echo $form->field($model, 'registrationmahalla') ?>

    <?php // echo $form->field($model, 'fulldescription') ?>

    <?php // echo $form->field($model, 'createddate') ?>

    <?php // echo $form->field($model, 'creatorid') ?>

    <?php // echo $form->field($model, 'administrId') ?>

    <?php // echo $form->field($model, 'agesId') ?>

    <?php // echo $form->field($model, 'citizenshipId') ?>

    <?php // echo $form->field($model, 'conditionpersonId') ?>

    <?php // echo $form->field($model, 'conditionvId') ?>

    <?php // echo $form->field($model, 'criminalproceedId') ?>

    <?php // echo $form->field($model, 'districtsId') ?>

    <?php // echo $form->field($model, 'ectionspersonId') ?>

    <?php // echo $form->field($model, 'educationId') ?>

    <?php // echo $form->field($model, 'extensionId') ?>

    <?php // echo $form->field($model, 'familypositionId') ?>

    <?php // echo $form->field($model, 'gendersId') ?>

    <?php // echo $form->field($model, 'groundsId') ?>

    <?php // echo $form->field($model, 'mfyId') ?>

    <?php // echo $form->field($model, 'occurredrepetitionId') ?>

    <?php // echo $form->field($model, 'personviolenceId') ?>

    <?php // echo $form->field($model, 'placeectionId') ?>

    <?php // echo $form->field($model, 'reasonviolenceId') ?>

    <?php // echo $form->field($model, 'regionsId') ?>

    <?php // echo $form->field($model, 'sendpreparationId') ?>

    <?php // echo $form->field($model, 'socialstatusId') ?>

    <?php // echo $form->field($model, 'stateviolenceId') ?>

    <?php // echo $form->field($model, 'typerestrictionsId') ?>

    <?php // echo $form->field($model, 'typeviolenceId') ?>

    <?php // echo $form->field($model, 'workingplaceId') ?>

    <?php // echo $form->field($model, 'jabirlanuvchi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
