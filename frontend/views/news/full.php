<?use frontend\widgets\WLang;?>
<div id="fh5co-blog">
    <div class="container">
        <h1><?= $model->{'name_' . WLang::getLang()} ?></h1>
        <p><?= $model->{'content_' . WLang::getLang()} ?></p>
        <?= $language ?>
    </div>
</div>
