<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mediagateway".
 *
 * @property int $ID
 * @property string|null $Name
 * @property string|null $SoftSwitch
 */
class Mediagateway extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mediagateway';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'SoftSwitch'], 'string', 'max' => 50],
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
            'SoftSwitch' => 'Soft Switch',
        ];
    }
}
