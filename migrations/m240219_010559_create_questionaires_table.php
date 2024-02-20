<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%questionaires}}`.
 */
class m240219_010559_create_questionaires_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%questionaires}}', [
            'id' => $this->primaryKey(),
            'question' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%questionaires}}');
    }
}
