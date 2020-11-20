<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mfy */
?>
<div class="mfy-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'regid',
            'destid',
            'createddate',
            'creatorId',
        ],
    ]) ?>

</div>
