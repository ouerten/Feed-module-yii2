<?php

namespace kouosl\sample\controllers\backend;

class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
