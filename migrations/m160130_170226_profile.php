<?php

use yii\db\Schema;
use yii\db\Migration;

class m160130_170226_profile extends Migration {

    public function up() {

        $this->createTable('profile', [

            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'firstname' => Schema::TYPE_STRING,
            'lastname' => Schema::TYPE_STRING,
            'secondname' => Schema::TYPE_STRING,
            'education' => Schema::TYPE_TEXT,
            'experience' => Schema::TYPE_TEXT,
            'price' => Schema::TYPE_INTEGER,
            'has_diplom' => Schema::TYPE_BOOLEAN,
            'is_active' => Schema::TYPE_BOOLEAN,
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        $this->dropTable('profile');

    }

}
