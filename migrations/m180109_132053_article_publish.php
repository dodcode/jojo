<?php

use yii\db\Migration;

class m180109_132053_article_publish extends Migration
{
    public function safeUp()
    {
        $this->addColumn('article', 'publish', \yii\db\Schema::TYPE_SMALLINT);
    }

    public function safeDown()
    {
        $this->dropColumn('article', 'publish');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_132053_article_publish cannot be reverted.\n";

        return false;
    }
    */
}
