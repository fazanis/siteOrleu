<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
Коментарии
<hr>
<?foreach ($comments as $comment):?>
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img class="media-object img-circle" src="upload/avatar_02.png" alt="Generic placeholder image">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">John DOE</h4>
            <div class="time-comment clearfix">
                <small class="pull-left">21 Jun 2015</small>
<!--                <a class="pull-right btn btn-primary btn-xs">Reply</a>-->
            </div><!-- end time-comment -->
            <p><?=$comment->content?></p>
        </div>
    </div><!-- end media -->
<?endforeach;?>

<div class="commentform">
    <? $form = ActiveForm::begin(); ?>
    <?=$form->field($fmod, 'content')->textarea() ?>
    <?=$form->field($fmod, 'email')->textInput() ?>
    <?=Html::submitButton('Отправить',['class'=> 'btn btn-primary']) ?>
    <? ActiveForm::end(); ?>

