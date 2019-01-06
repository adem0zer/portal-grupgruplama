<?php

namespace kouosl\grupgruplama\controllers\frontend;

use Yii;
use kouosl\grupgruplama\models\Gruplar;
use kouosl\grupgruplama\models\Kayit;
use kouosl\grupgruplama\models\GruplarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GruplarController implements the CRUD actions for Gruplar model.
 */
class GruplarController extends Controller
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

    /**
     * Lists all Gruplar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GruplarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Gruplar model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Gruplar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function actionCreate()
    {
        $model = new Gruplar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->grupid]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
=======

>>>>>>> 7e291716f52dbb032a90bd720725bd5255bb6787
=======

>>>>>>> 7e291716f52dbb032a90bd720725bd5255bb6787

    /**
     * Updates an existing Gruplar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->grupid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
=======

>>>>>>> 7e291716f52dbb032a90bd720725bd5255bb6787
=======

>>>>>>> 7e291716f52dbb032a90bd720725bd5255bb6787

    /**
     * Deletes an existing Gruplar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        
        $deluser= Kayit::find()->where(['grup' => $id])->all();
        //Grup tablosunda silinen tabloyu kayit tablosundan da silmek için yapıldı
        foreach ($deluser as $value) {
            $value->delete();
        }
        return $this->redirect(['index']);
    }
=======

>>>>>>> 7e291716f52dbb032a90bd720725bd5255bb6787
=======

>>>>>>> 7e291716f52dbb032a90bd720725bd5255bb6787
//
    /**
     * Finds the Gruplar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Gruplar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Gruplar::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
