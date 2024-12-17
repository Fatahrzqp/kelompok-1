<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KonsumenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="konsumen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_Konsumen') ?>

    <?= $form->field($model, 'nama_konsumen') ?>

    <?= $form->field($model, 'alamat_konsumen') ?>

    <?= $form->field($model, 'telephone_konsumen') ?>

    <?= $form->field($model, 'menu_id_menu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
