<?php

namespace mata\contentblock\controllers;

use mata\contentblock\models\ContentBlock;
use mata\contentblock\models\ContentBlockSearch;
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
