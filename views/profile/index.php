<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <h1><?= "Registered users" ?></h1>
    

    <p>
        
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'FirstName',
            'LastName',
            //'MiddleName',
            'Gender',
            // 'Address:ntext',
            // 'State',
            // 'City',
            // 'Phone',
            // 'Occupation',
            // 'DateOfBirth',
            // 'MeansOfIdentification',
            // 'IdentificationNumber',
            'CreatedAt',
            // 'UpdatedAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
