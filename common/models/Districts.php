<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "districts".
 *
 * @property int $id
 * @property string $name
 * @property int $regiId
 * @property int $createddate
 * @property int $creatorId
 *
 * @property Regions $regi
 * @property Mfy[] $mfies
 * @property Punishedperson[] $punishedpeople
 * @property Punishedperson[] $punishedpeople0
 * @property Punishedperson[] $punishedpeople1
 */
class Districts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'districts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'regiId', 'createddate', 'creatorId'], 'required'],
            [['regiId', 'createddate', 'creatorId'], 'integer'],
            [['name'], 'string', 'max' => 250],
            [['regiId'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['regiId' => 'id']],
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
            'regiId' => 'Regi ID',
            'createddate' => 'Createddate',
            'creatorId' => 'Creator ID',
        ];
    }

    /**
     * Gets query for [[Regi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegi()
    {
        return $this->hasOne(Regions::className(), ['id' => 'regiId']);
    }

    /**
     * Gets query for [[Mfies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMfies()
    {
        return $this->hasMany(Mfy::className(), ['destid' => 'id']);
    }

    /**
     * Gets query for [[Punishedpeople]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPunishedpeople()
    {
        return $this->hasMany(Punishedperson::className(), ['districtsId' => 'id']);
    }

    /**
     * Gets query for [[Punishedpeople0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPunishedpeople0()
    {
        return $this->hasMany(Punishedperson::className(), ['livingplacesdistricts' => 'id']);
    }

    /**
     * Gets query for [[Punishedpeople1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPunishedpeople1()
    {
        return $this->hasMany(Punishedperson::className(), ['registrationdistricts' => 'id']);
    }
}
