<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id
 * @property string|null $telegram_id
 * @property string|null $first_name
 * @property string|null $username
 * @property string|null $name
 * @property string|null $phone_number
 * @property string|null $ages
 * @property string|null $direction
 * @property string|null $address
 * @property string|null $nationality
 * @property string|null $living_pls
 * @property string|null $edu_level
 * @property string|null $info_edu
 * @property string|null $family_position
 * @property string|null $family_info
 * @property string|null $xizmatsafari
 * @property string|null $xarbiyxizmat
 * @property string|null $sudlangan
 * @property string|null $haydovchilik
 * @property string|null $moshina
 * @property string|null $language_ru
 * @property string|null $language_eng
 * @property string|null $language_china
 * @property string|null $other_lang
 * @property string|null $exel
 * @property string|null $word
 * @property string|null $1c
 * @property string|null $boshqadastur
 * @property string|null $korxonamalumot
 * @property string|null $oxirgiishjoyi_info
 * @property string|null $oxirgiishjoyi_oylik
 * @property string|null $qanchaoylik
 * @property string|null $qancha_ishlaysiz
 * @property string|null $ishdankeyin
 * @property string|null $kolectiv
 * @property string|null $otaona
 * @property string|null $sogliq
 * @property string|null $qoshimchainfo
 * @property string|null $rasim
 * @property string|null $qoshimcha
 */
class Clientes extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'clientes';
    }

    public function rules()
    {
        return [
            [['living_pls', 'info_edu', 'family_info', 'oxirgiishjoyi_info'], 'string'],
            [['telegram_id', 'first_name', 'username', 'name', 'phone_number',
                'ages', 'direction', 'address', 'nationality', 'edu_level',
                'family_position', 'xizmatsafari', 'xarbiyxizmat', 'sudlangan',
                'haydovchilik', 'moshina', 'language_ru',
                'language_eng', 'language_china', 'other_lang',
                'exel', 'word', '1c', 'boshqadastur',
                'korxonamalumot', 'oxirgiishjoyi_oylik',
                'qanchaoylik', 'qancha_ishlaysiz', 'ishdankeyin',
                'kolectiv', 'otaona', 'sogliq',
                'qoshimchainfo', 'rasim', 'qoshimcha'], 'string', 'max' => 250],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'telegram_id' => 'Телеграм ИД',
            'first_name' => 'Телеграмдаги номи',
            'username' => 'Фойдаланувчи исми',
            'name' => 'ИФО',
            'phone_number' => 'Телефор ракам',
            'ages' => 'Тугилган йил',
            'direction' => 'Танланга йўналиши',
            'address' => 'Тугилган жой',
            'nationality' => 'Миллатингиз',
            'living_pls' => 'Яшаш жойи',
            'edu_level' => 'Маьлумотингиз',
            'info_edu' => 'Качон кайси укув юртини тамомлагансиз',
            'family_position' => 'Оилавий ахволи',
            'family_info' => 'Оила аьзолари хакида маьлумот',
            'xizmatsafari' => 'Корхона тамонидан хизмат сафарига чикишга розимисиз',
            'xarbiyxizmat' => 'Харбий хизматга борганмисиз',
            'sudlangan' => 'Судланганмисиз',
            'haydovchilik' => 'Хайдовчилик гувохномангиз борми',
            'moshina' => 'Узингизнинг шахсий автомобилингиз борми',
            'language_ru' => 'Рус тилини билишингиз даражаси',
            'language_eng' => 'Инглиз тилини билишингиз даражаси',
            'language_china' => 'Хитой тилини билишингиз даражаси',
            'other_lang' => 'Бошка тил',
            'exel' => 'Excel дастурини билишингиз даражаси',
            'word' => 'Word дастурини билишингиз даражаси',
            '1c' => '1С дастурини билишингиз даражаси',
            'boshqadastur' => 'Бошка кандай дастурни биласиз',
            'korxonamalumot' => 'Корхонамиз хакида кайердан маьлумот олдингиз',
            'oxirgiishjoyi_info' => 'Охирги иш жойингиздан суриштиришга розимисиз',
            'oxirgiishjoyi_oylik' => 'Охирги иш жойингизда ойлик маошингиз канча',
            'qanchaoylik' => 'Бизда канча микдорда ойликга ишламокчисиз',
            'qancha_ishlaysiz' => 'Бизнинг корхонада канча муддат ишламокчисиз',
            'ishdankeyin' => 'Корхонада ишдан кейин хам ишлаш керак булиб колса ишлайсизми',
            'kolectiv' => 'Коллективда ишлай оласизми',
            'otaona' => 'Ота онангизни корхонага чакиришимизга розимисиз',
            'sogliq' => 'Соглигингизда муаммо юкми',
            'qoshimchainfo' => 'Узингиз хакингизда кушимча кушинг',
            'rasim' => 'Rasim',
            'qoshimcha' => 'Qoshimcha',
        ];
    }
}
