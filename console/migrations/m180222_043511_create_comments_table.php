<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m180222_043511_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'content_id' => $this->integer(),
            'text' => $this->text(),
            'status' => $this->integer(),
            'date_create' => $this->integer(11),
            'email' => $this->string(255),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comments');
    }
}
