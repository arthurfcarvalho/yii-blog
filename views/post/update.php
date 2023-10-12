<?php

use yii\helpers\Html;

$this->title = 'Editar Postagem: ' . $post->title;
$this->params['breadcrumbs'][] = ['label' => 'Listagem de Postagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $post->title, 'url' => ['view', 'id' => $post->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'post' => $post,
    ]) ?>

</div>
