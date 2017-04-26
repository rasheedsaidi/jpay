<?php

use yii\db\Migration;

/**
 * Handles the creation of table `profile`.
 */
class m170426_145608_create_profile_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('profile', [
            'ID' => $this->primaryKey(),
            'UserID' => $this->integer(),
            'FirstName'         => $this->string(100),
            'LastName'          => $this->string(100),
            'MiddleName'        => $this->string(100),
            'Gender'            => $this->string(20),
            'Address'           => $this->text(),
            'State'             => $this->string(),
            'City'              => $this->string(),
            'Phone'             => $this->string(50),
            'Occupation'        => $this->string(100),
            'DateOfBirth'       => $this->date(),
            'MeansOfIdentification' => $this->string(50),
            'IdentificationNumber'  => $this->string(100),
            'CreatedAt'         => $this->datetime(),                      
            'UpdatedAt'         => $this->timestamp()->notNull(),
        ]);
        $this->addForeignKey('FKUserID', 'profile', 'UserID', 'user', 'ID', 'RESTRICT', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('profile');
    }
}
