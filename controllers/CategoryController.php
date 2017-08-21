<?php
/**
 * Created by PhpStorm.
 * User: Genjo
 * Date: 19.08.2017
 * Time: 12:25
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;

class CategoryController
extends AppController
{


    public function actionIndex(){

        $hits = Product::find()->where(['hit'=>'1'])->limit(6)->all();
        $this->setMeta('E_Shopper');

      return $this->render('index',compact('hits'));
    }

    public function actionView($id)

    {
        $id = Yii::$app->request->get('id');
//        $products = Product::find()->where(['category_id'=>$id])->all();
        $querry = Product::find()->where(['category_id'=>$id]);
        $pages = new Pagination(['totalCount'=>$querry->count(),'pageSize'=>3,'pageSizeParam' => false, 'forcePageParam' => false]);
        $products =$querry->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne($id);
        $this->setMeta('E_SHOPPER | ' . $category->name,$category->keywords,$category->description);
        return $this->render('view',compact('products','pages','category'));

    }



}