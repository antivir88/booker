<?php

namespace app\modules\api\controllers;

use yii\web\Controller;
use yii\web\HttpException;

/**
 * Default controller for the `api` module
 */
class DefaultController extends Controller
{
    /**
     * @throws HttpException
     */
    public function actionIndex()
    {
        throw new HttpException(404);
    }
}
