<?php

use yii\db\Migration;

/**
 * Handles the creation of table `userstatus`.
 */
class m180201_090710_create_userstatus_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('userstatus', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
        ]);

        $this->insert('userstatus',
        ['name'=>'Супер Администратор',
        ]);
        $this->insert('userstatus',
        ['name'=>'Администратор',
        ]);
        $this->insert('userstatus',
        ['name'=>'Мененджер',
        ]);
        $this->insert('userstatus',
        ['name'=>'Зарегестрированный',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->delete('userstatus', ['id' => 1]);
        $this->delete('userstatus', ['id' => 2]);
        $this->delete('userstatus', ['id' => 3]);
        $this->delete('userstatus', ['id' => 4]);
        $this->dropTable('userstatus');
    }
}
