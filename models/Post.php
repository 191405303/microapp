<?php

namespace micro\models;

use yii\db\ActiveRecord;
use Yii;

class Post extends ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->db;
    }


    public static function tableName()
    {
        return '{{post}}';
    }
}