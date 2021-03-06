<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Criteria */

$this->title = 'Редактировать критерий: ' . $model->criteria_title;
$this->params['breadcrumbs'][] = ['label' => 'Критерии', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->criteria_title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать критерий';

?>
<div class="criteria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
