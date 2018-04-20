<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\book */

$this->title = 'Create Book';
$this->params['breadcrumbs'][] = ['label' => 'Book', 'url' => ['book']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="author-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
