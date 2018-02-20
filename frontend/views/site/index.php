<?
use frontend\widgets\WLang;
use frontend\models\Content;
?>
<div id="property-slider" class="clearfix">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <div class="psdesc hidden-xs">
                    <div class="ps-desc">
                        <h3><a href="#">How to use Bootstrap Framework?</a></h3>
                        <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                        <span class="type">Technology</span>
                        <a href="#" class="status"><i class="fa fa-comment-o"></i> 33</a>
                    </div>
                </div>
                <a href="#"><img src="<?=Yii::getAlias('@mysite')?>/upload/content/slider/1.jpg" alt="" class="img-responsive"></a>
            </li>
            <li>
                <div class="psdesc hidden-xs">
                    <div class="ps-desc">
                        <h3><a href="#">Can You Make a Responsive Design?</a></h3>
                        <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                        <span class="type">Web Design</span>
                        <a href="#" class="status"><i class="fa fa-comment-o"></i> 12</a>
                    </div>
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
    <!-- end large-widget -->
    <div class="widget">
        <div class="widget-title">
            <h4>Latest Reviews</h4>
            <hr>
        </div>
        <!-- end widget-title -->

        <div class="reviewlist review-posts row m30">
            <div class="post-review col-md-4 col-sm-12 first">
                <div class="post-media entry">
                    <a href="single-review.html" title="">
                        <img src="<?=Yii::getAlias('@mysite')?>/upload/content/review_01.jpg" alt="" class="img-responsive">
                        <div class="magnifier">
                            <div class="review-stat">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- end review-stat -->
                            <div class="hover-title">
                                <span>Tech Reviews</span>
                            </div>
                            <!-- end title -->
                        </div>
                        <!-- end magnifier -->
                    </a>
                </div>
                <!-- end media -->
                <div class="post-title">
                    <h3><a href="single-review.html">MyWatch Review - Its work perfect on mobile?</a></h3>
                </div>
                <!-- end post-title -->
            </div>
            <!-- end post-review -->

            <div class="post-review col-md-4 col-sm-12">
                <div class="post-media entry">
                    <a href="single-review.html" title="">
                        <img src="<?=Yii::getAlias('@mysite')?>/upload/content/review_02.jpg" alt="" class="img-responsive">
                        <div class="magnifier">
                            <div class="review-stat">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- end review-stat -->
                            <div class="hover-title">
                                <span>Tech Reviews</span>
                            </div>
                            <!-- end title -->
                        </div>
                        <!-- end magnifier -->
                    </a>
                </div>
                <!-- end media -->
                <div class="post-title">
                    <h3><a href="single-review.html">Google Street View Coming to Bhutan</a></h3>
                </div>
                <!-- end post-title -->
            </div>
            <!-- end post-review -->

            <div class="post-review col-md-4 col-sm-12 last">
                <div class="post-media entry">
                    <a href="single-review.html" title="">
                        <img src="<?=Yii::getAlias('@mysite')?>/upload/content/review_03.jpg" alt="" class="img-responsive">
                        <div class="magnifier">
                            <div class="review-stat">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- end review-stat -->
                            <div class="hover-title">
                                <span>Tech Reviews</span>
                            </div>
                            <!-- end title -->
                        </div>
                        <!-- end magnifier -->
                    </a>
                </div>
                <!-- end media -->
                <div class="post-title">
                    <h3><a href="single-review.html">Mondo, the U.K. banking startup, opens public Beta</a></h3>
                </div>
                <!-- end post-title -->
            </div>
            <!-- end post-review -->

            <div class="post-review col-md-4 col-sm-12 first">
                <div class="post-media entry">
                    <a href="single-review.html" title="">
                        <img src="<?=Yii::getAlias('@mysite')?>/upload/content/review_04.jpg" alt="" class="img-responsive">
                        <div class="magnifier">
                            <div class="review-stat">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- end review-stat -->
                            <div class="hover-title">
                                <span>Tech Reviews</span>
                            </div>
                            <!-- end title -->
                        </div>
                        <!-- end magnifier -->
                    </a>
                </div>
                <!-- end media -->
                <div class="post-title">
                    <h3><a href="single-review.html">Time to meet new edition Samsung Galaxy S5</a></h3>
                </div>
                <!-- end post-title -->
            </div>
            <!-- end post-review -->

            <div class="post-review col-md-4 col-sm-12">
                <div class="post-media entry">
                    <a href="single-review.html" title="">
                        <img src="<?=Yii::getAlias('@mysite')?>/upload/content/review_05.jpg" alt="" class="img-responsive">
                        <div class="magnifier">
                            <div class="review-stat">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- end review-stat -->
                            <div class="hover-title">
                                <span>Tech Reviews</span>
                            </div>
                            <!-- end title -->
                        </div>
                        <!-- end magnifier -->
                    </a>
                </div>
                <!-- end media -->
                <div class="post-title">
                    <h3><a href="single-review.html">Apple Watch available on Apple Stores! Did you buy?</a></h3>
                </div>
                <!-- end post-title -->
            </div>
            <!-- end post-review -->

            <div class="post-review col-md-4 col-sm-12 last">
                <div class="post-media entry">
                    <a href="single-review.html" title="">
                        <img src="<?=Yii::getAlias('@mysite')?>/upload/content/review_06.jpg" alt="" class="img-responsive">
                        <div class="magnifier">
                            <div class="review-stat">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- end review-stat -->
                            <div class="hover-title">
                                <span>Tech Reviews</span>
                            </div>
                            <!-- end title -->
                        </div>
                        <!-- end magnifier -->
                    </a>
                </div>
                <!-- end media -->
                <div class="post-title">
                    <h3><a href="single-review.html">London Tover Review (Sure in Digital Industrial)</a></h3>
                </div>
                <!-- end post-title -->
            </div>
            <!-- end post-review -->

        </div>

    </div>
    <div class="widget searchwidget indexslider">
        <div class="large-widget m30">
            <div class="post row clearfix">
                <div class="col-md-5">
                    <div class="post-media">
                        <a href="single.html">
                            <img alt="" src="<?=Yii::getAlias('@mysite')?>/upload/content/big_news_01.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="title-area">
                        <div class="colorfulcats">
                            <a href="#"><span class="label label-primary">Interview</span></a>
                            <a href="#"><span class="label label-warning">Web Design</span></a>
                        </div>
                        <h3>How ThePhone thriller will change the way film directors & details about the Phone</h3>

                        <div class="large-post-meta">
                            <span class="avatar"><a href="author.html"><img src="<?=Yii::getAlias('@mysite')?>/upload/content/avatar_01.png" alt="" class="img-circle"> Kubra Karahasan</a></span>
                            <small>&#124;</small>
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
        <!-- end large-widget -->

        <div class="large-widget m30">
            <div class="post row clearfix">
                <div class="col-md-5">
                    <div class="post-media">
                        <a href="single.html">
                            <img alt="" src="<?=Yii::getAlias('@mysite')?>/upload/content/big_news_02.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="title-area">
                        <div class="colorfulcats">
                            <a href="#"><span class="label label-primary">Interview</span></a>
                        </div>
                        <h3>Time to meet our new designer and developer who joined our team</h3>

                        <div class="large-post-meta">
                            <span class="avatar"><a href="author.html"><img src="<?=Yii::getAlias('@mysite')?>/upload/content/avatar_01.png" alt="" class="img-circle"> Kubra Karahasan</a></span>
                            <small>&#124;</small>
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
        <!-- end large-widget -->

        <div class="large-widget m30">
            <div class="post row clearfix">
                <div class="col-md-5">
                    <div class="post-media">
                        <a href="single.html">
                            <img alt="" src="<?=Yii::getAlias('@mysite')?>/upload/content/big_news_03.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="title-area">
                        <div class="colorfulcats">
                            <a href="#"><span class="label label-warning">Web Design</span></a>
                        </div>
                        <h3>Best office design's and workspace examples</h3>

                        <div class="large-post-meta">
                            <span class="avatar"><a href="author.html"><img src="<?=Yii::getAlias('@mysite')?>/upload/content/avatar_01.png" alt="" class="img-circle"> Kubra Karahasan</a></span>
                            <small>&#124;</small>
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
        <!-- end large-widget -->

        <div class="large-widget m30">
            <div class="post row clearfix">
                <div class="col-md-5">
                    <div class="post-media">
                        <a href="single.html">
                            <img alt="" src="upload/big_news_04.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="title-area">
                        <div class="colorfulcats">
                            <a href="#"><span class="label label-primary">Interview</span></a>
                            <a href="#"><span class="label label-warning">Web Design</span></a>
                        </div>
                        <h3>What you think about our new laptop its build by Apple</h3>

                        <div class="large-post-meta">
                            <span class="avatar"><a href="author.html"><img src="upload/avatar_01.png" alt="" class="img-circle"> Kubra Karahasan</a></span>
                            <small>&#124;</small>
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
        <!-- end large-widget -->

        <div class="large-widget m30">
            <div class="post row clearfix">
                <div class="col-md-5">
                    <div class="post-media">
                        <a href="single.html">
                            <img alt="" src="upload/big_news_05.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="title-area">
                        <div class="colorfulcats">
                            <a href="#"><span class="label label-success">WordPress</span></a>
                        </div>
                        <h3>WordPress App for showcase galleries and Instagram users</h3>

                        <div class="large-post-meta">
                            <span class="avatar"><a href="author.html"><img src="upload/avatar_01.png" alt="" class="img-circle"> Kubra Karahasan</a></span>
                            <small>&#124;</small>
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
        <!-- end large-widget -->
    </div>
</div>