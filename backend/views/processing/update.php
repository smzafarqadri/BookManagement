<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Processing */

$this->title = 'Update Processing: ' . $model->process_id;
$this->params['breadcrumbs'][] = ['label' => 'Processings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->process_id, 'url' => ['view', 'id' => $model->process_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="processing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
