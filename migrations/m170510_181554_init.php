<?php

use yii\db\Migration;

class m170510_181554_init extends Migration
{
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->bigPrimaryKey(20),
            'type' => 'tinyint(2)',
            'login' => 'VARCHAR(30)',
            'password_hash' => 'VARCHAR(100)',
            'fname' => 'VARCHAR(30)',
            'sname' => 'VARCHAR(30)',
            'email' => 'VARCHAR(30)',
            'img' => $this->bigInteger(20),
            'rate' => $this->integer(11)
        ]);

        $this->createTable('games', [
            'id' => $this->bigPrimaryKey(50),
            'status' => $this->smallInteger(2),
            'fid' => $this->bigInteger(20),
            'sid' => $this->bigInteger(20),
            'attack' => $this->text(),
            'defense' => $this->text(),
            'deck' => $this->text(),
            'fdeck' => $this->text(),
            'sdeck' => $this->text(),
            'who' => $this->smallInteger(2),
            'rate' => $this->integer(11),
            'chat' => $this->text()
        ]);

        $this->createTable('img', [
            'id' => $this->bigPrimaryKey(20),
            'path' => 'VARCHAR(100)'
        ]);

        $this->createTable('friends', [
            'id' => $this->bigPrimaryKey(20),
            'userId' => $this->bigInteger(20),
            'friendId' => $this->bigInteger(20),
            'status' => 'tinyint(2)'
        ]);

        $this->createTable('articles', [
            'id' => $this->primaryKey(11),
            'title' => $this->text(),
            'content' => $this->text(),
            'img' => $this->bigInteger(20),
            'author' => $this->bigInteger(20),
            'date' => $this->timestamp()->null()
        ]);

        $this->createTable('seven', [
            'id' => $this->bigPrimaryKey(20),
            'deck' => $this->text()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('user');
        $this->dropTable('games');
        $this->dropTable('img');
        $this->dropTable('friends');
        $this->dropTable('articles');
        $this->dropTable('seven');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170510_181554_init cannot be reverted.\n";

        return false;
    }
    */
}
