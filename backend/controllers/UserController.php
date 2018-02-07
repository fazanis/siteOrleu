<?php

namespace backend\controllers;


use Yii;
use backend\models\form\AddUserForm;
use yii\db\ActiveRecord;
use app\models\User;
use backend\models\SearchUser;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\behaviors\TimestampBehavior;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (!Yii::$app->user->id){
            return $this->goHome();
        }


        $searchModel = new SearchUser();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (!Yii::$app->user->id){
            return $this->goHome();
        }

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (!Yii::$app->user->id){
            return $this->goHome();
        }

        $model = new User();
        /*if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Пользователь добавлен');
            return $this->redirect(['view', 'id' => $model->id]);
        }*/
        if ($model->load(Yii::$app->request->post()) && $model->save();
        $model->fio = "Аяшев";
        $model->username = "ayashev";
        $model->auth_key = "vdEReOcp5Akn-4wCQxdlvq3g9J0SvUJF";
        $model->password_hash = "$2y$13$FT8ZGvVpS49dnQcJJK5QgOb/HmUckgWTks54MyjUggYtqzcqwIuF6";
        $model->email = "faza@mail.ru";
        $model->role = "1";
        $model->status = "10";
        $model->created_at = "1517473972";
        $model->updated_at = "1517473972";


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (!Yii::$app->user->id){
            return $this->goHome();
        }

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (!Yii::$app->user->id){
            return $this->goHome();
        }

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (!Yii::$app->user->id){
            return $this->goHome();
        }

        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
