<?php

use yii\db\Migration;

/**
 * Handles adding typeurl to table `banner`.
 */
class m180505_063337_add_typeurl_column_to_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('banner', 'typeurl', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('banner', 'typeurl');
    }
}
