<? use frontend\models\Content;
use frontend\widgets\WLang;
use yii\widgets\LinkPager;
$this->title=$cat->{name_.WLang::getLang()};
?>
<?if($cat->type==1):?>
<section class="section bgg">
    <div class="container">
        <div class="title-area">
            <h2><?=$this->title?></h2>
            <div class="bread">
                <ol class="breadcrumb">
                    <li><a href="<?=\yii\helpers\Url::to('/')?>">Главная</a></li>
                    <li class="active"><?=$this->title?></li>
                </ol>
            </div><!-- end bread -->
        </div><!-- /.pull-right -->
    </div><!-- end container -->
</section>
<?endif;?>
<div class="container sitecontainer single-wrapper bgw">
    <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12 m22">
            <div class="widget">
                <div class="large-widget m30">
                    <?if($cat->type==1):?>
                        <?foreach ($model as $news):?>
                            <div class="large-widget m30">
                                <div class="post row clearfix">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="/<?=WLang::getLang()?>/<?=Content::getCatUrl($news->cat)?>/<?=$news->url?>">
                                                <?=Content::shortImgNews($news->content_ru)?>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="title-area">

                                            <h4><?=$news->{'name_'.WLang::getLang()}?></h4>
                                            <?=Content::shortContent($news->content_ru)?>
                                            <div class="large-post-meta">

                                                <span><a href="category.html"><i class="fa fa-clock-o"></i> <?=Yii::$app->formatter->asDate($news->date_create, 'php:d-m-Y'); ?></a></span>
                                                <small class="hidden-xs">&#124;</small>
                                                <span class="hidden-xs"><a href="single.html#comments"><i class="fa fa-comments-o"></i> 92</a></span>
                                                <small class="hidden-xs">&#124;</small>
                                                <span class="hidden-xs"><i class="fa fa-eye"></i> <?=$news->views?></span>
                                            </div>
                                            <!-- end meta -->
                                        </div>
                                        <!-- /.pull-right -->
                                    </div>
                                </div>
                                <!-- end post -->
                            </div>
                        <?endforeach;?>
                    <?else:?>

                            <div class="widget">
                                <div class="large-widget m30">
                                    <div class="post clearfix">

                                        <div class="title-area">

                                            <h3><?=$post->{name_.WLang::getLang()}?></h3>

                                            <div class="large-post-meta">
                                                <span><a href="category.html"><i class="fa fa-clock-o"></i> <?=$post->date_create?></a></span>

                                                <small class="hidden-xs">&#124;</small>
                                                <span class="hidden-xs"><a href="single.html"><i class="fa fa-eye"></i> <?=$post->views?></a></span>
                                            </div><!-- end meta -->


                                        </div><!-- /.pull-right -->

                                        <div class="post-media">
                                            <a href="single.html">
                                                <img alt="" src="upload/single.jpg" class="img-responsive">
                                            </a>
                                        </div>

                                    </div><!-- end post -->

                                    <div class="post-desc">
                                        <?=$post->{'content_'.WLang::getLang()}?>

                                    </div><!-- end post-desc -->
                                </div><!-- end large-widget -->
                            </div><!-- end widget -->

                    <?endif;?>

                </div><!-- end large-widget -->
            </div><!-- end widget -->
            <?if($cat->type==1):?>
                <?= LinkPager::widget([
                    'pagination' => $pages,
                ]); ?>
            <?endif;?>
        </div><!-- end col -->

    </div><!-- end row -->
</div><!-- end container -->