<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\HomeVideo;

class SettingsController extends Controller
{
	/**
     * Home Video Upload
	 * @return mixed
	 */
	public function actionVideo()
	{
        $model = new HomeVideo();

        $model->video= UploadedFile::getInstanceByName('video');
        if (Yii::$app->request->isPost) {
            if ($model->upload()) {
                return;
            }
        }
		return $this->render('video');
	}
}
