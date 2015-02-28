<?php

namespace matacms\contentblock\controllers;

use matacms\contentblock\models\ContentBlock;
use matacms\contentblock\models\ContentBlockSearch;
use matacms\controllers\module\Controller;

/**
 * ContentBlockController implements the CRUD actions for ContentBlock model.
 */
class ContentBlockController extends Controller {

	public function getModel() {
		return new ContentBlock();
	}

	public function getSearchModel() {
		return new ContentBlockSearch();
	}
}
