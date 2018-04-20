<?php
/**
 * Created by PhpStorm.
 * User: Ренат
 * Date: 08.04.2018
 * Time: 2:44
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{

    public function debug($arr){
        echo '<pre>'.print_r($arr, true).'</pre>';
    }
}

