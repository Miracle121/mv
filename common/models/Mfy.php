<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mfy".
 *
 * @property int $id
 * @property string $name
 * @property int|null $regid
 * @property int $destid
 * @property int $createddate
 * @property int $creatorId
 *
 * @property Regions $reg
 * @property Districts $dest
 */
class Mfy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mfy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'destid', 'createddate', 'creatorId'], 'required'],
            [['regid', 'destid', 'createddate', 'creatorId'], 'integer'],
            [['name'], 'string', 'max' => 250],
            [['regid'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['regid' => 'id']],
            [['destid'], 'exist', 'skipOnError' => true, 'targetClass' => Districts::className(), 'targetAttribute' => ['destid' => 'id']],
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
            'regid' => 'Regid',
            'destid' => 'Destid',
            'createddate' => 'Createddate',
            'creatorId' => 'Creator ID',
        ];
    }

    /**
     * Gets query for [[Reg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Regions::className(), ['id' => 'regid']);
    }

    /**
     * Gets query for [[Dest]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDest()
    {
        return $this->hasOne(Districts::className(), ['id' => 'destid']);
    }
}
