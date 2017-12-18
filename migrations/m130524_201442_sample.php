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

        $this->createTable('{{%samples}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200)->notNull(),
			'description' => $this->text()->notNull(),
            'picture' => $this->text(),
        ], $tableOptions);

        $this->createTable('{{%sample_data}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'sample_id' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->createIndex(
            'idx_sample_data_sample_id-1',
            'sample_data',
            'sample_id'
        );

        $this->addForeignKey(
          'fk_sample_data_sample_id-1',
          'sample_data',
          'sample_id',
          'samples',
          'id'
        );

    }

    public function down()
    {
        $this->dropForeignKey('fk_sample_data_sample_id-1','sample_data');
        $this->dropIndex('idx_sample_data_sample_id-1','sample_data');
        $this->dropTable('{{%sample_data}}');
        $this->dropTable('{{%samples}}');
    }
}
