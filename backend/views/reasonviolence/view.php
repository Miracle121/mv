<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Reasonviolence */
?>
<div class="reasonviolence-view">
 
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
