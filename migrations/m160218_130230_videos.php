<?php

use yii\db\Schema;
use yii\db\Migration;

class m160218_130230_videos extends Migration {
    public function up() {
        $this->createTable('videos', [
            'id' => Schema::TYPE_PK,

            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'link' => Schema::TYPE_STRING . ' NOT NULL',
            'img_link' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',

            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down() {
        $this->dropTable('videos');

    }

}
