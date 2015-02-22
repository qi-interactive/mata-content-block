<?php

namespace mata\contentblock\models;

use Yii;

/**
 * This is the model class for table "contentblock".
 *
 * @property integer $Id
 * @property string $Title
 * @property string $Text
 * @property string $Region
 */
class ContentBlock extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'contentblock';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['Title', 'Text'], 'string'],
            [['Region'], 'required'],
            [['Region'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'Id' => 'ID',
            'Title' => 'Title',
            'Text' => 'Text',
            'Region' => 'Region',
        ];
    }
}