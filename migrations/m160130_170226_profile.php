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
            'gender' => 'enum("мужской","женский")',
            'education' => Schema::TYPE_TEXT,
            'experience' => Schema::TYPE_TEXT,
            'city_id' => Schema::TYPE_INTEGER,
            'price' => Schema::TYPE_INTEGER,
            'has_diplom' => Schema::TYPE_BOOLEAN,
            'is_active' => Schema::TYPE_BOOLEAN,
            'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    public function down() {
        $this->dropTable('profile');

    }

}
