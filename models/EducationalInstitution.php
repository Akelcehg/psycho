<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "educational_institution".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $city_id
 * @property integer $year
 * @property string $status
 * @property string $accreditation
 * @property string $document_end
 * @property string $qualification_levels
 * @property string $address
 * @property string $phone
 * @property string $site
 * @property string $map_coordinates
 * @property string $training_program
 * @property string $required_documents
 * @property string $updated_at
 * @property string $created_at
 */
class EducationalInstitution extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'educational_institution';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['status', 'name', 'description', 'city_id', 'year', 'document_end', 'qualification_levels', 'address', 'phone', 'map_coordinates', 'training_program', 'required_documents'], 'required'],
            [['description', 'status', 'accreditation', 'qualification_levels', 'training_program', 'required_documents'], 'string'],
            [['city_id', 'year'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['name', 'document_end', 'address', 'phone', 'site', 'map_coordinates'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'city_id' => 'City ID',
            'year' => 'Year',
            'status' => 'Status',
            'accreditation' => 'Accreditation',
            'document_end' => 'Document End',
            'qualification_levels' => 'Qualification Levels',
            'address' => 'Address',
            'phone' => 'Phone',
            'site' => 'Site',
            'map_coordinates' => 'Map Coordinates',
            'training_program' => 'Training Program',
            'required_documents' => 'Required Documents',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public static function getSchoolImage($schoolId) {

    }
}
