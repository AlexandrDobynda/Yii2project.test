<?php

use yii\db\Migration;

/**
 * Class m181019_182606_add_keys_and_index_for_producers_table
 */
class m181019_182606_add_keys_and_index_for_producers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        // creates index for column `producer_id`
        $this->createIndex(
            'idx-film-producer_id',
            'film',
            'producer_id'
        );

        // add foreign key for table `producers`
        $this->addForeignKey(
            'fk-film-producer_id',
            'film',
            'producer_id',
            'producers',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181019_182606_add_keys_and_index_for_producers_table cannot be reverted.\n";

        return false;
    }


}
