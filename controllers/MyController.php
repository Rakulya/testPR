<?php
/**
 * Created by PhpStorm.
 * User: Ренат
 * Date: 08.04.2018
 * Time: 2:02
 */

namespace app\controllers;


class MyController extends AppController
{

    public function actionIndex($id = null){
        $hi = 'Hello, world!!';
        $names = ['Damir', 'Petrov', 'Sidorov'];

        if(!$id) $id = 'test';

        return $this->render('index', compact('hi', 'names', 'id'));
}

    public function actionBlogPost()
    {
            return 'BlogPost';
    }

}