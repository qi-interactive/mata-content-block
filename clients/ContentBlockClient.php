<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

namespace matacms\contentblock\clients;

use matacms\contentblock\models\ContentBlock;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use matacms\clients\SimpleClient;

class ContentBlockClient extends SimpleClient {

	/**
	 * If set to false, exceptions will be thrown if a Content Block does not exist, and it's proprety is requested.
	 * Check renderText()
	 */
	private $safeMode = true;

	private $_regionToFind;

	public function getText($region) {

		// the only way we can pass parameters to the closure below
		$this->_regionToFind = $region;

		$cb = ContentBlock::getDb()->cache(function ($db) {
		    return ContentBlock::find()->where(["Region" => $this->getRegionToFind()])->one();
		}, null, new \matacms\cache\caching\MataLastUpdatedTimestampDependency());

		$this->_regionToFind = null;

		if ($cb == null && $this->safeMode == false)
			throw new HttpException(sprintf("Could not find content block for region %s", $region));

		return $cb != null ? $cb->Text : "";
	}

	public function renderText($region) {
		echo $this->getText($region);
	}

	public function renderTextWithoutOuterParagraph($region) {
		$text = $this->getText($region);
		$text = preg_replace('/<p>/i','', $text, 1);
		$text = preg_replace('/<\/p>/i','', $text, -1);
		echo $text;
	}

	protected function getModel() {
		return new ContentBlock;
	}

	public function getRegionToFind() {
		$retVal = $this->_regionToFind;
		$this->_regionToFind = null;

		return $retVal;
	}

}