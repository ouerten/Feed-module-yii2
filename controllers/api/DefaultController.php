<?php

namespace kouosl\sample\controllers\api;


class DefaultController extends \kouosl\base\controllers\api\BaseController
{
    public function actionIndex(){
        return ['status' => 1, 'action' => 'index','controller' => 'default'];
    }

}