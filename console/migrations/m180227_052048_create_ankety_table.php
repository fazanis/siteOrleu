<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ankety`.
 */
class m180227_052048_create_ankety_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ankety', [
            'id' => $this->primaryKey(),
            'otdel_id' => $this->integer(11),
            'dolzhnost_ru' => $this->string(255),
            'dolzhnost_kz' => $this->string(255),
            'fio_ru' => $this->string(255),
            'fio_kz' => $this->string(255),
            'nagradi_ru' => $this->text(),
            'nagradi_kz' => $this->text(),
            'publikacii_ru' => $this->text(),
            'publikacii_kz' => $this->text(),
            'email'=>$this->string(255),
            'phone' => $this->string(255),
            'kabinet' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ankety');
    }
}
