<?php

/**
 * Created by PhpStorm.
 * User: Ренат
 * Date: 08.04.2018
 * Time: 2:28
 */

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{

    public function actionIndex()
    {
        return $this->render('index');

    }

}