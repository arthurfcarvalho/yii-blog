<?php

use yii\helpers\Html;

$this->title = $post->title;
$this->params['breadcrumbs'][] = ['label' => 'Listagem de Postagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $post->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $post->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza de que deseja excluir esta postagem?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <p><strong>Conteúdo:</strong></p>
    <p><?= $post->content ?></p>

    <p><strong>Data de Criação:</strong> <?= Yii::$app->formatter->asDatetime($post->created_at) ?></p>
    <p><strong>Data de Atualização:</strong> <?= Yii::$app->formatter->asDatetime($post->updated_at) ?></p>

</div>
