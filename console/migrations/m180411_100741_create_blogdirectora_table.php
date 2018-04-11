<?php

use yii\db\Migration;

/**
 * Handles the creation of table `blogdirectora`.
 */
class m180411_100741_create_blogdirectora_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('blogdirectora', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'subject' => $this->string(255),
            'question' => $this->text()->notNull(),
            'answer' => $this->text(),
            'public' => $this->integer(11),
            'read' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('blogdirectora');
    }
}
