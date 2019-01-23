<?use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\captcha\Captcha;
?>
<div class="container">
    <div class="wrapper">
        <div class="news contentText style" id="sizefont">

            <div class="page">
                <!-- Крошки -->
                <div class="tree">
                    <div class="tree-left">
                        <ul>
                            <li>
                                <a href="" title="Главная" itemprop="url">
                                    Главная
                                </a>
                            </li>

                            <li>
                                <a href="" title="Новости" itemprop="url">

                                </a>
                            </li>

                            <li>
                                <a href="/news/regionnews/" title="Новости региона" itemprop="url">
                                    Новости региона
                                </a>
                            </li>
                            <li>
                                <span>Акимы</span>
                                </il></ul>
                    </div>


                </div>

                <!-- Конец Крошки -->


                <h1>Задайте свой вопрос</h1>
                <div class="page-in">


                    <div class="row">
                        <!-- col-lg-9 - content section -->
                        <div class="col-lg-9 main-page-news-tabs-section"><div id="comp_c4f65250385be1573f149f58aa32c8dd">


                                <div class="all-news">

                                    <div class="row">
                                        <?if (Yii::$app->session->getFlash('success')):?>
                                                                <div class="alert alert-success alert-dismissible" role="alert">

                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                                    <?php echo Yii::$app->session->getFlash('success'); ?>

                                                                </div>
                                                            <?endif;?>
                                    </div>

                                </div>

                                <div class="commentform">
                                    <?php $form = ActiveForm::begin() ?>
                                    <div class="col-md-6 col-sm-12">
                                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <?= $form->field($model, 'question')->textarea(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <a href="/<?= \frontend\widgets\WLang::getLang() ?>/site/blogdirectora/"
                                           class='btn btn-primary'>Отмена</a>
                                    </div>

                                    <?php ActiveForm::end(); ?>

                                </div>


                        </div>
                        </div>

