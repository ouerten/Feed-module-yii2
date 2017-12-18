<?php

namespace kouosl\sample\models;

use kouosl\sample\Module;
use Yii;

/**
 * This is the model class for table "samples".
 *
 * @property string $imageFile
 *
 *
 */
class UploadImage extends \yii\base\Model
{


    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $imageName;
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,jpg'],
        ];
    }

    public function upload()
    {

        if ($this->validate()) {

            $this->imageName = Yii::$app->security->generateRandomString(16) . '.' . $this->imageFile->extension;

            $imagePath = sprintf("%s/samples/%s",Yii::getAlias ( '@data' ),$this->imageName);

            if (!$this->imageFile->saveAs($imagePath)) {
                yii::$app->session->setFlash('flashMessage', ['type' => 'error', 'message' => Module::t('sample', 'File not uploaded.' )]);
            }

            return $this->imageName;

        } else {

            yii::$app->session->setFlash('flashMessage', ['type' => 'error', 'message' => Module::t('sample', 'Invalid File Type.' )]);

            return null;

        }
    }

}
