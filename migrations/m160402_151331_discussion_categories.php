<?php

use yii\db\Migration;
use yii\db\Schema;

class m160402_151331_discussion_categories extends Migration {
    public function up() {

        $this->createTable('discussion_categories', array(
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ));
    }

    public function down() {
        $this->dropTable('discussion_categories');
    }

}
