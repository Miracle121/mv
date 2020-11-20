<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Conditionpersonviolence */
?>
<div class="conditionpersonviolence-view">
 
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
