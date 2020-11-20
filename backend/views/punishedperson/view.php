<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Punishedperson */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Punishedpeople', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="punishedperson-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'photo',
            'name',
            'secondname',
            'middlename',
            'ordernumber',
            'dateissue',
            'dateend',
            'nationality',
            'birthday',
            'livingplacesregions',
            'livingplacesdistricts',
            'livingplacesmahalla:ntext',
            'registrationregion',
            'registrationdistricts',
            'registrationmahalla:ntext',
            'fulldescription:ntext',
            'createddate',
            'creatorid',
            'administrId',
            'agesId',
            'citizenshipId',
            'conditionpersonId',
            'conditionvId',
            'criminalproceedId',
            'districtsId',
            'ectionspersonId',
            'educationId',
            'extensionId',
            'familypositionId',
            'gendersId',
            'groundsId',
            'mfyId',
            'occurredrepetitionId',
            'personviolenceId',
            'placeectionId',
            'reasonviolenceId',
            'regionsId',
            'sendpreparationId',
            'socialstatusId',
            'stateviolenceId',
            'typerestrictionsId',
            'typeviolenceId',
            'workingplaceId',
            'jabirlanuvchi',
        ],
    ]) ?>

</div>
