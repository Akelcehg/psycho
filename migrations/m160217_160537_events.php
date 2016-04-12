<?php

use yii\db\Schema;
use yii\db\Migration;

class m160217_160537_events extends Migration
{
    public function up() {
        $this->createTable('events', [
            'id' => Schema::TYPE_PK,

            'type' => Schema::TYPE_INTEGER . ' NOT NULL',
            'direction' => Schema::TYPE_STRING . ' NOT NULL',
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'about' => Schema::TYPE_TEXT . ' NOT NULL',
            'date' => 'timestamp' . ' NOT NULL',
            'duration' => Schema::TYPE_STRING . ' NOT NULL',
            'schedule' => Schema::TYPE_TEXT . ' NOT NULL',
            'price' => Schema::TYPE_INTEGER . ' NOT NULL',
            'address' => Schema::TYPE_STRING . ' NOT NULL',
            'phone' => Schema::TYPE_STRING . ' NOT NULL',
            'site' => Schema::TYPE_STRING,
            'map_coordinates' => Schema::TYPE_STRING . ' NOT NULL',
            'organizer_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'is_user_organizer' => Schema::TYPE_INTEGER . ' NOT NULL',
            'city_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down() {
        $this->dropTable('events');

    }

}
