<?php

use yii\db\Migration;
use yii\db\Schema;

class m160330_182530_article_categories extends Migration {
    public function up() {
        $this->createTable('article_categories', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'

        ]);
    }

    public function down() {
        $this->dropTable('article_categories');
    }

}
