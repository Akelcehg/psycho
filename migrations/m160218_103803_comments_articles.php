<?php

use yii\db\Schema;
use yii\db\Migration;

class m160218_103803_comments_articles extends Migration {
    public function up() {
        $this->createTable('comments_articles', [
            'id' => Schema::TYPE_PK,
            'comment_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'article_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down() {
        $this->dropTable('comments_articles');

    }

}
