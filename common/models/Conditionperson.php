<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "conditionperson".
 *
 * @property int $id
 * @property string $name
 * @property int $createddate
 * @property int $creatorId
 *
 * @property Punishedperson[] $punishedpeople
 */
class Conditionperson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'conditionperson';
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
     * Gets query for [[Punishedpeople]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPunishedpeople()
    {
        return $this->hasMany(Punishedperson::className(), ['conditionpersonId' => 'id']);
    }
}
