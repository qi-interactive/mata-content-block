<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */


use yii\db\Schema;
use yii\db\Migration;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com
 */
class m150223_181315_init extends Migration {

	public function safeUp() {
		$this->createTable('{{%mata_contentblock}}', [
			'Id'                   => Schema::TYPE_PK,
			'Title'             => Schema::TYPE_TEXT . '(128) NOT NULL',
			'Text'             => Schema::TYPE_TEXT . '(128) NOT NULL',
			'Region'             => Schema::TYPE_STRING . '(128) NOT NULL',
			]);
	}

	public function safeDown() {
		$this->dropTable('{{%mata_contentblock}}');
	}
}