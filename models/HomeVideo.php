<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class HomeVideo extends Model
{
    /**
    ** @var UploadedFile
    **/
    public $video;

    public function rules() 
    {
        return [
            [['video'], 'file', 'skipOnEmpty' => false, 'extensions' => 'mp4', 'maxSize' => 500 * 1024 * 1024 * 1024],
        ];
    }

    public function upload()
    {
        if ($this->validate()) 
        {
            $this->video->saveAs('uploads/main.mp4');
            return true;
        } else {
            var_dump($this->errors);
        }
        return false;
    }
}
