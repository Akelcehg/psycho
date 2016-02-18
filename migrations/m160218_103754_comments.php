<?php

use yii\db\Schema;
use yii\db\Migration;

class m160218_103754_comments extends Migration
{
    public function up() {
        $this->createTable('comments', [
            'id' => Schema::TYPE_PK,

            'text' => Schema::TYPE_TEXT . ' NOT NULL',
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',

            'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        echo "m160218_103754_comments cannot be reverted.\n";

        return false;
    }

}
