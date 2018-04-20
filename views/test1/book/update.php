<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\book */

$this->title = 'Изменение книги: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'book', 'url' => ['book']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->u_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
