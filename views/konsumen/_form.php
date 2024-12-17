<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Konsumen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="konsumen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Konsumen')->textInput() ?>

    <?= $form->field($model, 'nama_konsumen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_konsumen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone_konsumen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_id_menu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
