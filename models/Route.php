<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "route".
 *
 * @property int $ID
 * @property string|null $Name
 * @property string|null $SoftSwitch
 * @property string|null $RouteSource
 */
class Route extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'route';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'SoftSwitch', 'RouteSource'], 'string', 'max' => 50],
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
            'RouteSource' => 'Route Source',
        ];
    }
}
