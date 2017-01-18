<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\HomeVideo;

/**
 * AlbumController implements the CRUD actions for Album model.
 */
class SettingsController extends Controller
{
    public function init()
    {
            $this->enableCsrfValidation = false;

    }
	public function behaviors()
	{
		return [
			'verbs' => [
				'class' => VerbFilter::className(),
					'actions' => [
						'video' => ['get', 'post'],
					],
				],
				];
	}

	/**
     * Home Video Upload
	 * @return mixed
	 */
	public function actionVideo()
	{
        $model = new HomeVideo();
        if (Yii::$app->request->isPost) {
            $model->videoFile = UploadedFile::getInstance($model, 'videoFile');
            var_dump($model->videoFile);
            if ($model->upload()) {
                return $this->goHome();
            }
        }
		return $this->render('video', ['model' => $model]);
	}
}
