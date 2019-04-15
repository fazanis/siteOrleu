<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- main content section -->
<div class="container">
    <div class="wrapper">
        <div class="news contentText style" id="sizefont">
            <div class="row">
                <!-- col-lg-9 - content section -->
                <div class="col-lg-9 main-page-news-tabs-section"><!-- Global site tag (gtag.js) - Google Analytics -->



                    <div class="center-block">

                        <div class="site-login">
                            <h1><?= Html::encode($this->title) ?></h1>

                            <p>Пожалуйста введите логин и пароль администратора:</p>

                            <div class="row">
                                <div class="col-lg-5">
                                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                        <?= $form->field($model, 'password')->passwordInput() ?>

<!--                                        --><?//= $form->field($model, 'rememberMe')->checkbox() ?>

<!--                                        <div style="color:#999;margin:1em 0">-->
<!--                                            If you forgot your password you can --><?//= Html::a('reset it', ['site/request-password-reset']) ?><!--.-->
<!--                                        </div>-->

                                        <div class="form-group">
                                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                        </div>

                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>

                    </div>




                    <!-- Global site tag (gtag.js) - Google Analytics -->
                    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114214800-1"></script>
                    <script>
                        window.dataLayer = window.dataLayer || [];

                        function gtag() {
                            dataLayer.push(arguments);
                        }

                        gtag('js', new Date());

                        gtag('config', 'UA-114214800-1');
                    </script>

                </div>
                <!-- end - col-lg-9 - content section -->

