<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Administrativeliability */
?>
<div class="administrativeliability-view">
 
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
