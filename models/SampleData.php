<?php

namespace kouosl\sample\models;

use Yii;

/**
 * This is the model class for table "sample_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sample_id
 *
 * @property Samples $sample
 */
class SampleData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sample_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'sample_id'], 'required'],
            [['sample_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['sample_id'], 'exist', 'skipOnError' => true, 'targetClass' => Samples::className(), 'targetAttribute' => ['sample_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'sample_id' => 'Sample ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSample()
    {
        return $this->hasOne(Samples::className(), ['id' => 'sample_id']);
    }
}
