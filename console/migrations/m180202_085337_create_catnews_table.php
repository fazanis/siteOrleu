<?php

use yii\db\Migration;

/**
 * Handles the creation of table `catnews`.
 */
class m180202_085337_create_catnews_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('catnews', [
            'id' => $this->primaryKey(),
            'name_ru' => $this->string(255),
            'name_kz' => $this->string(255),
            'url' => $this->string(255),
            'parent_id' => $this->integer(11),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('catnews');
    }
}
