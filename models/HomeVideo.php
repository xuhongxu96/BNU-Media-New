<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class HomeVideo extends Model
{
    public $videoFile;

    public function rules() 
    {
        return [
            [['videoFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'mp4'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) 
        {
            $this->videoFile->saveAs('uploads/main.mp4');
            return true;
        } else {
            var_dump($this->errors);
        }
        return false;
    }
}
