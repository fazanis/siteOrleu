<?php

use yii\db\Migration;

/**
 * Handles the creation of table `lang`.
 */
class m180205_084936_create_lang_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('lang', [
            'id' => $this->primaryKey(),
            'url' => $this->string(255),
            'local' => $this->string(255),
            'name' => $this->string(255),
            'default' => $this->string(255),
            'date_update' => $this->string(255),
            'date_create' => $this->string(255),
        ]);

        $this->batchInsert('lang', ['url', 'local', 'name', 'default', 'date_update', 'date_create'], [
            ['kz', 'kz-KZ', 'Казахский', 1, time(), time()],
            ['ru', 'ru-RU', 'Русский', 0, time(), time()],
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('lang');
    }
}
