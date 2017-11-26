<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord {
    public static function tableName() {
        return "{{%user}}";
    }

    public static function findByUsername($username) {
        return self::find()
            ->select('*')
            ->where('username=:username', [':username' => $username])
            ->one();
    }
}