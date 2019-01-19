<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Shape */

$this->title = 'Create Shape';
$this->params['breadcrumbs'][] = ['label' => 'Shapes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shape-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
