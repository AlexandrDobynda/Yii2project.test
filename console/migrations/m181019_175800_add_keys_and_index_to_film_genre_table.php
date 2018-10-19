<?php

use yii\db\Migration;

/**
 * Class m181019_175800_add_keys_and_index_to_film_genre_table
 */
class m181019_175800_add_keys_and_index_to_film_genre_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // creates index for column `film_id`
        $this->createIndex(
            'idx-film_genre-film_id',
            'film_genre',
            'film_id'
        );

        // add foreign key for table `film`
        $this->addForeignKey(
            'fk-film_genre-film_id',
            'film_genre',
            'film_id',
            'film',
            'id',
            'CASCADE'
        );

        // creates index for column `genre_id`
        $this->createIndex(
            'idx-film_genre-genre_id',
            'film_genre',
            'genre_id'
        );

        // add foreign key for table `genres`
        $this->addForeignKey(
            'fk-film_genre-genre_id',
            'film_genre',
            'genre_id',
            'genres',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181019_175800_add_keys_and_index_to_film_genre_table cannot be reverted.\n";

        return false;
    }


}
