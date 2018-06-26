<?
use frontend\widgets\WLang;
use frontend\models\Content;
?>
<div id="property-slider" class="clearfix">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <div class="psdesc hidden-xs">
<!--                    <div class="ps-desc">-->
<!--                        <h3><a href="#">How to use Bootstrap Framework?</a></h3>-->
<!--                        <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>-->
<!--                        <span class="type">Technology</span>-->
<!--                        <a href="#" class="status"><i class="fa fa-comment-o"></i> 33</a>-->
<!--                    </div>-->
                </div>
                <a href="#"><img src="<?=Yii::getAlias('@mysite')?>/upload/content/slider/1.jpg" alt="" class="img-responsive"></a>
            </li>
            <li>
                <div class="psdesc hidden-xs">
<!--                    <div class="ps-desc">-->
<!--                        <h3><a href="#">Can You Make a Responsive Design?</a></h3>-->
<!--                        <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>-->
<!--                        <span class="type">Web Design</span>-->
<!--                        <a href="#" class="status"><i class="fa fa-comment-o"></i> 12</a>-->
<!--                    </div>-->
                </div>
                <a href="#"><img src="<?=Yii::getAlias('@mysite')?>/upload/content/slider/2.jpg" alt="" class="img-responsive"></a>
            </li>
        </ul>
        <!-- end slides -->
    </div>
    <!-- end flexslider -->
</div>
<h2>Новости</h2>
<div class="widget searchwidget indexslider">
    <?foreach ($newslist as $news):?>
    <div class="large-widget m30">
        <div class="post row clearfix">
            <div class="col-md-4">
                <div class="post-media">
                    <a href="<?=WLang::getLang()?>/news/<?=$news->url?>">
                        <?=Content::shortImgNews($news->content_ru)?>
                    </a>
                </div>
            </div>

            <div class="col-md-7">
                <div class="title-area">

                    <h3><?=$news->{'name_'.WLang::getLang()}?></h3>

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
    <h3>На курсах</h3>
    <hr>
    <?foreach ($nakursah as $news):?>
        <div class="large-widget m30">
            <div class="post row clearfix">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="<?=WLang::getLang()?>/na-kursah/<?=$news->url?>">
                            <?=Content::shortImgNews($news->content_ru)?>
                        </a>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="title-area">

                        <h3><?=$news->{'name_'.WLang::getLang()}?></h3>

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
    <!-- end large-widget -->


</div>