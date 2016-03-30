<?php

use yii\db\Schema;
use yii\db\Migration;

class m160218_103754_comments extends Migration {
    public function up() {
        $this->createTable('comments', [
            'id' => Schema::TYPE_PK,

            'text' => Schema::TYPE_TEXT . ' NOT NULL',
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',

            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down() {
        $this->dropTable('comments');

    }

}
