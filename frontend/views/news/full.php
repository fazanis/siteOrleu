<?
use frontend\widgets\WLang;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="row">
    <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">
        <div class="widget">
            <div class="large-widget m30">
                <div class="post clearfix">

                    <div class="title-area">
                        <div class="bread">
                            <ol class="breadcrumb">
                                <li><a href="#">Главная</a></li>
                                <li class=""><a href="/news/">Новости</a></li>
                                <li class="active"><?=$model->{name_.WLang::getLang()}?></li>
                            </ol>
                        </div><!-- end bread -->
                        <h3><?=$model->{name_.WLang::getLang()}?></h3>

                        <div class="large-post-meta">
                            <span><a href="category.html"><i class="fa fa-clock-o"></i> <?=$model->date_create?></a></span>

                            <small class="hidden-xs">&#124;</small>
                            <span class="hidden-xs"><a href="single.html"><i class="fa fa-eye"></i> <?=$model->views?></a></span>
                        </div><!-- end meta -->


                    </div><!-- /.pull-right -->

                    <div class="post-media">
                        <a href="single.html">
                            <img alt="" src="upload/single.jpg" class="img-responsive">
                        </a>
                    </div>

                </div><!-- end post -->

                <div class="post-desc">
                    <?=$model->{'content_'.WLang::getLang()}?>

                </div><!-- end post-desc -->











            </div><!-- end large-widget -->
        </div><!-- end widget -->
    </div><!-- end col -->
</div><!-- end row -->