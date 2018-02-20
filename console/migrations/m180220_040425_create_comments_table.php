<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m180220_040425_create_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'content_id' => $this->integer()->notNull(),
            'username' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'date_create' => $this->integer(11)->notNull(),
            'text' => $this->text()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comments');
    }
}
