<?php

use yii\db\Migration;

/**
 * Handles adding type to table `catnews`.
 */
class m180503_061848_add_type_column_to_catnews_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('catnews', 'type', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('catnews', 'type');
    }
}
