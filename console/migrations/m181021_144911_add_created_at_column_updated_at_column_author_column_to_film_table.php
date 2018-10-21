<?php

use yii\db\Migration;

/**
 * Handles adding created_at_column_updated_at_column_author to table `film`.
 */
class m181021_144911_add_created_at_column_updated_at_column_author_column_to_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('film', 'created_at', $this->integer());
        $this->addColumn('film', 'updated_at', $this->integer());
        $this->addColumn('film', 'author', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('film', 'created_at');
        $this->dropColumn('film', 'updated_at');
        $this->dropColumn('film', 'author');
    }
}
