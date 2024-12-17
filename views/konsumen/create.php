<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Konsumen */

$this->title = 'Create Konsumen';
$this->params['breadcrumbs'][] = ['label' => 'Konsumens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konsumen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
