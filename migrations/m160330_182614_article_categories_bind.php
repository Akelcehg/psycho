<?php

use yii\db\Migration;
use yii\db\Schema;

class m160330_182614_article_categories_bind extends Migration {
    public function up() {

        $this->createTable('article_categories_bind', [
            'id' => Schema::TYPE_PK,
            'article_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'categories' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp'
        ]);

    }

    public function down() {
        echo "m160330_182614_article_categories_bind cannot be reverted.\n";

        return false;
    }

}
