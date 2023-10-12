<?php

use yii\helpers\Html;

$this->title = 'Publicar Postagem';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'post' => $post,
    ]) ?>

</div>
