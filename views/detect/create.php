<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Map;
use app\models\Shape;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Map */

$this->title = 'Detect';
$this->params['breadcrumbs'][] = ['label' => 'Maps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detect-create">

    <h1>  <?= Html::encode($this->title) ?> </h1>
    <?php $form = ActiveForm::begin(); ?>

    <?php
       $list1 = ArrayHelper::map(Map::find()->all(), 'id', 'name');
         echo $form->field($model, 'map_id')->dropDownList($list1,
      [  'prompt' => 'Choose Map',
      ]);
    ?>
    <?php
       $list2 = ArrayHelper::map(Shape::find()->all(), 'id', 'name');
         echo $form->field($model, 'object_id')->dropDownList($list2,
      [  'prompt' => 'Choose Shape',
      ]);
    ?>
    <?= $form->field($model, 'noo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
