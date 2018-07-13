<?php

use yii\db\Migration;

/**
 * Class m180626_050558_add_stepen_and_education_colum_to_ankety
 */
class m180626_050558_add_stepen_and_education_colum_to_ankety extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ankety', 'stepen_ru', $this->string());
        $this->addColumn('ankety', 'stepen_kz', $this->string());
        $this->addColumn('ankety', 'education_ru', $this->text());
        $this->addColumn('ankety', 'education_kz', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('ankety', 'stepen_ru', $this->string());
        $this->dropColumn('ankety', 'stepen_kz', $this->string());
        $this->dropColumn('ankety', 'education_ru', $this->text());
        $this->dropColumn('ankety', 'education_kz', $this->text());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180626_050558_add_stepen_and_education_colum_to_ankety cannot be reverted.\n";

        return false;
    }
    */
}
