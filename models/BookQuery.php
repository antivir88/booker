<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[\app\models\based\Book]].
 *
 * @see \app\models\based\Book
 */
class BookQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\based\Book[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\based\Book|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
