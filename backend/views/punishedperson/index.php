<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PunishedpersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Punishedpeople';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="punishedperson-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Punishedperson', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'photo',
            'name',
            'secondname',
            'middlename',
            //'ordernumber',
            //'dateissue',
            //'dateend',
            //'nationality',
            //'birthday',
            //'livingplacesregions',
            //'livingplacesdistricts',
            //'livingplacesmahalla:ntext',
            //'registrationregion',
            //'registrationdistricts',
            //'registrationmahalla:ntext',
            //'fulldescription:ntext',
            //'createddate',
            //'creatorid',
            //'administrId',
            //'agesId',
            //'citizenshipId',
            //'conditionpersonId',
            //'conditionvId',
            //'criminalproceedId',
            //'districtsId',
            //'ectionspersonId',
            //'educationId',
            //'extensionId',
            //'familypositionId',
            //'gendersId',
            //'groundsId',
            //'mfyId',
            //'occurredrepetitionId',
            //'personviolenceId',
            //'placeectionId',
            //'reasonviolenceId',
            //'regionsId',
            //'sendpreparationId',
            //'socialstatusId',
            //'stateviolenceId',
            //'typerestrictionsId',
            //'typeviolenceId',
            //'workingplaceId',
            //'jabirlanuvchi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
