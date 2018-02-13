<? use frontend\models\Content;
use frontend\widgets\WLang;
$this->title='Новости филиала';
?>
<div id="fh5co-blog">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Новости филиала</h2>
            </div>
        </div>

        <div class="row">
            <? foreach ($model as $news): ?>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="news/<?=$news->url?>" class="blog-img-holder"> <?= Content::shortImgNews($news->content_ru) ?></a>

                        <div class="blog-text">
                            <h3><a href="news/<?=$news->url?>"><?= $news->{'name_' . WLang::getLang()} ?></a></h3>
                            <span class="posted_on"><?= Content::dateFomat($news->date_create) ?></span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p><?= Content::shortContent($news->{'content_' . WLang::getLang()}) ?></p>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</div>