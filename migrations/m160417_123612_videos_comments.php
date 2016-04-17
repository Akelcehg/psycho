<?php

use yii\db\Migration;
use yii\db\Schema;

class m160417_123612_videos_comments extends Migration {
    public function up() {
        $this->createTable('videos_comments', [
            'id' => Schema::TYPE_PK,

            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'video_id' => Schema::TYPE_INTEGER . ' NOT NULL',

            'text' => Schema::TYPE_TEXT . ' NOT NULL',

            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'

        ]);
    }

    public function down() {
        $this->dropTable('videos_comments');
    }
}
