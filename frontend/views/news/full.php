<?use frontend\widgets\WLang;?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 m22 single-post">
        <div class="widget">
            <div class="large-widget m30">
                <div class="post clearfix">

                    <div class="title-area">
                        <div class="bread">
                            <ol class="breadcrumb">
                                <li><a href="#">Главная</a></li>
                                <li class=""><a href="<?=\yii\helpers\Url::to(['/news'])?>">Новости филиала</a></li>
                                <li class="active"><?= $model->{'name_' . WLang::getLang()} ?></li>
                            </ol>
                        </div><!-- end bread -->
                        <h1><?= $model->{'name_' . WLang::getLang()} ?></h1>
                        <p><?= $model->{'content_' . WLang::getLang()} ?></p>
                        <?= $language ?>
                    </div>
                </div><!-- end post-title -->
            </div><!-- end post-review -->
        </div><!-- end review-post -->
    </div><!-- end widget -->
</div><!-- end col -->

<div id="comments" class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-title">
                <h4>Коментарии</h4>
                <hr>
            </div><!-- end widget-title -->

            <div class="comments">
                <div class="well">
                    <?=\frontend\components\CommentsWidget::widget(['id' =>$model->id])?>

                </div><!-- end well -->
            </div><!-- end collapse -->
        </div><!-- end widget -->
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-title">
                <h4><?=Yii::t('comment','Добавить комментарий')?></h4>
                <hr>
            </div><!-- end widget-title -->


            </div><!-- end newsletter -->
        </div><!-- end widget -->
    </div><!-- end col -->
</div><!-- end row -->
