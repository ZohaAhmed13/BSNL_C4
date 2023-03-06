<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prefixanalysis".
 *
 * @property int $ID
 * @property string|null $Name
 * @property string|null $SoftSwitch
 * @property int|null $Anumber
 * @property int|null $Bnumber
 * @property string|null $PrefixGroup
 * @property int|null $lcr_rule_id
 * @property int|null $A_GroupID
 * @property int|null $B_GroupID
 */
class Prefixanalysis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prefixanalysis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Anumber', 'Bnumber', 'lcr_rule_id', 'A_GroupID', 'B_GroupID'], 'integer'],
            [['Name', 'SoftSwitch', 'PrefixGroup'], 'string', 'max' => 50],
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
            'Anumber' => 'Anumber',
            'Bnumber' => 'Bnumber',
            'PrefixGroup' => 'Prefix Group',
            'lcr_rule_id' => 'Lcr Rule ID',
            'A_GroupID' => 'A Group ID',
            'B_GroupID' => 'B Group ID',
        ];
    }
}
