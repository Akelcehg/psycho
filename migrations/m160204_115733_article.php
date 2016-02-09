<?php

use yii\db\Schema;
use yii\db\Migration;

class m160204_115733_article extends Migration
{
    public function up() {
      $this->createTable('article', [
          'id' => Schema::TYPE_PK,
          'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
          'created_at' => 'timestamp'
      ]);
    }

    public function down() {
        echo "m160204_115733_article cannot be reverted.\n";

        return false;
    }
}
