<?php

namespace app\controllers\test1;


use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\db\ActiveRecord;
use app\models\book;
use app\models\author;
use yii\data\Pagination;
use yii\filters\VerbFilter;




class TestController extends Controller
{
    public $layout = 'basic';
    public $enableCsrfValidation = false;

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex(){
        return $this->render('index');
    }

    public function actionPublicview(){
//        $alla=new author();
//        $allb=new book();
        $alla=author::find()->all();
        $allb=book::find()->all();
    return $this->render('publicview',[
        'author'=>$alla,
        'book'=>$allb,
        ]);
    }


    public function actionBooks(){
        $searchModel = new book();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('books', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAutors(){
        $searchModel = new author();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('authors', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}