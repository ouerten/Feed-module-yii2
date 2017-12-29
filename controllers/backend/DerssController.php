<?php

namespace kouosl\ders\controllers\backend;

use Yii;
use kouosl\ders\models\Derss;
use kouosl\ders\models\DerssSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DerssController implements the CRUD actions for Derss model.
 */
class DerssController extends Controller
{
    /**
     * @inheritdoc
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

    /**
     * Lists all Derss models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DerssSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Derss model.
     * @param string $facebook_link
     * @param string $twitter_link
     * @return mixed
     */
    public function actionView($facebook_link, $twitter_link)
    {
        return $this->render('view', [
            'model' => $this->findModel($facebook_link, $twitter_link),
        ]);
    }

    /**
     * Creates a new Derss model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Derss();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'facebook_link' => $model->facebook_link, 'twitter_link' => $model->twitter_link]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Derss model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $facebook_link
     * @param string $twitter_link
     * @return mixed
     */
    public function actionUpdate($facebook_link, $twitter_link)
    {
        $model = $this->findModel($facebook_link, $twitter_link);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'facebook_link' => $model->facebook_link, 'twitter_link' => $model->twitter_link]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Derss model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $facebook_link
     * @param string $twitter_link
     * @return mixed
     */
    public function actionDelete($facebook_link, $twitter_link)
    {
        $this->findModel($facebook_link, $twitter_link)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Derss model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $facebook_link
     * @param string $twitter_link
     * @return Derss the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($facebook_link, $twitter_link)
    {
        if (($model = Derss::findOne(['facebook_link' => $facebook_link, 'twitter_link' => $twitter_link])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
