<?php

use yii\db\Migration;

/**
 * Handles the creation of table `content`.
 */
class m180202_090634_create_content_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('content', [
            'id' => $this->primaryKey(),
            'cat' => $this->integer()->notNull(),
            'name_ru' => $this->string(255),
            'content_ru'=>$this->text(),
            'name_kz' => $this->string(255),
            'content_kz'=>$this->text(),
            'foto'=>$this->string(255),
            'url'=>$this->string(255),


        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('content');
    }
}
