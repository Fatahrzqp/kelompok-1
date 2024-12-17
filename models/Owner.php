<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "owner".
 *
 * @property int $id_owner
 * @property string $username
 * @property string $password
 * @property string $nama_owner
 *
 * @property Admin[] $admins
 */
class Owner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'owner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama_owner'], 'required'],
            [['username'], 'string', 'max' => 50],
            [['password', 'nama_owner'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_owner' => 'Id Owner',
            'username' => 'Username',
            'password' => 'Password',
            'nama_owner' => 'Nama Owner',
        ];
    }

    /**
     * Gets query for [[Admins]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdmins()
    {
        return $this->hasMany(Admin::className(), ['Owner_id_Owner' => 'id_Owner']);
    }
}
