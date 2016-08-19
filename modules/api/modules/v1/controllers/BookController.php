<?php

namespace app\modules\api\modules\v1\controllers;

use app\models\Book;
use yii\rest\ActiveController;

class BookController extends ActiveController
{
    public $modelClass = 'app\models\Book';


    public function actions()
    {
        $actions = parent::actions();

        unset($actions['index']); // remove view

        return $actions;
    }

    public function actionIndex() // declare new view
    {
        $result = [];

        $books = Book::find()->all();
        foreach ($books AS $book) {
            $result[] = [
                'author' => $book->author0->name,
                'name' => $book->name,
                'id' => $book->id
            ];
        }

        return $result;
    }
}