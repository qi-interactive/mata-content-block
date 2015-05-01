<?php

/*
 * This file is part of the mata project.
 *
 * (c) mata project <http://github.com/mata/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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