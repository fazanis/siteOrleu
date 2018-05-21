<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.04.2018
 * Time: 10:18
 */

namespace frontend\widgets\menu;


use frontend\module\admin\models\Catnews;
use yii\jui\Widget;
use Yii;
use yii\db\ActiveRecord;

class Menu extends Widget
{
    public $data;
    public $tree;


    public function run()
    {
        $menuArray = $this->menuTree();
        return $this->render('index', [
            'menuArray' => $menuArray,
        ]);

    }

    public function menuTree()
    {
        $this->data = Catnews::find()->indexBy('id')->asArray()->orderBy('sortmenu ASC')->all();
        $this->tree = $this->getTree();

        return $this->tree;

    }

    public function getTree()
    {
        $tree = [];
        foreach ($this->data as $id => &$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;
            } else {
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
            }

        }
        return $tree;
    }
}