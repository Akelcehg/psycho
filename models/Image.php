<?php
namespace app\models;

use yii\base\Model;
use yii\helpers\FileHelper;
use yii\helpers\Url;
use yii\web\UploadedFile;
use Yii;

class Image extends Model {

    /**
     * @var UploadedFile
     */
    public $image_file;
    public $base_image_path = "images/";

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
        $directory = $this->base_image_path . 'profile_photos/' . $psychologistId . '/';

        if (!file_exists($this->base_image_path . 'profile_photos')) mkdir('img/profile_photos');

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

            /*     imagedestroy($image);
                 imagedestroy($new);*/

            file_put_contents($directory . 'logo_small' . '.' . $this->image_file->extension, $data);


            $list_width = 400;
            $list_height = 400;
            $old_width = imagesx($image);
            $old_height = imagesy($image);
            $scale = min($list_width / $old_width, $list_height / $old_height);
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

            file_put_contents($directory . 'logo_medium' . '.' . $this->image_file->extension, $data);

            $this->saveImageWithTransparentBg(400, 400,
                imagecreatefromjpeg($directory . 'logo_medium' . '.' . $this->image_file->extension), $new_width, $new_height,
                $directory . 'logo_medium' . '.png');

            $targ_w = $targ_h = 300;
            $jpeg_quality = 90;

            $dst_r = imagecreatetruecolor($targ_w, $targ_h);
            /*  imagecopyresampled($dst_r,
                  imagecreatefromjpeg($directory . 'logo_medium' . '.' . $this->image_file->extension)
                  , 0, 0, Yii::$app->request->post('x'), Yii::$app->request->post('y'),
                  imagesx(imagecreatefromjpeg($directory . 'logo_medium' . '.' . $this->image_file->extension)),
                  imagesy(imagecreatefromjpeg($directory . 'logo_medium' . '.' . $this->image_file->extension)),

                  Yii::$app->request->post('w'),
                  Yii::$app->request->post('h')
              );*/
            imagecopyresampled($dst_r,
                imagecreatefromjpeg($directory . 'logo_medium' . '.' . $this->image_file->extension)
                , 0, 0, Yii::$app->request->post('x'), Yii::$app->request->post('y'),
                $targ_w, $targ_h, Yii::$app->request->post('w'), Yii::$app->request->post('h'));
            ob_start();
            imagejpeg($dst_r, null, $jpeg_quality);
            $data = ob_get_clean();
            file_put_contents($directory . 'test' . '.' . $this->image_file->extension, $data);

            return true;
        } else {
            return false;
        }
    }

    public function getProfilePhoto() {

        $psychologistId = \Yii::$app->user->id;
        $directory = $this->base_image_path . 'profile_photos/' . $psychologistId . '/';

        $logo = glob($directory . "test.*");
        if ($logo) return $logo[0];
        else return $this->base_image_path . 'profile_photos/blank.jpg';
    }

    public static function getSchoolPhoto($schoolId){
        $directory = 'images/school_photos/' . $schoolId. '/';

        $logo = glob($directory . "main.*");

        if ($logo) return Url::base() . '/' . $logo[0];
        else return Url::base() . '/images/school-default.jpg';
    }


    public static function getUserProfilePhoto($psychologistId) {

        $directory = 'img/profile_photos/' . $psychologistId . '/';

        $logo = glob($directory . "logo.*");
        if ($logo) return Url::base() . '/' . $logo[0];
        else return Url::base() . '/img/team/img_blank_small.jpg';
    }

    public static function getUserMediumProfilePhoto($psychologistId) {

        $directory = 'img/profile_photos/' . $psychologistId . '/';

        $logo = glob($directory . "logo_medium.png");
        if ($logo) return Url::base() . '/' . $logo[0];
        else return Url::base() . '/img/team/img_blank.jpg';
    }

    public static function getUserSmallProfilePhoto($psychologistId) {

        $directory = 'img/profile_photos/' . $psychologistId . '/';

        $logo = glob($directory . "logo_small.*");
        if ($logo) return Url::base() . '/' . $logo[0];
        else return Url::base() . '/img/team/img_blank_small.jpg';
    }

    public function getSmallProfilePhoto() {

        $psychologistId = \Yii::$app->user->id;
        $directory = 'img/profile_photos/' . $psychologistId . '/';

        $logo = glob($directory . "logo_small.*");
        if ($logo) return $logo[0];
        else return 'img/team/img_blank_small.jpg';
    }

    public function saveImageWithTransparentBg($width, $height, $img, $new_width, $new_height, $path) {
        $image = imagecreatetruecolor($width, $height);
        imagealphablending($image, false);
        $col = imagecolorallocatealpha($image, 255, 255, 255, 127);
        imagefilledrectangle($image, 0, 0, $width, $height, $col);
        imagealphablending($image, true);

        $this->pasteImageOnTransparentBg($image, $img, $new_width, $new_height);

        //$fn = md5(microtime() . "img/profile_photos") . ".png";
        imagealphablending($image, false);
        imagesavealpha($image, true);

        if (imagepng($image, $path, 1)) ; /*{
            echo "img/profile_photos/$fn";
        }*/

        imagedestroy($image);

    }

    public function pasteImageOnTransparentBg($background, $image, $originalWidth, $originalHeight) {
        //imagecopymerge($background, $image, 400 - $originalWidth, 0, 0, 0, $originalWidth, $originalHeight, 100);
        imagecopymerge($background, $image, 0, 0, 0, 0, $originalWidth, $originalHeight, 100);
        imagealphablending($background, true);
    }

    public function saveSchoolImage($schoolId, $width, $height) {
        $directory = $this->base_image_path . 'school_photos/' . $schoolId . '/';
        $name = 'main';
        if (!file_exists($this->base_image_path . 'school_photos')) mkdir('images/school_photos');
        if (!file_exists($directory)) mkdir($directory);
        $image = $this->createImage($directory, $name);
        return $this->saveResized($image, $width, $height, $directory, $name);
    }

    public function createImage($directory, $name) {

        $this->image_file->saveAs($directory . $name . '.' . $this->image_file->extension);
        $image = null;
        switch (strtolower($this->image_file->extension)) {
            case 'jpeg':
                $image = imagecreatefromjpeg($directory . $name . '.' . $this->image_file->extension);
                break;
            case 'jpg':
                $image = imagecreatefromjpeg($directory . $name . '.' . $this->image_file->extension);
                break;
            case 'png':
                $image = imagecreatefrompng($directory . $name . '.' . $this->image_file->extension);
                break;
            case 'gif':
                $image = imagecreatefromgif($directory . $name . '.' . $this->image_file->extension);
                break;
            default:
                exit('Unsupported type: ' . $_FILES['image']['type']);
        }

        return $image;
    }

    public function saveResized($image, $width, $height, $directory, $name) {

        $old_width = imagesx($image);
        $old_height = imagesy($image);
        $scale = min($width / $old_width, $height / $old_height);
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

        return file_put_contents($directory . $name . '.' . $this->image_file->extension, $data);
    }
}