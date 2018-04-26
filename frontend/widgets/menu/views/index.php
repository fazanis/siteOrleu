<?

use frontend\widgets\WLang;

?>
<div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li class=""><a href="/<?= WLang::getLang() ?>"><i class="fa fa-home"></i> <?= Yii::t('app', 'Главная') ?></a>
        </li>
        <? foreach ($menuArray as $menu): ?>
            <? if (!isset($menu['childs'])): ?>
                <li class=""><a
                            href="/<?= WLang::getLang() ?>/<?= $menu['url'] ?>"><?= $menu['name_' . WLang::getLang()] ?></a>
                </li>
            <? else: ?>

                <li class="dropdown hasmenu">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                            href=""><?= $menu['name_' . WLang::getLang()] ?>
                        <span class="fa fa-angle-down"></span></a>
                    <? if (isset($menu['childs'])): ?>
                        <ul class="dropdown-menu">
                            <? foreach ($menu['childs'] as $submenu): ?>
                                <li><a href="<?=$submenu['url']?>"><?= $submenu['name_' . WLang::getLang()] ?></a></li>
                            <? endforeach; ?>
                        </ul>
                    <? endif; ?>
                </li>
            <? endif; ?>
        <? endforeach; ?>
    </ul>
</div><!--/.nav-collapse -->
