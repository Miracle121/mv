<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Clientes */
?>
<div class="clientes-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'telegram_id',
            'first_name',
            'username',
            'name',
            'phone_number',
            'ages',
            'direction',
            'address',
            'nationality',
            'living_pls:ntext',
            'edu_level',
            'info_edu:ntext',
            'family_position',
            'family_info:ntext',
            'xizmatsafari',
            'xarbiyxizmat',
            'sudlangan',
            'haydovchilik',
            'moshina',
            'language_ru',
            'language_eng',
            'language_china',
            'other_lang',
            'exel',
            'word',
            '1c',
            'boshqadastur',
            'korxonamalumot',
            'oxirgiishjoyi_info:ntext',
            'oxirgiishjoyi_oylik',
            'qanchaoylik',
            'qancha_ishlaysiz',
            'ishdankeyin',
            'kolectiv',
            'otaona',
            'sogliq',
            'qoshimchainfo',
           
           
        ],
    ]) ?>

</div>