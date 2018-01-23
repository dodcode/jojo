<?php

use yii\db\Migration;

class m171230_045834_create_article extends Migration
{
    public function safeUp()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'author_id' => $this->integer(11)->notNull(),
            'created_at' => $this->integer(11)->defaultValue(0),
            'updated_at' => $this->integer(11)->defaultValue(0)
        ]);

        $this->createIndex(
            'idx-article-author_id',
            'article',
            'author_id'
        );

        $this->addForeignKey(
            'fk-article-author_id',
            'article',
            'author_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-article-author_id', 'article');

        $this->dropIndex('idx-article-author_id', 'article');

        $this->dropTable('article');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171230_045834_create_article cannot be reverted.\n";

        return false;
    }
    */
}
