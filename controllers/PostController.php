<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Posts;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

class PostController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Posts::find(),
        ]);
        $posts = Posts::find()->all();

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionView($id)
    {
        $post = Posts::findOne($id);
        if (!$post) {
            throw new NotFoundHttpException('A postagem não foi encontrada.');
        }
        return $this->render('view', ['post' => $post]);
    }

    public function actionCreate()
    {
        $post = new Posts();

        if ($post->load(Yii::$app->request->post()) && $post->save()) {
            return $this->redirect(['view', 'id' => $post->id]);
        }

        return $this->render('create', ['post' => $post]);
    }

    public function actionUpdate($id)
    {
        $post = Posts::findOne($id);

        if (!$post) {
            throw new NotFoundHttpException('A postagem não foi encontrada.');
        }

        if ($post->load(Yii::$app->request->post()) && $post->save()) {
            return $this->redirect(['view', 'id' => $post->id]);
        }

        return $this->render('update', ['post' => $post]);
    }

    public function actionDelete($id)
    {
        $post = Posts::findOne($id);

        if (!$post) {
            throw new NotFoundHttpException('A postagem não foi encontrada.');
        }

        $post->delete();

        return $this->redirect(['index']);
    }
}



