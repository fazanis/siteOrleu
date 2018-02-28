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
            'status' => $this->integer(11),
            'sort' => $this->integer(11),
            'text_ru' => $this->text(),
            'text_kz' => $this->text()
        ]);

        $this->insert('otdel',[
            'name_ru' => 'Руководство',
            'name_kz' => 'Басшылық',
            'url' => 'rukovodstvo',
            'parent_id' => '0',
            'status' => '1'
        ]);
        $this->insert('otdel',[
            'name_ru' => 'Отделы',
            'name_kz' => 'Бөлімдер',
            'url' => 'otdely',
            'parent_id' => '0',
            'status' => '1'
        ]);
        $this->insert('otdel',[
            'name_ru' => 'Кафедры',
            'name_kz' => 'Кафедралар',
            'url' => 'kafedry',
            'parent_id' => '0',
            'status' => '1'
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
