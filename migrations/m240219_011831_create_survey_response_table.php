<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%survey_response}}`.
 */
class m240219_011831_create_survey_response_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%survey_response}}', [
            'id' => $this->primaryKey(),
            'response' => $this->text(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%survey_response}}');
    }
}
