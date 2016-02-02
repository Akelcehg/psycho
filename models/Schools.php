<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property integer $id
 * @property string $logo
 * @property string $name
 * @property string $description
 * @property integer $city_id
 * @property integer $year
 * @property integer $status
 * @property integer $accreditation
 * @property integer $document_end
 * @property string $qualification_levels
 * @property string $address
 * @property string $phone
 * @property string $site
 * @property string $map_coordinates
 * @property string $school_directions
 * @property string $faculties
 * @property string $required_documents
 * @property integer $photos
 * @property integer $videos
 * @property string $updated_at
 * @property string $created_at
 */
class Schools extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'city_id', 'year', 'status', 'accreditation', 'document_end', 'qualification_levels', 'address', 'phone', 'school_directions', 'faculties', 'required_documents'], 'required'],
            [['description', 'qualification_levels', 'school_directions', 'faculties', 'required_documents'], 'string'],
            [['city_id', 'year', 'status', 'accreditation', 'document_end', 'photos', 'videos'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['logo', 'name', 'address', 'phone', 'site', 'map_coordinates'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo' => 'Logo',
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
            'school_directions' => 'School Directions',
            'faculties' => 'Faculties',
            'required_documents' => 'Required Documents',
            'photos' => 'Photos',
            'videos' => 'Videos',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
