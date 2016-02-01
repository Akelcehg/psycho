<?php
namespace app\models;

use yii\base\Model;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

class Image extends Model
{
    /**
     * @var UploadedFile
     */
    public $image_file;

    /*    public function rules() {
            return [
                [['image_file'], 'file', 'skipOnEmpty' => false],
            ];
        }*/

    public function rules() {
        return [
            [['image_file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload() {
        $psychologistId = \Yii::$app->user->id;
        $directory = 'img/profile_photos/' . $psychologistId . '/';

        if (!file_exists('img/profile_photos')) mkdir('img/profile_photos');


        if ($this->validate()) {
            FileHelper::removeDirectory($directory);
            if (!file_exists($directory)) mkdir($directory);
            //$this->image_file->saveAs($directory . $this->image_file->baseName . '.' . $this->image_file->extension);
            $this->image_file->saveAs($directory . 'logo' . '.' . $this->image_file->extension);
            return true;
        } else {
            return false;
        }
    }

    public function getProfilePhoto() {

        $psychologistId = \Yii::$app->user->id;
        $directory = 'img/profile_photos/' . $psychologistId . '/';

        $logo = glob($directory . "*.*");
        if ($logo) return $logo[0];
        else return null;
    }

}