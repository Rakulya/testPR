<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\author */
/* @var $data1 app\models\author */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<?php
$this->title = 'Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="author-index">
<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Create Author', ['test1/author/create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'u_id',
        'surname',
        'name',
        'count_p',
        ['attribute'=>'Count',
         'format'=>'raw',
         'value'=>function($searchModel){
             return $searchModel->getParentName();
         }],

        ['class' => 'yii\grid\ActionColumn',
            'controller'=>'/test1/author',
        ]
    ],
]); ?>
</div>
