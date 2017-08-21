<?php
/**
 * Created by PhpStorm.
 * User: Genjo
 * Date: 15.08.2017
 * Time: 19:49
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product
extends ActiveRecord
{

    public static function tableName()
    {
        return 'product';
    }
    public function getCategory()
    {
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }
}