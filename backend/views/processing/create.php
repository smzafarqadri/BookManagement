<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Processing */

$this->title = 'Create Processing';
$this->params['breadcrumbs'][] = ['label' => 'Processings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="processing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
