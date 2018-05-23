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
                <? if ($menu['typemanu'] == 1): ?>
                    <li class="dropdown hasmenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"
                           href=""><?= $menu['name_' . WLang::getLang()] ?>
                            <span class="fa fa-angle-down"></span></a>
                        <? if (isset($menu['childs'])): ?>
                            <ul class="dropdown-menu">
                                <? foreach ($menu['childs'] as $submenu): ?>
                                    <li>
                                        <a href="/<?= WLang::getLang() ?>/<?= $submenu['url'] ?>"><?= $submenu['name_' . WLang::getLang()] ?></a>
                                    </li>
                                <? endforeach; ?>
                            </ul>
                        <? endif; ?>
                    </li>
                <? else: ?>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><?= $menu['name_' . WLang::getLang()] ?> <span
                                    class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <? $i = 1; ?>
                                        <? foreach ($menu['childs'] as $submenu): ?>
                                            <div class="col-md-3">
                                                <div class="widget">
                                                    <div class="links-widget">
                                                        <ul class="check">
                                                            <li><?= $i ?> <a
                                                                        href="/<?= WLang::getLang() ?>/<?= $submenu['url'] ?>"><?= $submenu['name_' . WLang::getLang()] ?></a>
                                                            </li>
                                                            <? $i++; ?>
                                                        </ul>
                                                    </div><!-- end links -->
                                                </div>
                                            </div>
                                        <? endforeach; ?>
                                    </div>
                                </div><!-- end ttmenu-content -->
                            </li>
                        </ul>
                    </li>
                <? endif; ?>
            <? endif; ?>
        <? endforeach; ?>
    </ul>
    <ul class="nav navbar-nav" style="float: right">
        <li><?= WLang::widget() ?></li>
    </ul>
</div><!--/.nav-collapse -->
