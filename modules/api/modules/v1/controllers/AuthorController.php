<?php

namespace app\modules\api\modules\v1\controllers;

use yii\rest\ActiveController;

class AuthorController extends ActiveController
{
    public $modelClass = 'app\models\Author';
}