<?php

use yii\db\Migration;

/**
 * Handles the creation of table `map`.
 */
class m190119_142026_create_map_table extends Migration
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
        $this->createTable('map', [
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
        $this->dropTable('map');
    }
}
