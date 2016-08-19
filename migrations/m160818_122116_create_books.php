<?php

use yii\db\Migration;

class m160818_122116_create_books extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'author' => $this->integer()->notNull(),
            'name' => $this->string()->notNull()->unique()
        ], $tableOptions);

        $this->addForeignKey('idx_books_authors', '{{%book}}', 'author', '{{%author}}', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('idx_books_authors', '{{%book}}');
        $this->dropTable('{{%book}}');
    }
}
