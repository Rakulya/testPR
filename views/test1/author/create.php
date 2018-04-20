<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\author */

$this->title = 'Create Author';
$this->params['breadcrumbs'][] = ['label' => 'Author', 'url' => ['author']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="author-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
