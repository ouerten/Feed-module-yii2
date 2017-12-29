<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_sample extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ag_linkler}}', [
            'id' => $this->int(5),
            'facebook_linkler' => $this->varchar(500)->notNull(),
			'twitter_linkler' => $this->varchar(500)->notNull(),
        ], $tableOptions);

        $this->addForeignKey(
          'twitter_linkler',
          'facebook_linkler',
         
          'id'
        );

    }

    public function down()
    {
      
         $this->dropTable('{{%ag_linkler}}');

    }
}
