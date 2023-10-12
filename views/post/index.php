<?php

use yii\helpers\Html;

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    .post-list {
        margin: 20px auto;
    }

    .post-item {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .post-content {
        flex: 1;
    }

    .view-button {
        margin-left: 10px;
    }
</style>


<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Publicar post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="post-list">
        <?php foreach ($dataProvider->getModels() as $post): ?>
            <div class="post-item">
                <div class="post-content">
                    <h2><?= Html::encode($post->title) ?></h2>
                    <p><?= Html::encode($post->content) ?></p>
                </div>
                <?= Html::a('Visualizar', ['view', 'id' => $post->id], ['class' => 'btn btn-primary view-button']) ?>
            </div>
        <?php endforeach; ?>
    </div>


</div>
