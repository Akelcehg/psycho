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

            $this->image_file->saveAs($directory . 'logo' . '.' . $this->image_file->extension);

            $image = null;
            switch (strtolower($this->image_file->extension)) {
                case 'jpeg':
                    $image = imagecreatefromjpeg($directory . 'logo' . '.' . $this->image_file->extension);
                    break;
                case 'jpg':
                    $image = imagecreatefromjpeg($directory . 'logo' . '.' . $this->image_file->extension);
                    break;
                case 'png':
                    $image = imagecreatefrompng($directory . 'logo' . '.' . $this->image_file->extension);
                    break;
                case 'gif':
                    $image = imagecreatefromgif($directory . 'logo' . '.' . $this->image_file->extension);
                    break;
                default:
                    exit('Unsupported type: ' . $_FILES['image']['type']);
            }

            $max_width = 100;
            $max_height = 250;

            $old_width = imagesx($image);
            $old_height = imagesy($image);
            $scale = min($max_width / $old_width, $max_height / $old_height);
            $new_width = ceil($scale * $old_width);
            $new_height = ceil($scale * $old_height);
            $new = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($new, $image,
                0, 0, 0, 0,
                $new_width, $new_height, $old_width, $old_height);

            ob_start();
            imagejpeg($new, NULL, 90);
            $data = ob_get_clean();

            imagedestroy($image);
            imagedestroy($new);

            file_put_contents($directory . 'logo_small' . '.' . $this->image_file->extension, $data);

            return true;
        } else {
            return false;
        }
    }

    public function getProfilePhoto() {

        $psychologistId = \Yii::$app->user->id;
        $directory = 'img/profile_photos/' . $psychologistId . '/';

        $logo = glob($directory . "logo.*");
        if ($logo) return $logo[0];
        else return null;
    }

    public function getSmallProfilePhoto() {

        $psychologistId = \Yii::$app->user->id;
        $directory = 'img/profile_photos/' . $psychologistId . '/';

        $logo = glob($directory . "logo_small.*");
        if ($logo) return $logo[0];
        else return null;
    }

    public function saveProfilePhoto() {
        return true;
    }

    public function saveFile($dir, $fileName, $height, $width, $saveOriginal, $nameOriginal) {
        return true;
    }

}