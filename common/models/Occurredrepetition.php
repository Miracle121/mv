<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "occurredrepetition".
 *
 * @property int $id
 * @property string $name
 * @property int $createddate
 * @property int $creatorId
 */
class Occurredrepetition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'occurredrepetition';
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
}
