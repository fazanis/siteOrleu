<?php

use yii\db\Migration;

/**
 * Handles adding sortmenu_and_typemenu to table `catnews`.
 */
class m180521_111218_add_sortmenu_and_typemenu_column_to_catnews_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('catnews', 'sortmenu', $this->integer());
        $this->addColumn('catnews', 'typemenu', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('catnews', 'sortmenu');
        $this->dropColumn('catnews', 'typemenu');
    }
}
