<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

use yii\db\Schema;
use yii\db\Migration;

class m150917_174000_add_language_column extends Migration {

	public function safeUp() {
		$this->addColumn('{{%mata_contentblock}}', 'Language', 'char(5) NULL');
	}

	public function safeDown() {
		$this->dropColumn('{{%mata_contentblock}}', 'Language');
	}
}
