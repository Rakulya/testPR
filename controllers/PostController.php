<?php
/**
 * Created by PhpStorm.
 * User: Ренат
 * Date: 08.04.2018
 * Time: 2:46
 */

namespace app\controllers;



class PostController extends AppController
{
    public $layout = 'basic';

    public function actionIndex(){
        return $this->render('Index');
    }

    public function actionTest(){

        $names = ['Damir', 'Petrov', 'Sidorov'];

       return $this->render('Test', compact('names'));

   }

   public function actionShow(){
       return $this->render('Show');
   }
}