<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'telegram_id',
        'format' => 'html',
        'label' => 'Телеграм ҳақида умумий маълумот',
        'value' => function($model){
            return '<b>'.'Телеграм ИД'.'</b>'.': '.$model->telegram_id.'<br>'.
                '<b>'.'Телеграмдаги номи'.'</b>'.': '.$model->first_name.'<br>'.
                '<b>'.'Фойдаланувчи исми'.'</b>'.': '.$model->username.'<br>';
        },
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name',
        'format' => 'html',
        'label' => 'Номзод ҳақида умумий маълумот',
        'value' => function($model){
            return '<b>'.'ИФО'.'</b>'.': '.$model->name.'<br>'.
                '<b>'.'Телефор ракам'.'</b>'.': '.$model->phone_number.'<br>'.
                '<b>'.'Тугилган йил'.'</b>'.': '.$model->ages.'<br>'.
                '<b>'.'Тугилган жой'.'</b>'.': '.$model->living_pls.'<br>'.
                '<b>'.'Миллатингиз'.'</b>'.': '.$model->nationality.'<br>'.
                '<b>'.'Яшаш жойи'.'</b>'.': '.$model->address.'<br>'

                ;
        },
    ],
    [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'direction',
     ],

     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'edu_level',
         'format' => 'html',
         'label' => 'Талим йўналишидаги маълумотлар',
         'value' => function($model){
             return '<b>'.'Талим тури'.'</b>'.': '.$model->edu_level.'<br>'.
                 '<b>'.'Таълим муассасаси'.'</b>'.': '.$model->info_edu.'<br>';
         },
     ],

     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'family_position',
         'format' => 'html',
         'label' => 'Оиласи ҳақида маълумот',
         'value' => function($model){
             return '<b>'.'Оилавий ахволи'.'</b>'.': '.$model->family_position.'<br>'.
                 '<b>'.'Оила аьзолари хакида маьлумот'.'</b>'.': '.$model->family_info.'<br>';
         },
     ],

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'family_position',
        'format' => 'html',
        'label' => 'Йўналиш бўйича берилган саволлар',
        'value' => function($model){
            return
                '<b>'.'Харбий хизматга борганмисиз'.'</b>'.': '.$model->xarbiyxizmat.'<br>'.
                '<b>'.'Судланганмисиз'.'</b>'.': '.$model->sudlangan.'<br>'.
                '<b>'.'Хайдовчилик гувохномангиз борми'.'</b>'.': '.$model->haydovchilik.'<br>'.
                '<b>'.'Узингизнинг шахсий автомобилингиз борми'.'</b>'.': '.$model->moshina.'<br>'.
                '<b>'.'Корхонамиз хакида кайердан маьлумот олдингиз'.'</b>'.': '.$model->korxonamalumot.'<br>'.
                '<b>'.'Охирги иш жойингиздан суриштиришга розимисиз'.'</b>'.': '.$model->oxirgiishjoyi_info.'<br>'.
                '<b>'.'Охирги иш жойингизда ойлик маошингиз канча'.'</b>'.': '.$model->qanchaoylik.'<br>'.
                '<b>'.'Бизда канча микдорда ойликга ишламокчисиз'.'</b>'.': '.$model->qanchaoylik.'<br>'.
                '<b>'.'Бизнинг корхонада канча муддат ишламокчисиз'.'</b>'.': '.$model->qancha_ishlaysiz.'<br>'.
                '<b>'.'Корхонада ишдан кейин хам ишлаш керак булиб колса ишлайсизми'.'</b>'.': '.$model->ishdankeyin.'<br>'.
                '<b>'.'Коллективда ишлай оласизми'.'</b>'.': '.$model->kolectiv.'<br>'.
                '<b>'.'Ота онангизни корхонага чакиришимизга розимисиз'.'</b>'.': '.$model->otaona.'<br>'
                ;


                ;
        },
    ],





     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'language_ru',
         'format' => 'html',
         'label' => 'Қайси тилни билиши бўйича маълумот',
         'value' => function($model){
             return
                 '<b>'.'Рус тилини билишингиз даражаси'.'</b>'.': '.$model->language_ru.'<br>'.
                 '<b>'.'Инглиз тилини билишингиз даражаси'.'</b>'.': '.$model->language_eng.'<br>'.
                 '<b>'.'Хитой тилини билишингиз даражаси'.'</b>'.': '.$model->language_china.'<br>'.
                 '<b>'.'Бошка тил'.'</b>'.': '.$model->other_lang.'<br>';
         }
     ],

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'language_ru',
        'format' => 'html',
        'label' => 'Қайси тилни билиши бўйича маълумот',
        'value' => function($model){
            return
                '<b>'.'Excel дастурини билишингиз даражаси'.'</b>'.': '.$model->exel.'<br>'.
                '<b>'.'Word дастурини билишингиз даражаси'.'</b>'.': '.$model->word.'<br>'.
                '<b>'.'Бошка кандай дастурни биласиз'.'</b>'.': '.$model->boshqadastur.'<br>';
        }
    ],

    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'exel',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'word',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'1c',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'boshqadastur',
    // ],


    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   