<?php

namespace kouosl\ders\models;

use Yii;

/**
 * This is the model class for table "derss".
 *
 * @property integer $id
 * @property string $facebook_link
 * @property string $twitter_link
 */
class Derss extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'derss';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'facebook_link', 'twitter_link'], 'required'],
            [['id'], 'integer'],
            [['facebook_link', 'twitter_link'], 'string', 'max' => 500],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'facebook_link' => 'Facebook Link',
            'twitter_link' => 'Twitter Link',
        ];
    }
}
