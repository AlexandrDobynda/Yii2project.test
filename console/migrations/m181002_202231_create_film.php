<?php

use yii\db\Migration;

/**
 * Class m181002_202231_create_film
 */
class m181002_202231_create_film extends Migration
{


    /**
     *
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('film', [
            'id' => $this->primaryKey(),
            'film_name' => $this->string(50)->notNull(),
            'producer_id' => $this->integer(),
            'year' => $this->string()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('film');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181002_202231_create_film cannot be reverted.\n";

        return false;
    }
    */
}
