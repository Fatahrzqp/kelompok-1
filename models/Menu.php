<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id_menu
 * @property string|null $nama_menu
 * @property float|null $harga_menu
 * @property int|null $id_Admin
 * @property int $Admin_id_Admin
 *
 * @property Konsumen[] $konsumens
 * @property Admin $adminIdAdmin
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_menu', 'Admin_id_Admin'], 'required'],
            [['id_menu', 'id_Admin', 'Admin_id_Admin'], 'integer'],
            [['harga_menu'], 'number'],
            [['nama_menu'], 'string', 'max' => 255],
            [['id_menu'], 'unique'],
            [['Admin_id_Admin'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['Admin_id_Admin' => 'id_Admin']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_menu' => 'Id Menu',
            'nama_menu' => 'Nama Menu',
            'harga_menu' => 'Harga Menu',
            'id_Admin' => 'Id Admin',
            'Admin_id_Admin' => 'Admin Id Admin',
        ];
    }

    /**
     * Gets query for [[Konsumens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKonsumens()
    {
        return $this->hasMany(Konsumen::className(), ['menu_id_menu' => 'id_menu']);
    }

    /**
     * Gets query for [[AdminIdAdmin]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdminIdAdmin()
    {
        return $this->hasOne(Admin::className(), ['id_Admin' => 'Admin_id_Admin']);
    }
}
