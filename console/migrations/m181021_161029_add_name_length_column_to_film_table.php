<?php

use yii\db\Migration;

/**
 * Handles adding name_length to table `film`.
 */
class m181021_161029_add_name_length_column_to_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('film', 'name_length', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('film', 'name_length');
    }
}
