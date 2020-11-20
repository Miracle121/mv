<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Districts */
?>
<div class="districts-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'regiId',
            'createddate',
            'creatorId',
        ],
    ]) ?>

</div>
