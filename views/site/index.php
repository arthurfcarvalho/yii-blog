<?php
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;

/* @var $this View */

$this->title = 'Yes it is! Blog';

?>

<style>

    h1 {
        margin-top: 0;
    }

    .video-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 50vh;
    }

    .btn-posts {
        margin-top: 5px;
        text-align: center;
    }
</style>

<h1 class="mt-5 text-center">Bem-vindos ao Yes it is! Blog</h1>

<div class="site-index text-center">

    <div class="body-content">
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/watch?v=6Zb8pGrKpsk" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="btn-posts">
            <?= Html::a('Ver Posts', ['/posts'], ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>
