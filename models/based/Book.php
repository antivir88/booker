<?php

namespace app\models\based;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property integer $author
 * @property string $name
 *
 * @property Author $author0
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'name'], 'required'],
            [['author'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['author'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'author' => Yii::t('app', 'Author'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(Author::className(), ['id' => 'author']);
    }

    /**
     * @inheritdoc
     * @return \app\models\BookQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\BookQuery(get_called_class());
    }
}
