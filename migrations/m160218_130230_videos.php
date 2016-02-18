<?php

use yii\db\Schema;
use yii\db\Migration;

class m160218_130230_videos extends Migration
{
    public function up() {
        $this->createTable('videos', [
            'id' => Schema::TYPE_PK,

            'link' => Schema::TYPE_STRING . ' NOT NULL',
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',

            'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        echo "m160218_130230_videos cannot be reverted.\n";

        return false;
    }

}
