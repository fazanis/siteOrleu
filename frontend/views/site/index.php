<?
use frontend\widgets\WLang;
use frontend\models\Content;
?>
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

                        <span><a href="category.html"><i class="fa fa-clock-o"></i> 21 March 2016</a></span>
                        <small class="hidden-xs">&#124;</small>
                        <span class="hidden-xs"><a href="single.html#comments"><i class="fa fa-comments-o"></i> 92</a></span>
                        <small class="hidden-xs">&#124;</small>
                        <span class="hidden-xs"><a href="single.html"><i class="fa fa-eye"></i> 1223</a></span>
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