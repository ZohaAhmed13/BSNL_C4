<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "numberchangegroup".
 *
 * @property int $ID
 * @property string|null $Name
 */
class Numberchangegroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'numberchangegroup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'string', 'max' => 50],
            [['Name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
        ];
    }
}
