<?php

use yii\db\Migration;

/**
 * Handles the creation of table `otdel`.
 */
class m180227_041134_create_otdel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('otdel', [
            'id' => $this->primaryKey(),
            'name_ru' => $this->string(255),
            'name_kz' => $this->string(255),
            'url' => $this->string(255),
            'parent_id' => $this->integer(11),
            'status' => $this->integer(11)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('otdel');
    }
}
