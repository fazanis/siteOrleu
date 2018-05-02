<? use frontend\models\Content;
use frontend\widgets\WLang;
$this->title=$cat->{name_.WLang::getLang()};
?>
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

<div class="container sitecontainer single-wrapper bgw">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 m22">
            <div class="widget">
                <div class="large-widget m30">
                    <?foreach ($model as $news):?>
                    <div class="post clearfix">
                       <div class="large-widget-title">
                            <a href="<?=\yii\helpers\Url::to([$news->url])?>"> <?=$news->{'name_'.WLang::getLang()}?></a>
                        </div>
                        <div class="post-media">
                            <a href="<?=\yii\helpers\Url::to([$news->url])?>">
                                <?=Content::shortImgNews($news->content_ru)?>
                            </a>
                        </div>
                        <div class="large-post-meta">
                            <span class="avatar"><a href="author.html"><img src="upload/avatar_02.png" alt="" class="img-circle"> Mark Twisted</a></span>
                            <small>&#124;</small>
                            <span><?=$news->views?></span>
                            <small>&#124;</small>
                            <span><a href="single.html#comments">12 Comments</a></span>
                        </div><!-- end meta -->
                        <div class="post-share">
                            <div class="customshare">
                                         <span class="list">
                                            <strong><i class="fa fa-share-alt"></i> 980
                                            <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
                                            </strong>
                                        </span>
                            </div>
                        </div><!-- end share -->
                    </div><!-- end post -->
                        <hr>
                    <?endforeach;?>

                </div><!-- end large-widget -->
            </div><!-- end widget -->

            <div class="pagination-wrapper">
                <nav>
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- end col -->

    </div><!-- end row -->
</div><!-- end container -->