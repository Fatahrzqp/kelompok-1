<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "konsumen".
 *
 * @property int $id_Konsumen
 * @property string|null $nama_konsumen
 * @property string|null $alamat_konsumen
 * @property string|null $telephone_konsumen
 * @property int $menu_id_menu
 *
 * @property Menu $menuIdMenu
 */
class Konsumen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'konsumen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Konsumen', 'menu_id_menu'], 'required'],
            [['id_Konsumen', 'menu_id_menu'], 'integer'],
            [['nama_konsumen', 'alamat_konsumen', 'telephone_konsumen'], 'string', 'max' => 45],
            [['id_Konsumen'], 'unique'],
            [['menu_id_menu'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['menu_id_menu' => 'id_menu']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Konsumen' => 'Id Konsumen',
            'nama_konsumen' => 'Nama Konsumen',
            'alamat_konsumen' => 'Alamat Konsumen',
            'telephone_konsumen' => 'Telephone Konsumen',
            'menu_id_menu' => 'Menu Id Menu',
        ];
    }

    /**
     * Gets query for [[MenuIdMenu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenuIdMenu()
    {
        return $this->hasOne(Menu::className(), ['id_menu' => 'menu_id_menu']);
    }
}
