<?
use frontend\widgets\WLang;
?>
<section class="section bgg">
    <div class="container">
        <div class="title-area">
            <h2><?=$model->name_ru?>
            <div class="bread">
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Новости</a></li>
                    <li class="active"><?=$model->{'name_'.WLang::getLang()}?></li>
                </ol>
            </div><!-- end bread -->
        </div><!-- /.pull-right -->
    </div><!-- end container -->
</section>
<div class="container sitecontainer bgw">
    <div class="row">
        <div class="col-md-12 col-sm-9 col-xs-12 m22 single-post">
            <div class="widget">
                <div class="large-widget m30">
                    <div class="post-desc">
                        <?=$model->{'content_'.WLang::getLang()}?>
                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> Share on Facebook</a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> Tweet on Twitter</a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end post-desc -->
                </div><!-- end large-widget -->
            </div><!-- end widget -->
        </div><!-- end col -->
    </div><!-- end row -->



</div><!-- end container -->
