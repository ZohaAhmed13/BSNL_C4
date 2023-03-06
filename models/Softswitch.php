<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "softswitch".
 *
 * @property int $ID
 * @property string|null $Name
 * @property string|null $MysqlDB
 * @property string|null $Redis
 */
class Softswitch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'softswitch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'MysqlDB', 'Redis'], 'string', 'max' => 50],
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
            'MysqlDB' => 'Mysql Db',
            'Redis' => 'Redis',
        ];
    }
}
