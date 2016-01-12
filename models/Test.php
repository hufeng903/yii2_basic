<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usertest".
 *
 * @property integer $id
 * @property string $remember
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usertest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['remember'], 'required'],
            [['remember'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'remember' => 'Remember',
        ];
    }

    public function formName(){
        return '';
    }
}
