<?php

use yii\db\Migration;

/**
 * Handles the creation of table `object`.
 */
class m190119_145224_create_object_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('shape', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'location'=> $this->string()->notNull(),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('object');
    }
}
