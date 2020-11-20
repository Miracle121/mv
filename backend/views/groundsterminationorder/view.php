<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Groundsterminationorder */
?>
<div class="groundsterminationorder-view">
 
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
