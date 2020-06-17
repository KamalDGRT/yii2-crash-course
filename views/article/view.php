<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    Created at: <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div>
        <!---<h1><?php //echo Html::encode($model->title) ?></h1> -->
        <p class="text-muted">
            <small>
                By: <?php echo $model->createdBy->username ?>
            </small>
        </p>
        <div>
            <?php echo $model->getEncodedBody();  ?>
        </div>
    </div>
</div>
