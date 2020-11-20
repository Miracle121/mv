<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Placeection */
?>
<div class="placeection-view">
 
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
