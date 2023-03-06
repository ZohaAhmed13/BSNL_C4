<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "innumberprocessing".
 *
 * @property int $ID
 * @property string|null $Name
 * @property string|null $SoftSwitch
 * @property string|null $CallSource
 * @property string|null $TrunkGroup
 * @property int|null $SourceID
 * @property int|null $AnumberGroup
 * @property int|null $BnumberGroup
 */
class Innumberprocessing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'innumberprocessing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SourceID', 'AnumberGroup', 'BnumberGroup'], 'integer'],
            [['Name', 'SoftSwitch', 'CallSource', 'TrunkGroup'], 'string', 'max' => 50],
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
            'CallSource' => 'Call Source',
            'TrunkGroup' => 'Trunk Group',
            'SourceID' => 'Source ID',
            'AnumberGroup' => 'Anumber Group',
            'BnumberGroup' => 'Bnumber Group',
        ];
    }
}
