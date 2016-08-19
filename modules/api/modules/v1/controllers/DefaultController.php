<?php

namespace app\modules\api\modules\v1\controllers;

use yii\web\Controller;
use yii\web\HttpException;

/**
 * Default controller for the `v1` module
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
