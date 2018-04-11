<?use yii\widgets\ActiveForm;
use yii\helpers\Html;?>
<div class="row">
    <div class="col-md-7 col-sm-12">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="widget">
                    <div class="widget-title">
                        <h4>Задайте свой вопрос</h4>
                        <hr>
                    </div>
                    <!-- end widget-title -->
                    <?if (Yii::$app->session->getFlash('success')):?>
                        <div class="alert alert-success alert-dismissible" role="alert">

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                            <?php echo Yii::$app->session->getFlash('success'); ?>

                        </div>
                    <?endif;?>
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
                        <?= $form->field($model, 'question')->textarea(  ['maxlength' => true]) ?>
                        </div>



                        <div class="col-md-6 col-sm-12">
                            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <a href="/<?=\frontend\widgets\WLang::getLang()?>/site/blogdirectora/" class = 'btn btn-primary'>Отмена</a>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                    <!-- end newsletter -->
                </div>
                <!-- end form-container -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end col -->


</div>