<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "numberchange".
 *
 * @property int $ID
 * @property string|null $Name
 * @property int|null $SourceNumber
 * @property int|null $ChangedNumber
 * @property string|null $NCgroup
 * @property string|null $Priority
 */
class Numberchange extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'numberchange';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SourceNumber', 'ChangedNumber'], 'integer'],
            [['Name', 'Priority'], 'string', 'max' => 50],
            [['NCgroup'], 'string', 'max' => 255],
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
            'SourceNumber' => 'Source Number',
            'ChangedNumber' => 'Changed Number',
            'NCgroup' => 'N Cgroup',
            'Priority' => 'Priority',
        ];
    }
}
