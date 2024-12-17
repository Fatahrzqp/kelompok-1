<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id_Admin
 * @property string|null $Nama
 * @property string|null $Telephone
 * @property string|null $Email
 * @property int $Owner_id_Owner
 *
 * @property Owner $ownerIdOwner
 * @property Menu[] $menus
 */
class admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Admin', 'Owner_id_Owner'], 'required'],
            [['id_Admin', 'Owner_id_Owner'], 'integer'],
            [['Nama', 'Telephone', 'Email'], 'string', 'max' => 45],
            [['id_Admin'], 'unique'],
            [['Owner_id_Owner'], 'exist', 'skipOnError' => true, 'targetClass' => Owner::className(), 'targetAttribute' => ['Owner_id_Owner' => 'id_Owner']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Admin' => 'Id Admin',
            'Nama' => 'Nama',
            'Telephone' => 'Telephone',
            'Email' => 'Email',
            'Owner_id_Owner' => 'Owner Id Owner',
        ];
    }

    /**
     * Gets query for [[OwnerIdOwner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwnerIdOwner()
    {
        return $this->hasOne(Owner::className(), ['id_Owner' => 'Owner_id_Owner']);
    }

    /**
     * Gets query for [[Menus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::className(), ['Admin_id_Admin' => 'id_Admin']);
    }
}
