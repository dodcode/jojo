<?php

use yii\db\Migration;

/**
 * Class m180125_071123_create_admin
 */
class m180125_071123_create_admin extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->db->createCommand('insert into `dodcode`.`user` ( `username`, `password`, `auth_key`, `access_token`) values ( \'admin\', \'$2y$13$Cl2mzf7C.Sbr/jxy1a9EROhnozzEFPsP/aEL/N0QPpI8LcC6IM3MK\', \'JTJfJQGOjTGmPXGJKuSgvMJj88S5J-a1\', null)')->execute();
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->db->createCommand('delete from `dodcode` where `username` = \'admin\'')->execute();
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180125_071123_create_admin cannot be reverted.\n";

        return false;
    }
    */
}
