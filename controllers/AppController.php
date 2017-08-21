<?php
/**
 * Created by PhpStorm.
 * User: Genjo
 * Date: 19.08.2017
 * Time: 12:26
 */

namespace app\controllers;


use yii\web\Controller;

class AppController
extends Controller
{

    public function setMeta($title=null,$keywords=null,$description=null)
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name'=>'keywords','content'=>"$keywords"]);
        $this->view->registerMetaTag(['name'=>'desription','content'=>"$description"]);
    }

}