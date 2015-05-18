<?php
 
/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

namespace matacms\contentblock;

use mata\base\Module as BaseModule;

class Module extends BaseModule {

	public $runBootstrap = true;

	public function getNavigation() {
		return "/mata-cms/contentBlock/content-block";
	}
}
