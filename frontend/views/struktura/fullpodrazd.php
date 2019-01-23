<?

use frontend\widgets\WLang;
use yii\helpers\Html;

?>

<div class="container">
    <div class="wrapper">
        <div class="news contentText style" id="sizefont">

            <div class="page">
                <!-- Крошки -->
                <div class="tree">
                    <div class="tree-left">
                        <ul>
                            <li>
                                <a href="<?=\yii\helpers\Url::to('/')?>" title="Главная" itemprop="url">
                                    Главная
                                </a>
                            </li>

<!--                            <li>-->
<!--                                <a href="/--><?//=WLang::getLang()?><!--/--><?//=Content::getCatUrl($model->cat)?><!--" title="Новости" itemprop="url">-->
<!--                                    --><?//=Content::getCatName($model->cat)?>
<!--                                </a>-->
<!--                            </li>-->

                            <li>
                                <a href="/news/regionnews/" title="Новости региона" itemprop="url">
                                    Новости региона
                                </a>
                            </li>
                            <li>
                                <span>Акимы</span>
                                </il></ul>
                    </div>


                </div>

                <!-- Конец Крошки -->




                <div class="page-in">


                    <div class="row">
                        <!-- col-lg-9 - content section -->
                        <div class="col-lg-9 main-page-news-tabs-section"><div id="comp_c4f65250385be1573f149f58aa32c8dd">

                                <h1><?= $otdelinfo->{'name_' . WLang::getLang()} ?></h1>
                                <div class="all-news">

                                    <div class="row">

                                    </div>

                                </div>
                                <?= $otdelinfo->{'text_' . WLang::getLang()} ?>
<!--                                --><?//=$model->{'content_'.WLang::getLang()}?>

                            </div>
                            <? foreach ($ankety as $anketa): ?>


                                <?
                                $img = $anketa->getImage();
                                ?>

                                <div class="job-media row">
                                    <div class="col-sm-5">
                                        <?= Html::img($img->getUrl(), ['alt' => $item->fio_ru, 'class' => 'img-responsive']) ?>
                                    </div>

                                    <div class="col-sm-7 job-details">
                                        <h3><?= $anketa->{'fio_' . WLang::getLang()} ?></h3>
                                        <ul class="">
                                            <li><strong> Должность :</strong> <?= $anketa->{'dolzhnost_' . WLang::getLang()} ?></li>
                                            <?if ($anketa->{'stepen_' . WLang::getLang()}!='') :?>
                                            <li><strong> Ученая степень :</strong> <?= $anketa->{'stepen_' . WLang::getLang()} ?></li>
                                            <?endif;?>
                                            <li><strong> Телефон :</strong> <?= $anketa->phone ?></li>
                                            <li><strong> Email :</strong> <?= $anketa->email ?></li>
                                            <li><strong> Кабинет №:</strong> <?= $anketa->kabinet ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php if ($anketa->{'education_' . WLang::getLang()} != ''): ?>
                                    <h3><?= Yii::t('app', 'Образование') ?></h3>
                                    <p><?= $anketa->{'education_' . WLang::getLang()} ?></p>
                                <?php endif; ?>
                                <?php if ($anketa->{'nagradi_' . WLang::getLang()} != ''): ?>
                                    <h3><?= Yii::t('app', 'Награды') ?></h3>
                                    <p><?= $anketa->{'nagradi_' . WLang::getLang()} ?></p>
                                <?php endif; ?>
                                <?php if ($anketa->{'publikacii_' . WLang::getLang()} != ''): ?>
                                    <h3><?= Yii::t('app', 'Публикации') ?></h3>
                                    <p><?= $anketa->{'publikacii_' . WLang::getLang()} ?></p>
                                <?php endif; ?>
                                <hr>
                            <?php endforeach; ?>

                        </div>


