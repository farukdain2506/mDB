<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'actorID') ?>

    <?= $form->field($model, 'FirstName') ?>

    <?= $form->field($model, 'LastName') ?>

    <?= $form->field($model, 'Nationality') ?>

    <?= $form->field($model, 'Birth') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
