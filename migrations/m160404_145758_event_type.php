<?php

use yii\db\Migration;
use yii\db\Schema;

class m160404_145758_event_type extends Migration {
    public function up() {
        $this->createTable('event_type', array(
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ));
    }

    public function down() {
        $this->dropTable('event_type');
    }

}
