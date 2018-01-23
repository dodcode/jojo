<?php

use yii\db\Migration;

class m171122_145511_create_user extends Migration
{
    public function safeUp()
    {
        $this->createTable('user',[
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'auth_key' => $this->string(),
            'access_token' => $this->string()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('user');
//        echo "m171122_145511_create_user cannot be reverted.\n";

//        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171122_145511_create_user cannot be reverted.\n";

        return false;
    }
    */
}
