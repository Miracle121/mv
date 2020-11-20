<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "regions".
 *
 * @property int $id
 * @property string $name
 * @property int $createddate
 * @property int $creatorId
 *
 * @property Districts[] $districts
 * @property Mfy[] $mfies
 * @property Punishedperson[] $punishedpeople
 * @property Punishedperson[] $punishedpeople0
 */
class Regions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'createddate', 'creatorId'], 'required'],
            [['createddate', 'creatorId'], 'integer'],
            [['name'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'createddate' => 'Createddate',
            'creatorId' => 'Creator ID',
        ];
    }

    /**
     * Gets query for [[Districts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistricts()
    {
        return $this->hasMany(Districts::className(), ['regiId' => 'id']);
    }

    /**
     * Gets query for [[Mfies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMfies()
    {
        return $this->hasMany(Mfy::className(), ['regid' => 'id']);
    }

    /**
     * Gets query for [[Punishedpeople]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPunishedpeople()
    {
        return $this->hasMany(Punishedperson::className(), ['livingplacesregions' => 'id']);
    }

    /**
     * Gets query for [[Punishedpeople0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPunishedpeople0()
    {
        return $this->hasMany(Punishedperson::className(), ['registrationregion' => 'id']);
    }
}
