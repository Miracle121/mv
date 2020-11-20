<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Conditionperson */
?>
<div class="conditionperson-view">
 
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
