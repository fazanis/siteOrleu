<? use frontend\models\Content;
use frontend\widgets\WLang;
use yii\widgets\LinkPager;

$this->title = $cat->{'name_' . WLang::getLang()};
?>

<!-- main content section -->
<div class="container">
    <div class="wrapper">
        <div class="news contentText style" id="sizefont">



            <div class="page">
                <!-- Крошки -->
                <div class="tree">
                    <div class="tree-left">
                        <ul>
                            <li>
                                <a href="<?= \yii\helpers\Url::to('/') ?>" title="Главная" itemprop="url">
                                    Главная
                                </a>
                            </li>

                            <li>
                                <?= $this->title ?> /
                            </li>

                            <li>
                                <a href="/news/regionnews/" title="Новости региона" itemprop="url">
                                    Новости региона
                                </a>
                            </li>
                            <li>
                                <span>Акимы</span>
                                </il>
                        </ul>
                    </div>


                </div>

                <!-- Конец Крошки -->


                <h1><?$this->title?></h1>
                <div class="page-in">


                    <div class="row">
                        <!-- col-lg-9 - content section -->
                        <div class="col-lg-9 main-page-news-tabs-section">
                            <div id="comp_c4f65250385be1573f149f58aa32c8dd">


                                <div class="all-news">

                                    <div class="row">
                                        <? if ($cat->type): ?>
                                            <? foreach ($model as $item): ?>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <a href="/<?= WLang::getLang() ?>/news/<?= $item->url ?>"
                                                       onclick="BX.ajax.insertToNode('/news/regionnews/3-yanvarya-2019-goda-v-vozraste-99-let-ushel-iz-zhizni-veteran-velikoy-otechestvennoy-voyny-pochetny/?bxajaxid=c4f65250385be1573f149f58aa32c8dd', 'comp_c4f65250385be1573f149f58aa32c8dd'); return false;"
                                                       class="all-news-container">
                                                        <div class="all-news-image"
                                                             style="background-image: url(<?= $item->shortImgNews() ?>);">
                                                        </div>

                                                        <div class="all-news-title">
                                                            <?= $item->{'name_' . WLang::getLang()} ?>
                                                        </div>

                                                    </a>
                                                </div>
                                            <? endforeach; ?>
                                        <? else: ?>
                                            <?= $post->{'content_' . WLang::getLang()} ?>

                                        <? endif; ?>

                                    </div>

                                </div>


                                <?= LinkPager::widget([
                                    'pagination' => $pages,
                                ]); ?>

                            </div>


                        </div>