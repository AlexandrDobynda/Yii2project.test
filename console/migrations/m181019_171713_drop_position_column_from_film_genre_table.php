<?php

use yii\db\Migration;

/**
 * Handles dropping position from table `film_genre`.
 */
class m181019_171713_drop_position_column_from_film_genre_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('film_genre', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('film_genre', 'id', $this->primaryKey());
    }
}
