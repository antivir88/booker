<?php

use yii\db\Migration;

class m160818_122113_create_authors extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%author}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->unique()
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%author}}');
    }
}
