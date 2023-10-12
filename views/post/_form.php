<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(); ?>

<?= $form->field($post, 'title')->textInput(['maxlength' => true])->label('Título') ?>

<?= $form->field($post, 'content')->textarea(['rows' => 6])->label('Conteúdo') ?>

<div class="form-group">
    <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
