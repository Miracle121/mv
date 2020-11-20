<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Stateviolence */
?>
<div class="stateviolence-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'createddate',
            'creatorId',
        ],
    ]) ?>

</div>
