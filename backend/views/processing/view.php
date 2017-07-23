<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Processing */

$this->title = $model->process_id;
$this->params['breadcrumbs'][] = ['label' => 'Processings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="processing-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->process_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->process_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'process_id',
            'member_name',
            'book_name',
            'doi',
            'dor',
            'book_id',
            'member_id',
        ],
    ]) ?>

</div>
