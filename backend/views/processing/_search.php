<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProcessingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="processing-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'process_id') ?>

    <?= $form->field($model, 'member_name') ?>

    <?= $form->field($model, 'book_name') ?>

    <?= $form->field($model, 'doi') ?>

    <?= $form->field($model, 'dor') ?>

    <?php // echo $form->field($model, 'book_id') ?>

    <?php // echo $form->field($model, 'member_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
