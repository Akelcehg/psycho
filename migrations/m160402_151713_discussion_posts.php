<?php

use yii\db\Migration;
use yii\db\Schema;

class m160402_151713_discussion_posts extends Migration {
    public function up() {
        $this->createTable('discussion_posts', [
            'id' => Schema::TYPE_PK,

            'discussion_category_id' => Schema::TYPE_INTEGER . ' NOT NULL',

            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',

            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'text' => Schema::TYPE_TEXT . ' NOT NULL',

            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'

        ]);
    }

    public function down() {
        $this->dropTable('discussion_posts');
    }

}
