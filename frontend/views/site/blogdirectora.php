<?

use frontend\widgets\WLang;
use frontend\models\Content;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h2><?= Yii::t('app', 'blog_directora') ?></h2>
<a href="/<?=WLang::getLang()?>/site/zadatvopros/" class="btn btn-primary">Задать вопрос</a>
<div class="widget searchwidget indexslider">



            <?foreach ($question as $item):?>
    <div class="authorbox">

        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="post clearfix">
                    <span class="bbp-forum-title"><b><?=$item->name?></b></span>
                    <p><?=$item->question?></p>
                    <div class="col-sm-12 col-md-12">
                        <p><b>Ответ</b></p>
                    <div class="section bgg title-area">
                        <p><?=$item->answer?></p>
                    </div>

                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end authorbox -->
            <?endforeach;?>




</div>