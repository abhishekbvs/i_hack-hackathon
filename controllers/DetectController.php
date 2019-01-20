<?php

namespace app\controllers;

use Yii;
use app\models\Shape;
use app\models\ShapeSearch;
use app\models\Map;
use app\models\DummyModel;
use app\models\MapSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class DetectController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
      $model = new DummyModel();
      if ($model->load(Yii::$app->request->isPost)) {
        //  return $this->redirect(['view', 'id' => $model->id]);

        exec(Yii::app()->basePath."/commands/detect.sh " . $tempxls, $outputArr);
        //var_dump($output);
        return $this->render('result',['model'=>$output]);
      }
      return $this->render('create', [
          'model' => $model
      ]);
    }

}
