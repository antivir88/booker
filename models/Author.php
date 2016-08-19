<?php

namespace app\models;

class Author extends \app\models\based\Author
{
    public function countBooks()
    {
        return \Yii::$app->db->createCommand('select count(*) from book where author=:author', [
            'author' => $this->id
        ])->queryScalar();
    }
}