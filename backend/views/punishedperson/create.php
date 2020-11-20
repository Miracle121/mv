<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Punishedperson */

$this->title = 'Create Punishedperson';
$this->params['breadcrumbs'][] = ['label' => 'Punishedpeople', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="punishedperson-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
