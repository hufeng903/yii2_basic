<?php
/**
 * Created by PhpStorm.
 * User: hu
 * Date: 2016/1/12
 * Time: 10:12
 */

namespace app\controllers;


use app\models\User;
use app\models\Test;
use yii\web\Controller;

class TestController extends Controller {

    public function actionTest(){
        $user = new User();
        $ret = \Yii::$app->request->get();
        if($user->load($ret)){
            if($user->save()){
//                echo 3;die;
                $test = new Test();
//              var_dump($test->load($ret));die;
                if($test->load($ret)){
                    $test->save();
                }else{
                    echo 4;
                }
            }

        }else{
            echo 2;
        }
    }

}