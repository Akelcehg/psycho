<?php

use yii\db\Schema;
use yii\db\Migration;

class m160131_130425_educational_institution extends Migration
{

    public function up() {

        $this->createTable('educational_institution', [

            'id' => Schema::TYPE_PK,

            //'logo' => Schema::TYPE_STRING,

            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'city_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'year' => Schema::TYPE_INTEGER . ' NOT NULL',
            'status' => 'ENUM("государственная", "не государственная") DEFAULT "государственная"',
            'accreditation' => Schema::TYPE_TEXT,
            'document_end' => Schema::TYPE_STRING . ' NOT NULL',
            'qualification_levels' => Schema::TYPE_TEXT . ' NOT NULL',
            'address' => Schema::TYPE_STRING . ' NOT NULL',
            'phone' => Schema::TYPE_STRING . ' NOT NULL',
            'site' => Schema::TYPE_STRING,
            'map_coordinates' => Schema::TYPE_STRING . ' NOT NULL',

            //'school_directions' => Schema::TYPE_TEXT . ' NOT NULL',

            'training_program' => Schema::TYPE_TEXT . ' NOT NULL',

            'required_documents' => Schema::TYPE_TEXT . ' NOT NULL',

            //'photos' => Schema::TYPE_INTEGER,
            //'videos' => Schema::TYPE_INTEGER,

            'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        $this->dropTable('educational_institution');

    }

}
