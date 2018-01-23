<?php

use yii\db\Migration;

class m171123_150317_user_profile extends Migration
{
    public function safeUp()
    {
        $this->createTable('user_profile', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'email' => $this->string(32)
        ]);

        $this->createIndex(
            'idx-user_profile-user_id',
            'user_profile',
            'user_id'
        );

        $this->addForeignKey(
            'fk-user_profile-user_id',
            'user_profile',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-user_profile-user_id', 'user_profile');

        $this->dropIndex('idx-user_profile-user_id', 'user_profile');

        $this->dropTable('user_profile');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171123_150317_user_profile cannot be reverted.\n";

        return false;
    }
    */
}
