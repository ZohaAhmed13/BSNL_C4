<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trunkgroup".
 *
 * @property int $ID
 * @property string|null $Name
 * @property string|null $SoftSwitch
 * @property string|null $Type
 * @property int|null $Route
 * @property string|null $MediaGateway
 * @property int|null $DestinationIP
 * @property string|null $DestinationHostName
 * @property string|null $DestinationPort
 * @property string|null $CallSource
 * @property int|null $lcr_gw_id
 * @property string|null $Pre_Strip_cnt
 * @property string|null $Pre_add_val
 * @property string|null $Enable
 * @property int|null $A_GroupID
 * @property int|null $B_GroupID
 * @property string|null $RouteSource
 */
class Trunkgroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trunkgroup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Route', 'DestinationIP', 'lcr_gw_id', 'A_GroupID', 'B_GroupID'], 'integer'],
            [['Name', 'SoftSwitch', 'MediaGateway', 'DestinationPort', 'CallSource', 'RouteSource'], 'string', 'max' => 50],
            [['Type', 'DestinationHostName', 'Pre_Strip_cnt', 'Pre_add_val', 'Enable'], 'string', 'max' => 255],
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
            'Type' => 'Type',
            'Route' => 'Route',
            'MediaGateway' => 'Media Gateway',
            'DestinationIP' => 'Destination Ip',
            'DestinationHostName' => 'Destination Host Name',
            'DestinationPort' => 'Destination Port',
            'CallSource' => 'Call Source',
            'lcr_gw_id' => 'Lcr Gw ID',
            'Pre_Strip_cnt' => 'Pre Strip Cnt',
            'Pre_add_val' => 'Pre Add Val',
            'Enable' => 'Enable',
            'A_GroupID' => 'A Group ID',
            'B_GroupID' => 'B Group ID',
            'RouteSource' => 'Route Source',
        ];
    }
}
