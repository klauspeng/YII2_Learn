<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'title') ?>
<?= $form->field($model, 'type') ?>
<?= $form->field($model, 'intro') ?>
<?= $form->field($model, 'is_raw') ?>
<?= $form->field($model, 'raw') ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>