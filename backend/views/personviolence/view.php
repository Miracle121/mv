<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Personviolence */
?>
<div class="personviolence-view">
 
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
