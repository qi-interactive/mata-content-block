<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

namespace matacms\contentblock\models;

use Yii;
use mata\arhistory\behaviors\HistoryBehavior;

/**
 * This is the model class for table "contentblock".
 *
 * @property integer $Id
 * @property string $Title
 * @property string $Text
 * @property string $Region
 */
class ContentBlock extends \matacms\db\ActiveRecord {

    public static function tableName() {
        return 'mata_contentblock';
    }

    public function behaviors() {
        return [
            HistoryBehavior::className(),
        ];
    }

    public function rules() {
        return [
            [['Title', 'Text'], 'string'],
            [['Region'], 'required'],
            [['Region'], 'string', 'max' => 100]
        ];
    }

    public function attributeLabels() {
        return [
            'Id' => 'ID',
            'Title' => 'Title',
            'Text' => 'Text',
            'Region' => 'Region',
        ];
    }
}
