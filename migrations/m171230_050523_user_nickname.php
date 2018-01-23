<?php

use yii\db\Migration;

class m171230_050523_user_nickname extends Migration
{
    public function safeUp()
    {
        $this->addColumn('user_profile', 'nickname', \yii\db\Schema::TYPE_STRING);
    }

    public function safeDown()
    {
        $this->dropColumn('user_profile', 'nickname');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171230_050523_user_nickname cannot be reverted.\n";

        return false;
    }
    */
}
