<?use yii\helpers\Html;?>

<?$this -> title = 'Дерево категорий (Меню)';?>


<h1><?= Html::encode($this->title) ?></h1>
<?foreach ($parentcats as $parentcat):?>
<ul>
    <li><?=Html::a($parentcat->name_ru,['/admin/catnews/update','id'=>$parentcat->id],['target'=>'_blanck'])?></li>
    <ul>
        <? foreach ($parentcat->ChildCat($parentcat->id) as $item):?>
        <li><?=Html::a($item->name_ru,['/admin/catnews/update','id'=>$item->id],['target'=>'_blanck'])?></li>
        <?endforeach;?>
    </ul>
</ul>

<?endforeach;?>


