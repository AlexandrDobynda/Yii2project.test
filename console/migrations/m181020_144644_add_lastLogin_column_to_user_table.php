<?php

use yii\db\Migration;

/**
 * Handles adding lastLogin to table `user`.
 */
class m181020_144644_add_lastLogin_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'lastLogin', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
