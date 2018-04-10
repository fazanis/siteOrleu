<?php

use yii\db\Migration;

/**
 * Handles the creation of table `banner`.
 */
class m180410_085103_create_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('banner', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'nameonoff' => $this->integer(11),
            'position' => $this->integer(11),
            'img' => $this->string(255),
            'text' => $this->text(),
            'url'=>$this->string(255),
            'activate'=>$this->integer(11),
            'sort'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('banner');
    }
}
