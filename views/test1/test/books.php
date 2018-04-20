<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\book */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<?php
$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">
<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Create Book', ['test1/book/create'], ['class' => 'btn btn-success']) ?>
</p>
    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'u_id',
        'name',
    [
            'attribute'=>'autor',
            'format'=>'raw',
            'value'=>function($data){
            return $data->getParentName();
            }
    ],
        'edition',
        'count_page',
        'image' ,

        ['class' => 'yii\grid\ActionColumn',
         'controller'=>'/test1/book'],
    ],
]); ?>
</div>