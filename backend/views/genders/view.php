<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Genders */
?>
<div class="genders-view">
 
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
