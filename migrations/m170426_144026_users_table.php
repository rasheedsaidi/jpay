<?php

use yii\db\Migration;

class m170426_144026_users_table extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'ID'            => $this->primaryKey(),
            'FirstName'         => $this->string(100),
            'Email'             => $this->string(),
            'Password'          => $this->string(),            
            'Status'            => $this->integer(),
            'Token'             => $this->string(),
            'CreatedAt'         => $this->datetime(),                      
            'UpdatedAt'         => $this->timestamp()->notNull(),
        ]);        
    }

    public function down()
    {
        $this->dropTable('user');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
