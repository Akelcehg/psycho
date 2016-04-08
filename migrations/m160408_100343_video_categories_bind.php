<?php

use yii\db\Migration;
use yii\db\Schema;

class m160408_100343_video_categories_bind extends Migration
{
    public function up()
    {
        $this->createTable('video_categories_bind', [
            'id' => Schema::TYPE_PK,
            'video_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'category_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down()
    {
        $this->dropTable('video_categories_bind');
    }

}
