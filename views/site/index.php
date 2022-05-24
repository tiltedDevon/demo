<?php

use app\models\Product;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Каталог';
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?=
//    var_dump($dataProvider);

    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'name',
            [
                'format' => 'image',
                'attribute' => 'фото',
                'value' => 'file',
            ],
            'count',
            //'year',
            //'model',
            //'country',

            [
                'attribute' => 'category_id',
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(), 'id', 'name'),
                'value' => 'category.name',
            ],
//        [                'label' => 'Категория',
//            'attribute' => 'category_id',
//            'filter' => ArrayHelper::map(\app\models\Category::find()->asArray()->all(),'id','name'),
//            'value' => 'category.name'],
            [
                'attribute' => 'buy',
                'label' => ' ',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::a('Посмотреть', ['view', 'id' => $model->id], ['class' => 'btn btn-primary']);
                },
            ],
            [
                'attribute' => 'buy',
                'label' => ' ',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::a('в корзину', ['view', 'id' => $model->id], ['class' => 'btn btn-primary']);
                },
            ],
        ],
    ]); ?>


</div>
