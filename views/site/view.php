<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if (!Yii::$app->user->isGuest) {
            echo Html::a('Купить', ['/'], ['class' => 'btn btn-primary']);
            echo Html::a('В корзину', ['/'], ['class' => 'btn btn-primary']);
        } ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date',
            'name',
            'file',
            'count',
            'year',
            'model',
            'country',
            'category_id',
        ],
    ]) ?>

</div>
