<?php

use yii\db\Migration;
use yii\db\Schema;

class m160402_151226_article_comments extends Migration {
    public function up() {
        $this->createTable('article_comments', [
            'id' => Schema::TYPE_PK,

            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'article_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            
            'text' => Schema::TYPE_TEXT . ' NOT NULL',

            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'

        ]);
    }

    public function down() {
        $this->dropTable('article_comments');
    }

}
