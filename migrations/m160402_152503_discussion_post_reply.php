<?php

use yii\db\Migration;
use yii\db\Schema;

class m160402_152503_discussion_post_reply extends Migration {
    public function up() {
        $this->createTable('discussion_post_reply', [
            'id' => Schema::TYPE_PK,

            'discussion_post_id' => Schema::TYPE_INTEGER . ' NOT NULL',

            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'text' => Schema::TYPE_TEXT . ' NOT NULL',

            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'

        ]);
    }

    public function down() {
        $this->dropTable('discussion_post_reply');
    }

}
