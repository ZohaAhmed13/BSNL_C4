<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prefixroute".
 *
 * @property int $ID
 * @property string|null $Name
 * @property string|null $SoftSwitch
 * @property string|null $PrefixGroup
 * @property int|null $Route1
 * @property int|null $Route2
 * @property int|null $Route3
 * @property int|null $Route4
 * @property int|null $Route5
 * @property int|null $Route6
 * @property int|null $Route7
 * @property int|null $Route8
 * @property string|null $CallSource
 */
class Prefixroute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prefixroute';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Route1', 'Route2', 'Route3', 'Route4', 'Route5', 'Route6', 'Route7', 'Route8'], 'integer'],
            [['Name', 'SoftSwitch', 'PrefixGroup', 'CallSource'], 'string', 'max' => 50],
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
            'PrefixGroup' => 'Prefix Group',
            'Route1' => 'Route1',
            'Route2' => 'Route2',
            'Route3' => 'Route3',
            'Route4' => 'Route4',
            'Route5' => 'Route5',
            'Route6' => 'Route6',
            'Route7' => 'Route7',
            'Route8' => 'Route8',
            'CallSource' => 'Call Source',
        ];
    }
}
