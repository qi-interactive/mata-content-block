<?php

/*
 * This file is part of the mata project.
 *
 * (c) mata project <http://github.com/mata/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace matacms\contentblock;

use mata\base\Module as BaseModule;

/**
 * This is the main module class for the Yii2-user.
 *
 * @property array $modelMap
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class Module extends BaseModule {

	public $runBootstrap = true;

	public function getNavigation() {

		$contentBlocks = \matacms\contentblock\models\ContentBlock::find()->all();
		$navigation = [];
		foreach ($contentBlocks as $contentBlock) {
			$navigation[] = [
				'label' => $contentBlock->getLabel(),
				'url' => "/mata-cms/contentBlock/content-block/update?id=$contentBlock->Id",
				'icon' => "/images/module-icon.svg"
			];
		}
		
		return $navigation;
	}
}